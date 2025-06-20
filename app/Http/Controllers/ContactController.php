<?php

namespace App\Http\Controllers;

use App\Models\IpSpamChecker\StorageFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\IpSpamChecker\IpSpamChecker;


class ContactController extends Controller
{
    /**
     * @var Request
     */
    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function signUp()
    {
        return $this->processForm($this->request, 'course');
    }

    public function sendMessage()
    {
        return $this->processForm($this->request, 'message');
    }

    /**
     * TODO: Make email sending
     * @param Request $request
     * @param string $subject
     * @return \Illuminate\Http\Response
     */
    private function processForm(Request $request, $subject)
    {
        $ip_spam_checker = new IpSpamChecker(StorageFactory::make());

        if ($ip_spam_checker->checkIPSpam()) {
            app()->setLocale($request->session()->get('language'));

            $validator = Validator::make($request->all(), [
                'name' => [
                    'required'
                ],
                'phone' => [
                    'required',
                    'regex: /[\d\(\)\-\+\s]/'
                ],
                $subject => [
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
        } else {
            return response(json_encode('You\'ve sent data recently!', JSON_UNESCAPED_SLASHES), 403);
        }
    }
}
