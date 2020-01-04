<?php

use Carbon\Traits\Rounding;
use App\Http\Controllers\Item_Controller;

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

Route::get('/', 'AuthController@login');
Route::get('/signin', 'AuthController@login')->name('signin');
Route::get('/logout', 'AuthController@logout');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/maintenance', 'MaintenanceController@index');

// ROUTE GROUP ADMINISTRATOR
Route::group(['middleware' => ['auth', 'checkType:administrator,manager']], function () {

    Route::get('/dashboard', 'DashboardController@index');
    Route::get('/home', function () {
        return view('home');
    });
    Route::get('/profile', function () {
        return view('profile');
    });
    Route::get('/contact', function () {
        return view('contact');
    });
    Route::get('/member', function () {
        return view('member.index');
    });
    Route::get('/customer', function () {
        return view('customer.index');
    });
    Route::get('/item', function () {
        return view('item.index');
    });
    Route::get('/so', function () {
        return view('salesorder.index');
    });

    Route::get('/add-sales-order', function () {
        return view('addsalesorder');
    });
    Route::get('/sales-invoices', function () {
        return view('salesinvoices.index');
    });

    // ROute VIEW
    Auth::routes();
    Route::get('/member', 'MemberController@index');
    Route::get('/so', 'So_Controller@index');
    Route::get('/sales-invoices', 'Si_Controller@index');
    Route::get('/customer', 'Cust_Controller@index');
    Route::get('/item', 'Item_Controller@index');
    Route::get('/purchase-orders', 'Po_Controller@index');
    Route::get('/purchase-invoices', 'Pi_Controller@index');
    Route::get('/supplier', 'Supplier_Controller@index');

    // ROUTE POST
    Route::post('/member/create', 'MemberController@create');
    Route::post('/salesorder/create', 'So_Controller@create');
    Route::post('/so/create', 'So_Controller@itemadd');
    Route::post('/customer/create', 'Cust_Controller@create');
    Route::post('/item/create', 'Item_Controller@create');
    Route::post('/sales-invoices/create', 'Si_Controller@create');
    Route::post('/purchase-orders/create', 'Po_Controller@create');
    Route::post('/supplier/create', 'Supplier_Controller@create');
    Route::post('/purchase-invoices/create', 'Pi_Controller@create');


    //ROUTE GET/UPDATE
    Route::get('/member/{id}/edit', 'MemberController@edit');
    Route::post('/member/{id}/update', 'MemberController@update');
    Route::get('/so/{so_id}/edit', 'So_Controller@edit');
    Route::post('/so/{so_id}/update', 'So_Controller@update');
    Route::get('/customer/{customer_id}/edit', 'Cust_Controller@edit');
    Route::post('/customer/{customer_id}/update', 'Cust_Controller@update');
    Route::get('/item/{item_id}/edit', 'Item_Controller@edit');
    Route::post('/item/{item_id}/update', 'Item_Controller@update');
    Route::get('/so/{so_detail_id}/details/edit', 'So_Controller@edititem');
    Route::post('/so/{so_detail_id}/details/update', 'So_Controller@updateitem');
    Route::get('sales-invoices/{si_id}/edit', 'Si_Controller@edit');
    Route::post('sales-invoices/{si_id}/update', 'Si_Controller@update');
    Route::get('/so/{so_id}/generatesi', 'So_Controller@generatesi');
    Route::post('so/{so_number}/pgenerate', 'So_Controller@processgenerate');
    Route::get('supplier/{supplier_id}/edit', 'Supplier_Controller@edit');
    Route::post('supplier/{supplier_id}/update', 'Supplier_Controller@update');
    Route::get('purchase-orders/{po_id}/edit', 'Po_Controller@edit');
    Route::post('purchase-orders/{po_id}/update', 'Po_Controller@update');
    Route::get('purchase-invoices/{pi_id}/edit', 'Pi_Controller@edit');
    Route::post('purchase-invoices/{pi_id}/update', 'Pi_Controller@update');


    // ROUTE DETAILS
    Route::get('/so/{so_id}/details', 'So_Controller@details');
    Route::post('/so/{so_id}/details/additem', 'So_Controller@itemadd');
    Route::get('/sales-invoices/{si_id}/report', 'Si_Controller@report');
    // Route::post('/so/{so_id}/update', 'So_Controller@update');

    // ROUTE DELETE
    Route::get('/member/{id}/delete', 'MemberController@delete');
    Route::get('/so/{so_id}/delete', 'So_Controller@delete');
    Route::get('/customer/{customer_id}/delete', 'Cust_Controller@delete');
    Route::get('/item/{item_id}/delete', 'Item_Controller@delete');
    Route::get('/so/{so_details_id}/details/delete', 'So_Controller@detailsdelete');
    Route::get('sales-invoices/{si_id}/delete', 'Si_Controller@delete');
    Route::get('purchase-orders/{po_id}/delete', 'Po_Controller@delete');
    Route::get('purchase-invoices/{pi_id}/delete', 'Pi_Controller@delete');
    Route::get('supplier/{supplier_id}/delete', 'Supplier_Controller@delete');
});

// // ROUTE GROUP MANAGER
// Route::group(['middleware' => ['auth', 'checkType:manager']], function () { });
