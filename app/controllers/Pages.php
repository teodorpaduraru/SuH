<?php
class Pages extends Controller {
    public function __construct() {
        //$this->userModel = $this->model('Page');
    }

    public function index_page() {
        $data = [
            'title' => 'Home page'
        ];

        $this->view('index_page', $data);
    }

    public function about_page() {
        $this->view('about_page');
    }

    public function gallery_page() {
        $this->view('gallery_page');
    }

    public function ranking_page(){
        $this->view('ranking_page');
    }

    public function contact_page(){
        $this->view('contact_page');
    }

    public function rules_page(){
        $this->view('rules_page');
    }
}
