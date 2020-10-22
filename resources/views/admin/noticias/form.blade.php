@include('admin.blogs.alerts')

<div class="row">

  <div class="col-sm-6">
    <!-- text input -->
    <div class="form-group">
      <label>TITULO:</label>
      <input type="text" name="titulo" class="form-control" placeholder="Enter ..."
      @isset( $blog->titulo ) value="{{ $blog->titulo}}" @endisset>
    </div>
  </div>

  <div class="col-sm-3">
    <div class="form-group">
      <label>CATEGORIA:</label>
      <select class="form-control" name="blog_categoria_id" style="width: 100%;">
        <option value="" selected >-- SELECIONE -- </option>
        @foreach ($categorias as $categoria)
        <option value="{{ $categoria->id }}">{{ $categoria->descricao  }}</option>
      @endforeach
      </select>
    </div>
  </div>

  <div class="col-sm-3">
    <div class="form-group">
      <label for="exampleInputFile">IMAGEM<span>(950X460)</span> </label>
      <div class="input-group">
        <div class="custom-file">
          <input type="file" class="custom-file-input"  name="img">
          <label class="custom-file-label" for="exampleInputFile">Imagem</label>
        </div>
      </div>
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
