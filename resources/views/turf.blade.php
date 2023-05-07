<div class="section trending">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="section-heading">
          <h6>Trending</h6>
          <h2>Trending Games</h2>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="main-button">
          <a href="shop.html">View All</a>
        </div>
      </div>  
    </div>

    <div class="row">
      @foreach ($data as $game)
      <div class="col-lg-3 col-md-6">
        <div class="item">
          <div class="thumb">
            <a href="product-details.html"><img src="{{ url('/turfimage/'.$game->image) }}" alt=""></a>
            <span class="price"><em>{{ $game->price }}</em>{{ $game->offer }}</span>
          </div>
          <div class="down-content">
            <span class="category">Action</span>
            <div class="info">
              <h4 class="title">{{ $game->title }}</h4>
              <p class="description">{{ $game->description }}</p>
            </div>
            <a href="product-details.html"><i class="fa fa-shopping-bag"></i></a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
