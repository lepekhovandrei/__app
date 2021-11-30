<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>1231321</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    </head>
    <body>
        {{-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home 1</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
      </div> --}}

      <header>
        <div class="header">
          <div class="search_login">Поиск</div>
          <nav>
            <div data-menu-item>
              <a href="#">Фильмы</a>
              <ul>
                <li><a href="#">ТОП ФИЛЬМЫ</a></li>
              </ul>
            </div>
            <div data-menu-item>
              <a href="#">Сериалы</a>
              <ul>
                <li><a href="#">ТОП СЕРИАЛЫ</a></li>
              </ul>
            </div>
            <div data-menu-item>
              <a href="#">Мультфильмы</a>
              <ul>
                <li><a href="#">ТОП МУЛЬТФИЛЬМЫ</a></li>
              </ul>
            </div>
            <div data-menu-item>
              <a href="#">ТВ ШОУ</a>
            </div>
          </nav>
          <div class="logo">
            2<span>KINO</span>
          </div>
        </div>
      </header>


      <div class="player">
        <div id="kinoplayertop" data-kinopoisk="896631"></div>
      </div>


      <script src="//kinoplayer.top/top.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script src="{{ asset('/js/app.js') }}"></script>
    </body>

</html>
