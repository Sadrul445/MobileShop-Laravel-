<x-backend.layouts.master>
    <x-slot name="pageTitle">
      Edit Mobile Phone Dokan 
    </x-slot>

    <x-backend.elements.breadcrumb>
        <x-slot name="pageHeader"> <p style="color: rgb(156, 11, 11); display:inline">Edit OnePlus</p> Phone   </x-slot>
    </x-backend.elements.breadcrumb>
    <main>   
    <form action="{{ route('products.update', ['product'=> $product -> id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="mb-3 row">
            <label for="inputName" class="col-sm-3 col-form-label">Name: </label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="inputName" 
				name="name" value="{{old('name',$product-> name)}}">
                @error('name')
                <div class="small text-danger"> {{$message}}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputCategory" class="col-sm-3 col-form-label">Category Name: </label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="inputCategory" name="category_name" value="{{old('category_name',$product-> category_name)}}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputBrand" class="col-sm-3 col-form-label">Brand Name</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="inputBrand" name="brand_name" value="{{old('brand_name',$product-> brand_name)}}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputPrice" class="col-sm-3 col-form-label">Price: </label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="inputPrice" name="price" value="{{old('price',$product-> price)}}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputDescription" class="col-sm-3 col-form-label">Description: </label>
            <div class="col-sm-9">
                <textarea name="description" id="inputDescription" class="form-control" cols="30" rows="10">{{old('description',$product-> description)}}</textarea>
            </div>
        </div>
        
        <div class="mb-3 row">
            <label for="inputImage" class="col-sm-3 col-form-label">Image: </label>
            <div class="col-sm-9">
                <input type="file" class="form-control" id="inputImage" name="image" value="{{old('image',$product-> image)}}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputImage" class="col-sm-3 col-form-label">Status: </label>
            <div class="col-sm-9">
                
                <div class="form-check">

                    @if ($product -> status == 1)
                    <input class="form-check-input" type="checkbox" value="1" id="flexCheckChecked" name="status" checked>
                    @else
                    <input class="form-check-input" type="checkbox" value="1" id="flexCheckChecked" name="status">
                    @endif
                    
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
</x-backend.layouts.master>