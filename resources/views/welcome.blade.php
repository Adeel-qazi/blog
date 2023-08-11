@extends('layout');
      <!-- header -->
      @section('header')

      <header class="header" style="background-image: url({{ asset('images/photography.jpg')}})">
        <div class="header-text" >
          <h1>Alphayo Blog</h1>
          <h4>Dashboard of verified news...</h4>
        </div>
        <div class="overlay"></div>
      </header>
          
      @endsection
     
    
      @section('main')

      <main class="container">
        <h2 class="header-title">Latest Blog Posts</h2>
        <section class="cards-blog latest-blog">
         @if ($posts->isNotEmpty())
         @foreach ($posts as $post )

         <div class="card-blog-content">
          <img src="{{ asset($post->imagePath)}}" alt="" />
          <p>
            {{$post->created_at->diffForHumans()}}
            <span>Written By {{$post->user->name}}</span>
          </p>
          <h4>
            <a href="{{route('singleBlog',$post)}}">{{$post->title}}</a>
          </h4>
        </div>
           
         @endforeach
           
         @endif


        </section>
      </main>
          
      @endsection
