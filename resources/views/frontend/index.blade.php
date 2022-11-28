<x-frontend-layout>
    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
        @foreach ($products as $items)
        <div class="col mb-5">
            <div class="card h-100" style="box-shadow:5px 5px 20px 4px grey;border-radius:12px">
                <!-- Product image-->
                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                <img class="card-img-top" src="{{Storage::url($items -> image)}}" alt="..."  height="230px" width="180px"/>
                <!-- Product details-->
                <div class="card-body p-4">
                    <div class="text-center">
                        <!-- Product name-->
                        <h5 class="fw-bolder">{{ $items -> name}}</h5>
                        <!-- Product price-->
                        <p class="fw-bolder">{{ $items -> price }} ৳</p>

                    </div>
                </div>
                <!-- Product actions-->
                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                    <div class="text-center"><i class="fa fa-plus-square"></i><a class="btn btn-outline-dark mt-auto" href="#">Add Cart</a></div>
                </div>
            </div>
        </div>
        @endforeach


    </div>
</x-frontend-layout> 