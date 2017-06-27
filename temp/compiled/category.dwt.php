<?php echo $this->fetch('library/page_header.lbi'); ?>

<div class="middle">

  <div class="hots">
    <div class="sale"><span>热卖推荐</span></div>
    <ul>
  <div class="goodsItem">
    <?php $_from = $this->_var['hot_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
     <li>
       <div class="sell"><a href="<?php echo $this->_var['goods']['url']; ?>"><img width="105" height="102" src="<?php echo $this->_var['goods']['thumb']; ?>"/></a></div>
       <div class="selc">
        <p><?php echo $this->_var['goods']['brand_name']; ?> <span><?php echo $this->_var['goods']['name']; ?></span></p>
        <h3><?php if ($this->_var['goods']['promote_price'] != ""): ?>
          <?php echo $this->_var['goods']['promote_price']; ?>
          <?php else: ?>
          <?php echo $this->_var['goods']['shop_price']; ?>
          <?php endif; ?></h3>
        <a href="<?php echo $this->_var['goods']['url']; ?>">立即抢购</a>
       </div>
     </li>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

    </ul>
  </div>

<!--   <div class="title">
    <p>
    <a href="index.html">首页</a>
    <span>></span>
    <a href="product_list.html">实木米桶</a>
    <span>></span>
    相思木系列</p>
  </div> -->
<?php echo $this->fetch('library/ur_here.lbi'); ?>


  <div class="snav">
   <div class="sndi">
    <p>Category</p>
    <ul>
    <?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>   
     <li><a href="<?php echo $this->_var['cat']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a></li>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    </ul>
   </div>

  <?php echo $this->fetch('library/history.lbi'); ?>

  </div>

  <div class="center">

   

    <?php if ($this->_var['brands']['1'] || $this->_var['price_grade']['1'] || $this->_var['filter_attr_list']): ?>

   <div class="prscr">
    <h1><span></span>产品筛选</h1>


    <?php if ($this->_var['brands']['1']): ?>

    <div class="brand">
     <span>品牌</span>
     <ul id="banli">
        <?php $_from = $this->_var['brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand');if (count($_from)):
    foreach ($_from AS $this->_var['brand']):
?>
      <?php if ($this->_var['brand']['selected']): ?>
          <li><span><?php echo $this->_var['brand']['brand_name']; ?></span></li>
          <?php else: ?>
          <li><a href="<?php echo $this->_var['brand']['url']; ?>"><?php echo $this->_var['brand']['brand_name']; ?></a>&nbsp;</li>
      <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

     </ul>
     <div class="cle"></div>
    </div>
      <?php endif; ?>
    <?php if ($this->_var['price_grade']['1']): ?>

    <div class="brand">
     <span>价格</span>
      <ul id="banli">
      <?php $_from = $this->_var['price_grade']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'grade');if (count($_from)):
    foreach ($_from AS $this->_var['grade']):
