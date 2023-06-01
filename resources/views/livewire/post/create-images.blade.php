<form wire:submit.prevent="upload">
    <div class="form-group">
        <label for="name31">Adicionar imagem</label>
        <input wire:model="post_photo_path" name="post_photo_path" type="file" class="form-control" id="" placeholder="">
    </div>
    <button type="submit">enviar</button>
    @if($errors->has('post_photo_path'))
        <div id="validationServer033Feedback" class="invalid-feedback" style="display:inline-block">
            {{ $errors->first('post_photo_path') }}
        </div>
    @endif
</form>
<div class="row mt-5">
    @if(isset($files) && count($files))
        @foreach($files as $file)
            <div class="col-xl-4 col-md-2 mb-25">
                <div class="blog-card__thumbnail">
                    <a href="#">
                        <img src="{{\Storage::disk('files')->url($file->filename) }}" alt="">
                    </a>
                </div>
                {{$file->filename}}
            </div>
        @endforeach
    @endif
</div>



<div class="border-top mt-30">
        <div class="button-group d-flex pt-40 mb-20 justify-content-between flex-wrap">
        <a href="{{route('post.create')}}" class="btn btn-light btn-default btn-squared fw-400 text-capitalize m-1"><i class="las la-arrow-left me-10"></i>Voltar</a>
        <a href="checkout-payment-wizard10.html" class="btn text-white btn-primary btn-default btn-squared text-capitalize m-1">Salvar
            <i class="ms-10 me-0 las la-arrow-right"></i></a>
        </div>
    </div>
