<div class="blog-page2">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-lg-12">

                     <div class="breadcrumb-main">
                        <h4 class="text-capitalize breadcrumb-title">Blog Details</h4>
                        <div class="breadcrumb-action justify-content-center flex-wrap">
                           <nav aria-label="breadcrumb">
                              <ol class="breadcrumb">
                                 <li class="breadcrumb-item"><a href="#"><i class="uil uil-estate"></i>Dashboard</a></li>
                                 <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                 <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
                              </ol>
                           </nav>
                        </div>
                     </div>

                  </div>
               </div>
               <div class="row justify-content-center">
                  <div class="col-lg-8 col-12">
                     <div class="blog-details-thumbnail">
                        <img src="{{ asset('assets/img/blog-details.png') }}" alt="">
                     </div>
                     <article class="blog-details">
                        <div class="blog-details-content">
                           <h1 class="main-title mb-30">{{ $post->title }}</h1>
                           <ul class="blog-details-meta">
                              <li class="blog-author">
                                 <a href="#">
                                    <img src="{{ $post->user->profile_photo_url }}" alt="">
                                 </a>
                                 <a href="#">
                                    <span>{{$post->user->name}}</span>
                                 </a>
                              </li>
                              <li class="author-name">
                                 <a href="#" rel="bookmark">
                                    <time class="entry-date published updated" datetime="2022-01-25T10:55:00+06:00">January 25, 2022</time>
                                 </a>
                              </li>
                              <li class="blog-category">
                                 <a href="#" rel="category tag">Development</a>
                              </li>
                              <li class="blog-read-time">8 mins read</li>
                           </ul>
                           <div class="blog-body">
                            {{$post->content}}
                           </div>
                           <div class="blog-tags">
                              <ul>
                                 <li><a href="#">Design Process</a></li>
                                 <li><a href="#">Prototype</a></li>
                                 <li><a href="#">Design Process</a></li>
                                 <li><a href="#">Prototype</a></li>
                              </ul>
                           </div>
                           <div class="blog-share">
                              <span>Share this article:</span>
                              <ul>
                                 <li>
                                    <a href="#" class="facebook">
                                       <i class="uil uil-facebook-f"></i>
                                       share
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#" class="twitter">
                                       <i class="uil uil-twitter"></i>
                                       tweet
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#" class="pinterest">
                                       <i class="lab la-pinterest"></i>
                                       share
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#" class="linkedin">
                                       <i class="uil uil-linkedin"></i>
                                       share
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#" class="link copy-to-clickboard">
                                       <i class="uil uil-copy"></i>
                                       copy
                                    </a>
                                 </li>
                              </ul>
                           </div>

                           <div class="blog-author-box media">
                              <div class="auth-img">
                                 <img class="w-70" src="{{ $post->user->profile_photo_url }}" alt="">
                              </div>
                              <div class="auth-details media-body">
                                 <span>Escrito por</span>
                                 <h2>{{$post->user->name}}</h2>
                                 <p>Rabbi Islam Rony is a British writer and social media manager specializing in dynamic
                                    branding, campaign strategy and content engagement. </p>
                              </div>
                           </div>
                        </div>
                        <div class="blog-share-top">
                           <div class="blog-share-fixed">
                              <span>share</span>
                              <ul>
                                 <li>
                                    <a href="#" class="facebook">
                                       <i class="uil uil-facebook-f"></i>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#" class="twitter">
                                       <i class="uil uil-twitter"></i>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#" class="pinterest">
                                       <i class="lab la-pinterest"></i>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#" class="linkedin">
                                       <i class="uil uil-linkedin"></i>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#" class="link copy-to-clickboard">
                                       <i class="uil uil-copy"></i>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </article>
                  </div>
               </div>
               <!-- ends: .row -->
            </div>
         </div>
