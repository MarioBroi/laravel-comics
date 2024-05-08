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
            <a href="">
                <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="">
            </a>
        </div>
    </div>
    <!-- /.description -->

    <div class="info">
        <div class="info-container">

            <div class="info-left">
                <ul>
                    <li class="info-top">
                        <h4>Talent</h4>
                    </li>
                    <li>
                        <h6>Art by:</h6>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit alias non deserunt repellat
                            commodi consectetur.</p>

                    </li>
                    <li>
                        <h6>Written by:</h6>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id ea voluptates quo voluptatum error
                            excepturi?</p>

                    </li>
                </ul>

            </div>
            <!-- /.info-left -->

            <div class="info-right">
                <ul>
                    <li class="info-top">
                        <h4>Specs</h4>
                    </li>
                    <li>
                        <h6>
                            Series:
                        </h6>
                        <p>
                            {{ $comic['series'] }}
                        </p>
                    </li>
                    <li>
                        <h6>
                            U.S. Price:
                        </h6>
                        <p>
                            {{ $comic['price'] }}
                        </p>
                    </li>
                    <li>
                        <h6>
                            On Sale Date:
                        </h6>
                        <p>
                            {{ $comic['sale_date'] }}
                        </p>
                    </li>
                </ul>
            </div>
            <!-- /.info-right -->
        </div>
        <!-- /.info-container -->
    </div>
    <!-- /.info -->
@endsection
