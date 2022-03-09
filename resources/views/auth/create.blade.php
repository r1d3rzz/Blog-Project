<x-layout>
    <x-slot name="title">
        User | Register
    </x-slot>

    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <h2 class="text-center text-primary mt-3">Register Here</h2>
                <x-card-wrapper>
                    <form action="/register" method="POST">@csrf
                        <x-form.input name="name" />

                        <x-form.input name="username" />

                        <x-form.input name="email" type="email" />

                        <x-form.input name="password" type="password" />

                        <div class="d-flex justify-content-between my-2">
                            <div><input type="submit" value="Register" class="btn btn-primary"></div>
                            <div><input type="reset" value="Cancel" class="btn btn-danger"></div>
                        </div>
                    </form>
                </x-card-wrapper>
            </div>
        </div>
    </div>
</x-layout>
