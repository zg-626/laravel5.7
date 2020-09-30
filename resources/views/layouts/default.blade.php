<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>@yield('title','web')-社区</title>
  <!-- <link rel="stylesheet" href="/css/app.css"> -->
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  <script type="text/javascript" src="{{mix('js/app.js')}}"></script>
 </head>
 <body>
	@include('layouts._header')
	<div class="container">
		<div class="offset-md-1 col-md-10">
      @include('shared._messages')
  		@yield('content')
  		@include('layouts._footer')
		</div>
	</div>
 
 </body>
</html>
