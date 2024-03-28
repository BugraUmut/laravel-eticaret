<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContentFormRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function iletisimkaydet(ContentFormRequest $request) {


        $data = $request->all();
        $data["ip"] = $request->ip();

        $sonkaydedilen = Contact::create($data);

        return back()->with(["success"=>"Başarıyla Gönderildi"]);
    }
}
