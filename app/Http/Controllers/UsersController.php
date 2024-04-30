<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;


class UsersController extends Controller
{
    public function login(Request $request)
    {
        // Validasi data jika diperlukan
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'nomor_meja' => 'required|numeric',
        ]);
        
        // Ambil email dari request
        $user = $request->email;

        // Cek apakah email berakhir dengan "@student.telkomuniversity"
        if (strpos($user, "@student.telkomuniversity") === false) {
            // Jika tidak, kembalikan ke halaman login dengan pesan error
            return redirect()->back()->withInput()->withErrors(['email' => 'Alamat email harus berakhir dengan "@student.telkomuniversity"']);
        }
        
        // Simpan data ke dalam database
        //$user = new Users();
        //$user->name = $request->name;
        //$user->email = $request->email;
        //$user->nomor_meja = $request->nomor_meja;
        //$user->save();

        // Redirect ke halaman atau lakukan tindakan sesuai kebutuhan Anda
        return redirect()->route('/');
    }
}
