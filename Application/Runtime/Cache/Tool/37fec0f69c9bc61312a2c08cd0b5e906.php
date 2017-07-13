<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<title>CSS压缩-^(*￣(oo)￣)^</title>
	<meta name="keywords" content="在线,CSS,CSS 校验,格式化,xml转json 工具,在线工具,json视图,可视化,程序,服务器,域名注册,正则表达式,测试,在线json格式化工具,json 格式化,json格式化工具,json字符串格式化,json 在线查看器,json在线,json 在线验证,json tools online,在线文字对比工具" />
		<meta name="description" content="在线,CSS,CSS 校验,格式化,xml转json 工具,在线工具,json视图,可视化,程序,服务器,域名注册,正则表达式,测试,在线json格式化工具,json 格式化,json格式化工具,json字符串格式化,json 在线查看器,json在线,json 在线验证,json tools online,在线文字对比工具">
	<script src="//cdn.bootcss.com/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript" src="/Public/statics/layer/layer.js"></script>
	<link href="//cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
	<script src="//cdn.bootcss.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/Public/statics/self/css/main.css">
	<link href="/Public/statics/self/css/theme.css" rel="stylesheet">
	<!--<script src="http://7bv9ya.com1.z0.glb.clouddn.com/jquery.cookie.js"></script>-->
</head>
<body>
	<div class="navs">
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="<?php echo U('Tool/index/index');?>">公猪界</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li><a href="#">编码/加密 <span class="sr-only">(current)</span></a></li>
	        <!-- <li><a href="#">翻译 <span class="sr-only">(current)</span></a></li> -->
	        <li>
	        	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">网络 <span class="caret"></span></a>
	        	<ul class="dropdown-menu">
		        	<li><a href="#">获取你的IP</a></li>
		        	<li><a href="#">获取IP信息</a></li>
		        	<li><a href="#">IP定位周边信息</a></li>
		        	<li><a href="#">获取您的浏览器信息</a></li>
		        	<li><a href="#">常用USER_AGENT</a></li>
		        	<li><a href="#">TCP/IP子网掩码计算换算</a></li>
	        	</ul>
        	</li>
	        <li    class="dropdown active">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">格式化 <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="<?php echo U('Tool/format/jshtml_format');?>">Javascript/HTML压缩、格式化</a></li>
	            <li><a href="<?php echo U('Tool/format/csszip');?>">CSS压缩、格式化</a></li>
	            <li><a href="<?php echo U('Tool/format/xmlzip');?>">XML压缩、格式化</a></li>
	            <li role="separator" class="divider"></li>
	            <!-- <li><a href="#">SQL压缩、格式化</a></li> -->
	            <li><a href="<?php echo U('Tool/format/jsons');?>">JSON 在线解析工具</a></li>
