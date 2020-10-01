@include('admin.bannerRotativos.alerts')

<div class="row">

  <div class="col-sm-3">
    <div class="form-group">
      <label for="exampleInputFile">Banner Destaque <span>(1900x700px)</span> </label>
      <div class="input-group">
                <div class="input-group-prepend">
          <span class="input-group-text">
            <input type="checkbox"  name="ativo" >
          </span>
        </div>
        <div class="custom-file">
          <input type="file" name="img" class="custom-file-input" placeholder="199x700px"
          @isset( $bannerRotativo->img) value="{{ $bannerRotativo->img }}" @endisset>
          <label class="custom-file-label" for="exampleInputFile">Imagem</label>
        </div>
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

  <div class="col-sm-3">
    <div class="form-group">
      <label>Cor do Texto :</label>

      <div class="input-group my-colorpicker2">
        <input type="text" class="form-control" name="font_collor" @isset( $bannerRotativo->font_collor) value="{{ $bannerRotativo->subtitulo }}" @endisset>

        <div class="input-group-append">
          <span class="input-group-text"><i class="fas fa-square"></i></span>
        </div>
      </div>
      <!-- /.input group -->
    </div>
  </div>

</div>
