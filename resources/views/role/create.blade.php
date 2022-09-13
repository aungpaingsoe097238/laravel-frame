<x-container>
    <x-card title="New Role">

        <form action="{{ route('roles.store') }}" method="post">
            @csrf

            <div class="row justify-content-center">
                <div class="col-12 col-lg-4">
                    <x-input label="Name" name="name" placeholder="Enter Name"></x-input>
                    <div class="mt-3 float-end">
                        <x-button class="primary" message="Create"></x-button>
                    </div>
                </div>
            </div>

        </form>

    </x-card>
</x-container>
