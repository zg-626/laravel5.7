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

 </head>
 <body>
	 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		 <div class="container">
			<a class="navbar-brand" href="/">社区</a>
			 <ul class="navbar-nav justify-content-end">
			 <li class="nav-item"><a class="nav-link" href="/help">帮助</a></li>
			 <li class="nav-item" ><a class="nav-link" href="#">登录</a></li>
			 </ul>
		 </div>
	 </nav>
	 <div class="container">
	   @yield('content')
	 </div>
 </body>
</html>
