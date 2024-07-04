<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class OperatorController extends Controller
{
    public function index()
    {
        $title = 'Operator';
        $operator = User::get();
        $no = 1;

        return view('admin.operator.operator', compact(
            'title',
            'operator',
            'no'
        ));
    }

    public function tambah()
    {
        $title = 'Tambah Operator';

        return view('admin.operator.operator_tambah', compact(
            'title'
        ));
    }

    public function action_tambah(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;

        $operator = new User();
        $operator->name = $name;
        $operator->email = $email;
        $operator->password = bcrypt($password);

        $operator->save();
        return redirect('/operator')->with('success', 'Operator berhasil di tambah.');
    }

    public function edit($id)
    {
        $title = 'Edit Operator';
        $detail = User::findOrFail($id);

        return view('admin.operator.operator_edit', compact(
            'title',
            'detail'
        ));
    }

    public function action_edit($id, Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;

        $operator = User::findOrFail($id);
        $operator->update([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt($password)
        ]);

        return redirect('/operator')->with('success', 'Operator berhasil di update.');
    }
}
