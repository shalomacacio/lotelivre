@extends('layouts.admin')

@section('css')
<link rel="stylesheet" href="{{ asset('/vendor/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}">
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
@include('admin.bannerVideos.page-header')
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
             <h3 class="card-title">Novo Banner</h3>
           </div>
           <!-- /.card-header -->
           <div class="card-body">
             <form role="form" action="{{ route('banner-videos.store') }}" method="POST">
               @csrf
               @include('admin.bannerVideos.form')
               <div class="card-footer">
                 <button type="submit" class="btn btn-info">Salvar</button>
                 <button type="submit" class="btn btn-default float-right">Cancelar</button>
               </div>
             </form>
           </div>
           <!-- /.card-body -->
         </div>
         <!-- /.card -->
         @include('admin.bannerVideos.list')
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
{{-- plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js --}}
<script src="{{ asset('/site/plugins/bs-custom-file-input/bs-custom-file-input.js') }}"></script>
<script src="{{ asset('/vendor/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>

<script type="text/javascript">

  $(document).ready(function () {
    bsCustomFileInput.init();

        //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });

  });
</script>
@endsection
