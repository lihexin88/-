<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:71:"D:\phpStudy\WWW\zcgj\public/../application/admin\view\config\index.html";i:1540808165;s:59:"D:\phpStudy\WWW\zcgj\application\admin\view\common\top.html";i:1522230592;s:62:"D:\phpStudy\WWW\zcgj\application\admin\view\common\header.html";i:1530500030;s:63:"D:\phpStudy\WWW\zcgj\application\admin\view\common\sidebar.html";i:1532051872;s:62:"D:\phpStudy\WWW\zcgj\application\admin\view\common\bottom.html";i:1490663526;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta charset="utf-8" />
<title><?php if(isset($info['name'])): ?><?php echo $info['name']; ?> - <?php endif; ?> <?php echo $pagename; ?> -  <?php echo config('WEB_SITE_NAME'); ?>管理后台</title>
<meta name="description" content=" <?php echo config('WEB_SITE_DESCRIPTION'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
<link rel="stylesheet" href="/static/ace/css/bootstrap.css" />
<link rel="stylesheet" href="/static/ace/css/font-awesome.css" />
<link rel="stylesheet" href="/static/ace/css/ace-fonts.css" />
<link rel="stylesheet" href="/static/ace/css/ace.css" class="ace-main-stylesheet" id="main-ace-style" />
<script src="/static/ace/js/ace-extra.js"></script>
<script type="text/javascript">window.jQuery || document.write("<script src='/static/ace/js/jquery.js'>"+"<"+"/script>");</script>
<script type="text/javascript">if('ontouchstart' in document.documentElement) document.write("<script src='/static/ace/js/jquery.mobile.custom.js'>"+"<"+"/script>");</script>
<style type="text/css">
input[type="date"], input[type="time"], input[type="datetime-local"], input[type="month"] {
  line-height: inherit;
}
.help-inline{
  line-height: 32px;
}
select{
	height: 34px;
}
.main-container .table tr td {
	vertical-align: middle;
}
.main-container .table tr td a{
	margin-right:10px;
}
#preview{
  height: 120px;
  width: auto;
}
</style>
</head>
<style type='text/css'>
.notice {margin:0px auto;width:60%;font-size:16px;color:red;}
.notice div {text-indent:2em;}
</style>
<body class="no-skin">
<div id="navbar" class="navbar navbar-default">
  <div class="navbar-container" id="navbar-container">
  <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar"> <span class="sr-only">Toggle sidebar</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
    <div class="navbar-header pull-left"> <a href="<?php echo url('Index/index'); ?>" class="navbar-brand"> <small><?php echo \think\Config::get('WEB_SITE_NAME'); ?>网站管理后台 </small> </a> </div>
    <div class="navbar-buttons navbar-header pull-right" role="navigation">
      <ul class="nav ace-nav">
        <li class="light-blue"> <a data-toggle="dropdown" href="#" class="dropdown-toggle"> <img class="nav-user-photo" src="/static/ace/avatars/user.png" />
        <span class="user-info"><small>欢迎你</small><?php echo $_SESSION['think']['username']; ?></span> <i class="ace-icon fa fa-caret-down"></i> </a>
          <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
            <li> <a href="<?php echo url('Index/repwd'); ?>"> <i class="ace-icon fa fa-cog"></i> 修改密码 </a></li>
            <li> <a href="<?php echo url('Publics/logout'); ?>"> <i class="ace-icon fa fa-power-off"></i> 退出后台 </a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>
