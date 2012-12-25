<?php
namespace app1;

/**
 * @name pic
 * @package name
 * @author h2ero <122750707@qq.com>
 * @link http://blog.h2ero.cn
 */
class Model_Pic extends \Orm\Model {

    protected static $_table_name = 'pic';
    protected static $_primary_key = array('id');

    public static function get_list($page, $count) {

        return \DB::select('pic.name', 'pic.id','height', 'src', 'username', 'user_id', 'date')
                ->from('pic')
                ->order_by('id', 'desc')
                ->limit($count)
                ->offset($page * $count)
                ->join('user')
                ->on('user.id', '=', 'pic.user_id')
                ->execute()
                ->as_array();
    }
    public static function get_content($id){
        return \DB::select('name','src','location','pic.id','like_count','username','user_id','date','icon')
            ->from('pic')
            ->where('pic.id','=',$id)
            ->join('user')
            ->on('user.id','=','pic.user_id')
            ->execute()
            ->as_array();
    }
    public static function next_pre_pic($id){
        $data['pre']=\DB::select('src','id','name')
            ->from('pic')
            ->where("id",'=',\DB::expr("(SELECT max(id) FROM `pic` WHERE `id` < '$id')"))
            ->execute()
            ->as_array();
        $data['pre']=$data['pre'][0];

        $data['next']=\DB::select('src','id','name')
            ->from('pic')
            ->where("id",'=',\DB::expr("(SELECT min(id) FROM `pic` WHERE `id` > '$id')"))
            ->execute()
            ->as_array();
        $data['next']=$data['next'][0];
        return $data;
    }
    public static function user_pic(){
        return \DB::select('src','pic.id','pic.name')
            ->from('pic')
            ->limit(6)
            ->order_by(\DB::expr('RAND()'))
            ->execute()
            ->as_array();
    }

}

?>
