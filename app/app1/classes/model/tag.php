<?php
namespace app1;
/**
 * @name like
 * @package name
 * @author h2ero <122750707@qq.com>
 * @link http://blog.h2ero.cn
 */

class Model_tag extends \Orm\Model{
	protected static $_table_name='tag';
	protected static $_primary_key = array('id');
	public static function get_tag($target_id){
		$tag=self::query()->where('target_id','LIKE',"%$target_id%")->get();
		return $tag;
	}

	//获取id或者tag的相关文档
 	public static  function search_tag($tag) {
		$target_id=\DB::select('target_id')
			->from('tag')
			->where('name',$tag)
			->execute()
			->as_array();
		$target_id=explode(',',$target_id[0]['target_id']);
		//pop ‘’
		array_pop($target_id);
		//a1,e2,p3 
		$a_id=$e_id=$p_id=array();
		foreach ($target_id as $t){
			switch ($t[0]){
				case 'a':
					$t=explode('a', $t);
					array_push($a_id, $t[1]);
					break;
				case 'e':
					$t=explode('e', $t);
					array_push($e_id, $t[1]);
					break;
				case 'p':
					$t=explode('p', $t);
					array_push($p_id, $t[1]);
					break;
			}
		}
		if ($a_id){
			$result = \DB::select('avatar_album.id','name','date','username')
				->from('avatar_album')
				->where('avatar_album.id','IN',$a_id)
				->join('user')
				->on('avatar_album.user_id','=','user.id')
				->execute()
				->as_array();
			$tags['a'] = $result;
		}
		if ($p_id){
			$result = \DB::select('pic.id','name','pic.date','username')
				->from('pic')
				->where('pic.id','IN',$p_id)
				->join('user')
				->on('pic.user_id','=','user.id')
				->execute()
				->as_array();
			$tags['p']=$result;
		}
		if ($e_id){
			$result=\DB::select('article.id','name','username','date')
				->from('article')
				->where('article.id','IN',$e_id)
				->join('user')
				->on('article.userId','=','user.id')
				->execute()
				->as_array();
			$tags['e']=$result;
		}
		return $tags;
	}
}
?>
