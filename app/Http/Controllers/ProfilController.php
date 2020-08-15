<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function edit() {
        return view('forum.profil');
    }

    public function update(Request $request) {

        $foto = $request->file('foto')->store('photos');

        $request->User()->update([
            'foto' => $foto
        ]);

        return redirect('/index')->with('success', 'Foto Berhasil Disimpan!');
    }

}
