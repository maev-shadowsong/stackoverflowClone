@extends('adminlte.master')

@section('content')
<div class="container">
    <div class="card card-primary pt-3 ml-3">
        <div class="card-header">
        <h3 class="card-title">Form Komentar</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="" method="POST">
            @csrf
        <div class="card-body">
            <div class="form-group">
            <label for="isi">Komentar</label>
            <textarea cols="144" rows="10" class="form-control" id="Komentar" name="Komentar" placeholder="tuliskan komentar anda disini"></textarea>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Posting komentar</button>
        </div>
        </form>
    </div>
</div>
@endsection
