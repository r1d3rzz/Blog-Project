<x-layout>

    <x-slot name="title">
        {{$blog->title}}
    </x-slot>

    <x-single-blog :blog="$blog" />

    <x-blog-you-may-know :blog="$blog" :randomBlogs="$randomBlogs" />

</x-layout>
