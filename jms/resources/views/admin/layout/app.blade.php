<!doctype html>
<html class="no-js" lang="">

<head>
	@include('admin.layout.site_css')
</head>

<body class="">

	<div class="bmd-layout-container bmd-drawer-f-l avam-container animated bmd-drawer-in">
		@include('admin.layout.site_header')
        @include('admin.layout.site_silder')
		@yield('content')
	</div>
    @include('admin.layout.site_js')
</body>

</html>