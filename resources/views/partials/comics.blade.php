@extends('layout.layout_base')

@section('content')
      <div class="wrap-black">
          <div class="container-w-b">

              <div class="title-section">
                <h2>Current Series</h2>
              </div>
              
              <div class="wrap-card">
                @foreach ($comics as $singlecomic)                      
                  <div class="card">
                      <div class="img-wrap">
                          <a href="#">
                              <img src="{{$singlecomic['thumb']}}">
                          </a>
                      </div>

                      <h3>{{$singlecomic['title']}}</h3>
                  </div>
                @endforeach
              </div>

              <div class="load-btn">
                  <a href="">Load More</a>
              </div>

          </div>
      </div>
@endsection    