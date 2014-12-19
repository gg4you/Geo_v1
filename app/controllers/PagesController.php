<?php
class PagesController extends BaseController {
public function contact()
{
return View::make('about');
}
}


Route::get('/about', array('as' => 'about', function()
{
 return View::make('about')->with('title','About Foldagram')->with('class','about');
}));