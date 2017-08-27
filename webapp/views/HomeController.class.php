<?php
class HomeController extends Controller {
     
    public function HomeController(){
        parent::Controller();
    }
     
    public function index(){
        return 'index';
    }
    
	public function results(){
        return 'results';
    }
    public function error(){
        return 'error';
    }
}