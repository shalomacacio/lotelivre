

<div class="row">

  <div class="col-sm-12">
    <div class="form-group">
      <label>EMPREENDIMENTO:</label>

      <select class="form-control" name="empreendimento_id" style="width: 100%;">
        <option value="" selected >-- SELECIONE -- </option>
        @foreach ($empreendimentos as $empreendimento)
          <option value="{{ $empreendimento->id}}">{{ $empreendimento->nome }}</option>
        @endforeach
      </select>

    </div>
  </div>

  <div class="col-sm-12">
    <div class="form-group">
      <label for="exampleInputFile">IMAGEM </label>
      <div class="input-group">
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="exampleInputFile" name="img">
          <label class="custom-file-label" for="exampleInputFile">Imagem</label>
        </div>
      </div>
    </div>
  </div>

  <div class="col-sm-12">
    <!-- text input -->
    <div class="form-group">
      <label>SPAN:</label>
      <input type="text" name="span" class="form-control" placeholder="Enter ..."
        @isset( $empreendimento->span ) value="{{ $empreendimento->span }}" @endisset>
    </div>
  </div>

  <div class="col-sm-12">
    <!-- text input -->
    <div class="form-group">
      <label>PREÇO ANTIGO:</label>
      <input type="text" name="preco_antigo" class="form-control" placeholder="Enter ..."
        @isset( $empreendimento->preco_antigo ) value="{{ $empreendimento->preco_antigo }}" @endisset>
    </div>
  </div>


  <div class="col-sm-12">
    <div class="form-group">
      <label>SPAN COLOR:</label>

      <select class="form-control" name="span_color" style="width: 100%;">
        <option value="" selected >-- SELECIONE -- </option>
        <option value="new"  > VERMELHO </option>
        <option value="out-of-stock"  > AZUL </option>
      </select>

    </div>
  </div>

</div>
