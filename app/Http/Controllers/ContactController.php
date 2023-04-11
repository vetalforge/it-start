<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        if ($this->checkIPSpam()) {
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

    private function checkIPSpam()
    {
        $allowed_sending = true;
        $currentIP = $_SERVER['REMOTE_ADDR'];
        $ips = [];

        try {
            $storage = new \SplFileObject('locked_ips.txt', 'r');

            if ($storage->getSize() > 0) {
                $ips = json_decode($storage->fread($storage->getSize()), true);
            }

            $storage = null;
        } catch (\Exception $e) {}

        foreach ($ips as $ip => $time) {
            // Expired
            if ($time + 30 < time()) {
                unset($ips[$ip]);
            } else {
                if ($currentIP === $ip) {
                    $allowed_sending = false;
                }
            }
        }

        $ips[$currentIP] = time();

        $storage = new \SplFileObject('locked_ips.txt', 'w');
        $storage->fwrite(json_encode($ips));
        $storage = null;

        return $allowed_sending;
    }
}
