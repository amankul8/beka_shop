
<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login</title>
   <link href="{{asset('distAdmin/css/style.css')}}" rel="stylesheet">

</head>

<body class="h-100">

<!--*******************
    Preloader start
********************-->
<div id="preloader">
    <div class="loader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
        </svg>
    </div>
</div>
<!--*******************
    Preloader end
********************-->





<div class="login-form-bg h-100">
    <div class="container h-100">
        <div class="row justify-content-center h-100">
            <div class="col-xl-6">
                <div class="form-input-content">
                    <div class="card login-form mb-0">
                        <div class="card-body pt-5">
                            <a class="text-center" href="{{route('home')}}"> <h4>Beka shop</h4> </a>

                            <form class="mt-5 mb-5 login-input">
                                <div class="form-group">
                                    <input type="email" required class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="password" required class="form-control" placeholder="Password">
                                </div>
                                <button type="submit" class="btn login-form__btn submit w-100">Sign In</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--**********************************
    Scripts
***********************************-->
<script src="{{asset('distAdmin/plugins/common/common.min.js')}}"></script>
<script src="{{asset('distAdmin/js/custom.min.js')}}"></script>
<script src="{{asset('distAdmin/js/settings.js')}}"></script>
<script src="{{asset('distAdmin/js/gleek.js')}}"></script>
<script src="{{asset('distAdmin/js/styleSwitcher.js')}}"></script>
</body>
</html>







