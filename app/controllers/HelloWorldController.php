<?php

  class HelloWorldController extends BaseController{

    public static function index(){
      // make-metodi renderöi app/views-kansiossa sijaitsevia tiedostoja
   	  View::make('home.html');
          
    } 

  public static function tutorial(){
    View::make('suunnitelmat/tutorial.html');
  }

  public static function signup(){
    View::make('suunnitelmat/signup.html');
  }

    public static function sandbox(){
      // Testaa koodiasi täällä
      echo 'Hello World!';
    }
  }