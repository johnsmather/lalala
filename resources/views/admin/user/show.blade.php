@extends('admin.layouts.app')

@section('content')

<h1 class="admin__title">Завершенный урок:</h1>
<div class="admin__content">
    <h1 style="font-weight: 700;">{{ $user->name }}</h1>
    <a href="{{ route('admin.user.edit', $user->id) }}" style="margin-left: 10px;"><i class="fa-solid fa-pencil"></i></a>
    <form action="{{ route('admin.user.delete', $user->id) }}" method="POST">
      @csrf
      @method('DELETE')
      <button type="submit"><i class="fa-solid fa-trash"></i></button>
    </form>
  </h1>
  <table class="admin__single">
    <tbody>
      <tr>
        <td>ID</td>
        <td>{{ $user->id }}</td>
      </tr>
      <tr>
          <td>Name</td>
          <td>{{ $user->name }}</td>
      </tr>
      <tr>
          <td>Email</td>
          <td>{{ $user->email }}</td>
      </tr>
    </tbody>
  </table>
</div>


@endsection
