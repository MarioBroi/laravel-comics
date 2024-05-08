@extends('layout.app')

@section('content')
    {{-- TESTING THE CORRECT ROUTE --}}
    <div class="container">
        <img src="{{ $comic['thumb'] }}" alt="">
    </div>
    <!-- /.container -->
@endsection
