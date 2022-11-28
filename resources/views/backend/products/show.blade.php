<x-backend.layouts.master>
    <x-slot name="pageTitle">
       OnePlus Phone
    </x-slot>

    <x-backend.elements.breadcrumb>
        <x-slot name="pageHeader"> <p style="color: rgb(156, 11, 11); display:inline">OnePlus</p> Phone </x-slot>
    </x-backend.elements.breadcrumb>

    <main>   
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header"><h3 class="text-center font-weight-light my-4" >Specifications</h3></div>
                        <div class="card-body">
                            <dl class="row">
                                
                                <dt class="col-sm-3">Brand Name </dt>
                                <dd class="col-sm-9">{{$product -> name}}</dd>
                                <dt class="col-sm-3">Slug</dt>
                                <dd class="col-sm-9">{{$product -> slug}}</dd>
                                <dt class="col-sm-3">Details</dt>
                                <dd class="col-sm-9">{{$product -> details}}</dd>
                                <dt class="col-sm-3">Price</dt>
                                <dd class="col-sm-9">{{$product -> price}}</dd>
                                <dt class="col-sm-3">Image</dt>
                                <dd class="col-sm-9">
                                    <img src="{{ Storage::url($product->image) }}" alt="" width="350px">
                                </dd>
                                {{-- <dt class="col-sm-3">Description</dt>
                                <dd class="col-sm-9">{{$product -> description}}</dd> --}}
                            </dl>
                        
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
        <main>

</x-backend.layouts.master>