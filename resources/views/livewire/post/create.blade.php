<div class="blog-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">Criação do investimento</h4>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card card-Vertical card-default card-md mb-4">
                    <div class="card-header">
                        <h6>Informções básicas</h6>
                    </div>
                    <div class="card-body pb-md-30">
                        <div class="Vertical-form">
                            <form wire:submit.prevent="submit">
                                <div class="form-group">
                                    <label for="title" class="color-dark fs-14 fw-500 align-center mb-10">Título <b>*</b></label>
                                    <input wire:model="title" id="title" type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15"  placeholder="" required autofocus>
                                </div>
                                <div class="form-group">
                                    <label for="subtitle" class="color-dark fs-14 fw-500 align-center mb-10">Sub título</label>
                                    <input wire:model="subtitle" id="subtitle" type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15"  placeholder="" required >
                                </div>
                                <div class="form-group form-element-textarea mb-20">
                                <label for="content" class="color-dark fs-14 fw-500 align-center mb-10">Texto<b>*</b></label>
                                       <textarea wire:model="content" id="content" class="form-control" rows="12" ></textarea>
                                    </div>
                                <div class="layout-button mt-25">
                                    <button type="submit" class="btn btn-primary btn-default btn-squared px-30">Criar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <!-- ends: .card -->
            </div>
        </div>
    <!-- ends: .row -->
    </div>
</div>
