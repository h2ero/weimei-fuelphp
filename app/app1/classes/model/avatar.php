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
    public static function get_similar_list($id,$catalog_id){
        return \DB::select('avatar_album.id','avatar_album.name','catalog.dir_name')
            ->from('avatar_album')
            ->join('catalog')
            ->on('avatar_album.catalog_id','=','catalog.id')
            ->where('avatar_album.catalog_id','=',$catalog_id)
            ->where('avatar_album.id','<',$id)
            ->order_by('id','desc')
            ->limit(10)
            ->execute()
            ->as_array();
    }
    public static function get_list($page,$count){

        return \DB::select('name','avatar_album.id','src','username','user_id','date')
            ->from('avatar_album')
            ->order_by('album_id','desc')
            ->limit($count)
            ->offset($page*$count)
            ->join('avatar')
            ->on('avatar.id','=','avatar_album.first_id')
            ->join('user')
            ->on('user.id','=','avatar_album.user_id')
            ->execute()
            ->as_array();

    }
    public static function get_catalog(){
        return \DB::select('id','name')
            ->from('catalog')
            ->where('ref_table','=','avatar_album')
            ->execute()
            ->as_array();
    }
    public static function init_upload(){
        \DB::insert('avatar_album')
            ->set(array(
                'name'=>'',
                'date'=>date('Y-m-d H:i:s'),
                'user_id'=>'1',//\Cookie::get('user_id');
            ))
            ->execute();
        return \DB::select(\DB::expr('LAST_INSERT_ID() AS id'))
            ->execute();
    }
    public static function add_avatar($src,$album_id){
        \DB::insert('avatar')
            ->set(array(
                'src'=>$src,
                'album_id'=>$album_id,
            ))
            ->execute();
    }
    public static function update_avatar_album($album_id,$album_name,$catalog_id){
        $first=\DB::select('id')
            ->from('avatar')
            ->where('album_id','=',$album_id)
            ->order_by('id','desc')
            ->limit(1)
            ->execute();
        var_dump($first);
        $first_id=$first[0]['id'];
        echo $first_id;
        \DB::update('avatar_album')
            ->set(array(
                'name'=>$album_name,
                'catalog_id'=>$catalog_id,
                'first_id'=>$first_id,
            ))
            ->where('id','=',$album_id)
            ->execute();
    }
}

?>
