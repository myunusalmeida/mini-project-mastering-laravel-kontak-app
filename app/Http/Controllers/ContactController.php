<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('index', ['contacts' => $contacts]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Contact::create($data);

        return redirect()->route('contacts.index');
    }

    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        return view('edit', ['contact' => $contact]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        Contact::findOrFail($id)->update($data);

        return redirect()->route('contacts.index');
    }

    public function destroy($id)
    {
        Contact::findOrFail($id)->delete();
        return redirect()->route('contacts.index');
    }
}
