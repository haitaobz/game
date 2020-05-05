<a href="http://www.100sucai.com" style="display:none">http://www.100sucai.com</a>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<head>
	<title>sharecafe  website for high end mobiles,like samsung nokia mobile website templates for free | Singlepage :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div id="container">
  	<!---start-wrap---->
		<div class="wrap">
			<!---start-sidebar---->
			<div id="w3-universal-nav">
    	<ul id="header">
    		<div class="logo">
    		<a href="index.html"><img src="images/logo.png" alt=""/></a>
    		</div>
    		<div class="top-socialicons">
    			<ul>
    				<li><a class="icon1" href="#"></a></li>
    				<li><a class="icon2" href="#"></a></li>
    				<li><a class="icon3" href="#"></a></li>
    				<li><a class="icon4" href="#"></a></li>
    			</ul>
    		</div>
    		<div class="clear"> </div>
    	</ul>
    	<ul id="w3-menu-links" style="display: none;">
    	</ul>
    		</div>
</div>
<!-- The menu -->
  <nav class="clearfix">
  	<a href="#Menu">Menu<img class="menu" src="images/nav-icon.png" title="Menu"></a>
				
	</nav>
	<div class="clear"> </div>
			<div class="left-sidebar">
					</div>
					<div id="main" role="main">
					<!----start-innerpage---->
			<div class="single-page">
				<div class="blog-content1">
					<div class="b-content-header">
						<h3><a href="#">录入信息后请点击提交</a></h3>
						<ul>
			    			<li><a href="#"><img src="images/cal.png" alt="">February 21, 2013</a></li>
			    			<li><a href="#"><img src="images/admin.png" alt="">Admin</a></li>
			    			<li><a href="#"><img src="images/post-in.png" alt="">10</a></li>
			    		</ul>
		    		</div>
		    		<div class="b-content-main">
		    			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,Sed ut perspiciatis unde omnis iste natus error sit voluptatem.<a href="#">...</a></p>
<textarea name="copy" id="copy" cols="30" rows="19">
区服系统选项:<?php echo $_POST["r1"];?>
  
账号性别:<?php echo $_POST["r2"]; ?>
  
贵族等级:<?php echo $_POST["r3"]; ?>

具体大区:<?php echo $_POST["r4"]; ?>

英雄数量:<?php echo $_POST["r5"]; ?>

皮肤数量:<?php echo $_POST["r6"]; ?>

五级铭文数量:<?php echo $_POST["r7"]; ?>

成就等级:<?php echo $_POST["r8"]; ?>

王者印记:<?php echo $_POST["r9"]; ?>

当前段位:<?php echo $_POST["r10"]; ?>

限定英雄:<?php $area_arr = array(); if($_GET['action']=="submit"){ $area_arr = $_POST['r11']; } 
         foreach ($area_arr as $k=>$v){ echo $v.","; } ?> 
荣耀水晶详细:<?php $area_arr = array(); if($_GET['action']=="submit"){ $area_arr = $_POST['r12']; } 
         foreach ($area_arr as $k=>$v){ echo $v.","; } ?> 
限定皮肤:<?php $area_arr = array(); if($_GET['action']=="submit"){ $area_arr = $_POST['r13']; } 
         foreach ($area_arr as $k=>$v){ echo $v.","; } ?> 
史诗皮肤:<?php $area_arr = array(); if($_GET['action']=="submit"){ $area_arr = $_POST['r14']; } 
         foreach ($area_arr as $k=>$v){ echo $v.","; } ?> 
传说皮肤:<?php $area_arr = array(); if($_GET['action']=="submit"){ $area_arr = $_POST['r15']; } 
         foreach ($area_arr as $k=>$v){ echo $v.","; } ?> 
内测及战令英雄皮肤:<?php $area_arr = array(); if($_GET['action']=="submit"){ $area_arr = $_POST['r16']; } 
         foreach ($area_arr as $k=>$v){ echo $v.","; } ?> 
</textarea>

<script>
    function Copy() {
        // 获取Dom节点
       var copy = document.getElementById('copy');
        //  用select函数将文本内容选中
        copy.select();
        document.execCommand('Copy');
        alert('复制成功')

    }        
