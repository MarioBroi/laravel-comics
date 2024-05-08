@extends('layout.app')

@section('content')
    <jumbotron class="jumbotron">
        <div class="jumbo-container">
        </div>
    </jumbotron>
    <!-- /.jumbotron -->

    <div class="img-container">
        <div class="thumb-card">
            <img src="{{ $comic['thumb'] }}" alt="" class="">
            <a href="">
                <div>
                    VIEW GALLERY
                </div>
            </a>
        </div>
        <div class="book-type">
            {{ $comic['type'] }}
        </div>
    </div>
    <!-- /.img-container -->

    <div class="description d-flex">

        <div class="description-left">

            <h2 class="description-title">{{ $comic['title'] }}</h2>

            <div class="availability">
                <div class="available">
                    <div class="comic-price">
                        U.S. Price: {{ $comic['price'] }}
                    </div>
                    <div>
                        AVAILABLE
                    </div>
                </div>
                <div class="check-availability">
                    <a href="">Check Availability <i class="fa-solid fa-chevron-down"></i></a>
                </div>
            </div>
            <p class="comic-description">
                {{ $comic['description'] }}
            </p>
        </div>

        <div class="adv d-flex flex-column align-items-end">
            <div>ADVERTISEMENT</div>
            <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="">
        </div>
    </div>
    <!-- /.description -->
@endsection
