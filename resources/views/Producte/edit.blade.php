@extends('layouts.app')

@section('content')

@if ($errors->any())
@foreach ($errors->all() as $e )
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error !!!</strong> {{ $e }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
</div>
    @endforeach
    @endif
    <div class="card" style="margin: 60px">
        <div class="card-body">
          <h5 class="card-title">Producte Create Data Form</h5>

          <!-- Vertical Form -->
          <form class="row g-3" action="{{route("Producte.update",$Producte->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="col-12" style="margin: 10px">
              <label for="name" class="form-label">Name</label>
              <input type="text" name="name" class="form-control" id="name" value="{{$producte->name}}">
            </div>
            <div class="col-12" style="margin: 10px">
                <label for="price" class="form-label">Price</label>
                <input type="text" name="price" class="form-control" id="price" value="{{$producte->price}}">
              </div>
            <div class="col-12" style="margin: 10px">
                <label for="desc" class="form-label">Description</label>
                <input type="text" name="desc" class="form-control" id="desc" value="{{$producte->desc}}">
              </div>
            <div class="col-12" style="margin: 10px">
                <label for="image" class="form-label">Image</label>
                <input type="file" name="image" class="form-control" id="image" value="{{$producte->image}}">
              </div>
            <div class="col-12" style="margin: 10px">
                <label for="content" class="form-label">Content</label>
                <input type="text" name="content" class="form-control" id="content" value="{{$producte->content}}">
              </div>
            <div class="col-12" style="margin: 10px">
                <label for="quantity" class="form-label">Quantity</label>
                <input type="text" name="quantity" class="form-control" id="quantity" value="{{$producte->quantity}}">
              </div>
            <div class="col-12" style="margin: 10px">
                <label for="evaluation" class="form-label">Evaluation</label>
                <input type="text" name="evaluation" class="form-control" id="evaluation" value="{{$producte->evaluation}}">
              </div>
            <div class="col-12" style="margin: 10px">
                <label for="old_price" class="form-label">Old Price</label>
                <input type="text" name="old_price" class="form-control" id="old_price" value="{{$producte->old_price}}">
              </div>
              <div class="col-12">
                <select name="category_id" id="" class="form-control">
                    @foreach ($category as $c )
                    <option value="{{ $c->id }}">{{ $c->name }}</option>
                    @endforeach
                </select>
             </div>
             <div class="col-12">
                <select name="meta_id" id="" class="form-control">
                    @foreach ($meta as $me )
                    <option value="{{ $me->id }}">{{ $me->name }}</option>
                    @endforeach
                </select>
             </div>
              <div class="text-center" style="padding: 20px">
                <div class="my-2"></div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-success btn-icon-split">
                        <span class="icon text-white-50">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-plus-fill" viewBox="0 0 16 16">
                                <path d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2m.5 4v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 1 0"/>
                            </svg>
                        </span>
                        <span class="text">Create</span>
                    </button>
                    <button type="reset" class="btn btn-dark btn-icon-split ml-2">
                        <span class="icon text-white-50">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-repeat" viewBox="0 0 16 16">
                                <path d="M11 5.466V4H5a4 4 0 0 0-3.584 5.777.5.5 0 1 1-.896.446A5 5 0 0 1 5 3h6V1.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192m3.81.086a.5.5 0 0 1 .67.225A5 5 0 0 1 11 13H5v1.466a.25.25 0 0 1-.41.192l-2.36-1.966a.25.25 0 0 1 0-.384l2.36-1.966a.25.25 0 0 1 .41.192V12h6a4 4 0 0 0 3.585-5.777.5.5 0 0 1 .225-.67Z"/>
                            </svg>
                        </span>
                        <span class="text">Reset</span>
                    </button>
                </div>
            </div>
            
          </form><!-- Vertical Form -->
          <div class="text-center" >
          <a href="{{route("Producte.index")}}" class="btn btn-primary btn-icon-split" >
            <span class="icon text-white-50">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5"/>
              </svg>
            </span>
            <span class="text">Go Back</span>
        </a>
          </div>
        </div>
      </div>

@endsection