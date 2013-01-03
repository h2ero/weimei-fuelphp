<div id="left">
    <div id="upload">   
         <h2>发布头像</h2>
         <div class="item">
         <label>&nbsp;</label>
         <span style="color:red" id="error">&nbsp;</span>
     </div>
     <div class="item">
     <form action="/avatar/submit_upload" method="post">
         <label>图片组标题：</label>
         <span>
         <input type="text" value="" maxlength="20" size="31" name="album_name" id="title">
         <input type="text" name='first_id' hidden="hidden">
         </span>&nbsp;
     </div>
     <div class="item">
     <label>请选择分类：</label>
     <span>
         <select name="catalog_id" id="catalog" style="width: 120px">
         <option value="未分类">请选择分类</option>
             <?php foreach($catalogs as $c){?>
             <option value="<?=$c['id']?>"><?=$c['name']?></option>
             <?php } ?>
         </select>
     </span>&nbsp;<input type="submit" class="red-btn" value="保存上传头像">
 </form>
 </div>
     <div class="item">
         <div class="clear:right;"></div>
         <input id="file_upload" type="file" name="userfile" />
             <div id="showUploadPic"></div>
     </div>
             
         </div>
     </div>
<!---left end--->
<div id="right">
    <p class="upload-notice">
        请勿上传违规图片，参见<a href="http://www.cnnic.net.cn/html/Dir/2000/09/25/0652.htm" target="_blank">相关法规</a>。<br><br>上传图片必须宽度小于300px,高度大于100px。一次上传可选择不超过100个文件，上传完成后可选择文件继续上传。未出现“选择文件”按钮？请安装 <a target="_blank" href="http://get.adobe.com/cn/flashplayer/">Flash Player</a><br><br><br>您所上传的图片将位于公共领域且用户不能彻底删除图片，如不确定，请勿上传私人照片。
    </p>
 </div>
<!---right  end--->
