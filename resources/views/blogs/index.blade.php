<x-layout>

    <x-slot name="title">
        Blogs
    </x-slot>

    @if (session('success'))
    <div class="alert alert-warning text-center">
        {{session('success')}}
    </div>
    @endif

    <x-hero />

    <x-blogs-section :blogs="$blogs" />

</x-layout>
