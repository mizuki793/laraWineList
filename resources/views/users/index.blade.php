@extends('layout')

@section('content')
<div class="container">
    <h1>閲覧user一覧</h1>
    <button type="button" class="btn btn-primary" onclick="location.href='{{ route('users.create') }}'">
                        閲覧user追加
    </button>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col"> id </th>
                    <th scope="col"> 名前 </th>
                    <th scope="col"> email </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users ?? '' as $user)
                    <tr>
                        <td><a href="{{ route('users.edit' ,$user->id) }}">{{ $user->id }}</a></td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection