<?php
include_once('db.inc.php');
global $db;
$db = ierg4210_DB();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Haoran Online Store</title>
<link rel="stylesheet" href="css/common.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/index.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/product.css" type="text/css" media="all" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/fadebanner.js"></script>
<script type="text/javascript" src="../js/slider.js"></script>

<script type="text/javascript" src="js/slide.js"></script>
<!--[if IE 8]> 
  <style type="text/css">
    .kinds-det .det-content a {
	  border-right: none;
    }
  </style>
<![endif]-->
</head>

<body bgcolor="#100c08">
  <div id="header">
    
    <div class="header-top">
    <div class="logo-container"><img src="img/logo.png" width="170" height="110" alt="logo" /></div>
    <div class="header-nav">
      <ul>
        <li><a href="index.php" target="_blank">Homepage</a></li>
        
        <li>
          <a href="product/product.html">Products</a>
          
        </li>
        <li><a href="person/record.html">Account</a></li>
      </ul>
	    
    </div>
    </div>
    <div class="header-bottom">
      
      <div class="search-container">
        <input type="text" onfocus="this.value='';$(this).css('color','#313131');" value="Please enter name or key word" />
        <a href="javascript:;"><img src="img/search.png" alt="search" width="40" height="16" /></a>
      </div>
    </div>
  </div>
	 <div id="container">
     <div id="nav-side">
    
      <div class="login-container">
        <dl class="login-suc">
          
          <dd>
            <p class="user-name">123@qq.com</p>
            <p>Welcome!</p>
          </dd>
        </dl>
        <p class="my-fujia"><a href="person/record.html"><img src="img/account.jpg" width="89" height="21" alt="account" /></a></p>
      </div>
      <div class="pro-kinds">
        
		<?php
		$q = $db->query("SELECT name, price FROM products WHERE pid = 1;");
		$row = $q -> fetch(PDO::FETCH_ASSOC);
		?>
		
			
		<h1 class="kinds-tit">Product Kinds</h1>
        <div class="kinds-cont">
          <div class="kinds-det">
            <h2 class="det-tit">fruits</h2>
            <div class="det-content">
              <a href="product/details.php"><?php echo $row['name']; ?> </a>
              <a href="product/details.php"><?php echo $row['name']; ?> </a>
			  <a href="product/details.php"><?php echo $row['name']; ?> </a>
			  <a href="product/details.php"><?php echo $row['name']; ?> </a>
			  <a href="product/details.php"><?php echo $row['name']; ?> </a>
			  <a href="product/details.php"><?php echo $row['name']; ?> </a>
              <a href="product/details.html">lemon </a>
			  <a href="product/details.html">lemon </a>
			  <a href="product/details.html">banana </a>
			  <a href="product/details.html">banana </a>
              
              <?php
			$q2 = $db->query("SELECT name, price FROM products WHERE pid = 2;");
			$row2 = $q2 -> fetch(PDO::FETCH_ASSOC);
			?>
              
              <div style="clear: both;"></div>
            </div>
          </div>
          <div class="kinds-det">
            <h2 class="det-tit">vegetables</h2>
            <div class="det-content">
              <a href="product/details2.php"><?php echo $row2['name']; ?> </a>
              <a href="product/details2.php"><?php echo $row2['name']; ?> </a>
			  <a href="product/details2.php"><?php echo $row2['name']; ?> </a>
			  <a href="product/details2.php"><?php echo $row2['name']; ?> </a>
			  <a href="product/details2.php"><?php echo $row2['name']; ?> </a>
			  <a href="product/details2.php"><?php echo $row2['name']; ?> </a>
			  <a href="product/details2.php"><?php echo $row2['name']; ?> </a>
			  <a href="product/details2.php"><?php echo $row2['name']; ?> </a>
			  <a href="product/details2.php"><?php echo $row2['name']; ?> </a>
			  <a href="product/details2.php"><?php echo $row2['name']; ?> </a>
			  <a href="product/details2.php">cabbage</a>
			  <a href="product/details2.php">cabbage</a>
			  
			  <?php
			$q3 = $db->query("SELECT name, price FROM products WHERE pid = 3;");
			$row3 = $q3 -> fetch(PDO::FETCH_ASSOC);
			?>
              <div style="clear: both;"></div>
            </div>
          </div>
          <div class="kinds-det">
            <h2 class="det-tit">groceries</h2>
            <div class="det-content">
             <a href="product/details3.php"><?php echo $row3['name']; ?> </a>
             <a href="product/details3.php"><?php echo $row3['name']; ?> </a>
			  <a href="product/details3.php"><?php echo $row3['name']; ?> </a>
              <a href="product/details3.php"><?php echo $row3['name']; ?> </a>
             <a href="product/details3.php"><?php echo $row3['name']; ?> </a>
			  <a href="product/details3.php"><?php echo $row3['name']; ?> </a>
			 <a href="product/details.html">shampoo</a>
			 <a href="product/details.html">shampoo</a>
			 <a href="product/details.html">shampoo</a>
			 
              <div style="clear: both;"></div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
    <div id="content">
      <!--
	  
	  
	  <div class="banner-cont">
        <ul class="fade-banner" control-fade="banner-control">
          <li><a href="product/details.html"><img src="img/bnr-photo01.jpg" width="744" height="303" alt="" /></a></li>
          <li><a href="product/details.html"><img src="img/bnr-photo02.jpg" width="744" height="303" alt="" /></a></li>
          <li><a href="product/details.html"><img src="img/bnr-photo03.jpg" width="744" height="303" alt="" /></a></li>
          <li><a href="product/details.html"><img src="img/bnr-photo04.jpg" width="744" height="303" alt="" /></a></li>
          <li><a href="product/details.html"><img src="img/bnr-photo05.jpg" width="744" height="303" alt="" /></a></li>
        </ul>
        <ul class="banner-control">
          <li class="active"></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
        </ul>
      </div>
	  <div class="imenu" topnav="navmc" attr="mc"><a href=""><img border="0" src="img/cart.png" width="25" height="22" />Shopping Cart</a>
		<div class="submnu">
		
		<ul class="cart-nav">
          <li class="name">product</li>
          <li class="price">price</li>
          <li class="count">quantity</li>
          <li class="operation">operation</li>
        </ul>
        <ul class="shopping-message">
          <li><img src="img/apple.jpg" width="35" height="30" alt="" /></li>
          <li class="name">apple</li>
          
          <li class="price">16.90</li>
          <li class="count">
            <span>-</span>
            <span class="count-number"><input type="text" value="1" /></span>
            <span>+</span>
          </li>
          <li class="operation"><button type="button">delete!</button></li>
		  </ul>
		  <div class="cart-all">
          <span>total：</span>
          <span class="cash-total">￥16.90</span>
        </div>
        <div class="contiue-pay">
          
          <button type="button">Buy now!</button>
        </div>
	
		</div>
		</div>
      <div class="promotion-area">
        <h1 class="title">on sale</h1>
        <ul class="promotion-list">
          <li><a href="product/details.html"><img src="img/img-promotion01.jpg" alt="" width="215" height="199" /></a></li>
          <li><a href="product/details.html"><img src="img/img-promotion01.jpg" alt="" width="215" height="199" /></a></li>
          <li><a href="product/details.html"><img src="img/img-promotion01.jpg" alt="" width="215" height="199" /></a></li>
        </ul>
      </div>
       <div class="recommend">
      <h1 class="title">recommending commodities</h1>
      <div class="rec-slider">
      <ul>
        <li>
          <p class="recom-img"><a href="product/details.html"><img src="img/soda.jpg" alt="soda" width="163" height="153" /> <span></span> </a> </p>
          <p class="recom-name"><a href="product/details.html">soda</a></p>
          <p class="recom-price">￥5.60/can</p>
        </li>
        <li>
          <p class="recom-img"><a href="product/details.html"><img src="img/soda.jpg" alt="soda" width="163" height="153" /> <span></span> </a> </p>
          <p class="recom-name"><a href="product/details.html">Soda</a></p>
          <p class="recom-price">￥5.60/can</p>
        </li>
        <li>
          <p class="recom-img"><a href="product/details.html"><img src="img/soda.jpg" alt="soda" width="163" height="153" /> <span></span> </a> </p>
          <p class="recom-name"><a href="product/details.html">Soda</a></p>
          <p class="recom-price">￥5.60/can</p>
        </li>
        <li>
          <p class="recom-img"><a href="product/details.html"><img src="img/soda.jpg" alt="soda" width="163" height="153" /> <span></span> </a> </p>
          <p class="recom-name"><a href="product/details.html">Soda</a></p>
          <p class="recom-price">￥5.60/can</p>
        </li>
        <li>
          <p class="recom-img"><a href="product/details.html"><img src="img/soda.jpg" alt="soda" width="163" height="153" /> <span></span> </a> </p>
          <p class="recom-name"><a href="product/details.html">Soda</a></p>
          <p class="recom-price">￥5.60/can</p>
        </li>
        <li>
          <p class="recom-img"><a href="product/details.html"><img src="img/soda.jpg" alt="soda" width="163" height="153" /> <span></span></a> </p>
          <p class="recom-name"><a href="product/details.html">Soda</a></p>
          <p class="recom-price">￥5.60/can</p>
        </li>
      </ul>
      </div>
	  
      <p class="recommend-tab">
        <span class="recommend-prev">&lt;</span>
        <span class="recommend-next">&gt;</span>
      </p>
    </div>
     
    -->
	  <div class="banner-cont">
        <ul class="fade-banner" control-fade="banner-control">
          <li><a href="product/details.html"><img src="img/bnr-photo01.jpg" width="744" height="303" alt="" /></a></li>
          <li><a href="product/details.html"><img src="img/bnr-photo02.jpg" width="744" height="303" alt="" /></a></li>
          <li><a href="product/details.html"><img src="img/bnr-photo03.jpg" width="744" height="303" alt="" /></a></li>
          <li><a href="product/details.html"><img src="img/bnr-photo04.jpg" width="744" height="303" alt="" /></a></li>
          <li><a href="product/details.html"><img src="img/bnr-photo05.jpg" width="744" height="303" alt="" /></a></li>
        </ul>
        <ul class="banner-control">
          <li class="active"></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
        </ul>
      </div>
	  
	  
	  <div class="product-show">
        <h1>
          <span>HOT !</span>
          <span class="show-arrow"></span>
          
        
	
		</h1>
        <ul class="show-list">
          <li>
            <p><a href="product/details.php"><img src="img/<?php echo $row['name']; ?>.jpg" alt="百货" width="136" height="137" /></a></p>
            <p><a href="product/details.php"><font size="4"><?php echo $row['price']; ?></font></a></p>
            <p class="show-price">RMB 100</a></p>
          </li>
          <li>
            <p><a href="product/details2.php"><img src="img/<?php echo $row2['name']; ?>.jpg" alt="百货" width="136" height="137" /></a></p>
            <p><a href="product/details.html"><font size="4"><?php echo $row2['price']; ?></font></a></p>
            <p class="show-price">RMB 100</a></p>
          </li>
          <li>
            <p><a href="product/details3.php"><img src="img/<?php echo $row3['name']; ?>.jpg" alt="百货" width="136" height="137" /></a></p>
            <p><a href="product/details3.php"><font size="4"><?php echo $row3['price']; ?></font></a></p>
            <p class="show-price">RMB 100</a></p>
          </li>
          <li>
            <p><a href="product/details.php"><img src="img/index/grocery.jpg" alt="百货" width="136" height="137" /></a></p>
            <p><a href="product/details.html"><font size="4">item name</font></a></p>
            <p class="show-price">RMB 100</a></p>
          </li>
		  <li>
            <p><a href="product/details.html"><img src="img/index/grocery.jpg" alt="百货" width="136" height="137" /></a></p>
            <p><a href="product/details.html"><font size="4">item name</font></a></p>
            <p class="show-price">RMB 100</a></p>
          </li>
		  <li>
            <p><a href="product/details.html"><img src="img/index/grocery.jpg" alt="百货" width="136" height="137" /></a></p>
            <p><a href="product/details.html"><font size="4">item name</font></a></p>
            <p class="show-price">RMB 100</a></p>
          </li>
		 <li>
            <p><a href="product/details.html"><img src="img/index/grocery.jpg" alt="百货" width="136" height="137" /></a></p>
            <p><a href="product/details.html"><font size="4">item name</font></a></p>
            <p class="show-price">RMB 100</a></p>
          </li>
          <li>
            <p><a href="product/details.html"><img src="img/index/grocery.jpg" alt="百货" width="136" height="137" /></a></p>
            <p><a href="product/details.html"><font size="4">item name</font></a></p>
            <p class="show-price">RMB 100</a></p>
          </li>
		  <li>
            <p><a href="product/details.html"><img src="img/index/grocery.jpg" alt="百货" width="136" height="137" /></a></p>
            <p><a href="product/details.html"><font size="4">item name</font></a></p>
            <p class="show-price">RMB 100</a></p>
          </li>
		  <li>
            <p><a href="product/details.html"><img src="img/index/grocery.jpg" alt="百货" width="136" height="137" /></a></p>
            <p><a href="product/details.html"><font size="4">item name</font></a></p>
            <p class="show-price">RMB 100</a></p>
          </li>
		  <li>
            <p><a href="product/details.html"><img src="img/index/grocery.jpg" alt="百货" width="136" height="137" /></a></p>
            <p><a href="product/details.html"><font size="4">item name</font></a></p>
            <p class="show-price">RMB 100</a></p>
          </li>
          <li>
            <p><a href="product/details.html"><img src="img/index/grocery.jpg" alt="百货" width="136" height="137" /></a></p>
            <p><a href="product/details.html"><font size="4">item name</font></a></p>
            <p class="show-price">RMB 100</a></p>
          </li>
	  </div>
	  
      
	  
      <div class="promotion-area">
        <h1 class="title">on sale</h1>
        <ul class="promotion-list">
          <li><a href="product/details.html"><img src="img/img-promotion01.jpg" alt="" width="215" height="199" /></a></li>
          <li><a href="product/details.html"><img src="img/img-promotion01.jpg" alt="" width="215" height="199" /></a></li>
          <li><a href="product/details.html"><img src="img/img-promotion01.jpg" alt="" width="215" height="199" /></a></li>
        </ul>
      </div>
       <div class="recommend">
      <h1 class="title">recommending commodities</h1>
      <div class="rec-slider">
      <ul>
        <li>
          <p class="recom-img"><a href="product/details.html"><img src="img/soda.jpg" alt="soda" width="163" height="153" /> <span></span> </a> </p>
          <p class="recom-name"><a href="product/details.html">soda</a></p>
          <p class="recom-price">￥5.60/can</p>
        </li>
        <li>
          <p class="recom-img"><a href="product/details.html"><img src="img/soda.jpg" alt="soda" width="163" height="153" /> <span></span> </a> </p>
          <p class="recom-name"><a href="product/details.html">Soda</a></p>
          <p class="recom-price">￥5.60/can</p>
        </li>
        <li>
          <p class="recom-img"><a href="product/details.html"><img src="img/soda.jpg" alt="soda" width="163" height="153" /> <span></span> </a> </p>
          <p class="recom-name"><a href="product/details.html">Soda</a></p>
          <p class="recom-price">￥5.60/can</p>
        </li>
        <li>
          <p class="recom-img"><a href="product/details.html"><img src="img/soda.jpg" alt="soda" width="163" height="153" /> <span></span> </a> </p>
          <p class="recom-name"><a href="product/details.html">Soda</a></p>
          <p class="recom-price">￥5.60/can</p>
        </li>
        <li>
          <p class="recom-img"><a href="product/details.html"><img src="img/soda.jpg" alt="soda" width="163" height="153" /> <span></span> </a> </p>
          <p class="recom-name"><a href="product/details.html">Soda</a></p>
          <p class="recom-price">￥5.60/can</p>
        </li>
        <li>
          <p class="recom-img"><a href="product/details.html"><img src="img/soda.jpg" alt="soda" width="163" height="153" /> <span></span></a> </p>
          <p class="recom-name"><a href="product/details.html">Soda</a></p>
          <p class="recom-price">￥5.60/can</p>
        </li>
      </ul>
      </div>
	  
      <p class="recommend-tab">
        <span class="recommend-prev">&lt;</span>
        <span class="recommend-next">&gt;</span>
      </p>
    </div>
    </div>
  </div>
  <div id="footer">
    <div class="footer-logo">
      Haoran Store
    </div>
    <dl class="company-info">
      <dt>Information</dt>
      <dd>TEL. 123456</dd>
      <dd>Fax. 123456</dd>
      <dd>mail: www.442460904qq.com</dd>
    </dl>
  </div>
</body>
<script>
  $(".fade-banner").fadeBanner();//
  $(".dropdown").click(function(){
	$(this).parent().css("position","relative");
	var getTar = $(this).attr("href");
	$(getTar).slideToggle();
	return false;
  });
  $(window).scroll(function(){
	var getSpace = $(window).scrollTop();
	$(".online-service").stop().animate({"top" : getSpace+250}, "linear");
  })
</script>

</html>
