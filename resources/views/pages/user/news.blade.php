@extends('template.base-user')
@section('section')
<main id="main-wrapper">
@php
    $tablist = [
        [
            'name' => 'Daerah',
            'id' => '1'
        ],
        [
            'name' => 'Nasional',
            'id' => '2'
        ],
        [
            'name' => 'Trending',
            'id' => '3'
        ]
    ];
@endphp
    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
         <div class="container">
             <div class="section-title">
                 <div class="title">NEWS</div>
                 <!--<div class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </div>-->
             </div>
         </div>
         <div class="container" data-aos="fade-up">
 
             <ul class="nav nav-tabs row gy-4 d-flex">
                @foreach ($tablist as $item)
                <li class="col-2">
                    <div class="tab {{ ($category == strtolower($item['name'])) ? 'active show' : '' }}" data-bs-toggle="tab" data-bs-target="#tab-{{ $item['id'] }}">
                    <div class="tab-title">{{ $item['name'] }}</div>
                    </div>
                </li>
                @endforeach
             </ul>
 
             <div class="tab-content">
                @foreach ($tablist as $tab)
                <?php if(isset($news[ucfirst($tab['name'])])) { ?>
                <div class="tab-pane {{ ($category == strtolower($tab['name'])) ? 'active show' : '' }}" id="tab-{{ $tab['id'] }}">
                    <div class="row recent-blog-posts" id="recent-blog-posts">
                        @foreach ($news[ucfirst($tab['name'])] as $keys => $items)
                        <div class="col-lg-4 news-content" data-aos="fade-up" data-aos-delay="200">
                            <div class="post-box">
                                <div class="post-img"><img src="{{ url('uploads/news_file/'.$items->news_file) }}" class="img-fluid" alt=""></div>
                                <div class="meta">
                                    <span class="post-date">{{ date('l, d M Y', strtotime($items->created_at)) }}</span>
                                </div>
                                <h3 class="post-title">{{ $items->title }}</h3>
                                <a href="{{ url('detail-news/'.$items->id) }}" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <?php } ?>
                @endforeach
             </div>
         </div>
     </section><!-- End Features Section -->
 
   </main><!-- End #main -->
@endsection