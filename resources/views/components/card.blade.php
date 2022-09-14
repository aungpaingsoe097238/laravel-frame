<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-between align-items-center">
            <h5 class="mb-0">{{ $title }}</h5>
            @isset($route)
                <a href="{{ route($route) }}" class="btn btn-outline-primary">
                    {{ $routeName }}
                </a>
            @endisset
        </div>
    </div>
    <div class="card-body">
        {{ $slot }}
    </div>
</div>
