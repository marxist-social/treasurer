@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Please record cash collected from comrades for subs.<br>Use 'pre-fill with branch members' and your <a href="#" target="_blank">branch account settings</a> to save time.</div>

                <div class="card-body">
                	{{-- REACT widget --}}
                    <div id="collection-create-subs"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
