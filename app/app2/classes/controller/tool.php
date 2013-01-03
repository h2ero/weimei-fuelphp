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
class Controller_Tool extends \Controller
{
    //for dede
    public function action_import_tag(){
        $tags=\DB::select('aid','tag')
            ->from('dede_taglist')
            ->where('typeid','IN',array(4,5,6,7,11,9,13,14,15,17,20,21,22,23,24,25,26))
            ->execute()
            ->as_array();
        foreach($tags as $t){

            $res=\DB::select('id','target_id')
                ->from('tag')
                ->where('name','=',$t['tag'])
                ->execute()
                ->as_array();
            if(isset($res[0]['id'])){
                $id=$res[0]['id'];
                $aid=$t['aid'];
                $target_id=$res[0]['target_id'];
                echo "UPDATE `tag` SET target_id=concat(target_id,'a$aid,'),sum=sum+1 where id=$id";
                \DB::query("UPDATE `tag` SET target_id=concat(target_id,'a$aid,'),sum=sum+1 where id=$id")->execute();
            }else{
                echo "INSERT INTO `tag`(`name`, `target_id`,`sum`) VALUES ('{$t['tag']}','a{$t['aid']},',1)";
                \DB::query("INSERT INTO `tag`(`name`, `target_id`,`sum`) VALUES ('{$t['tag']}','a{$t['aid']},',1)")->execute();
            }
        }
    }
}
