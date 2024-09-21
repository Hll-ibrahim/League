@extends('layouts.auth')
@section('content')
    <!-- Content
		================================================== -->

            <div class="row">


                <div class="col-md-12">

                    <!-- Register -->
                    <div class="card">
                        <div class="card__header">
                            <h4>Sign In Now</h4>
                        </div>
                        <div class="card__content">
                            <form id="login_form">
                                <div class="form-group">
                                    <label for="register-name">Your Email</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email address...">
                                </div>
                                <div class="form-group">
                                    <label for="register-password">Your Password</label>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password...">
                                </div>
                            </form>
                            <div class="form-group form-group--submit">
                                <a onclick="loginPost()" class="btn btn-primary-inverse btn-lg btn-block">Sign in to your account</a>
                            </div>
                        </div>
                    </div>
                    <!-- Register / End -->
                </div>

            </div>

    <!-- Content / End -->



    <!-- Login/Register Tabs Modal -->
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
    <!-- Login/Register Tabs Modal / End -->

    <script>
        function loginPost(){
            var formData = new FormData(document.getElementById('login_form'))
            $.ajax({
                url: '{{route('login')}}',
                type: 'POST',
                headers: {'X-CSRF-TOKEN': "{{csrf_token()}} "},
                processData: false,
                contentType: false,
                data: formData,
                success: () => {
                    Swal.fire({
                        icon: 'success',
                        title: 'Başarılı',
                        text: 'Balarıyla Giriş Yapıldı. Yönlendiriliyorsunuz.',
                        showConfirmButton: true,
                        confirmButtonText: 'Giriş Yap',
                    }).then((result)=>{
                        if(result.value){
                            window.location.href = '/login'
                        }
                    })
                },
                error: (xhr, status, error) => {
                    console.error(xhr,status,error);

                    Swal.fire({
                        icon: 'error',
                        title: 'Hata',
                        html: errorMap(xhr.responseJSON.errors),  // Hatanın detaylarını gösterir
                        footer: `Bir hata oluştu: ${xhr.status} - ${xhr.statusText}`,
                        showConfirmButton: true,
                        confirmButtonText: "Tamam",
                    });
                }
            })
        }
    </script>

@endsection
