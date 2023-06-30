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

	  <script async src="https://cse.google.com/cse.js?cx=96fd9eaa55a6d41f0"> </script>

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
						<a href="{{ route('all', $keyword_string) }}" class="nav-link active" aria-selected="true"><img src="{{asset('public/assets/frontend/')}}/img/Location.svg" alt="">
							<p>All</p>
						</a>
					</li>
					<li class="single_search_item nav-item">
						<a href="{{ route('image', $keyword_string) }}" class="nav-link "  aria-selected="false">
						<img src="{{asset('public/assets/frontend/')}}/img/Image 2.svg" alt="">
							<p>Image</p>
						</a></li>
					<li class="single_search_item nav-item">
						<a href="#" class="nav-link " data-bs-toggle="tab" data-bs-target="#video" aria-selected="false">
						<img src="{{asset('public/assets/frontend/')}}/img/Video.svg" alt="">
							<p>Video</p>
						</a></li>

					<li class="single_search_item nav-item">
						<a href="{{ route('news', $keyword_string) }}" class="nav-link" aria-selected="false">
						<img src="{{asset('public/assets/frontend/')}}/img/Document.svg" alt="">
							<p>News</p>
						</a></li>


					<li class="single_search_item nav-item">
						<a href="{{ route('maps', $keyword_string) }}" class="nav-link " aria-selected="false">
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
					<p class="search_item_count">About {{ $results['searchInformation']['formattedTotalResults'] }} results({{ $results['searchInformation']['formattedSearchTime'] }} seconds)</p>
				</div>
			</div>
			<div class="row tab-content" id="myTabContent">
					<!-- all home -->
					<div class="tab-pane fade show active" id="all" >
						<div class="row">
							<div class="col-lg-7">
								<div class="search_result_container">



									@foreach($results['items'] as $item)
									
									<?php
										$img = $item['pagemap']['cse_thumbnail'][0]['src'] ?? '';
									?>
									<div class="single_search_result">
										<div class="search_result_item">
											<a href="{{ $item['link'] }}" target="_blank"><img src="{{ $img ?? '' }}" alt=""> {{ $item['title'] }} </a>
										</div>
										<div class="resutl_site_link">
											<a href="{{ $item['displayLink'] }}" target="_blank">{{ $item['displayLink'] }}</a>
										</div>
										<p><strong>{{ $item['snippet'] }}</strong></p>
									</div>
									@endforeach
								
			
									<!-- tag list -->
									<div class="recent_search_tag">
										<h3>Searches related to {{ $keyword_string ?? '' }}</h3>
										<ul>
											<li><a href="#">galaxy s22 specs</a></li>
											<li><a href="#">galaxy s22 reviews</a></li>
											<li><a href="#">samsung galaxy s22 offers</a></li>
											<li><a href="#">galaxy s22 price</a></li>
											<li><a href="#">galaxy s22 Flipkart</a></li>
											<li><a href="#">galaxy s22 Amazon</a></li>
										</ul>
									</div>
									<!--  tag list end -->



									<!-- pagination link -->
									<!-- <div class="site_pagination_links">
										<ul>
											<li class="paginate_links paginate_prev"><a href="#"><svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M17 7.27436C17 7.65405 16.7178 7.96785 16.3518 8.01751L16.25 8.02436L3.066 8.02376L7.82899 12.7673C8.12251 13.0595 8.12353 13.5344 7.83127 13.8279C7.56558 14.0948 7.14897 14.1199 6.85489 13.9027L6.77061 13.8302L0.720613 7.80623C0.681923 7.7677 0.648317 7.72601 0.619795 7.68198C0.611738 7.66873 0.603539 7.65517 0.595764 7.64134C0.588614 7.62948 0.582151 7.61717 0.576056 7.60472C0.567589 7.58661 0.559317 7.5679 0.551805 7.54881C0.545702 7.53409 0.540607 7.51978 0.535959 7.50535C0.530434 7.48745 0.525064 7.46839 0.520447 7.44903C0.517014 7.43551 0.514294 7.4225 0.511923 7.40944C0.508587 7.39001 0.505749 7.3699 0.503723 7.34956C0.501974 7.33404 0.500921 7.31866 0.50034 7.30327C0.500189 7.29394 0.5 7.28417 0.5 7.27436L0.500376 7.2453C0.50095 7.23058 0.501955 7.21588 0.503393 7.2012L0.5 7.27436C0.5 7.22703 0.504383 7.18072 0.512768 7.13583C0.514711 7.1251 0.517029 7.11409 0.519594 7.10313C0.524921 7.08055 0.531078 7.05881 0.538168 7.0375C0.541647 7.02691 0.545702 7.01559 0.550034 7.00436C0.558798 6.9818 0.568325 6.96028 0.578804 6.93933C0.583673 6.92947 0.589125 6.91916 0.594835 6.90895C0.604208 6.89229 0.613863 6.87646 0.624073 6.86103C0.631277 6.85011 0.639254 6.83874 0.647583 6.82755L0.654074 6.81891C0.67428 6.79251 0.696201 6.76749 0.719669 6.74403L0.72057 6.74333L6.77057 0.718329C7.06407 0.426043 7.53894 0.427026 7.83123 0.720525C8.09694 0.987342 8.12029 1.40406 7.90182 1.69721L7.82903 1.78118L3.068 6.52376L16.25 6.52436C16.6642 6.52436 17 6.86014 17 7.27436Z" fill="black"/>
												</svg>
												
												</a></li>
											<li class="paginate_links"><a href="#">2</a></li>
											<li class="paginate_links"><a href="#">3</a></li>
											<li class="paginate_links"><a href="#">4</a></li>
											<li class="paginate_links paginate_next"><a href="#"><svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M0 7.72589C0 7.34619 0.282154 7.0324 0.648229 6.98274L0.75 6.97589L13.934 6.97649L9.17101 2.23296C8.87749 1.9407 8.87647 1.46582 9.16873 1.1723C9.43442 0.905462 9.85103 0.880359 10.1451 1.09758L10.2294 1.17002L16.2794 7.19402C16.3181 7.23254 16.3517 7.27424 16.3802 7.31827C16.3883 7.33152 16.3965 7.34508 16.4042 7.35891C16.4114 7.37076 16.4178 7.38308 16.4239 7.39552C16.4324 7.41363 16.4407 7.43234 16.4482 7.45143C16.4543 7.46615 16.4594 7.48047 16.464 7.4949C16.4696 7.51279 16.4749 7.53186 16.4796 7.55122C16.483 7.56473 16.4857 7.57774 16.4881 7.5908C16.4914 7.61023 16.4943 7.63034 16.4963 7.65069C16.498 7.66621 16.4991 7.68158 16.4997 7.69697C16.4998 7.7063 16.5 7.71607 16.5 7.72589L16.4996 7.75494C16.4991 7.76966 16.498 7.78437 16.4966 7.79904L16.5 7.72589C16.5 7.77322 16.4956 7.81952 16.4872 7.86442C16.4853 7.87514 16.483 7.88615 16.4804 7.89711C16.4751 7.91969 16.4689 7.94143 16.4618 7.96275C16.4584 7.97334 16.4543 7.98465 16.45 7.99588C16.4412 8.01845 16.4317 8.03996 16.4212 8.06092C16.4163 8.07077 16.4109 8.08109 16.4052 8.0913C16.3958 8.10795 16.3861 8.12378 16.3759 8.13921C16.3687 8.15014 16.3607 8.1615 16.3524 8.17269L16.3459 8.18133C16.3257 8.20773 16.3038 8.23275 16.2803 8.25622L16.2794 8.25692L10.2294 14.2819C9.93593 14.5742 9.46106 14.5732 9.16877 14.2797C8.90306 14.0129 8.87971 13.5962 9.09818 13.303L9.17097 13.2191L13.932 8.47649L0.75 8.47589C0.335786 8.47589 0 8.1401 0 7.72589Z" fill="black"/>
												</svg>
												</a></li>
										</ul>
									</div> -->
									<!-- pagination link -->
								</div>
							</div>
			
							<div class="col-lg-5">
								<div class="search_sidebar_content">
									<div class="content_box">
										<img src="{{ $topData['pagemap']['cse_thumbnail'][0]['src'] ?? ''  }}" class="img-fluid content-image" alt="">
										<div class="title_share">
											<div class="title">
												<a href="{{ $topData['link'] ?? '' }}"><img src="{{asset('public/assets/frontend/')}}/img/image 13.png" alt=""><p> {{ $topData['title'] }} </p></a>
											</div>
											<div class="share_link">
												<a href="{{ $topData['link'] ?? '' }}"><img src="{{asset('public/assets/frontend/')}}/img/share.svg" alt=""></a>
											</div>
										</div>
										<div class="rating_count">
											<div class="title">
											<p>4.9</p> 
											<ul>
												<li><img src="{{asset('public/assets/frontend/')}}/img/Star.png" alt=""></li>
												<li><img src="{{asset('public/assets/frontend/')}}/img/Star.png" alt=""></li>
												<li><img src="{{asset('public/assets/frontend/')}}/img/Star.png" alt=""></li>
												<li><img src="{{asset('public/assets/frontend/')}}/img/Star.png" alt=""></li>
												<li><img src="{{asset('public/assets/frontend/')}}/img/Star.png" alt=""></li>
												<li><img src="{{asset('public/assets/frontend/')}}/img/Star.png" alt=""></li>
											</ul>
											<p>36T Overall Reviews</p>
											</div>
										</div>
										<div class="site_btn_area">
											<div class="btn_no_border"><a href="#">Details</a></div>
											<div class="btn_no_border"><a href="#">Shop</a></div>
										</div>
										<div class="full_text">
											<p>
												 {{ $topData['snippet'] ?? ''  }} 

												<a href="{{ $topData['link'] ?? '' }}">Learn More..</a>
											</p>
										</div>
										<!-- user revew -->
										<div class="user_review_section">
											<div class="user_review">User Reviews</div>
											<div class="user_review_btn">
												<a href="#"><b>+</b> Write a review</a>
											</div>
										</div>
										<div class="reviewer_section">
											<div class="reviewer_tab">
												<div class="reviewer"><img src="{{asset('public/assets/frontend/')}}/img/Ellipse 1.png" alt=""><span class="name">ALEX SHANTO</span></div>
												<div class="reviewer_rating"><p>4.8</p><img src="{{asset('public/assets/frontend/')}}/img/Star.png" alt=""></div>
											</div>
											<div class="review_text">
												<p>One of the best smartphone i have purchased. Fully satisfied!!</p>
											</div>
			
											<div class="reviewer_tab">
												<div class="reviewer"><img src="{{asset('public/assets/frontend/')}}/img/Ellipse 1.png" alt=""><span class="name">ALEX SHANTO</span></div>
												<div class="reviewer_rating"><p>4.8</p><img src="{{asset('public/assets/frontend/')}}/img/Star.png" alt=""></div>
											</div>
											<div class="review_text">
												<p>Killer performance i specially bought it for gaming and it is capable of handling tasks very smoothly. Its been 7 months and this phone is worth it.</p>
											</div>
										</div>
										<!-- user revew -->
									</div>
									<!-- sponsored content -->
									<div class="sponsored">
										<div class="group_btn">
											<div class="btn_sponsored bg-highlight"><a href="#">Sponsored</a></div>
											<div class="btn_sponsored"><a href="#">Shop Now | Samsung Galaxy S22  </a></div>
										</div>
										
			
										<div class="sponsored_item">
											<div class="sponsor_item_box">
												<a href="#"><img src="{{asset('public/assets/frontend/')}}/img/sponsor.png" alt=""></a>
												<a href="#" class="title">Samsung Galaxy S22</a>
												<p class="price">₹91,900</p>
												<a href="#" class="affiliate_link">Amazon.in</a>
												<p class="delivery">Free delivery</p>
											</div>
											<div class="sponsor_item_box">
												<a href="#"><img src="{{asset('public/assets/frontend/')}}/img/sponsor.png" alt=""></a>
												<a href="#" class="title">Samsung Galaxy S22</a>
												<p class="price">₹91,900</p>
												<a href="#" class="affiliate_link">Amazon.in</a>
												<p class="delivery">Free delivery</p>
											</div>
										</div>
									</div>
								</div>
							</div>
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