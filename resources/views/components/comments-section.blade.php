@props(['comments','blog'])

@auth
<div class="container my-5">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <x-card-wrapper>
                <form action="/blogs/{{$blog->slug}}/comments" method="POST">@csrf
                    <x-form.textarea name="comment" />
                    <div class="d-flex justify-content-end mt-3">
                        <input type="submit" value="Comment" class="btn btn-primary" />
                    </div>
                </form>
            </x-card-wrapper>
        </div>
    </div>
</div>
@else
<p class="text-center my-5">If do you want to leave Your Comment this Blog.<a href="/login">Login First</a>.</p>
@endauth

<section class="container">
    <div class="col-md-8 mx-auto">
        @if ($comments->count())
        <h5 class="my-3 text-secondary ">Comment ({{$comments->count()}})</h5>
        @endif
        <!--single Comment-->
        @foreach ($comments as $comment)
        <x-single-comment :comment="$comment" />
        @endforeach

        {{$comments->links()}}
    </div>
</section>
