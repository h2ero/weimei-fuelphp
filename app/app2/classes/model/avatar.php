<?php
namespace app2;

/**
 * @name avatar
 * @package app1
 * @author h2ero <122750707@qq.com>
 * @link http://blog.h2ero.cn
 */

class Model_Avatar extends \app1\Model_Avatar {

    public static function get_avatar($id){

        return \DB::select('user_id','avatar_album.date','catalog_id','icon','src','name','like_count')
            ->from(self::$_table_name)
            ->where('album_id','=',$id)
            ->join('avatar_album')
            ->on('album_id','=','avatar_album.id')
            ->join('user')
            ->on('user_id','=','user.id')
            ->execute()->as_array();
    }
    public static function get_list($page,$count,$catalog_id=''){

        $DB = \DB::select('avatar_album.name','dir_name','avatar_album.id','src','username','user_id','date')
            ->from('avatar_album');
        if($catalog_id){
            $DB->where('catalog_id','=',$catalog_id);
        }

        return $DB->order_by('album_id','desc')
            ->limit($count)
            ->offset($page*$count)
            ->join('avatar')
            ->on('avatar.id','=','avatar_album.first_id')
            ->join('catalog')
            ->on('avatar_album.catalog_id','=','catalog.id')
            ->join('user')
            ->on('user.id','=','avatar_album.user_id')
            ->execute()
            ->as_array();
    }
}

?>
