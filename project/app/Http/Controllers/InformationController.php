<?php

namespace App\Http\Controllers;

use App\Http\Requests\RuleInputInfo;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function ifForm()
    {
        return view('formInfo');
    }

    public function displayInfor(RuleInputInfo $request)
    {
        $user = [
            'name' => $request->input('name'),
            'age' => $request->input('age'),
            'date' => $request->input('date'),
            'phone' => $request->input('phone'),
            'web' => $request->input('web'),
            'address' => $request->input('address'), // Đúng chính tả
        ];

        return view('formInfo', compact('user'));
    }
}
