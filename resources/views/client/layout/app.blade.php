<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EmplaceME | Admin Panel</title>
    <meta name="description" content="Admin Panel" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('client/css/bootstrap.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('client/fonts/icon-font/flaticon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('client/css/demo.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('client/css/component.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('client/css/circle.css')}}" />
    <style>

    </style>
</head>
<body>
@yield('content')
<!--[if IE]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js"></script>
<script src="js/jquery.stickyheader.js"></script>

<script>
    window.randomize = function() {
        $('.radial-progress').each(function() {
            var transform_styles = ['-webkit-transform', '-ms-transform', 'transform'];
            $(this).find('span').fadeTo('slow', 1);
            var score = $(this).data('score');
            var deg = (((100 / 5) * score) / 100) * 180;
            var rotation = deg;
            var fill_rotation = rotation;
            var fix_rotation = rotation * 2;
            for(i in transform_styles) {
                $(this).find('.circle .fill, .circle .mask.full').css(transform_styles[i], 'rotate(' + fill_rotation + 'deg)');
                $(this).find('.circle .fill.fix').css(transform_styles[i], 'rotate(' + fix_rotation + 'deg)');
            }
        });

        $('.radial-progress-small').each(function() {
            var transform_styles = ['-webkit-transform', '-ms-transform', 'transform'];
            $(this).find('span').fadeTo('slow', 1);
            var score = $(this).data('score');
            var deg = (((100 / 5) * (score)) / 100) * 180;
            var rotation = deg;
            var fill_rotation = rotation;
            var fix_rotation = rotation * 2;
            for(i in transform_styles) {
                $(this).find('.circle .fill, .circle .mask.full').css(transform_styles[i], 'rotate(' + fill_rotation + 'deg)');
                $(this).find('.circle .fill.fix').css(transform_styles[i], 'rotate(' + fix_rotation + 'deg)');
            }
        });
    }
    setTimeout(window.randomize, 200);

</script>
</body>
</html>