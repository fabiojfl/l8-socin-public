@if ($errors->any())
    <div class="card-body">
        <div class=" alert alert-danger " role="alert">
            <div class="alert-content" {{ $attributes }}>
            @foreach ($errors->all() as $error)
                <p> {{ $error }} </p>
            @endforeach
            </div>
        </div>
    </div>
@endif
