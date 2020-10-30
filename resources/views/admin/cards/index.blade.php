@extends('layouts.admin')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
@include('admin.cards.page-header')
{{-- @include('admin.layouts.admin-partials.alerts') --}}
 <!-- Main content -->
 <section class="content">
   <div class="container-fluid">
     <div class="row">
       <!-- right column -->
       <div class="col-md-12">
         <!-- general form elements disabled -->
         <div class="card card-primary">
           <div class="card-header">
             <h3 class="card-title">Novo Card</h3>
           </div>
           <!-- /.card-header -->
           <div class="card-body">
             <form role="form" action="{{ route('cards.store') }}" method="POST" enctype="multipart/form-data" >
               @csrf
               @include('admin.cards.form')
               <div class="card-footer">
                 <button type="submit" class="btn btn-info">Salvar</button>
                 <button type="submit" class="btn btn-default float-right">Cancelar</button>
               </div>
             </form>
           </div>
           <!-- /.card-body -->
         </div>
         <!-- /.card -->
         {{-- @include('admin.cards.list') --}}
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
<script type="text/javascript">
  $(document).ready(function () {
    bsCustomFileInput.init();
  });
</script>
@stop

