@props([
    'label',
    'model'
    ])

<div class="form-group">                          
    <label for="{{ $model }}"  class="color-dark fs-14 fw-500 align-center mb-10">
        {{ $label }}
    </label>
    <input wire:model="{{ $model }}" type="text" {{ $attributes }} id="{{ $model }}"  class="form-control ih-medium ip-gray radius-xs b-light px-15"  placeholder="" >
    @if($errors->has($model))
        <div id="validationServer033Feedback" class="invalid-feedback" style="display:inline-block">
            {{ $errors->first($model) }}
        </div>
    @endif
</div>