@extends('layouts.master')



@section('title')
   Donors | Plasma Bank
@endsection


@section('content')

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Donor Registration</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
               
            </div>
        <form action="/save-donors" method="POST">
              {{ csrf_field() }}
           <div class="modal-body">
                
                    <div class="form-group">
                       <label for="recipient-name" class="col-form-label">Name:</label>
                      <input type="text" name="Name" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                       <label for="recipient-name" class="col-form-label">Age:</label>
                      <input type="text" name="Age" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                       <label for="recipient-name" class="col-form-label">Address:</label>
                      <input type="text" name="Address" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                       <label for="recipient-name" class="col-form-label">Mobile:</label>
                      <input type="text" name="Mobile" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                       <label for="recipient-name" class="col-form-label">Email:</label>
                      <input type="email" name="Email" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                         <label for="recipient-name" class="col-form-label">BloodGroup:</label>
                         <select id="BloodGroup" type="option" class="form-control" name="BloodGroup">
                            <option disabled="disabled" selected="selected">--Choose Option</option>
                            <option> A+ </option>
                            <option> A- </option>
                            <option> B+ </option>
                            <option> B- </option>
                            <option> O+ </option>
                            <option> O- </option>
                            <option> AB+ </option>
                            <option> AB- </option>
                         </select>
                    </div>
                    <div class="form-group">
                       <label for="recipient-name" class="col-form-label">BloodPressure:</label>
                       <select id="BloodPressure" type="option" class="form-control" name="BloodPressure">
                            <option disabled="disabled" selected="selected">--Choose Option</option>
                            <option> High </option>
                            <option> Low </option>
                            <option> Normal </option>
                        </select>

                    </div>
                    <div class="form-group">
                       <label for="recipient-name" class="col-form-label">Covidpositive?:</label>
                       <select id="Covidpositive" type="option" class="form-control" name="Covidpositive">
                            <option disabled="disabled" selected="selected">--Choose Option</option>
                            <option> YES </option>
                            <option> NO </option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="message-text" class="col-form-label">RecoveryDate:</label>
                      <input type="RecoveryDate" name="RecoveryDate" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                       <label for="recipient-name" class="col-form-label">Certified?:</label>
                       <select id="Certified" type="option" class="form-control" name="Certified">
                            <option disabled="disabled" selected="selected">--Choose Option</option>
                            <option> YES </option>
                            <option> NO </option>
                        </select>
                    </div>
                 
            </div>
        <div class="modal-footer">
           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
           <button type="submit" class="btn btn-primary">SAVE</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                   <h4 class="card-title"> Donors Registration
                   <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">ADD</button>
                    </h4>
                  @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                  @endif
               </div>
               <style>
                   .w-10p{
                      width: 10% !important;
                   }
               </style>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="datatable" class="table">
                    <thead class=" text-primary">
                      <th class="w-10p"> ID</th>
                      <th class="w-10p">Name</th>
                      <th class="w-10p">Age</th>
                      <th class="w-10p">Address</th>
                      <th class="w-10p">Mobile</th>
                      <th class="w-10p">Email</th>
                      <th class="w-10p">BloodGroup</th>
                      <th class="w-10p">BloodPressure</th>
                      <th class="w-10p">Covidpositive</th>
                      <th class="w-10p">RecoveryDate</th>
                      <th class="w-10p">certified</th>
                      <th class="w-10p">EDIT</th>
                    </thead>
                    <tbody>
                     @foreach ($donors as $data)

                     
                      <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->Name }}</td>
                        <td>{{ $data->Age }}</td>
                        <td>{{ $data->Address }}</td>
                        <td>{{ $data->Mobile }}</td>
                        <td>{{ $data->Email }}</td>
                        <td>{{ $data->BloodGroup }}</td>
                        <td>{{ $data->BloodPressure }}</td>
                        <td>{{ $data->Covidpositive }}</td>
                        <td>{{ $data->RecoveryDate }}</td>
                        <td>{{ $data->Certified }}</td>
                        <td>
                          <a href="{{ url('donors/' .$data->id) }}" class="btn btn-success">EDIT</a>
                        </td>
                      </tr>
                      
                      @endforeach
                    </tbody>
                  </table>
                </div>
    </div>
  </div>
</div>
          

@endsection



@section('scripts')
  <script>
    $(document).ready( function () {
      $('#datatable').DataTable();
      });
  </script>

@endsection