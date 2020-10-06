<table class="table table-condensed">
  <thead>
    <tr>
      <th style="width: 10px">#</th>
      <th>URL</th>
      <th>AÇÕES</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($bannerVideos as $video)
    <tr>
      <td>{{ $video->id }}</td>
      <td>{{ $video->url }}</td>
      <td class="text-right py-0 align-middle">
        <div class="btn-group btn-group-sm">
          <form action="{{ route('banner-videos.destroy', $video->id) }}" method="POST">
              @csrf
              @method('DELETE')
            <a href="{{ route('banner-videos.edit', $video->id) }}" class="btn btn-info"><i class="fas fa-edit"></i></a>
            <button  class="btn btn-danger" onclick="return confirm('Confirma exclusão ?')" ><i class="fas fa-trash"></i></button>
          </form>
        </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
