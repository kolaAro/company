@extends('layouts.app')

         @section('content')
             <h1>contact</h1>
                  @if (Session::has('status'))
                          <div class="alert alert-success">
                              <button class="close" data-close="alert"></button>
                              <ul>
                                  <li> {{Session::get('status')}}</li>
                              </ul>
                          </div>
                  @endif
<form action="{{route('contact')}}" method="POST">
{{csrf_field()}}
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" class="form-control" id="formGroupExampleInput2" placeholder="Name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Message</label>
    <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <button class="btn btn-primary">Submit</button>

</form>



@endsection
