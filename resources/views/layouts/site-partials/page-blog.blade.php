
		<!-- Start Blog Single -->
		<section class="blog-single section">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-12">
						<div class="blog-single-main">
							<div class="row">
								<div class="col-12">
									<div class="image">
                    <img src="{{ url("storage/{$blog->img}") }}" alt="#">
									</div>
									<div class="blog-detail">
                    <h2 class="blog-title">{{ $blog->titulo }}</h2>
										<div class="blog-meta">
											<span class="author"><a href="#"><i class="fa fa-user"></i>By Admin</a><a href="#"><i class="fa fa-calendar"></i>{{ $blog->created_at }}</a><a href="#"><i class="fa fa-comments"></i>Comment (15)</a></span>
										</div>
										<div class="content">
                      {!! $blog->texto !!}
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-12">
						<div class="main-sidebar">
							<!-- Single Widget -->
							<div class="single-widget category">
								<h3 class="title">Categorias</h3>
								<ul class="categor-list">
                  @foreach ($categorias as $categoria)
                    <li><a href="#">{{ $categoria->descricao}}</a></li>
                  @endforeach
								</ul>
							</div>
							<!--/ End Single Widget -->
							<!-- Single Widget -->
							<div class="single-widget recent-post">
                <h3 class="title">Posts recentes</h3>
                @foreach ($blogs as $blog)
                  <!-- Single Post -->
                  <div class="single-post">
                    <div class="image">
                      <img src="{{ url("storage/{$blog->img}") }}" alt="#">
                    </div>
                    <div class="content">
                      <h5><a href="{{ route('site.blog.show', $blog->id) }}">{{ $blog->titulo }}</a></h5>
                      <ul class="comment">
                        <li><i class="fa fa-calendar" aria-hidden="true"></i>{{ $blog->created_at }}</li>
                      </ul>
                    </div>
                  </div>
                  <!-- End Single Post -->
                @endforeach
							</div>
							<!--/ End Single Widget -->

							<!-- Single Widget -->
							<div class="single-widget newsletter">
								<h3 class="title">Novidades</h3>
								<div class="letter-inner">
									<h4>Inscreva-se &<br> receba Novidades !</h4>
									<div class="form-inner">
										<input type="email" placeholder="Enter your email">
										<a href="#">Submit</a>
									</div>
								</div>
							</div>
							<!--/ End Single Widget -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Blog Single -->
