@extends("layouts.app")

@section("page-title", $comic['series'])

{{-- includi header --}}

@include('partials.header')

@section("main-content")
<main id="main" class="bg-black pt-4">
    <section class="container">
        <h1 class="text-white">
            {{ $comic['series']}}
        </h1>
        <div class="row justify-content-center">
            <div class="col-2 mb-3">
                <img src="{{ $comic['thumb']}}" alt="{{ $comic['title']}}"
                    class="img-fluid img-thumb mb-3 cursor_pointer">
                <h6 class="text-white cursor_pointer">
                    {{ strtoupper($comic['series'])}}
                </h6>
            </div>
        </div>
    </section>
</main>
@endsection
