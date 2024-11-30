@extends('admin.layout.site_css')
@extends('admin.layout.site_js')

<body >
    
    <div class="container-fluid">
		<div class="row">
			<div class="col-md-7 col-sm-0 vh-100 bg-info">
				<div class="d-flex align-items-center justify-content-center">
					<div class="m-auto text-center mb-5">
						<!-- <i class="fa-solid fa-user-tie fa-5x" style="font-size: 25vh!important;"></i> -->
						<!-- <img src="assets/images/login.svg" alt="" srcset="" style="height: 25vh!important;"> -->
						<svg class="mb-4" style="height: 25vh!important;" xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 512"><path fill="red" fill-rule="nonzero" d="M256 0c68 0 132.89 26.95 180.96 75.04C485.05 122.99 512 188.11 512 256c0 68-26.95 132.89-75.04 180.96-23.49 23.56-51.72 42.58-83.15 55.6C323.59 505.08 290.54 512 256 512c-34.55 0-67.6-6.92-97.83-19.44l-.07-.03c-31.25-12.93-59.42-31.93-83.02-55.54l-.07-.07C26.9 388.82 0 324.03 0 256 0 116.78 112.74 0 256 0zm-52.73 332.87a67.668 67.668 0 01-5.6-6.74c-10.84-14.83-20.55-31.61-30.32-47.22-7.06-10.41-10.78-19.71-10.78-27.14 0-7.95 4.22-17.23 12.64-19.34-1.11-15.99-1.49-31.77-.74-48.88.37-4.08 1.12-8.17 2.23-12.27 4.84-17.1 16.73-30.86 31.61-40.15 5.2-3.35 10.78-5.94 17.1-8.18 10.78-4.09 5.57-20.45 17.48-20.82 27.88-.74 73.61 23.06 91.46 42.38 10.41 11.16 17.1 26.03 18.22 45.74l-1.12 44.03c5.2 1.49 8.55 4.84 10.04 10.04 1.49 5.95 0 14.13-5.2 25.67 0 .36-.38.36-.38.74-11.47 18.91-23.39 40.77-36.57 58.33-6.63 8.83-12.07 7.26-6.42 15.74 26.88 36.96 79.9 31.82 112.61 56.44 35.73-40.16 55.15-91.48 55.15-145.24 0-58.34-22.8-113.35-64.07-154.61v-.08C369.44 60.1 314.23 37.32 256 37.32 134.4 37.32 37.32 135.83 37.32 256c0 53.85 19.41 105.03 55.15 145.24 32.72-24.62 85.73-19.48 112.61-56.44 4.68-7.01 3.48-6.33-1.81-11.93z"/></svg>
					</div>
				</div>
			</div>

			<div class="col-md-5 vh-100 col-sm-12">
				<div class="d-flex align-items-center justify-content-center vh-100">
					<!-- <i class="fa-solid fa-user-tie"></i> -->
					<form action="/userLogin" method="post" class="col-md-10">
						@csrf
						<div class="m-auto text-center mb-5">
							<!-- <i class="fa-solid fa-user-tie fa-5x" style="font-size: 25vh!important;"></i> -->
							<!-- <img src="assets/images/login.svg" alt="" srcset="" style="height: 25vh!important;"> -->
							<svg class="mb-4" style="height: 25vh!important;" xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 512"><path fill="red" fill-rule="nonzero" d="M256 0c68 0 132.89 26.95 180.96 75.04C485.05 122.99 512 188.11 512 256c0 68-26.95 132.89-75.04 180.96-23.49 23.56-51.72 42.58-83.15 55.6C323.59 505.08 290.54 512 256 512c-34.55 0-67.6-6.92-97.83-19.44l-.07-.03c-31.25-12.93-59.42-31.93-83.02-55.54l-.07-.07C26.9 388.82 0 324.03 0 256 0 116.78 112.74 0 256 0zm-52.73 332.87a67.668 67.668 0 01-5.6-6.74c-10.84-14.83-20.55-31.61-30.32-47.22-7.06-10.41-10.78-19.71-10.78-27.14 0-7.95 4.22-17.23 12.64-19.34-1.11-15.99-1.49-31.77-.74-48.88.37-4.08 1.12-8.17 2.23-12.27 4.84-17.1 16.73-30.86 31.61-40.15 5.2-3.35 10.78-5.94 17.1-8.18 10.78-4.09 5.57-20.45 17.48-20.82 27.88-.74 73.61 23.06 91.46 42.38 10.41 11.16 17.1 26.03 18.22 45.74l-1.12 44.03c5.2 1.49 8.55 4.84 10.04 10.04 1.49 5.95 0 14.13-5.2 25.67 0 .36-.38.36-.38.74-11.47 18.91-23.39 40.77-36.57 58.33-6.63 8.83-12.07 7.26-6.42 15.74 26.88 36.96 79.9 31.82 112.61 56.44 35.73-40.16 55.15-91.48 55.15-145.24 0-58.34-22.8-113.35-64.07-154.61v-.08C369.44 60.1 314.23 37.32 256 37.32 134.4 37.32 37.32 135.83 37.32 256c0 53.85 19.41 105.03 55.15 145.24 32.72-24.62 85.73-19.48 112.61-56.44 4.68-7.01 3.48-6.33-1.81-11.93z"/></svg>
						</div>
						<div class="input-group mb-3 border-bottom">
							<span class="input-group-text bg-transparent border-0" id="basic-addon1"><i class="fa-solid fa-user text-info"></i></span>
							<input type="email" name="u_email" id="u_email" class="form-control bg-transparent border-0 text-white fw-bold" placeholder="Enter Email" aria-label="u_email" aria-describedby="basic-addon1">
						</div>
						<div class="input-group mb-3 border-bottom">
							<span class="input-group-text bg-transparent border-0" id="basic-addon1"><i class="fas fa-cog fa-spin mr-1 text-info"></i></span>
							<input type="password" name="u_pass" id="u_pass" class="form-control bg-transparent border-0 text-white fw-bold" placeholder="Enter Password" aria-label="u_pass" aria-describedby="basic-addon1">
						</div>
						<div class="input-group mb-3 m-auto">
							<div class="row col-md-12">
								<div class="col-md-6">
									<input class="form-check-input" type="checkbox" name="checkbox" id="checkbox"> <span class="text-white">Remeber me</span>
								</div>
								<div class="col-md-6 text-end p-0">
									<a class="text-white p-0" href="mailto:me.safi@outlook.com">Forgot Password?</a>
								</div>
							</div>
						</div>
						<div class="input-group mb-4">
							<input type="submit" class="form-control bg-primary border-0 text-white fw-bolder" placeholder="Login" aria-label="submit" style="box-shadow: 1px 10px 5px #352f2f!important;" aria-describedby="basic-addon1">
						</div>
						
					</form>
				</div>
			</div>
        
		</div>
    </div>
</body>