<header>
    {{-- Qui metto la parte superiore dell'header --}}
    <div class="header-top">
        <ul>
            <li>
                <a href="#">DC POWER VISA</a>
            </li>
            <li>
                <a href="#">ADDITIONAL DC SITES</a>
            </li>
        </ul>
    </div>
    
    {{-- Qui metto la parte inferiore dell'header  --}}
    <div class="header-bottom">
        {{-- logo DC  --}}
        <figure>
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
        </figure>

        {{-- Qui metto la navbar con i relativi link  --}}
        <nav>
            <ul>
                <li>
                    <a href="">CHARACTERS</a>
                </li>
                <li>
                    <a href="{{route('comics')}}">COMICS</a>
                </li>
                <li>
                    <a href="">MOVIES</a>
                </li>
                <li>
                    <a href="">TV</a>
                </li>
                <li>
                    <a href="">GAMES</a>
                </li>
                <li>
                    <a href="">COLLECTIBLES</a>
                </li>
                <li>
                    <a href="">VIDEOS</a>
                </li>
                <li>
                    <a href="">FANS</a>
                </li>
                <li>
                    <a href="">NEWS</a>
                </li>
                <li>
                    <a href="">SHOP</a>
                </li>
            </ul>
        </nav>
    </div>
</header>