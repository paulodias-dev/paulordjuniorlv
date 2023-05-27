<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class PublicController extends Controller
{
    public function index ()
    {
        $contacts = Contact::all();
        return view('dashboard', compact('contacts'));
    }
}
