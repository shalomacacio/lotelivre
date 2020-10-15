@include('admin.empreendimentos.alerts')

<div class="row">

  <div class="col-sm-4">
    <!-- text input -->
    <div class="form-group">
      <label>NOME:</label>
      <input type="text" name="nome" class="form-control" placeholder="Enter ..."
        @isset( $empreendimento->nome ) value="{{ $empreendimento->nome }}" @endisset>
    </div>
  </div>

  <div class="col-sm-2">
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

  <div class="col-sm-2">
    <!-- text input -->
    <div class="form-group">
      <label>LANÇAMENTO:</label>
      <input type="date" name="dt_lancamento" class="form-control" placeholder="Enter ..."
      @isset( $empreendimento->dt_lancamento ) value="{{ $empreendimento->dt_lancamento }}" @endisset>
    </div>
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

  <div class="col-sm-4">
    <div class="form-group">
      <label for="exampleInputFile">Banner Principal <span>(1900x700px)</span> </label>
      <div class="input-group">
        <div class="custom-file">
          <input type="file" class="custom-file-input"  name="img_banner">
          <label class="custom-file-label" for="exampleInputFile">Imagem</label>
        </div>
      </div>
    </div>
  </div>

  <div class="col-sm-4">
    <!-- text input -->
    <div class="form-group">
      <label>Texto Banner:</label>
      <input type="text" name="texto_banner" class="form-control" placeholder="Enter ..."
        @isset( $empreendimento->texto_banner ) value="{{ $empreendimento->texto_banner }}" @endisset>
    </div>
  </div>

  <div class="col-sm-4">
    <!-- text input -->
    <div class="form-group">
      <label>Texto Cor:</label>
      <input type="text" name="texto_banner" class="form-control" placeholder="Enter ..."
        @isset( $empreendimento->texto_banner ) value="{{ $empreendimento->texto_banner }}" @endisset>
    </div>
  </div>

  <div class="col-sm-4">
    <!-- text input -->
    <div class="form-group">
      <label>Botão Banner:</label>
      <input type="text" name="btn_banner" class="form-control" placeholder="Enter ..."
        @isset( $empreendimento->btn_banner ) value="{{ $empreendimento->btn_banner }}" @endisset>
    </div>
  </div>

  <div class="col-sm-4">
    <!-- text input -->
    <div class="form-group">
      <label>Botão Link:</label>
      <input type="text" name="btn_link" class="form-control" placeholder="Enter ..."
        @isset( $empreendimento->btn_link ) value="{{ $empreendimento->btn_link }}" @endisset>
    </div>
  </div>

  <div class="col-sm-4">
    <!-- text input -->
    <div class="form-group">
      <label>Botão Cor:</label>
      <input type="text" name="btn_cor" class="form-control" placeholder="Enter ..."
        @isset( $empreendimento->btn_cor ) value="{{ $empreendimento->btn_cor }}" @endisset>
    </div>
  </div>


  <div class="col-sm-4">
    <div class="form-group">
      <label for="exampleInputFile">Img Card 01 <span>(0x0px)</span> </label>
      <div class="input-group">
        <div class="custom-file">
          <input type="file" class="custom-file-input"  name="img_card_1">
          <label class="custom-file-label" for="exampleInputFile">Imagem</label>
        </div>
      </div>
    </div>
  </div>

  <div class="col-sm-4">
    <!-- text input -->
    <div class="form-group">
      <label>Titulo Card 1:</label>
      <input type="text" name="titulo_card1" class="form-control" placeholder="Enter ..."
        @isset( $empreendimento->titulo_card_1 ) value="{{ $empreendimento->titulo_card_1 }}" @endisset>
    </div>
  </div>

  <div class="col-sm-4">
    <!-- text input -->
    <div class="form-group">
      <label>Texto Card 1:</label>
      <input type="text" name="texto_card_1" class="form-control" placeholder="Enter ..."
        @isset( $empreendimento->texto_card_1 ) value="{{ $empreendimento->texto_card_1 }}" @endisset>
    </div>
  </div>

  <div class="col-sm-4">
    <div class="form-group">
      <label for="exampleInputFile">Img Card 02 <span>(0x0px)</span> </label>
      <div class="input-group">
        <div class="custom-file">
          <input type="file" class="custom-file-input"  name="img_card_2">
          <label class="custom-file-label" for="exampleInputFile">Imagem</label>
        </div>
      </div>
    </div>
  </div>

  <div class="col-sm-4">
    <!-- text input -->
    <div class="form-group">
      <label>Titulo Card 2:</label>
      <input type="text" name="titulo_card_2" class="form-control" placeholder="Enter ..."
        @isset( $empreendimento->titulo_card_2 ) value="{{ $empreendimento->titulo_card_2 }}" @endisset>
    </div>
  </div>

  <div class="col-sm-4">
    <!-- text input -->
    <div class="form-group">
      <label>Texto Card 2:</label>
      <input type="text" name="texto_card_2" class="form-control" placeholder="Enter ..."
        @isset( $empreendimento->texto_card_2 ) value="{{ $empreendimento->texto_card_2 }}" @endisset>
    </div>
  </div>

  <div class="col-sm-12">
    <!-- textarea -->
    <div class="form-group">
      <label>Descrição</label>
      <textarea class="textarea" placeholder="Place some text here" name="texto_descritivo"
      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
      @isset($empreendimento->texto_descritivo) {{ $empreendimento->texto_descritivo  }}  @endisset
    </textarea>
    </div>
  </div>

  <input type="hidden" name="estado_id" value="{{ $cidade->estado_id}}" >

</div>
