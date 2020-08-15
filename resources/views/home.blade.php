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

                    You are logged in!

                    <div class="mt-5">
                        <a href="/profil">
                            <button type="button" class="btn btn-primary btn-sm">upload foto</button>
                        </div>
                        </a>
                        <div class="mt-2">
                            <a href="/index">
                                <button type="button" class="btn btn-primary btn-sm">masuk forum</button>
                            </div>
                            </a>
                        </div>
                    </div>



            </div>
        </div>
    </div>
</div>
@endsection
