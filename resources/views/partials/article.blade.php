@extends('layout.layout_base')

@section('article')
  <div class="blue-row">

    <div class="container-article">
        <div class="article-thumb">
          <img src="{{$comicsList['thumb']}}">
        </div>
    </div>

  </div>

  <div class="container-article res-flex">

    <div class="comic-info">
        <h1 class="art-title">{{$comicsList['title']}}</h1>
      
        <!-- PRICE AVAILABILITY ROW -->
        <div class="availability">

            <div class="price-status">
              U.S. Price: <span class="price-comic">{{$comicsList['price']}}</span>
            </div>

            <div class="check-av">
              <span class="status-av">Available</span>
              <a href="#" class="check-link">Check availability</a>
            </div>
        
        </div>

        <!-- COMIC INFO TEXT -->

        <p class="comic-txt-info">{{$comicsList['description']}}</p>

    </div>

    <div class="adv-col">
      <h2 class="adv-title">ADVERTISEMENT</h2>
      <a href="#">
        <img src="{{ asset('img/adv.jpg') }}">
      </a>
    </div>

  </div>

  <div class="wrap-grey"> 
    <div class="container-article res-flex">

        <div class="talent-col comic-info-cols">
            <h2 class="com-title">Talent</h2>

            {{-- ROW INFO COLONNA --}}
            <div class="data-comics-row">
                <span class="label-com">Art by:</span>

                <div class="artist-section">
                  @foreach ($comicsList['artists'] as $artist)                    
                    <a href="#">{{$artist}}</a>
                  @endforeach
                </div>

            </div>
            {{-- FINE ROW INFO COLONNA --}}

            {{-- ROW INFO COLONNA --}}
            <div class="data-comics-row">
                <span class="label-com">Written by:</span>

                <div class="artist-section">
                  @foreach ($comicsList['writers'] as $writer)                    
                    <a href="#">{{$writer}}</a>
                  @endforeach
                </div>
            </div>
            {{-- FINE ROW INFO COLONNA --}}

        </div>

        {{-- SPECS COLONNA --}}
        <div class="specs-col comic-info-cols">
            <h2 class="com-title">Specs</h2>

            {{-- Row info col --}}
            <div class="data-comics-row">
                <span class="label-com">Series:</span>

                <div class="specs-data-sect">
                  <a href="#">{{$comicsList['series']}}</a>
                </div>
            </div>
            {{-- FINE ROW INFO COLONNA --}}

            {{-- ROW INFO COLONNA --}}
            <div class="data-comics-row">
                <span class="label-com">U.S. Price:</span>

                <div class="specs-data-sect">
                  <span>{{$comicsList['price']}}</span>
                </div>
            </div>
            {{-- FINE ROW INFO COLONNA --}}

            {{-- ROW INFO COLONNA --}}
            <div class="data-comics-row">
                <span class="label-com">On Sale Date:</span>

                <div class="specs-data-sect">
                  <span>{{$comicsList['sale_date']}}</span>
                </div>
            </div>
            {{-- FINE ROW INFO COLONNA --}}
        </div>

    </div>
  </div>

@endsection