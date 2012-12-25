<?php
namespace app1;
/**
 * @name article
 * @package name
 * @author h2ero <122750707@qq.com>
 * @link http://blog.h2ero.cn
 */

class Model_Article extends \Orm\Model{
    protected static $_table_name='article';
    protected static $_primary_key = array('id');

    public static function get_content($id){
        return \DB::select('name','content','nail','like_count','username','user_id','date','icon')
            ->from('article')
            ->where('article.id','=',$id)
            ->join('user')
            ->on('user.id','=','article.user_id')
            ->execute()
            ->as_array();
    }
    public static function get_list($page,$count){
        return \DB::select('article.id','nail','user_id','description','date','name','username')
            ->from('article')
            ->join('user')
            ->on('user.id','=','article.user_id')
            ->limit($count)
            ->offset($page * $count)
            ->order_by('id','desc')
            ->execute()
            ->as_array();

    }
}
?>
