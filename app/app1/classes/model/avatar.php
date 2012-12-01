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
}

?>
