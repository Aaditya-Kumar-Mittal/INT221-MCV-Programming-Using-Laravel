<?php

use App\Http\Controllers\CookieController;
use App\Http\Controllers\CookieControllerTwo;
use App\Http\Controllers\EmailControllerOne;
use App\Http\Controllers\FormValidationOne;
use App\Http\Controllers\StudentController1;
use App\Http\Controllers\UnitOneControllerOne;
use App\Http\Controllers\UnitOneControllerThree;
use App\Http\Controllers\UnitOneControllerTwo;
use App\Http\Controllers\UploadImageControllerOne;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

Route::get('/', function () {
    return view('welcome');
});

// Basic Routing

Route::get('/hello', function () {
    return 'Hello, World!';
});

// Route Parameters

Route::get("/userI/{id}", function ($id) {
    return "User ID: " . $id
    ;
});

// Optinal Route Parameters
Route::get("/userG/{gender?}", function ($gender = null) {
    return "User Gender: " . $gender
    ;
});

// Passing Data To The User
Route::get("/test1/{name?}", function ($name = "Aaditya Kumar Mittal") {
    return view("unit1testview1", ["name" => $name]);
});

// Sharing data with views

Route::get("/test2", function () {
    return view("unit1testview2", );
});

Route::get("/test3", function () {
    return view("unit1testview3", );
});

// Passing arrays
Route::get("test4", function () {
    return [1, 2, 3, 4, 5, 6, 7, 8, 9];
});

Route::get("test7", function () {
    return view("unit1testview7", ["numbers" => [1, 2, 3, 4, 5, 6, 7, 8, 9]]);
});

Route::get("test8", function () {
    return view("unit1testview8", ["firstNumber" => 1, "secondNumber" => 2]);
});

Route::get('test11', function () {
    $imageUrls = [asset('images/food1.jpeg'), asset('images/food2.jpeg'), asset('images/education.jpeg'), asset('images/protection.jpeg'),];
    return view('unit1testview11', ['imageUrls' => $imageUrls]);
});

// Testing views

Route::view("test5", "unit1testview5");

Route::view("/page/about-us", "unit1testview4about")->name("about");

// Redirections
Route::redirect("/test6", "/test5");

// URL Generation Techniques

Route::get('/current/url', function () {
    return URL::current();
});

Route::get('/current/full', function () {
    return URL::full();
});

Route::get('first', function () {
    // Redirect to the second route.
    return Redirect::to('second');
});

Route::get('second', function () {
    return URL::previous();
});

Route::get('test9', function () {
    return URL::to('about-us');
});

Route::get('test10', function () {
    return URL::asset('images/food1.jpeg', true);
});

// Using Controllers

Route::get('/test12/{name?}', [UnitOneControllerOne::class, 'greetings']);


// Defining Constraints

Route::get("/test13/{id}", function ($id) {
    return "User ID: " . $id;
})->where("id", "[0-9]+");

Route::get("/test15/{name}", function ($name) {
    return "User name: " . $name;
})->where("name", "[A-Za-z]+");

Route::get('/test16/{id}/{name}', function ($id, $name) {
    return "User ID: " . $id . ", User Name: " . $name;
})->where(['id' => '[0-9]+', 'name' => '[A-Za-z]+']);



Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'Admin Dashboard';
    });
    Route::get('/users', function () {
        return 'User Management';
    });
});


// Attaching Headers

Route::get('/test14', function () {
    return response("Hello World", 200)
        ->header("Content-Type", "text/plain")
        ->header("X-Header-One", "This is Header Value being attached from Headers");
});

Route::get('/test17', function () {
    return response()
        ->view('unit1testview5')
        ->header("Content-Type", "html")
        ->header("X-Header-One", "This is Header Value being attached from Headers")
        ->cookie("Test-Cookie", "Test-Cookie-Value", 60);
});

Route::get('/test18', function () {
    return response()
        ->json([
            "name" => "Aaditya Kumar Mittal",
            "age" => 20,
        ]);
});

// Passing data to views
Route::get('/test19/{marks?}', function ($marks = 50) {
    return view('unit1testview13', ["marks" => $marks]);
});

Route::get('/test21/{age?}', function ($age = null) {
    return view('unit1testview14', ["age" => $age]);
});

// External Redirections

Route::get('/test20', function () {
    return redirect()->away('https://www.google.com');
});


Route::get("/test22", [UnitOneControllerTwo::class, "callView1"]);
Route::get("/test22/{marks?}", [UnitOneControllerTwo::class, "callView2"]);
Route::get("/test23", [UnitOneControllerTwo::class, "callView3"]);
Route::get("/test24/nest1/nest2/nest3", [UnitOneControllerTwo::class, "callView3"])->name("test24");

// Route Grouping using Controllers

Route::controller(UnitOneControllerThree::class)->group(function () {
    Route::get('showNames', 'showNames');
    Route::get('create', 'create');
    Route::get('read', 'read');
    Route::get('update', 'update');
    Route::get('delete', 'delete');
});

// Cookie Handling
Route::get('/cookie', [CookieController::class, 'show'])->name('cookie.view');
Route::get('/cookie/set', [CookieController::class, 'setCookie'])->name('cookie.set');
Route::get('/cookie/update', [CookieController::class, 'updateCookie'])->name('cookie.update');
Route::get('/cookie/delete', [CookieController::class, 'deleteCookie'])->name('cookie.delete');

Route::get('/cookie1', [CookieControllerTwo::class, 'show'])->name('cookie1.view');
Route::get('/cookie1/set', [CookieControllerTwo::class, 'setCookie1'])->name('cookie1.set');
Route::get('/cookie1/update', [CookieControllerTwo::class, 'updateCookie1'])->name('cookie1.update');
Route::get('/cookie1/delete', [CookieControllerTwo::class, 'deleteCookie1'])->name('cookie1.delete');

// Sending Email
Route::get('send-email1', [EmailControllerOne::class, "sendEmailOne"]);

// Session Handling

Route::get('setsession1', function () {
    session(
        [
            'name' => 'Aaditya Kumar Mittal',
            'age' => 20,
            'location' => 'Ambala Cantt.'
        ]
    );
    return "Session has been set successfully!";
});

Route::get('getsession1', function () {
    print_r(session()->all());
    return "Session values have been displayed successfully!";
});

Route::get('deletesession1', function () {
    session()->forget('name');
    ;
    return "Session values have been displayed successfully!";
});

Route::get("flushsession1", function () {
    session()->flush();
    return "All Data Deleted";
});

Route::get('/upload-image', [UploadImageControllerOne::class, 'uploadImageView1'])->name('image.upload.view');
Route::post('/upload-image', [UploadImageControllerOne::class, 'uploadImage1'])->name('image.upload.post');



// ------------------------------------- Form validation

Route::get('/form-validation', [FormValidationOne::class, 'showForm'])->name('form.view');
Route::post('/formValidate', [FormValidationOne::class, 'validateData'])->name('form.validate');


// ------------------------------------ Database Connectivity to MySQL using Routes

Route::get('city-list1', function () {
    $cities = DB::select("select * from city_data");
    return view('databasesqlcitydata1', ["data" => $cities]);
});

Route::get('update-city1', function () {
    $users = DB::update("UPDATE city_data SET
    population = 1111521 WHERE city_name = 'Delhi'");
    return "Data Updated";
});

Route::get('delete-city1', function () {
    $users = DB::delete("delete from
    city_data where city_name = 'Delhi'");
    return "Row deleted";
});



// ------------------------------------ Database Connectivity to MongoDB using Routes

Route::resource('studentsdb', StudentController1::class);
