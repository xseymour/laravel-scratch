<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/**
 * Routes and MVC Communications:
 * Remember, all Web Applications are is a series of communications: Whether User (via Controller) is
 * requesting HTML to be viewed, or JSON/XML (Language Independent) data for Javascript/ an API call,
 * a Controller will always return a 'response' to a User for the User's given request.
 *
 * There are predefined pathways (or Routes) upon which a user can communicate with our appliation.
 * A User Use's the Controller (through these predefined Routes) for these communication
 * requests (get and post requests), which manipulates the Model (handling data that
 * the user inputs/submits/requests), and based on this manipulated data,
 * returns an updated View for which the User can communicate further to repeat the cycle
 *
 * What is a get request? User requests 'retrival' of information from a Server. Depending on the request,
 * this manipulated (accessed in this case) Model data can be used to update the View (view retrieved information)
 * for which the User can communicate further to repeat the cycle, or supply this data in JSON/XML (Language Independent)
 * format for further use in subsequent processes (like Javascript serverside validation on keyup).
 *
 * What is a post request? User requests 'submission' of information to a Server. Depending on the request,
 * (post, put, patch, delete), this manipulated (altered in this case) Model data can be used to add,
 * update, or delete data from the server, updating the View afterwards, for which the User can see these
 * changes in place and continue communications and repeat the cycle
 */

Route::get('/', 'PagesController@index');
Route::get('about', 'PagesController@about');


