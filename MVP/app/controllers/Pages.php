<?php
  class Pages extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
      if(isloggedIn()){
        redirect('posts');
      }
      $data = [
        'title' => 'Shareposts',
        'description' => 'Lorem ipsum dolor sit amet. Sripsum cipsum.'
      ];
     
      $this->view('pages/index', $data);
    }

    public function about(){
      $data = [
        'title' => 'About Us',
        'description' => 'App to share posts with other users.'
      ];

      $this->view('pages/about', $data);
    }
  }