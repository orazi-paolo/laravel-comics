@extends("layouts.app")

@section("additional-cdn",)
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css'>
@endsection

@section("page-title", "Homepage")

@section("main-content")
<main id="main" class="bg-black">
    <section class="container">
        <div>
            <button class="bg-light-blue text-white pt-2 pb-2 pe-3 ps-3 fw-bold top-plus-50 fs-4">
                CURRENT SERIES
            </button>
        </div>
        <div class="row">
            @foreach ($comics as $singleComic )
            <div class="col-2 mb-3">
                    <img src="{{ $singleComic['thumb']}}" alt="{{ $singleComic['title']}}" class="img-fluid img-thumb mb-3">
                    <h6 class="text-white">
                        {{ strtoupper($singleComic['series'])}}
                    </h6>
            </div>
            @endforeach
            <div class="col-12 d-flex justify-content-center mb-3">
                <button role="button" class="bg-light-blue text-white pt-1 pb-1 pe-3 ps-3">
                    LOAD MORE
                </button>
            </div>
        </div>
    </section>
</main>
@endsection
