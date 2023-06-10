@extends('layout.app')

@section('title')
    Laravel Comics | Home
@endsection

@section('content')
    <main>

        <!-- jumbotron -->
        <section id="jumbotron">

        </section>
        <!-- contents -->
        <section id="contents">
            <div class="container">

                <!-- current series -->
                <div id="cur-series">
                    <span>current series</span>
                </div>

                <!-- series -->
                {{-- <CardComp v-for="(elem, index) in cardsArray" :key="index" :dettagliProdotto="elem" /> --}}

                <!-- load more -->
                <div id="load-more">
                    <span>load more</span>
                </div>

            </div>
        </section>

        <!-- cards -->
        <section id="cards">
            <div class="container">

                <!-- card -->
                @foreach($cards as $card)
                    <div class="dcCard">

                        <!-- img -->
                        <div class="img">
                            <img :src="{{ Vite::asset('resources/img/' . $card['url']) }}" :alt="{{ $card['name']}}">
                        </div>
                        <h3>{{ $card['name'] }}</h3>
                    </div>
                @endforeach
            </div>
        </section>
    </main>
@endsection