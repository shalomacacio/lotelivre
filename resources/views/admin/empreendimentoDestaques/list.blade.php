<table class="table table-condensed">
  <thead>
    <tr>
      <th style="width: 10px">#</th>
      <th>EMPREENDIMENTOS</th>
      <th>CNPJ</th>
      <th>MATRÍCULA</th>
      <th>AÇÕES</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($empreendimentoDestaques as $empreendimento)
    <tr>
      <td>{{ $empreendimento->id }}</td>
      <td class="text-right py-0 align-middle">
        <div class="btn-group btn-group-sm">
          <a href="{{ route('empreendimento-destaques.edit', $empreendimento->id) }}" class="btn btn-info"><i class="fas fa-edit"></i></a>
          <a href="{{ route('empreendimento-destaques.destroy', $empreendimento->id) }}" class="btn btn-danger" onclick="return confirm('Confirma exclusão ?')" ><i class="fas fa-trash"></i></a>
        </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
