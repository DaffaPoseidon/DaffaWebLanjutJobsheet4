<!DOCTYPE html> 
<!--
    Free  Template by Mohamed Sobhy
    https://www.facebook.com/Mido.HHH
-->
<html lang="en">
<head>
	<title>King Of Pasta</title>
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <script src="{{url('js/jquery.js')}}"></script> 
	<script src="{{url('js/jquery.glide.js')}}"></script>
    
    <link rel="stylesheet" href="{{url('css/style.css')}}">
      <link rel="stylesheet" href="{{url('css/animate.css')}}">
    <script type="text/javascript" src="{{url('js/MyJQ.js')}}"></script>
    <script src="{{url('js/jquery.localScroll.min.js')}}" type="text/javascript"></script>
	<script src="{{url('js/jquery.scrollTo.min.js')}}" type="text/javascript"></script> 
    <script src="{{url('js/wow.min.js')}}" type="text/javascript"></script> 

<!-- scroll function -->
<script type="text/javascript">
$(document).ready(function() {
   $('#navigations').localScroll({duration:800});
});
</script>


<script src="{{url('js/wow.min.js')}}"></script>
<script>
new WOW().init();
</script>


</head>
<body>

@include('layout.nav')
@yield('content')
@include('layout.footer')