?>
      <?php if ($this->_var['grade']['selected']): ?>
        <li><span><?php echo $this->_var['grade']['price_range']; ?></span></li>
        <?php else: ?>
        <li><label><a href="<?php echo $this->_var['grade']['url']; ?>"><?php echo $this->_var['grade']['price_range']; ?></a>&nbsp;</label></li>
        <?php endif; ?>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </ul>
     <div class="cle"></div>
      
    </div>

      <?php endif; ?>

   

   <?php $_from = $this->_var['filter_attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'filter_attr_0_67047900_1498449652');if (count($_from)):
    foreach ($_from AS $this->_var['filter_attr_0_67047900_1498449652']):
?>
   <div class="brand">
     <span><?php echo htmlspecialchars($this->_var['filter_attr_0_67047900_1498449652']['filter_attr_name']); ?></span>
      <ul id="banli">
    
      <?php $_from = $this->_var['filter_attr_0_67047900_1498449652']['attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attr');if (count($_from)):
    foreach ($_from AS $this->_var['attr']):
?>
      <?php if ($this->_var['attr']['selected']): ?>
        <li><span><?php echo $this->_var['attr']['attr_value']; ?></span></li>
        <?php else: ?>
        <li><label><a href="<?php echo $this->_var['attr']['url']; ?>"><?php echo $this->_var['attr']['attr_value']; ?></a>&nbsp;</label></li>
        <?php endif; ?>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </ul>
     <div class="cle"></div>
      
    </div>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    
    </div>
    <?php endif; ?>

   
  

   <div class="prlist">
     <div class="tlist">
      <span>排序：</span>
      <ul style="line-height: 58px">
      <a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=goods_id&order=<?php if ($this->_var['pager']['sort'] == 'goods_id' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#goods_list"><img src="themes/muyaxuan/images/goods_id_<?php if ($this->_var['pager']['sort'] == 'goods_id'): ?><?php echo $this->_var['pager']['order']; ?><?php else: ?>default<?php endif; ?>.gif" alt="<?php echo $this->_var['lang']['sort']['goods_id']; ?>"></a>
      <a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=shop_price&order=<?php if ($this->_var['pager']['sort'] == 'shop_price' && $this->_var['pager']['order'] == 'ASC'): ?>DESC<?php else: ?>ASC<?php endif; ?>#goods_list"><img src="themes/muyaxuan/images/shop_price_<?php if ($this->_var['pager']['sort'] == 'shop_price'): ?><?php echo $this->_var['pager']['order']; ?><?php else: ?>default<?php endif; ?>.gif" alt="<?php echo $this->_var['lang']['sort']['shop_price']; ?>"></a>
      <a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=last_update&order=<?php if ($this->_var['pager']['sort'] == 'last_update' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#goods_list"><img src="themes/muyaxuan/images/last_update_<?php if ($this->_var['pager']['sort'] == 'last_update'): ?><?php echo $this->_var['pager']['order']; ?><?php else: ?>default<?php endif; ?>.gif" alt="<?php echo $this->_var['lang']['sort']['last_update']; ?>"></a>
       <!-- <li><a href="product_list.html" class="defa">默认</a></li> -->
       <!-- <li><a href="product_list.html">销量</a></li> -->
       <!-- <li><a href="product_list.html">价格</a></li> -->
       <!-- <li><a href="product_list.html">评论数</a></li> -->
       <!-- <li><a href="product_list.html">上架时间</a></li> -->
      </ul>
      <!-- <p>共<span>150个</span>商品</p> -->
     </div>
     <!-- <div class="blist">
      <span>筛选：</span>
      <form action="" method="post">
        <input type="checkbox" name="price" value="" id="price"/>
        <label for="price">仅显示促销</label>
        <input type="checkbox" name="price" value="" id="price1"/>
        <label for="price1">仅显示有货</label>
      </form>
      <p>1/5<a href="#">></a></p>
     </div> -->
   </div>

   <div class="prcent">
    <ul>
  <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
    <?php if ($this->_var['goods']['goods_id']): ?>
     <li>
      <div class="prshow">
       <a href="<?php echo $this->_var['goods']['url']; ?>"><img width="220" height="260" src="<?php echo $this->_var['goods']['goods_thumb']; ?>"/></a>
       <h1><a href="<?php echo $this->_var['goods']['url']; ?>"><?php echo $this->_var['goods']['name']; ?></a></h1>
       <p><a href="<?php echo $this->_var['goods']['url']; ?>"><?php if ($this->_var['goods']['promote_price'] != ""): ?>
            <?php echo $this->_var['lang']['promote_price']; ?><font class="shop_s"><?php echo $this->_var['goods']['promote_price']; ?></font><br />
            <?php else: ?>
            <?php echo $this->_var['lang']['shop_prices']; ?><font class="shop_s"><?php echo $this->_var['goods']['shop_price']; ?></font><br />
            <?php endif; ?></a></p>
       <!-- <p>评分<span>4.9</span>分</p> -->
      </div>
      <div class="prhide">
      <a href="<?php echo $this->_var['goods']['url']; ?>"><img  width="220" height="240"  src="<?php echo $this->_var['goods']['goods_thumb']; ?>"/></a>
      <p><a href="<?php echo $this->_var['goods']['url']; ?>" class="cur">立刻购买</a></p>
      </div>
     </li>
    <?php endif; ?>

<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul>
  <div class="cle"></div>
    
   </div>
  <div class="cle"></div>

  </div>
  <div class="cle"></div>

  <div class="page">
     <p>
      <a href="#">上一页</a>
      <a href="#" class="pacur">1</a>
      <a href="#">2</a>
      <a href="#">3</a>
      <a href="#">...</a>
      <a href="#">33</a>
      <a href="#">下一页</a>
     </p>
  </div>

  <div class="lake">
     <p>猜你喜欢</p>
  </div>
  <div class="mr_frbox">
   <img class="mr_frBtnL prev" src="<?php echo $this->_var['gg_path']; ?>images/arrow-1.png"/>
   <div class="mr_frUl">
   <ul id="mr_fu">
    <li>
      <a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['gg_path']; ?>images/caropr-1.png"/></a>
      <p><a href="<?php echo $this->_var['goods']['url']; ?>">木雅轩方形实木米缸储米箱<span>(已有520人评价)</span></a></p>
      <span>￥590</span>
    </li>
    <li>
      <a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['gg_path']; ?>images/caropr-1.png"/></a>
      <p><a href="<?php echo $this->_var['goods']['url']; ?>">木雅轩方形实木米缸储米箱<span>(已有520人评价)</span></a></p>
      <span>￥590</span>
    </li>
    <li>
      <a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['gg_path']; ?>images/caropr-1.png"/></a>
      <p><a href="<?php echo $this->_var['goods']['url']; ?>">木雅轩方形实木米缸储米箱<span>(已有520人评价)</span></a></p>
      <span>￥590</span>
    </li>
    <li>
      <a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['gg_path']; ?>images/caropr-1.png"/></a>
      <p><a href="<?php echo $this->_var['goods']['url']; ?>">木雅轩方形实木米缸储米箱<span>(已有520人评价)</span></a></p>
      <span>￥590</span>
    </li>
   </ul>
   </div>
   <img class="mr_frBtnR next" src="<?php echo $this->_var['gg_path']; ?>images/arrow-2.png"/>
  </div>
  <div class="thep">
   <p>BACK TO
   <span>TOP</span></p>
   <img src="<?php echo $this->_var['gg_path']; ?>images/theto.png"/>
  </div>
  <div class="cle"></div>
</div>


<?php echo $this->fetch('library/page_footer.lbi'); ?>

<script src="<?php echo $this->_var['gg_path']; ?>js/more.js"></script>
<script src="<?php echo $this->_var['gg_path']; ?>js/product_list.js"></script>
<script src="<?php echo $this->_var['gg_path']; ?>js/jquery.SuperSlide2.js"></script>
<script src="<?php echo $this->_var['gg_path']; ?>js/slide.js"></script>
<script type="text/javascript">
var bt=document.getElementById("moreck");
bt.onclick=function(){
if(bt.value=="更多"){
this.value="收起";
}else{
    this.value="更多";
}
}
</script>
<script>
$(".more input").toggleClass ("arrow2");
   jQuery (function ($)
    {
        $ (".more input").click (function ()
        {  
      $ (this).toggleClass ("arrow3");
        });
    });

</script>
