@extends('admin.layouts.app')

@section('content')

<h1 class="admin__title">Завершенный урок:</h1>
<div class="admin__content">
    <h1 style="font-weight: 700;">{{ $testTasks->name }}</h1>
    <a href="{{ route('admin.testTasks.edit', $testTasks->id) }}" style="margin-left: 10px;"><i class="fa-solid fa-pencil"></i></a>
    <form action="{{ route('admin.testTasks.delete', $testTasks->id) }}" method="POST">
      @csrf
      @method('DELETE')
      <button type="submit"><i class="fa-solid fa-trash"></i></button>
    </form>
  </h1>
  <table class="admin__single">
    <tbody>
      <tr>
        <td>ID</td>
        <td>{{ $testTasks->id }}</td>
      </tr>
      <tr>
        <td>Test ID</td>
        <td>{{ $testTasks->test_id }}</td>
      </tr>
      <tr>
      @if($testTasks->img == 0)
          <tr>
              <td>Name</td>
              <td>{{ $testTasks->name }}</td>
          </tr>
          <tr>
              <td>Correct</td>
              <td>{{ $testTasks->correct }}</td>
          </tr>
          <tr>
              <td>Answer 1</td>
              <td>{{ $testTasks->answer_1 }}</td>
          </tr>
          <tr>
              <td>Answer 2</td>
              <td>{{ $testTasks->answer_2 }}</td>
          </tr>
          <tr>
              <td>Answer 3</td>
              <td>{{ $testTasks->answer_3 }}</td>
          </tr>
          <tr>
              <td>Answer 4</td>
              <td>{{ $testTasks->answer_4 }}</td>
          </tr>
      @else
          <tr>
              <td>Correct</td>
              <td>{{ $testTasks->correct }}</td>
          </tr>
          <tr>
              <td>Name</td>
              <td><img src="{{ asset('storage/' . $testTasks->name) }}"></td>
          </tr>
          <tr>
              <td>Answer 1</td>
              <td><img src="{{ asset('storage/' . $testTasks->answer_1) }}"></td>
          </tr>
          <tr>
              <td>Answer 2</td>
              <td><img src="{{ asset('storage/' . $testTasks->answer_2) }}"></td>
          </tr>
          <tr>
              <td>Answer 3</td>
              <td><img src="{{ asset('storage/' . $testTasks->answer_3) }}"></td>
          </tr>
          <tr>
              <td>Answer 4</td>
              <td><img src="{{ asset('storage/' . $testTasks->answer_4) }}"></td>
          </tr>

      @endif
    </tbody>
  </table>
</div>


@endsection
