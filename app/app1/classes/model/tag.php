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
}
?>
