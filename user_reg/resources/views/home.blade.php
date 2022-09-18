@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">WELCOME TO @if (Auth::user()->role == 'level1')LEVEL-1 USER DASHBOARD @elseif (Auth::user()->role == 'level2') LEVEL-2 USER DASHBOARD 
                    @elseif (Auth::user()->role == 'level3')LEVEL-3 USER DASHBOARD @elseif (Auth::user()->role == 'admin')ADMIN DASHBOARD @endif</div>

                <div class="card-body">
                        <div class="col-md-12">
                            <h4>{{ Auth::user()->name }}</h4>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
