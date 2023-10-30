@extends('frontend.layouts.app')

@section('content')

 @if($count === 0)
     <section id="billboard">
         <div class="container">
             <div class="row">
                 <h3 class="section-title" style="text-align: center">Featured Movies</h3>
                 <div class="col-md-12">
                     <button class="prev slick-arrow">
                         <i class="icon icon-arrow-left"></i>
                     </button>
                     <div class="main-slider pattern-overlay">
                         <h1 class="text-center">Coming Soon</h1>
                     </div><!--slider-->
                     <button class="next slick-arrow">
                         <i class="icon icon-arrow-right"></i>
                     </button>
                 </div>
             </div>
         </div>
     </section>
     <section id="popular-books" class="bookshelf">
         <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <div class="section-header align-center">
                         <h2 class="section-title">Available Movies</h2>
                     </div>
                     <ul class="tabs">
                         <li data-tab-target="#all-genre" class="active tab">All Genre</li>
                         <li data-tab-target="#horror" class="tab">Horror</li>
                         <li data-tab-target="#action" class="tab">Action</li>
                         <li data-tab-target="#comedy" class="tab">Comedy</li>
                         <li data-tab-target="#drama" class="tab">Drama</li>
                         <li data-tab-target="#thriller" class="tab">Thriller</li>
                         <li data-tab-target="#adventure" class="tab">Adventure</li>
                         <li data-tab-target="#fantasy" class="tab">Fantasy</li>
                     </ul>
                     <h1 class="text-center">Coming Soon</h1>
                 </div>
             </div><!--inner-tabs-->
         </div>
     </section>
     <section id="best-selling" class="leaf-pattern-overlay">
         <div class="corner-pattern-overlay"></div>
         <div class="container">
             <div class="row">
                 <div class="col-md-8 col-md-offset-2">
                     <div class="row">
                         <h3 class="section-title" style="text-align: center">Best Selling Movie</h3>
                         <hr>
                         <h1 class="text-center">Coming Soon</h1>
                     </div>
                     <!-- / row -->
                 </div>
             </div>
         </div>
     </section>
 @else
     @if($featured_count === 0)
         <section id="billboard">
             <div class="container">
                 <div class="row">
                     <h3 class="section-title" style="text-align: center">Featured Movies</h3>
                     <div class="col-md-12">
                         <button class="prev slick-arrow">
                             <i class="icon icon-arrow-left"></i>
                         </button>
                         <div class="main-slider pattern-overlay">
                             <h1 class="text-center">Coming Soon</h1>
                         </div><!--slider-->
                         <button class="next slick-arrow">
                             <i class="icon icon-arrow-right"></i>
                         </button>
                     </div>
                 </div>
             </div>
         </section>
     @else
         <section id="billboard">
             <div class="container">
                 <div class="row">
                     <h3 class="section-title" style="text-align: center">Featured Movies</h3>
                     <div class="col-md-12">
                         <button class="prev slick-arrow">
                             <i class="icon icon-arrow-left"></i>
                         </button>
                         <div class="main-slider pattern-overlay">
                             @foreach($featured_movies as $featured_movie)
                                 <div class="slider-item">
                                     <div class="banner-content">
                                         <h2 class="banner-title">{{$featured_movie->title}}</h2>
                                         <p>{{$featured_movie->description}}</p>
{{--                                         <div class="btn-wrap">--}}
{{--                                             <a href="/movie-tickets-info/{{$featured_movie->id}}/" class="btn btn-outline-accent btn-accent-arrow">Read More<i class="icon icon-ns-arrow-right"></i></a>--}}
{{--                                         </div>--}}
                                     </div><!--banner-content-->
                                     <img src="{{asset('/storage/images/products/'.$featured_movie->img)}}" alt="banner" class="banner-image">
                                 </div><!--slider-item-->
                             @endforeach
                                 @foreach($movies as $movie)
                                     @if($movie->ticket->isEmpty())
                                         <div class="slider-item">
                                             <div class="banner-content">
                                                 <h2 class="banner-title">{{$movie->title}}</h2>
                                                 <p>{{$movie->description}}</p>
                                             </div><!--banner-content-->
                                             <img src="{{asset('/storage/images/products/'.$movie->img)}}" alt="banner" class="banner-image">
                                         </div><!--slider-item-->
                                     @else
                                         <div class="slider-item">
                                             <div class="banner-content">
                                                 <h2 class="banner-title">{{$movie->title}}</h2>
                                                 <p>{{$movie->description}}</p>
                                                 <div class="btn-wrap">
                                                     <a href="/movie-tickets-info/{{$movie->id}}/" class="btn btn-outline-accent btn-accent-arrow">Read More<i class="icon icon-ns-arrow-right"></i></a>
                                                 </div>
                                             </div><!--banner-content-->
                                             <img src="{{asset('/storage/images/products/'.$movie->img)}}" alt="banner" class="banner-image">
                                         </div><!--slider-item-->
                                     @endif

                                 @endforeach
                         </div><!--slider-->
                         <button class="next slick-arrow">
                             <i class="icon icon-arrow-right"></i>
                         </button>
                     </div>
                 </div>
             </div>
         </section>
     @endif
     <section id="popular-books" class="bookshelf">
         <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <div class="section-header align-center">
                         <h2 class="section-title">Available Movies</h2>
                     </div>
                     <ul class="tabs">
                         <li data-tab-target="#all-genre" class="active tab">All Genre</li>
                         <li data-tab-target="#horror" class="tab">Horror</li>
                         <li data-tab-target="#action" class="tab">Action</li>
                         <li data-tab-target="#comedy" class="tab">Comedy</li>
                         <li data-tab-target="#drama" class="tab">Drama</li>
                         <li data-tab-target="#thriller" class="tab">Thriller</li>
                         <li data-tab-target="#adventure" class="tab">Adventure</li>
                         <li data-tab-target="#fantasy" class="tab">Fantasy</li>
                     </ul>
                     <div class="tab-content">
                         <div id="all-genre" data-tab-content class="active">
                             <div class="row">
                                 @foreach($movies as $movie)
                                     @if($movie->ticket->isNotEmpty())
                                         <div class ="col-md-3">
                                             <a href="/movie-tickets-info/{{$movie->id}}/" style="text-decoration: none">
                                                 <figure class="product-style">
                                                     <img style="height: 350px" src="{{asset('/storage/images/products/'.$movie->img)}}" alt="Books" class="product-item">
                                                     <button type="button" class="add-to-cart" data-product-tile="add-to-cart" tabindex="0">Read More</button>
                                                     <figcaption>
                                                         <h3>{{$movie->title}}</h3>
                                                         <p>{{$movie->producer}}</p>
                                                     </figcaption>
                                                 </figure>
                                             </a>
                                         </div>
                                     @endif
                                 @endforeach
                             </div>
                         </div>
                         <div id="horror" data-tab-content>
                             <div class="row">
                                 @foreach($movies as $movie)
                                     @if($movie->genre == 'horror')
                                         @if($movie->ticket->isNotEmpty())
                                         <div class ="col-md-3">
                                             <a href="/movie-tickets-info/{{$movie->id}}/" style="text-decoration: none">
                                                 <figure class="product-style">
                                                     <img  src="{{asset('/storage/images/products/'.$movie->img)}}" alt="Books" class="product-item">
                                                     <button type="button" class="add-to-cart" data-product-tile="add-to-cart" tabindex="0">Read More</button>
                                                     <figcaption>
                                                         <h3>{{$movie->title}}</h3>
                                                         <p>{{$movie->producer}}</p>
                                                     </figcaption>
                                                 </figure>
                                             </a>
                                         </div>
                                         @endif
                                     @endif
                                 @endforeach
                             </div>
                         </div>
                         <div id="action" data-tab-content>
                             <div class="row">
                                 @foreach($movies as $movie)
                                     @if($movie->genre == 'action')
                                         @if($movie->ticket->isNotEmpty())
                                             <div class ="col-md-3">
                                                 <a href="/movie-tickets-info/{{$movie->id}}/" style="text-decoration: none">
                                                     <figure class="product-style">
                                                         <img  src="{{asset('/storage/images/products/'.$movie->img)}}" alt="Books" class="product-item">
                                                         <button type="button" class="add-to-cart" data-product-tile="add-to-cart" tabindex="0">Read More</button>
                                                         <figcaption>
                                                             <h3>{{$movie->title}}</h3>
                                                             <p>{{$movie->producer}}</p>
                                                         </figcaption>
                                                     </figure>
                                                 </a>
                                             </div>
                                         @endif
                                     @endif
                                 @endforeach
                             </div>
                         </div>
                     </div>
                     <div id="comedy" data-tab-content>
                         <div class="row">
                             @foreach($movies as $movie)
                                 @if($movie->genre == 'comedy')
                                     @if($movie->ticket->isNotEmpty())
                                     <div class ="col-md-3">
                                         <a href="/movie-tickets-info/{{$movie->id}}/" style="text-decoration: none">
                                             <figure class="product-style">
                                                 <img  src="{{asset('/storage/images/products/'.$movie->img)}}" alt="Books" class="product-item">
                                                 <button type="button" class="add-to-cart" data-product-tile="add-to-cart" tabindex="0">Read More</button>
                                                 <figcaption>
                                                     <h3>{{$movie->title}}</h3>
                                                     <p>{{$movie->producer}}</p>
                                                 </figcaption>
                                             </figure>
                                         </a>
                                     </div>
                                     @endif
                                 @endif
                             @endforeach
                         </div>
                     </div>
                     <div id="drama" data-tab-content>
                         <div class="row">
                             @foreach($movies as $movie)
                                 @if($movie->genre == 'drama')
                                     @if($movie->ticket->isNotEmpty())
                                     <div class ="col-md-3">
                                         <a href="/movie-tickets-info/{{$movie->id}}/" style="text-decoration: none">
                                             <figure class="product-style">
                                                 <img  src="{{asset('/storage/images/products/'.$movie->img)}}" alt="Books" class="product-item">
                                                 <button type="button" class="add-to-cart" data-product-tile="add-to-cart" tabindex="0">Read More</button>
                                                 <figcaption>
                                                     <h3>{{$movie->title}}</h3>
                                                     <p>{{$movie->producer}}</p>
                                                 </figcaption>
                                             </figure>
                                         </a>
                                     </div>
                                     @endif
                                 @endif
                             @endforeach
                         </div>
                     </div>
                     <div id="adventure" data-tab-content>
                         <div class="row">
                             @foreach($movies as $movie)
                                 @if($movie->genre == 'adventure')
                                     @if($movie->ticket->isNotEmpty())
                                     <div class ="col-md-3">
                                         <a href="/movie-tickets-info/{{$movie->id}}/" style="text-decoration: none">
                                             <figure class="product-style">
                                                 <img  src="{{asset('/storage/images/products/'.$movie->img)}}" alt="Books" class="product-item">
                                                 <button type="button" class="add-to-cart" data-product-tile="add-to-cart" tabindex="0">Read More</button>
                                                 <figcaption>
                                                     <h3>{{$movie->title}}</h3>
                                                     <p>{{$movie->producer}}</p>
                                                 </figcaption>
                                             </figure>
                                         </a>
                                     </div>
                                     @endif
                                 @endif
                             @endforeach
                         </div>
                     </div>
                     <div id="thriller" data-tab-content>
                         <div class="row">
                             <div class="row">
                                 @foreach($movies as $movie)
                                     @if($movie->genre == 'thriller')
                                         @if($movie->ticket->isNotEmpty())
                                         <div class ="col-md-3">
                                             <a href="/movie-tickets-info/{{$movie->id}}/" style="text-decoration: none">
                                                 <figure class="product-style">
                                                     <img  src="{{asset('/storage/images/products/'.$movie->img)}}" alt="Books" class="product-item">
                                                     <button type="button" class="add-to-cart" data-product-tile="add-to-cart" tabindex="0">Read More</button>
                                                     <figcaption>
                                                         <h3>{{$movie->title}}</h3>
                                                         <p>{{$movie->producer}}</p>
                                                     </figcaption>
                                                 </figure>
                                             </a>
                                         </div>
                                         @endif
                                     @endif
                                 @endforeach
                             </div>
                         </div>
                     </div>
                     <div id="fantasy" data-tab-content>
                         <div class="row">
                             @foreach($movies as $movie)
                                 @if($movie->genre == 'fantasy')
                                     @if($movie->ticket->isNotEmpty())
                                     <div class ="col-md-3">
                                         <a href="/movie-tickets-info/{{$movie->id}}/" style="text-decoration: none">
                                             <figure class="product-style">
                                                 <img  src="{{asset('/storage/images/products/'.$movie->img)}}" alt="Books" class="product-item">
                                                 <button type="button" class="add-to-cart" data-product-tile="add-to-cart" tabindex="0">Read More</button>
                                                 <figcaption>
                                                     <h3>{{$movie->title}}</h3>
                                                     <p>{{$movie->producer}}</p>
                                                 </figcaption>
                                             </figure>
                                         </a>
                                     </div>
                                     @endif
                                 @endif
                             @endforeach
                         </div>
                     </div>
                 </div>
             </div><!--inner-tabs-->
         </div>
         </div>
     </section>
     <section id="best-selling" class="leaf-pattern-overlay">
         <div class="corner-pattern-overlay"></div>
         <div class="container">
             <div class="row">
                 <div class="col-md-8 col-md-offset-2">
                     <div class="row">
                         <h3 class="section-title" style="text-align: center">Best Selling Movie</h3>
                         <hr>
                         <div class="col-md-6">
                             <figure class="products-thumb">
                                 <img src="{{asset('/storage/images/products/'.$movieWithMostOrders->img)}}" alt="book" class="single-image">
                             </figure>
                         </div>
                         <div class="col-md-6">
                             <div class="product-entry">
                                 <div class="products-content">
                                     <div><span style="font-size: x-large; color: black; font-weight: bold">Movie Name:</span><p style="font-size: large">{{$movieWithMostOrders->title}}</p></div>
                                     <div><span style="font-size: x-large; color: black; font-weight: bold">Produced by:</span> <p style="font-size: large">{{$movieWithMostOrders->producer}}</p></div>
                                     <div><span style="font-size: x-large; color: black; font-weight: bold">Movie Description</span> <p style="font-size: large">{{$movieWithMostOrders->description}}</p></div>
                                     <a class="button" href="/movie-tickets-info/{{$movieWithMostOrders->id}}/"><button>Buy Tickets Here</button></a>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <!-- / row -->
                 </div>
             </div>
         </div>
     </section>
 @endif
@endsection


