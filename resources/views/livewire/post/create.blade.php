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
                            <x-form.input label="Título" model="title" placeholder="campo obrigatório com até 75 caracteres"/>
                                <x-form.input label="Sub título" model="subtitle" placeholder="até 255 caracteres" />
                                <x-form.textarea label="Adicione o conteúdo" model="content"/>
                                <x-form.button text="Criar" />
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
