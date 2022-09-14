<x-container >
    <x-card title="Role Lists" route="roles.create" routeName="New Role">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Owners</th>
                <th scope="col">Handle</th>
            </tr>
            </thead>
            <tbody>
            @forelse($roles as $role)
                <tr>
                    <th scope="row">{{ $role->id }}</th>
                    <td>{{ $role->name }}</td>
                    <td>
                        @foreach($role->users as $user)
                            <span class="badge bg-primary">{{ $user->name }}</span>
                        @endforeach
                    </td>
                    <td>
                        <div class="d-flex align-items-center">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('roles.edit',$role->id) }}" class="btn btn-outline-primary btn-sm">
                                    <i class="bi bi-pen"></i>
                                </a>
                                <button class='btn btn-outline-primary btn-sm' form='deleteForm' >
                                    <i class="bi bi-trash"></i>
                                </button>
                            </div>
                            <form action="{{ route('roles.destroy',$role) }}" id='deleteForm' method="post">
                                @csrf
                                @method('delete')
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">There is no roles</td>
                </tr>
            @endforelse
            </tbody>
        </table>
        {{  $roles->onEachSide(1)->links()  }}
    </x-card>
</x-container>


