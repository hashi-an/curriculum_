@extends('layouts.app')

@section('title', 'つぶやき一覧')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <form class="card" style="width: 35rem;" action="{{ action('PostController@create') }}" method="post" enctype="multipart/form-data">

                    <!-- バリデーション表示 -->
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif

                    <div class="card-header">ホーム</div>
                    <div class="p-3">
                        <input class="form-control" name="body" value="{{ old('body') }}" placeholder="今どうしてる？">
                    </div>
                    {{ csrf_field() }}
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <div class="p-3">
                        <input type="submit" class="btn btn-light float-right" value="つぶやく">
                    </div>
                </form>
                <!-- 一覧ここから -->
                <div>
                    @foreach($posts as $post)
                        @foreach($users as $user)
                            <!-- 「もしつぶやきのuser_idが、userテーブルのidと同じなら」一覧に表示する -->
                            @if($post->user_id == $user->id)
                            <div class="card p-3" style="width: 35rem;" >
                                <div>{{ $user->name }}</div>
                                <div class="text-right">{{ $post->created_at }}</div>
                                <div>{{ $post->body }}</div>
                                <!-- 「もしつぶやきのuser_idが、ログイン中のユーザーのidと同じなら」削除リンクを表示する -->
                                @if($post -> user_id == Auth::user()->id )
                                    <div class="text-right"><a href="{{ action('PostController@delete', ['id' => $post->id]) }}" class="text-danger">削除</a></div>
                                @endif
                            </div>
                            @endif
                        @endforeach
                    @endforeach
                </div>
                <!-- 一覧ここまで -->
            </div>
        </div>
    </div>
@endsection