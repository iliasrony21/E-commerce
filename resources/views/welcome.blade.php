<!DOCTYPE html>
<!--
	ustora by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com/ustora/
-->
<html lang="en">
  <head>
    @include('frontend.includes.meta')
    <title>Final Frontend</title>

    <!-- Google Fonts -->
    @include('frontend.includes.css')

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
     <!-- start header area -->
    @include('frontend.includes.header')
     <!-- End header area -->

     <!-- start site branding area -->
     @include('frontend.includes.endsitebranding')

     <!-- End site branding area -->
     @include('frontend.includes.mainmenu')
     <!-- End mainmenu area -->
     @include('frontend.includes.slider')
    <!-- End slider area -->

    @include('frontend.includes.promo')
    <!-- End promo area -->
    @include('frontend.includes.maincontent')
     <!-- End main content area -->
     @include('frontend.includes.brand')
     <!-- End brands area -->
     @include('frontend.includes.productwidget')
     <!-- End product widget area -->
     @include('frontend.includes.footertop')
     <!-- End footer top area -->
     @include('frontend.includes.footerbottom')
     <!-- End footer bottom area -->

 @include('frontend.includes.js')
  </body>
</html>
