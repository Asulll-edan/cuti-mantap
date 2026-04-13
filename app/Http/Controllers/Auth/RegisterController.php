<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:user,email'], 
            'nip' => ['nullable', 'string', 'unique:user,nip'],  
            'status_karyawan' => ['nullable', 'string'],
            'role' => ['nullable', 'string'],
            'jenis_kelamin' => ['nullable', 'string'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'nama' => $data['name'],
            'email' => $data['email'],
            'nip' => $data['nip'] ?? null,
            'status_karyawan' => $data['status_karyawan'] ?? null,
            'role' => $data['role'] ?? 'karyawan',
            'jenis_kelamin' => $data['jenis_kelamin'] ?? null,
            'password' => Hash::make($data['password']),
        ]);
    }
}