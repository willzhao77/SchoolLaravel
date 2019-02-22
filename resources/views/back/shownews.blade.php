@extends('adminframe')
@section('content')
<div class="">
  <a href="{{ url('back/newscenter/create') }}" class="btn btn-lg btn-primary">Create News</a>
  <table border = "1px">
    <tr>
      <th>Pic</th>
      <th>title</th>
      <th>content</th>
      <th>Modify</th>
    </tr>
    @foreach ($newsitems as $newsitem)
    <tr>
      <td>
        <img src="../{{ $newsitem->imgpath }}" alt="" class="height100">
      </td>
      <td>
        <P>{{ $newsitem->title }}</P>
      </td>
      <td>
        <P>{{ $newsitem->content }}</P>
      </td>
      <td>
        <!-- <input type="button" onclick="location.href='editnews';" value="Edit" /> -->
        <a href="{{ url('back/newscenter/'.$newsitem->id.'/edit') }}" class="btn btn-success">Edit</a>
        <form action="{{ url('back/newscenter/'.$newsitem->id) }}" method="POST" style="display: inline;">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </table>
  {{ $newsitems->links() }}
</div>
@endsection
