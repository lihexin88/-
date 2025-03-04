<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:68:"D:\phpStudy\WWW\zcgj\public/../application/index\view\goods\car.html";i:1542790252;s:59:"D:\phpStudy\WWW\zcgj\application\index\view\common\top.html";i:1542416645;s:62:"D:\phpStudy\WWW\zcgj\application\index\view\common\bottom.html";i:1542683181;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>全部分类</title>
    <link rel="stylesheet" href="/static/ace/css/common.css" />
    <link rel="stylesheet" href="/static/ace/css/zhongyu.css" />
    <link rel="stylesheet" href="/static/ace/css/bootstrap.css" />
    <link rel="stylesheet" href="/static/ace/css/store.css" />
    <!--<link rel="stylesheet" href="/static/ace/css/item.css" />-->
    <link rel="stylesheet" href="/static/ace/css/clear.css" />
    <link rel="stylesheet" href="/static/ace/css/shopCart.css" />
    <link rel="stylesheet" href="/static/ace/css/userCenter.css">
</head>
<body>
<!--悬浮窗-->
<div class="suspend" id = "floating_window">
    <a href="/index/goods/car" title="购物车" class="shop">
        <img src="/static/ace/img/shop.png">
    </a>
    <a href="/index/goods/my_promotion" title="个人中心" class="mine">
        <img src="/static/ace/img/my.png">
    </a>
    <a href="#" title="回顶部" class="backTop">
        <img src="/static/ace/img/top.png">
    </a>
</div>
<!--头部-->
<div class="top_nav">
    <div class="container clearfix">
        <div class="top_nav_l">
            <img src="/static/ace/img/logo_zc.png"/>
        </div>
        <ul class="top_nav_r clearfix">
            <?php if(is_array($sidebar) || $sidebar instanceof \think\Collection || $sidebar instanceof \think\Paginator): $i = 0; $__LIST__ = $sidebar;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <li>
                <?php if(($key == 2) OR ($key == 3)): ?>
                <a onclick="javascript:layer.msg('功能待开发',{time:1500,})" style="cursor:pointer" ><?php echo $vo['title']; ?></a>
                <?php else: ?>
                <a href="/<?php echo $vo['name']; ?>" ><?php echo $vo['title']; ?></a>
                <?php endif; ?>
            </li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
		<?php if(empty($account) || (($account instanceof \think\Collection || $account instanceof \think\Paginator ) && $account->isEmpty())): ?>
	        <div class="accout">
	            <span>ZC</span>
				<div class="accout_menu">
	                <p><a href="<?php echo url('Publics/login'); ?>">登录</a></p>
	            </div>
	        </div>
	    <?php else: ?>
	    	<div class="accout">
	            <span>ZC</span>
	            <?php echo $account; ?>
	            <div class="accout_menu">
	                <p><a href="<?php echo url('User/wallet'); ?>">会员中心</a></p>
	                <p><a href="<?php echo url('Publics/logout'); ?>">退出登录</a></p>
	            </div>
	        </div>
	    <?php endif; ?>
    </div>
</div>
<!--商城导航栏-->
<div class="store_nav">
    <div class="store_nav_box">
        <ul class="store_nav_r">
            <li><a href="/index/goods/index">商城首页</a></li>
            <li><a href="/index/goods/classify">全部分类</a></li>
            <li><a href="activate.html">激活券</a></li>
            <li><a href="/index/goods/preferential">优惠专区</a></li>
            <li><a href="feature.html">特色专区</a></li>
        </ul>
        <div>
            <input type="text" value="" id="search">
            <button type="button" class="search_btn" onclick="javascript:window.location.href='/index/goods/classify?search_text='+$('#search').val()">搜索</button>
        </div>
    </div>
</div>
<!---->


