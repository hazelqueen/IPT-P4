@extends('base')

@section('content')
<br><br>
<section class="vh-100">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Delete Book?</p>
                <form action="{{url('/home/delete/' . $item->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <h6 class="mt-2 mb-3">
                        Delete this book {{ $item->title }}? 
                    </h6>
                    
                    <div>
                        <button class="btn btn-danger" type="submit">Delete</button>
                        <a href="{{ url('/home') }}" class="btn btn-primary text-white">Cancel</a>   
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection