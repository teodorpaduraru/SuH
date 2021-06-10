<?php 

class Admins extends Controller {
    public function __construct() {
        //$this->userModel = $this->model('Admin');
    }

    public function c_panel() {
        if(isset($_SESSION['admin'])) {
            $this->view('admins/c_panel');
        } else {
            $this->view('404');
        }
    }

    public function c_clasament() {
        if(isset($_SESSION['admin'])) {
            $this->view('admins/c_clasament');
        } else {
            $this->view('404');
        }
    }

    public function c_useri() {
        if(isset($_SESSION['admin'])) {
            $this->view('admins/c_useri');
        } else {
            $this->view('404');
        }
    }

    public function c_supereroi() {
        if(isset($_SESSION['admin'])) {
            $this->view('admins/c_supereroi');
        } else {
            $this->view('404');
        }
    }

    public function index_page() {
        $this->view('404');
    }
}