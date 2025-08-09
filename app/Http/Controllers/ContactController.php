<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::orderBy('name', 'asc')->get();
        return view('contacts.index', compact('contacts'));
    }

    public function create()
    {
        return view('contacts.create');
    }

public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255|unique:contacts,name',
        'phone' => 'required|string|max:15|unique:contacts,phone',
        'email' => 'nullable|email|max:255|unique:contacts,email',
        'notes' => 'nullable|string',
    ], [
        'name.unique' => 'تم استخدام هذا الاسم من قبل.',
        'phone.unique' => 'تم استخدام هذا الرقم من قبل.',
        'email.unique' => 'تم استخدام هذا البريد الإلكتروني من قبل.',
    ]);

    Contact::create($request->all());

    return redirect()->route('contacts.index')
                     ->with('success', 'تمت إضافة جهة الاتصال بنجاح');
}


    public function show(Contact $contact)
    {
        return view('contacts.show', compact('contact'));
    }

    public function edit(Contact $contact)
    {
        return view('contacts.edit', compact('contact'));
    }

    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            'name'  => 'required|unique:contacts,name,' . $contact->id,
            'phone' => 'required|unique:contacts,phone,' . $contact->id,
            'email' => 'nullable|email|unique:contacts,email,' . $contact->id,
        ]);

        $contact->update($request->only(['name', 'phone', 'email']));

        return redirect()
            ->route('contacts.index')
            ->with('update', 'تم تعديل جهة الاتصال بنجاح');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()
            ->route('contacts.index')
            ->with('delete', 'تم حذف جهة الاتصال بنجاح');
    }
}
