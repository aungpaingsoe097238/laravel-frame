<div>
    <label for="select">{{ $label }}</label>
    <select
        class="form-select
        @error($name) is-invalid @enderror"
        id="select"
        name="roles[]"
{{--        @isset($multiple) multiple @endisset--}}
        @if($multiple)  multiple  @endif
    >
        @foreach($array as $i)
            <option value="{{ $i->id }}">{{ $i->name }}</option>
        @endforeach
    </select>
    @error($name)
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
