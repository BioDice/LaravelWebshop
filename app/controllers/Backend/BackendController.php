<?php

class BackendController extends Controller {

    public function __construct(){
        $this->beforeFilter(function(){
            if(Auth::guest())
                return Redirect::to('admin/login');
        },['except' => ['getLogin','postLogin']]);
    }

}
