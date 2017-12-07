<?php
include_once('db.inc.php');
global $db;
$db = ierg4210_DB();

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>details</title>
<link rel="stylesheet" href="../css/common.css" type="text/css" media="all" />
<link rel="stylesheet" href="../css/product.css" type="text/css" media="all" />
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/slider.js"></script>
<script type="text/javascript" src="../js/slide.js"></script>

<link rel="stylesheet" type="text/css" href="css/lrtk.css">
<script src="js/MagicZoom.js" type="text/javascript"></script>
<script src="action.js" type = "text/javascript"></script>
</head>
<body bgcolor="#100c08" onload="upload_page()">
  <div id="header">
    
    <div class="header-top">
    <div class="logo-container"><img src="../img/logo.png" width="170" height="110" alt="logo" /></div>
    <div class="header-nav">
      <ul>
        <li><a href="../index.php" target="_blank">Homepage</font></a></li>
        <li><a href="product.html">Products</a></li>
        <li><a href="../person/record.html">Account</font></a></li>
        <li class="clear"></li>
      </ul>
    </div>
    </div>
    <div class="header-bottom">
      
      <div class="search-container">
        <input type="text" onfocus="this.value='';$(this).css('color','#313131');" value="Please enter name or key word" />
        <a href="javascript:;"><img src="../img/search.png" alt="search" width="40" height="16" /></a>
      </div>
    </div>
  </div>
  <div id="container">
    <div id="nav-side">
      <div class="login-container">
        <p class="login-title"><img src="../img/login.png" alt="account login" width="147" height="23" /></p>
        <form>
          <ul class="login-input">
            <li>
              <label>Username：</label>
              <input type="text" />
            </li>
            <li>
              <label>Password：</label>
              <input type="password" />
            </li>
          </ul>
          
          <p class="login-btn">
            <a href="javascript:;"><img src="../img/login2.jpg" width="61" height="19" alt="login" /></a>
            <a href="regist.html"><img src="../img/register.jpg" width="61" height="19" alt="register" /></a>
          </p>
        </form>
      </div>
      <div class="login-container">
        <dl class="login-suc">
          <dt><img src="../img/user.jpg" width="88" height="90" alt="person" /></dt>
          <dd>
            <p class="user-name">Wei Haoran</p>
            <p>Welcome!</p>
          </dd>
        </dl>
        <p class="my-fujia"><a href="../person/record.html"><img src="img/account.jpg" width="89" height="21" alt="account" /></a></p>
      </div>
      <div class="pro-kinds">
        <h1 class="kinds-tit">Product Kinds</h1>
        <div class="kinds-cont">
          <div class="kinds-det">
            <h2 class="det-tit">fruits</h2>
            <div class="det-content">
              <a href="details.html">apple</a>
              <a href="details.html">apple</a>
              <a href="details.html">apple</a>
              <a href="details.html">apple</a>
              <a href="details.html">apple</a>
              <a href="details.html">apple</a>
              <a href="details.html">apple</a>
              <a href="details.html">apple</a>
              
              
              
              <div style="clear: both;"></div>
            </div>
          </div>
          <div class="kinds-det">
            <h2 class="det-tit">vegetables</h2>
            <div class="det-content">
              <a href="details.html">lettuce</a>
              <a href="details.html">lettuce</a>
			  <a href="details.html">lettuce</a>
			  <a href="details.html">lettuce</a>
			  <a href="details.html">lettuce</a>
			  <a href="details.html">lettuce</a>
			  <a href="details.html">lettuce</a>
			  <a href="details.html">lettuce</a>
			  <a href="details.html">lettuce</a>
			  
			  
              <div style="clear: both;"></div>
            </div>
          </div>
          <div class="kinds-det">
            <h2 class="det-tit">groceries</h2>
            <div class="det-content">
             <a href="details.html">shampoo</a>
             <a href="details.html">shampoo</a>
			 <a href="details.html">shampoo</a>
			 <a href="details.html">shampoo</a>
			 <a href="details.html">shampoo</a>
			 <a href="details.html">shampoo</a>
			 <a href="details.html">shampoo</a>
			 <a href="details.html">shampoo</a>
			 
			 
              <div style="clear: both;"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="hot-sale">
        <h1 class="hot-tit">HOT!</h1>
        <div class="hot-cont">
          <ul class="hot-list">
            <li>
              <p><a href="details.html"><img src="../img/img-hot01.jpg" width="136" height="112" alt="lemon" /></a></p>
              <p class="hot-name"><a href="product/details.html">lemon <span>RMB:100</span></a></p>
            </li>
            <li>
              <p><a href="details.html"><img src="../img/img-hot01.jpg" width="136" height="112" alt="lemon" /></a></p>
              <p class="hot-name"><a href="details.html">lemon <span>RMB:100</span></a></p>
            </li>
            
          </ul>
        </div>
      </div>
    </div>
   
	<div id="content">
    <div class="pro-detail">
		<div class = "direction">
		<p><font size="3" color="blue"><a href="../index.php">Horan Online--></a><a href="product.html">Products--></a> <a href="product fruits.html">Fruits--></a><a href="details.php">Apple</a></font></p>
		</div>
	
	<?php
		$q = $db->query("SELECT pid, name, price, description FROM products WHERE pid = 1;");
		$row = $q -> fetch(PDO::FETCH_ASSOC);
		?>
      <div class="pro-img">
      <div id="tsShopContainer">
                    <div id="tsImgS">
                        <a href="../img/<?php echo $row['name']; ?>.jpg" title="Images" class="MagicZoom" id="MagicZoom"><img width="300" height="300" src="../img/<?php echo $row['name']; ?>.jpg" /></a>
                    </div>
                    <div id="tsPicContainer">
                        <div id="tsImgSArrL" onclick="tsScrollArrLeft()"></div>
                        <div id="tsImgSCon">
                            <ul>
                                <li onclick="showPic(0)" rel="MagicZoom" class="tsSelectImg"><img height="42" width="42" src="../img/<?php echo $row['name']; ?>.jpg" tsImgS="../img/<?php echo $row['name']; ?>.jpg"</li>
                                <li onclick="showPic(1)" rel="MagicZoom" class="tsSelectImg"><img height="42" width="42" src="../img/<?php echo $row['name']; ?>.jpg" tsImgS="../img/<?php echo $row['name']; ?>.jpg"</li>
                                <li onclick="showPic(0)" rel="MagicZoom" class="tsSelectImg"><img height="42" width="42" src="../img/<?php echo $row['name']; ?>.jpg" tsImgS="../img/<?php echo $row['name']; ?>.jpg"</li>
                                <li onclick="showPic(1)" rel="MagicZoom" class="tsSelectImg"><img height="42" width="42" src="../img/<?php echo $row['name']; ?>.jpg" tsImgS="../img/<?php echo $row['name']; ?>.jpg"</li>
                                <li onclick="showPic(0)" rel="MagicZoom" class="tsSelectImg"><img height="42" width="42" src="../img/<?php echo $row['name']; ?>.jpg" tsImgS="../img/<?php echo $row['name']; ?>.jpg"</li>
                                <li onclick="showPic(1)" rel="MagicZoom" class="tsSelectImg"><img height="42" width="42" src="../img/<?php echo $row['name']; ?>.jpg" tsImgS="../img/<?php echo $row['name']; ?>.jpg"</li>
                                
                            </ul>
                        </div>
                        <div id="tsImgSArrR" onclick="tsScrollArrRight()"></div>
                    </div>
                    <img class="MagicZoomLoading" width="16" height="16" src="image/loading.gif" alt="Loading..." />
                </div>
                <script src="js/ShopShow.js"></script>
        
      </div>
		
       <div class="text-container">
        <h1><?php echo $row['name']; ?></h1>
        <p class="pro-text"> <?php echo $row['description'] ; ?>   that you have never seen !</p>
        <div class="pro-price">
          <dl>
            <dt>price</dt>
            <dd class="low-price">￥<?php echo $row['price']; ?></dd>
          </dl>
          
        </div>
        
        <dl class="pro-stock">
          <dt>quantity</dt>
          <dd>
            <input class="pro-number" type="text" value="1" />
            <span class="cho-number"> <span class="pro-add"><img src="../img/detail/ico-add-number.gif" width="19" height="13" alt="" /></span> <span class="pro-red"><img src="../img/detail/ico-red-number.gif" width="19" height="13" alt="" /></span> </span> <span class="stock-total">234 remains</span> </dd>
        </dl>
        <script>
		    $(document).ready(function(){
			  $(".pro-add").click(function(){
				var getVal = parseInt($(this).parent().prev().val());
				$(this).parent().prev().val(getVal + 1);
			  });
			  $(".pro-red").click(function(){
				var getVal = $(this).parent().prev().val();
				if(getVal > 1){
			      $(this).parent().prev().val(getVal - 1);
				}
			  });
			})
          </script>
        <div class="buy-cart">
          
		
        <a class="cart" onclick="add_to_cart(1)">add to cart</a>   		  
        </div>
        <script>
		  $(document).ready(function(){
			
			
			$(".cart").click(function(){
			  if($(".pro-simu-cart").length == 0){
				$(this).parent().before("<div class='pro-simu-cart'><span class='close-simu-cart'>X</span><p class='add-cart-success'>successful!</p></div>")
			    $(".close-simu-cart").click(function(){
			      $(this).parent().remove();
			    });
			    $(".continue-buy").click(function(){
			      $(this).parent().parent().remove();
			    });
			  }
			})
		  })
        </script>
      </div>
      <div style="clear: both;"></div>
    </div>
    <div class="imenu" topnav="navmc" attr="mc"><a href=""><img border="0" src="../img/cart.png" width="25" height="22" />Shopping Cart</a>
		<div class="submnu">
		
		<ul class="cart-nav">
          <li class="name">product</li>
          <li class="price">price</li>
          <li class="count">quantity</li>
          
        </ul>
        <div id="shoppingcart">
      
      <ul id="host_shopList">
        <li> test </li>
      </ul>
      &nbsp&nbsp&nbsp&nbsp&nbsp<ul id="total_price"></ul>
      <ul><li><input type="button" value="confirm" onclick="show_shop_list()"/></li></ul>
      <input type="hidden" id="money" value="0"/>
      </div>
        <div class="contiue-pay">
          <form method="POST" action="https://www.sandbox.paypal.com/cgi-bin/webscr" onsubmit="return cartSubmit(this)">
						<ul id="submitPanel"></ul>
						<input type="hidden" name="cmd" value="_cart" />
						<input type="hidden" name="upload" value="1" />
						<input type="hidden" name="business" value="442460904-facilitator@qq.com" />
						<input type="hidden" name="currency_code" value="USD" />
						<input type="hidden" name="charset" value="utf-8" />
						<input type="hidden" name="custom" value="0" />
						<input type="hidden" name="invoice" value="0" />
						<input type="submit" value="Checkout" />
					</form>
   
        </div>
	
		</div> 
		</div>

	<div class="goods-evaluation">
      <h1><a href=".goods-details" class="tab-detail active">product details</a>
      <script type="text/javascript" src="../incl/myLib.js"></script>
	  <script>
	  function cartSubmit(form){
	 var buyList = {};

	 for (var key in localStorage){
		buyList[key] = parseInt(localStorage.getItem(key));
	 }
		
	 //upload_page();
	 myLib.processJSON(
		    "checkout-process.php",                                      //para 1
		    {action: "handle_checkout", list:JSON.stringify(buyList)},   //para 2
		  
			function(returnValue){                                       //para 3
				form.custom.value=returnValue.digest;
				form.invoice.value=returnValue.invoice;
				alert(form.custom.value);
				form.submit();
				for (var key in localStorage)                    //remove local storage
					localStorage.removeItem(key);
			},
		    {method:"POST"});                                            //para 4
	return false;
}

	  
	  
	  
	  </script>
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  <script>
	      $(".goods-evaluation h1 a").click(function(){
		    $(this).addClass("active").siblings().removeClass("active");
			$(this).parent().siblings().css("display","none");
			var getTarget = $(this).attr("href");
			$(getTarget).css("display","block");
			return false;
	   	  })
        </script>
      <div class="goods-details">
        <ul class="goods-para">
          <li title="1">-permission number：330118010649</li>
          <li title="2">-ingredients：<?php echo $row['name']; ?></li>
          <li title="3">-save method：cold save</li>
          <li title="4">-duration：30 days</li>
          
          <li title="5">-weight(g): 500</li>
          
          <li title="6">-origion:China</li>
          
          <li title="7">-price: 51-100 USD</li>
          <li title="8">-species: <?php echo $row['name']; ?></li>
        </ul>
        <p class="goods-img"><img src="../img/<?php echo $row['name']; ?>.jpg" width="760" height="465" alt="苹果" /></p>
       
        <p class="goods-img"><img src="../img/<?php echo $row['name']; ?>.jpg" height="465" alt="苹果" /></p>
      </div>
      
    </div>
    
</body>
</html>
