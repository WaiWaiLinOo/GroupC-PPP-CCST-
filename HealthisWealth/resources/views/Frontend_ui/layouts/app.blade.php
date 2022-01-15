<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Frontend</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/library/fontawesome.all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="{{ asset('js/library/jquery.3.6.0.js') }}"></script>
    <script src="{{ asset('js/common.js') }}"></script>
    <link href="{{ asset('css/library/bootstrap5.0.2.min.css') }}" rel="stylesheet">

</head>
<body>
    <section class="header">
            <div class="header-ttl clearfix">
              <div class="logo">
                <h1><a href="index.html">Health is Wealth</a></h1>
              </div>
               <div class="nav-inner">
                <ul class="menu-blk clearfix">
                  <li class="home"><a href="" class="active">HOME</a></li>
                  <li class="about"><a href="">ABOUT US</a></li>
                  <li class="product"><a href="">OUR POST</a></li>
                  <li class="contact"><a href="">CONTACT US</a></li>
                  {{--<li class="service"><a href="{{route('registerView')}}">Register</a></li>--}}

                </ul>
               </div>

              </div>
            <div class="logo-img">
                <img src="{{asset('img/health.jpg')}}"  alt="">
            </div>

        </div>
    </section>
     @yield('content')
    <section class="footer">
        <div class="container">
            <div class="footer-sub">
                <div class="company">
                    <h4 id="health">Health is Wealth</h4>
                    <ul>
                        <li><i class="far fa-envelope"></i> health@info.com</li>
                        <li><i class="fas fa-phone-volume"></i>09-67890322</li>
                        <li><i class="fas fa-location-arrow"></i>Yangon,Myanmar</li>
                    </ul>

                </div>
                <div class="company">
                    <h4>About The Company</h4>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, animi modi vitae sequi laboriosam ea exercitationem.</p>
                </div>
                <div class="company">
                    <h4>Health is Wealth</h4>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <span class="input-group-text" id="basic-addon2">Sign up</span>
                      </div>

                </div>
            </div>
        </div>
    </section>
    </body>
</html>
