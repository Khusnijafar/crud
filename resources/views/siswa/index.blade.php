@extends('layouts.master')

@section('content')   
     @if(session('success'))
     <div class="alert alert-success" role="alert">
        {{session('success')}}
     </div>
     @endif
        <div class="row">
            <div class="col-6">
              <h1>Student List</h1>
            </div>
          <div class="col-6">
        </div>
      
        <table class="table table-hover">
             <tr>
                <th>FIRST NAME</th>
                <th>LAST NAME</th>
                <th>GENDER</th>
                <th>AGE</th>
                <th>ADDRESS</th>
                <th>ACTION</th>
             </tr>
                @foreach($data_siswa as $siswa) 
             <tr>
                <td>{{$siswa->first_name}}</td>
                <td>{{$siswa->last_name}}</td>
                <td>{{$siswa->gender}}</td>
                <td>{{$siswa->age}}</td>
                <td>{{$siswa->address}}</td>
                <td>
                    <a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning">Edit</a> 
                    <a href="/siswa/{{$siswa->id}}/delete" class="btn btn-danger" onClick="return confirm('Are you sure?')">Delete</a>
                </td>
             </tr>
                @endforeach
        </table>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
                Add Data
              </button>
        </div>
    </div>       


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                   </button>
                 </div>
                  <div class="modal-body">
                 <form action="/siswa/create" method="POST">
                 {{csrf_field()}}
                 <div class="form-group">
                  <label for="exampleInputEmail1">First Name</label>
                  <input name="first_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First Name">
                 </div>
    
                 <div class="form-group">
                  <label for="exampleInputEmail1">Last Name</label>
                  <input name="last_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Last Name">
     
                 <div class="form-group">
                 <label for="exampleFormControlSelect1">Gender</label>
                 <select name="gender" class="form-control" id="exampleFormControlSelect1">
                   <option value="M">Male</option>
                   <option value="F">Female</option>
                 </select>
                 </div>
                
                 <div class="form-group">
                  <label for="exampleInputEmail1">Age</label>
                  <input name="age" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Age">
                 </div>

                 <div class="form-group">
                  <label for="exampleFormControlTextarea1">Address</label>
                  <textarea name="address" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                 </div>
                 
                
                  </div>
                 <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                 <button type="submit" class="btn btn-primary">Submit</button>
                 </form>
             </div>
            </div>
          </div>
    
@endsection

        