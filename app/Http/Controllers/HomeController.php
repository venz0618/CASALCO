<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MembershipApplication;
use App\Models\User;
use Notification;
use App\Notifications\MembershipApplicationNotification;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function sendnotification(){
        // $memnership_app = User::all();

        // $membership=[

        //     'greeting'          => 'Good day',
        //     'body'              => 'We have recieved your membership application, and thank you for choosing CASALCO!',
        //     'body1'              => 'We will get back to you within 3 working days for the next step of your application. Please wait for a CALL',
        //     'actiontext'        =>'casalco.coop.com',
        //     'actionurl'         => '/',
        //     'lastline'          => 'Thank you!'
            



        // ];

        // Notification::send($memnership_app, new MembershipApplicationNotification($membership));
        // dd('done');

        $basic  = new \Vonage\Client\Credentials\Basic("637f615c", "Z4WOX9oJ5XaIbkZw");
        $client = new \Vonage\Client($basic);
 
        $message = $client->message()->send([
            'to' => '639676880823',
            'from' => 'CASALCO',
            'text' => 'We have recieved your membership application, and thank you for choosing CASALCO! We will get back to you within 3 working days for the next step of your application. Please wait for a CALL '
        ]);
 
        dd('SMS message has been delivered.');


    }
}
