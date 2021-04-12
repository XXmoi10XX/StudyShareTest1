<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Share Study</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            @guest
            <li class="nav-item">
                <a class="nav-link" href=" {{ route('register')}} ">ユーザー登録</a>
            </li>
            @endguest

            @guest
            <li class="nav-item">
                <a class="nav-link" href=" {{ route('login')}} ">ログイン</a>
            </li>
            @endguest

            @auth
            <li class="nav-item">
                <button form="logout-button" class="dropdown-item" type="submit">
                    ログアウト
                </button>
            </li>


            <form id="logout-button" method="POST" action="{{ route('logout')}}">
                @csrf
            </form>


            @endauth


        </ul>
        <form action="/search" class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" name="query" type="search" placeholder="検索" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">検索</button>
        </form>
    </div>
</nav>