<?php
class Users extends Controller {
    public function __construct() {
        $this->userModel = $this->model('User');
    }

    public function register() {
        // variable of data from page
        $data = [
            'userName' => '',
            'userEmail' => '',
            'userPassword' => '',
            'confirmPassword' => '',
            'usernameError' => '',
            'emailError' => '',
            'passwordError' => '',
            'confirmPasswordError' => ''
        ];

        // if there is a post 
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            // init data array & trim something
            $data = [
                'userName' => trim($_POST['userName']),
                'userEmail' => trim($_POST['userEmail']),
                'userPassword' => trim($_POST['userPassword']),
                'confirmPassword' => trim($_POST['confirmPassword']),
                'usernameError' => '',
                'emailError' => '',
                'passwordError' => '',
                'confirmPasswordError' => ''
            ];

            $nameValidation = "/^[a-zA-Z0-9]*$/";
            $passwordValidation = "/^  )$/i";

            // validate username
            if (empty($data['userName'])) {
                $data['usernameError'] = 'Please enter username.';
            } elseif (!preg_match($nameValidation, $data['userName'])) {
                $data['usernameError'] = 'Name can only contain letters and numbers.';
            } else {
                //Check if email exists.
                if ($this->userModel->findUserByUserName($data['userName'])) {
                    $data['usernameError'] = 'Username is already taken.';
                }
            }

            //Validate email
            if (empty($data['userEmail'])) {
                $data['emailError'] = 'Please enter email address.';
            } elseif (!filter_var($data['userEmail'], FILTER_VALIDATE_EMAIL)) {
                $data['emailError'] = 'Please enter the correct format.';
            } else {
                //Check if email exists.
                if ($this->userModel->findUserByEmail($data['userEmail'])) {
                    $data['emailError'] = 'Email is already taken.';
                }
            }

           // Validate password on length, numeric values,
            if(empty($data['userPassword'])){
                $data['passwordError'] = 'Please enter password.';
            } elseif(strlen($data['userPassword']) < 6){
                $data['passwordError'] = 'Password must be at least 8 characters';
            } elseif (preg_match($passwordValidation, $data['userPassword'])) {
                $data['passwordError'] = 'Password must be have at least one numeric value.';
            }
        
            //Validate confirm password
            if (empty($data['confirmPassword'])) {
                $data['confirmPasswordError'] = $data['confirmPassword'];
            } else {
                if ($data['userPassword'] != $data['confirmPassword']) {
                $data['confirmPasswordError'] = 'Passwords do not match, please try again.';
                }
            } 

            // if no error
            if(empty($data['usernameError']) && empty($data['emailError']) &&
            empty($data['passwordError']) && empty($data['confirmPasswordError'])) {
                // hash password
                $data['userPassword'] = password_hash($data['userPassword'], PASSWORD_DEFAULT);

                // register user
                if($this->userModel->register($data)) {
                    //go to login
                    header('location:'. URLROOT .'/users/login');
                }
                else {
                    die('Something went wrong.');
                }
            }
        }
        $this->view('users/signup_page', $data);
    }

    public function login() {
        $data = [
            'userName' => '',
            'usePassword' => '',
            'userNameError' => '',
            'userPasswordError' => ''
        ];

        //check for post
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'userName' => trim($_POST['userName']),
                'userPassword' => trim($_POST['userPassword']),
                'userNameError' => '',
                'userPasswordError' => ''
            ];

            if(empty($data['userName'])) {
                $data['userNameError'] = 'Please enter a username.';
            }

            if(empty($data['userPassword'])) {
                $data['userPasswordError'] = 'Please enter a password.';
            }

            if(empty($data['userNameError']) && empty($data['userPasswordError'])) {
                $loggedInUser = $this->userModel->login($data['userName'], $data['userPassword']);

                if($loggedInUser) {
                    $this->createUserSession($loggedInUser);
                } else {
                    $data['userPasswordError'] = 'Password or username incorrect.';

                    $this->view('users/login_page', $data);
                }
            }
        } else {
            $data = [
                'userName' => '',
                'usePassword' => '',
                'userNameError' => '',
                'userPasswordError' => ''
            ];
        }
        
        $this->view('users/login_page', $data);
    }

    public function createUserSession($user) {
        $_SESSION['uid'] = $user->uid;
        $_SESSION['userName'] = $user->userName;
        $_SESSION['userEmail'] = $user->userEmail;
        if(!empty($user->admin)){
            $_SESSION['admin'] = $user->admin;
        }

        header('location:' . URLROOT . '/pages/index_page');
    }

    public function logout() {
        unset($_SESSION['uid']);
        unset($_SESSION['userName']);
        unset($_SESSION['userEmail']);
        unset($_SESSION['admin']);
        header('location:' . URLROOT . '/users/login');
    }

    public function profile_page() {
        if(isset($_SESSION["uid"]))
        {
            $data = ['userLevel' => '',
            'userExperience' => '',
            'userCountry' => '',
            'extractError' => ''
            ];
            $userName = $_SESSION['userName'];
            $userId = $_SESSION['uid'];
            $standingData = $this->userModel->getUserPoints($userId, $userName);
            if($standingData) {
                $user_points = $standingData->points;
                $data['userExperience'] = strval($user_points).'/'.(((strval($user_points)/100)+1)*100);
                $data['userLevel'] = strval($user_points)/100;   
            }      
            else {
                $data['userExperience'] = 'Something went wrong contact the site administrator';
                $data['userLevel'] = 'NA';
            }
            $this->view('users/profile_page', $data);
        }
        else {
            header('location:' . URLROOT . '/pages/index_page');
        }
    }

    public function forgot_password() {
        $this->view('/users/forgot_password');
    }

    public function index_page() {
        $this->view('404');
    }
}