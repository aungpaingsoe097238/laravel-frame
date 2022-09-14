@extends($layout)
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 {{ $cols }} ">
                {{ $slot }}
            </div>
        </div>
    </div>
@endsection
