<x-layout>
    <x-slot name="title">
        User | Login
    </x-slot>

    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <h2 class="text-center text-primary mt-3">Login</h2>
                <x-card-wrapper>
                    <form action="/login" method="POST">@csrf
                        <x-form.input name="email" type="email" />

                        <x-form.input name="password" type="password" />

                        <div class="d-flex justify-content-between my-2">
                            <div><input type="submit" value="Login" class="btn btn-primary"></div>
                            <div><a href="/" class="btn btn-secondary">Back</a></div>
                        </div>
                    </form>
                </x-card-wrapper>
            </div>
        </div>
    </div>
</x-layout>
