@extends('layout.app')

@section('content')
    <jumbotron class="jumbotron">
        <div class="jumbo-container">
        </div>
    </jumbotron>
    <!-- /.jumbotron -->

    <section class="comics-display">

        <div class="container d-flex justify-content-center flex-column">
            <div class="current-series">
                CURRENT SERIES
            </div>


            <div class="row row row-cols-3 row-cols-md-6 g-4">

                @foreach ($comics as $index => $comic)
                    <div class="col">
                        <a href="{{ route('comic', ['id' => $index]) }}">
                            <div class="card border-0">
                                <img src="{{ $comic['thumb'] }}" alt="" class="card-img-top thumb-size">
                                <div class="cardbody card-bg">
                                    <h5 class="p-1 text-light">
                                        {{ $comic['title'] }}
                                    </h5>
                                </div>
                            </div>
                            <!-- /.card -->
                        </a>
                    </div>
                    <!-- /.col -->
                @endforeach

            </div>
            <!-- /.row -->

            <button type="button" class="load-more">
                LOAD MORE
            </button>

        </div>
        <!-- /.container -->
    </section>
    <!-- /.comics-display -->

    <section class="shop">
        <div class="container">
            <ul class="list-unstyled d-flex justify-content-center">
                <li>DIGITAL COMICS</li>
                <li>DC MERCHANDISE</li>
                <li>SUBSCRIPTION</li>
                <li>COMIC SHOP LOCATOR</li>
                <li>DC POWER VISA</li>
            </ul>
        </div>
        <!-- /.container -->
    </section>
    <!-- /.shop -->
@endsection
