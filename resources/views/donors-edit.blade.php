@extends('layouts.master')



@section('title')
   Donors Info Edit | Plasma Bank
@endsection


@section('content')


<div class="row">
    <div class="col-md-12">
        <div class="card">
          <div class="card-header">
             <h4 class="card-title">Donors Information Edit</h4>
             <form action="{{ url('donors-update/' .$donors->id) }}" method="POST">
              {{ csrf_field() }}
              {{ method_field('PUT') }}
           <div class="modal-body">
                
                    
                    <div class="form-group">
                       <label for="recipient-name" class="col-form-label">Address:</label>
                      <input type="text" name="Address" class="form-control" value="{{ $donors->Address }}">
                    </div>
                    <div class="form-group">
                       <label for="recipient-name" class="col-form-label">Mobile:</label>
                      <input type="text" name="Mobile" class="form-control" value="{{ $donors->Mobile }}">
                    </div>
                    <div class="form-group">
                       <label for="recipient-name" class="col-form-label">Email:</label>
                      <input type="email" name="Email" class="form-control" value="{{ $donors->Email }}">
                    </div>
                    
                    <div class="form-group">
                       <label for="recipient-name" class="col-form-label">BloodPressure:</label>
                       <select id="BloodPressure" type="option" class="form-control" name="BloodPressure" value="{{ $donors->BloodPressure }}">
                            <option disabled="disabled" selected="selected">--Choose Option</option>
                            <option> High </option>
                            <option> Low </option>
                            <option> Normal </option>
                        </select>

                    </div>
                    <div class="form-group">
                       <label for="recipient-name" class="col-form-label">Covidpositive?:</label>
                       <select id="Covidpositive" type="option" class="form-control" name="Covidpositive" value="{{ $donors->Covidpositive }}">
                            <option disabled="disabled" selected="selected">--Choose Option</option>
                            <option> YES </option>
                            <option> NO </option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="message-text" class="col-form-label">RecoveryDate:</label>
                      <input type="RecoveryDate" name="RecoveryDate" class="form-control" value="{{ $donors->RecoveryDate }}">
                    </div>
                    <div class="form-group">
                       <label for="recipient-name" class="col-form-label">Certified?:</label>
                       <select id="Certified" type="option" class="form-control" name="Certified" value="{{ $donors->Certified }}">
                            <option disabled="disabled" selected="selected">--Choose Option</option>
                            <option> YES </option>
                            <option> NO </option>
                        </select>
                    </div>
                 
            </div>
          <div class="modal-footer">
              <a href="{{ url('donors') }}" class="btn btn-secondary">BACK</a>
              <button type="submit" class="btn btn-primary">UPDATE</button>
          </div>
       </form>

     </div>
    </div>
  
</div>

</div>
@endsection

