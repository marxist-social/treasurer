@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>What would you like to do?</p>

                    <ul>
                        <li><a href="{{ route('cashcollection.create') }}">Record new cash collection</a></li>
                        <li><a href="{{ route('cashcollection.index') }}">View / edit previous cash collections</a></li>
                        <li><a href="#">Export my collections by month</a></li>
                        <li><a href="#">Edit my account settings</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
