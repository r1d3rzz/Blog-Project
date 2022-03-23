<x-admin-layout>

    @if (session('delete'))
    <div class="alert alert-warning text-center">
        {{session('delete')}}
    </div>
    @endif

    <table class="table table-light table-striped">
        <thead>
            @if ($blogs->count())
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Intro</th>
                <th scope="col" colspan="3" class="text-center">Action</th>
            </tr>
            @endif
        </thead>
        <tbody>
            @forelse ($blogs as $blog)
            <tr>
                <th scope="row">{{$blog->id}}</th>
                <td>{{$blog->title}}</td>
                <td>{{$blog->intro}}</td>
                <td>
                    <button class="btn btn-primary">Pending</button>
                </td>
                <td><button class="btn btn-warning">Edit</button></td>

                <!--delete Btn-->
                <form action="/admin/{{$blog->slug}}/delete" method="POST">@csrf @method('DELETE')
                    <td><button class="btn btn-danger">Delete</button></td>
                </form>
                </td>
            </tr>
            @empty
            <p class="text-center p-5">Empty Blogs</p>
            @endforelse
        </tbody>
    </table>
</x-admin-layout>
