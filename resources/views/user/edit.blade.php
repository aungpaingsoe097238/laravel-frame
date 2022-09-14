<x-container >
    <x-card title="User Edit">

        <form action="{{ route('users.update',$user->id) }}" method="post">
            @csrf
            @method('PATCH')

            <div class="row justify-content-center">
                <div class="col-12 col-lg-4">
                    <x-input label="Name" name="name" placeholder="Enter Name" :defaultValue="$user->name"></x-input>

                    <x-input label="Email" name="email" type="email" placeholder="Enter Email" :defaultValue="$user->email"></x-input>

                    <x-input label="Password" name="password" type="password" placeholder="Enter Password"></x-input>

                    <x-input label="Confirm Password" name="password_confirmation" type="password" placeholder="Enter Confirm Password"></x-input>

                    <x-select label="Secleted Roles" :array="$roles" multiple></x-select>

                    <div class="mt-3 float-end">
                        <x-button class="primary" message="Update"></x-button>
                    </div>
                </div>
            </div>

        </form>

    </x-card>
</x-container>
