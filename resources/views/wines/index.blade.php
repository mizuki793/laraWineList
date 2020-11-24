@extends('layout')

@section('content')
<div class="container">
    <h1>一覧</h1>
    <button type="button" class="btn btn-primary" onclick="location.href='{{ route('wines.create') }}'">
                        追加
    </button>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th> 名前 |</th>
                    <th> 種類 |</th>
                    <th> 味 |</th>
                    <th> 料理 |</th>
                    <th> 料理との相性 |</th>
                    <th> メッセージ |</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($wines as $wine)
                    <tr>
                        <td><a href="{{ route('wine.edit'.$wine->id) }}">{{ $wine->name }}</a></td>
                        <td>{{ $wine->category }}</td>
                        <td>{{ $wine->taste }}</td>
                        <td>{{ $wine->food }}</td>
                        <td>{{ $wine->food_matchPt }}</td>
                        <td>{{ $wine->message }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection