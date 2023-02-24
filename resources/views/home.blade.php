<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Comics</title>

    @vite('resources/js/app.js')

</head>
<body>
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
                        <a href="">COMICS</a>
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

    {{-- Qui metto il Jumbotron  --}}
    <section id="jumbotron">
        <button class="current-series">
            <strong>CURRENT SERIES</strong> 
        </button>
    </section>

    {{-- Qui metto il main con tutti i fumetti  --}}
    <main>
        <div class="card-container">
            {{-- Qui ciclo in tutte le card  --}}
            @foreach ($cards as $card)
                <div class="card">
                    <div class="comic-card">
                        <img src="{{ $card['thumb'] }}" :alt="card.series">
                        <h4>{{ $card['series'] }} </h4>
                    </div>
                </div>
            @endforeach 
            
            <button class="btn-blue">Load more</button>
        </div>
    </main>


    {{-- Qui metto la sezione dedicata allo shop  --}}
    <section id="shop">
        <ul>
            <li>
                <img href="#" src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                <span> <a href="#"> Digital Comics</a> </span>
            </li>

            <li>
                <img href="#" src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">
                <span> <a href="#"> DC Merchandise</a> </span>
            </li>

            <li>
                <img href="#" src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">
                <span> <a href="#"> Subscription</a> </span>
            </li>

            <li>
                <img href="#" src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="">
                <span> <a href="#"> Comic Shop locator</a> </span>
            </li>

            <li>
                <img href="#" src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="">
                <span> <a href="#"> Dc Power Visa</a> </span>
            </li>
        </ul>
    </section>

    <footer>
        <div class="container">

            <nav>
            <!-- lista di Dc comics  -->
                <div class="dc-comics">
                    <ul>
                        <h2>
                            DC COMICS
                        </h2>
                        @foreach ($dc_comics as $dc_comic)
                        <li>
                            <a href="">{{ $dc_comic['text'] }} </a>
                        </li>
                        @endforeach
                    </ul>
            
                    {{-- Lista dello shop  --}}
                    <ul>
                        <h2>
                            SHOP
                        </h2>
                        <li>
                            <a href="#"> Shop dc  </a>
                        </li>
                        <li>
                            <a href="#"> Shop dc Collectibles </a>
                        </li>
                    </ul>
                </div>

                {{-- lista dei terms  --}}
                <div class="dc-terms">
                    <ul>
                        <h2>
                            DC
                        </h2>
                        @foreach ($terms as $term)
                        <li>
                            <a href="#"> {{ $term }} </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
    
                {{-- lista dei siti  --}}
                <div class="sites">
                    <ul>
                        <h2>
                            SITES
                        </h2>
                        @foreach ($sites as $site)
                            <li v-for="Site in Sites">
                                <a href="#"> {{ $site }} </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </nav>

            <figure>
                <img class="big-logo" src="{{ Vite::asset('resources/img/dc-logo-bg.png')}}" alt="">
            </figure>
        </div>
    </footer>

</body>
</html>