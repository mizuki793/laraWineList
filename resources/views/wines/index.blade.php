@extends('layout')

@section('content')
<div class="container">
    <h1>一覧</h1>
    <button type="button" class="btn btn-primary" onclick="location.href='{{ route('wines.create') }}'">
                        追加
    </button>
    <button type="button" class="btn btn-primary" onclick="location.href='{{ route('categorys.create') }}'">
                        種類追加
    </button>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col"> 名前 </th>
                    <th scope="col"> 種類 </th>
                    <th scope="col"> 味 </th>
                    <th scope="col"> 料理 </th>
                    <th scope="col"> 相性 </th>
                    <th scope="col"> メッセージ </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($wines as $wine)
                    <tr>
                        <td><a href="{{ route('wines.edit',$wine->id) }}">{{ $wine->name }}</a></td>
                        @foreach($categorys as $cate)
                            @if($cate->cid  === $wine->category)
                                <td>{{ $cate->name}}</td>
                            @endif
                        @endforeach
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