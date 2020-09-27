@include('admin.empreendimentos.alerts')

<div class="row">

  <div class="col-sm-6">
    <!-- text input -->
    <div class="form-group">
      <label>NOME:</label>
      <input type="text" name="nome" class="form-control" placeholder="Enter ..."
        @isset( $empreendimento->nome ) value="{{ $empreendimento->nome }}" @endisset>
    </div>
  </div>

  <div class="col-sm-2">
    <div class="form-group">
      <label>ESTADO:</label>
      <select class="form-control" name="estado_id" style="width: 100%;">
        <option value="" selected >-- SELECIONE -- </option>
          <option value="1">CEARÁ</option>
      </select>
    </div>
  </div>

  <div class="col-sm-2">
    <div class="form-group">
      <label>CIDADE:</label>

      <select class="form-control" name="cidade_id" style="width: 100%;">
        <option value="" selected >-- SELECIONE -- </option>
          <option value="1">FORTALEZA</option>
          <option value="1">CAUCAIA</option>
          <option value="1">RUSSAS</option>
          <option value="1">REDENÇÃO</option>
      </select>

    </div>
  </div>

  <div class="col-sm-2">
    <!-- text input -->
    <div class="form-group">
      <label>DATA APROVAÇÃO:</label>
      <input type="date" name="dt_lancamento" class="form-control" placeholder="Enter ..."
      @isset( $empreendimento->dt_lancamento ) value="{{ $empreendimento->dt_lancamento }}" @endisset>
    </div>
  </div>

  <div class="col-sm-4">
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

  <div class="col-sm-4">
    <div class="form-group">
      <label>URL VÍDEO</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <input type="checkbox"  name="url_video_destaque" >
          </span>
        </div>
        <input type="text" name="url_video" class="form-control" placeholder="Enter ..."
        @isset( $empreendimento->url_video ) value="{{ $empreendimento->url_video }}" @endisset>
      </div>
    </div>
    <!-- /input-group -->
  </div>

  <div class="col-sm-2">
    <!-- text input -->
    <div class="form-group">
      <label>CNPJ:</label>
      <input type="text" name="cnpj" class="form-control" placeholder="Enter ..."
        @isset( $empreendimento->cnpj ) value="{{ $empreendimento->cnpj }}" @endisset>
    </div>
  </div>

  <div class="col-sm-2">
    <!-- text input -->
    <div class="form-group">
      <label>MATRÍCULA:</label>
      <input type="text" name="matricula" class="form-control" placeholder="Enter ..."
      @isset( $empreendimento->matricula ) value="{{ $empreendimento->matricula }}" @endisset>
    </div>
  </div>

  <div class="col-sm-6">
    <!-- textarea -->
    <div class="form-group">
      <label>Texto Destaque</label>
      <textarea class="form-control"  name="texto_destaque" rows="3" placeholder="Enter ...">@isset($empreendimento->texto_destaque){{$empreendimento->texto_destaque}}@endisset</textarea>
    </div>
  </div>

  <div class="col-sm-6">
    <!-- textarea -->
    <div class="form-group">
      <label>Descrição</label>
      <textarea class="form-control"  name="texto_descritivo" rows="3" placeholder="Enter ...">@isset($empreendimento->texto_descritivo){{ $empreendimento->texto_descritivo }}@endisset</textarea>
    </div>
  </div>

</div>
