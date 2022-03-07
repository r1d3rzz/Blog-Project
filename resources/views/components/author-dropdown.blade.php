@props(['categories'])

<div class="dropdown mx-3">
    <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
        data-bs-toggle="dropdown" aria-expanded="false">
        {{isset($currentAuthor) ? $currentAuthor->name : "Filter By Author"}}
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li><a class="dropdown-item" href="/">Authors</a></li>
        @foreach ($authors as $author)
        <li><a class="dropdown-item"
                href="/?user={{$author->username}}{{request('search') ? '&search='.request('search') : ''}}{{request('category') ? '&category='.request('category') : ''}}">{{$author->name}}</a>
        </li>
        @endforeach
    </ul>
</div>