<!-- 		            <li role="separator" class="divider"></li>
	            <li><a href="#">One more separated link</a></li> -->
	          </ul>
	        </li>
	      </ul>
	      <form class="navbar-form navbar-left">
	        <div class="form-group">
	          <input type="text" class="form-control" placeholder="Search">
	        </div>
	        <button type="submit" class="btn btn-default">Submit</button>
	      </form>
	      <ul class="nav navbar-nav navbar-right">
	        <li>
	        	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">文档<span class="caret"></span></a>
				
		        <ul class="dropdown-menu">
		            <li><a href="http://www.bejson.com/apidoc/jquery/" target="_blank">JQuery文档</a></li>
		            <li><a href="http://v3.bootcss.com/components/" target="_blank">Bootstrap文档</a></li>
		            <li><a href="https://cn.vuejs.org/v2/api/" target="_blank">vuejs</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="http://wiki.open.qq.com/wiki/%E9%A6%96%E9%A1%B5" target="_blank">腾讯开发平台</a></li>
		            <li><a href="https://mp.weixin.qq.com/wiki" target="_blank">微信公众平台开发文档</a></li>
		            <li><a href="https://pay.weixin.qq.com/wiki/doc/api/index.html" target="_blank">微信支付开发文档</a></li>
		             <li role="separator" class="divider"></li>
		            <li><a href="http://open.taobao.com/doc2/apiList.htm" target="_blank">淘宝开发文档</a></li>
		            <li><a href="https://doc.open.alipay.com/doc2/alipayDocIndex.htm" target="_blank">支付宝开发文档</a></li>
		            <li><a href="https://docs.open.alipay.com/399" target="_blank">支付宝开发商文档</a></li>
		             <li role="separator" class="divider"></li>
		            <li><a href="http://www.runoob.com/try/bootstrap/layoutit/" target="_blank">Bootstrap可视化布局</a></li>
		        </ul>
	        </li>
	        <li class="dropdown [more]">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">更多	 <span class="caret"></span></a>
	           <ul class="dropdown-menu">
		            <li><a href="#">Action</a></li>
		            <li><a href="#">Another action</a></li>
		            <li><a href="#">Something else here</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="<?php echo U('Tool/more/fanyimi');?>">英汉互译</a></li>
		        </ul>
	        </li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
</div>
	<!-- <p class="bg-warning msgs">...</p> -->
	<div class="left_kuang">
		<div class="left_main">
			<div class="min-title"	>
				<h1>CSS压缩/格式化工具</h1>
			</div>
			<iframe src="http://cssnb.com/iframe/cssiframe/css.html" style="width: 100%;height:430px;" frameborder="no" border="0" marginwidth="0" marginheight="0" scrolling="no" allowtransparency="yes"></iframe>
		</div>
	</div>
	<div class="right_kuang" >
	<div class="right_main">
		<!-- <strong><center><h4>最新更新</h4></center></strong> -->
		<div class="panel-heading"><h3 class="widget-title panel-title">最新更新</h3></div>
		<!-- <hr> -->
		<div style="margin-left: 15px"><p><a href="<?php echo U('Tool/format/jshtml_format');?>">Javascript/HTML压缩、格式化</a></p>
		<p><a href="<?php echo U('Tool/format/jsons');?>">JSON 在线解析工具</a></p>
		<p><a href="<?php echo U('Tool/more/fanyimi');?>">英汉互译</a></p>
		<p><a href="<?php echo U('Tool/format/xmlzip');?>">XML压缩、格式化</a></p>
		<p><a href="<?php echo U('Tool/format/csszip');?>">CSS压缩、格式化</a></p></div>
	</div> 
	<div class="right_main">
		
		<div class="panel-heading"><h3 class="widget-title panel-title">最新更新</h3></div>	

	</div>
	<div class="right_main_min">
		<div class="panel-heading"><h3 class="widget-title panel-title">每日一言：</h3></div>	
	</div>
