@extends('admin.layouts.app')

@section('content')

<h1 class="admin__title">Логические уроки:</h1>
<div class="admin__content">
  <h1 style="font-weight: 700;">{{ $logical->name }}
    <a href="{{ route('admin.logical.edit', $logical->id) }}" style="margin-left: 10px;"><i class="fa-solid fa-pencil"></i></a>
    <form action="{{ route('admin.logical.delete', $logical->id) }}" method="POST">
      @csrf
      @method('DELETE')
      <button type="submit"><i class="fa-solid fa-trash"></i></button>
    </form>
  </h1>
  <table class="admin__single">
    <tbody>
      <tr>
        <td>ID</td>
        <td>{{ $logical->id }}</td>
      </tr>
      <tr>
        <td>Name</td>
        <td>{{ $logical->name }}</td>
      </tr>
      <tr>
        <td>Text</td>
        <td>{{ $logical->text }}</td>
      </tr>
      <tr>
          <td>Answer</td>
          <td>{{ $logical->answer }}</td>
      </tr>
      <tr>
          <td>points_multiplier</td>
          <td>{{ $logical->points_multiplier }}</td>
      </tr>
    </tbody>
  </table>
</div>


@endsection
