<?php
namespace admin;
/**
 * @name article
 * @package name
 * @author h2ero <122750707@qq.com>
 * @link http://blog.h2ero.cn
 */

class Model_Link extends \Orm\Model{
    protected static $_table_name = 'link';
    public static function get_link(){
        return \DB::select('link.id','link.name','link',array('domains.name', 'domain_name'),'link.date_added')
            ->from('link')
            ->join('domains')
            ->on('domains.id', ' = ', 'domain_id')
            ->execute()
            ->as_array();
    }
}

