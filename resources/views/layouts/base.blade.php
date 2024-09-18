<!DOCTYPE html>
<html lang="zxx">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <title>American Football &amp; Sports News HTML Template - News V1</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sports Club, League and News HTML Template">
    <meta name="author" content="Dan Fisher">
    <meta name="keywords" content="sports club news HTML template">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('football/images/football/favicons/favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('football/images/football/favicons/favicon-120.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('football/images/football/favicons/favicon-152.png') }}">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,400;0,700;0,800;1,700&amp;family&#x3D;Roboto:ital@0;1&amp;display&#x3D;swap" rel="stylesheet">

    <!-- CSS -->
    <!-- Vendor CSS -->
    <link href="{{ asset('football/vendor/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('football/fonts/font-awesome/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('football/fonts/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('football/vendor/magnific-popup/dist/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('football/vendor/slick/slick.css') }}" rel="stylesheet">

    <!-- Template CSS -->
    <link href="{{ asset('football/css/style-football.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('football/css/custom.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</head>
<body data-template="template-football">
<div class="site-wrapper clearfix">
    <div class="site-overlay"></div>
    @yield('content')
</div>

<!-- Javascript Files
================================================== -->

<!-- Core JS -->
<script src="{{ asset('football/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('football/vendor/jquery/jquery-migrate.min.js') }}"></script>
<script src="{{ asset('football/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('football/js/core.js') }}"></script>

<!-- Vendor JS -->
<script src="{{ asset('football/vendor/twitter/jquery.twitter.js') }}"></script>

<!-- Template JS -->
<script src="{{ asset('football/js/init.js') }}"></script>
<script src="{{ asset('football/js/custom.js') }}"></script>
<script>
    function errorMap(errors){
        errors = Object.values(errors)

        string = '<p>'
        result = errors.map((error)=>{
            error.map((errorMessage)=>{
                string += errorMessage
                string += '<br>'
            })
        })
        string += '</p>'
        return string
    }

</script>
</body>
</html>
