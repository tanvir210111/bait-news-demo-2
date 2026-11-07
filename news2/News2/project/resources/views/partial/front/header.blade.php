 @php
    $activeLangId = 1; // ডিফল্ট ইংরেজি
    if (Session::has('language')) {
        $activeLangId = Session::get('language');
    } else {
        $defaultLang = \Illuminate\Support\Facades\DB::table('languages')->where('is_default', 1)->first();
        if ($defaultLang) {
            $activeLangId = $defaultLang->id;
        }
    }
@endphp

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var currentLangId = "{{ $activeLangId }}";
        var isBangla = (currentLangId == 2); // আইডি ২ হলে বাংলা

        setInterval(displayTime, 1000);
        displayTime(); 

        function displayTime() {
            var date = new Date();
            var hours = date.getHours();
            var minutes = date.getMinutes();
            var seconds = date.getSeconds();
            var day = date.getDay();
            var dayMonth = date.getDate();
            var month = date.getMonth();
            var year = date.getFullYear();
            var session = "AM";

            // ১২ ঘণ্টার ফরম্যাট
            if(hours == 0){ hours = 12; }
            if(hours > 12){ hours = hours - 12; session = "PM"; }

            // দুই ডিজিট (যেমন: ০৯)
            hours = (hours < 10) ? "0" + hours : hours;
            minutes = (minutes < 10) ? "0" + minutes : minutes;
            seconds = (seconds < 10) ? "0" + seconds : seconds;

            var timeString = "";
            var dateString = "";

            if (isBangla) {
                // --- বাংলা কনভার্টার ---
                var toBn = n => n.toString().replace(/\d/g, d => "০১২৩৪৫৬৭৮৯"[d]);
                var days = ["রবিবার", "সোমবার", "মঙ্গলবার", "বুধবার", "বৃহস্পতিবার", "শুক্রবার", "শনিবার"];
                var months = ["জানুয়ারি", "ফেব্রুয়ারি", "মার্চ", "এপ্রিল", "মে", "জুন", "জুলাই", "আগস্ট", "সেপ্টেম্বর", "অক্টোবর", "নভেম্বর", "ডিসেম্বর"];
                var bnSession = session === "PM" ? "পিএম" : "এএম";

                // সময়: ০১:১৭:২২ এএম
                timeString = toBn(hours) + ":" + toBn(minutes) + ":" + toBn(seconds) + " " + bnSession;
                
                // তারিখ: ১৪ পৌষ ১৪৩২ (সরাসরি কনভার্ট করা কঠিন, তাই আমরা ইংরেজি তারিখ বাংলায় দেখাব)
                // অথবা: রবিবার, ২৯ ডিসেম্বর ২০২৫
                dateString = days[day] + ", " + toBn(dayMonth) + " " + months[month] + " " + toBn(year);

            } else {
                // --- ইংরেজি ---
                var days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
                var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
                
                // Time: 01:17:22 AM
                timeString = hours + ":" + minutes + ":" + seconds + " " + session;
                
                // Date: Sunday, 29 December 2025
                dateString = days[day] + ", " + dayMonth + " " + months[month] + " " + year;
            }

            // HTML-এ ভ্যালু বসানো
            var clockEl = document.getElementById("Clock");
            var dateEl = document.getElementById("Date");

            if(clockEl) clockEl.innerText = timeString;
            if(dateEl) dateEl.innerText = dateString;
        }
    });
</script>                            


<section class="body-section">	
	<div class="container main_wbsite">
						
				            
            <!--=======header-section Start========-->
               <div class="header-section">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-sm-4">
                            <div class="verson">
                                <a href="{{ $gs->epaper_link }}"><i class="fa fa-newspaper-o" aria-hidden="true"></i>  {{__('Epaper Version')}}</a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-sm-4">
                            <div class="date">
                               						
							{{__('Todays Date')}} :	<span id ="Clock" onload="displayTime()"></span> | <span id="Date"></span> {{__('Bengali')}}												   
								                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="top_hdr_social">
                                <ul>
								
								
@foreach ($social_links->sortBy('id') as $social_link) 
    <li>
        <a href="{{ $social_link->link}}" target="_blank" class="{{$social_link->name}}"> 
            <i class="{{$social_link->icon}}"></i>
        </a>
    </li>
@endforeach	


								</ul>
	                        </div>
                        </div>
                    </div>
               </div>
                
            <!--=======header-section End========-->
            
                
            
            
            <!--=======Logo & banner-section Start========-->
            
            <div class="logobanner-section">
                <div class="row">
							@php
								Session::has('language') ? $lid=Session::get('language') : $lid = (DB::table('languages')->where('is_default','=',1)->first()->id)
							@endphp
							
							@php
								$header_footer_logo = d_logo($lid);
							@endphp
                    <div class="col-md-4 col-sm-4">
                        <div class="logo">
                             <a href="{{route('frontend.index')}}"><img src="{{asset('assets/images/logo/'.$gs->logo)}}" alt="Logo" width="100%"></a>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div class="banner">
                            {!!$gs->horizontal_adds1!!}
                        </div>
                    </div>
                </div>
            </div>
            
        <!--=======Logo & banner-section End========-->
        
        
        <!--=======secroll-section start========-->
		
		
        <div class="row">
            <div class="col-md-9 col-sm-9">
                <div class="row">
                    <div class="col-md-12 top_scrool"> 
                        <div class="col-md-2 scrool_1">
							{{__('News Headlines')}}						</div>
						<div class="col-md-10 scrool_2">
													
			@php
    use App\Models\Post;
    use App\Models\Language;

    // ✅ বর্তমান ভাষা চেক
    if (session()->has('language')) {
        $default_language = Language::find(session('language'));
    } else {
        $default_language = Language::where('is_default', 1)->first();
    }

    // ✅ ভাষা অনুযায়ী ট্রেন্ডিং নিউজ কল
    $is_trendings = Post::where('is_trending', 1)
        ->where('is_pending', 0)
        ->where('schedule_post', 0)
        ->where('status', true)
        ->where('language_id', $default_language->id)
        ->orderBy('id', 'desc')
        ->take(15)
        ->get();
