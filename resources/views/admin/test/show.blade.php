@extends('admin.layouts.app')

@section('content')

<h1 class="admin__title">Теоретические уроки:</h1>
<div class="admin__content">
  <h1 style="font-weight: 700;">{{ $test->name }}
    <a href="{{ route('admin.test.edit', $test->id) }}" style="margin-left: 10px;"><i class="fa-solid fa-pencil"></i></a>
    <form action="{{ route('admin.test.delete', $test->id) }}" method="POST">
      @csrf
      @method('DELETE')
      <button type="submit"><i class="fa-solid fa-trash"></i></button>
    </form>
  </h1>
  <table class="admin__single">
    <tbody>
      <tr>
        <td>ID</td>
        <td>{{ $test->id }}</td>
      </tr>
      <tr>
        <td>Name</td>
        <td>{{ $test->name }}</td>

      <tr>
          <td>points_multiplier</td>
          <td>{{ $test->points_multiplier }}</td>
      </tr>
    </tbody>
  </table>
</div>


@endsection
