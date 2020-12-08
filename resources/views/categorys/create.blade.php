@extends('layout')

@section('content')
<div class="container">
    <h1>種類追加ページ</h1>
    <button type="button" class="btn btn-primary" onclick="location.href='{{ route('wines.index') }}'">
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

    <form action="{{ route('categorys.index')}}" method="POST">
        @csrf

        <div class="form-group" style="margin: 10pt;">
            <label>名前:</label>
            <input type="text" name="name" class="form-control">
        </div>

        <input type="submit" value="登録" class="btn btn-primary">
    </form>
@endsection

<div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col"> 名前 </th>
                    <th scope="col">削除</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categorys as $cate)
                    <tr>
                        <td>{{ $cate->name }}</td>
                        <td>
                            <form action="{{ route('categorys.destroy',$cate->cid)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="削除">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>