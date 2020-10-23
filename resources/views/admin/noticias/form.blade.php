@include('admin.blogs.alerts')

<div class="row">

  <div class="col-sm-6">
    <div class="form-group">
      <label for="exampleInputFile">IMAGEM <span>(540x460px)</span> </label>
      <div class="input-group">
                <div class="input-group-prepend">
          <span class="input-group-text">
            <input type="checkbox"  name="active" >
          </span>
        </div>
        <div class="custom-file">
          <input type="file" name="img" class="custom-file-input" placeholder="540x460px"
          @isset( $noticia->img) value="{{ $noticia->img }}" @endisset>
          <label class="custom-file-label" for="exampleInputFile">Imagem</label>
        </div>
      </div>
    </div>
  </div>

  <div class="col-sm-6">
    <!-- text input -->
    <div class="form-group">
      <label>LINK:</label>
      <input type="text" name="link" class="form-control" placeholder="Enter ..."
      @isset( $blog->link ) value="{{ $blog->link}}" @endisset>
    </div>
  </div>

  <div class="col-sm-4">
    <!-- text input -->
    <div class="form-group">
      <label>TITULO:</label>
      <input type="text" name="titulo" class="form-control" placeholder="Enter ..."
      @isset( $blog->titulo ) value="{{ $blog->titulo}}" @endisset>
    </div>
  </div>

  <div class="col-sm-4">
    <!-- text input -->
    <div class="form-group">
      <label>SUBTITULO:</label>
      <input type="text" name="subtitulo" class="form-control" placeholder="Enter ..."
      @isset( $blog->subtitulo ) value="{{ $blog->subtitulo}}" @endisset>
    </div>
  </div>

  <div class="col-sm-4">
    <!-- text input -->
    <div class="form-group">
      <label>LINK:</label>
      <input type="date" name="data_noticia" class="form-control" placeholder="Enter ..."
      @isset( $blog->link ) value="{{ $blog->link}}" @endisset>
    </div>
  </div>

  <div class="col-sm-12">
    <!-- textarea -->
    <div class="form-group">
      <label>TEXTO</label>
      <textarea class="textarea" placeholder="Place some text here" name="texto"
      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
      @isset($blog->descricao){{ $blog->descricao }}@endisset</textarea>
    </div>
  </div>

  <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" >

</div>
