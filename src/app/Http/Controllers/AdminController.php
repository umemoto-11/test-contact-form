<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;
use App\Models\User;
use App\Models\Admin;

class AdminController extends Controller
{
    public function index()
    {
        $contacts = Contact::with('category')->get();
        $categories = Category::all();

        $users = User::Paginate(7);

        return view('admin', compact('contacts', 'categories', 'users'));
    }
}
