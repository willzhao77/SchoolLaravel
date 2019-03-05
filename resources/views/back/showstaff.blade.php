@extends('adminframe')
@section('content')
<div class="">
  <a href="{{ url('back/staff/create') }}" class="btn btn-lg btn-primary">Create Staff</a>
  <table border = "1px">
    <tr>
      <th>Pic</th>
      <th>Name</th>
      <th>title</th>
      <th>Type</th>
      <th>Modify</th>
    </tr>
    @foreach ($staffitems as $staffitem)
    <tr>
      <td>
        <img src="../{{ $staffitem->imgpath }}" alt="" class="height100">
      </td>
      <td>
        <P>{{ $staffitem->name }}</P>
      </td>
      <td>
        <P>{{ $staffitem->title }}</P>
      </td>
      <td>
        <P>{{ $staffitem->type }}</P>
      </td>
      <td>
        <!-- <input type="button" onclick="location.href='editnews';" value="Edit" /> -->
        <a href="{{ url('back/staff/'.$staffitem->id.'/edit') }}" class="btn btn-success">Edit</a>
        <form action="{{ url('back/staff/'.$staffitem->id) }}" method="POST" style="display: inline;">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </table>
  {{ $staffitems->links() }}
</div>
@endsection
