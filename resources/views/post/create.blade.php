
<x-app-layout>
    <div class="contents">
    <div class="container-fluid">
            <div class="row">
               <div class="col-lg-12">
                  <div class="shop-breadcrumb">

                     <div class="breadcrumb-main">
                        <h4 class="text-capitalize breadcrumb-title">Publicações dos futuros investimentos</h4>
                        <!--
                        <div class="breadcrumb-action justify-content-center flex-wrap">
                           <nav aria-label="breadcrumb">
                              <ol class="breadcrumb">
                                 <li class="breadcrumb-item"><a href="#"><i class="uil uil-estate"></i>Home</a></li>
                                 <li class="breadcrumb-item active" aria-current="page">checkout</li>
                              </ol>
                           </nav>
                        </div>
                        -->
                     </div>

                  </div>
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <div class=" checkout wizard10 global-shadow mb-30 bg-white radius-xl w-100">
               <div class="row justify-content-center">
                  <div class="col-xl-10">
                     <div class="row justify-content-center">
                        <div class="col-lg-5">
                           <div class="checkout-progress-indicator border-0 p-0 radius-md mt-lg-30 p-xl-20 py-30 ps-30 pe-lg-0 pe-30">
                              <div class="checkout-progress3">
                                 <div class="step current bg-lighter" id="1">
                                    <span>1. Criar Conteúdo</span>
                                    <span>Cadastrar Título, Sub Título e o Texto</span>
                                 </div>
                                 <div class="step" id="2">
                                    <span>2. Adicionar imagens</span>
                                    <span>Colocar uma ou mais imagens para o anúncio do futuro investimento</span>
                                 </div>
                              </div>
                           </div><!-- checkout -->
                        </div>
                        <div class="col-lg-6">
                            <div class=" checkout-shipping-form pt-lg-50">
                                <div class="card px-0 pt-0 pb-0 mt-lg-0 radius-md border-0">
                                    <div class="card-header border-bottom-0 align-content-start pb-sm-0 pb-3 px-0 mb-0 pt-0">
                                        <h4 class="fw-500">1. Criar conteúdo</h4>
                                    </div>
                                    <div class="card-body px-0 pb-0 pt-0">
                                        <div class="edit-profile__body">
                                            @livewire('post.create')
                                        </div>
                                    </div>
                                </div><!-- ends: card -->
                                <div class="d-flex pt-40 justify-content-md-end justify-content-center border-top mt-25">
                                    <a href="{{route('postImages.create')}}" class="btn btn-primary btn-default btn-squared text-capitalize text-white">Continuar<i class="ms-10 me-0 las la-arrow-right"></i></a>
                                </div> 
                            </div>
                        </div>
                           
                        </div><!-- ends: col -->
                     </div>
                  </div><!-- ends: col -->
               </div>
            </div><!-- End: .global-shadow-->
         </div>
    </div>
</x-app-layout>

