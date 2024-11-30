<!doctype html>
<html class="no-js" lang="en">
<head>
	@include('front.layout.site_css')
</head>

<body class="">

	<div class="bmd-layout-container bmd-drawer-f-l avam-container animated bmd-drawer-in">
		@include('front.layout.site_header')
        @include('front.layout.site_silder')
		@yield('content')
	</div>
    @include('front.layout.site_js')
</body>

</html>