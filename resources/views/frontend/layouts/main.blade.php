<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>HIO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Flex" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,500,600,700,800,900&display=swap" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/colorbox.css')}}">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('frontend/images/favicon.svg')}}" />
</head>
{{--<body data-spy="scroll" class="loading">--}}
{{--<div id="menu1"></div>--}}
@include('frontend.layouts.header')

<!-- slider -->
@yield('content')
<!-- content is above this -->
<!-- /footer is below this -->
<!--footer class="bottom">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h4>COPYRIGHT DISCLAIMER</h4>
        <p>
        Bassumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
        </p>
        <h4>Xem thêm</h4>
        <ul>
          <li>
          <a href="">Ne nec detracto appellantur <i class="fa fa-angle-right"></i></a>
          </li>
          <li>
          <a href="">Aperiam accusamus vel eu <i class="fa fa-angle-right"></i></a>
          </li>
          <li>
          <a href="">Nam albucius ponderum rationibu <i class="fa fa-angle-right"></i></a>
          </li>
        </ul>
      </div>
      <div class="col-md-4">
        <h4>KEEP IN TOUCH</h4>
        <p>
        Bassumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes. Bassumenda shoreditch et.
        </p>
        <h4>Xem thêm</h4>
        <ul>
          <li>
          <a href="">Ne nec detracto appellantur <i class="fa fa-angle-right"></i></a>
          </li>
          <li>
          <a href="">Aperiam accusamus vel eu <i class="fa fa-angle-right"></i></a>
          </li>
        </ul>
      </div>
      <div class="col-md-4">
        <h4>CONTACT INFORMATION</h4>
        <ul>
          <li>
          Address: Example Street 123, City
          </li>
          <li>
          Phone: (123) 123 12 12
          </li>
          <li>
          <a href="mailto:name@email.com">email: example@example.com</a>
          </li>
        </ul>
        <h4>Open Hours</h4>
        <ul>
          <li>
          Monday/Friday: 09:00am/17:00pm
          </li>
          <li>
          Saturday and Sunday: Off
          </li>
        </ul>
      </div>
      <div class="col-md-12">
        <div class="twitter">
          <div id="example1"></div>
        </div>
                  <ul class="socialicons">
                  <li>
                      <a href="https://www.facebook.com/pages/Rayoflightthemes/408688349185439"><i class="fa fa-facebook"></i></a>
                  </li>
                  <li>
                      <a href=""><i class="fa fa-twitter"></i></a>
                  </li>
                  <li>
                      <a href=""><i class="fa fa-linkedin"></i></a>
                  </li>
        <li>
                      <a href=""><i class="fa fa-instagram"></i></a>
                  </li>
        <li>
                      <a href=""><i class="fa fa-skype"></i></a>
                  </li>
        <li>
                      <a href=""><i class="fa fa-reddit"></i></a>
                  </li>
                  <li>
                      <a href=""><i class="fa fa-youtube"></i></a>
                  </li>
              </ul>
      <div class="copyright">
        <p>Copyright <a href="http://themeforest.net/user/rayoflightt?ref=rayoflightt">RayoflightThemes.com</a> 2015.</p>
      </div>
      <div class="scrollbutton">
        <a href="javascript:scrollToTop()" title="go to top"><i class="fa fa-chevron-up"></i></a>
      </div>
    </div>
  </div>
</div>
</footer-->

<!-- ==================== Start Footer ==================== -->

@include('frontend.layouts.footer')

<!-- ==================== End Footer ==================== -->

<script src="{{asset('frontend/js/jquery.js')}}"></script>
<script src="{{asset('frontend/js/jquery-migrate.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.js')}}"></script>
<script src="{{asset('frontend/js/flexslider.js')}}"></script>
<script src="{{asset('frontend/js/flickity.js')}}"></script>
<script src="{{asset('frontend/js/waypoints.js')}}"></script>
<script src="{{asset('frontend/js/masonry.js')}}"></script>
<script src="{{asset('frontend/js/twitter.js')}}"></script>
<script src="{{asset('frontend/js/scriptcontact.js')}}"></script>
<script src="{{asset('frontend/js/countto.js')}}"></script>
<script src="{{asset('frontend/js/colorbox.js')}}"></script>
<script src="{{asset('frontend/js/isotope.js')}}"></script>
<script src="{{asset('frontend/js/retina.js')}}"></script>
<script src="{{asset('frontend/js/less.js')}}"></script>
{{--<script src="{{asset('frontend/js/chart.js')}}"></script>--}}
{{--<script src="{{asset('frontend/js/chart_init.js')}}"></script>--}}
<script src="{{asset('frontend/js/scripts.js')}}"></script>

@stack('scripts')

</body>
</html>