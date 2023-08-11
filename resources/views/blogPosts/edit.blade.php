@extends('layout')

@section('head')
<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
@endsection


@section('main')

<main class="container" style="background-color:#fff;" >

    <section id="contact-us">
        <h1 style="padding-top: 50px; ">Edit Post</h1>
        @include('includes.flash-message')
          <!-- Blog Form -->
          <div class="contact-form">
            <form action="{{ route('blog.update',$post)}}" method="post" enctype="multipart/form-data">
             @method('put')
                @csrf
              <!-- Name -->
              <label for="title"><span>Title</span></label>
              <input type="text" id="title" name="title" value="{{$post->title}}" />
              @error('title')
               <p style="color:red; margin-bottom:25px;">{{$message}}</p> 
              @enderror
  
              <!-- Email -->
              <label for="image"><span>Image</span></label>
              <input type="file" id="image" name="image" value="" />
              @error('image')
              <p style="color:red; margin-bottom:25px;">{{$message}}</p>
                
              @enderror
  
              <!-- Subject -->
              <label for="body"><span>Body</span></label>
              <textarea id="body" name="body">{{$post->body}}</textarea>
              @error('body')
              <p style="color:red; margin-bottom:25px;">{{$message}}</p>
                
              @enderror  
  
               <!-- Button -->
              <input type="submit" value="Update" />
            </form>
          </div>
    </section>
</main>
    
@endsection


@section('script')

<script>   // create-blog-post
  CKEDITOR.replace( 'body' );
  </script>
    
@endsection