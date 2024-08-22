<div>
    <textarea
        id="{{ $id ?? '' }}"
        name="{{ $name ?? '' }}"
        class="{{ $class ?? '' }}"
        rows="{{ $rows ?? '3' }}"
        autofocus="{{ $autofocus ?? false }}"
        autocomplete="{{ $autocomplete ?? '' }}">{{ $slot }}</textarea>

</div>