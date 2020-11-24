@extends('layout')

@section('content')
<div class="container">
    <h1>新規作成</h1>
    <button type="button" class="btn btn-primary" onclick="location.href='{{ route('wines.index') }}'">
                        追加
    </button>
</div>
    @if($errors->any())
    <ul>
        @foreach($errors->all as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif

    <form action="{{ route('wines.index')}}" method="POST">
        @csrf
        <div class="form-group">
            <label>名前</label>
            <input type="text" name="name" value="{{old('name')}}" class="form-control">
        </div>
        <div class="form-group">
            <label>種類</label>
        </div>
        <div class="form-group">
            <label>味</label>
            <input type="text" name="taste" value="{{old('taste')}}" class="form-control">
        </div>
        <div class="form-group">
            <label>合う料理</label>
            <input type="text" name="food" value="{{old('name')}}" class="form-control">
        </div>
        <div class="form-group">
            <label>料理との相性</label>
            <select name="food_matchPt" value="{{old('food_matchPt')}}">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <div class="form-group">
            <label>メッセージ</label>
            <input type="text" name="message" value="{{old('name')}}" class="form-control">
        </div>
        <input type="submit" value="登録" class="btn btn-primary">
    </form>
@endsection