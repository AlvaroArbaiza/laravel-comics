<header>
    <div class="container">

        <!-- logo -->
        <div id="logo">
            <a href="{{ route('home') }}">
                <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="logo dc comics">
            </a>
        </div>

        {{-- navbar --}}
        <nav>
            <ul>
                @foreach($comics[0]['links'] as $link)
                    <li>
                        <a href="#">                        
                            <span>{{ $link['name'] }}</span>
                            <hr>
                        </a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>