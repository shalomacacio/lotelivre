@include('admin.lotes.alerts')

<div class="row">

  <div class="col-sm-3">
    <!-- text input -->
    <div class="form-group">
      <label>QUADRA:</label>
      <input type="text" name="quadra" class="form-control" placeholder="Enter ..."
        @isset( $bannerRotativos->id ) value="{{ $bannerRotativos->id }}" @endisset>
    </div>
  </div>

  <div class="col-sm-3">
    <!-- text input -->
    <div class="form-group">
      <label>LOTE:</label>
      <input type="text" name="lote" class="form-control" placeholder="Enter ..."
      @isset(  $bannerRotativos->id  ) value="{{ $bannerRotativos->id  }}" @endisset>
    </div>
  </div>
</div>
