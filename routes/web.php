<?php

use App\Http\Controllers\AdminController;
use App\Mail\Contact as MailContact;
use App\Mail\ToAdmin;
use App\Models\Contact;
use App\Models\Educations;
use App\Models\Experience;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $projects = Project::paginate(6);
    $educations = Educations::orderby('created_at','DESC')->get();
    $experiences = Experience::orderby('created_at', 'DESC')->get();
    $contact = Contact::first();
    return view ('home',compact('projects','educations', 'experiences', 'contact'));
});

Route::get('/admin', function (){
    return view ('admin.login');
});

Route::get('/create_admin', function (){
    $input = [
        'name' => 'Admin',
        'email' => 'Dennisdon678@gmail.com',
        'password' => '09032431003@Don'
    ];

    if (User::create($input)){
        $message = 'Admin Created';
    }else{
        $message = 'Admin Not Created';
    }

    return $message;
});

Route::post('/login', function(Request $request){
    $input = [
        'email' => $request->username,
        'password' => $request->password
    ];

    if (Auth::attempt($input)){
        return redirect('dashboard');
    }else{
        return redirect()->back()->with('message','User Not Found');
    }
});

Route::get('/logout', function(){
    Auth::logout();
    return redirect('/admin')->with('message','You are Logged Out');
});
Route::get('/dashboard', function (){
    $projects = Project::paginate(4);
    $educations = Educations::orderby('created_at', 'DESC')->get();
    $experiences = Experience::orderby('created_at', 'DESC')->get();
    $contact = Contact::first();
    return view('admin.dashboard', compact('projects', 'educations', 'experiences','contact'));
})->middleware('auth');

Route::post('/add_project',[AdminController::class,'add_project'])->middleware('auth');
Route::post('/add_about',[AdminController::class,'add_about'])->middleware('auth');
Route::post('/add_contact',[AdminController::class,'add_contact'])->middleware('auth');
Route::post('/contact', function(Request $request){
    if ((Mail::to($request->email)->send(new MailContact($request->name,$request->subject,$request->message))) and (Mail::to('dennis@doncodes.online','Dennis')->send(new ToAdmin($request->name, $request->subject, $request->message,$request->email))) ){
        return redirect('/#contact')->with('message','Mail Sent, we also sent you an email. Thanks for reaching out!');
    }
});