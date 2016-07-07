<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ url('assets/css/modern-business.css') }}" />

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="{{ url('assets/font-awesome/css/font-awesome.min.css') }}" />


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
        @include('layouts.header')



        @include('layouts.aside')
        @yield('content')

        @include('layouts.footer')

    

    <!-- /.container -->

    <!-- jQuery -->
    <script type="text/javascript" src="{{ url('assets/js/jquery.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script type="text/javascript" src="{{ url('assets/js/bootstrap.min.js') }}"></script>
    <!-- Script to Activate the Carousel -->
    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#accordion').accordion();
        });
    </script>

</body>

</html>