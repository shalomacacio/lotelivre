<table class="table table-condensed">
  <thead>
    <tr>
      <th style="width: 10px">#</th>
      <th>ATIVO</th>
      <th>IMG</th>
      <th>TITULO </th>
      <th>TITULO ATIVO</th>
      <th>SUBTITULO</th>
      <th>SUB TIT ATIVO</th>
      <th>AÇÕES</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($bannerRotativos as $banner)
    <tr>
      <td>{{ $banner->id }}</td>
      <td>{{ $banner->ativo }}</td>
      <td> <img src="{{ url("storage/{$banner->img}") }}" alt="" style="max-width: 100px" >  </td>
      <td>{{ $banner->titulo }}</td>
      <td>{{ $banner->titulo_ativo }}</td>
      <td>{{ $banner->subtitulo }}</td>
      <td>{{ $banner->subtitulo_ativo}}</td>
      <td class="text-right py-0 align-middle">
        <div class="btn-group btn-group-sm">
          <form action="{{ route('banner-rotativos.destroy', $banner->id) }}" method="POST">
              @csrf
              @method('DELETE')
            <a href="{{ route('banner-rotativos.edit', $banner->id) }}" class="btn btn-info"><i class="fas fa-edit"></i></a>
            <button  class="btn btn-danger" onclick="return confirm('Confirma exclusão ?')" ><i class="fas fa-trash"></i></button>
          </form>
        </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
