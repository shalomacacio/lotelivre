 @extends('layouts.admin')

 @section('css')
 <link rel="stylesheet" href="{{ asset('/vendor/plugins/summernote/summernote-bs4.css') }}">
 @endsection

 @section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">


 @include('admin.empreendimentos.page-header')
 {{-- @include('admin.layouts.admin-partials.alerts') --}}
  <!-- Main content -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">

              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#cadastro" data-toggle="tab">Cadastro</a></li>
                  <li class="nav-item"><a class="nav-link" href="#imagens" data-toggle="tab">Imagens</a></li>
                </ul>
              </div><!-- /.card-header -->

              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="cadastro">
                    <form role="form" action="{{ route('empreendimentos.store') }}" method="POST"  enctype="multipart/form-data" >
                      @csrf
                      @include('admin.empreendimentos.form')
                      <div class="card-footer">
                        <button type="submit" class="btn btn-info">Salvar</button>
                        <button type="submit" class="btn btn-default float-right">Cancelar</button>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane col-4" id="imagens">
                    <form role="form" action="{{ route('empreendimento-images.store')}}" method="POST"  enctype="multipart/form-data" >
                      @csrf
                      @include('admin.empreendimentos.formImg')
                      <div class="card-footer">
                        <button type="submit" class="btn btn-info">Salvar</button>
                        <button type="submit" class="btn btn-default float-right">Cancelar</button>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

@section('javascript')
<!-- File Input -->
<script src="{{ asset('/site/plugins/bs-custom-file-input/bs-custom-file-input.js') }}"></script>
<script src="{{ asset('/site/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('/site/plugins/summernote/summernote-bs4.min.js') }}"></script>

<script>


$(function () {
    bsCustomFileInput.init();

    // Summernote
    $('.textarea').summernote()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

  })

</script>
@endsection

