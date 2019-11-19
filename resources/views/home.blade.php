@extends('layouts.app')

@section('content')
<center>
<div class="container">
    <div class="row">
        <div class="col-md-18">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome Bro
                </div>
            </div>
        </div>
    </div>
</div>
</center>
@endsection
