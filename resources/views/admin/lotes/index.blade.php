@extends('layouts.admin')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
@include('admin.lotes.page-header')

 <!-- Main content -->
 <section class="content">
   <div class="container-fluid">
     <div class="row">
       <!-- right column -->
       <div class="col-md-12">
         <!-- general form elements disabled -->
         <div class="card card-primary">
           <div class="card-header">
             <h3 class="card-title">LOTES</h3>
           </div>
           <!-- /.card-header -->
           <div class="card-body p-0">
              @include('admin.lotes.list')
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

<!-- select 2 -->
<script src="{{ asset('/') }}"></script>

@endsection
