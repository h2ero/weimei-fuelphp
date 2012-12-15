<?php

namespace app1;

/**
 * @name user
 * @package app1
 * @author h2ero <122750707@qq.com>
 * @link http://blog.h2ero.cn
 */
class Controller_Article extends Controller_Template {

	public function before() {
		parent::before();
	}

	public function action_add() {
		$this->template->title='添加文章';
		$this->template->content=\View::forge('content/article/add');
	}

	public function action_edit($id) {
		$this->template->title='编辑文章';
		$this->template->content=\View::forge('content/article/edit');

	}

	public function action_list($page) {
		$page=$page-1;
		$count = \DB::select(\DB::expr('count(*) as count'))->from('article')->execute();
		$config = array(
		    'pagination_url' => '/article/list/',
		    'total_items' => $count[0]['count'],
		    'per_page' => 10,
		    'uri_segment' => 2,
		);

		$pagination = \Pagination::forge('pic_pagination', $config);
		$this->template->set('pagination', $pagination->render(), FALSE);

		$this->template->content=\View::forge('content/article/list');
		$articles= Model_Article::get_list($page, $config['per_page']);
		$this->template->content->articles=$articles;
	}

	public function action_content($id) {
		$article=  Model_Article::get_content($id);
		if($article){
			$target_id="e$id";
			$this->template->content=\View::forge('content/article/content');

			$pattern = '/\[img\](\d+?)\[\/img\]/i';
			$article[0]['content']=preg_replace_callback($pattern,array($this,'get_pic'),$article[0]['content']);
			$this->template->content->set('article',$article[0],FALSE);
			$this->template->title = $article[0]['name'];

			//widget
			$this->template->content->like = \View::forge('template/widget/like');
			$this->template->content->like->like_count = $article[0]['like_count'];
			$this->template->content->like->like_user = Model_User::get_like_user($target_id);
			$this->template->content->comment = \View::forge('template/widget/comment');
			$this->template->content->comment->comment = Model_Comment::get_comment($target_id);
			$this->template->content->tag = \View::forge('template/widget/tag');
			$this->template->content->tag->tag = Model_Tag::get_tag($target_id);

		}else{
			\Response::redirect('error/404');
		}
	}
	private function get_pic($pid){
		$pic= Model_Pic::find($pid[1])->to_array();
		return '<img src="'.$pic['src'].'">';
	}
}

?>
