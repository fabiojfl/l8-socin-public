
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="breadcrumb-main user-member justify-content-sm-between ">
                <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                    <div class="d-flex align-items-center user-member__title justify-content-center me-sm-25">
                        <h4 class="text-capitalize fw-500 breadcrumb-title">Lista de usuários</h4>
                        <!-- <span class="sub-title ms-sm-25 ps-sm-25">Home</span> -->
                    </div>
                    <form action="/" class="d-flex align-items-center user-member__form my-sm-0 my-2">
                        <img src="{{ asset('assets/img/svg/search.svg') }}" alt="search" class="svg">
                        <input class="form-control me-sm-2 border-0 box-shadow-none" type="search" placeholder="Search by Name" aria-label="Search">
                    </form>
                    </div>
                    <div class="action-btn">
                        <a href="#" class="btn px-15 btn-primary" data-bs-toggle="modal" data-bs-target="#new-member">
                            <i class="las la-plus fs-16"></i>Criar usuários
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($users as $user)
            <div class="col-md-6 col-sm-12 mb-25">
                <div class="media  py-30  ps-30 pe-20 bg-white radius-xl users-list "> 
                <img class=" me-20 rounded-circle wh-80 bg-opacity-primary  " src="{{ $user->profile_photo_url }}" alt="{{ $user->name }}">
                    <div class="media-body d-xl-flex users-list-body">
                        <div class="flex-1 pe-xl-30 users-list-body__title">
                            <h6 class="mt-0 fw-500">{{$user->name}}</h6>
                            <span>Graphic Designer/ UI &amp; UX </span>

                            <div class="users-list-body__bottom">
                                <span>
                                    Telefone: <span class="fw-600">$25/</span>
                                </span>                                
                            </div>
                            <div class="users-list-body__bottom">
                                <span>
                                    Email: <span class="fw-600">{{$user->email}} </span>
                                </span>
                            </div>
                        </div>
                        <div class="users-list-body__bottom">
                            
                        </div>
                        <div class="users-list__button mt-xl-0 mt-15">
                            <button class="btn btn-primary btn-default btn-squared text-capitalize px-20 mb-10 global-shadow">Perfil do usuário
                            </button>
                          
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
