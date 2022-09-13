@extends('layouts.app')
@section('content')


    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            User Lists
                            <a href="{{ route('home') }}" class="btn btn-primary">Home</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Roles</th>
                                <th scope="col">Handle</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($users as $user)
                                <tr>
                                    <th scope="row">{{ $user->id }}</th>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        @foreach($user->roles as $role)
                                            <span class="badge bg-primary">{{ $role->name }}</span>
                                        @endforeach
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="{{ route('users.edit',$user->id) }}" class="btn btn-outline-primary btn-sm">
                                                    <i class="bi bi-pen"></i>
                                                </a>
                                                <button class='btn btn-outline-primary btn-sm' form='deleteForm' >
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </div>
                                            <form action="{{ route('users.destroy',$user) }}" id='deleteForm' method="post">
                                                @csrf
                                                @method('delete')
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5">There is no users</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                        {{  $users->onEachSide(1)->links()  }}
                    </div>

                </div>

            </div>
        </div>
    </div>


@endsection
