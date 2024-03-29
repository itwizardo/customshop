@extends('admin.layout')
@section('main')
    <h1>Sessions</h1>
    <div class="row">
        <div class="col-md-12">

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">IP</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Status</th>
                        <th scope="col">Sessions Started</th>
                        <th scope="col">Sessions Updated At</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sessions as $session)
                        @php
                            $interval =  now()->subMinutes(5);
                            // $interval = \Carbon\Carbon::parse($session->last_active)->diff(now());
                        @endphp
                        <tr>
                            <td>
                                @if ($session->last_active >= $interval)
                                    <span class="badge badge-success">online</span>
                                @else
                                    <span class="badge badge-secondary">offline</span>
                                @endif
                                {{ $session->ip }}
                            </td>
                            <td>{{ $session->full_name }}</td>
                            <td>{{ $session->email }}</td>
                            <td><span class="badge badge-info"> {{str_replace('/', '', $session->status)}} </span></td>
                            <td>{{ $type == 'active' ? $session->created_at->diffForHumans() : $session->created_at }}</td>
                            <td>{{ $type == 'active' ? $session->updated_at->diffForHumans() : $session->updated_at }}</td>
                            <td><a href="{{ route('admin.session', ['session' => $session->id]) }}"
                                    class="btn btn-dark">Take
                                    Action</a></td>
                        </tr>
                    @endforeach

                </tbody>
            </table>

            {{ $sessions->links('pagination::bootstrap-4') }}
        </div>
    </div>
@endsection
