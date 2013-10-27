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
            return Redirect::to('administrator');
        }
        else
        {
            return Redirect::to('login');
        }
    }
}