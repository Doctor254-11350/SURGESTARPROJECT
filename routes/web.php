<?php
use App\Models\ContactMessage;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');
Route::get('/home', function () {
    if (auth()->check()) {
        return redirect('/dashboard');
    }

    return redirect('/login');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::post('/contact', function (Request $request) {
    $validated = $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'email', 'max:255'],
        'message' => ['required', 'string', 'max:5000'],
    ]);

    ContactMessage::create($validated);

    return redirect('/contact')->with(
        'success',
        'Thank you! Your message has been received.'
    );
});
Route::get('/profile', function () {
    return view('profile');
})->middleware('auth')->name('profile');
Route::get('/change-password', function () {
    return view('change-password');
})->middleware('auth')->name('password.change');
Route::get('/admin', function () {
    abort_unless(auth()->user()->isAdmin(), 403);

    return view('admin-dashboard');
})->middleware('auth')->name('admin.dashboard');
Route::get('/admin/messages', function () {
    abort_unless(auth()->user()->isAdmin(), 403);

    $messages = ContactMessage::latest()->get();

    return view('admin-messages', compact('messages'));
})->middleware('auth')->name('admin.messages');
Route::get('/admin/users', function () {
    abort_unless(auth()->user()->isAdmin(), 403);

    $users = \App\Models\User::latest()->get();

    return view('admin-users', compact('users'));
})->middleware('auth')->name('admin.users');
Route::delete('/admin/messages/{id}', function ($id) {
    abort_unless(auth()->user()->isAdmin(), 403);

    $message = ContactMessage::findOrFail($id);

    $message->delete();

    return redirect()
        ->route('admin.messages')
        ->with('success', 'Contact message deleted successfully.');
})->middleware('auth')->name('admin.messages.delete');
