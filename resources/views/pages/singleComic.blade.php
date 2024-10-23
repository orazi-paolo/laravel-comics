@extends("layouts.app")

@section("page-title", "Single Comic")

@section("main-content")
<main id="main" class="bg-black">
    <section class="container">
        <div class="row">
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
