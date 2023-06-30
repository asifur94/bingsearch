@extends('frontend.layouts.app')
@section('title')
<title>Home | {{ config('app.name') }}</title>
<meta name="csrf-token" content="{{csrf_token()}}">
@endsection
@section('content')

<style>

/* 	.gsc-expansionArea{
		display: flex;
	}

	.gs-webResult.gs-result{
		width: 300px;
	}

	.gs-image-box.gs-web-image-box.gs-web-image-box-landscape{
		width: 100%;
		height: 150px;
	}
 */

	.gsc-search-button{
		display: none;
	}

	.gsc-input-box{
		border: 0;
	}

	.gsc-control-cse.gsc-control-cse-en{
		background-color: var(--body-bg);
	}

	.gsc-webResult.gsc-result{
	    background: #fff;
	    border-radius: 20px;
	    padding: 16px;
	    margin: 15px 0;
	}

	.gsc-adBlock{

	    background: #fff;
	    border-radius: 20px;
	    padding: 16px;
	    margin: 15px 0;

	}

	.gsc-result-info{
		background: #fff;
	    display: inline-block;
	    padding: 15px;
	    font-size: 14px;
	    border-radius: 50px;
	}


	.gsc-results .gsc-cursor {
    	display: flex !important;
   	}

   	.gsc-cursor-page{

		display: -webkit-box !important;
	    display: -ms-flexbox !important;
	    display: flex !important;
	    background: #fff !important;
	    height: 48px !important;
	    width: 48px !important;
	    -webkit-box-pack: center !important;
	    -ms-flex-pack: center !important;
	    justify-content: center !important;
	    -webkit-box-align: center !important;
	    -ms-flex-align: center !important;
	    align-items: center !important;
	    border-radius: 25px !important;

   	}
</style>

			<div class="header_menu header_search d-none d-sm-flex" style="background: white;padding: 23px;">
				<div class="header_search_box">
					<a href="{{ URL::to('/') }}"><img src="{{asset('public/assets/frontend/')}}/img/bing-mini.svg" alt=""></a>
					<form action="" method="get" class="search_page_search">

						<div class="gcse-searchbox-only"></div>
					</form>
				</div>
			
			</div>


<script async src="https://cse.google.com/cse.js?cx=96fd9eaa55a6d41f0">
</script>
<div class="gcse-searchresults-only"></div>


@endsection
