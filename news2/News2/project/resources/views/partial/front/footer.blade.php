             
            <!--======= Footer Section Start============-->
            <div class="footer-section">
                <div class="row">
                        <div class="col-md-2 col-sm-2 col-xs-4">
                           <div class="footer-menu-01">
                               <div class="menu"><ul>
<li class="page_item page-item-1147"><a href="{{ URL::to('/reporter') }}">{{__('Our Reporters')}}</a></li>
<li class="page_item page-item-1208"><a href="{{ URL::to('/photo') }}">{{__('Photo Gallery')}}</a></li>
<li class="page_item page-item-1211"><a href="{{ URL::to('/video') }}">{{__('Video Gallery')}}</a></li>
</ul></div>
                           </div>
                        </div>

                        <div class="col-md-2 col-sm-2 col-xs-4">
                           <div class="footer-menu-01">
                               <div class="menu"><ul>
<li class="page_item page-item-1147"><a href="{{ URL::to('/reporter') }}">{{__('Our Reporters')}}</a></li>
<li class="page_item page-item-1208"><a href="{{ URL::to('/photo') }}">{{__('Photo Gallery')}}</a></li>
<li class="page_item page-item-1211"><a href="{{ URL::to('/video') }}">{{__('Video Gallery')}}</a></li>
</ul></div>
                           </div>
                        </div>

                        <div class="col-md-2 col-sm-2 col-xs-4">
                           <div class="footer-menu-01">
                                <div class="menu"><ul>
<li class="page_item page-item-1147"><a href="{{ URL::to('/reporter') }}">{{__('Our Reporters')}}</a></li>
<li class="page_item page-item-1208"><a href="{{ URL::to('/photo') }}">{{__('Photo Gallery')}}</a></li>
<li class="page_item page-item-1211"><a href="{{ URL::to('/video') }}">{{__('Video Gallery')}}</a></li>
</ul></div>
                           </div>
                        </div>

                        <div class="col-md-2 col-sm-2 col-xs-4">
                           <div class="footer-menu-01">
                               <div class="menu"><ul>
<li class="page_item page-item-1147"><a href="{{ URL::to('/reporter') }}">{{__('Our Reporters')}}</a></li>
<li class="page_item page-item-1208"><a href="{{ URL::to('/photo') }}">{{__('Photo Gallery')}}</a></li>
<li class="page_item page-item-1211"><a href="{{ URL::to('/video') }}">{{__('Video Gallery')}}</a></li>
</ul></div>
                           </div>
                        </div>

                        <div class="col-md-2 col-sm-2 col-xs-4">
                           <div class="footer-menu-01">
						   
						   					@php
    // বর্তমান ল্যাঙ্গুয়েজ আইডি বের করছি
    $lid = Session::has('language') 
        ? Session::get('language') 
        : DB::table('languages')->where('is_default', 1)->first()->id;

    // Footer পেজগুলো নিচ্ছি বর্তমান ল্যাঙ্গুয়েজ অনুযায়ী
    $footer_menus = \App\Models\Page::where('placement', 'footer')
                    ->where('status', 1)
                    ->where('language_id', $lid)
                    ->get();
@endphp
						   
                               <div class="menu"><ul>
							   @foreach ($footer_menus as $menu)
<li class="page_item page-item-1147"><a href="{{ route('dynamic.page',$menu->slug)}}">{{ $menu->title }}</a></li>
@endforeach
</ul></div>
                           </div>
                        </div>

                        <div class="col-md-2 col-sm-2 col-xs-4">
                           <div class="footer-menu-last">
                               <div class="menu"><ul>
							   
							   
		   @if (!auth()->user())						   
<li class="page_item page-item-1147"><a href="{{ route('front.LogReg') }}">{{__('Login')}}</a></li>
                                  @endif
									@if (auth()->user())
									     @php
											 $data = auth()->user();
										 @endphp
<li class="page_item page-item-1147"><a href="{{ route('user.dashboard') }}">{{__('Reporter Dashboard')}}</a></li>
@endif	



