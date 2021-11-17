<header class="mb-5">
    <nav class="navbar navbar-expand-sm navbar-dark">
        {{-- トップページへのリンク --}}
        <a class="navbar-brand" href="/">悩みの壺</a>

        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                {{-- ユーザ登録ページへのリンク --}}
                <li class="nav-item">{!! link_to_route('signup.get', 'ユーザ登録', [], ['class' => 'nav-link']) !!}</li>
                {{-- ログインページへのリンク --}}
                <li class="nav-item"><a href="#" class="nav-link">ログイン</a></li>
            </ul>
        </div>
    </nav>
</header>