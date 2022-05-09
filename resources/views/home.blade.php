<x-layout>
    <x-layout.header name="header" />

    @foreach ($posts as $post)
    @if ($loop->first)
    <div class="px-4 py-3 my-2 text-center">
        <!-- <img class="d-block mx-auto mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
        <h1 class="display-5 fw-bold">{{ $post->title }}</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">{{ $post->body }}</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <button type="button" class="btn btn-primary px-4 gap-3">Read more</button>
                <!-- <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button> -->
            </div>
        </div>
    </div>
    @endif


    <!-- blog-card -->
    <div class="row mb-2">

        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary">{{ $post->slug }}</strong>
                    <h3 class="mb-0">{{ $post->title }}</h3>
                    <div class="mb-1 text-muted">{{ $post->created_at }}</div>
                    <p class="card-text mb-auto">{{ $post->info }}</p>
                    <a href="#" class="stretched-link">Continue reading</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <svg class="bd-placeholder-img" width="200" height="250" xmlns="" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                    </svg>

                </div>
            </div>
        </div>
    </div>
    @endforeach
</x-layout>