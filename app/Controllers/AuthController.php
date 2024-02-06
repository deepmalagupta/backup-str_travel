<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\LoginModel;

class AuthController extends BaseController
{
    public function __construct()
    {
        helper(['session', 'form']); // Load necessary helpers
        $this->loginModel = new LoginModel();
    }

    //************************* LOGIN ***************************//

    public function login()
    {
        return view('login');
    }

    public function processLogin()
    {

        $session = session();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Validate input (you might want to add more validation)
        $validationRules = [
            'username' => 'required',
            'password' => 'required|min_length[4]',
        ];

        if (!$this->validate($validationRules)) {
            $session->setFlashdata('error', $this->validator->getErrors());
            return redirect()->to('/login');
        }
        
        // Hash the entered password for comparison
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        // echo '<pre>'; print_r($hashedPassword );die;


        // Check user credentials
        $user = $this->loginModel->getUserByUsername($username);

        if ($user && password_verify($password, $user['password'])) {
            // Login successful
            $session->set('userdata', $user);
            $info = [
                    'id' => session()->userdata['id'],
                    'ip_address' => $this->request->getIPAddress(),
                    'action' => "logged into the system"
                ];

            log_message('custom', 'User:{id} --> Action:{action} --> IP:{ip_address}', $info);
            return redirect()->to('/home');
        } else {
            // Login unsuccessful
            $session->setFlashdata('error', 'Invalid username or password');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        session()->destroy();
        $info = [
                    'id' => session()->userdata['id'],
                    'ip_address' => $this->request->getIPAddress(),
                    'action' => "log out the system"
                ];

        log_message('custom', 'User:{id} --> Action:{action} --> IP:{ip_address}', $info);

        return redirect()->to('/login');
    }
}
