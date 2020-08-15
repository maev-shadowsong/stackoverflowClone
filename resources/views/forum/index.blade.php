@extends('adminlte.master')

@section('content')
<div class="container">
  <div class="row mb-5 pt-4">
    <div class="col-10">
      <h3 class="ml-5">Daftar Pertanyaan</h3>
    </div>
    <div class="col">
      <a class="btn btn-primary mb-2" href="/forum/create"> Bertanya ? </a>
    </div>
  </div>

  <div class="question">
    @foreach($diskusi as $topic)
    <div class="row border pt-2">
      <div class="col ml-3">
        <div class="row mt-4">
          <div class="col">
            <div class="count">{{$topic->votes->sum('value')}}</div>
            <div class="count-categories"><a href="">votes</a></div>
          </div>
          <div class="col">
            <div class="count">{{$topic->jawabans->count()}}</div>
            <div class="count-categories"><a href="">answer</a></div>
          </div>
          <div class="col">
            <div class="count">0</div>
            <div class="count-categories"><a href="">views</a></div>
          </div>
        </div>
      </div>

      <div class="col-9 ml-3 pt-3">
        {{-- judul --}}
        <h4><a href="/forum/{{$topic->id}}">{{$topic->judul}}</a></>
            {{-- batas judul --}}
          <div class="d-flex bd-highlight mb-1">

            {{-- tags --}}
            @foreach($topic->tags as $tag)
            <div class="bd-highlight"><a href="" class="tag">{{$tag->value}}</a></div>
            @endforeach
            {{-- batas tags --}}

            {{-- pembuat pertanyaan + date --}}
            <div class="ml-auto p-2 bd-highlight">ditanyakan pada {{date('d-m-Y', strtotime($topic->created_at))}} <a href="">{{$topic->Users->name}}</a> <b>{{$topic->Users->reputasi}}</b></div>
            {{-- batas pembuat pertanyaan + date --}}
          </div>
        </h4>
      </div>
    </div>
    @endforeach
  </div>
</div>

@endsection
