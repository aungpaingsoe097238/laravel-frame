@if($route)
    <a href="{{ route($routeName) }}" class="btn btn-{{ $class }}  @if($small) btn-sm @endif ">{{ $message }}</a>
@elseif($route === false)
    <button class="btn btn-{{ $class }}  @if($small) btn-sm @endif ">{{ $message }}</button>
@endif
