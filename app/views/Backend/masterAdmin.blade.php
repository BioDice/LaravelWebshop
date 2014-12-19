<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <title>Sign up</title>
</head>
<body>
    <div>
        <div class="row">
            <div class="small-12 columns">
                @yield('adminContent')
            </div>
        </div>
    </div>
    {{ Html::script('js/jquery.js') }}
    {{ Html::script('js/foundation.min.js') }}
    <script>
        $(document).foundation();
    </script>
</body>
</html>