@include('admin.bannerRotativos.alerts')

<div class="row">

  <div class="col-sm-4">
    <!-- text input -->
    <div class="form-group">
      <label>IMAGEM: (1900x700px)</label>
      <input type="file" name="img" class="form-control" placeholder="199x700px"
        @isset( $bannerRotativo->img) value="{{ $bannerRotativo->img }}" @endisset>
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

  <div class="col-sm-2">
    <div class="form-group">
      <div class="form-check">
        <label>ATIVAR / DESATIVAR:</label>
        <input class="form-check-input" type="checkbox" name="titulo_ativo" value="0">
        <label class="form-check-label"> </label>
      </div>
    </div>
  </div>

</div>
