<div>
    <label for="{{ $name }}">{{ $label }}</label>
    <input
        type="{{ $type }}"
        id="{{ $name }}"
        value="{{ old($name,$defaultValue) }}"
        name="{{ $multiple ? $name."[]" : $name  }}"
        class="form-control @error($name) is-invalid @enderror  @error("$name.*") is-invalid @enderror "
        placeholder="{{ $placeholder }}"
        @isset($form) form="{{ $form }}" @endisset
        @if($multiple)
            multiple
        @endif
    >
    @error($name)
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
    @isset($multiple)
        @error($name.".*")
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    @endisset
</div>
