@extends('layouts.front')

@section('meta')
<title>{{ __('Our Reporters') }}</title>
<meta property="og:title" content="{{ __('Our Reporters') }}" />
<meta property="og:image" content="{{ asset('assets/images/'.$gs->og_baner) }}" />
@endsection

@section('contents')

<style>
/* 🌟 Section Background */
.archive-section {
    background: #f8f9fb;
    padding: 60px 0;
}

/* ✅ Container with Balanced Spacing */
.container-custom {
    max-width: 1300px;
    margin: 0 auto;
    padding: 0 40px;
}

/* 🧍 Reporter Card Design */
.profile_news {
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 3px 8px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
    text-align: center;
    height: 100%;
}
.profile_news:hover {
    transform: translateY(-6px);
    box-shadow: 0 6px 16px rgba(0,0,0,0.15);
}

/* 🖼️ Reporter Image */
.profile_news img {
    width: 100%;
    height: 260px;
    object-fit: cover;
    border-bottom: 1px solid #ddd;
}

/* 🧾 Reporter Info */
.family_border {
    padding: 12px 10px;
    background: #f6f8fa;
}
.family {
    font-size: 17px;
    font-weight: 700;
    color: #111;
    margin-bottom: 4px;
}
.family_deg {
    font-size: 14px;
    color: #d32f2f;
}

/* 🎯 Title Design */
.section-title {
    text-align: center;
    font-weight: 700;
    font-size: 28px;
    color: #222;
    margin-bottom: 40px;
    position: relative;
}
.section-title::after {
    content: "";
    width: 80px;
    height: 3px;
    background: #d32f2f;
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    bottom: -10px;
    border-radius: 2px;
}

/* ✅ Grid System */
.reporter-row {
    display: grid;
    grid-template-columns: repeat(4, 1fr); /* প্রতি লাইনে ৪ জন */
    gap: 30px; /* সারি ও কলামের মাঝে গ্যাপ */
}

/* 📱 Responsive Design */
@media (max-width: 1200px) {
    .container-custom { padding: 0 25px; }
}
@media (max-width: 992px) {
    .reporter-row { grid-template-columns: repeat(3, 1fr); } /* ট্যাব ভিউতে ৩ জন */
    .profile_news img { height: 230px; }
}
@media (max-width: 768px) {
    .reporter-row { grid-template-columns: repeat(2, 1fr); } /* মোবাইলে ২ জন */
    .profile_news img { height: 210px; }
}
@media (max-width: 576px) {
    .reporter-row { grid-template-columns: repeat(1, 1fr); } /* ছোট মোবাইলে ১ জন */
    .profile_news img { height: 180px; }
}
</style>

<section class="archive-section">
    <div class="container-custom">
        <h2 class="section-title">আমাদের প্রতিনিধি তালিকা</h2>

        <div class="reporter-row">
            @php
                $reporters = DB::table('users')->orderBy('id', 'ASC')->get();
            @endphp

            @foreach($reporters as $row)
                <div class="profile_news">
                    <img src="{{ asset('assets/images/admin/'.$row->photo) }}" alt="{{ $row->name }}">
                    <div class="family_border">
                        <h4 class="family">{{ $row->name }} :: {{ $row->designation }}</h4>
                        <h4 class="family_deg"><i class="fa fa-phone"></i> {{ $row->phone }}</h4>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
