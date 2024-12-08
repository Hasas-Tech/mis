<!doctype html>
<html class="no-js" lang="en">
<head>
	@include('layout.site_css')
</head>

<body class="">

	<div class="bmd-layout-container bmd-drawer-f-l avam-container animated bmd-drawer-in">
		@include('layout.site_header')
        @include('layout.site_silder')
		@yield('content')
	</div>
    @include('layout.site_js')
</body>

</html>
