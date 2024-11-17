<?php 
namespace App\Controllers;

use App\Models\UserModel;

class LoginController extends BaseController {
    public function index() {
        return view('login');
    }

    public function authenticate() {
        $userModel = new UserModel();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $userModel->where('username', $username)->first();

        if ($user && password_verify($password, $user['password'])) {
            session()->set('logged_in', true);
            return redirect()->to('/home');
        } else {
            return redirect()->back()->with('error', 'Invalid login credentials');
        }
    }
}
