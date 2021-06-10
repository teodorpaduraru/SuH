<?php
class Games extends Controller {
    public function __construct() {
        //$this->userModel = $this->model('Game');
    }

    public function game_page() {
        $this->view('game/game_page');
    }

    public function beginner() {
        $this->view('game/beginner');
    }

    public function intermediate() {
        $this->view('game/intermediate');
    }

    public function expert() {
        $this->view('game/expert');
    }

    public function index_page() {
        $this->view('404');
    }

}