@props([
    'label',
    'model'
    ])

<div class="form-group">                          
    <label for="{{ $model }}" class="color-dark fs-14 fw-500 align-center mb-10">
        {{ $label }}
    </label>
    <textarea wire:model="{{ $model }}" id="{{ $model }}" class="form-control" rows="12" ></textarea>
    @if($errors->has($model))
        <div id="validationServer033Feedback" class="invalid-feedback" style="display:inline-block">
            {{ $errors->first($model) }}
        </div>
    @endif
</div>