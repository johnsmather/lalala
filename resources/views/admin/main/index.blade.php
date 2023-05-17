@extends('admin.layouts.app')

@section('content')

    <ul class="admin__stats">
        <li>
            <h1>Пользователей</h1>
            <h2>{{ count($users) }}</h2>
        </li>
    </ul>

@endsection
