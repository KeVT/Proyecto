<?php
    namespace App\Controller;

    use App\Controller\AppController;

    class AudioController extends AppController
    {
        public function index()
        {
    
        }
        public function home()
        {
            return $this->redirect($this->Auth->redirectUrl());
        }
    }
