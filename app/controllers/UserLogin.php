<?php
 
class UserLogin extends BaseController {
 
    public function user()
    {
        // get POST data
        $userdata = array(
            'name' => Input::get('username'),
            'password' => Input::get('password')
        );
 
        if(Auth::attempt($userdata))
        {
            // we are now logged in, go to admin
            return Redirect::to('admin');
        }
        else
        {
            return Redirect::to('login');
        }
    }
}