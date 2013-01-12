<?php
namespace app2;
/**
 * The Welcome Controller.
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 * 
 * @package  app
 * @extends  Controller
 */
class Controller_Avatar extends \app1\Controller_Avatar
{
    public function before(){
        parent::before();
    }
    public function action_list($page=1) {
        $page=$page-1;

        $count=\DB::select(\DB::expr('count(*) as count'))->from('avatar_album')->execute();

        $config = array(
            'pagination_url' => '/avatar/list/',
            'total_items' => $count[0]['count'],
            'per_page' => 12,
            'uri_segment' => 2,
        );

        $pagination = \Pagination::forge('avatar_pagination', $config);
        $this->template->set('pagination',$pagination->render(),FALSE);
        $avatar=Model_Avatar::get_list($page, $config['per_page']);
        if($avatar){

            $this->template->content=\View::forge('content/avatar/list');
            $this->template->content->avatar= $avatar;

        }else{

            \Response::redirect('error/404');

        }

    }

    public function action_alist($page=1,$class='all'){

        $page=$page-1;
        $catalog=\DB::select('id','name')->from('catalog')->where('dir_name','=',$class)->execute();
        $catalog_id=$catalog[0]['id'];
        $count=\DB::select(\DB::expr('count(*) as count'))->from('avatar_album')->where('catalog_id','=',$catalog_id)->execute();

        $config = array(
            'pagination_url' => "/$class/alist/",
            'total_items' => $count[0]['count'],
            'per_page' => 12,
            'uri_segment' => 2,
        );

        $pagination = \Pagination::forge('avatar_pagination', $config);
        $this->template->set('pagination',$pagination->render(),FALSE);
        $avatar=Model_Avatar::get_list($page, $config['per_page'],$catalog_id);
        if($avatar){

            $this->template->title = "QQ{$catalog[0]['name']}头像";
            $this->template->content = \View::forge('content/avatar/list');
            $this->template->content->avatar= $avatar;

        }else{

            \Response::redirect('error/404');

        }
    }
    public function action_content($id = 1) {
        $target_id = 'a' . $id;
        $this->template->content = \View::forge('content/avatar/content');
        $avatar = \app2\Model_Avatar::get_avatar($id);
        if ($avatar) {
            $this->template->content->avatar = $avatar;
            //$cid=$avatar[0]['catalog_id'];
            if(strpos($avatar['0']['name'],'头像')!==false){
                $this->template->title = $avatar[0]['name'];
                $this->template->keywords = "{$avatar[0]['name']}";
            }else{
                $this->template->title = $this->get_title($avatar[0]['name'],'avatar');
                $this->template->keywords = $this->get_title($avatar[0]['name'],'avatar');
            }

            //widget
            $this->template->content->like = \View::forge('template/widget/like');
            $this->template->content->like->like_count = $avatar[0]['like_count'];
            $this->template->content->like->like_user = \app1\Model_User::get_like_user($target_id);
            $this->template->content->comment = \View::forge('template/widget/comment');
            $this->template->content->comment->comment = \app1\Model_Comment::get_comment($target_id);
            $this->template->content->tag = \View::forge('template/widget/tag');
            $this->template->content->tag->tag = \app1\Model_Tag::get_tag($target_id);
        } else {
            \Response::redirect('/error/404');
        }
    }
}
