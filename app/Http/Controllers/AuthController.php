<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Member;

class AuthController extends Controller
{
    // Menampilkan halaman welcome sebelum login
    public function welcome()
    {
        return view('welcome'); // pastikan resources/views/welcome.blade.php ada
    }

    // Menampilkan form login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Proses login pakai username
    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        $user = Member::where('name', $credentials['username'])->first();

        if ($user && Hash::check($credentials['password'], $user->password)) {
            session(['logged_in' => true, 'user_id' => $user->id, 'username' => $user->name]);
            return redirect()->route('dashboard');
        }

        return back()->withErrors(['username' => 'Username atau password salah']);
    }

    // Dashboard
    public function dashboard()
    {
        if (!session('logged_in')) {
            return redirect()->route('login');
        }

        return view('dashboard');
    }

    // Logout
    public function logout()
    {
        session()->flush();
        return redirect()->route('login');
    }

    // Menampilkan form register
public function showRegisterForm()
{
    return view('auth.register'); // pastikan resources/views/auth/register.blade.php ada
}

// Proses register
public function register(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255|unique:members,name',
        'email' => 'required|email|max:255|unique:members,email',
        'password' => 'required|string|min:6|confirmed',
    ]);

    Member::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    return redirect()->route('login')->with('success', 'Akun berhasil dibuat, silakan login.');
}

}
