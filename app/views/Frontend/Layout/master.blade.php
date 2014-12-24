<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Electronix Store</title>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
    {{ HTML::style("css/frontend/foundation.css") }}
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
        @yield('breadcrumbs')
         <div class="left_content">
            @include('Frontend.Category.categoryMenu')
         </div>
         <!-- end of left content -->
         <div class="center_content">
            @yield('content')
         </div>
         <!-- end of center content -->
         <div class="right_content">
            @include('Frontend.Cart.miniCart')
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
