<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdvanceRequest;

use App\Models\Advance;







class AdvanceController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(AdvanceRequest $request)
    {
        $advance = $request->only(['family-name', 'given-name', 'gender', 'email', 'postcode', 'prefecture_id', 'building', 'content']);
        return view('confirm' , compact('advance'));
    }
    
    public function store(AdvanceRequest  $request){
        $advance = $request->only(['family-name', 'given-name', 'gender', 'email', 'postcode', 'prefecture_id', 'building', 'content']);
        Advance::create($advance);
        return view('thanks');
    }
}
