<?php
namespace app1;
/**
 * @name article
 * @package name
 * @author h2ero <122750707@qq.com>
 * @link http://blog.h2ero.cn
 */

class Model_Ads extends \Orm\Model{
    protected static $_table_name = 'ads';
    static function get_code($name){
        return \DB::select('code')
            ->from('ads')
            ->where('name','=',$name)
            ->execute()
            ->as_array();
    }
}