</div>
	<div class="button_main">
	<div class="panel panel-default friend-link yinyin">
		<div class="panel-heading">友情链接（互换友链联系QQ1113249273，接受程序博客相关站点）</div>
		<div class="panel-body">
		    <a href="http://forum.laravelacademy.org" title="Laravel学院后花园和讨论区" target="_blank">Laravel学堂</a>
		    <a href="http://www.phpchina.com" title="最棒的PHP中文社区" target="_blank">PHPChina</a>
		    <!--<a href="http://laravel.so" title="Laravel技巧" target="_blank">Laravel.so</a>--> 
		    <a href="http://www.yuansir-web.com" title="Yuansir-web菜鸟|LNMP学习笔记" target="_blank">Yuansir-web菜鸟</a> 
		    <a href="https://www.insp.top" title="灵感-来自生活的馈赠" target="_blank">Inspirer</a> 
		    <a href="http://www.zhangxihai.cn" title="神奇的胖子" target="_blank">神奇的胖子</a>
		    <a href="http://www.chenruixuan.com" title="天宝寺||陈瑞轩" target="_blank">天宝寺||陈瑞轩</a>
		    <a href="http://www.uncletoo.com" title="专注PHP技术推广" target="_blank">UncleToo</a>
		    <a href="http://www.nginx.cn" title="Nginx中文站" target="_blank">Nginx中文站</a>
		    <a href="http://www.phpxs.com" title="编织未来 成就梦想" target="_blank">PHP新手</a>
		    <a href="https://laravist.com" title="Laravel Artist For Web Development" target="_blank">Laravist</a>
		    <a href="https://www.shiyanlou.com" title="第一家以实验为核心的IT在线教育平台" target="_blank">实验楼</a>
		    <a href="http://9iphp.com" title="All time is no time when it is past" target="_blank">Specs’ Blog</a>
		    <a href="http://yii-china.com" title="Yii中文网" target="_blank">Yii中文网</a>
		    <a href="http://www.joyphper.net" title="一个分享个人学习、开发经验的Blog" target="_blank">PHP爱好者</a>
		    <a href="http://www.daixiaorui.com" title="专注于PHP学习，PHP源码分享" target="_blank">PHP学习</a>
		    <a href="http://www.phpddt.com" title="关注PHP开发，提供原创PHP教程" target="_blank">PHP点点通</a>
		    <a href="http://www.phpsong.com" title="一个php程序猿分享的经验" target="_blank">小松博客</a>
		    <a href="http://www.itcast.cn/php" title="传智播客PHP学院" target="_blank">PHP培训</a>
		    <a href="http://www.91qingmai.com" title="互联网项目实训领导者" target="_blank">青麦学院</a>
		    <a href="http://www.gouguoyin.cn" title="挨踢男的葵花宝典" target="_blank">够过瘾</a>
		    <a href="http://www.5ibc.net/" title="专注PHP程序员一站式免费学习教程" target="_blank">PHP教程</a>
		<a href="http://www.webyang.net/" title="AndyYang的技术博客" target="_blank">WebYang.NET</a>
		    <a href="http://notes.cribug.com/" title="Cribug's Notes" target="_blank">Cribug's Notes</a>
		<a href="http://www.jsout.com/" title="专注Web前端开发" target="_blank">前端汇</a>
		    <a href="https://www.phpxy.com/" title="PHP学院" target="_blank">PHP学院</a>  
		    <a href="http://www.php-z.com/" title="PHP开发者技术交流社区" target="_blank">PHP-Z</a>
		    <a href="http://blog.tanteng.me/" title="一个专注现代化PHP开发的博客" target="_blank">小谈博客</a>
		    <a href="http://www.iwanli.me/" title="i晚黎博客致力于提供优质学习资源,分享个人笔记" target="_blank">i晚黎</a>
		    <a href="https://easywechat.org/" title="让微信开发更简单" target="_blank">EasyWeChat</a> 
		    <a href="http://baijunyao.com/" title="白俊遥博客" target="_blank">白俊遥博客</a>
		    <a href="http://www.maijindou.com/" title="magento" target="_blank">Magento</a>
		    <a href="http://blog.moocfans.cn/" title="慕课爱好者的博客" target="_blank">MoocFans</a>
		<a href="http://www.mysubmail.com" title="短信平台" target="_blank">短信平台</a>
		    <a href="https://www.getweapp.com" title="微信小程序学习社群" target="_blank">微信小程序学习社群</a>
		<a href="http://blog.lanyus.com/" title="PhpStorm破解" target="_blank">ilanyu's Blog</a>
		<a href="http://www.pythontab.com" title="Python中文学习社区" target="_blank">Python</a>
		    <a href="http://unun.in/" title="书生程序员" target="_blank">书生程序员</a>
		    <a href="https://www.96qbhy.com/" title="桥边红药的博客" target="_blank">桥边红药的博客</a>
		</div>
	</div>
</div>
</body>
</html>