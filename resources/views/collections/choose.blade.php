@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create a new collection. Which type?</div>

                <div class="card-body">
                    <ul>
                        <li><a href="{{ route('cashcollection.create', ['type' => 'campaign']) }}">Campaign</a></li>
                        <li><a href="{{ route('cashcollection.create', ['type' => 'levy']) }}">Levy</a></li>
                        <li><a href="{{ route('cashcollection.create', ['type' => 'subs']) }}">Subs</a></li>
                        <li><a href="{{ route('cashcollection.create', ['type' => 'table']) }}">Merch Table</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
