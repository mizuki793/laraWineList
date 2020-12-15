@extends('layout')

@section('content')
<div class="container">
    <h1>User編集</h1>
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
    <form action="{{ route('users.update', $old->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group" style="margin: 10pt;">
            <label>名前:</label>
            <input type="text" name="name" value="{{ $old->name }}" class="form-control">
        </div>

        <div class="form-group" style="margin: 10pt;">
            <label>email:</label>
            <input type="text" name="email"  value="{{ $old->email }}"class="form-control">
        </div>

        <input type="submit" value="更新" class="btn btn-primary">
    </form>
@endsection