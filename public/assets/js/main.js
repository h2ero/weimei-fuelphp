/*Saturday, October 22 2011 02:33*/
	/*getDomain 获取顶级域名*/
	function getDomain() {
		url=document.domain;
		   var domainExt = ['com', 'org', 'gov'];
		   //如果是ip地址直接返回
		   if (/[0-9]/.test(url[url.length - 1])) {
		       return url;
		   } else {
		       var domain = '';
		       url = url.split('.');
		      if (url.length >= 2) {
		          domain += url.pop();
		          ext = url.pop()
		          domain = ext + '.' + domain;
		          //判断是否为demo.org.cn等情况
		          if (domainExt.indexOf(ext) != -1) {
		              domain = url.pop() + '.' + domain;
		              return domain;
		          } else {
		              return domain;
		          }
		      } else {
		          //返回是localhost没有后缀的情况
		          return url;
		      }
		  }
		}
/*Cookie*/
	var Cookie = {
			get : function(name) {
				var cookieName = encodeURIComponent(name) + "=", cookieStart = document.cookie.indexOf(cookieName), cookieValue = null;
				if(cookieStart > -1) {
					var cookieEnd = document.cookie.indexOf(";", cookieStart);
					if(cookieEnd == -1) {
						cookieEnd = document.cookie.length;
					}
					cookieValue = decodeURIComponent(document.cookie.substring(cookieStart + cookieName.length, cookieEnd));
				}
				return cookieValue;
			},
			set : function(name, value, expires, path, domain, secure) {
				var cookieText = encodeURIComponent(name) + "=" + encodeURIComponent(value);
				if( expires instanceof Date) {
				cookieText += ";expires=" + expires.toGMTString();
				}
				if(path) {
					cookieText += ";path=" + path;
				}
				if(domain) {
					cookieText += ";domain=" + domain;
				}
				if(secure) {
					cookieText += ";secure";
				}
				document.cookie = cookieText;
			},
			unset : function(name, path, domain, secure) {
				this.set(name, "", new Date(0), path, domain, secure);
			}
		}
	/*cookie*/

	/*登录信息*/
	var userId=Cookie.get('userId');
	var username=Cookie.get('username');
	var icon=decodeURI(Cookie.get('icon'));
	var session=Cookie.get('weimei');
	if(!session){
		Cookie.unset('userId','/','.'+getDomain());
		Cookie.unset('username','/','.'+getDomain());
	}
