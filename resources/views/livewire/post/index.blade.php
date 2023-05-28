
   <div class="demo5 mt-30 mb-25">
      <div class="container-fluid">
         <div class="row">
         <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">Lista de Publicações</h4>
                </div>
            </div>
            @foreach($posts as $post)
            <div class="col-xxl-4 col-lg-6 mb-25">
               <div class="blog-card">
                  <div class="blog-card__thumbnail">
                     <a href="#">
                        <img src="{{ asset('assets/img/bg2.png') }}" alt="">
                     </a>
                  </div>
                  <div class="blog-card__details">
                     <div class="blog-card__content">
                        <div class="blog-card__title--top">15 March 2021</div>
                        <h4 class="blog-card__title">
                           <a href="#" class="entry-title" rel="bookmark">{{$post->title}}</a>
                        </h4>
                        <p>{{$post->subtitle}}</p>
                     </div>
                     <div class="blog-card__meta">
                        <div class="blog-card__meta-profile">
                           <img src="{{ $post->user->profile_photo_url }}" alt="">
                           <span>{{$post->user->name}}</span>
                        </div>
                        <div class="blog-card__meta-count">
                           <ul>
                              <li>
                                 <div class="blog-card__meta-reaction blog-card__title">
                                    <a href="#" class="entry-title" rel="bookmark">
                                        <img src="{{ asset('assets/img/svg/image.svg') }}" alt="heart" class="svg">
                                    </a>
                                 </div>
                              </li>
                              <li>
                                 <div class="blog-card__meta-doc-wrapper blog-card__title">
                                    <a href="#" class="entry-title" rel="bookmark">
                                        <img src="{{ asset('assets/img/svg/edit.svg') }}" alt="file-text" class="svg">
                                    </a>
                                 </div>
                              </li>
                              <li>
                                 <div class="blog-card__meta-doc-wrapper blog-card__title">
                                    <a href="#" class="entry-title" rel="bookmark">
                                        <img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="file-text" class="svg">
                                    </a>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            @endforeach
         </div>
         <!-- ends: .row -->
      </div> 
   </div>
