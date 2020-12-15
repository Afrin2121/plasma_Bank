@extends('layouts.master')



@section('title')
Dashboard | Plasma Bank
@endsection


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">PlasmaBank_Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Are you fully recovered from a verified COVID-19 diagnosis? If so, the plasma in your blood may contain COVID-19 antibodies that can attack the virus. This convalescent plasma is being evaluated as a possible treatment for currently ill COVID-19 patients, so your donation could help save the lives of patients battling this disease!

It’s a special gift only those who have recovered from the virus can give, so sign up to help today. 

-You are at least 17 years old and weigh 110 lbs.
 -Additional weight requirements apply for donors age 18 or younger.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



@section('scripts')

@endsection
