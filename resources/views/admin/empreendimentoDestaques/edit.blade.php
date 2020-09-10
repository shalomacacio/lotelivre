 @extends('layouts.admin')
 @section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
 @include('admin.empreendimentoDestaques.page-header')

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
              <form role="form" action="{{ route('empreendimento-destaques.update', $empreendimento->id) }}" method="POST" enctype="multipart/form-data" >
                @csrf
                @include('admin.empreendimento-destaques.form')
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
