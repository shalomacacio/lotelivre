<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

  <!-- Brand Logo -->
  <a href="{{ route('site.home') }}" class="brand-link"  target="_blank">
    <img src="{{ asset('vendor/adminlte/dist/img/logo.png') }}" alt="logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Lote Livre</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('vendor/adminlte/dist/img/profile.png') }}"  class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"> Usuário  </a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-images"></i>
            <p>SITE <i class="fa fa-angle-left right"></i></p>
          </a>
          <ul class="nav nav-treeview">
            {{-- <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>AGENDA</p>
              </a>
            </li> --}}
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link"><i class="nav-icon fas fa-home"></i>
                  <p>HOME<i class="right fas fa-angle-left"></i></p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="{{route('banner-rotativos.index') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p> Banner Rotativo  </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('banner-videos.index') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p> Videos  </p>
                    </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('noticias.index') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p> Notícias  </p>
                    </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('cards.index') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p> Cards  </p>
                    </a>
                </li>

              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link"><i class="nav-icon fas fa-circle"></i>
                  <p>BLOG<i class="right fas fa-angle-left"></i></p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('blogs.create') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Novo Blog</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link"><i class="nav-icon fas fa-circle"></i>
                  <p>EMPREENDIMENTO<i class="right fas fa-angle-left"></i></p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('empreendimentos.create') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Novo Empreendimento</p>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-chart-line"></i>
            <p>ADMIN <i class="fa fa-angle-left right"></i></p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Lotes</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('cidades.create') }}" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Cidades</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Usuários</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
