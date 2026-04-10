<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name'            => ['required', 'string', 'max:255'],
            'email'           => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'nip'             => ['required', 'string', 'unique:users'],
            'status_karyawan' => ['required', 'in:tetap,kontrak,magang'],
            'role'            => ['required', 'in:admin,karyawan'],
            'jenis_kelamin'   => ['required', 'in:L,P'],
            'password'        => ['required', 'string', 'min:8'],
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'name'            => $data['name'],
            'email'           => $data['email'],
            'nip'             => $data['nip'],
            'status_karyawan' => $data['status_karyawan'],
            'role'            => $data['role'],
            'jenis_kelamin'   => $data['jenis_kelamin'],
            'password'        => Hash::make($data['password']),
        ]);
    }
}   