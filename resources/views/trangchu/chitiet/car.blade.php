@extends('trangchu.menu.master')
@section('noidung')
<!-- Home -->
<div class="home1">
   <div class="home_background1 parallax-window" data-parallax="scroll" data-image-src="travel/images/blog_background.jpg"></div>
   <div class="home_content1">
   </div>
</div>
<!-- Blog -->
<div class="blog">
   <div class="container">
      <div class="row">
         <!-- Blog Content -->
         <div class="col-lg-8">
            <div class="blog_post_container">
               <!-- Blog Post -->
               <div class="blog_post">
                  <h1 style="font-family: Times, serif;color:black; font-size: 300%;font-weight:700;">Điểm Đi Đến : {{ $chitiet->todo }}</h1>
                  <br>
                  <div class="fb-like" data-href="{{ route('trangchu.chitiet.car',['slug'=>str_slug($chitiet->todo),'id'=>$chitiet->id]) }}" data-layout="standard"
                     data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                  <div>
                     {!! $chitiet->noiDung !!}
                  </div>
                  <br>
                  <div class="fb-comments" data-href="{{ route('trangchu.chitiet.car',['slug'=>str_slug($chitiet->todo),'id'=>$chitiet->id]) }}"  data-numposts="5"></div>
               </div>
            </div>
         </div>
         <!-- Blog Sidebar -->
         <div class="col-lg-4 sidebar_col">
            <!-- Sidebar Latest Posts -->
            <div class="sidebar_latest_posts">
               <div class="sidebar_title">THUÊ XE HOT</div>
               <div class="latest_posts_container">
                  <ul>
                     @foreach ($car as $item)
                     <!-- Latest Post -->
                     <li class="latest_post clearfix">
                        <div class="latest_post_image">
                           <a href="{{ route('trangchu.chitiet.car',['slug'=>str_slug($item->todo),'id'=>$item->id]) }}"><img class="smal-img" src="/{{ str_replace('\\','/',$item->img) }}" alt=""></a>
                        </div>
                        <div class="latest_post_content">
                           <div class="latest_post_title trans_200"><a href="{{ route('trangchu.chitiet.car',['slug'=>str_slug($item->todo),'id'=>$item->id]) }}">{{ $item->todo }}</a></div>
                        </div>
                     </li>
                     @endforeach
                  </ul>
               </div>
            </div>
            <!-- Sidebar Gallery -->
            <div class="sidebar_gallery">
               <div class="sidebar_title">Instagram</div>
               <div class="gallery_container">
                  <ul class="gallery_items d-flex flex-row align-items-start justify-content-between flex-wrap">
                     <li class="gallery_item">
                        <a class="colorbox" href="https://images.unsplash.com/photo-1473625247510-8ceb1760943f?ixlib=rb-0.3.5&s=c0996cd16eda8c6f54c398de02d03cd3&auto=format&fit=crop&w=720&q=80">
                        <img src="travel/images/gallery_1.jpg" alt="https://unsplash.com/@mantashesthaven">
                        </a>
                     </li>
                     <li class="gallery_item">
                        <a class="colorbox" href="https://images.unsplash.com/photo-1495162048225-6b3b37b8a69e?ixlib=rb-0.3.5&s=861dd3c7b9d3e735d7fd7cbb1eefed64&auto=format&fit=crop&w=720&q=80">
                        <img src="travel/images/gallery_2.jpg" alt="https://unsplash.com/@kensuarez">
                        </a>
                     </li>
                     <li class="gallery_item">
                        <a class="colorbox" href="https://images.unsplash.com/photo-1502646275263-04be86afa386?ixlib=rb-0.3.5&s=682a41d7d9bf6e3feabc73a5fdd61dd2&auto=format&fit=crop&w=720&q=80">
                        <img src="travel/images/gallery_3.jpg" alt="https://unsplash.com/@jakobowens1">
                        </a>
                     </li>
                     <li class="gallery_item">
                        <a class="colorbox" href="https://images.unsplash.com/photo-1484820301304-0b43512779dc?ixlib=rb-0.3.5&s=7a3393e9f507fb4718c36337a8014c52&auto=format&fit=crop&w=720&q=80">
                        <img src="travel/images/gallery_4.jpg" alt="https://unsplash.com/@seefromthesky">
                        </a>
                     </li>
                     <li class="gallery_item">
                        <a class="colorbox" href="https://images.unsplash.com/photo-1490380169520-0a4b88d52565?ixlib=rb-0.3.5&s=7e6b68b1911fb4ffeea4c0750b8a5269&auto=format&fit=crop&w=720&q=80">
                        <img src="travel/images/gallery_5.jpg" alt="https://unsplash.com/@deannaritchie">
                        </a>
                     </li>
                     <li class="gallery_item">
                        <a class="colorbox" href="https://images.unsplash.com/photo-1504434026032-a7e440a30b68?ixlib=rb-0.3.5&s=2cc35bf903b78ba4f7f7ed69bc2abe3f&auto=format&fit=crop&w=720&q=80">
                        <img src="travel/images/gallery_6.jpg" alt="https://unsplash.com/@benobro">
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<br>
@endsection
@section('meta')
<title>{{ $chitiet->title }}</title>
<meta name="keywords" content="{{ $chitiet->keyword }}" />
<meta name="description" content="{{ $chitiet->description }}" />
<!--meta facebook-->
<meta property="og:title" content="{{ $chitiet->title }}" />
<meta property="og:description" content="{{ $chitiet->description }}" />
<meta property="og:image" content= "/{{ $chitiet->img }}" />
<!--meta google-->
<meta itemprop="name" content="{{ $chitiet->title }}" />
<meta itemprop="description" content="{{ $chitiet->description }}" />
<meta itemprop="image" content= "/{{ $chitiet->img }}" />
<meta name="og:url" content="{{ route('trangchu.chitiet.car',['slug'=>str_slug($chitiet->todo),'id'=>$chitiet->id]) }}"/>
@endsection
