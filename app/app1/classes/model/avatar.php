<?php
namespace app1;

/**
 * @name avatar
 * @package app1
 * @author h2ero <122750707@qq.com>
 * @link http://blog.h2ero.cn
 */

class Model_Avatar extends \Orm\Model {

    protected static $_table_name='avatar';
    protected static $_primary_key = array('id');
    protected static $_conditions = array(
        'order_by' => array('id' => 'desc'),
            );

    public static function get_avatar($id){

        return \DB::select('user_id','avatar_album.date', 'icon','src','name','like_count')
            ->from(self::$_table_name)
            ->where('album_id','=',$id)
            ->join('avatar_album')
            ->on('album_id','=','avatar_album.id')
            ->join('user')
            ->on('user_id','=','user.id')
            ->execute()->as_array();
    }
    public static function get_list($page,$count){

        return \DB::select('name','avatar_album.id','src','username','user_id','date')
            ->from('avatar_album')
            ->order_by('album_id','desc')
            ->limit($count)
            ->offset($page*$count)
            ->join('avatar')
            ->on('avatar.id','=','avatar_album.id')
            ->join('user')
            ->on('user.id','=','avatar_album.user_id')
            ->execute()
            ->as_array();

    }
}

?>
