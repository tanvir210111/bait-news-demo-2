@extends('layouts.front')

@section('meta')
    <title>{{__('Photo Gallery')}}</title>
    <meta property="og:title" content="{{__('Photo Gallery')}}" />
    <meta property="og:image" content="{{ asset('assets/images/'.$gs->og_baner) }}" />
@endsection

@section('contents')

<!---------- 📸 ফটো গ্যালারী শুরু ------------>

<style>
/* 🌟 নিউজ পোর্টাল স্টাইল ফটো গ্যালারি — Perfect Centered Layout */

/* 🧱 Main Container */
.gallery-container {
  max-width: 1250px; /* পেজের সর্বোচ্চ প্রস্থ */
  margin: 0 auto; /* Center Align */
  padding-left: 25px; /* ✅ সমান স্পেস */
  padding-right: 25px;
}

/* ফটো গ্যালারি Wrapper */
.photogallary {
  display: flex;
  flex-wrap: wrap;
  justify-content: center; /* সেন্টারে রাখবে */
  margin-left: -10px;
  margin-right: -10px;
}

/* প্রতিটি কলামের spacing */
.photogallary .col-lg-3,
.photogallary .col-md-4,
.photogallary .col-sm-6 {
  padding: 10px;
  box-sizing: border-box;
}

/* গ্যালারি কার্ড */
.gallary {
  background: #fff;
  border: 1px solid #ddd;
  border-radius: 6px;
  overflow: hidden;
  text-align: center;
  transition: 0.3s;
  box-shadow: 0 1px 4px rgba(0, 0, 0, 0.08);
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

.gallary:hover {
  transform: translateY(-4px);
  box-shadow: 0 6px 14px rgba(0, 0, 0, 0.15);
}

/* ইমেজ */
.gallary img {
  width: 100%;
  height: 210px;
  object-fit: cover;
  display: block;
  transition: 0.3s;
}

.gallary img:hover {
  transform: scale(1.03);
  opacity: 0.95;
}

/* টাইটেল */
.photo_title {
  background: #f8f9fa;
  font-weight: 600;
  font-size: 15px;
  color: #222;
  padding: 10px;
  margin: 0;
  border-top: 1px solid #e5e5e5;
}

.photo_title a {
  text-decoration: none;
  color: #222;
  transition: 0.2s;
}

.photo_title a:hover {
  color: #0d6efd;
}

/* সেকশন হেডার */
.section-header {
  text-align: center;
  font-size: 22px;
  font-weight: 700;
  color: #0d6efd;
  margin-bottom: 25px;
  position: relative;
  text-transform: uppercase;
}

.section-header::after {
  content: '';
  display: block;
  width: 80px;
  height: 3px;
  background: #0d6efd;
  margin: 10px auto 0;
  border-radius: 2px;
}

/* ✅ Responsive */
@media (max-width: 1200px) {
  .gallery-container { padding: 0 20px; }
}
@media (max-width: 992px) {
  .gallary img { height: 180px; }
}
@media (max-width: 576px) {
  .gallary img { height: 150px; }
  .photo_title { font-size: 14px; }
}
</style>

<div class="gallery-container my-4">
  <div class="row mb-3">
    <div class="col-12 text-center">

    </div>
  </div>

  <div class="row g-0 photogallary">
    @php
        use App\Models\Language;

        // ✅ ভাষা নির্ধারণ
        if (session()->has('language')) {
            $default_language = Language::find(session('language'));
        } else {
            $default_language = Language::where('is_default', 1)->first();
        }

        // ✅ ভাষা অনুযায়ী ফটো গ্যালারি ডেটা কল
        $photobig = DB::table('image_albums')
            ->where('language_id', $default_language->id)
            ->orderBy('id', 'DESC')
            ->limit(100)
            ->get();
    @endphp

    @if ($photobig->count() > 0)
        @foreach ($photobig as $row)
          <div class="col-lg-3 col-md-4 col-sm-6 col-12">
            <div class="gallary">
              <a href="{{ asset('assets/images/image-album/'.$row->photo) }}" target="_blank">
                <img src="{{ asset('assets/images/image-album/'.$row->photo) }}" alt="{{ $row->album_name }}">
              </a>
              <h4 class="photo_title">
                <a href="{{ asset('assets/images/image-album/'.$row->photo) }}" target="_blank">
                  {{ $row->album_name }}
                </a>
              </h4>
            </div>
          </div>
        @endforeach
    @else
      <div class="col-12 text-center py-5">
        <img src="{{ asset('assets/images/nopic.png') }}" width="100" alt="No Photo">
        <h5 class="mt-3 text-muted">{{ __('কোন গ্যালারী ইমেজ নেই') }}</h5>
      </div>
    @endif
  </div>
</div>

<!---------- 📸 ফটো গ্যালারী শেষ ------------>
@endsection
