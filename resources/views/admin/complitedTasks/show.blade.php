@extends('admin.layouts.app')

@section('content')

<h1 class="admin__title">Завершенный урок:</h1>
<div class="admin__content">
  <h1 style="font-weight: 700;">{{ $complitedTasks->name }}
    <a href="{{ route('admin.ComplitedTasks.edit', $complitedTasks->id) }}" style="margin-left: 10px;"><i class="fa-solid fa-pencil"></i></a>
    <form action="{{ route('admin.ComplitedTasks.delete', $complitedTasks->id) }}" method="POST">
      @csrf
      @method('DELETE')
      <button type="submit"><i class="fa-solid fa-trash"></i></button>
    </form>
  </h1>
  <table class="admin__single">
    <tbody>
      <tr>
        <td>ID</td>
        <td>{{ $complitedTasks->id }}</td>
      </tr>
      <tr>
        <td>Test ID</td>
        <td>{{ $complitedTasks->test_id }}</td>
      </tr>
      <tr>
        <td>User ID</td>
        <td>{{ $complitedTasks->user_id }}</td>
      </tr>
      <tr>
          <td>Name</td>
          <td>{{ $complitedTasks->name }}</td>
      </tr>
      <tr>
          <td>Category</td>
          <td>{{ $complitedTasks->category }}</td>
      </tr>
      <tr>
          <td>Correct</td>
          <td>{{ $complitedTasks->correct_count }}</td>
      </tr>
      <tr>
          <td>Points</td>
          <td>{{ $complitedTasks->points }}</td>
      </tr>
      <tr>
          <td>Time</td>
          <td>{{ $complitedTasks->time }}</td>
      </tr>
    </tbody>
  </table>
</div>


@endsection
