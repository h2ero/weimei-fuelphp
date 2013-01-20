<?php

namespace app1;

/**
 * @name avatar
 * @package app1
 * @author h2ero <122750707@qq.com>
 * @link http://blog.h2ero.cn
 */
class Controller_Avatar extends Controller_Template {

    public function before() {
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

    public function action_content($id = 1) {
        $target_id = 'a' . $id;
        $this->template->content = \View::forge('content/avatar/content');
        $avatar = Model_Avatar::get_avatar($id);
        if ($avatar) {
            $this->template->content->avatar = $avatar;
            $this->template->title = $avatar[0]['name'];
            //widget
            $this->template->content->like = \View::forge('template/widget/like');
            $this->template->content->like->like_count = $avatar[0]['like_count'];
            $this->template->content->like->like_user = Model_User::get_like_user($target_id);
            $this->template->content->comment = \View::forge('template/widget/comment');
            $this->template->content->comment->comment = Model_Comment::get_comment($target_id);
            $this->template->content->tag = \View::forge('template/widget/tag');
            $this->template->content->tag->tag = Model_Tag::get_tag($target_id);
        } else {
            \Response::redirect('/error/404');
        }
    }
    public function action_upload(){

        $album_id=\Cookie::get('album_id');
        if(!$album_id){
            $album_id=Model_Avatar::init_upload();
            $album_id=$album_id[0]['id'];
            \Cookie::set('album_id', $album_id , 60 * 60 * 24*365);
        }
        $site_config=\Config::load('site',false,true);
        $this->template->js=array_merge($site_config['js'],$site_config['upload_js']);
        $this->template->css=array_merge($site_config['css'],$site_config['upload_css']);
        $this->template->vars=array(
            'user_id'=>1,
            'album_id'=>$album_id,
        );
        $this->template->content = \View::forge('content/avatar/upload');
        $this->template->content->catalogs=Model_Avatar::get_catalog();
    }
    public function action_do_upload(){

        //auto_render false
        $this->template='';
        $album_id=\Input::post('album_id');

        $avatar_path='uploads/2013/a'.date('m').'/';
        $config = array(
            'path' => DOCROOT.$avatar_path,
            'randomize' => true,
            'ext_whitelist' => array('img', 'jpg', 'jpeg', 'gif', 'png'),
        );

        //new folder
        if (!is_dir($config['path']))
            mkdir($config['path'],0755,true);
        
        \Upload::process($config);
        
        if (\Upload::is_valid())
        {
            \Upload::save();
            $file=\Upload::get_files();
            $src='/'.$avatar_path.$file[0]['saved_as'];
            Model_Avatar::add_avatar($src,$album_id);
        }else{
        }
        
        //$file=\Upload::get_errors();
        //echo $file[0]['error'];

    }
    public function action_submit_upload(){
        $album_id=\Cookie::get('album_id');
        $album_name=\Input::post('album_name');
        $catalog_id=\Input::post('catalog_id');
        Model_Avatar::update_avatar_album($album_id,$album_name,$catalog_id);
        \Cookie::delete('album_id');
    }

}

?>