</script>
<br> 
<p class="form-submit" class="comments-area"><input type="button" value="点击复制给客服" onclick="Copy()" ></p>
<form action="?action=submit" method="post" class="comments-area">
  <h3><img src="images/comment1.png" title="comment" />区服系统选项</h3>
  <input class="ipt" type="radio" value="苹果QQ" name="r1">苹果QQ 
  <input class="ipt" type="radio" value="苹果VX" name="r1">苹果微信 
  <input class="ipt" type="radio" value="安卓QQ" name="r1">安卓QQ 
  <input class="ipt" type="radio" value="安卓VX" name="r1">安卓微信
  <h3><img src="images/comment1.png" title="comment" />账号性别</h3>
  <dd><input class="ipt" type="radio" value="男" name="r2">男</dd> 
  <dd><input class="ipt" type="radio" value="女" name="r2">女</dd>
  <h3><img src="images/comment1.png" title="comment" />贵族等级</h3>
  <dd>VIP<input class="ipt txt txt1" type="text" name="r3"><span>请输入数字</span></dd> 
  <h3><img src="images/comment1.png" title="comment" />具体大区</h3>
  <dd><label> <input class="ipt txt txt1" type="text" name="r4"><span>例：128区</span></label></dd> 
  <h3><img src="images/comment1.png" title="comment" />英雄数量</h3>
  <dd><label> <input class="ipt txt txt1" type="text" name="r5"><span>请输入数字</span></label></dd> 
  <h3><img src="images/comment1.png" title="comment" />皮肤数量</h3>
  <dd><label> <input class="ipt txt txt1" type="text" name="r6"><span>请输入数字</span></label></dd> 
  <h3><img src="images/comment1.png" title="comment" />五级铭文数量</h3>
  <dd><label> <input class="ipt txt txt1" type="text" name="r7"><span>请输入数字</span></label></dd> 
  <h3><img src="images/comment1.png" title="comment" />荣耀典藏数量</h3>
  <dd><label> <input class="ipt txt txt1" type="text" name="r8"><span>请输入数字</span></label></dd> 
  <h3><img src="images/comment1.png" title="comment" />王者印记</h3>
  <dd><label> <input class="ipt txt txt1" type="text" name="r9"><span>请输入数字</span></label></dd> 
  <h3><img src="images/comment1.png" title="comment" />当前段位</h3>
  <dd><label> <input class="ipt txt txt1" type="text" name="r10"><span>例：钻石4</span></label></dd> 
  <h3><img src="images/comment1.png" title="comment" />限定英雄</h3>
  <input name="r11[]" type="checkbox" value="韩信">韩信
  <input name="r11[]" type="checkbox" value="娜可露露">娜可露露
  <input name="r11[]" type="checkbox" value="橘右京">橘右京
  <input name="r11[]" type="checkbox" value="不知火舞">不知火舞
  <h3><img src="images/comment1.png" title="comment" />荣耀水晶详细</h3>
  <label> <input name="r12[]" type="checkbox" value="活力突击">活力突击</label>
  <label> <input name="r12[]" type="checkbox" value="无限飓风号">无限飓风号</label>
  <label> <input name="r12[]" type="checkbox" value="全息碎影">全息碎影</label>
  <label> <input name="r12[]" type="checkbox" value="武则天">武则天</label>
  <label> <input name="r12[]" type="checkbox" value="天鹅之梦">天鹅之梦</label>
  <label> <input name="r12[]" type="checkbox" value="大秦宣太后">大秦宣太后</label>
  <label> <input name="r12[]" type="checkbox" value="杀手不太冷">杀手不太冷</label>
  <label> <input name="r12[]" type="checkbox" value="星空梦想">星空梦想</label>
  <label> <input name="r12[]" type="checkbox" value="倪克斯神谕">倪克斯神谕</label>
  
  <h3><img src="images/comment1.png" title="comment" />限定皮肤</h3>
  <dd>
  <?php 
  $pifu = array("玄武志","无限飓风号","游园惊梦","如梦令(后羿)","如梦令(嫦娥)","幽恒","玄嵩","时之彼端","岱宗","飞衡","太华","猫影幻舞","天狼征服者","梁祝","玩趣恶龙","神奇女侠","云霓雀翎","冰封战神","凤求凰","天魔缭乱","至尊宝","麒麟志","奇迹圣诞","朱雀志","白虎志","美猴王","青龙志","霸王别姬（男）","霸王别姬（女）","一生所爱","冰霜恋舞曲","大圣娶亲","逐梦之影","逐梦之翼","逐梦之光","逐梦之音","逐梦之星","圣诞老人","梅西","蜜橘之夏","纯白花嫁","真爱至上","青春决赛季","武陵仙君","热情桑巴","辉光之辰","永耀之星","云端筑梦师","凤凰于飞","魔法小厨娘","引擎之心","死亡摇滚","职业王牌","嘻哈天王","死神来了","华尔街大亨","天堂福音","仙境爱丽丝","纽约教父","幻想奇妙夜","化身博士","火炮千金","黑猫爱糖果","进击墨子号","游园惊梦","王者之锤","狮心王","蜃楼王","妖精王","炼金王","凯尔特女王","狰","饕餮","烛龙","重明","拳王","穷奇","御狮","遇见飞天","幻乐之宴","太乙真人","猎兽之王","白昼王子","天狼狩猎者"); 
  foreach ($pifu as $value) {
    echo "<label> <input name=\"r15[]\" type=\"checkbox\" value=\"$value\">$value</label>";
  }
  ?>
  </dd>

	<h3><img src="images/comment1.png" title="comment" />史诗皮肤</h3>
  <dd>
  <?php 
  $pifu = array("遇见神鹿","修罗","地狱岩魂","魅语","青蛇","白蛇","晚萤","箭雨风息","暗隐猎兽者","无限星赏官","猫狗日记（孙策）","猫狗日记（大乔）","暗夜贵公子","星夜王子","功夫厨神","节奏热浪","摇滚巨星","冰冠公主","龙骑士","电玩小子","偶像歌手","暗夜猫娘","苍穹之光","白龙吟","水晶猎龙者","暗隐猎兽者","特工魅影","逐浪之夏","天才门将","舞动绿茵","心灵骇客","心灵战警","鬼剑武藏","千年之狐","乘风破浪","缤纷独角兽","末日机甲（吕布）","幽灵船长","圣诞恋歌","圣诞狂欢","黄金分割率","紫霞仙子","德古拉伯爵","魅力维加斯","曙光守护者"); 
  foreach ($pifu as $value) {
    echo "<label> <input name=\"r14[]\" type=\"checkbox\" value=\"$value\">$value</label>";
  }
  ?>
  </dd>
  
	<h3><img src="images/comment1.png" title="comment" />传说皮肤</h3>
  <dd>
  <?php 
  $pifu = array("未来机甲","黄金白羊座","黄金狮子座","久胜战神","幽冥火","幽冥之眼","冠军飞将","金色仲夏夜","胖达荣荣","黄金射手座","海洋之心","地狱火","仲夏夜之梦","末日机甲（孙尚香）","地狱之眼","超时空战士","幻海之心"); 
  foreach ($pifu as $value) {
    echo "<label> <input name=\"r15[]\" type=\"checkbox\" value=\"$value\">$value</label>";
  }
  ?>
  </dd>
  
	<h3><img src="images/comment1.png" title="comment" />内测及战令英雄皮肤</h3>
  <dd>
  <?php 
  $pifu = array("蔷薇恋人",
    "优雅恋人", 
    "艾琳（有皮肤）", 
    "艾琳（无皮肤）", 
    "典韦（蓝屏警告）", 
    "鲁班七号（狮舞东方）", 
    "兰陵王（驱魔猎人）", 
    "周瑜（赤莲之焰）", 
    "李元芳（银河之约）", 
    "沈梦溪（星空之诺）", 
    "(必选项)备注：禁止挂机，禁止动用背包里面任何东西和改名字以及金币和钻石，和删好友退战队等，发现后立刻修改" ); 
  foreach ($pifu as $value) {
    echo "<label> <input name=\"r16[]\" type=\"checkbox\" value=\"$value\">$value</label>";
  }
  ?>
  </dd>
  <input type="submit" value="提交">
