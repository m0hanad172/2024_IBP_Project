<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Log in</title>
    <link rel="icon" href="https://c8.alamy.com/comp/2AGRX2E/vector-logo-for-electronics-store-black-decorative-signboard-with-illustration-of-set-modern-web-electronic-products-sign-board-with-original-typefa-2AGRX2E.jpg"   >

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('admin/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ url('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('admin/css/adminlte.min.css')}}">
    
    <!-- Custom CSS for Dark Mode -->
    <!-- <style>
        .dark-mode {
            background-color: #f16603; /* Dark background */
            color: #ffffff; /* Light text */
        }
        .light-text {
            color: #f8f9fa; /* Light text for dark backgrounds */
        }
         .dark-mode input[type="text"], .dark-mode input[type="password"] {
            color: #343a40; /* Dark text for inputs */
            background-color: #ffffff; /* Light background for contrast */
        } 
    </style> -->
</head>
<body class="hold-transition login-page dark-mode">

<section class="h-100 gradient-form">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3">
          <div class="row g-0">
            <div class="col-lg-6" style="background-color:#3E3E42;">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="https://logoisus.com/wp-content/uploads/2020/02/Electronics-Shop-Logo.jpg"
                    style="width: 185px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1" style="text-align: center; color: #fff;">Welcome</h4>
                </div>

                <p class="light-text" style="color:#fff;">Please login to your account</p>

                <form action="{{url('/login')}}" method="post">
                  @csrf

                  @if(Session::has('error'))
                    <div class="alert alert-danger">{{Session::get('error')}}</div>
                  @endif
                  <div class="input-group mb-3 text-dark">
                    <input type="text"  placeholder="Username" name="username" >
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                      </div>
                    </div>
                  </div>
                  <div class="input-group mb-3 text-dark ">
                    <input type="password"  placeholder="Password" name="password">
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-8">
                      <div class="icheck-primary">
                        <input type="checkbox" id="remember">
                        <label for="remember"style="color:#fff;">
                          Remember Me
                        </label>
                      </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                      <button type="submit" class="btn btn-dark btn-block">Log in</button>
                    </div>
                    <!-- /.col -->
                  </div>
                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2" style="background: #f16603;">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">We are more than just a Shop</h4>
                <p class="small mb-0">Welcome to MA Electronic _shop,
                   your ultimate destination for the latest and greatest in electronics! Our store offers a wide range of high-quality products,
                    from cutting-edge smartphones and sleek laptops to state-of-the-art home entertainment systems. Enjoy competitive prices,
                     exceptional customer service, and exclusive deals you won't find anywhere else. Plus, our knowledgeable staff is always ready to help you find exactly what you need. Experience the difference at MA Electronic _shop, 
                     where innovation meets affordability!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- jQuery -->
<script src="{{ url('admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ url('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ url('admin/js/adminlte.min.js')}}"></script>

</body>
</html>
