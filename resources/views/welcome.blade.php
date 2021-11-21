@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <div class="row">
            <aside class="col-sm-4 mb-2">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ Auth::user()->name }}</h3>
                    </div>
                    <div class="card-body">
                        {{-- 認証済みユーザのメールアドレスをもとにGravatarを取得して表示 --}}
                        <img class="rounded img-fluid" src="{{ Gravatar::get(Auth::user()->email, ['size' => 500]) }}" alt="">
                    </div>
                </div>
            </aside>
            <div class="col-sm-8">
                {{-- 投稿フォーム --}}
                @include('microposts.form')
                {{-- 投稿一覧 --}}
                @include('microposts.microposts')
            </div>
    </div>
    @else
    <div class="center top_icatch">
        <div class="text-center">
            <h1 class="top_icatch_title"><em>悩</em>み</em>は<br class="hidden_pc"><em>壺</em>に<em>吐</em>き出せ！</h1>
            <div class="top_icatch_image"><img src="image/vase.png" alt="壺"></div>
            {{-- ユーザ登録ページへのリンク --}}
            {!! link_to_route('signup.get', 'はじめる', [], ['class' => 'btn btn-main']) !!}
        </div>
    </div>
    @endif
@endsection