</form>

					<script type="text/javascript" src="js/jquery.lightbox.js"></script>
					   <link rel="stylesheet" type="text/css" href="css/lightbox.css" media="screen" />
						  <script type="text/javascript">
						    $(function() {
						        $('.b-content-main a').lightBox();
						    });
						    </script>
		    		</div>
				</div>
			
			<footer class="entry-meta">
					<p>This entry was tagged <a href="#" rel="tag">superImage</a>. Bookmark the <a href="#" title="Permalink to Dark Image" rel="bookmark">permalink</a></p>
				</footer>
				<div class="nav-previous">
					<a href="#"><span>&larr;</span> Prev</a>
				</div>
				<div class="nav-next">
					<a href="#"> Next<span>&rarr;</span></a>
				</div>
			<div class="comments-area">
						<h3><img src="images/comment1.png" title="comment" />Leave a comment</h3>
							<form>
								<p>
									<label>Name</label>
									<span>*</span>
									<input type="text" value="">
								</p>
								<p>
									<label>Email</label>
									<span>*</span>
									<input type="text" value="">
								</p>
								<p>
									<label>Website</label>
									<input type="text" value="">
								</p>
								<p>
									<label>Subject</label>
									<span>*</span>
									<textarea></textarea>
								</p>
								<p>
									<input type="submit" value="Post">
								</p>
							</form>		
						</div>
					<div class="box comment">
	    <h2><span>0</span> Comment's</h2>
	    <ul class="list">
	        <li>
	            <div class="preview"><a href="#"><img src="http://lorempixel.com/50/50" alt=""></a></div>
	            <div class="data">
	                <div class="title">Jake Sully <a href="#"> June 20, 2013</a></div>
	                <p>Pellellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
	            </div>
	            <div class="clear"></div>
	        </li>
	        <li>
	            <div class="preview"><a href="#"><img src="http://lorempixel.com/50/50" alt=""></a></div>
	            <div class="data">
	                <div class="title">Jake Sully <a href="#"> June 20, 2013</a></div>
	                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
	            </div>
	            <div class="clear"></div>
	        </li>
	        <li>
	            <div class="preview"><a href="#"><img src="http://lorempixel.com/50/50" alt=""></a></div>
	            <div class="data">
	                <div class="title">Jake Sully <a href="#"> June 20, 2013</a></div>
	                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
	            </div>
	            <div class="clear"></div>
	        </li>
	        <li>
	            <div class="preview"><a href="#"><img src="http://lorempixel.com/50/50" alt=""></a></div>
	            <div class="data">
	                <div class="title">Jake Sully <a href="#"> June 20, 2013</a></div>
	                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
	            </div>
	            <div class="clear"></div>
	        </li>
	        <li>
	            <div class="preview"><a href="#"><img src="http://lorempixel.com/50/50" alt=""></a></div>
	            <div class="data">
	                <div class="title">Jake Sully <a href="#"> June 20, 2013</a></div>
	                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
	            </div>
	            <div class="clear"></div>
	        </li>
	    </ul>
	  <div class="clear"></div>
	</div>
	<div id="respond">
		<h3 id="reply-title">Leave a Reply <small><a id="cancel-comment-reply-link" href="#" style="">Cancel reply</a></small></h3>
		<form id="commentform">
			<p class="comment-notes">Your email address will not be published. Required fields are marked &nbsp;<span class="required">*</span></p>
			<p class="comment-form-author"><label for="author">Name</label>
				<span class="required">*</span>
				<input id="author" name="author" type="text" value="" size="30" aria-required="true">
			</p>
			<p class="comment-form-email">
				<label for="email">Email</label> <span class="required">*</span>
				<input id="email" name="email" type="text" value="" size="30" aria-required="true">
			</p>
			<p class="comment-form-url">
				<label for="url">Website</label>
				<input id="url" name="url" type="text" value="http://w3layouts.com" size="30">
			</p>
			<p class="comment-form-comment">
				<label for="comment">Comment</label>
				<textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
			</p>
			<p class="form-allowed-tags">You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes:  <code>&lt;a href="" title=""&gt; &lt;abbr title=""&gt; &lt;acronym title=""&gt; &lt;b&gt; &lt;blockquote cite=""&gt; &lt;cite&gt; &lt;code&gt; &lt;del datetime=""&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=""&gt; &lt;strike&gt; &lt;strong&gt; </code></p>						<p class="form-submit">
			<input name="submit" type="submit" id="submit" value="Post Comment">
			
			</p>
		</form>
	</div>
					<div class="clear"> </div>
					</div>
					<div class="clear"> </div>
			<!----end-innerpage---->
			<div class="navgation-links">
    		<a name="Menu"> </a>
    		<ul>
					<li><a href="#">Art</a></li>
					<li><a href="#">Food</a></li>
					<li><a href="#">Fashan</a></li>
					<li><a href="#">Cars</a></li>
					<li><a href="#">Education</a></li>
					<li><a href="#">deisign</a></li>
					<li><a href="contact.html">Contact</a></li>
					<li><a href="http://w3layouts.com/">Design by  W3layouts</a></li>
					<div class="clear"> </div>
				</ul>
    	</div>
		    </div>
   
  </div>
</body>
</html>
