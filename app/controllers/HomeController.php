<?php
  namespace App\Controllers;
  use Core\Controller;

  class HomeController extends Controller {

    public function indexAction() {
      $this->view->render('home/index');
    }
  }