<div class="main-container" id="main-container"> 
  <!-- #section:basics/sidebar -->
  <div id="sidebar" class="sidebar ">
  <div class="sidebar-shortcuts" id="sidebar-shortcuts">
    <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
      <button class="btn btn-success">
      <i class="ace-icon fa fa-group"></i>
      </button>
      <button class="btn btn-info">
      <i class="ace-icon fa fa-list"></i>
      </button>
      <button class="btn btn-warning">
      <i class="ace-icon fa fa-arrow-circle-up"></i>
      </button>
      <button class="btn btn-danger">
      <i class="ace-icon fa fa-cog"></i>
      </button>
    </div>
    <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
      <span class="btn btn-success"></span>
      <span class="btn btn-info"></span>
      <span class="btn btn-warning"></span>
      <span class="btn btn-danger"></span>
    </div>
  </div>
  <ul class="nav nav-list">
    <?php if(is_array($sidebar) || $sidebar instanceof \think\Collection || $sidebar instanceof \think\Paginator): $i = 0; $__LIST__ = $sidebar;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
      <li <?php if($vo['name'] == $rule2): ?>class="open active"<?php endif; ?>><a href="<?php echo url('/'.$vo['name']); ?>" <?php if($vo['count'] != 0): ?>class="dropdown-toggle"<?php endif; ?>><i class="menu-icon fa fa-<?php echo $vo['icon']; ?>"></i><span class="menu-text"> <?php echo $vo['title']; ?> </span><b class="arrow <?php if($vo['count'] != 0): ?>fa fa-angle-down<?php endif; ?>"></b></a>
        <b class="arrow"></b>
        <ul class="submenu">
          <?php if(is_array($vo['child']) || $vo['child'] instanceof \think\Collection || $vo['child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub): $mod = ($i % 2 );++$i;?>
          <li <?php if($sub['name'] == $rule): ?>class="active"<?php endif; ?>><a href="<?php echo url('/'.$sub['name']); ?>"><i class="menu-icon fa fa-caret-right"></i> <?php echo $sub['title']; ?> </a><b class="arrow"></b></li>
          <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
      </li>
    <?php endforeach; endif; else: echo "" ;endif; ?>
  </ul>
  <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
    <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
  </div>
</div>
  <!-- /section:basics/sidebar -->
  <div class="main-content">
    <div class="main-content-inner"> 
      <!-- #section:basics/content.breadcrumbs -->
      <div class="breadcrumbs" id="breadcrumbs"> 
        <ul class="breadcrumb">
          <li> <i class="ace-icon fa fa-home home-icon"></i> <a href="<?php echo url('Index/index'); ?>"><?php echo config('WEB_SITE_NAME'); ?></a> </li>
          <li> <a href="<?php echo url('index'); ?>">系统设置</a> </li>
          <li class="active"><?php echo $pagename; ?></li>
        </ul>
        <!-- /.breadcrumb --> 
      </div>
      <!-- /section:basics/content.breadcrumbs -->
      <div class="page-content"> 
        <div class="page-header">
          <h1> <?php echo $pagename; ?> <small> <i class="ace-icon fa fa-angle-double-right"></i> 设置站点信息 </small> </h1>
        </div>
        <!-- /.page-header -->
        <div class="row">
          <div class="col-xs-12"> 
            <!-- PAGE CONTENT BEGINS -->
            <form class="form-horizontal form-post" role="form">
              <!-- #section:elements.form -->
              <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
              <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right"> <?php echo $vo['info']; ?> </label>
                <div class="col-sm-9">
                  <?php switch($vo['type']): case "0": ?><input name="<?php echo $vo['key']; ?>" type="text" class="col-xs-10 col-sm-5" placeholder="此处填写<?php echo $vo['info']; ?>" value="<?php echo $vo['value']; ?>" /><?php break; case "1": ?>
                      <textarea name="<?php echo $vo['key']; ?>" class="col-xs-10 col-sm-5" placeholder="这里填写<?php echo $vo['info']; ?>" ><?php echo $vo['value']; ?></textarea>
                    <?php break; case "2": ?>
                      <div class="col-sm-9">
                        <div class="radio" style="float:left">
                          <label> <input name="<?php echo $vo['key']; ?>" type="radio" class="ace" value="1" <eq name="vo['value']" value="1">checked</eq> > <span class="lbl"> 开启</span> </label>
                        </div>
                        <div class="radio" style="float:left">
                          <label> <input name="<?php echo $vo['key']; ?>" type="radio" class="ace" value="0" <eq name="vo['value']" value="0">checked</eq> > <span class="lbl"> 关闭</span> </label>
                        </div>
                      </div>
                    <?php break; case "3": ?>
                    	<div class="col-sm-9">
		                    <div class="col-sm-3 col-lg-3" style="margin-left:-30px;padding-right: 0px;width:50.5%">
		                        <input name="<?php echo $vo['key']; ?>" type="text" class="form-control" readonly placeholder="这里上传<?php echo $vo['info']; ?>" value="<?php echo $vo['value']; ?>" />
		                        <img name ="<?php echo $vo['key']; ?>" width='150px' height='150px' hidden="" id="<?php echo $vo['key']; ?>_view" <?php if($vo['value']): ?>src='<?php echo $vo['value']; ?>' style='display:inline;'<?php endif; ?> />
		                    </div>
		                    <div class="col-sm-2 col-lg-2" style="padding-left: 0px;">
		                        <a href="javascript:void(0);" class="btn btn-sm btn-success" id="<?php echo $vo['key']; ?>_upload" data-type="headimg">图片上传</a>
		                    </div>
		                </div>
                    <?php break; endswitch; ?>
                </div>
              </div>
              <?php endforeach; endif; else: echo "" ;endif; ?>     
              <div class="space-4"></div>
              <div class="clearfix form-actions">
                <div class="col-md-offset-3 col-md-9">
                  <button class="btn btn-info" type="submit" id="btn"> <i class="ace-icon fa fa-check bigger-110"></i> 保存 </button>
                </div>
              </div>              
            </form>
          </div>
          <!-- /.col --> 
        </div>
        <!-- /.row --> 
      </div>
      <!-- /.page-content --> 
    </div>
  </div>
  <!-- /.main-content -->
  <div class="footer">
    <div class="footer-inner"> 
      <div class="footer-content"> <span class="bigger-120"> <span class="blue bolder"><?php echo config('WEB_SITE_NAME'); ?> </span><?php echo WEB_VERSION; ?>版 </span></div>
    </div>
  </div>
  <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse"> <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i> </a>
</div>
<!-- /.main-container --> 
<!-- basic scripts --> 
<script type="text/javascript">if($(window).width()<1024)  $("#sidebar").addClass('menu-min');</script>
<script src="/static/ace/js/bootstrap.js"></script>
<script src="/static/ace/js/ace/ace.js"></script> 
<script src="/static/ace/js/ace/ace.sidebar.js"></script> 
<link rel="stylesheet" href="/static/layui/css/layui.css" media="all">
<script type="text/javascript" src="/static/layui/layui.js"></script>
<script src="/static/layui/layui.js"></script>
<script type="text/javascript">
	$('a[href="/Admin/Config/index"]').parents().filter('li').addClass('open active');
</script>
<!-- 上传单图片 -->
<script>
///// QQ二维码
layui.use('upload', function(){
  var upload = layui.upload;
  //执行实例
  var uploadInst = upload.render({
    elem: '#QQ_QRCODE_upload' //绑定元素
    ,url: "<?php echo url('Config/upload'); ?>" //上传接口
    ,data: {type: 'config/qq'}
    ,done: function(res){
      // console.log(res)
      //上传完毕回调
      if(res.status == 0){
        layer.msg(res.info, {icon: res.status,time: 1500});
      }else{
        // 显示img里边的图片
        $('#QQ_QRCODE_view').show();
        //返回路径
        $("input[name=QQ_QRCODE]").val(res.msg);
        //给IMG返回路径
        $("img[name=QQ_QRCODE]").attr("src",res.msg)
      }
    }
  });
});
///// QQ群二维码
layui.use('upload', function(){
  var upload = layui.upload;
  //执行实例
  var uploadInst = upload.render({
    elem: '#QQ_GROUP_QRCODE_upload' //绑定元素
    ,url: "<?php echo url('Config/upload'); ?>" //上传接口
    ,data: {type: 'config/qq_group'}
    ,done: function(res){
      // console.log(res)
      //上传完毕回调
      if(res.status == 0){
        layer.msg(res.info, {icon: res.status,time: 1500});
      }else{
        // 显示img里边的图片
        $('#QQ_GROUP_QRCODE_view').show();
        //返回路径
        $("input[name=QQ_GROUP_QRCODE]").val(res.msg);
        //给IMG返回路径
        $("img[name=QQ_GROUP_QRCODE]").attr("src",res.msg)
      }
    }
  });
});
///// 微信二维码
layui.use('upload', function(){
  var upload = layui.upload;
  //执行实例
  var uploadInst = upload.render({
    elem: '#WECHAT_QRCODE_upload' //绑定元素
    ,url: "<?php echo url('Config/upload'); ?>" //上传接口
    ,data: {type: 'config/wechat'}
    ,done: function(res){
      // console.log(res)
      //上传完毕回调
      if(res.status == 0){
        layer.msg(res.info, {icon: res.status,time: 1500});
      }else{
        // 显示img里边的图片
        $('#WECHAT_QRCODE_view').show();
        //返回路径
        $("input[name=WECHAT_QRCODE]").val(res.msg);
        //给IMG返回路径
        $("img[name=WECHAT_QRCODE]").attr("src",res.msg)
      }
    }
  });
});
///// 微信群二维码
layui.use('upload', function(){
  var upload = layui.upload;
  //执行实例
  var uploadInst = upload.render({
    elem: '#WECHAT_GROUP_QRCODE_upload' //绑定元素
    ,url: "<?php echo url('Config/upload'); ?>" //上传接口
    ,data: {type: 'config/wechat_group'}
    ,done: function(res){
      // console.log(res)
      //上传完毕回调
      if(res.status == 0){
        layer.msg(res.info, {icon: res.status,time: 1500});
      }else{
        // 显示img里边的图片
        $('#WECHAT_GROUP_QRCODE_view').show();
        //返回路径
        $("input[name=WECHAT_GROUP_QRCODE]").val(res.msg);
        //给IMG返回路径
        $("img[name=WECHAT_GROUP_QRCODE]").attr("src",res.msg)
      }
    }
  });
});
</script>
<script type="text/javascript">
$(".form-post").find('button:submit').click(function() {
    var btn = $(this);
    $.post("<?php echo url('index'); ?>", $(".form-post").serialize()).success(function(data) {
		$('#btn').text('正在保存').attr('disabled',"true");
    if (data.status === 0){
      layer.msg(data.info,{icon:data.status,time:1500},function(){
      	$('#btn').html('<i class="ace-icon fa fa-check bigger-110"></i> 保存');
      	$('#btn').removeAttr('disabled');
      	$('input[name=START_ID]').val('');
      });
    }else{
    	layer.msg(data.info,{icon:data.status,time:1500},function(){
    		location.href = location.href;
    	});
    }
  });
    return false;
});
</script> 
</body>
</html>