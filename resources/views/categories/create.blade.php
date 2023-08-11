@extends('layout')

@section('main')

<main class="container" style="background-color:#fff;" >

    <section id="contact-us">
        <h1 style="padding-top: 50px; ">Create New Category</h1>
        
        @include('includes.flash-message')
          <!-- Category Form -->
          <div class="contact-form">
            <form action="{{ route('categories.store')}}" method="post">
              @csrf
              <!-- Name -->
              <label for="name"><span>Name</span></label>
              <input type="text" id="name" name="name" value="{{old('name')}}" />
              @error('name')
               <p style="color:red; margin-bottom:25px;">{{$message}}</p> 
              @enderror
   
  
               <!-- Button -->
              <input type="submit" value="Submit" />
            </form>
          </div>
          <div class="create-categories">
            <a href="{{ route('categories.index') }}" style="color:chocolate; margin:7px;">Categories list<span>&#8594;</span></a>
          </div>
    </section>
</main>
    
@endsection
