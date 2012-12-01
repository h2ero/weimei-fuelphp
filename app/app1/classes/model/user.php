<?php
namespace app1;
/**
 * @name like
 * @package name
 * @author h2ero <122750707@qq.com>
 * @link http://blog.h2ero.cn
 */

class Model_user extends \Orm\Model{
	protected static $_table_name='user';
	protected static $_primary_key = array('id');

	public static function get_like_user($id){
		$user=  self::query()->where('like_item','LIKE',"%$id,%")->get();
		return $user;
	}
}
?>
