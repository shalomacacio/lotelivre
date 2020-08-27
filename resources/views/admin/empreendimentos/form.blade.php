@include('admin.empreendimentos.alerts')

<div class="row">
  <div class="col-sm-6">
    <!-- text input -->
    <div class="form-group">
      <label>NOME FANTASIA:</label>
      <input type="text" name="nome_fantasia" class="form-control" placeholder="Enter ..."
        @isset( $empreendimento->nome_fantasia ) value="{{ $empreendimento->nome_fantasia }}" @endisset>
    </div>
  </div>
  <div class="col-sm-6">
    <!-- text input -->
    <div class="form-group">
      <label>RAZÃO SOCIAL:</label>
      <input type="text" name="razao_social" class="form-control" placeholder="Enter ..."
        @isset( $empreendimento->razao_social ) value="{{ $empreendimento->razao_social }}" @endisset>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-3">
    <!-- text input -->
    <div class="form-group">
      <label>CNPJ:</label>
      <input type="text" name="cnpj" class="form-control" placeholder="Enter ..."
        @isset( $empreendimento->cnpj ) value="{{ $empreendimento->cnpj }}" @endisset>
    </div>
  </div>

  <div class="col-sm-3">
    <!-- text input -->
    <div class="form-group">
      <label>MATRÍCULA:</label>
      <input type="text" name="matricula" class="form-control" placeholder="Enter ..."
      @isset( $empreendimento->matricula ) value="{{ $empreendimento->matricula }}" @endisset>
    </div>
  </div>

  <div class="col-sm-3">
    <!-- text input -->
    <div class="form-group">
      <label>CARTÓRIO:</label>
      <input type="text" name="cartorio" class="form-control" placeholder="Enter ..."
      @isset( $empreendimento->cartorio ) value="{{ $empreendimento->cartorio }}" @endisset>
    </div>
  </div>

  <div class="col-sm-3">
    <!-- text input -->
    <div class="form-group">
      <label>DATA APROVAÇÃO:</label>
      <input type="date" name="dt_aprovacao" class="form-control" placeholder="Enter ..."
      @isset( $empreendimento->dt_aprovacao ) value="{{ $empreendimento->dt_aprovacao }}" @endisset>
    </div>
  </div>
</div>
