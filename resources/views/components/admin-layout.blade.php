<x-layout>
    <x-slot name="title">
        Admin | Dashboard
    </x-slot>

    <div class="container-fluid my-2">
        @if (session('admin'))
        <div class="alert alert-primary text-center">
            {{session('admin')}}
        </div>
        @endif
        <div class="row g-0">
            <nav class="col-2 bg-light pe-3">
                <h1 class="h4 text-center text-primary py-3">
                    <i class="fas fa-solid fa-folder"></i>
                    <span class="d-none d-lg-inline">Admin Panel</span>
                </h1>

                <div class="list-group text-lg-start text-center">
                    <span class="list-group-item disabled d-none d-lg-block">
                        <small>DashBoard</small>
                    </span>
                    <a href="/admin/blogs" class="list-group-item list-group-item-action">
                        <i class="fas fa-solid fa-box"></i>
                        <span class="d-none d-lg-inline">Blogs</span>
                    </a>
                    <a href="/admin/blogs/create" class="list-group-item list-group-item-action">
                        <i class="fas fa-solid fa-plus"></i>
                        <span class="d-none d-lg-inline">Create</span>
                    </a>
                </div>
            </nav>
            <main class="col-10 bg-light">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="flex-fill"></div>
                    <div class="navbar nav">
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                {{-- <i class="fas fa-user-circle"></i> --}}
                                <img src="{{auth()->user()->avatar}}" width="30" class="rounded-circle"
                                    alt="{{auth()->user()->username}}">
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#" class="dropdown-item">User Profile</a>
                                </li>
                                <li>
                                    <a href="/logout" class="dropdown-item">Logout</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-cog"></i></a>
                        </li>
                    </div>
                </nav>
                <div>
                    {{$slot}}
                </div>
            </main>
        </div>
    </div>
</x-layout>