@endphp					<marquee direction = "left" scrollamount="4px" onmouseover="this.stop()" onmouseout="this.start()">
									
@if ($is_trendings->count()>0)
@foreach($is_trendings as $is_trending)		
									<i class="fa fa-square" aria-hidden="true"></i>
									<a href="{{ route('frontend.postBySubcategory.details',[$is_trending->category->slug,$is_trending->slug])}}">{{$is_trending->title}}</a>
@endforeach
@else
										<i class="fa fa-square" aria-hidden="true"></i>
									<a href="">{{__('No Headlines News')}}</a>
									@endif
																		
																		</marquee>
								
																							   						</div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 col-sm-3">
                <div class="search-box">
                    <form class="example" method="get" action="{{ route('front.news_search') }}">
						<input type="text"  maxlength="64" placeholder="{{__('Write Here')}}" value="" name="search" />
						<button type="submit">{{__('Search')}}</button>
					</form>
                </div>
            </div>
        </div>
		
		   
						
					
        <!--=======secroll-section End========-->
            
            
               
            <!-------menu option stsrt-------->


            <div class="row">
                <div class="col-xs-12 col-md-12 col-sm-12">
                    <div id="menu-area" class="menu_area">
                        <div class="menu_bottom">
                            <nav role="navigation" class="navbar navbar-default mainmenu">
                        <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <!-- Collection of nav links and other content for toggling -->
                                <div id="navbarCollapse" class="collapse navbar-collapse">
                                    <div class="menu-%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%9a%e0%a7%8d%e0%a6%9b%e0%a6%a6-container"><ul id="menu-%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%9a%e0%a7%8d%e0%a6%9b%e0%a6%a6" class="nav navbar-nav">
								@foreach ($categories as $category)
    {{-- 🏠 প্রথম ক্যাটাগরি (Home Link) --}}
    @if ($loop->first)
        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
            id="menu-item-212"
            class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-212 active">
            <a title="{{ $category->title }}" href="{{ route('frontend.index') }}">
                <i class="las la-home"></i> {{ $category->title }}
            </a>
        </li>
    @endif

    {{-- 🔹 সাব ক্যাটাগরি থাকলে --}}
    @if ($category->child()->count() > 0)
        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
            id="menu-item-{{ $category->id }}"
            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-{{ $category->id }} dropdown">

            {{-- এখানে href="#" আর data-href আসল লিংক --}}
            <a title="{{ $category->title }}" href="#" 
               data-href="{{ route('frontend.category', $category->slug) }}"
               data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">
                {{ $category->title }} <span class="caret"></span>
            </a>

            <ul role="menu" class="dropdown-menu">
                @foreach ($category->child as $child)
                    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                        id="menu-item-{{ $child->id }}"
                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-{{ $child->id }}">
                        <a title="{{ $child->title }}"
                            href="{{ route('frontend.postBySubcategory.details', [$category->slug, $child->slug]) }}">
                            {{ $child->title }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </li>

    {{-- 🔹 সাব ক্যাটাগরি না থাকলে --}}
    @else
        @if (! $loop->first)
            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                id="menu-item-{{ $category->id }}"
                class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-{{ $category->id }}">
                <a title="{{ $category->title }}" href="{{ route('frontend.category', $category->slug) }}">
                    {{ $category->title }}
                </a>
            </li>
        @endif
    @endif
@endforeach
<script>
document.addEventListener('DOMContentLoaded', function () {
    // সাব ক্যাটাগরি থাকা মেনু আইটেমে ক্লিক করলে redirect করবে
    document.querySelectorAll('.menu-item-has-children > a.dropdown-toggle').forEach(function (link) {
        link.addEventListener('click', function (e) {
            // যদি ইউজার caret-এ ক্লিক করে, তাহলে শুধু dropdown খুলবে
            if (e.target.tagName === 'SPAN') return;

            // যদি মেইন লিংকে ক্লিক করে, তাহলে redirect করবে
            const href = this.getAttribute('data-href');
            if (href) {
                window.location.href = href;
            }
        });
    });
});
</script>

			

<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" 
    id="menu-item-1167" 
    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children dropdown">
    
    <a title="ভাষা" href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">
        {{__('Language')}} <span class="caret"></span>
    </a>

    <ul role="menu" class="dropdown-menu">

        @php
            // সেশন থেকে ভাষা নেওয়া, না থাকলে ডিফল্ট ভাষা ব্যবহার
            $activeLang = Session::get('language') ?? DB::table('languages')->where('is_default', 1)->first()->id;
        @endphp

        @foreach ($languages as $language)
            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" 
                id="menu-item-{{ $language->id }}" 
                class="menu-item menu-item-type-taxonomy menu-item-object-category">
                
                <a title="{{ $language->language }}" 
                   href="{{ route('front.language.change', $language->id) }}" 
                   class="{{ $activeLang == $language->id ? 'active' : '' }}">
                    {{ $language->language }}
                </a>
            </li>
        @endforeach
        
    </ul>
</li>





</ul></div>                                </div>
                            </nav>

                        </div><!-- /.header_bottom -->

                    </div>
                </div>

            </div>   
             