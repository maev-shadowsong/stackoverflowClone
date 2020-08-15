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

    <div class="row border pt-2">
      <div class="col ml-3">
        <div class="row mt-3">
          <div class="col">
            <div class="count">0</div>
            <div class="count-categories"><a href="">votes</a></div>
          </div>

          <div class="col">

            <div class="count">0</div>
            <div class="count-categories"><a href="">answer</a></div>
          </div>
          <div class="col">
            <div class="count">0</div>
            <div class="count-categories"><a href="">views</a></div>
          </div>
        </div>
      </div>


      <div class="col-9 ml-3 pt-3">
        @foreach($diskusi as $key=> $post)
        <h4><a href="/forum/{id}/edit">{{$post->judul}}</a></>
          <div class="d-flex bd-highlight mb-1">
            @endforeach

            {{-- tags --}}
            <div class="bd-highlight"><a href="" class="tag">html</a></div>
            <div class="bd-highlight"><a href="" class="tag">css</a></div>
            <div class="bd-highlight"><a href="" class="tag">javascript</a></div>
            <div class="bd-highlight"><a href="" class="tag">bootstrap</a></div>
            {{-- batas tags --}}

            <div class="ml-auto p-2 bd-highlight">dibuat 14/08/2020 <a href="">yoas98</a> <b>247</b></div>
          </div>


      </div>
    </div>
  </div>



</div>

@endsection