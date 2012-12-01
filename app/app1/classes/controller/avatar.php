<?php
namespace app1;
/**
 * @name avatar
 * @package app1
 * @author h2ero <122750707@qq.com>
 * @link http://blog.h2ero.cn
 */

class Controller_Avatar extends Controller_Template{

	public function before()
	{
		parent::before();
	}

	public function action_index()
	{

	}

	public function action_content($id=4)
	{
		$target_id='a'.$id;
		$this->template->content=\View::forge('content/avatar/content');
		$avatar=Model_Avataralbum::query()->related('avatar')->where('id',$id)->get();
		$this->template->content->avatar=$avatar;
		$this->template->content->like=\View::forge('template/widget/like');
		$this->template->content->like->like_count=$avatar[1]['like_count'];
		$this->template->content->like->like_user= Model_User::get_like_user($target_id);
		$this->template->content->comment=\View::forge('template/widget/comment');
		$this->template->content->comment->comment=  Model_Comment::get_comment($target_id);
	}

}
?>
