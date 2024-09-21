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

    @yield('links')

</head>
<body data-template="template-football">
<div class="site-wrapper clearfix">
    <div class="site-overlay"></div>



            @yield('base')
        </div>
    </div>
</div>
<div class="modal fade" id="modal-login-register-tabs" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg modal--login modal--login-only" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

                <div class="modal-account-holder">
                    <div class="modal-account__item modal-account__item--logo">
                        <p class="modal-account__item-register-txt">Don’t have an account? <a href="#">Register Now</a> and enjoy all our benefits!</p>
                    </div>
                    <div class="modal-account__item">

                        <!-- Tab panes -->
                        <div class="tab-content">

                            <!-- Tab: Login -->
                            <div role="tabpanel" class="tab-pane fade show active" id="tab-login">

                                <!-- Login Form -->
                                <form action="#" class="modal-form">
                                    <h5>Login to your account</h5>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Enter your email address...">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Enter your password...">
                                    </div>
                                    <div class="form-group form-group--pass-reminder">
                                        <label class="checkbox checkbox-inline">
                                            <input type="checkbox" id="inlineCheckbox1" value="option1" checked> Remember Me
                                            <span class="checkbox-indicator"></span>
                                        </label>
                                        <a href="#">Forgot your password?</a>
                                    </div>
                                    <div class="form-group form-group--submit">
                                        <a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/soccer/build/_soccer_shop-account.html" class="btn btn-primary-inverse btn-block">Enter to your account</a>
                                    </div>
                                    <div class="modal-form--social">
                                        <h6>or Login with your social profile:</h6>
                                        <ul class="social-links social-links--btn text-center">
                                            <li class="social-links__item">
                                                <a href="#" class="social-links__link social-links__link--lg social-links__link--fb"><i class="fab fa-facebook"></i></a>
                                            </li>
                                            <li class="social-links__item">
                                                <a href="#" class="social-links__link social-links__link--lg social-links__link--twitter"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li class="social-links__item">
                                                <a href="#" class="social-links__link social-links__link--lg social-links__link--pinterest"><i class="fab fa-pinterest"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </form>
                                <!-- Login Form / End -->

                            </div>
                            <!-- Tab: Login / End -->

                            <!-- Tab: Register -->
                            <div role="tabpanel" class="tab-pane fade" id="tab-register">

                                <!-- Register Form -->
                                <form action="#" class="modal-form">
                                    <h5>Register Now!</h5>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Enter your email address...">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Enter your password...">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Repeat your password...">
                                    </div>
                                    <div class="form-group form-group--submit">
                                        <a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/soccer/build/_soccer_shop-account.html" class="btn btn-success btn-block">Create Your Account</a>
                                    </div>
                                    <div class="modal-form--note">You’ll receive a confirmation email in your inbox with a link to activate your account. </div>
                                </form>
                                <!-- Register Form / End -->

                            </div>
                            <!-- Tab: Register / End -->

                        </div>

                        <!-- Nav tabs -->
                        <div class="nav-tabs-login-wrapper">
                            <ul class="nav nav-tabs nav-justified nav-tabs--login" role="tablist">
                                <li class="nav-item"><a class="nav-link active" href="#tab-login" role="tab" data-toggle="tab">Login</a></li>
                                <li class="nav-item"><a class="nav-link" href="#tab-register" role="tab" data-toggle="tab">Register</a></li>
                            </ul>
                        </div>
                        <!-- Nav tabs / End -->

                    </div>
                </div>
            </div>
        </div>
    </div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js" integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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
@yield('script')
</body>
</html>
