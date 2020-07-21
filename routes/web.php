<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/', function() {
//     return 'Home';
// });

// Admin
Route::prefix('admin')->group(function () {

    Route::get('registrant/seminar', 'AdminController@registrantSeminar')->name('registrant.seminar');
    Route::get('registrant/conference', 'AdminController@registrantConference')->name('registrant.conference');
    Route::get('transaction/incoming', 'AdminController@transactionIncoming')->name('transaction.incoming');
    Route::get('transaction/approved', 'AdminController@transactionApproved')->name('transaction.approved');
    Route::get('pin', 'AdminController@pinEntrance')->name('pin');
    Route::get('setting', 'AdminController@setting')->name('setting');
    Route::get('judges', 'AdminController@judges')->name('app.judges');
    Route::get('judges/add', 'AdminController@judgesAddView')->name('app.judges.add.view');
    Route::get('judges/{id}/edit', 'AdminController@judgesEditView')->name('app.judges.edit.view');
    Route::get('judges/{id}/delete', 'AdminController@judgesDelete')->name('app.judges.delete');

    Route::post('registrant/payment/update', 'AdminController@paymentUpdate')->name('registrant.payment.update');
    Route::post('registrant/ecertificate/activate', 'AdminController@activateEcertificate')->name('registrant.ecertificate.activate');
    Route::post('registrant/ecertificate/inactivate', 'AdminController@inactivateEcertificate')->name('registrant.ecertificate.inactivate');
    Route::post('pin', 'AdminController@searchPin')->name('seach.pin');
    Route::post('deadline', 'AdminController@deadline')->name('deadline');
    Route::post('judges/add', 'AdminController@judgesAdd')->name('app.judges.add');
    Route::post('judges/update', 'AdminController@judgesUpdate')->name('app.judges.update');

});

Auth::routes();
Auth::routes(['verify' => true]);

Route::get('dashboard', 'HomeController@index')->name('home');
Route::get('transaction', 'HomeController@transaction')->name('user.transaction');
Route::get('paper/home', 'HomeController@paperHome')->name('user.paper');
Route::get('e-certificate', 'HomeController@eCertificate')->name('user.certificate');
Route::get('faq', 'HomeController@faq')->name('faq');

// The judge
Route::prefix('judge')->group(function() {
    Route::get('/incoming/abstract', 'UserJudgesController@incomingAbstract')->name('incoming.abstract');
    Route::get('all/paper', 'UserJudgesController@allPaper')->name('all.paper');

    Route::post('approve/title', 'UserJudgesController@approveTitle')->name('approve.title');
});

// UserSeminarController
Route::post('payment/upload', 'UserSeminarController@uploadPayment')->name('upload.payment');
Route::post('certificate/print', 'UserSeminarController@printCertificate')->name('print.certificate');

// UserConferenceController
Route::post('abstract/upload', 'UserConferenceController@submitAbstract')->name('upload.abstract');
Route::post('abstract/edit', 'UserConferenceController@editAbstract')->name('edit.abstract');
Route::post('paper/upload', 'UserConferenceController@submitPaper')->name('upload.paper');
Route::post('paper/edit', 'UserConferenceController@editPaper')->name('edit.paper');
Route::post('payment/upload/conference', 'UserConferenceController@uploadPayment')->name('upload.payment.conference');
Route::post('certificate/print/conference', 'UserConferenceController@printCertificate')->name('print.certificate.conference');

// Front-End
Route::get('/', 'WebController@index')->name('frontend');
Route::get('about', 'WebController@about')->name('frontend.about');
Route::get('seminar', 'WebController@seminar')->name('frontend.seminar');
Route::get('conference', 'WebController@conference')->name('frontend.conference');
Route::get('pricing', 'WebController@pricing')->name('frontend.pricing');
