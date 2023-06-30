@extends('frontend.layouts.app')
@section('title')
<title>Home | {{ config('app.name') }}</title>
<meta name="csrf-token" content="{{csrf_token()}}">
@endsection
@section('content')


<style>
    .gsc-input-box{
        min-width: 45%;
        background-color: #fff;
        border-radius: 50px;
        padding: 15px 24px;
        border: 0;
    }

    .gsc-tabsArea{
        display: none;
    }

    .gsc-search-button{
        display: none;
    }

</style>



    <!-- search box -->
    <div class="search_box_content" style="margin-top: 50px;">
        <div class="container-fluid">
            <div class="search_heading">
                <img src="{{asset('public/assets/frontend/')}}/img/bing.png" alt=""> 
                <h2>All New Search Engine is here!</h2>
            </div>
            <div class="main_search_box min-w-80">
                <form class="site_main_search">
                    <div class="gcse-searchbox-only"></div>
                </form>
                
            </div>
        </div>
    </div>


    <!-- search box end -->
    <div class="top_site_list">
        <div class="site_list">
            <div class="single_site_lists">
                <a href="#" class="site_img wh-48">
                    <div class="img_class">
                        <img src="{{asset('public/assets/frontend/')}}/img/site-icon.png" alt="">
                    </div>
                </a>
                <div class="site_title">
                    <h6>Pinterest</h6>
                </div>
            </div>
            <div class="single_site_lists">
                <a href="#" class="site_img wh-48">
                    <div class="img_class">
                        <img src="{{asset('public/assets/frontend/')}}/img/site-icon.png" alt="">
                    </div>
                </a>
                <div class="site_title">
                    <h6>Pinterest</h6>
                </div>
            </div>
            <div class="single_site_lists">
                <a href="#" class="site_img wh-48">
                    <div class="img_class">
                        <img src="{{asset('public/assets/frontend/')}}/img/site-icon.png" alt="">
                    </div>
                </a>
                <div class="site_title">
                    <h6>Pinterest</h6>
                </div>
            </div>
            <div class="single_site_lists">
                <a href="#" class="site_img wh-48">
                    <div class="img_class">
                        <img src="{{asset('public/assets/frontend/')}}/img/site-icon.png" alt="">
                    </div>
                </a>
                <div class="site_title">
                    <h6>Pinterest</h6>
                </div>
            </div>
            <div class="single_site_lists">
                <a href="#" class="site_img wh-48">
                    <div class="img_class">
                        <img src="{{asset('public/assets/frontend/')}}/img/site-icon.png" alt="">
                    </div>
                </a>
                <div class="site_title">
                    <h6>Pinterest</h6>
                </div>
            </div>
            <div class="single_site_lists">
                <a href="#" class="site_img wh-48">
                    <div class="img_class">
                        <img src="{{asset('public/assets/frontend/')}}/img/plus.png" alt="">
                    </div>
                </a>
                <div class="site_title">
                    <h6>Add Shortcut</h6>
                </div>
            </div>
        </div>
    </div>
    <!-- top sites end -->

    <!-- top stories from api -->
    <div class="top_news_area">
        <div class="container-fluid">
            <div class="section_title">
                <h4>Top Stories</h4>
            </div>
            <div class="row d-flex justify-content-md-center">
                <div class="row">


