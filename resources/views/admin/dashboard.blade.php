@extends('admin.layout')
@section('main')

    <h1>Hello, {{auth()->user()->name}}</h1>
    <div class="row">
        <div class="col-md-5 col-sm-5 col-xs-12 gutter">

            <div class="sales">
                <h2>Active Sessions ({{$activeSessions}})</h2>

                <div class="btn-group">
                    <a href="{{route('admin.sessions', ['type' => 'active'])}}" class="btn btn-dark">
                        View Sessions
                                            </a>
                   
                </div>
            </div>
        </div>
        <div class="col-md-7 col-sm-7 col-xs-12 gutter">

            <div class="sales report">
                <h2>All Sessions ({{$allSessions}})</h2>
                <div class="btn-group">
                    <a href="{{route('admin.sessions', ['type' => 'all'])}}" class="btn btn-dark">
View Sessions
                    </a>

                </div>
            </div>
        </div>
    </div>

@endsection