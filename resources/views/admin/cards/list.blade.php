<table class="table table-condensed">
  <thead>
    <tr>
      <th style="width: 10px">#</th>
      <th>ATIVO</th>
      <th>IMG</th>
      <th>TITULO </th>
      <th>SUBTITULO</th>
      <th>AÇÕES</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($cards as $card)
    <tr>
      <td>{{ $card->id }}</td>
      <td>{{ $card->ativo }}</td>
      <td> <img src="{{ url("storage/{$card->img}") }}" alt="" style="max-width: 100px" >  </td>
      <td>{{ $card->titulo }}</td>
      <td>{{ $card->subtitulo }}</td>
      <td class="text-right py-0 align-middle">
        <div class="btn-group btn-group-sm">
          <form action="{{ route('cards.destroy', $card->id) }}" method="POST">
              @csrf
              @method('DELETE')
            <a href="{{ route('cards.edit', $card->id) }}" class="btn btn-info"><i class="fas fa-edit"></i></a>
            <button  class="btn btn-danger" onclick="return confirm('Confirma exclusão ?')" ><i class="fas fa-trash"></i></button>
          </form>
        </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
