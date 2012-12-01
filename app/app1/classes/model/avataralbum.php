<?php
namespace app1;

/**
 * @name Avataralbum
 * @package app1
 * @author h2ero <122750707@qq.com>
 * @link http://blog.h2ero.cn
 */

class Model_Avataralbum extends \Orm\Model{

	protected static $_table_name='avatar_album';
	protected static $_primary_key = array('id');
	protected static $_has_many = array(
	    	'avatar' => array(
    			'model_to' => '\\app1\\Model_Avatar',
    			'key_from' => 'id',
    			'key_to' => 'album_id',
    			'cascade_save' => false,
    			'cascade_delete' => false,
		),
	    );
}
?>
