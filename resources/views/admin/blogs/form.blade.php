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

  <div class="col-sm-6">
    <!-- textarea -->
    <div class="form-group">
      <label>TEXTO</label>
      <textarea class="form-control"  name="texto" rows="3" placeholder="Enter ...">@isset($blog->texto){{ $blog->texto }}@endisset</textarea>
    </div>
  </div>

  <div class="col-sm-6">
    <!-- textarea -->
    <div class="form-group">
      <label>Texto Destaque</label>
      <textarea class="form-control"  name="texto_destaque" rows="3" placeholder="Enter ...">@isset($blog->texto_destaque){{$blog->texto_destaque}}@endisset</textarea>
    </div>
  </div>

  <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" >

</div>
