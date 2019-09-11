@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">You'd like to record a new cash collection. What are you collecting cash for?</div>

                <div class="card-body">
                    <ul>
                        <li><a href="{{ route('cashcollections.create') }}/campaign">Campaign</a></li>
                        <li><a href="{{ route('cashcollections.create') }}/levy">Levy</a></li>
                        <li><a href="{{ route('cashcollections.create') }}/subs">Subs</a></li>
                        <li><a href="{{ route('cashcollections.create') }}/table">Merch table</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