<main>
    <div class="cabinet_head">
        <div>
            <label>商品</label>
            <p>购物车</p>
            <span>BEST</span>
        </div>
        <span>抓紧时间去结算哦</span>
    </div>
    <div class="shopCart_subhead">
        <div class="shopCart_nav">
            <div class="allItem">全部商品</div>
            <div class="clearing">
                <span>已选商品（不含运费）</span>
                <p class="red"><span name = "total_money">-</span>消费券</p>
                <button type="button" onclick="submit_order()">结算</button>
            </div>
        </div>
    </div>

    <form class="shop_table">
        <table>
            <thead>
            <tr>
                <th class="padding_l">
                    <input type="checkbox" name="all" id="navAll0">
                    <label for="navAll0" class="navAll1"></label>
                </th>
                <th>
                    <span>全选</span>
                    商品信息
                </th>
                <th>单价</th>
                <th>数量</th>
                <th>金额</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            <?php if(is_array($user_order) || $user_order instanceof \think\Collection || $user_order instanceof \think\Paginator): $key = 0; $__LIST__ = $user_order;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$order): $mod = ($key % 2 );++$key;?>
            <tr>
                <td class="padding_l">
                    <input type="checkbox" name="shop" id="shop<?php echo $key; ?>" value="<?php echo $order['order_number']; ?>" onchange="check_(this)">
                    <label for="shop<?php echo $key; ?>"></label>
                </td>
                <td class="flex">
                    <img src="<?php echo $order['detail_pic']; ?>" class="goods_img">
                    <div class="shop_name">
                        <p><?php echo $order['name']; ?></p>
                        <span><?php echo $order['remarks']; ?></span>
                    </div>
                </td>
                <td>
                    <div class="shop_price">
                        <s>
                            <span><?php echo $order['original_price']; ?></span>
                            <span>消费券</span>
                        </s>
                        <p>
                            <span><?php echo $order['price']; ?></span>
                            <span>消费券</span>
                        </p>
                    </div>
                </td>
                <td>
                    <div class="shop_num">
                        <div>
                            <input type="hidden" name = "order_num"  readonly value="<?php echo $order['order_number']; ?>">
                            <input type="hidden" value="<?php echo $order['price']; ?>">
                            <button type="button"  onclick="clear_menus(this,<?php echo $key; ?>)">-</button>
                            <input type="number" class = "shop<?php echo $key; ?>" oninput="num(this,<?php echo $key; ?>)" name="number" value="<?php echo $order['g_number']; ?>">
                            <button type="button" onclick="clear_add(this,<?php echo $key; ?>)">+</button>
                            <input type="hidden" value="<?php echo $order['number']; ?>">
                        </div>
                        <span>限购<?php echo $order['number']; ?>件</span>
                    </div>
                </td>
                <td>
                    <div class="total_price">
                        <span  id="total<?php echo $key; ?>"><?php echo $order['money']; ?></span>
                        <dd>消费券</dd>
                    </div>
                </td>
                <td class="padding_r">
                    <button type="button" class="delete" onclick="del(<?php echo $order['order_number']; ?>)">删除</button>
                </td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
    </form>
    <center><?php echo $page; ?></center>
    <!--收货信息-->
    <div class="recipients">
        <div class="rec_box">
            <div class="rec_title"  style="cursor: pointer;" onclick="select_addr()" data-toggle="modal" data-target="#myModal">
                <span>收货信息：</span>
                <img src="/static/ace/img/next.png">
            </div>
            <?php if(is_array($addrs) || $addrs instanceof \think\Collection || $addrs instanceof \think\Paginator): $key = 0; $__LIST__ = $addrs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$a): $mod = ($key % 2 );++$key;if($a['default'] == '2'): ?>
            <div class="rec_details">
                <input type="hidden" id="rec_ids" value="<?php echo $a['id']; ?>">
                <span id="rec_name"><?php echo $a['username']; ?></span>
                <span id="rec_tel"><?php echo $a['tel']; ?></span>
                <span id="rec_address"><?php echo $user_infoa['address']; ?></span>
                <a href="../user/address" target="_blank" style="cursor: pointer">编辑</a>
            </div>
            <?php endif; endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <div class="freight">
            <!--<span>运费：</span>-->
            <!--<p><span>10</span>元</p>-->
        </div>
    </div>

    <!--输入密码-->
    <div class="payment">
        <div class="payment_title">
            <span>输入密码</span>
            <img src="/static/ace/img/cancel.png" onclick="cancel_pay()">
        </div>
        <div class="payment_pwd">
            <input type="password" id="pay_pwd">
        </div>
        <div class="payment_btn">
            <button type="button" onclick="clearing()">支付</button>
        </div>
    </div>
    <!--选择地址-->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">选择收货地址</h4>
                </div>
                <div class="modal-body">
                    <?php if(is_array($addrs) || $addrs instanceof \think\Collection || $addrs instanceof \think\Paginator): $key = 0; $__LIST__ = $addrs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$a): $mod = ($key % 2 );++$key;?>
                    <div class="rec_details">
                        <input type="radio" <?php if($a['default'] == '2'): ?> checked <?php endif; ?> name="select_rec" value="<?php echo $a['id']; ?>">
                        <span><?php echo $a['username']; ?></span>
                        <span><?php echo $a['tel']; ?></span>
                        <span><?php echo $a['address']; ?></span>
                    </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                    <button type="button" class="btn btn-primary" onclick="select_rec()">选择地址</button>
                </div>
            </div>
        </div>
    </div>
    <!--底部全选-->
    <div class="total_clear">
        <div class="totalBox">
            <div class="totalBox_left">
                <input type="checkbox" name="all" id="navAll2">
                <label for="navAll2" class="navAll2"></label>
                <span>全选</span>
            </div>
            <div class="totalBox_right">
                <span class="shopNum">已选商品<b>1</b>件</span>
                <span>合计（不含运费）：</span>
                <div class="clear_price">
                    <span name = "total_money">-</span>
                    <dd>消费券</dd>
                </div>
                <button type="button" onclick="submit_order()">结算</button>
            </div>
        </div>
    </div>

</main>

<script type="text/javascript" src="/static/ace/js/jquery.min.js" ></script>
<script type="text/javascript" src="/static/ace/js/bootstrap.min.js" ></script>
<script type="text/javascript" src="/static/layui/layui.js"></script>
<script type="text/javascript" src="/static/ace/js/common.js" ></script>
<script type="text/javascript" src="/static/ace/js/store.js"></script>
<script type="text/javascript" src="/static/ace/js/shopCart.js"></script>
<script type="text/javascript" src="/static/ace/js/clear.js"></script>
<script>
    setNav(1);
</script>
		<!--底部-->
		<div class="foot">
			<img src="/static/ace/img/logo_zc.png" class="foot_img" />
			<div class="foot_b">@2018.zhongchengguoji</div>
		</div>
		<?php if($pre_card != null): ?>
		<!--优惠券-->
		<div class="coupon">
			<img src="/static/ace/img/yhq.png" class="yhq"/>
			<img src="/static/ace/img/close.png" class="cls" onclick="cls()"/>
		</div>
		<div class="mask"></div>
        <?php endif; ?>
	</body>
	<script>
		function cls(){
			$('.coupon,.mask').hide();
		}
		// var stat = document.cookie.split(";")[0].split("=")[1];
		// setTimeout(function(){
		// 	// document.cookie="sata=0";
		// },1500);
		// // console.log(document.cookie)
		// if(stat == 1){
		// 	$('.coupon,.mask').fadeIn();
		// }else{
		// 	$('.coupon,.mask').hide();
		// }
	</script>
</html>

