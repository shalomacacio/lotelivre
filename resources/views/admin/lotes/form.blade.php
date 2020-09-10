@include('admin.lotes.alerts')

<div class="row">

  <div class="col-sm-6">
    <div class="form-group">
      <label>RAZÃO SOCIAL:</label>
      <select class="form-control" name="empreendimento_id" style="width: 100%;">
        <option value="" selected >-- SELECIONE -- </option>
        @foreach ($empreendimentos as $empreendimento)
          <option value="{{ $empreendimento->id }}">{{ $empreendimento->nome  }}</option>
        @endforeach
      </select>
    </div>
  </div>

  <div class="col-sm-3">
    <!-- text input -->
    <div class="form-group">
      <label>QUADRA:</label>
      <input type="text" name="quadra" class="form-control" placeholder="Enter ..."
        @isset( $lote->quadra ) value="{{ $lote->quadra }}" @endisset>
    </div>
  </div>

  <div class="col-sm-3">
    <!-- text input -->
    <div class="form-group">
      <label>LOTE:</label>
      <input type="text" name="lote" class="form-control" placeholder="Enter ..."
      @isset( $lote->lote ) value="{{ $lote->lote }}" @endisset>
    </div>
  </div>
</div>

<div class="row">

  <div class="col-sm-3">
    <!-- text input -->
    <div class="form-group">
      <label>ÁREA:</label>
      <input type="text" name="area" class="form-control" placeholder="Enter ..."
      @isset( $lote->frente ) value="{{ $lote->frente }}" @endisset>
    </div>
  </div>

  <div class="col-sm-3">
    <!-- text input -->
    <div class="form-group">
      <label>VALOR:</label>
      <input type="text" name="valor" class="form-control" placeholder="Enter ..."
      @isset( $lote->valor ) value="{{ $lote->valor }}" @endisset>
    </div>
  </div>

  <div class="col-sm-3">
    <!-- text input -->
    <div class="form-group">
      <label>RGI (Idividualn):</label>
      <input type="text" name="rgi_individual" class="form-control" placeholder="Enter ..."
      @isset( $lote->rgi_individual ) value="{{ $lote->rgi_individual }}" @endisset>
    </div>
  </div>

  <div class="col-sm-3">
    <div class="form-group">
      <label>TIPO IMÓVEL:</label>
      <select class="form-control" name="tipo_imovel" style="width: 100%;">
        <option value="">-- SELECIONE -- </option>
      </select>
    </div>
  </div>

</div>

<div class="row">
  <div class="col-sm-3">
    <!-- text input -->
    <div class="form-group">
      <label>FRENTE:</label>
      <input type="text" name="frente" class="form-control" placeholder="Enter ..."
      @isset( $lote->frente ) value="{{ $lote->frente }}" @endisset>
    </div>
  </div>

  <div class="col-sm-3">
    <!-- text input -->
    <div class="form-group">
      <label>FUNDO:</label>
      <input type="text" name="fundo" class="form-control" placeholder="Enter ..."
      @isset( $lote->fundo ) value="{{ $lote->fundo }}" @endisset>
    </div>
  </div>

  <div class="col-sm-3">
    <!-- text input -->
    <div class="form-group">
      <label>DIREITA:</label>
      <input type="text" name="diretia" class="form-control" placeholder="Enter ..."
      @isset( $lote->direita ) value="{{ $lote->direita }}" @endisset>
    </div>
  </div>

  <div class="col-sm-3">
    <!-- text input -->
    <div class="form-group">
      <label>ESQUERDA:</label>
      <input type="text" name="esquerda" class="form-control" placeholder="Enter ..."
      @isset( $lote->esquerda ) value="{{ $lote->esquerda }}" @endisset>
    </div>
  </div>

</div>



<div class="row">
  <div class="col-sm-3">
    <!-- text input -->
    <div class="form-group">
      <label>FRENTE COM:</label>
      <input type="text" name="frente_com" class="form-control" placeholder="Enter ..."
      @isset( $lote->frente ) value="{{ $lote->frente }}" @endisset>
    </div>
  </div>

  <div class="col-sm-3">
    <!-- text input -->
    <div class="form-group">
      <label>FUNDO COM:</label>
      <input type="text" name="fundo_com" class="form-control" placeholder="Enter ..."
      @isset( $lote->fundo ) value="{{ $lote->fundo }}" @endisset>
    </div>
  </div>

  <div class="col-sm-3">
    <!-- text input -->
    <div class="form-group">
      <label>DIREITA COM:</label>
      <input type="text" name="direita_com" class="form-control" placeholder="Enter ..."
      @isset( $lote->direita ) value="{{ $lote->direita }}" @endisset>
    </div>
  </div>

  <div class="col-sm-3">
    <!-- text input -->
    <div class="form-group">
      <label>ESQUERDA COM:</label>
      <input type="text" name="esquerda_com" class="form-control" placeholder="Enter ..."
      @isset( $lote->esquerda ) value="{{ $lote->esquerda }}" @endisset>
    </div>
  </div>

</div>

<div class="row">
  <div class="col-sm-6">
    <div class="form-group">
      <label>DESCRIÇÃO</label>
      <textarea class="form-control" rows="3" name="descricao" placeholder="Enter ..."></textarea>
    </div>
  </div>

  <div class="col-sm-6">
    <div class="form-group">
      <label>OBSERVAÇÃO</label>
      <textarea class="form-control" rows="3" name="obs" placeholder="Enter ..."></textarea>
    </div>
  </div>

</div>
