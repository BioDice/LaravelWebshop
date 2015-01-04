<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Electronix Store</title>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
    {{ HTML::style("css/frontend/foundation.css") }}

    {{ HTML::style("css/style.css") }}
    {{ HTML::style("//cdn.datatables.net/plug-ins/3cfcc339e89/integration/foundation/dataTables.foundation.css") }}

    {{ HTML::script("//code.jquery.com/jquery-1.11.1.min.js") }}
    {{ HTML::script("//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js") }}
    {{ HTML::script("//cdn.datatables.net/plug-ins/3cfcc339e89/integration/foundation/dataTables.foundation.js") }}

    {{ HTML::script("js/boxOver.js") }}

    <script>
        $(document).ready(function() {
            $('.dataTable').dataTable();

            $("#search").click(function () {
                $("#submitSearch").click();
            });
        } );
    </script>
</head>
<body>
<div id="main_container">
    <div class="top_bar">
         <div class="top_search">
              <div class="search_text" style="width: initial; text-align: right; margin-right: 5px; float: left;">Search </div>
              {{ Form::open(['method' => 'get', 'route' => 'home.search', 'id' => 'searchForm']) }}
                  {{ Form::text('search', null, ['style' => 'padding: 0 5px; width: 180px; float: left; height: 23px; margin: 5px;']) }}
                  <a href="#" id="search">{{ HTML::image('images/search.gif', 'search', array('class' => 'search_bt')) }}</a>
                  <input type="submit" style="display: none" id="submitSearch" />
              {{ Form::close() }}
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
{{ Html::script('js/utilities/NumberOnly.js') }}
{{ Html::script('js/utilities/ChangeAmountProduct.js') }}
{{ Html::script('js/foundation.min.js') }}
<script>
    $(document).foundation();
</script>
</body>
</html>
