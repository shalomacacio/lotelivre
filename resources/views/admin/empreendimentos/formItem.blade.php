
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
      <label for="exampleInputFile">Icone<span>(65x65px)</span> </label>
      <div class="input-group">
        <div class="custom-file">
          <input type="file" class="custom-file-input"  name="img">
          <label class="custom-file-label" for="exampleInputFile">Imagem</label>
        </div>
      </div>
    </div>
  </div>

  <div class="col-sm-12">
    <!-- text input -->
    <div class="form-group">
      <label>Titulo:</label>
      <input type="text" name="titulo" class="form-control" placeholder="Enter ..."
        @isset( $empreendimentoItens->titulo ) value="{{ $empreendimentoItens->titulo  }}" @endisset>
    </div>
  </div>

  <div class="col-sm-12">
    <!-- text input -->
    <div class="form-group">
      <label>Descrição:</label>
      <textarea name="descricao" class="form-control">
        @isset( $empreendimentoItens->descricao) value="{{ $empreendimentoItens->descricao}}" @endisset
      </textarea>
    </div>
  </div>

</div>
