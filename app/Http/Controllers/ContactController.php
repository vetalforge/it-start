<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function signUp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => [
                'required'
            ],
            'phone' => [
                'required',
                'regex: /[\d\(\)\-\+\s]/'
            ],
            'course' => [
                'required',
            ]
        ]);

        if ($validator->fails()) {
            $response = [
                "success" => false,
                "fails"   => $validator->errors()
            ];
        } else {
            $response = [
                "success" => true
            ];
        }

        return response(json_encode($response, JSON_UNESCAPED_SLASHES), 200);
    }

    public function sendMessage(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => [
                'required'
            ],
            'phone' => [
                'required',
                'regex: /[\d\(\)\-\+\s]/'
            ],
            'message' => [
                'required',
            ]
        ]);

        if ($validator->fails()) {
            $response = [
                "success" => false,
                "fails"   => $validator->errors()
            ];
        } else {
            $response = [
                "success" => true
            ];
        }

        return response(json_encode($response, JSON_UNESCAPED_SLASHES), 200);
    }
}
