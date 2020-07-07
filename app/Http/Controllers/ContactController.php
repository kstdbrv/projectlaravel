<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function submit(ContactRequest $request) {

        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->age = $request->input('age');
        $contact->city = $request->input('city');
        $contact->specialty = $request->input('specialty');
        $contact->phone_number = $request->input('phone_number');
        $contact->surname = $request->input('surname');
        $contact->gender = $request->input('gender');
        $contact->education = $request->input('education');
        $contact->employment = $request->input('employment');
        $contact->email = $request->input('email');

        $contact->save();
       /* переадресовать на главную страницу */
        return redirect()->route('main')->with('success', 'Данные были успешно добавлены');
       }

    public function allData() {
        $contact = new Contact;
        return view('main', ['data' => $contact->orderBy('id', 'desc')->take(6)->get()]);

    }
}
