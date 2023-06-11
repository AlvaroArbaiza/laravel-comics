@extends('layout.app')

{{-- Head | title --}}
@section('title')
    Laravel Comics | Comic
@endsection

{{-- Main Content --}}
@section('content')

    <main>
        {{-- bg-blue --}}
        <div class="bg-blue position-relative">
            <div class="container">
                <div class="img position-absolute">
                    <img src="{{ $currentComic['thumb'] }}" alt="{{ $currentComic['title'] }}">
                </div>
            </div>
        </div>

        {{-- comic --}}
        <section class="comic container d-flex">

            {{-- comicbook --}}
            <div class="comicbook d-flex flex-column pe-5">

                {{-- title --}}
                <h4 class="text-uppercase fw-bold">{{ $currentComic['title'] }}</h4>
    
                {{-- info --}}
                <div class="info d-flex mb-2">
    
                    {{-- price --}}
                    <div class="price d-flex justify-content-between border-bottom border-end border-black py-2 px-3 fw-bold">
                        <span class="left text-white-50">
                            U.S. Price:
                            <span class="text-white">
                                {{ $currentComic['price'] }}
                            </span>
                        </span>
    
                        <span class="text-uppercase right text-white-50">
                            available
                        </span>
                        
                    </div>
                    
                    {{-- availability --}}
                    <div class="available border-bottom border-black py-2 px-3 text-center text-white fw-bold">
                        <span>
                            Check Availability
                            <i class="bi bi-caret-down-fill align-middle"></i>
                        </span>
                    </div>
                </div>

                {{-- description --}}
                <div class="description">
                    <p>
                        {{ $currentComic['description'] }}
                    </p>
                </div>
            </div>

            {{-- advertisign --}}
            <div class="advert d-flex flex-column">

                {{-- title --}}
                <span class="text-uppercase text-end fw-bold mb-1">
                    advertisement
                </span>

                {{-- img --}}
                <img src="https://i.pinimg.com/originals/d8/61/0e/d8610e3372fc1173de56a8a3d6abd85f.jpg" alt="advertising">

            </div>
        </section>

        {{-- details --}}
        <section class="details py-4">
            <div class="container d-flex">

                {{-- talent --}}
                <div class="talent w-50 d-flex flex-column pe-5">

                    {{-- title --}}
                    <h5 class="fw-bold mb-4">Talent</h5>

                    {{-- art by --}}
                    <div class="border-top border-bottom border-dark-subtle py-2 d-flex justify-content-between">
                        <h6 class="w-25">Art by:</h6>

                        {{-- artists --}}
                        <p class="w-75">
                            @foreach($currentComic['artists'] as $artist)
                                <span>{{ $artist }}</span>,
                            @endforeach
                        </p>
                    </div>

                    {{-- written by --}}
                    <div class="border-bottom border-dark-subtle  py-2 d-flex justify-content-between">
                        <h6 class="w-25">Written by:</h6>

                        {{-- writers --}}
                        <p class="w-75">
                            @foreach($currentComic['writers'] as $writer)
                                <span>{{ $writer }}</span>,
                            @endforeach
                        </p>
                    </div>
                    
                </div>

                {{-- specs --}}
                <div class="specs w-50 d-flex flex-column">

                    {{-- title --}}
                    <h5 class="fw-bold mb-4">Specs</h5>

                    {{-- series --}}
                    <div class="border-top border-bottom border-dark-subtle py-2 d-flex justify-content-between">
                        <h6>Series:</h6>
                        <span>
                            {{ $currentComic['series']}}
                        </span>
                    </div>

                    {{-- price --}}
                    <div class="py-2 d-flex justify-content-between">
                        <h6>U.S. Price:</h6>
                        <span class="text-dark">
                            {{ $currentComic['price']}}
                        </span>
                    </div>

                    {{-- on sale date --}}
                    <div class="border-top border-bottom border-dark-subtle py-2 d-flex justify-content-between">
                        <h6>On Sale Date:</h6>
                        <span class="text-dark">
                            {{ $currentComic['sale_date']}}
                        </span>
                    </div>
                </div>
            </div>

        </section>
    </main>
@endsection