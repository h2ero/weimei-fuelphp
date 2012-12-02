<?php

namespace app1;

/**
 * 
 */
class Controller_Pic extends Controller_Template {

	public function before() {
		parent::before();
	}

	public function action_list($page) {

		$count = \DB::select(\DB::expr('count(*) as count'))->from('pic')->execute();
		$config = array(
		    'pagination_url' => '/pic/list/',
		    'total_items' => $count[0]['count'],
		    'per_page' => 21,
		    'uri_segment' => 2,
		);

		$pagination = \Pagination::forge('pic_pagination', $config);
		$this->template->set('pagination', $pagination->render(), FALSE);
		$pic = Model_Pic::get_list($page, $config['per_page']);

		if ($pic) {

			$this->template->content = \View::forge('content/pic/list');
			$this->template->content->pic= $pic;
			$this->template->content->now_count= $count[0]['count'].'-'.($page+1)*$config['per_page'];

		} else {

			\Response::redirect('error/404');
		}
	}
	public function action_content($id) {
		$pic=Model_Pic::get_content($id);
		if($pic){
			$target_id="p$id";
			$this->template->content = \View::forge('content/pic/content');
			$this->template->content->next_pre=Model_Pic::next_pre_pic($id);
			$this->template->content->user_pic=Model_Pic::user_pic();

			$this->template->content->pic=$pic[0];
			$this->template->title = $pic[0]['name'];
			//widget
			$this->template->content->like = \View::forge('template/widget/like');
			$this->template->content->like->like_count = $pic[0]['like_count'];
			$this->template->content->like->like_user = Model_User::get_like_user($target_id);
			$this->template->content->comment = \View::forge('template/widget/comment');
			$this->template->content->comment->comment = Model_Comment::get_comment($target_id);
			$this->template->content->tag = \View::forge('template/widget/tag');
			$this->template->content->tag->tag = Model_Tag::get_tag($target_id);
		}else{
			\Response::redirect('error/404');
		}
	}

}

