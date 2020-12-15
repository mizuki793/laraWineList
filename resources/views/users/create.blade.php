@extends('layout')

@section('content')
<div class="container">
    <h1>user新規作成</h1>
    <button type="button" class="btn btn-primary" onclick="location.href='{{ route('users.index') }}'">
                    ←一覧に戻る
    </button>
</div>
    @if($errors->any())
    <ul>
        @foreach($errors->all as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif

    <form action="{{ route('users.index')}}" method="POST">
        @csrf

        <div class="form-group" style="margin: 10pt;">
            <label>名前:</label>
            <input type="text" name="name" class="form-control">
        </div>

        <div class="form-group" style="margin: 10pt;">
            <label>email:</label>
            <input type="text" name="email" class="form-control">
        </div>

        <input type="submit" value="登録" class="btn btn-primary">
    </form>
@endsection