<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('public/assets/frontend/')}}/css/normalize.css">
	<link rel="stylesheet" href="{{asset('public/assets/frontend/')}}/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{asset('public/assets/frontend/')}}/css/style.css">
	<link rel="stylesheet" href="{{asset('public/assets/frontend/')}}/css/responsive.css">
	<script src="{{asset('public/assets/frontend/')}}/js/modernizr-3.12.0.js"></script>
	<title>Document</title>
</head>

<body>


	<div class="header_area header_search_bg">
		<div class="only_for_mobile d-block d-sm-none">
			<div class="mobile_menu">
				<div class="site_logo"><a href="{{ URL::to('/') }}"><img src="{{asset('public/assets/frontend/')}}/img/bing-mini.svg" alt=""></a></div>
				<div class="header_option_mobile">
					<ul class="header_menus">
						<li><a href="#"><img src="{{asset('public/assets/frontend/')}}/img/settings.svg" alt=""></a></li>
						<li><a href="#"><img src="{{asset('public/assets/frontend/')}}/img/menu.svg" alt=""></a></li>
						<li><a href="#"><img src="{{asset('public/assets/frontend/')}}/img/Ellipse 1.png" alt="" class="h-32 w-32"></a></li>
					</ul>
				</div>
			</div>
			<div class="mobile_search_box main_search_box">
				<form action="search.html" method="post" class="site_main_search">
					<div class="search_box">
						<button type="submit" class="search_submit" title="Search"><img src="{{asset('public/assets/frontend/')}}/img/bing-mini.svg" alt=""></button>
						<input type="text" name="search" title="Search anything or type any URL" placeholder="Search anything" class="search_prompt">
						<button id="voice_search" class="voice_prompt" title="Search your voice" name="voice"><img src="{{asset('public/assets/frontend/')}}/img/Keyboard voice.svg" alt=""></button>
						<button id="img_search" class="img_prompt" title="Search by uploading image" name="img-upload"><img src="{{asset('public/assets/frontend/')}}/img/Camera.svg" alt=""></button>
					</div>
				</form>
					
				</form>
			</div>
		</div>


		<div class="container-fluid">
			<div class="header_menu header_search d-none d-sm-flex">
				<div class="header_search_box">
					<a href="{{ URL::to('/') }}"><img src="{{asset('public/assets/frontend/')}}/img/bing-mini.svg" alt=""></a>
					<form action="{{ route('result') }}" method="get" class="search_page_search">

						<input type="search" name="keyword_string" id="" value="{{ $keyword_string ?? '' }}">
						<button class="clear_text" type="reset"><img src="{{asset('public/assets/frontend/')}}/img/cross.png" alt=""></button>
						<button class="voice_search" type="mic"><img src="{{asset('public/assets/frontend/')}}/img/Keyboard voice.svg"
								alt=""></button>
						<button class="image_upload" type="file"><img src="{{asset('public/assets/frontend/')}}/img/Camera.svg" alt=""></button>
						<button class="search_btn" type="submit" id="submit_btn"><img src="{{asset('public/assets/frontend/')}}/img/Search.png"
								alt=""></button>
					</form>
				</div>
				<div class="header_options">
					<ul class="header_menus">
						<li><a href="#"><img src="{{asset('public/assets/frontend/')}}/img/settings.svg" alt=""></a></li>
						<li><a href="#"><img src="{{asset('public/assets/frontend/')}}/img/menu.svg" alt=""></a></li>
						<li><a href="#"><img src="{{asset('public/assets/frontend/')}}/img/Ellipse 1.png" alt="" class="h-32 w-32"></a></li>
					</ul>
				</div>
			</div>
			<div class="search_types">

				<ul class="search_types_selector nav nav-tabs" id="myTab" role="tablist">
					<li class="single_search_item nav-item">
						<a href="{{ route('all', $keyword_string) }}" class="nav-link " aria-selected="true"><img src="{{asset('public/assets/frontend/')}}/img/Location.svg" alt="">
							<p>All</p>
						</a>
					</li>
					<li class="single_search_item nav-item">
						<a href="{{ route('image', $keyword_string) }}" class="nav-link " aria-selected="false">
						<img src="{{asset('public/assets/frontend/')}}/img/Image 2.svg" alt="">
							<p>Image</p>
						</a></li>
					<li class="single_search_item nav-item">
						<a href="#" class="nav-link " data-bs-toggle="tab" data-bs-target="#video" aria-selected="false">
						<img src="{{asset('public/assets/frontend/')}}/img/Video.svg" alt="">
							<p>Video</p>
						</a></li>

					<li class="single_search_item nav-item">
						<a href="{{ route('news', $keyword_string) }}" class="nav-link active" aria-selected="false">
						<img src="{{asset('public/assets/frontend/')}}/img/Document.svg" alt="">
							<p>News</p>
						</a></li>


					<li class="single_search_item nav-item">
						<a href="{{ route('maps', $keyword_string) }}" class="nav-link "  aria-selected="false">
						<img src="{{asset('public/assets/frontend/')}}/img/Location.svg" alt="">
							<p>Maps</p>
						</a></li>

					<li class="single_search_item nav-item more_item">
						<a href="#">
							<img src="{{asset('public/assets/frontend/')}}/img/Group 12.svg" alt="">
							<p>More</p>
						</a>
						<ul class="sub_item d-none">
							<li><a href="#" class="nav-link " data-bs-toggle="tab" data-bs-target="#news" aria-selected="false">News</a></li>
							<li><a href="#" class="nav-link " data-bs-toggle="tab" data-bs-target="#" aria-selected="false">Flights</a></li>
							<li><a href="#" class="nav-link " data-bs-toggle="tab" data-bs-target="#" aria-selected="false">Hotels</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
	




	
	<!-- header search -->
	<!-- search result -->
	<div class="search_result_area">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<p class="search_item_count">About </p>
				</div>
			</div>
			<div class="row tab-content" id="myTabContent">
				
				
					<!-- all home -->
					<div class="tab-pane news_result fade show active" id="news" >
						<div class="row">
							

							@foreach ($news as $item)
							<div class="col-lg-3">
								<div class="single_news_box" style="margin-bottom: 15px;">
									<a href="{{ $item['url'] }}" class="single_news_item">
										<div class="news_img">
											<img src="{{ $item['image']['url'] ?? '' }}" class="img-fluid" alt="" style="width: 100%;height: 200px;">
										</div>
										<div class="news_meta">
											<div class="source_link">
												<span class="link_text">{{ $item['provider']['name'] ?? '' }}</span>
												<!-- <span class="times">. 45m</span> -->
											</div>
											<div class="news_title">{{ $item['title'] }}</div>
										</div>
									</a>
								</div>
							</div>
							@endforeach 

						</div>
						<div class="row">
							<div class="col-12 d-flex justify-content-center mt-3">
								<div class="btn load_more_btn">
									<a href="#" class="load_more_btn">Load More Item</a>
								</div>
							</div>
						</div>
					</div>
					<!-- all search -->
			
					<!-- all home -->
					<div class="tab-pane fade show" id="image" >
						<div class="row">
							more
						</div>
					</div>
					<!-- all search -->
				
			</div>
			
		</div>
	</div>
	</div>
	<!-- search result -->

	<!-- search_result_imgage -->
	
	<!-- search_result_imgage -->

	<!-- footer area -->
	<div class="footer_area">
		<div class="container-fluid">
			<div class="site_footer_content">
				<div class="footer_left">
					<ul class="">
						<li class="location"><img src="{{asset('public/assets/frontend/')}}/img/Location.png" alt="">
							<p class="loc_name">India</p>
						</li>

						<li class="footer_lang">
							<select name="" id="">
								<option value="#">Bangla</option>
								<option value="#">English</option>
							</select>
						</li>
						<li class="search_setting">
							<p>Safe Search</p>
							<label class="switch">
								<input type="checkbox" checked>
								<span class="slider round"></span>
							</label>
						</li>
					</ul>
				</div>
				<div class="footer_right">
					<ul>
						<li><a href="help.html">Help</a></li>
						<li><a href="report.html">Report</a></li>
						<li><a href="business.html">Business</a></li>
						<li><a href="terms.html">Terms & Policy</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- footer area end -->



	<script src="{{asset('public/assets/frontend/')}}/js/Jquery-3.7.0.js"></script>
	<script src="{{asset('public/assets/frontend/')}}/js/bootstrap.min.js"></script>
	<script src="{{asset('public/assets/frontend/')}}/js/isotope.js"></script>
	<script src="{{asset('public/assets/frontend/')}}/js/main.js"></script>
</body>

</html>