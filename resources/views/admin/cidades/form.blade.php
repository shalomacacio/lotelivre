@include('admin.lotes.alerts')

<div class="row">

  <div class="col-sm-3">
    <div class="form-group">
      <label>Estado:</label>
      <select class="form-control" name="estado_id" style="width: 100%;">
        <option value="" selected >-- SELECIONE -- </option>
        @foreach ($estados as $estado)
          <option value="{{ $estado->id }}">{{ $estado->nome  }}</option>
        @endforeach
      </select>
    </div>
  </div>

  <div class="col-sm-3">
    <!-- text input -->
    <div class="form-group">
      <label>Cidade:</label>
      <input type="text" name="nome" class="form-control" placeholder="Enter ..."
        @isset( $cidade->nome ) value="{{ $cidade->nome }}" @endisset>
    </div>
  </div>

</div>
