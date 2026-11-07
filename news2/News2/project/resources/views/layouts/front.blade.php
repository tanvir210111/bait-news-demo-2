@php
	$seo=DB::table('seotools')->first();
@endphp
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="author" content="Creative Design">
    @yield('meta')
		<title>{{ $gs->title }}</title>
    <link rel="shortcut icon" href="{{asset('assets/images/'.$gs->favicon)}}" type="image/x-icon">

		
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.2.1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.2.1\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/newssitedesign.com\/bestnews\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.7.29"}};
			!function(t,a,e){var r,n,i,o=a.createElement("canvas"),l=o.getContext&&o.getContext("2d");function c(t){var e=a.createElement("script");e.src=t,e.defer=e.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(e)}for(i=Array("flag","emoji4"),e.supports={everything:!0,everythingExceptFlag:!0},n=0;n<i.length;n++)e.supports[i[n]]=function(t){var e,a=String.fromCharCode;if(!l||!l.fillText)return!1;switch(l.clearRect(0,0,o.width,o.height),l.textBaseline="top",l.font="600 32px Arial",t){case"flag":return(l.fillText(a(55356,56826,55356,56819),0,0),o.toDataURL().length<3e3)?!1:(l.clearRect(0,0,o.width,o.height),l.fillText(a(55356,57331,65039,8205,55356,57096),0,0),e=o.toDataURL(),l.clearRect(0,0,o.width,o.height),l.fillText(a(55356,57331,55356,57096),0,0),e!==o.toDataURL());case"emoji4":return l.fillText(a(55357,56425,55356,57341,8205,55357,56507),0,0),e=o.toDataURL(),l.clearRect(0,0,o.width,o.height),l.fillText(a(55357,56425,55356,57341,55357,56507),0,0),e!==o.toDataURL()}return!1}(i[n]),e.supports.everything=e.supports.everything&&e.supports[i[n]],"flag"!==i[n]&&(e.supports.everythingExceptFlag=e.supports.everythingExceptFlag&&e.supports[i[n]]);e.supports.everythingExceptFlag=e.supports.everythingExceptFlag&&!e.supports.flag,e.DOMReady=!1,e.readyCallback=function(){e.DOMReady=!0},e.supports.everything||(r=function(){e.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",r,!1),t.addEventListener("load",r,!1)):(t.attachEvent("onload",r),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&e.readyCallback()})),(r=e.source||{}).concatemoji?c(r.concatemoji):r.wpemoji&&r.twemoji&&(c(r.twemoji),c(r.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>

	@if(DB::table('languages')->where('is_default','=',1)->first()->rtl == 1)
		<link rel="stylesheet" href="{{asset('assets/front/css/rtl/style.css')}}">
	@endif


<link rel='stylesheet' id='archives-cal-calendrier-css'  href='{{asset('assets/frontend/assests/themes/calendrier0718.css?ver=1.0.12')}}' type='text/css' media='all' />
<link rel='stylesheet' id='bootstrap-css'  href='{{asset('assets/frontend/assests/css/bootstrap.min0155.css?ver=4.7.29')}}' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-css'  href='{{asset('assets/frontend/assests/css/font-awesome.min0155.css?ver=4.7.29')}}' type='text/css' media='all' />
<link rel='stylesheet' id='responsive-css'  href='{{asset('assets/frontend/assests/css/responsive0155.css?ver=4.7.29')}}' type='text/css' media='all' />
<link rel='stylesheet' id='menu-css'  href='{{asset('assets/frontend/assests/css/menu0155.css?ver=4.7.29')}}' type='text/css' media='all' />
<link rel='stylesheet' id='owl_carousel_min-css'  href='{{asset('assets/frontend/assests/css/owl.carousel.min0155.html?ver=4.7.29')}}' type='text/css' media='all' />
<link rel='stylesheet' id='archive-style-css'  href='{{asset('assets/frontend/assests/css/archive-style0155.css?ver=4.7.29')}}' type='text/css' media='all' />
<link rel='stylesheet' id='style-css'  href='{{asset('assets/frontend/assests/style0155.css?ver=4.7.29')}}' type='text/css' media='all' />
<script type='text/javascript' src='{{asset('assets/frontend/assests/js/jquery/jqueryb8ff.js?ver=1.12.4')}}'></script>
<script type='text/javascript' src='{{asset('assets/frontend/assests/js/jquery/jquery-migrate.min330a.js?ver=1.4.1')}}'></script>
<script type='text/javascript' src='{{asset('assets/frontend/assests/admin/js/jquery.arcw-init0718.js?ver=1.0.12')}}'></script>
<script type='text/javascript' src='{{asset('assets/frontend/assests/js/bootstrap.min0155.js?ver=4.7.29')}}'></script>
<script type='text/javascript' src='{{asset('assets/frontend/assests/js/jquery.min0155.js?ver=4.7.29')}}'></script>
<script type='text/javascript' src='{{asset('assets/frontend/assests/js/owl.carousel.min0155.html?ver=4.7.29')}}'></script>
<script type='text/javascript' src='{{asset('assets/frontend/assests/js/main0155.js?ver=4.7.29')}}'></script>
	

<style>
/* ðŸŒŸ Poll Area */
.poll-area {
  border-radius: 12px;
  background: #ffffff;
  box-shadow: 0 4px 16px rgba(0,0,0,0.08);
  overflow: hidden;
  font-family: 'Inter', sans-serif;
}

/* Header */
.poll-area .card-header {
  background: linear-gradient(135deg, #0056d6, #007bff);
  color: #fff;
  font-weight: 600;
  font-size: 16px;
  padding: 10px 15px;
  border-bottom: none;
}

.poll-area .card-header a {
  font-size: 13px;
  color: #fff !important;
  background: rgba(255,255,255,0.15);
  padding: 4px 8px;
  border-radius: 4px;
  transition: all 0.3s ease;
}

.poll-area .card-header a:hover {
  background: rgba(255,255,255,0.3);
}

/* Each Poll Box */
.poll-box {
  background: #f9fafc;
  border: 1px solid #e2e6ec;
  border-radius: 8px;
  padding: 15px 12px;
  margin-bottom: 14px;
  transition: 0.3s;
}

.poll-box:hover {
  background: #f3f7ff;
  box-shadow: 0 0 10px rgba(0,0,0,0.05);
}

.poll-box h6 {
  font-size: 15px;
  font-weight: 600;
  color: #222;
  margin-bottom: 10px;
}

.poll-box .form-check {
  margin-bottom: 6px;
}

.poll-box .form-check-label {
  color: #333;
  font-size: 14px;
  transition: 0.2s;
}

.poll-box .form-check-input {
  accent-color: #007bff;
}

.poll-box .form-check-input:checked + .form-check-label {
  color: #007bff;
  font-weight: 500;
}

/* Buttons */
.vote-btn,
.view-result,
.btn-success {
  font-size: 13px;
  padding: 7px 14px;
  border-radius: 6px;
  font-weight: 500;
  transition: 0.25s;
}

.vote-btn {
  background: linear-gradient(135deg, #007bff, #009dff);
  border: none;
  color: #fff;
}

.vote-btn:hover {
  background: linear-gradient(135deg, #0065d1, #0087e0);
}

.btn-success[disabled] {
  background: linear-gradient(135deg, #28a745, #33d17a);
  border: none;
  color: #fff;
}

.view-result {
  background: linear-gradient(135deg, #17a2b8, #00c0d6);
  color: #fff;
  border: none;
}

.view-result:hover {
  background: linear-gradient(135deg, #0e869b, #00a7c2);
}

/* Poll Result */
.poll-result {
  background: #fff;
  border-radius: 8px;
  padding-top: 10px;
}

.poll-result .progress {
  height: 14px;
  background-color: #e9ecef;
  border-radius: 8px;
  overflow: hidden;
  margin-bottom: 8px;
}

.poll-result .progress-bar {
  background: linear-gradient(90deg, #007bff, #00a8ff);
  font-size: 12px;
  color: #fff;
  line-height: 14px;
  padding-left: 8px;
  font-weight: 500;
}

.poll-result .poll-answer-label {
  font-size: 13px;
  color: #333;
  margin-bottom: 5px;
}

/* Small Feedback Message */
.poll-message {
  font-size: 13px;
  color: #dc3545;
  margin-top: 5px;
}

/* Responsive */
@media (max-width: 576px) {
  .poll-area {
    box-shadow: none;
    border: 1px solid #e2e6ec;
  }
}
/* LIVE TV section */
.live-item {
  border-radius: 8px;
  background: #fff;
  box-shadow: 0 2px 6px rgba(0,0,0,0.1);
  padding: 10px;
  overflow: hidden;
}

.facebook_title a {
  font-weight: 600;
  color: #0056d6;
  text-decoration: none;
}

.facebook_title a:hover {
  color: #003f9c;
}

/* Responsive YouTube/Facebook iframe */
.video-container {
  position: relative;
  padding-bottom: 56.25%; /* 16:9 aspect ratio */
  height: 0;
  overflow: hidden;
  border-radius: 6px;
}

.video-container iframe,
.video-container object,
.video-container embed {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border: none;
}

/* optional â€“ add hover glow */
.video-container iframe:hover {
  box-shadow: 0 0 10px rgba(0, 91, 255, 0.3);
}

</style>

<style>
.custom-pagination {
    text-align: center;
    margin-top: 20px;
}

.pagination-list {
    display: inline-flex;
    list-style: none;
    padding: 0;
    background: #f7f7f7;
    border-radius: 6px;
    overflow: hidden;
    box-shadow: 0 1px 4px rgba(0,0,0,0.1);
}

.pagination-list li {
    margin: 0;
}

.pagination-list li a,
.pagination-list li span {
    display: block;
    padding: 8px 15px;
    color: #222;
    font-weight: 500;
    text-decoration: none;
    transition: all 0.3s;
}

.pagination-list li a:hover {
    background: #bd0202;
    color: #fff;
}

.pagination-list li.active span {
    background: #bd0202;
    color: #fff;
    font-weight: bold;
}

.pagination-list li.disabled span {
    color: #aaa;
    cursor: not-allowed;
}
</style>
		
<style>


body {
	background-color: #F2F2F2;
    font-size: 17px;
	width:100%;
	font-family: SolaimanLipiNormal;
}

.scrool_1{
    padding:6px;
    font-size:17px;
    background-color:{{$gs->buton_color}};
    color:#fff;
    text-align: left;
    font-weight: 400;
}

.category-title {
	background: {{$gs->catergory_side}};
	padding: 7px 0;
	border-bottom: 2px solid{{$gs->theme_color}};
	margin-bottom: 10px;
}

.category-title span {
	background: {{$gs->theme_color}};
	padding: 10px 10px;
    color: #fff;
	font-weight: 400;
	font-size: 18px;
}
.category-title a {
	background: {{$gs->theme_color}};
	padding: 10px 10px;
    color: #fff;
	font-weight: 400;
	font-size: 18px;
}
.cat_title_two{
    background-color:#006699;
    padding: 7px;
    border-radius: 5px 5px 0px 0px;
    margin-top: 7px;
    margin-bottom: 5px;
    color: #fff;
	font-weight: 400;
	font-size: 18px;
}
.cat_title_two span{
    color: #fff;
	font-weight: 400;
	font-size: 18px;
    text-decoration: none;
    background: #7D0101;
    border-radius: 0px 50px 0px 0px;
    padding: 7px 20px 7px 10px;
}
.cat_title_two span a{
    color: #fff;
	font-weight: 400;
	font-size: 18px;
    text-decoration: none;
    background: #7D0101;
    border-radius: 0px 50px 0px 0px;
    padding: 7px 20px 7px 10px;
}
.cat_title_three{
    background:#f7f7f7;
    padding:8px;
	color:#000;
    font-weight:400;
    font-size: 18px;
    border-left:5px solid#f90202;
    margin-top:10px;
    margin-bottom:8px;
}
.cat_title_three a{
    color:#000;
    font-weight:400;
    font-size: 18px;
    text-decoration: none;
}
.cat_title_four{
    background:#F0F0F0;
	color: #fff;
	font-weight: 400;
	font-size: 18px;
}
#pointer a{
    color: #fff;
	font-weight: 400;
	font-size: 18px;
    text-decoration: none;
}
#pointer {
	color: #fff;
	font-weight: 400;
	font-size: 18px;
    width: 180px;
    height: 40px;
    position: relative;
    background: #cc0000;
    padding-top:10px;
    padding-left:10px;
    margin:0;
    margin-bottom:8px;
    margin-top:10px;
  }
#pointer:after {     
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    width: 0;
    height: 0 white;
  }
#pointer:before {
    content: "";
    position: absolute;
    right: -20px;
    bottom: 0;
    width: 0;
    height: 0;
    border-left: 20px solid #cc0000;
    border-top: 20px solid transparent;
    border-bottom: 20px solid transparent;
  }

.hadding_01 a{
    font-size:20px;
	line-height:autopx;
	font-weight:400;
    color:#000;
    text-decoration:none;
    transition: .5s;
}
.hadding_02 a{
    font-size:18px;
	line-height:autopx;
	font-weight:400;
    color:#000;
    text-decoration:none;
    transition: .5s;
}
.photo_caption a {
    text-decoration:none;
    font-size:22px;
	line-height:autopx;
	font-weight:400;
    color:#fff;
    transition: .5s;
}
.more_news a{
    display: inline-block;
    font-size:15px;
	font-weight:400;
    color:#000;
    margin-top: 2px;
    text-decoration: none;
    transition: .7s;
}
.facebook_title{
    background:#f7f7f7;
    padding:6px;
	color:#333;
    font-weight:;
    font-size: 17px;
    border-left:5px solid#f90202;
    margin-bottom:8px;
}
.archive_calender_sec{
	margin:8px 0px 8px 0px;
	overflow:hidden;
}
.archive_title{
    background:#f7f7f7;
    padding:6px;
	color:#333;
    font-weight:;
    font-size: 17px;
    border-left:5px solid#f90202;
    margin-bottom:8px;
}
.widget_area h3 {
    background:#f7f7f7;
    padding:6px;
	color:#333;
    font-weight:;
    font-size: 17px;
    border-left:5px solid#f90202;
    margin-bottom:8px;
}
.footer-section {
	padding: 50px 20px;
	padding-bottom: 0;
	background: {{$gs->footer_color}};
}
.footer-menu-01 ul li a {
	margin-bottom: 10px;
	padding: 0 10px;
    color: #fff;
    text-decoration: none;
    transition: .5
}
.footer-menu-last ul li a {
	color:  #fff;
    text-decoration: none;
    transition: .8s;
}
.footer-content-rihgt {
	font-size: 18px;
	text-align: right;
	color: #fff;
	border-right: 2px solid #fff;
	padding-right: 10px;
    padding-left: 5px;
}

.footer-content-left {
	font-size: 18px;
	text-align: left;
	color: #fff;
    margin-left: -18px;
	padding-right: 5px;
}

.footer-menu-01 {
	margin-bottom: 30px;
	border-right: 1px solid {{$gs->footer_line}};
	text-align: center;
}
.root {
	padding: 10px 0;
	border-top: 1px solid  {{$gs->footer_line}};
	margin-top: 30px;
}

.root_01 {
	color: {{$gs->footer_line}};
	font-size: 18px;
	padding-left: 10px;
}

.root_02 {
	text-align: right;
	font-size: 18px;
	color: {{$gs->footer_line}};
	padding-right: 10px;
}
.scrollToTop {
	width: 50px;
	height: 50px;
	padding: 10px;
	background: {{$gs->theme_color}};
	position: fixed;
	right: 25px;
	bottom: 70px;
	border-radius: 50%;
    z-index: 9999;
}

.menu_bottom { 
    background: {{$gs->menu_color}};
 }
.mainmenu .collapse ul ul, 
.mainmenu .collapse ul ul
.dropdown-menu{
	background:{{$gs->menu_color}};
	}
.mainmenu .collapse ul ul ul, 
.mainmenu .collapse ul ul ul
.dropdown-menu{
	background:#B30F0F;
	}
.menu_area .menu_bottom .mainmenu a , .navbar-default .navbar-nav > li > a {
    font-size: 16px;
    color: #fff;
    text-transform: capitalize;
    padding: 10px 16px;
    border-right:1px solid{{$gs->menu_color2}};
}

.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, 
.navbar-default .navbar-nav > .active > a:focus {
    color: #fff !important;
    margin: 0px;
    background-color: {{$gs->menu_active}};
}
.verson a {
	background: {{$gs->buton_color}};
	padding: 10px 28px;
	font-size: 18px;
	position: relative;
	z-index: 1;
	color: #fff;
	transition: .8s;
}

form.example button {
    float: left;
    width: 30%;
    padding: 7px;
    background: {{$gs->menu_active}};
    color: #fff;
    font-size: 15px;
    border: 1px solid {{$gs->menu_active}};
    border-left: none;
    cursor: pointer;
}

</style>

    {!!$gs->adsense_code!!}
    {!!$gs->search_console!!}
	{!! $seo->google_analytics !!}		
    </head>
    <body>


            
	
							
    <!-- Header Part-->
    @include('partial.front.header')
    <!-- Header Part End-->
            
     <!--Content of each page-->
    @yield('contents')
	<!--Content of each page end-->
            
                
        
       
	<!-- Footer Area Start -->
	@include('partial.front.footer')
	<!-- Footer Area End -->
		
		

		<script type='text/javascript' src='{{asset('assets/frontend/assests/js/wp-embed.min0155.js?ver=4.7.29')}}'></script>
		<script>
$(document).ready(function() {
  // à¦­à§‹à¦Ÿ à¦¸à¦¾à¦¬à¦®à¦¿à¦Ÿ
  $(document).on('click', '.vote-btn', function(e) {
    e.preventDefault();
    var pollId = $(this).data('id');
    var answerId = $('input[name="poll_answer_id_' + pollId + '"]:checked').val();
    var messageBox = $(this).closest('.poll-box').find('.poll-message');
    var resultBox = $(this).closest('.poll-box').find('.poll-result');
    var button = $(this);

    messageBox.html('');

    if (!answerId) {
      messageBox.html('Please select an option');
      return;
    }

    $.ajax({
      url: "{{ route('front.poll.vote') }}",
      method: "POST",
      data: {
        _token: "{{ csrf_token() }}",
        poll_question_id: pollId,
        poll_answer_id: answerId
      },
      success: function(res) {
        if (res.status === 'success') {
          button.removeClass('btn-primary').addClass('btn-success').text('Voted').prop('disabled', true);
          $.get("{{ url('poll-result') }}/" + pollId, function(data) {
            resultBox.html(data);
          });
        } else {
          messageBox.html(res.message);
        }
      },
      error: function(xhr) {
        messageBox.html('Error submitting vote');
      }
    });
  });

  // à¦«à¦²à¦¾à¦«à¦² à¦¦à§‡à¦–à¦¾
  $(document).on('click', '.view-result', function(e) {
    e.preventDefault();
    var pollId = $(this).data('id');
    var box = $(this).closest('.poll-box').find('.poll-result');
    $.get("{{ url('poll-result') }}/" + pollId, function(data) {
      box.html(data);
    });
  });
});
</script>	
			
    </body>
</html>
