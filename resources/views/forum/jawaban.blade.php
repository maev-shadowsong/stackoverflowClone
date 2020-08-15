@extends('adminlte.master')

@section('content')
<div class="container">
    <div class="row pt-4">
        <div class="col-10">
            <h3 class="ml-5">Lorem ipsum dolor sit amet?</h3>
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
                <div style="font-size: 30px; text-align: center; padding: 0;">0</div>
                <a href="" class="vote-down"></a>
            </div>
            <div class="col-md-10 mr-md-auto">
                <p style="font-size: 18px">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum quo incidunt praesentium deserunt, similique ratione magni quibusdam voluptates veritatis iste magnam, illo iusto placeat exercitationem eveniet! Iste magnam doloremque in doloribus. Sequi, totam quia? Magnam repellat architecto vel ad culpa!
                </p>
                {{-- tags --}}
                <div class="d-flex bd-highlight mb-1">
                    <div class="bd-highlight"><a href="" class="tag">html</a></div>
                    <div class="bd-highlight"><a href="" class="tag">css</a></div>
                    <div class="bd-highlight"><a href="" class="tag">javascript</a></div>
                    <div class="bd-highlight"><a href="" class="tag">bootstrap</a></div>
                </div>
                {{-- end tags --}}

                {{-- profil penanya --}}

                <div class="row">
                    <div class="col-md-4 ml-auto">
                        <div style="font-size: 15px; color:gray;">
                            pertanyaan <span>2 jam</span> lalu
                        </div>
                        <div class="d-flex flex-row bd-highlight mb-3">
                            <div class="p-2 bd-highlight">
                                <a href=""><img src="{{ asset('/adminlte/dist/img/user2-160x160.jpg') }}" alt="" class="foto-profil-penanya">
                                </a>
                            </div>
                            <div class="p-2 bd-highlight">
                                <div>
                                    <a href="">yoas98</a>
                                </div>
                                <div>
                                    <b>200</b>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- end profil penanya --}}

                {{-- komentar --}}
                <div class="daftar-komentar">
                    <hr>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero temporibus, quasi corrupti aperiam praesentium odio veritatis doloribus vel enim, magnam fugit voluptatem! Rem, sapiente eaque autem commodi optio dolorem ratione. &nbsp;- <span><b><a href="">naruto</a></b></span> <span style="color: gray">2 jam lalu</span>
                    </p>
                    <hr>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero temporibus, quasi corrupti aperiam praesentium odio veritatis doloribus vel enim, magnam fugit voluptatem! Rem, sapiente eaque autem commodi optio dolorem ratione. &nbsp;- <span><b><a href="">sasuke</a></b></span> <span style="color: gray">2 jam lalu</span>
                    </p>
                    <hr>
                    <div>
                        <a href="">Tambah Komentar</a>
                    </div>
                </div>
                {{-- end komentar --}}
            </div>
        </div>

        <h4 class="ml-4 mb-4">3 jawaban</h4>

        <div class="jawaban">
            <div class="row">
                <div style="width: 90px;">
                    <a href="" class="vote-up"></a>
                    <div style="font-size: 30px; text-align: center; padding: 0;">0</div>
                    <a href="" class="vote-down"></a>
                </div>
                <div class="col-md-10 mr-md-auto">
                    <p style="font-size: 18px">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum quo incidunt praesentium deserunt, similique ratione magni quibusdam voluptates veritatis iste magnam, illo iusto placeat exercitationem eveniet! Iste magnam doloremque in doloribus. Sequi, totam quia? Magnam repellat architecto vel ad culpa!
                    </p>
                    {{-- tags --}}
                    <div class="d-flex bd-highlight mb-1">
                        <div class="bd-highlight"><a href="" class="tag">html</a></div>
                        <div class="bd-highlight"><a href="" class="tag">css</a></div>
                        <div class="bd-highlight"><a href="" class="tag">javascript</a></div>
                        <div class="bd-highlight"><a href="" class="tag">bootstrap</a></div>
                    </div>
                    {{-- end tags --}}
                    {{-- profil penanya --}}

                    <div class="row">
                        <div class="col-md-4 ml-auto">
                            <div style="font-size: 15px; color:gray;">
                                pertanyaan <span>2 jam</span> lalu
                            </div>
                            <div class="d-flex flex-row bd-highlight mb-3">
                                <div class="p-2 bd-highlight">
                                    <a href=""><img src="{{ asset('/adminlte/dist/img/user2-160x160.jpg') }}" alt="" class="foto-profil-penanya">
                                    </a>
                                </div>
                                <div class="p-2 bd-highlight">
                                    <div>
                                        <a href="">yoas98</a>
                                    </div>
                                    <div>
                                        <b>200</b>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- end profil penanya --}}

                    {{-- komentar --}}
                    <div class="daftar-komentar">
                        <hr>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero temporibus, quasi corrupti aperiam praesentium odio veritatis doloribus vel enim, magnam fugit voluptatem! Rem, sapiente eaque autem commodi optio dolorem ratione. &nbsp;- <span><b><a href="">naruto</a></b></span> <span style="color: gray">2 jam lalu</span>
                        </p>
                        <hr>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero temporibus, quasi corrupti aperiam praesentium odio veritatis doloribus vel enim, magnam fugit voluptatem! Rem, sapiente eaque autem commodi optio dolorem ratione. &nbsp;- <span><b><a href="">sasuke</a></b></span> <span style="color: gray">2 jam lalu</span>
                        </p>
                        <hr>
                        <div>
                            <a href="">Tambah Komentar</a>
                        </div>
                    </div>
                    {{-- end komentar --}}
                </div>
            </div>
            <hr>

            <div class="row">
                <div style="width: 90px;">
                    <a href="" class="vote-up"></a>
                    <div style="font-size: 30px; text-align: center; padding: 0;">0</div>
                    <a href="" class="vote-down"></a>
                </div>
                <div class="col-md-10 mr-md-auto">
                    <p style="font-size: 18px">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum quo incidunt praesentium deserunt, similique ratione magni quibusdam voluptates veritatis iste magnam, illo iusto placeat exercitationem eveniet! Iste magnam doloremque in doloribus. Sequi, totam quia? Magnam repellat architecto vel ad culpa!
                    </p>
                    {{-- tags --}}
                    <div class="d-flex bd-highlight mb-1">
                        <div class="bd-highlight"><a href="" class="tag">html</a></div>
                        <div class="bd-highlight"><a href="" class="tag">css</a></div>
                        <div class="bd-highlight"><a href="" class="tag">javascript</a></div>
                        <div class="bd-highlight"><a href="" class="tag">bootstrap</a></div>
                    </div>
                    {{-- end tags --}}
                    {{-- profil penanya --}}

                    <div class="row">
                        <div class="col-md-4 ml-auto">
                            <div style="font-size: 15px; color:gray;">
                                pertanyaan <span>2 jam</span> lalu
                            </div>
                            <div class="d-flex flex-row bd-highlight mb-3">
                                <div class="p-2 bd-highlight">
                                    <a href=""><img src="{{ asset('/adminlte/dist/img/user2-160x160.jpg') }}" alt="" class="foto-profil-penanya">
                                    </a>
                                </div>
                                <div class="p-2 bd-highlight">
                                    <div>
                                        <a href="">yoas98</a>
                                    </div>
                                    <div>
                                        <b>200</b>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- end profil penanya --}}

                    {{-- komentar --}}
                    <div class="daftar-komentar">
                        <hr>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero temporibus, quasi corrupti aperiam praesentium odio veritatis doloribus vel enim, magnam fugit voluptatem! Rem, sapiente eaque autem commodi optio dolorem ratione. &nbsp;- <span><b><a href="">naruto</a></b></span> <span style="color: gray">2 jam lalu</span>
                        </p>
                        <hr>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero temporibus, quasi corrupti aperiam praesentium odio veritatis doloribus vel enim, magnam fugit voluptatem! Rem, sapiente eaque autem commodi optio dolorem ratione. &nbsp;- <span><b><a href="">sasuke</a></b></span> <span style="color: gray">2 jam lalu</span>
                        </p>
                        <hr>
                        <div>
                            <a href="">Tambah Komentar</a>
                        </div>
                    </div>
                    {{-- end komentar --}}
                </div>
            </div>
            <hr>

            <div class="row">
                <div style="width: 90px;">
                    <a href="" class="vote-up"></a>
                    <div style="font-size: 30px; text-align: center; padding: 0;">0</div>
                    <a href="" class="vote-down"></a>
                </div>
                <div class="col-md-10 mr-md-auto">
                    <p style="font-size: 18px">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum quo incidunt praesentium deserunt, similique ratione magni quibusdam voluptates veritatis iste magnam, illo iusto placeat exercitationem eveniet! Iste magnam doloremque in doloribus. Sequi, totam quia? Magnam repellat architecto vel ad culpa!
                    </p>
                    {{-- tags --}}
                    <div class="d-flex bd-highlight mb-1">
                        <div class="bd-highlight"><a href="" class="tag">html</a></div>
                        <div class="bd-highlight"><a href="" class="tag">css</a></div>
                        <div class="bd-highlight"><a href="" class="tag">javascript</a></div>
                        <div class="bd-highlight"><a href="" class="tag">bootstrap</a></div>
                    </div>
                    {{-- end tags --}}
                    {{-- profil penanya --}}

                    <div class="row">
                        <div class="col-md-4 ml-auto">
                            <div style="font-size: 15px; color:gray;">
                                pertanyaan <span>2 jam</span> lalu
                            </div>
                            <div class="d-flex flex-row bd-highlight mb-3">
                                <div class="p-2 bd-highlight">
                                    <a href=""><img src="{{ asset('/adminlte/dist/img/user2-160x160.jpg') }}" alt="" class="foto-profil-penanya">
                                    </a>
                                </div>
                                <div class="p-2 bd-highlight">
                                    <div>
                                        <a href="">yoas98</a>
                                    </div>
                                    <div>
                                        <b>200</b>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- end profil penanya --}}

                    {{-- komentar --}}
                    <div class="daftar-komentar">
                        <hr>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero temporibus, quasi corrupti aperiam praesentium odio veritatis doloribus vel enim, magnam fugit voluptatem! Rem, sapiente eaque autem commodi optio dolorem ratione. &nbsp;- <span><b><a href="">naruto</a></b></span> <span style="color: gray">2 jam lalu</span>
                        </p>
                        <hr>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero temporibus, quasi corrupti aperiam praesentium odio veritatis doloribus vel enim, magnam fugit voluptatem! Rem, sapiente eaque autem commodi optio dolorem ratione. &nbsp;- <span><b><a href="">sasuke</a></b></span> <span style="color: gray">2 jam lalu</span>
                        </p>
                        <hr>
                        <div>
                            <a href="">Tambah Komentar</a>
                        </div>
                    </div>
                    {{-- end komentar --}}
                </div>
            </div>
            <hr>
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