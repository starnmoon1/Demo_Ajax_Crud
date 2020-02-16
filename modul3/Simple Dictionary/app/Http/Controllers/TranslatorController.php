<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TranslatorController extends Controller
{
    public function translator(Request $request)
    {

        $arr = ['name' => 'tên',
            'age' => 'tuổi',
            'address' => 'địa chỉ'];
        $word = $request->word;
        foreach ($arr as $key => $value) {
            if ($key == $word) {
                $result = $value;
            }
        }
        return view('result', compact('result'));
    }
}
