@extends('layout.layout_base')

@section('comics')
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

      <!-- BLUE BAR LINK -->
      <div class="wrap-blue">
        <div class="container-b-b">
            <div class="main-bottom">
                <!-- LISTA LINK -->
                <ul>
                    <li>
                        <div class="li-img">
                            <img src="img/buy-comics-digital-comics.png">
                        </div>
                        <a href="#">Digital Comics</a>
                    </li>

                    <li>
                        <div class="li-img">
                            <img src="img/buy-comics-merchandise.png">
                        </div>
                        <a href="#">Dc Merchandise</a>
                    </li>

                    <li>
                        <div class="li-img">
                            <img src="img/buy-comics-subscriptions.png">
                        </div>
                        <a href="#">Subscription</a>
                    </li>

                    <li>
                        <div class="li-img">
                            <img src="img/buy-comics-shop-locator.png">
                        </div>
                        <a href="#">Comics Shop Locator</a>
                    </li>

                    <li>
                        <div class="li-img">
                            <img src="img/buy-dc-power-visa.svg">
                        </div>
                        <a href="#">Dc Power Visa</a>
                    </li>
                </ul>
                <!-- FINE LISTA LINK -->
            </div>
        </div>
    </div>

@endsection    