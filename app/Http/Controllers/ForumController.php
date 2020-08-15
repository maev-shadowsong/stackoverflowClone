<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as FacadesDB;
use DB;
use App\Diskusi;
use App\Tag;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diskusi = Diskusi::all();
        return view('forum.index', compact('diskusi'));
    }
    public function indexku()
    {
        $diskusi = Diskusi::all();
        return view('forum.pertanyaanku', compact('diskusi'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forum.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|unique:diskusi|max:255',
            'isi' => 'required',
            'type_diskusi' => 'pertanyaan'
        ]);
        $post = Diskusi::create([
            "judul" => $request["judul"],
            "isi" => $request["isi"],
            "type_diskusi" => $request["Pertanyaan"]
        ]);
        $post = Tag::create([
            "value" => $request["tag"]
        ]);
        return redirect('/forum/pertanyaanku')->with('success', 'Pertanyaan berhasil diajukan');

        // return redirect()->route('forum.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $diskusi = Diskusi::find($id)->with(['Tags', 'Users', 'Votes', 'Jawabans', 'Koments', 'KomentsJawab'])->get();
        return view('forum.show', compact('diskusi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Diskusi::find($id);
        return view('forum.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $request->validate([
        // 'judul' => 'required|unique:pertanyaan',
        //  'isi' => 'required'
        //  ]);
        $update = Diskusi::where('id', $id)->update([
            "judul" => $request["judul"],
            "isi" => $request["isi"]
        ]);
        return redirect('/forum/pertanyaanku')->with('success', 'Data telah berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Diskusi::destroy($id);
        return redirect('/forum/pertanyaanku')->with('successs', 'post berhasil dihapus');
    }


    public function jawaban()
    {
        return view('forum.jawaban');
    }

    public function store_jawaban(Request $request)
    {
        $request->validate([
            'jawaban' => 'required|unique:diskusi|max:255',
            'type_diskusi' => 'jawaban'
        ]);

        $post = Diskusi::create([
            "jawaban" => $request["jawaban"],
        ]);
        return redirect('/forum/jawaban')->with('success', 'Jawaban berhasil disimpan');
    }

    public function komentar()
    {
        return view('forum.komentar');
    }

    public function store_komentar(Request $request)
    {
        $request->validate([
            'komentar' => 'required',
            'type_diskusi' => 'komentar'
        ]);
        $post = Diskusi::create([
            "komentar" => $request["komentar"],
            "type_diskusi" => $request["komentar"]
        ]);
        return redirect('/forum/komentar')->with('success', 'Komentar berhasil disimpan');
    }
}
