<!-- Start Shop Blog  -->
<section class="shop-blog section">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title">
          <h2>Blogs Recentes</h2>
        </div>
      </div>
    </div>
    <div class="row">
      @foreach ($blogs as $blog)
      <div class="col-lg-4 col-md-6 col-12">
        <!-- Start Single Blog  -->
        <div class="shop-single-blog">
          <img src="{{ url("storage/{$blog->img}") }}" alt="#"   width="370px" height="300px">
          <div class="content">
            <p class="date">{{  Carbon\Carbon::parse($blog->created_at)->format('d-m-Y') }}</p>
            <a href="{{ route('site.blog.show', $blog->id) }}" class="title">{{ $blog->titulo }}</a>
            <a href="{{ route('site.blog.show', $blog->id) }}" class="more-btn">Continue lendo</a>
          </div>
        </div>
        <!-- End Single Blog  -->
      </div>
      @endforeach
    </div>
  </div>
</section>
<!-- End Shop Blog  -->
