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

  {{-- <div class="col-sm-2">
    <div class="form-group">
      <label>ESTADO:</label>
      <select class="form-control" name="estado_id" style="width: 100%;">
        <option value="" selected >-- SELECIONE -- </option>
        @foreach ($estados as $estado)
        <option value="{{ $estado->id }}">{{ $estado->nome  }}</option>
      @endforeach
      </select>
    </div>
  </div> --}}

  <div class="col-sm-3">
    <div class="form-group">
      <label>CIDADE:</label>
      <select class="form-control" name="cidade_id" style="width: 100%;">
        @isset($empreendimento->cidade) <option value="{{ $empreendimento->cidade->id }}">{{ $empreendimento->cidade->nome  }}</option>  @endisset
        @empty($empreendimento->cidade) <option value=" "> -- SELECIONE --</option>  @endempty
        @foreach ($cidades as $cidade)
        <option value="{{ $cidade->id }}">{{ $cidade->nome  }}</option>
      @endforeach
      </select>
    </div>
  </div>

  <div class="col-sm-3">
    <!-- text input -->
    <div class="form-group">
      <label>LANÇAMENTO:</label>
      <input type="date" name="dt_lancamento" class="form-control" placeholder="Enter ..."
      @isset( $empreendimento->dt_lancamento ) value="{{ $empreendimento->dt_lancamento }}" @endisset>
    </div>
  </div>

  <div class="col-sm-6">
    <div class="form-group">
      <label>URL VÍDEO</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fab fa-youtube"></i></span>
        </div>
        <input type="text" name="url_video" class="form-control" placeholder="Enter ..."
        @isset( $empreendimento->url_video ) value="{{ $empreendimento->url_video }}" @endisset>
      </div>
    </div>
    <!-- /input-group -->
  </div>

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
    <div class="form-group">
      <label>Telefone:</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fas fa-phone-alt"></i></span>
        </div>
        <input type="text" name="contato_1" class="form-control" data-inputmask='"mask": "(99) 9999-9999"' data-mask>
      </div>
      <!-- /.input group -->
    </div>
  </div>

  <div class="col-sm-3">
    <div class="form-group">
      <label>Celular :</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fas fa-mobile"></i></span>
        </div>
        <input type="text" name="contato_2"  class="form-control" data-inputmask='"mask": "(99) 9999-9999"' data-mask>
      </div>
      <!-- /.input group -->
    </div>
  </div>

  <div class="col-sm-3">
    <div class="form-group">
      <label>WhatsApp :</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fab fa-whatsapp"></i></span>
        </div>
        <input type="text" name="zap"  class="form-control" data-inputmask='"mask": "(99) 9999-9999"' data-mask>
      </div>
      <!-- /.input group -->
    </div>
  </div>

  <div class="col-sm-3">
    <div class="form-group">
      <label>Email :</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fas fa-at"></i></span>
        </div>
        <input type="text" name="email"  class="form-control" data-inputmask='"mask": "(99) 9999-9999"' data-mask>
      </div>
      <!-- /.input group -->
    </div>
  </div>

  <div class="col-sm-6">
    <!-- textarea -->
    <div class="form-group">
      <label>Descrição</label>
      <textarea class="form-control"  name="texto_descritivo" rows="3" placeholder="Enter ...">@isset($empreendimento->texto_descritivo){{ $empreendimento->texto_descritivo }}@endisset</textarea>
    </div>
  </div>

  <div class="col-sm-6">
    <!-- textarea -->
    <div class="form-group">
      <label>Texto Destaque</label>
      <textarea class="form-control"  name="texto_destaque" rows="3" placeholder="Enter ...">@isset($empreendimento->texto_destaque){{$empreendimento->texto_destaque}}@endisset</textarea>
    </div>
  </div>

  <input type="hidden" name="estado_id" value="{{ $cidade->estado_id}}" >

</div>
