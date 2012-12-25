<?php
namespace app1;
/**
 * @name like
 * @package name
 * @author h2ero <122750707@qq.com>
 * @link http://blog.h2ero.cn
 */

class Model_Comment extends \Orm\Model{
    protected static $_table_name='comment';
    protected static $_primary_key = array('id');
    protected static $_has_one=array(
            'user'=>array(
                'key_from'=>'user_id',
                'key_to'=>'id',
                'model_to'=>'\\app1\\Model_User',
                'cascade_save' => false,
                'cascade_delete' => false,
        ),
    );
    public static function get_comment($target_id){
        $comment=self::query()->where('target_id','=',$target_id)->related('user')->get();
        return $comment;
    }
}
?>
