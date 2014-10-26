<?php
class CMSHomeController extends \BaseController {
    public function home(){
        return View::make('CMS::home.home');
    }
}