@extends('layouts.app')

@section('content')
    @if (Auth::check())
        {{ Auth::user()->name }}
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