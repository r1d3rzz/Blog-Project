<x-admin-layout>
    <div class="container">
        <div class="row">
            <div class="col-md mx-auto">
                @if (session('uploded'))
                <div class="alert alert-primary text-center">
                    {{session('uploded')}}
                </div>
                @endif
                <form action="/admin/blog/store" method="POST" enctype="multipart/form-data">@csrf
                    <x-card-wrapper class="mt-0">
                        <x-form.input name="title" />

                        <x-form.input name="slug" />

                        <x-form.input name="intro" />

                        <div class="my-3">
                            <x-form.label name="body" />
                            <textarea name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
                            <x-error name="body" />
                        </div>

                        <x-form.input name="thumbnail" type="file" />

                        <div class="my-3">
                            <x-form.label name="category" />
                            <select class="form-control" name="category_id" id="category">
                                @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                            <x-error name="category_id" />
                        </div>

                        <div class="my-3 d-flex justify-content-between">
                            <div><button class="btn btn-primary">Upload</button></div>
                            <div><button class="btn btn-danger">Cancel</button></div>
                        </div>
                    </x-card-wrapper>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
