@extends('layout.app')

@section('content')
    <jumbotron class="jumbotron">
        <div class="jumbo-container">

        </div>
    </jumbotron>
    <!-- /.jumbotron -->

    <div class="img-container">
        <img src="{{ $comic['thumb'] }}" alt="" class="thumb-jumbo">
    </div>
    <!-- /.img-container -->

    <section class="description">
        <div class="container">
            <h2>{{ $comic['title'] }}</h2>
            <div class="availability">
                <div class="available justify-content-between px-4">
                    <div class="comic-price">
                        U.S. Price: {{ $comic['price'] }}
                    </div>
                    <div>
                        AVAILABLE
                    </div>
                </div>
                <div>
                    Check Availability 🔽
                </div>
            </div>
            <p>
                {{ $comic['description'] }}
            </p>
        </div>
    </section>
    <!-- /.description -->
@endsection
