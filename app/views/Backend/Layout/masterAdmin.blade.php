<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <title>Admin dashboard</title>
    {{ HTML::style("css/foundation.css") }}
    {{ HTML::style("//cdn.datatables.net/plug-ins/3cfcc339e89/integration/foundation/dataTables.foundation.css") }}

    {{ HTML::script("//code.jquery.com/jquery-1.11.1.min.js") }}
    {{ HTML::script("//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js") }}
    {{ HTML::script("//cdn.datatables.net/plug-ins/3cfcc339e89/integration/foundation/dataTables.foundation.js") }}
    <script>
    $(document).ready(function() {
        $('.dataTable').dataTable();
    });
    </script>
</head>
<body>
    <section class="navigation-section show-for-large-up">
            <div style="text-align: center;">

                <!-- TOP BAR INITIALIZATION -->
                <nav class="top-bar" data-topbar>
                    <ul class="title-area">
                        <li class="name">
                            <h1></h1>
                        </li>
                    </ul> <!-- END UL.TITLE-AREA -->
                    <!-- TOP BAR MENU ELEMENTS -->
                    <section class="top-bar-section" style="display: inline-block;">
                        <ul id="menu">
                            <li><a href="/admin/product">Products</a></li>
                            <li><a href="/admin/category">Categories</a></li>
                            <li><a href="/admin/order">Orders</a></li>
                            <li><a href="/">Visit site</a></li>
                            @if(\Illuminate\Support\Facades\Auth::check())
                                <li><a href="/logout">Logout</a></li>
                            @endif
                        </ul>
                    </section> <!-- END SECTION.TOP-BAR-SECTION -->
                </nav> <!-- END NAV.TOP-BAR -->

            </div> <!-- END 12 COLUMNS -->
    </section> <!-- END SECTION.NAVIGATION-SECTION -->
    <!-- OFF CANVAS SECTIONS WRAPPING THE MAIN CONTENT -->
    <div class="off-canvas-wrap" data-offcanvas>
        <div class="inner-wrap">

            <!-- OFF CANVAS MENU BAR -->
            <nav class="tab-bar hide-for-large-up">

                <section class="left-small">
                    <a class="left-off-canvas-toggle menu-icon" href="#"><span></span></a>
                </section>

                <section class="right tab-bar-section">
                    <h1 class="title">Menu</h1>
                </section>
                <!-- END NAV.TAB-BAR HIDE-FOR-LARGE-UP -->
            </nav>

            <!-- OFF CANVAS MENU -->
            <aside class="left-off-canvas-menu">
                <ul class="off-canvas-list">
                    <li><label>Navigation</label></li>
                    <li><a href="/admin/product">Products</a></li>
                    <li><a href="/admin/category">Categories</a></li>
                    <li><a href="/admin/order">Orders</a></li>
                    <li><a href="/">Visit site</a></li>
                    @if(\Illuminate\Support\Facades\Auth::check())
                        <li><a href="/logout">Logout</a></li>
                    @endif
                </ul>
            </aside>

            <!-- MAIN SECTION -->
            <section class="main-section">
                <!-- CONTENT SECTION -->
                <section class="full-width content-section">
                    <div class="row">
                        <div class="small-12 medium-12 large-12 columns">
                            @yield('adminContent')
                        </div> <!-- END 12 COLUMNS -->
                    </div> <!-- END ROW -->
                </section> <!-- END SECTION.CONTENT-SECTION -->
            </section> <!-- END SECTION.FULL-WIDTH.SERVICES-SECTION -->
            <!-- CLOSE THE OFF-CANVAS MENU -->
            <a class="exit-off-canvas"></a>

        </div>
    </div> <!-- END OFF CANVAS -->
    {{ HTML::script('js/foundation.min.js') }}
    <script>
        $(document).foundation();
    </script>
</body>
</html>