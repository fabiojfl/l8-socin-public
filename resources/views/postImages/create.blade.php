
<x-app-layout>
    <div class="contents">   
        <div class="container-fluid">
                <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-main">
                        <h4 class="text-capitalize breadcrumb-title">Form Elements</h4>
                        <div class="breadcrumb-action justify-content-center flex-wrap">
                            <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="uil uil-estate"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Form Elements</li>
                            </ol>
                            </nav>
                        </div>
                    </div>

                </div>
                </div>
                <div class="form-element">
                <div class="row">
                    <div class="col-lg-12">
                    
                            <div class="card  card-default card-md mb-4">
                                <div class="card-header">
                                    <h6>Post Images</h6>
                                </div>
                                <form action="{{route('postImage.store')}}" method="POST" enctype="multipart/form-data">
                                    <div class="card-body pb-md-40 pt-md-30">
                                    @csrf
                                    
                                                <input type="file" name="post_photo_path" class="form-control" >
                                                <button type="submit" class="btn btn-outline-secondary" id="">Enviar</button>
                                           
                                 
                                    </div>
                                </form>
                            </div>
                        
                        <!-- ends: .card -->
                    </div>
                
                </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>