<!--                 <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-4">
                    <div class="single_stories_box">
                        <div class="stories_box_content">
                            <div class="storie_links_image">
                                <a href="#"><img src="{{asset('public/assets/frontend/')}}/img/Rectangle 8.png" class="img-fluid" alt=""></a>
                            </div>
                            <div class="stories_source_meta">
                                <div class="news_original_site">
                                    <div class="site_logo_name">
                                        <img src="{{asset('public/assets/frontend/')}}/img/znews.png" alt=""> znews
                                    </div>
                                    <div class="news_published_time">
                                        <p>5 hours ago</p>
                                    </div>
                                </div>
                                <div class="news_reaction_bookmark">
                                    <div class="news_reaction">

                                        <?php

                                            $user = Auth::user();
                                            $like_count = App\Models\PostLike::where('post_id', 1)->count();
                                            $dislike_count = App\Models\PostDislike::where('post_id', 1)->count();

                                        ?>


                                        <button type="button" class="news_like" onclick="postLike(1, this)"><img src="{{asset('public/assets/frontend/')}}/img/Thumbs up.png" alt=""> <p class="likeCount">{{$like_count ?? 0}}</p></button>

                                        <a href="{{ url('post-dislike', 1) }}"><button class="news_dislike"><img src="{{asset('public/assets/frontend/')}}/img/Thumbs down.png" alt=""> <p>{{ $dislike_count ?? 0 }}</p></button></a>
                                    </div>
                                    <div class="news_bookmark">
                                        <a href="#"><img src="{{asset('public/assets/frontend/')}}/img/Bookmark.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="news_title_link"><a href="#">See how new tech and AI businesses are booming in California</a></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-4">
                    <div class="single_stories_box">
                        <div class="stories_box_content">
                            <div class="storie_links_image">
                                <a href="#"><img src="{{asset('public/assets/frontend/')}}/img/Rectangle 8.png" class="img-fluid" alt=""></a>
                            </div>
                            <div class="stories_source_meta">
                                <div class="news_original_site">
                                    <div class="site_logo_name">
                                        <img src="{{asset('public/assets/frontend/')}}/img/znews.png" alt=""> znews
                                    </div>
                                    <div class="news_published_time">
                                        <p>5 hours ago</p>
                                    </div>
                                </div>
                                <div class="news_reaction_bookmark">
                                    <div class="news_reaction">
                                        <?php

                                            $like_count = App\Models\PostLike::where('post_id', 2)->count();
                                            $dislike_count = App\Models\PostDislike::where('post_id', 2)->count();

                                        ?>

                                        <button type="button" class="news_like"  onclick="postLike(2, this)"><img src="{{asset('public/assets/frontend/')}}/img/Thumbs up.png" alt=""> <p class="likeCount">{{$like_count ?? 0}}</p></button>

                                        <a href="{{ url('post-dislike', 2) }}"><button class="news_dislike"><img src="{{asset('public/assets/frontend/')}}/img/Thumbs down.png" alt=""> <p>{{ $dislike_count ?? 0 }}</p></button></a>
                                    </div>
                                    <div class="news_bookmark">
                                        <a href="#"><img src="{{asset('public/assets/frontend/')}}/img/Bookmark.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="news_title_link"><a href="#">See how new tech and AI businesses are booming in California</a></div>
                        </div>
                    </div>
                </div>
 -->

                    @php $i = 1; @endphp
                    @foreach ($news as $item)
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-4">



                            <div class="single_stories_box">
                                <div class="stories_box_content">
                                    <div class="storie_links_image">
                                        <a href="{{ $item['url'] }}"><img src="{{ $item['image']['url'] ?? '' }}" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="stories_source_meta">
                                        <div class="news_original_site">
                                            <div class="site_logo_name">
                                                <img src="{{asset('public/assets/frontend/')}}/img/znews.png" alt=""> znews
                                            </div>
                                            <div class="news_published_time">

                                                <?php

                                                    $currentTime = Carbon\Carbon::now();
                                                    $timestamp = $item['datePublished'];
                                                    $targetTime = Carbon\Carbon::parse($timestamp);
                                                    $timeDiff = $currentTime->diffInHours($targetTime);

                                                     $formattedTime = $timeDiff . ' hours ago';

                                                    $like_count = App\Models\PostLike::where('post_id', $item['id'])->count();
                                                    $dislike_count = App\Models\PostDislike::where('post_id', $item['id'])->count();

                                                ?>

                                                <p>{{ $formattedTime }}</p>
                                            </div>
                                        </div>
                                        <div class="news_reaction_bookmark">
                                            <div class="news_reaction">
                                                <?php
                                                    $id = $item['id'];
                                                ?>
                                                <button type="button" class="news_like" data-id="{{ $item['id'] }}"><img src="{{asset('public/assets/frontend/')}}/img/Thumbs up.png" alt=""> <p class="likeCount">{{$like_count ?? 0}}</p></button>

                                                <button class="news_dislike"  data-id="{{ $item['id'] }}"><img src="{{asset('public/assets/frontend/')}}/img/Thumbs down.png" alt=""> <p class="dislikeCount">{{ $dislike_count ?? 0 }}</p></button>
                                            </div>
                                            <div class="news_bookmark">
                                                <a href="#"><img src="{{asset('public/assets/frontend/')}}/img/Bookmark.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="news_title_link"><a href="{{ $item['url'] }}">{{ $item['title'] }}</a></div>
                                </div>
                            </div>
                        </div>


                        @if ($i == 3)


                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-4">
                            <!-- weather -->
                            <div class="weather_update" style="background-image: url({{asset('public/assets/frontend/')}}/img/weather_bg.jpg), url({{asset('public/assets/frontend/')}}/img/weather_bg-2.jpg);">
                                <div class="weather_top">
                                    <div class="top_icon"><svg slot="title-icon" width="16" height="16" viewBox="0 0 16 16"
                                            fill="none">
                                            <path fill="url(#paint0_linear)" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14z"></path>
                                            <path fill="url(#paint1_linear)"
                                                d="M7.2 11c0-.93.73-1.7 1.67-1.77a2.76 2.76 0 0 1 2.66-2.06c.97 0 1.8.5 2.3 1.23a2.2 2.2 0 0 1 1.77 3.47 2.21 2.21 0 0 1-1.8.93H9a1.77 1.77 0 0 1-1.57-.93A1.99 1.99 0 0 1 7.2 11z">
                                            </path>
                                            <defs>
                                                <linearGradient id="paint0_linear" x1="11.5" x2="4.5" y1="14.08" y2="1.95"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#E25A01"></stop>
                                                    <stop offset="1" stop-color="#FFD400"></stop>
                                                </linearGradient>
                                                <linearGradient id="paint1_linear" x1="13.17" x2="9.84" y1="13.47" y2="7.71"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#CCC"></stop>
                                                    <stop offset="1" stop-color="#fff"></stop>
                                                </linearGradient>
                                            </defs>
                                        </svg></div>
                                    <div class="top_title"><select name="" id="weather_select">
                                            <option value="Barishal">Dhaka</option>
                                            <!-- <option value="Barishal">Barishal</option> -->
                                            <!-- <option value="Barishal">Bhola, Barishal</option> -->
                                        </select></div>
                                </div>
                                <div class="weather_details" >
                                    <div class="weather_result">
                                        <div class="weather_icon">
                                            <img src="{{asset('public/assets/frontend/')}}/img/CloudyV3.svg" alt="cloudy">
                                            <span class="today_heat">{{ $weather_response_data['data'][0]['temp'] ?? '0' }}</span>
                                            <span class="heat_meatre">°C</span>
                                        </div>
                                        <div class="weather_links">
                          
                                            <a href="#"><span>Sea Level Pressure  {{ $weather_response_data['data'][0]['slp'] ?? '0' }} </span></a>
                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-block weather_source">
                                    <a href="#">See full forecast</a>
                                </div>
                            </div>
                            <!-- weather -->
        
                            <!-- cricket -->
                            <div class="cricket_update weather_update mt-2" style="background-image: url({{asset('public/assets/frontend/')}}/img/weather_bg.jpg), url({{asset('public/assets/frontend/')}}/img/weather_bg-2.jpg);">
                                <div class="cricket_top">
                                    <div class="top_icon"><img src="{{asset('public/assets/frontend/')}}/img/cricket.png" alt=""></div>
                                    <div class="top_title"><select name="" id="weather_select">
                                            <option value="CRICKET">CRICKET INTERNATIONAL</option>
                                        </select></div>
                                </div>
                                <div class="team_details">
                                    <div class="participant_area">
                                        <div class="sport_match_header">
                                            <div class="participant">
                                                <!-- <div class="p_image"><img src="{{asset('public/assets/frontend/')}}/img/srilanka.png" alt=""></div> -->
                                                <div class="p_name" title="SL">{{ $cricekt_response_data['matchHeader']['team1']['name'] ?? '' }}</div>
                                            </div>
                                            <div class="score_container">
                                                <div class="score_winer">{{ $cricekt_response_data['scoreCard'][0]['scoreDetails']['runs'] ?? '' }}</div>
                                                <div class="winner_tag"><svg width="5" height="10" viewBox="0 0 5 10"
                                                        fill="currentcolor">
                                                        <path d="M5 0 0 5.22 5 10V0Z"></path>
                                                    </svg></div>
                                            </div>
        
                                        </div>
                                        <div class="sport_match_header">
                                            <div class="participant">
                                                <!-- <div class="p_image"><img src="{{asset('public/assets/frontend/')}}/img/srilanka.png" alt=""></div> -->
                                                <div class="p_name" title="SL">{{ $cricekt_response_data['matchHeader']['team2']['name'] ?? '' }}</div>
                                            </div>
                                            <div class="score_container">
                                                <div class="score_winer">{{ $cricekt_response_data['scoreCard'][1]['scoreDetails']['runs'] ?? ''  }} </div>
                                                <div class="winner_tag"><svg width="5" height="10" viewBox="0 0 5 10"
                                                        fill="none">
                                                        <path d="M5 0 0 5.22 5 10V0Z"></path>
                                                    </svg></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single_spe"></div>
                                    <div class="cricket_details">
                                        <div class="game_state">{{$cricekt_response_data['matchHeader']['matchFormat'] ?? ''  }}</div>
                                        <div class="game_date">{{ date('Y-m-d', $cricekt_response_data['matchHeader']['matchStartTimestamp'] ?? '0' / 1000) }}</div>
                                    </div>
        
                                </div>
        
                                <div class="d-block cricket_source">
                                    <a href="#">{{ $cricekt_response_data['status'] ?? ''  }} <span><svg width="24" height="24"
                                                viewBox="10 8 24 24">
                                                <rect x="10" y="8" width="24" height="24" rx="12"></rect>
                                                <path
                                                    d="M17.5 20c0-.28.22-.5.5-.5h6.8l-2.65-2.65a.5.5 0 0 1 .7-.7l3.5 3.5c.2.2.2.5 0 .7l-3.5 3.5a.5.5 0 0 1-.7-.7l2.64-2.65H18a.5.5 0 0 1-.5-.5Z">
                                                </path>
                                            </svg></span></a>
                                </div>
                            </div>
                            <!-- cricket -->
                        </div>


                        @endif

                     @php $i++ @endphp
                    @endforeach 



                </div>
            </div>
        </div>
    </div>
    <!-- top stories from api end -->



    <script src="{{asset('public/assets/frontend/')}}/js/Jquery-3.7.0.js"></script>
    <script>

       $('.news_like').on('click',function(){
           var val = $(this).attr("data-id");
           var likeCountElement = $(this).find('.likeCount');
           var dislikeCountElement = $(this).siblings('.news_dislike').find('.dislikeCount');


            // alert(val)
         
            $.ajax({
              type: "get",
              url: "post-like/"+val,
              cache:false,
              beforeSend: function() {
                  // setting a timeout
              },
              success:function (data) {            
                // $('#section_id').html(data);
                likeCountElement.text(data.like_count);
                dislikeCountElement.text(data.dislike_count);

              },
              error: function (jqXHR, status, err) {
                alert(status);
                console.log(err);
              },
              complete: function () {
                // alert("Complete");
              }
            });


        });

       $('.news_dislike').on('click',function(){
           var val = $(this).attr("data-id");
           var likeCountElement = $(this).siblings('.news_like').find('.likeCount');
          var dislikeCountElement = $(this).find('.dislikeCount');


            // alert(val)
         
            $.ajax({
              type: "get",
              url: "post-dislike/"+val,
              cache:false,
              beforeSend: function() {
                  // setting a timeout
              },
              success:function (data) {   
                console.log(data);         
                likeCountElement.text(data.like_count);
                dislikeCountElement.text(data.dislike_count);


              },
              error: function (jqXHR, status, err) {
                alert(status);
                console.log(err);
              },
              complete: function () {
                // alert("Complete");
              }
            });


        });
    </script>

@endsection
