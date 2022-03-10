@props(['blog'])

<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto text-center">
            <img src="https://creativecoder.s3.ap-southeast-1.amazonaws.com/blogs/GOLwpsybfhxH0DW8O6tRvpm4jCR6MZvDtGOFgjq0.jpg"
                class="card-img-top" alt="..." />
            <h3 class="my-3">{{$blog->title}}</h3>
            <p class="fs-6 text-secondary">
                <a href="/?user={{$blog->author->username}}">{{$blog->author->name}}</a>
                <span> - {{$blog->created_at->diffForHumans()}}</span>
            </p>
            @auth
            <form action="/blogs/{{$blog->slug}}/subscribe" id="subscribe" method="POST">@csrf
                @if (auth()->user()->isSubscribe($blog))
                <button type="submit" class="btn btn-danger">Unsubscribe</button>
                @else
                <button type="submit" class="btn btn-warning">Subscribe</button>
                @endif
            </form>
            @endauth
            <div class="tags my-3">
                <a href="/?category={{$blog->category->slug}}"><span
                        class="badge bg-primary">{{$blog->category->name}}</span></a>
            </div>
            <p class="lh-md">
                {{$blog->body}}
            </p>
        </div>
    </div>
</div>
