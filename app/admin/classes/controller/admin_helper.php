<?php
/**
 * @name Helper
 * @package name
 * @author h2ero <122750707@qq.com>
 * @link http://blog.h2ero.cn
 */
Class Admin_helper {
    public static function btn_group($action='action',$action_names=array()){
        $btn = ' < div class = "btn - group"> < button data - toggle = "dropdown" class = "btn dropdown - toggle">Action < span class = "caret"> </ span> </ button> < ul class = "dropdown - menu">';
        foreach ($action_names as $a) {
            $btn .= '<li><a href="#">Something else here</a></li>';
        }
        $btn .= '</ul></div>';
        return $btn;
    }

}

?>
