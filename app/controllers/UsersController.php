<?php

class UsersController extends BaseController{
    protected $layout = "layouts.main";

    public function __construct() {
        $this->beforeFilter('csrf', array('on'=>'post'));
    }

    public function getRegister() {
        $this->layout->content = View::make('users.register');
    }

    public function postCreate() {
        $validator = Validator::make(Input::all(), User::$rules);

        if ($validator->passes()) {
            $user = new User;
            $user->username = Input::get('username');
            $user->email = Input::get('email');
            $user->password = Hash::make(Input::get('password'));
            $user->save();

            return Redirect::to('users/login')->with('message', 'Thank you for registering');
        }
          else{
            return Redirect::to('users/register')->with('message', 'Sorry, something went wrong!')->withErrors($validator)->withInput();
          }

    }

    public function getLogin() {
        $this->layout->content = View::make('users.login');
    }
}



