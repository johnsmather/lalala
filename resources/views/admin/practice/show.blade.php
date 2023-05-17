@extends('admin.layouts.app')

@section('content')

<h1 class="admin__title">Практические уроки:</h1>
<div class="admin__content">
  <h1 style="font-weight: 700;">{{ $practice->name }}
    <a href="{{ route('admin.practice.edit', $practice->id) }}" style="margin-left: 10px;"><i class="fa-solid fa-pencil"></i></a>
    <form action="{{ route('admin.practice.delete', $practice->id) }}" method="POST">
      @csrf
      @method('DELETE')
      <button type="submit"><i class="fa-solid fa-trash"></i></button>
    </form>
  </h1>
  <table class="admin__single">
    <tbody>
      <tr>
        <td>ID</td>
        <td>{{ $practice->id }}</td>
      </tr>
      <tr>
        <td>Name</td>
        <td>{{ $practice->name }}</td>
      </tr>
      <tr>
        <td>Action</td>
        <td>{{ $practice->action }}</td>
      </tr>
      <tr>
          <td>Script</td>
          <td>{{ $practice->script }}</td>
      </tr>
    </tbody>
  </table>
</div>


@endsection
