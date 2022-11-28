<x-backend.layouts.master>
    <x-slot name="pageTitle">
       OnePlus Phone
    </x-slot>

    <x-backend.elements.breadcrumb>
        <x-slot name="pageHeader"> <p style="color: rgb(156, 11, 11); display:inline">Mobile </p> Phone Dokan </x-slot>
    </x-backend.elements.breadcrumb>
    
  <div class="card mb-4">
      <div class="card-header">
          <i class="fas fa-table me-1"></i>
          
          {{--  --}}
          Products 
          <a href="{{route('products.create')}}" 
          style="background-color: brown;
          text-decoration:none;
          color:white; 
          padding:6px ; 
          border-radius:10px;
          float:right;">Add Phones <i class="fas fa-plus"></i></a>
      </div>
      <div class="card-body">

          @if(session('message'))
          
              <div class="alert alert-success">
                  <strong>{{session('message')}}</strong>
              </div>
          @endif
    <table class="table table-striped" style="color: rgb(255, 255, 255);font-size:16px;border-radius:20px">
        <thead>
            <tr style="background-color:brown;">
              <th scope="col">#SL</th>
              <th scope="col">Name</th>
              <th scope="col">Category Name</th>
              <th scope="col">Brand Name</th>
              <th scope="col">Description</th>
              <th scope="col">Price ৳</th>
              <th scope="col">Image</th>
              <th scope="col">Status</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            @php
             $sl=0   
            @endphp

            @foreach ($products as $mobile)
            <tr style="background-color:rgb(255, 255, 255);color:rgb(150, 15, 15)">
                <td>{{ ++$sl }}</td>
                <td>{{ $mobile -> name  }}</td>
                <td>{{ $mobile -> category_name  }}</td>
                <td>{{ $mobile -> brand_name  }}</td>
                <td style="width: 20%">{{ $mobile -> description  }}</td>
                <td>{{ $mobile -> price }} <span> ৳</span></td>
                <td><img src="{{ Storage::url($mobile-> image) }}" alt="" height="100px"></td>
                <td>
                  @if ($mobile -> status == 1)
                      <p>Active</p>
                  @else
                      <p>Deactive</p>
                  @endif
                </td>
                <td>
                    <a class="btn btn-primary" href="{{route('products.edit',['product'=>$mobile-> id])}}"><i class="fa fa-edit"></i></a>
                    <form action="{{route('products.destroy',['product'=> $mobile -> id])}}" method="post" enctype="multipart/form-data" style="display: inline;">
                    @csrf
                    @method('delete')
                      
                      <button type= "submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                    </form>
                </td>
              </tr>      
            @endforeach
            
          </tbody>
      </table>
    </div>
  </div>    
</x-backend.layouts.master>