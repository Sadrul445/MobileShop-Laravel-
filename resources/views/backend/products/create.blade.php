<x-backend.layouts.master>
    <x-slot name="pageTitle">
       Mobile Phone Dokan : Create  
    </x-slot>

    <x-backend.elements.breadcrumb>
        <x-slot name="pageHeader"> <p style="color: rgb(156, 11, 11); display:inline">Mobile </p> Phone Dokan </x-slot>
    </x-backend.elements.breadcrumb>
    <main>   
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header"><h3 class="text-center font-weight-light my-4" >Add New</h3></div>
                        <div class="card-body">
                            
            
                            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3 row">
                                    <label for="inputName" class="col-sm-3 col-form-label"> Name: </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputName" name="name" value="">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputCat" class="col-sm-3 col-form-label">Category Name: </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputCat" name="category_name" value="">
                                        @error('category_name')
                                        <div class="small text-danger"> {{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputBrandName" class="col-sm-3 col-form-label"> Brand Name: </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputBrandName" name="brand_name" value="">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputDescription" class="col-sm-3 col-form-label"> Description: </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputDescription" name="description" value="">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputPrice" class="col-sm-3 col-form-label"> Price: </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputPrice" name="price" value="">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputImage" class="col-sm-3 col-form-label">Image: </label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control" id="inputImage" name="image" value="">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputStatus" class="col-sm-3 col-form-label">Status: </label>
                                    <div class="col-sm-9">
                                        {{-- <input type="text" class="form-control" id="inputstatus" name="status" value=""> --}}
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="1" id="flexCheckChecked" name="status">
                                            <label class="form-check-label" for="flexCheckChecked">
                                              Checked
                                            </label>
                                          </div>
                                    </div>
                                </div>
                                
                                <div class="mb-3 row">
                                    <div class="col-sm-9 offset-3">
                                    <button class="btn btn-success" type="submit">
                                        Submit
                                    </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <main>
</x-backend.layouts.master>