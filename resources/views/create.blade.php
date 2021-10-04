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

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Update Book</p>
                    <form action="{{url('/home/create')}}" method="post">
                        @csrf
                        <div class="d-flex flex-row align-items-center mb-4">
                            <div class="form-outline flex-fill mb-0">
                            <input type="text" name="author" id="author" placeholder="Author" class="form-control">
                            </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                            <div class="form-outline flex-fill mb-0">
                            <input type="text" name="title" id="title" placeholder="Book Title" class="form-control">
                            </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                            <div class="form-outline flex-fill mb-0">
                                <input type="text" name="description" id="description" placeholder="Description" class="form-control">
                            </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                            <div class="form-outline flex-fill mb-0">
                            <input type="text" name="price" id="price" placeholder="Price" class="form-control">
                            </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                            <div class="form-outline flex-fill mb-0">
                            <input type="text" name="quantity" id="quantity" placeholder="Quantity" class="form-control">
                            </div>
                        </div>

                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                            <button type="submit" class="btn btn-primary btn-lg">Add Book</button>
                        </div>
                        <div class="mt-2"><a href="{{ url('/home') }}" class="btn btn-primary w-100 text-white">Cancel</a></div>
                    </form>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection