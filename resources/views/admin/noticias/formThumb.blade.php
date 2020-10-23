@include('admin.blogs.alerts')

<div class="row">

  <div class="col-sm-4">
    <div class="form-group">
      <label for="exampleInputFile">IMAGEM <span>(418x355)</span> </label>
      <div class="input-group">
                <div class="input-group-prepend">
          <span class="input-group-text">
            <input type="checkbox"  name="active" >
          </span>
        </div>
        <div class="custom-file">
          <input type="file" name="img" class="custom-file-input" placeholder="540x460px"
          @isset( $thumbnail->img) value="{{ $thumbnail->img }}" @endisset>
          <label class="custom-file-label" for="exampleInputFile">Imagem</label>
        </div>
      </div>
    </div>
  </div>



  <div class="col-sm-4">
    <!-- text input -->
    <div class="form-group">
      <label>TITULO:</label>
      <input type="text" name="titulo" class="form-control" placeholder="Enter ..."
      @isset( $thumbnail->titulo ) value="{{ $thumbnail->titulo}}" @endisset>
    </div>
  </div>


  <div class="col-sm-4">
    <div class="form-group">
      <label>POSIÇÃO:</label>
      <select class="form-control" name="posicao" style="width: 100%;">
        <option value="pt-0 pr-1">Esquerda-Up </option>
        <option value="pl-1 pt-0">Direita-Up </option>
        <option value="pr-1 pt-1">Esquerda-Down </option>
        <option value="pl-1 pt-1">Direita-Down  </option>
      </select>
    </div>
  </div>

  <div class="col-sm-4">
    <!-- text input -->
    <div class="form-group">
      <label>SPAN :</label>
      <input type="text" name="span" class="form-control" placeholder="Enter ..."
      @isset( $thumbnail->span ) value="{{ $thumbnail->span}}" @endisset>
    </div>
  </div>

  <div class="col-sm-4">
    <div class="form-group">
      <label>SPAN COR:</label>
      <select class="form-control" name="span_cor" style="width: 100%;">
        <option value="badge-primary"   class="text-primary" >Primary </option>
        <option value="badge-secondary" class="text-secondary" >Secondary </option>
        <option value="badge-success"   class="text-success">Success </option>
        <option value="badge-danger"    class="text-danger">Danger </option>
        <option value="badge-warning"   class="text-warning">Warning </option>
        <option value="badge-info"      class="text-info">Info </option>
        <option value="badge-light"     class="text-dark">Light </option>
        <option value="badge-dark"      class="text-dark">Dark </option>
      </select>
    </div>
  </div>

  <div class="col-sm-4">
    <!-- text input -->
    <div class="form-group">
      <label>LINK:</label>
      <input type="text" name="link" class="form-control" placeholder="Enter ..."
      @isset( $thumbnail->link ) value="{{ $thumbnail->link}}" @endisset>
    </div>
  </div>



</div>