<li class="page_item page-item-1208"><a href="{{ URL::to('/photo') }}">{{__('Photo Gallery')}}</a></li>
<li class="page_item page-item-1211"><a href="{{ URL::to('/video') }}">{{__('Video Gallery')}}</a></li>
</ul></div>
                           </div>
                        </div>
                        
                    
                    </div>
                   
                <div class="footer-wrpp">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="footer-content-rihgt">
								 {{__('office 1')}} : {{__('Office Address')}}, {{__('Mob')}} : {{__('Mobile Number')}} {{__('Email')}}: {{ $gs->email }}
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="footer-content-left">
                                {{__('Office 2')}} : {{__('Office Address 2')}}, {{__('Mob')}} : {{__('Mobile Number')}} {{__('Email')}}: {{ $gs->email }}
                            </div>
                        </div>
                    </div>
                    
                
                    
                    
                    
                </div>
                
               
            
        
						
			
	

 <div class="root">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="root_01">
                            {{__('Footer Credite')}} </div>

                        </div>
             
             <div class="col-md-6 col-sm-6 text-right">
    <div class="developer-credit">
        <span class="credit-label">সকল কারিগরী সহযোগিতায়:</span>
        
        <a href="https://www.creativedesign.com.bd/" target="_blank" class="dev-company">
            <img src="/assets/images/logo/creativedesign.png" alt="Creative Design">
            <span class="company-name">ক্রিয়েটিভ ডিজাইন</span>
        </a>
    </div>
</div>
<style>
    /* মেইন র‍্যাপার */
    .developer-credit {
        display: flex;
        align-items: center;       
        justify-content: flex-end; 
        gap: 8px;                  
        font-family: 'SolaimanLipi', Arial, sans-serif; /* বাংলা ফন্ট নিশ্চিত করুন */
    }

    /* "সকল কারিগরী সহযোগিতায়" টেক্সট */
    .developer-credit .credit-label {
        color: #ffffff !important; /* একদম সাদা */
        font-weight: bold;         /* লেখা মোটা */
        font-size: 18px;           /* সাইজ বাড়ানো হয়েছে (আগে 15px ছিল) */
        opacity: 1;                /* স্বচ্ছতা দূর করে স্পষ্ট করার জন্য */
        text-shadow: 0px 0px 1px rgba(0,0,0,0.3); /* হালকা শ্যাডো টেক্সটকে শার্প করে */
    }

    /* লিংক কন্টেইনার */
    .developer-credit .dev-company {
        display: flex;
        align-items: center;       
        text-decoration: none;     
        gap: 6px;                  
    }

    /* লোগো ইমেজ */
    .developer-credit .dev-company img {
        height: 28px;              /* টেক্সটের সাথে মিল রেখে লোগো বড় করা হলো */
        width: auto;
        vertical-align: middle;
        margin-top: -3px;          /* অ্যালাইনমেন্ট ঠিক করার জন্য */
    }

    /* "ক্রিয়েটিভ ডিজাইন" টেক্সট */
    .developer-credit .company-name {
        color: #ffffff !important; /* একদম সাদা */
        font-weight: bold;         /* লেখা মোটা */
        font-size: 20px;           /* নামটা আরেকটু বড় (20px) */
        line-height: 1;            
    }

    /* হোভার এফেক্ট */
    .developer-credit .dev-company:hover .company-name {
        text-decoration: underline; 
        color: #ffcc00 !important;  
    }

    /* মোবাইল রেস্পন্সিভ */
    @media (max-width: 767px) {
        .developer-credit {
            justify-content: center;
            margin-top: 10px;
        }
        /* মোবাইলে বেশি বড় হলে ভেঙে যেতে পারে, তাই একটু এডজাস্টমেন্ট */
        .developer-credit .credit-label { font-size: 16px; }
        .developer-credit .company-name { font-size: 18px; }
    }
</style>
                    </div>
                
                </div>
                <a href="#" class="scrollToTop"><i class="fa fa-angle-up"></i></a>
            </div>
            
            
            <!--======= Footer Section End============-->
            
            
               
            </div>
  </section> 		