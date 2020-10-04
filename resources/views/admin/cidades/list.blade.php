<table class="table table-condensed">
  <thead>
    <tr>
      <th>Estado</th>
      <th>Cidade</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($cidades as $cidade)
    <tr>
      <td>{{ $cidade->estado->nome }}</td>
      <td>{{ $cidade->nome }}</td>

      <td class="text-right py-0 align-middle">
        <div class="btn-group btn-group-sm">
          <a href="{{ route('cidades.edit', $cidade->id) }}" class="btn btn-info"><i class="fas fa-edit"></i></a>
          <a href="{{ route('cidades.destroy', $cidade->id) }}" class="btn btn-danger" onclick="return confirm('Confirma exclusão ?')" ><i class="fas fa-trash"></i></a>
        </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
