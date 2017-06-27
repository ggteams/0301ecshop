<!doctype html>
<html>
<head>
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<title><?php echo $this->_var['page_title']; ?></title>
<meta charset="utf-8">
<?php if (is_array ( $this->_var['gg_css'] )): ?>

  <?php $_from = $this->_var['gg_css']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'v');if (count($_from)):
    foreach ($_from AS $this->_var['v']):
?>
    <link rel="stylesheet" type="text/css" href="<?php echo $this->_var['gg_path']; ?>css/<?php echo $this->_var['v']; ?>.css">
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

<?php else: ?>
  <link rel="stylesheet" type="text/css" href="<?php echo $this->_var['gg_path']; ?>css/<?php echo $this->_var['gg_css']; ?>.css">
<?php endif; ?>
<link rel="stylesheet" type="text/css" href="<?php echo $this->_var['gg_path']; ?>css/common.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->_var['gg_path']; ?>css/header.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->_var['gg_path']; ?>css/footer.css">




</head>
<body>

  <div class="header">
   <div class="head">
    <!-- <ul class="head_1">
     <li><a href="#"><img src="<?php echo $this->_var['gg_path']; ?>images/coll.png"></a><a href="">收藏木雅轩123</a></li>
     <li><a href="#"><img src="<?php echo $this->_var['gg_path']; ?>images/land.png"></a><a href="">江西站</a>
         <div class="div"></div>
         <div class="li_div">
         <p><a href="#">北 京</a><a href="#">北 京</a><a href="#">北 京</a><a href="#">北 京</a><a href="#">北 京</a></p>
         <p><a href="#">南 京</a><a href="#">南 京</a><a href="#">南 京</a><a href="#">南 京</a><a href="#">南 京</a></p>
         <p><a href="#">天 津</a><a href="#">天 津</a><a href="#">天 津</a><a href="#">天 津</a><a href="#">天 津</a></p>
         <p><a href="#">湖 南</a><a href="#">湖 南</a><a href="#">湖 南</a><a href="#">湖 南</a><a href="#">湖 南</a></p>
         </div>
     </li>
    </ul> -->
    <ul class="head_2">
     <li><a href="login.html">登录</a> |  <a href="register.html">注册</a></li>
     <li><a href="member.html">我的账户<img src="<?php echo $this->_var['gg_path']; ?>images/top_s.png" class="img1"></a>
         <div class="div_1"></div>
         <div class="li_div_1">
          <p><a href="#">待处理订单</a> <a href="#">我的消息</a></p>
          <p><a href="#">返修退换货</a> <a href="#">我的问答</a></p>
          <p><a href="#">新降价商品</a> <a href="#">我的关注</a></p>
         </div>
     </li>
     <li><a href="flow.php"><img src="<?php echo $this->_var['gg_path']; ?>images/shop_c.png" class="img2">购物车<span><?php 
