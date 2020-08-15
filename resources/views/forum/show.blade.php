@extends('adminlte.master')

@section('content')
<div class="container">
    <div class="row pt-4">
        <div class="col-10">
            <h3 class="ml-5">{{$diskusi[0]->judul}}</h3>
        </div>
        <div class="col">
            <button type="button" class="btn btn-info">Bertanya?</button>
        </div>
    </div>
    <hr>
    <div>
        <div class="row mb-5">
            <div style="width: 90px;">
                <a href="" class="vote-up"></a>
                <div style="font-size: 30px; text-align: center; padding: 0;">{{$diskusi[0]->votes->sum('value')}}</div>
                <a href="" class="vote-down"></a>
            </div>
            <div class="col-md-10 mr-md-auto">
                <p style="font-size: 18px">
                    {{$diskusi[0]->isi}}
                </p>
                {{-- tags --}}
                <div class="d-flex bd-highlight mb-1">
                    @foreach($diskusi[0]->tags as $tag)
                    <div class="bd-highlight"><a href="" class="tag">{{$tag->value}}</a></div>
                    @endforeach
                </div>
                {{-- end tags --}}

                {{-- profil penanya --}}

                <div class="row">
                    <div class="col-md-4 ml-auto">
                        <div style="font-size: 15px; color:gray;">
                            ditanyakan pada <span>{{date('d-m-Y', strtotime($diskusi[0]->created_at))}}</span>
                        </div>
                        <div class="d-flex flex-row bd-highlight mb-3">
                            <div class="p-2 bd-highlight">
                                <a href=""><img src="{{ asset('/adminlte/dist/img/user2-160x160.jpg') }}" alt="" class="foto-profil-penanya">
                                </a>
                            </div>
                            <div class="p-2 bd-highlight">
                                <div>
                                    <a href="">{{$diskusi[0]->Users->name}}</a>
                                </div>
                                <div>
                                    <b>{{$diskusi[0]->Users->reputasi}}</b>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- end profil penanya --}}

                {{-- komentar --}}
                <div class="daftar-komentar">
                    @foreach($diskusi[0]->koments as $komen)
                    <hr>
                    <p>
                        {{$komen->isi}} &nbsp;- <span><b><a href="">{{$komen->Users->name}}</a></b></span> <span style="color: gray">{{date('d-m-Y', strtotime($komen->created_at))}}</span>
                    </p>
                    <hr>
                    @endforeach
                    <div>
                        <a href="">Tambah Komentar</a>
                    </div>
                </div>
                {{-- end komentar --}}
            </div>
        </div>

        <h4 class="ml-4 mb-4">{{$diskusi[0]->jawabans->count()}} jawaban</h4>

        <div class="jawaban">
            @foreach($diskusi[0]->jawabans as $jawaban)
            <div class="row">
                <div style="width: 90px;">
                    <a href="" class="vote-up"></a>
                    <div style="font-size: 30px; text-align: center; padding: 0;">{{$jawaban->votes->sum('value')}}</div>
                    <a href="" class="vote-down"></a>
                </div>
                <div class="col-md-10 mr-md-auto">
                    <p style="font-size: 18px">
                        {{$jawaban->isi}}
                    </p>
                    {{-- profil penanya --}}

                    <div class="row">
                        <div class="col-md-4 ml-auto">
                            <div style="font-size: 15px; color:gray;">
                                dijawab pada <span>{{$jawaban->created_at}}</span>
                            </div>
                            <div class="d-flex flex-row bd-highlight mb-3">
                                <div class="p-2 bd-highlight">
                                    <a href=""><img src="{{ asset('/adminlte/dist/img/user2-160x160.jpg') }}" alt="" class="foto-profil-penanya">
                                    </a>
                                </div>
                                <div class="p-2 bd-highlight">
                                    <div>
                                        <a href="">{{$jawaban->Users->name}}</a>
                                    </div>
                                    <div>
                                        <b>{{$jawaban->Users->reputasi}}</b>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- end profil penanya --}}

                    {{-- komentar --}}
                    <div class="daftar-komentar">
                        @foreach($jawaban->KomentsJawab as $komen)
                        <hr>
                        <p>
                            {{$komen->isi}} &nbsp;- <span><b><a href="">{{$komen->Users->name}}</a></b></span> <span style="color: gray">{{date('d-m-Y', strtotime($komen->created_at))}}</span>
                        </p>
                        <hr>
                        @endforeach
                        {{-- <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero temporibus, quasi corrupti aperiam praesentium odio veritatis doloribus vel enim, magnam fugit voluptatem! Rem, sapiente eaque autem commodi optio dolorem ratione. &nbsp;- <span><b><a href="">sasuke</a></b></span> <span style="color: gray">2 jam lalu</span>
                        </p>
                        <hr> --}}
                        <div>
                            <a href="">Tambah Komentar</a>
                        </div>
                    </div>
                    {{-- end komentar --}}
                </div>
            </div>
            <hr>
            @endforeach
        </div>

        {{-- form jawaban --}}
        <div class="card card-primary pt-3 ml-3">
            <div class="card-header">
                <h3 class="card-title">Form Jawaban</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <textarea cols="144" rows="10" class="form-control" id="jawaban" name="jawaban" placeholder="tuliskan jawaban anda disini"></textarea>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Posting Jawaban</button>
                </div>
            </form>
        </div>
        {{-- end form jawaban --}}

    </div>


</div>

@endsection
