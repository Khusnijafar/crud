@extends('layouts.master')

@section('content')
    <h1>Edit Data</h1>
     @if(session('success'))
     <div class="alert alert-success" role="alert">
        {{session('success')}}
     </div>
     @endif
        <div class="row">
        <div class="col-lg-12">
        <form action="/siswa/{{$siswa->id}}/update" method="POST">
                 {{csrf_field()}}
                 <div class="form-group">
                  <label for="exampleInputEmail1">First Name</label>
                  <input name="first_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First Name" value="{{$siswa->first_name}}">
                 </div>
    
                 <div class="form-group">
                  <label for="exampleInputEmail1">Last Name</label>
                  <input name="last_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Last Name" value="{{$siswa->last_name}}
                  ">
     
                 <div class="form-group">
                 <label for="exampleFormControlSelect1">Gender</label>
                 <select name="gender" class="form-control" id="exampleFormControlSelect1">
                   <option value="M" @if($siswa->gender == 'M') seleted @endif>Male</option>
                   <option value="F" @if($siswa->gender == 'F') seleted @endif>Female</option>
                 </select>
                 </div>
                
                 <div class="form-group">
                  <label for="exampleInputEmail1">Age</label>
                  <input name="age" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Age" value="{{$siswa->age}}">
                 </div>

                 <div class="form-group">
                  <label for="exampleFormControlTextarea1">Address</label>
                  <textarea name="address" class="form-control" id="exampleFormControlTextarea1" rows="3" value="">{{$siswa->address}}</textarea>
                 </div>
                 </div>
                 <div class="modal-footer">
                 <button type="submit" class="btn btn-warning">Update</button>
                 </form>
        </div>
        </div>
 @endsection     
    
     