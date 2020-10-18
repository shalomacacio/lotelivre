@include('admin.empreendimentos.alerts')

<div class="row">

  <div class="col-sm-12">
    <div class="form-group">
      <label>Emprendimento:</label>
      <select class="form-control" name="empreendimento_id" style="width: 100%;">
        <option value="" selected >-- SELECIONE -- </option>
          @foreach ($empreendimentos as $empreendimento)
            <option value="{{ $empreendimento->id}}">{{ $empreendimento->nome}}</option>
          @endforeach

      </select>
    </div>
  </div>

  <div class="col-sm-12">
    <div class="form-group">
      <label for="exampleInputFile">Banner Principal <span>(1900x700px)</span> </label>
      <div class="input-group">
        <div class="custom-file">
          <input type="file" class="custom-file-input"  name="imgs[]">
          <label class="custom-file-label" for="exampleInputFile">Imagem</label>
        </div>
      </div>
    </div>
  </div>

  <div class="col-sm-12">
    <div class="form-group">
      <label for="exampleInputFile">Banner Destaque <span>(550x750px)</span> </label>
      <div class="input-group">
        <div class="custom-file">
          <input type="file" class="custom-file-input"  name="imgs[]">
          <label class="custom-file-label" for="exampleInputFile">Imagem</label>
        </div>
      </div>
    </div>
  </div>

  <div class="col-sm-12">
    <div class="form-group">
      <label for="exampleInputFile">Imagem 1 <span>(370x300px)</span> </label>
      <div class="input-group">
        <div class="custom-file">
          <input type="file" class="custom-file-input"  name="imgs[]">
          <label class="custom-file-label" for="exampleInputFile">Imagem</label>
        </div>
      </div>
    </div>
  </div>

  <div class="col-sm-12">
    <div class="form-group">
      <label for="exampleInputFile">Imagem 2 <span>(370x300px)</span> </label>
      <div class="input-group">
        <div class="custom-file">
          <input type="file" class="custom-file-input"  name="imgs[]">
          <label class="custom-file-label" for="exampleInputFile">Imagem</label>
        </div>
      </div>
    </div>
  </div>

  <div class="col-sm-12">
    <div class="form-group">
      <label for="exampleInputFile">Imagem 3 <span>(370x300px)</span> </label>
      <div class="input-group">
        <div class="custom-file">
          <input type="file" class="custom-file-input"  name="imgs[]">
          <label class="custom-file-label" for="exampleInputFile">Imagem</label>
        </div>
      </div>
    </div>
  </div>

</div>
