@include('admin.bannerRotativos.alerts')

<div class="row">

  <div class="col-sm-4">
    <!-- text input -->
    <div class="form-group">
      <label>IMAGEM: (600x370px)</label>
      <input type="file" name="img" class="form-control" placeholder="199x700px"
        @isset( $bannerPromocional->img) value="{{ $bannerPromocional->img }}" @endisset>
    </div>
  </div>

  <div class="col-sm-4">
    <!-- text input -->
    <div class="form-group">
      <label>TITULO:</label>
      <input type="text" name="titulo" class="form-control" placeholder="Enter ..."
        @isset( $bannerPromocional->titulo) value="{{ $bannerPromocional->titulo }}" @endisset>
    </div>
  </div>

  <div class="col-sm-4">
    <!-- text input -->
    <div class="form-group">
      <label>SUBTITULO:</label>
      <input type="text" name="subtitulo" class="form-control" placeholder="Enter ..."
        @isset( $bannerPromocional->subtitulo) value="{{ $bannerPromocional->subtitulo }}" @endisset>
    </div>
  </div>

  <div class="col-sm-4">
    <!-- text input -->
    <div class="form-group">
      <label>SPAN:</label>
      <input type="text" name="span" class="form-control" placeholder="Enter ..."
        @isset( $bannerPromocional->span) value="{{ $bannerPromocional->span }}" @endisset>
    </div>
  </div>

  <div class="col-sm-4">
    <!-- text input -->
    <div class="form-group">
      <label>BOTÃO:</label>
      <input type="text" name="txt_button" class="form-control" placeholder="Enter ..."
        @isset( $bannerPromocional->txt_button) value="{{ $bannerPromocional->txt_button }}" @endisset>
    </div>
  </div>

  <div class="col-sm-4">
    <!-- text input -->
    <div class="form-group">
      <label>LINK:</label>
      <input type="text" name="link_button" class="form-control" placeholder="Enter ..."
        @isset( $bannerPromocional->link_button) value="{{ $bannerPromocional->link_button }}" @endisset>
    </div>
  </div>


</div>
