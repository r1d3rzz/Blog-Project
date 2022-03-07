@props(['blogs'])

<section class="container text-center" id="blogs">
    <h1 class="display-5 fw-bold mb-4">Blogs</h1>
    <div class="d-flex justify-content-center">
        <x-category-dropdown />
        <x-author-dropdown />
    </div>

    <x-search-blog />

    <div class="row">
        @forelse ($blogs as $blog)
        <div class="col-md-4 mb-4">
            <x-blog-card :blog="$blog" />
        </div>
        @empty
        <p class="text-center">Blog Not Found!</p>
        @endforelse
    </div>
</section>
