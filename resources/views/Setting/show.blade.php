@extends('layouts.app')


@section('content')
<div class="card" style="margin: 20px">
    <div class="card-body">
      <h5 class="card-title">Table with Setting Data</h5>

      <!-- Table with stripped rows -->
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Image</th>
            <th scope="col">Category Id</th>
            <th scope="col">Meta Id</th>
            <th scope="col">Content</th>
            <th scope="col">Quantity</th>
            <th scope="col">Evaluation</th>
            <th scope="col">Old price</th>
          </tr> 
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{$setting->id}}</th>
                <td>{{$setting->logo}}</td>
                <td>{{$setting->desc}}</td>
                <td>{{$setting->title}}</td>
                <td>{{$setting->Service_id}}</td>
              </tr>
        </tbody>
      </table>
      <a href="{{route("Setting.index")}}" class="btn btn-primary btn-icon-split">
        <span class="icon text-white-50">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5"/>
          </svg>
        </span>
        <span class="text">Go Back</span>
    </a>
    </div>
  </div>

  @endsection

