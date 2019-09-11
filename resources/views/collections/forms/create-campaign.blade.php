@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Please record pledges & cash received from comrades for a campaign</div>

                <div class="card-body">
                	{{-- REACT widget --}}
                    <div id="collection-create-campaign"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
