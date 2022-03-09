<x-layout>

    <x-slot name="title">
        {{$blog->title}}
    </x-slot>

    <x-single-blog :blog="$blog" />

    <x-comments-section :blog="$blog" :comments="$blog->comments()->latest()->paginate(3)" />

    <x-blog-you-may-know :blog="$blog" :randomBlogs="$randomBlogs" />

</x-layout>