$(function() {
	//常用变量
	var tid=$('#tid').val();

    /*slider*/
	if($('#slider').length){
	$('#slider').nivoSlider();
	}
	/*fancybox*/
	$("#picOne a").fancybox();

	
	if(userId){
		$('#user-msg').html("你好,<a href='/user/i/"+userId+"'>"+username+"</a>&nbsp;&nbsp;<a class='link1' href='/user/set'>设置</a> <a class='link1' id='loginout' href='/user/login_out'>退出</a> ");

		}else{
		$('#user-msg').html("你好，请 <a class='link1' href='/user/login'>登录</a> 或者 <a class='link1' href='/user/reg'>注册</a>，<a class='link3' href='/user/lost_pwd'>忘记密码？</a>");
	}
	/*退出清除cookie*/
	$('#loginout').live('click',function(){
		Cookie.unset('userId','/','.'+getDomain());
		Cookie.unset('username','/','.'+getDomain());
		Cookie.unset('weimei','/','.'+getDomain());
		/*常用变量置空*/
		userId='';
	});
	
	/* 添加tag */
	$('#tag-btn').click(function(){
    if(!userId){
    	alert('只有登录用户才能添加标签');
    }else{
    	tags=$('#tags').val().trim();
    	if(!tags){
    	alert('tag为空，请输入要添加的Tag!');
    	}else{
		//替换掉全角的，
		var re=/，/g;
		tags=tags.replace(re,',');
		tag=tags.split(',');
		var id=tid;
		$.ajax({
			type:'post',
			url:'../../tag/add_tag',
			data:'tags='+tags+'&id='+id,
			success:function(msg){
				for(var i=tag.length-1;i>=0;i--){
					$('#labels-list').append('<a href="'+siteurl+'/tag/'+tag[i]+'">'+tag[i]+'</a>');
				}
				$('#tags').val('')
			}
		});	
    	}
    }
	});
	/*添加评论*/
	$('#comment-submit').click(function(){
		var comment=$('#comment-area').val();
		if(userId&&comment){
			var id=tid?tid:'u'+userId;
			$('#commets').append('<div class="commentsItem"><a href="/user/i/56" class="commentsAvatar"><img src="'+icon+'"></a><div class="reply-doc"><div class="commentsMsg"><a href="/user/i/'+userId+'">'+username+'</a>于1分钟前说|<a href="#reply" class="reply">回复</a></div><div class="cc-top"></div><div class="commentsContent"><p>'+comment+'</p></div><div class="cc-bottom"></div></div></div>');
			$.ajax({
				type:'post',
				url:siteurl+'/comment/add_comment',
				data:'comment='+comment+'&id='+id,
				success:function(msg){
					$('#comment-area').val('');
				}
			});
		}else if(userId){
			alert("评论不能为空");
		}else{
			alert("请登录后再进行评论");
		}
		
		});
	
	/*添加回复*/
	$(".reply").live('click',function(){
		var name=$('a:first',$(this).parent()).text();
		$('#comment-area').val('@'+name+' ').focus();
		return false;
	});

	/*头像预览*/
	if($("#avatarShowAll img").length){
	$('#avatarShowAll').prepend('<div id="show"><img src=""></div>');
	$("#avatarShowAll img").mousemove(function(event){
		$('#show img').attr('src',$(this).attr('src'));
		var top = document.body.scrollTop || document.documentElement.scrollTop;
		$('#show').show().css('left',20+event.clientX+'px').css('top',20+event.clientY+top+'px');
	}).mouseout(function(){
		$('#show').hide();
	});
	}
	/*修改标题*/
	if($('#r-u-a span').length&&$('#left h1').length&&tid[0]=='p'){
		var title=$('#left h1');
     	//没有标题的文档插入未命名
		var t=title.text();
		if(t==''){
			title.text('未命名');
			t=title.text();
		}
		if($('#r-u-a span a').text()==$('#user-msg a:first').text()&&userId)
			$('#r-u-a').append("<div class='edit'><a href='#' class='red-btn'>修改标题</a></div>");
		$('#r-u-a .edit').click(function(){
			title.html("<input type='text' id='change-title' name='title' class='input-r'/><input class='red-btn'  type='button' id='rename-btn'  value='确认修改'/><input id='cancel-change' class='red-btn'  type='button' value='取消'/>");
		});
		//提交修改后的标题
		$('#rename-btn').live('click',function(){
			if($('#change-title').val()=='')
				alert('标题不能为空!');
			else{
			   //ajax
			   $.ajax({
				   type : 'POST',
				   url : siteurl+'/pic/rename',
				   data : 'id='+tid.replace('p','')+'&name='+$('#change-title').val(),
				   success : function(msg) {
					   title.text($('#change-title').val());
				   }
			   });
		   
			}
		});
		//取消恢复原来标题
		$('#cancel-change').live('click',function(){
		   title.text(t);
		});
	}
	/*修改文章*/
	if($('#r-u-a span a').text()==$('#user-msg a:first').text()&&userId&&tid[0]=='e'){
		$('#r-u-a').append("<div class='edit'><a href='"+siteurl+'article/edit?id='+tid.replace(tid[0],'')+"' class='red-btn'>编辑文章</a></div>");
	}
	/*前期tag没有标题补全*/
	$('.e-t').each(function(){
		if($(this).text()=='')
			$(this).text('未命名');
	});
	/*提交数据后禁用submit*/
	//$("input['submit']").live('click',function(){
		//$(this).attr('disable','disabled');
	//});
	/*like*/
	$('#like').click(function(){
		if(userId){
		   $.ajax({
			   type : 'POST',
			   url : '/like',
			   data :'id='+tid,
			   success : function(msg) {
				   var likeCount=$(".like-count");
				   likeCount.text(parseInt(likeCount.text())+parseInt(msg));
			   }
		   });
		}else{
			alert('对不起，只有登录才能点击喜欢 : )');
		}
		return false;
	});
	/*like user*/
	if($('#like-u')){
		//判断是否已经喜欢
		var likeUserId=$('#like-u').attr('likeUserId');
		var liked=new Array();
		$('#list-like-u a').each(function(){
			url=$(this).attr('href');
			pattern=/(\d+)$/;
			res=pattern.exec(url);
			liked.push(res[0]);
		});
		if(liked.indexOf(userId)!=-1)
			$('#like-u').text('已喜欢');
		$('#like-u').click(function(){
			if(userId){
				//reg exp 获取likeUserId 通过用户头像 id.jpg
			   $.ajax({
				   type : 'POST',
				   url : '/user/like',
				   data :'uid='+userId+'&likeUserId='+likeUserId,
				   success : function(msg) {
					   $('#like-u').text('已喜欢');
				   }
			   });
			}else{
				alert('对不起，只有登录才能点击喜欢 : )');
			}
			return false;
		});
	}
	/*
	* 数据验证
	*/
	//reg
	$("#regForm input[type=text],#regForm input[type=password]").focusout(function(){
		if(!$(this).val()){
			$(this).parent().find('.error').text('对不起！该选项不能为空.');
			$('#regBtn').attr('disabled','true');
		}
		else{
			$(this).parent().find('.error').text('');
			$('#regBtn').removeAttr('disabled');
			if($(this).attr('id')=='email'){
				pattern=/^[\w|.]+@\w+\.[a-z]{2,}$/;
				if(!pattern.test($(this).val())){
					$(this).parent().find('.error').text('对不起！邮箱格式不对.');
					$('#regBtn').attr('disabled','true');
				}
			}
			else if($(this).attr('id')=='password'){
				pattern=/^\w{6,12}$/;
				if(!pattern.test($(this).val())){
					$(this).parent().find('.error').text('对不起！密码格式不对.');
					$('#regBtn').attr('disabled','true');
				}
			}
		}
		
	});
	
});
