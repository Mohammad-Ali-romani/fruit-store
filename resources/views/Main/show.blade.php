@extends('layouts.app')


@section('content')
<div class="card" style="margin: 20px">
    <div class="card-body">
      <h5 class="card-title">Table with Main Data</h5>

      <!-- Table with stripped rows -->
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <td scope="col">Location</td>
            <td scope="col">Email</td>
            <td scope="col">Phone</td>
            <td scope="col">Address</td>
            <td scope="col">Facebook</td>
            <td scope="col">Twitter</td>
            <td scope="col">Linkedin</td>
            <td scope="col">Telegram</td>
            <td scope="col">About As</td>
            <td scope="col">Privacy</td>
            <td scope="col">Condition</td>
            <td scope="col">Policy</td>
            <td scope="col">Faqs</td>
            <td scope="col">Unit</td>
          </tr> 
        </thead>
        <tbody>
            <tr>
              <th scope="row">{{$main->id}}</th>
              <td>{{$main->location}}</td>
              <td>{{$main->email}}</td>
              <td>{{$main->phone}}</td>
              <td>{{$main->address}}</td>
              <td>{{$main->facebook}}</td>
              <td>{{$main->twitter}}</td>
              <td>{{$main->linkedin}}</td>
              <td>{{$main->telegram}}</td>
              <td>{{$main->about_as}}</td>
              <td>{{$main->privacy}}</td>
              <td>{{$main->condition}}</td>
              <td>{{$main->policy}}</td>
              <td>{{$main->faqs}}</td>
              <td>{{$main->unit}}</td>
              </tr>
        </tbody>
      </table>
      <a href="{{route("Main.index")}}" class="btn btn-primary btn-icon-split">
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

