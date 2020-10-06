@include('admin.bannerRotativos.alerts')

<div class="row">

  <div class="col-sm-2">
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

  <div class="col-sm-3">
    <!-- text input -->
    <div class="form-group">
      <label>URL:</label>
      <input type="text" name="url" class="form-control" placeholder="Enter ..."
        @isset( $video->url) value="{{ $video->url }}" @endisset>
    </div>
  </div>

</div>
