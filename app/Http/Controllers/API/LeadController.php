<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Mail\NewContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Models\Lead;


class LeadController extends Controller
{
    public function store(Request $request){
        $data = $request->all();

        $validator = Validator::make($data, [
            'name'      => 'required|max: 30',
            'surname'   => 'required|max: 40',
            'email'     => 'required|max: 60',
            'message'   => 'required'
        ]);

        if($validator->fails()){
            return response()->json([
                'success' => false,
                'errors'  => $validator->errors()
            ]);
        }

        $new_lead = new Lead();
        $new_lead->fill($data);
        $new_lead->save();

        Mail::to('admin@admin.com')->send(new NewContact($new_lead));

        return response()->json([
            'success' => true
        ]);

    }
}
