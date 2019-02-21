@extends('adminframe')
@section('content')
<div class="">
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
        <button type="button" name="button">Delete</button>
      </td>
    </tr>
    @endforeach
  </table>
  {{ $newsitems->links() }}
</div>
@endsection
