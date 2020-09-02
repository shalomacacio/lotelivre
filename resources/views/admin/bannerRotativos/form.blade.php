@include('admin.bannerRotativos.alerts')

<div class="row">

  <div class="col-sm-3">
    <div class="form-group">
      <label for="customFile">Imagem 1900x700</label>
      <div class="custom-file">
        <input type="file" class="custom-file-input" name="img" id="img"
        @isset( $bannerRotativo->img) value="{{ $bannerRotativo->img }}" @endisset>
        <label class="custom-file-label" for="img">1900x700.png</label>
      </div>
    </div>
  </div>

  <div class="col-sm-3">
    <!-- text input -->
    <div class="form-group">
      <label>TITULO:</label>
      <input type="text" name="titulo" class="form-control" placeholder="Enter ..."
        @isset( $bannerRotativo->titulo) value="{{ $bannerRotativo->titulo }}" @endisset>
    </div>
  </div>

  <div class="col-sm-3">
    <!-- text input -->
    <div class="form-group">
      <label>SUBTITULO:</label>
      <input type="text" name="subtitulo" class="form-control" placeholder="Enter ..."
        @isset( $bannerRotativo->subtitulo) value="{{ $bannerRotativo->subtitulo }}" @endisset>
    </div>
  </div>

</div>
<div class="row">

  <div class="col-sm-3">
    <div class="form-group">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="titulo_ativo" value="0">
        <label class="form-check-label">Titulo Ativo</label>
      </div>
    </div>
  </div>

</div>
