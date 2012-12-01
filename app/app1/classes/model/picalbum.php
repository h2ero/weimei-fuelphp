<?php
namespace app1;
/**
 * @name pic
 * @package name
 * @author h2ero <122750707@qq.com>
 * @link http://blog.h2ero.cn
 */

class Model_Picalbum extends \Orm\Model{
	protected static $_table_name='pic_album';
	protected static $_primary_key = array('id');
	protected static $_has_many=array(
	      		'pic' => array(
        			'key_from' => 'id',
        			'model_to' => 'Model_Pic',
        			'key_to' => 'albumId',
        			'cascade_save' => true,
        			'cascade_delete' => false,
			));
}
?>