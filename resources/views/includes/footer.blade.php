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