<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
     <title>Electronix Store</title>
     <meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
     {{ HTML::style("css/style.css") }}
     {{ HTML::script("js/boxOver.js") }}

</head>
<body>
<div id="main_container">
    <div class="top_bar">
         <div class="top_search">
              <div class="search_text"><a href="#">Advanced Search</a></div>
              <input type="text" class="search_input" name="search" />
              {{ HTML::image('images/search.gif', 'search', array('class' => 'search_bt')) }}
         </div>
         <div class="languages">
              <div class="lang_text">Languages:</div>
              <a href="#" class="lang">
                   {{ HTML::image('images/en.gif', 'english', array()) }}
                   {{ HTML::image('images/de.gif', 'German', array()) }}
              </a>
              <a href="#" class="lang"><img src="../../../../../USBWebserver%20v8.6%20-%20kopie/root/Webshop/app/images/de.gif" alt="" border="0" /></a> </div>
    </div>
    <div id="main_content">
         <div id="menu_tab">
              <div class="left_menu_corner"></div>
              <ul class="menu">
                   <li><a href="#" class="nav1"> Home</a></li>
                   <li class="divider"></li>
                   <li><a href="#" class="nav2">Products</a></li>
                   <li class="divider"></li>
                   <li><a href="#" class="nav3">Specials</a></li>
                   <li class="divider"></li>
                   <li><a href="#" class="nav4">My account</a></li>
                   <li class="divider"></li>
                   <li><a href="#" class="nav4">Sign Up</a></li>
                   <li class="divider"></li>
                   <li><a href="#" class="nav5">Shipping</a></li>
                   <li class="divider"></li>
                   <li><a href="contact.blade.php" class="nav6">Contact Us</a></li>
                   <li class="divider"></li>
              </ul>
              <div class="right_menu_corner"></div>
         </div>
         <!-- end of menu tab -->
         <div class="crumb_navigation"> Navigation: <span class="current">Home</span> </div>
         <div class="left_content">
              <div class="title_box">Categories</div>
              <ul class="left_menu">
                   <li class="odd"><a href="#">Processors</a></li>
                   <li class="even"><a href="#">Motherboards</a></li>
                   <li class="odd"><a href="#">Desktops</a></li>
                   <li class="even"><a href="#">Laptops &amp; Notebooks</a></li>
                   <li class="odd"><a href="#">Processors</a></li>
                   <li class="even"><a href="#">Motherboards</a></li>
                   <li class="odd"><a href="#">Processors</a></li>
                   <li class="even"><a href="#">Motherboards</a></li>
                   <li class="odd"><a href="#">Desktops</a></li>
                   <li class="even"><a href="#">Laptops &amp; Notebooks</a></li>
                   <li class="odd"><a href="#">Processors</a></li>
                   <li class="even"><a href="#">Motherboards</a></li>
              </ul>
         </div>
         <!-- end of left content -->
         <div class="center_content">
              <div class="center_title_bar">Latest Products</div>
              <div class="prod_box">
                   <div class="top_prod_box"></div>
                   <div class="center_prod_box">
                        <div class="product_title"><a href="details.blade.php">Motorola 156 MX-VL</a></div>
                        <div class="product_img"><a href="details.blade.php"><img src="../../../../../USBWebserver%20v8.6%20-%20kopie/root/Webshop/app/images/laptop.gif" alt="" border="0" /></a></div>
                        <div class="prod_price"><span class="reduce">350$</span> <span class="price">270$</span></div>
                   </div>
                   <div class="bottom_prod_box"></div>
                   <div class="prod_details_tab"> <a href="#" title="header=[Add to cart] body=[&nbsp;] fade=[on]"><img src="../../../../../USBWebserver%20v8.6%20-%20kopie/root/Webshop/app/images/cart.gif" alt="" border="0" class="left_bt" /></a> <a href="#" title="header=[Specials] body=[&nbsp;] fade=[on]"><img src="../../../../../USBWebserver%20v8.6%20-%20kopie/root/Webshop/app/images/favs.gif" alt="" border="0" class="left_bt" /></a> <a href="#" title="header=[Gifts] body=[&nbsp;] fade=[on]"><img src="../../../../../USBWebserver%20v8.6%20-%20kopie/root/Webshop/app/images/favorites.gif" alt="" border="0" class="left_bt" /></a> <a href="details.blade.php" class="prod_details">details</a> </div>
              </div>
              <div class="prod_box">
                   <div class="top_prod_box"></div>
                   <div class="center_prod_box">
                        <div class="product_title"><a href="details.blade.php">Iphone Apple</a></div>
                        <div class="product_img"><a href="details.blade.php"><img src="../../../../../USBWebserver%20v8.6%20-%20kopie/root/Webshop/app/images/p4.gif" alt="" border="0" /></a></div>
                        <div class="prod_price"><span class="price">270$</span></div>
                   </div>
                   <div class="bottom_prod_box"></div>
                   <div class="prod_details_tab"> <a href="#" title="header=[Add to cart] body=[&nbsp;] fade=[on]"><img src="../../../../../USBWebserver%20v8.6%20-%20kopie/root/Webshop/app/images/cart.gif" alt="" border="0" class="left_bt" /></a> <a href="#" title="header=[Specials] body=[&nbsp;] fade=[on]"><img src="../../../../../USBWebserver%20v8.6%20-%20kopie/root/Webshop/app/images/favs.gif" alt="" border="0" class="left_bt" /></a> <a href="#" title="header=[Gifts] body=[&nbsp;] fade=[on]"><img src="../../../../../USBWebserver%20v8.6%20-%20kopie/root/Webshop/app/images/favorites.gif" alt="" border="0" class="left_bt" /></a> <a href="details.blade.php" class="prod_details">details</a> </div>
              </div>
              <div class="prod_box">
                   <div class="top_prod_box"></div>
                   <div class="center_prod_box">
                        <div class="product_title"><a href="details.blade.php">Samsung Webcam</a></div>
                        <div class="product_img"><a href="details.blade.php"><img src="../../../../../USBWebserver%20v8.6%20-%20kopie/root/Webshop/app/images/p5.gif" alt="" border="0" /></a></div>
                        <div class="prod_price"><span class="reduce">350$</span> <span class="price">270$</span></div>
                   </div>
                   <div class="bottom_prod_box"></div>
                   <div class="prod_details_tab"> <a href="#" title="header=[Add to cart] body=[&nbsp;] fade=[on]"><img src="../../../../../USBWebserver%20v8.6%20-%20kopie/root/Webshop/app/images/cart.gif" alt="" border="0" class="left_bt" /></a> <a href="#" title="header=[Specials] body=[&nbsp;] fade=[on]"><img src="../../../../../USBWebserver%20v8.6%20-%20kopie/root/Webshop/app/images/favs.gif" alt="" border="0" class="left_bt" /></a> <a href="#" title="header=[Gifts] body=[&nbsp;] fade=[on]"><img src="../../../../../USBWebserver%20v8.6%20-%20kopie/root/Webshop/app/images/favorites.gif" alt="" border="0" class="left_bt" /></a> <a href="details.blade.php" class="prod_details">details</a> </div>
              </div>
              <div class="prod_box">
                   <div class="top_prod_box"></div>
                   <div class="center_prod_box">
                        <div class="product_title"><a href="details.blade.php">Motorola 156 MX-VL</a></div>
                        <div class="product_img"><a href="details.blade.php"><img src="../../../../../USBWebserver%20v8.6%20-%20kopie/root/Webshop/app/images/laptop.gif" alt="" border="0" /></a></div>
                        <div class="prod_price"><span class="reduce">350$</span> <span class="price">270$</span></div>
                   </div>
                   <div class="bottom_prod_box"></div>
                   <div class="prod_details_tab"> <a href="#" title="header=[Add to cart] body=[&nbsp;] fade=[on]"><img src="../../../../../USBWebserver%20v8.6%20-%20kopie/root/Webshop/app/images/cart.gif" alt="" border="0" class="left_bt" /></a> <a href="#" title="header=[Specials] body=[&nbsp;] fade=[on]"><img src="../../../../../USBWebserver%20v8.6%20-%20kopie/root/Webshop/app/images/favs.gif" alt="" border="0" class="left_bt" /></a> <a href="#" title="header=[Gifts] body=[&nbsp;] fade=[on]"><img src="../../../../../USBWebserver%20v8.6%20-%20kopie/root/Webshop/app/images/favorites.gif" alt="" border="0" class="left_bt" /></a> <a href="details.blade.php" class="prod_details">details</a> </div>
              </div>
              <div class="prod_box">
                   <div class="top_prod_box"></div>
                   <div class="center_prod_box">
                        <div class="product_title"><a href="details.blade.php">Iphone Apple</a></div>
                        <div class="product_img"><a href="details.blade.php"><img src="../../../../../USBWebserver%20v8.6%20-%20kopie/root/Webshop/app/images/p4.gif" alt="" border="0" /></a></div>
                        <div class="prod_price"><span class="price">270$</span></div>
                   </div>
                   <div class="bottom_prod_box"></div>
                   <div class="prod_details_tab"> <a href="#" title="header=[Add to cart] body=[&nbsp;] fade=[on]"><img src="../../../../../USBWebserver%20v8.6%20-%20kopie/root/Webshop/app/images/cart.gif" alt="" border="0" class="left_bt" /></a> <a href="#" title="header=[Specials] body=[&nbsp;] fade=[on]"><img src="../../../../../USBWebserver%20v8.6%20-%20kopie/root/Webshop/app/images/favs.gif" alt="" border="0" class="left_bt" /></a> <a href="#" title="header=[Gifts] body=[&nbsp;] fade=[on]"><img src="../../../../../USBWebserver%20v8.6%20-%20kopie/root/Webshop/app/images/favorites.gif" alt="" border="0" class="left_bt" /></a> <a href="details.blade.php" class="prod_details">details</a> </div>
              </div>
              <div class="prod_box">
                   <div class="top_prod_box"></div>
                   <div class="center_prod_box">
                        <div class="product_title"><a href="details.blade.php">Samsung Webcam</a></div>
                        <div class="product_img"><a href="details.blade.php"><img src="../../../../../USBWebserver%20v8.6%20-%20kopie/root/Webshop/app/images/p5.gif" alt="" border="0" /></a></div>
                        <div class="prod_price"><span class="reduce">350$</span> <span class="price">270$</span></div>
                   </div>
                   <div class="bottom_prod_box"></div>
                   <div class="prod_details_tab"> <a href="#" title="header=[Add to cart] body=[&nbsp;] fade=[on]"><img src="../../../../../USBWebserver%20v8.6%20-%20kopie/root/Webshop/app/images/cart.gif" alt="" border="0" class="left_bt" /></a> <a href="#" title="header=[Specials] body=[&nbsp;] fade=[on]"><img src="../../../../../USBWebserver%20v8.6%20-%20kopie/root/Webshop/app/images/favs.gif" alt="" border="0" class="left_bt" /></a> <a href="#" title="header=[Gifts] body=[&nbsp;] fade=[on]"><img src="../../../../../USBWebserver%20v8.6%20-%20kopie/root/Webshop/app/images/favorites.gif" alt="" border="0" class="left_bt" /></a> <a href="details.blade.php" class="prod_details">details</a> </div>
              </div>
         </div>
         <!-- end of center content -->
         <div class="right_content">
              <div class="shopping_cart">
                   <div class="cart_title">Shopping cart</div>
                   <div class="cart_details"> 3 items <br />
                        <span class="border_cart"></span> Total: <span class="price">350$</span> </div>
                    <div class="cart_icon">
                        <a href="#" title="header=[Checkout] body=[&nbsp;] fade=[on]">
                            {{ HTML::image('images/shoppingcart.png', '', array("width" => "48", "height" => "48")) }}
                            <img src="../../../../../USBWebserver%20v8.6%20-%20kopie/root/Webshop/app/images/shoppingcart.png" alt="" width="48" height="48" border="0" />
                        </a>
                    </div>
              </div>
              <div class="title_box">Manufacturers</div>
              <ul class="left_menu">
                   <li class="odd"><a href="#">Sony</a></li>
                   <li class="even"><a href="#">Samsung</a></li>
                   <li class="odd"><a href="#">Daewoo</a></li>
                   <li class="even"><a href="#">LG</a></li>
                   <li class="odd"><a href="#">Fujitsu Siemens</a></li>
                   <li class="even"><a href="#">Motorola</a></li>
                   <li class="odd"><a href="#">Phillips</a></li>
                   <li class="even"><a href="#">Beko</a></li>
              </ul>
         </div>
         <!-- end of right content -->
    </div>
    <!-- end of main content -->
    <div class="footer">
         <div class="left_footer">
            {{ HTML::image('images/footer_logo.png', 'csscreme', array("width" => "170", "height" => "49")) }}
         </div>
         <div class="center_footer"> Template name. All Rights Reserved 2008<br />
             <a href="http://csscreme.com">
                {{ HTML::image('images/csscreme.jpg', 'csscreme', array()) }}
             </a>
             <br />
             {{ HTML::image('images/payment.gif', 'payments', array()) }}
         </div>
    </div>
</div>
<!-- end of main_container -->
</body>
</html>
