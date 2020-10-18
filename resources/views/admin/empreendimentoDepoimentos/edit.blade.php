 @extends('layouts.admin')


 @section('css')
 <link rel="stylesheet" href="{{ asset('/vendor/plugins/summernote/summernote-bs4.css') }}">
 @endsection

 @section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
 @include('admin.empreendimentos.page-header')

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- right column -->
        <div class="col-md-12">
          <!-- general form elements disabled -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Novo Empreendimento</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form role="form" action="{{ route('empreendimentos.update', $empreendimento->id) }}" method="POST">
                @csrf
                @include('admin.empreendimentos.form')
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Salvar</button>
                  <button type="submit" class="btn btn-default float-right">Cancelar</button>
                </div>
              </form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!--/.col (right) -->
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