$k = array (
  'name' => 'gg_cart_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></span><img src="<?php echo $this->_var['gg_path']; ?>images/shop_y.png" class="img3"><img src="<?php echo $this->_var['gg_path']; ?>images/top_s.png" class="img1"></a>
         <div class="div_2"></div>
         <div class="li_div_2">
           <p><?php 
$k = array (
  'name' => 'cart_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></p>
         </div>
     </li>
     <li><a href="#">网站地图</a></li>
     <li><a href="#">客服服务<img src="<?php echo $this->_var['gg_path']; ?>images/top_s.png" class="img1"></a>
         <div class="div_3"></div>
         <div class="li_div_3">
          <p><a href="#">帮助中心</a> <a href="#">售后服务</a></p>
          <p><a href="#">在线客服</a> <a href="#">意见建议</a></p>
          <p><a href="#">电话客服</a> <a href="#">客服邮箱</a></p>
         </div>
     </li>
    </ul>
    <div class="cle"></div>
   </div>
  </div>


<div class="logo">
 <div class="fllogo"><a href="index.php"><img src="<?php echo $this->_var['gg_path']; ?>images/top_logo.png"></a></div>
<script type="text/javascript">
    
    <!--
    function checkSearchForm()
    {
        if(document.getElementById('keyword').value)
        {
            return true;
        }
        else
        {
            alert("<?php echo $this->_var['lang']['no_keywords']; ?>");
            return false;
        }
    }
    -->
    
</script>
 <form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()">
  <input type="text" id="keyword" name="keywords"  value="<?php echo htmlspecialchars($this->_var['search_keywords']); ?>" />
  <input type="submit" id="btn" name="imageField" value="搜 索" />
   <?php if ($this->_var['searchkeywords']): ?>
  <p>
  <?php $_from = $this->_var['searchkeywords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['val']):
?>
  <a href="search.php?keywords=<?php echo urlencode($this->_var['val']); ?>"><?php echo $this->_var['val']; ?></a>  
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </p>
    <?php endif; ?>

 </form>


 <div class="frlogo">
    <a href="product_list.html"><img src="<?php echo $this->_var['gg_path']; ?>images/logoright_03.png"></a>
    <h6><a href="product_details.html">碳钢磨芯胡椒罐</a></h6>
    <h5><a href="product_details.html">细腻·耐磨·天然</a></h5>
    <h4><a href="product_details.html">查看详情</a></h4>
 </div>
 <div class="cle"></div>
</div>


<div class="head_nav">
 <div class="nav">
  <div class="nav_1">
   <a href="product_list.html">全部商品分类 <img src="<?php echo $this->_var['gg_path']; ?>images/nav_class.png"> </a>
   <div class="nav_1_select">
     <ul>
        <?php $_from = $this->_var['gg_categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
       <li><a href="<?php echo $this->_var['cat']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a></li><br />
            <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['gg_child'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['gg_child']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['gg_child']['iteration']++;
?>
           <li><a href="<?php echo $this->_var['child']['url']; ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a><?php if (! ($this->_foreach['gg_child']['iteration'] == $this->_foreach['gg_child']['total'])): ?> / <?php endif; ?></li>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
            <br />
            <br />
       <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
       <!-- <li><a href="product_details.html">盐罐</a> / <a href="product_details.html">胡椒罐</a></li>

       <li><a href="product_details.html">量米勺实木米杯</a></li>  
       <li><a href="product_details.html">米杯</a> / <a href="product_details.html">水杯</a>/<a href="product_details.html">儿童杯</a></li>
       <li><a href="product_details.html">亚克力创意调料罐套装</a></li>
       <li><a href="product_details.html">套装一</a> / <a href="product_details.html">套装二</a> / <a href="product_details.html">钟表</a></li>
       <li><a href="product_details.html">天然健康的菜板</a> / <a href="product_details.html">防滑菜板</a></li>
       <li><a href="product_details.html">实木菜板</a> / <a href="product_details.html">面板</a></li>
       <li><a href="product_details.html">砧板</a> / <a href="product_details.html">面擀</a> / <a href="product_details.html">天然面板</a>></li>
       <li><a href="product_details.html">实木锅铲不粘锅</a></li>
       <li><a href="product_details.html">筷子</a> / <a href="product_details.html">汤勺</a> / <a href="product_details.html">饭勺</a></li> -->
     </ul>
   </div>
  </div>
  
  <ul class="nav_2">
  <li><a href="index.php"<?php if ($this->_var['navigator_list']['config']['index'] == 1): ?> class="on"<?php endif; ?>>商城首页<span></span></a></li>
  <?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>
  <li><a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank" <?php endif; ?> <?php if ($this->_var['nav']['active'] == 1): ?> class="cur"<?php endif; ?>><?php echo $this->_var['nav']['name']; ?><span></span></a></li>
 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

  <!-- <li><a href="index.html" class="on">商城首页</a></li>
  <li><a href="member.html">会员中心</a></li>
  <li><a href="product_list.html">新品上架</a></li>
  <li><a href="product_list.html">热销排行</a></li>
  <li><a href="#">招商加盟</a></li>
  <li><a href="#">反馈信息</a></li> -->
  </ul>
  <div class="cle"></div>
 </div>
</div>