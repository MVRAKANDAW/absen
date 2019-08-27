<!DOCTYPE html>
<html>
<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">
    @include('front_end.layout.header')
    <!-- Styles -->
	<link href="{{ url('css/app.css') }}" rel="stylesheet">
</head>
<body>   
        <div class="content-body">
        @yield('content')
        </div>
</body>
</html>