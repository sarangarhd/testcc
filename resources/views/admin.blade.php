@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('') }}
                </div>
                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups" style="margin-left: 40px;">
                    <div>
                        <a class="btn btn-dark"  type="button" class="btn btn-secondary" href="/viewusers">View Users</a>
                        <a class="btn btn-dark"  type="button" class="btn btn-secondary" href="/viewappoinment">appoinments</a>
                        
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
</div>
@endsection