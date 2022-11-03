    @props([
        'group' => null,
        'label' => null,
        'type' => 'text',
        'name' => null,
        'value'=>null,
        'id' => null,
        'required' => false,
        'disabled' => false,
    ])

<div class="{{ $group }}">
    <div class="form-group @error($name) is-invalid @enderror">
        <label class="form-label">{{ $label }} @if($required) <i class="text-danger">*</i> @endif</label>

        @if ($type == 'textarea')
            <textarea
                @class([
                    'form-control',
                    $attributes->get('class'),
                    'is-invalid' => $errors->has($name)
                ])
                name="{{ $name }}"
                id="{{ $id ?? $name }}"
                placeholder=" "
                {{ $required ? 'required' : '' }}
                {{ $disabled ? 'disabled' : '' }}
                {{ $attributes }}>{{ old($name,$value) }}</textarea>
        @else
            <input
                type="{{ $type }}"
                @class([
                    'form-control',
                    $attributes->get('class'),
                    'is-invalid' => $errors->has($name)
                ])
                name="{{ $name }}"
                id="{{ $id ?? $name }}"
                placeholder=" "
                value="{{ old($name,$value) }}"
                {{ $required ? 'required' : '' }}
                {{ $disabled ? 'disabled' : '' }}
                {{ $attributes }}
            />
        @endif
        
        @error($name)
            <div class="text-left text-danger mb-3">
                {{ $message }}
            </div>
        @enderror
    </div>
</div>
