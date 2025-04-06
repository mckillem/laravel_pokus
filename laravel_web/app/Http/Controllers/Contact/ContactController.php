<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;
use Inertia\Response;


class ContactController extends Controller
{
    public function create(): Response
    {
        return Inertia::render('contact');
    }

    public function store(Request $request): RedirectResponse
    {
        Contact::create([
            'firstname' => $request->get('firstname'),
            'lastname' => $request->get('lastname'),
            'message' => $request->get('message'),
        ]);

        return redirect('/');
    }

    public function getAllContacts(): array
    {
        return DB::select('select * from contacts');
    }
}
