<x-container>
    <x-card title="Role Edit">

        <form action="{{ route('roles.update',$role->id) }}" method="post">
            @csrf
            @method('PATCH')

            <div class="row justify-content-center">
                <div class="col-12 col-lg-4">
                    <x-input label="Name" name="name" placeholder="Enter Name" :defaultValue="$role->name"></x-input>

                    <div class="mt-3 float-end">
                        <x-button class="primary" message="Update"></x-button>
                    </div>
                </div>
            </div>
        </form>

    </x-card>
</x-container>
