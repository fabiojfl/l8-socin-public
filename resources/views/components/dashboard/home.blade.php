
            <div class="container-fluid">
            <div class="row">
               <div class="col-lg-12">
                  <div class="project-progree-breadcrumb">
                     <div class="breadcrumb-main user-member justify-content-sm-between ">
                        <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                           <div class="d-flex align-items-center user-member__title justify-content-center me-sm-25">
                              <h4 class="text-capitalize fw-500 breadcrumb-title">Painel de Investimentos</h4>
                              <span class="sub-title ms-sm-25 ps-sm-25">12 Running projects</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Tab Menu End -->
            <div class="projects-tab-content projects-tab-content--progress">
               <div class="tab-content mt-25" id="ap-tabContent">
                  <div class="tab-pane fade show active" id="ap-overview" role="tabpanel" aria-labelledby="ap-overview-tab">
                     <div class="row">
                        @foreach($teams as $team) 
                          <div class="col-xl-4 mb-25 col-md-6">

                            <div class="user-group radius-xl media-ui media-ui--early pt-30 pb-25">
                                <div class="border-bottom px-30">
                                  <div class="media user-group-media d-flex justify-content-between">
                                      <div class="media-body d-flex align-items-center flex-wrap text-capitalize my-sm-0 my-n2">
                                        <a href="application-ui.html">
                                            <h6 class="mt-0  fw-500 user-group media-ui__title bg-transparent">{{$team->name}}</h6>
                                        </a>
                                        <span class="my-sm-0 my-2 media-badge text-uppercase color-white bg-success">Em formação</span>
                                      </div>
                                      <div class="mt-n15">
                                        <div class="dropdown dropleft">
                                            <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                              <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                                            </button>
                                            <div class="dropdown-menu">
                                              <a class="dropdown-item" href="#">view</a>
                                              <a class="dropdown-item" href="#">edit</a>
                                              <a class="dropdown-item" href="#">leave</a>
                                              <a class="dropdown-item" href="#">delete</a>
                                            </div>
                                        </div>
                                      </div>
                                  </div>
                                  <div class="user-group-people mt-15 text-capitalize">
                                      <p>Lorem ipsum dolor amet, consetetur sadipscing elitr sed diam nonumy eirmod dolor ame.</p>
                                      <div class="user-group-project">
                                        <div class="d-flex align-items-center user-group-progress-top">
                                            <div class="media-ui__start">
                                              <span class="color-light fs-12">Data abertura</span>
                                              <p class="fs-14 fw-500 color-dark mb-0">26 Dec 2019</p>
                                            </div>
                                            <div class="media-ui__end">
                                              <span class="color-light fs-12">end date</span>
                                              <p class="fs-16 fw-500 color-success mb-0">18 Mar 2020</p>
                                            </div>
                                        </div>
                                      </div>
                                  </div>
                                  <div class="user-group-people mt-15 text-capitalize">
                                    
                                      <div class="user-group-project">
                                        <div class="d-flex align-items-center user-group-progress-top">
                                            <div class="media-ui__start">
                                              <span class="color-light fs-12">Criador:</span>
                                              <p class="fs-14 fw-500 color-dark mb-0">{{$team->user->name}}</p>
                                            </div>
                                        </div>
                                      </div>
                                  </div>
                                </div>
                                <div class="mt-20 px-30">
                                  <p class="fs-13 color-light mb-10">Assigned To</p>
                                  <ul class="d-flex flex-wrap user-group-people__parent">
                                  @foreach ($team->users->sortBy('name') as $user)
                                      <li>
                                        <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ $user->profile_photo_url }}" alt="{{ $user->name }}"></a>
                                      </li>
                                    @endforeach 
                                  </ul>
                                </div>
                            </div>

                          </div>
                        @endforeach
                     </div>
                     <div class="row">
                        <div class="col-lg-12">
                           <div class="d-flex justify-content-md-end justify-content-center mt-1 mb-30">
                              <nav class="dm-page ">
                                 <ul class="dm-pagination d-flex">
                                    <li class="dm-pagination__item">
                                       <a href="#" class="dm-pagination__link pagination-control"><span class="la la-angle-left"></span></a>
                                       <a href="#" class="dm-pagination__link"><span class="page-number">1</span></a>
                                       <a href="#" class="dm-pagination__link active"><span class="page-number">2</span></a>
                                       <a href="#" class="dm-pagination__link"><span class="page-number">3</span></a>
                                       <a href="#" class="dm-pagination__link pagination-control"><span class="page-number">...</span></a>
                                       <a href="#" class="dm-pagination__link"><span class="page-number">12</span></a>
                                       <a href="#" class="dm-pagination__link pagination-control"><span class="la la-angle-right"></span></a>
                                       <a href="#" class="dm-pagination__option">
                                       </a>
                                    </li>
                                    <li class="dm-pagination__item">
                                       <div class="paging-option">
                                          <select name="page-number" class="page-selection">
                                             <option value="20">20/page</option>
                                             <option value="40">40/page</option>
                                             <option value="60">60/page</option>
                                          </select>
                                       </div>
                                    </li>
                                 </ul>
                              </nav>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>