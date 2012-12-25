<?php
namespace app1;

/**
 * @name $globalVariableName
 * @package name
 * @author h2ero <122750707@qq.com>
 * @link http://blog.h2ero.cn
 */

class Controller_Comment extends Controller_Template{
    public static function get_comment($target_id){

        $comment=Model_Comment::query()->where('target_id','=',$target_id)->related('user')->get();
        return $comment;

    }

}
?>
