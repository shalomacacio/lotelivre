<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{ asset('vendor/adminlte/dist/img/logo.png') }}" alt="logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Lote Livre</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('vendor/adminlte/dist/img/profile.png')}}" class="img-circle elevation-2" alt="User Image">

        </div>
        <div class="info">
          <a href="#" class="d-block"> Usuário  </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-images"></i>
              <p>SITE</p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>HOME <i class="fa fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>TOPO</p>
                </a>
              </li>
              {{-- banner-principal  --}}
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-circle"></i>
                  <p>
                    BANNERS
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Banner Fixo</p>
                    </a>
                  </li>
                  <li class="nav-item has-treeview">
                    <a href="{{route('banner-rotativos.index') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Banner Rotativo
                      </p>
                    </a>
                  </li>
                </ul>
              </li>
              {{-- fim banner-prinicipal  --}}
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Lotes Destaque</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Rodapé</p>
                </a>
              </li>
            </ul>
          </li>

          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item has-treeview ">
              <a href="#" class="nav-link ">
                <i class="nav-icon fas fa-save"></i>
                <p>ADMINISTRATIVO</p>
              </a>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-hotel"></i>
                <p>Empreendimento <i class="fa fa-angle-left right"></i></p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('empreendimentos.create') }}" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Novo</p>
                  </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('empreendimentos.index') }}" class="nav-link">
                      <i class="fa fa-circle-o nav-icon"></i>
                      <p>Lista</p>
                    </a>
                  </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-map-marked-alt"></i>
                  <p>Lote <i class="fa fa-angle-left right"></i></p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('lotes.create') }}" class="nav-link">
                      <i class="fa fa-circle-o nav-icon"></i>
                      <p>Novo</p>
                    </a>
                  </li>
                    <li class="nav-item">
                      <a href="{{route('lotes.index') }}" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>Lista</p>
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
