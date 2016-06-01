<?php 
Route::get('/arbud', function () {
	// $vars = ['name'=>'ea'];
 //    Mail::send('arbud.enquire::mail.test', $vars, function($message) {

	//     $message->to('arief.setiabudi2010@gmail.com', 'Admin Person');
	//     $message->subject('This is a reminder');

	// });
	// $message = View::make('arbud.enquire::mail.test');
	// $vars = mail('arief.setiabudi2010@gmail.com', 'the subject', $message, null, 
 //   '-fwebmaster@example.com'); 
return 'bisaa';
    // return var_dump($vars);

});
Route::get('arbudtest', 'Arbud\Enquire\controllers\EnquireController@halotest');
Route::post('submitenquire', 'Arbud\Enquire\controllers\EnquireController@submitenquire');
// Route::get('/arbudtest', function () { 
	// return \Arbud\Enquire\controllers\EnquireController::halotest();
// });
