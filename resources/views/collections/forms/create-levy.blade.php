@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Please record the total cash received in the levy</div>

                <div class="card-body">
                	{{-- REACT widget --}}
                    <div id="collection-create-levy"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
