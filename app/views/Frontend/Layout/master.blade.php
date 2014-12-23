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
              </a>
              <a href="#" class="lang">
                  {{ HTML::image('images/de.gif', 'German', array()) }}
              </a>
         </div>
    </div>
    <div id="main_content">
         <div id="menu_tab">
              @include('Frontend.Menu.menu')
         </div>
         <!-- end of menu tab -->
         <div class="crumb_navigation"> Navigation: <span class="current">Home</span> </div>
         <div class="left_content">
            @include('Frontend.Category.categoryMenu')
         </div>
         <!-- end of left content -->
         <div class="center_content">
              @yield('content')
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
                        </a>
                    </div>
              </div>
              {{--<div class="title_box">Manufacturers</div>--}}
              {{--<ul class="left_menu">--}}
                   {{--<li class="odd"><a href="#">Sony</a></li>--}}
                   {{--<li class="even"><a href="#">Samsung</a></li>--}}
                   {{--<li class="odd"><a href="#">Daewoo</a></li>--}}
                   {{--<li class="even"><a href="#">LG</a></li>--}}
                   {{--<li class="odd"><a href="#">Fujitsu Siemens</a></li>--}}
                   {{--<li class="even"><a href="#">Motorola</a></li>--}}
                   {{--<li class="odd"><a href="#">Phillips</a></li>--}}
                   {{--<li class="even"><a href="#">Beko</a></li>--}}
              {{--</ul>--}}
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
