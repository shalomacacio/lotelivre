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

  <div class="col-sm-4">
    <!-- text input -->
    <div class="form-group">
      <label>NOME:</label>
      <input type="text" name="nome" class="form-control" placeholder="Enter ..."
        @isset( $empreendimento->nome ) value="{{ $empreendimento->nome }}" @endisset>
    </div>
  </div>





</div>
