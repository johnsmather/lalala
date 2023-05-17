@extends('admin.layouts.app')

@section('content')

<h1 class="admin__title">Теоретические уроки:</h1>
<div class="admin__content">
  <h1 style="font-weight: 700;">{{ $theory->name }}
    <a href="{{ route('admin.theory.edit', $theory->id) }}" style="margin-left: 10px;"><i class="fa-solid fa-pencil"></i></a>
    <form action="{{ route('admin.theory.delete', $theory->id) }}" method="POST">
      @csrf
      @method('DELETE')
      <button type="submit"><i class="fa-solid fa-trash"></i></button>
    </form>
  </h1>
  <table class="admin__single">
    <tbody>
      <tr>
        <td>ID</td>
        <td>{{ $theory->id }}</td>
      </tr>
      <tr>
        <td>Name</td>
        <td>{{ $theory->name }}</td>
      </tr>
      <tr>
        <td>Text</td>
        <td>{{ $theory->text }}</td>
      </tr>
    </tbody>
  </table>
</div>


@endsection