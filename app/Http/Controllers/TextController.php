<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TextRequest;
use App\Models\Text;

class TextController extends Controller
{
    public function submit_text(TextRequest $request_text) {
        $text = new Text;
        $text->modal__text = $request_text->input('modal__text');
        $text->save();
        return redirect()->route('main')->with('success', 'Coобщение было успешно сохранено!');
    }
}
