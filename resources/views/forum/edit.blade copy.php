@extends('adminlte.master')

@section('content')
<div class="container">
    <div class="card card-primary pt-3 ml-3">
        <div class="card-header">
            <h3 class="card-title">Form Edit Pertanyaan{{$diskusi->id}}</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="/forum/{{$diskusi->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" value="{{ old('judul', $diskusi-> judul) }}" placeholder="tulis judul pertanyaan anda disini">
                    @error('judul')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="isi">Isi</label>
                    <textarea cols="144" rows="10" class="form-control" id="isi" name="isi" value="{{ old('isi', $diskusi->isi) }}" placeholder="tuliskan detail pertanyaan anda disini"></textarea>
                    @error('isi')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
        </>
    </div>
    @endsection