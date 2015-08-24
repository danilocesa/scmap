<!DOCTYPE html>
<html>
  <head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- Site Properities -->
    <title>SCMAP - @yield('title')</title>

    <link rel="stylesheet" type="text/css" href="dist/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

  </head>
  <body>
		<!--Container-->
        <div class="ui basic segment" id="front-container">

      <!---Top Header -->
      @include('layouts.media') 
      <!--End Top Header-->

  		<!--Logo and Slogan-->
  		@include('layouts.logo') 
  		<!-- End Logo and Slogan --> 
  		<!--Menu Header-->
  		@include('layouts.menu') 
  		<!-- End Menu Header -->
  		<!--Main Content-->
  		<div class="ui vertical basic segment padded page grid content-container">
  		  @yield('content')
  		</div> 
  		<!-- End Main Content-->
      <div class="ui hidden divider"></div>
      <!-- Footer -->   
      @include('layouts.footer')
      <!-- End Footer -->

    </div>
    <!-- End Container -->

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.js"></script>
    <script src="dist/semantic.min.js"></script>
    <script src="js/homepage.js"></script>
  </body>
</html>