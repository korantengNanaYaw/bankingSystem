<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Banker;
use NotificationChannels\Hubtel\HubtelMessage;
use GuzzleHttp;
use Session;

class EbankingController extends Controller
{
    public function Login(Request $request)
    {

        $accountNumber = $request->input('accno');
        $accountpassword = $request->input('pass');
        //Carwash::create($request->all());

        $banker = Banker::where('password', '=', $accountpassword)
            ->where('email', '=', $accountNumber)->first();

        if ($banker){


/**
            $pin = mt_rand(1000, 9999);
            $mess =  "Confirmation code  enter pin " . $pin .  " to continue login" ;
          //  $mess = "with all due respect dont let me hijack your phone data ..make i hear from you Boss ";
            $client = new GuzzleHttp\Client();
           $res = $client->get('https://api.hubtel.com/v1/messages/send?From=SwissBank&To='. $banker->phone .'&Content=' . $mess. '&ClientId=gershon&ClientSecret=gershon2&RegisteredDelivery=false');
            //$res = $client->get('https://api.hubtel.com/v1/messages/send?From=0552726002&To='. "0552726002" .'&Content=' . $mess. '&ClientId=gershon&ClientSecret=gershon2&RegisteredDelivery=false');


            if($res->getStatusCode() == 201){

              Banker::where('id', $banker->id)
                    ->where('email', $banker->email)
                    ->update(['tokencode' => $pin]);



             //   session(['Banker' => $banker]);


                $banker = Banker::where('id', '=', $banker->id)
                    ->where('email', '=', $banker->email)->first();


            }else{


            }

**/


           session(['Bankers' => $banker]);
            return   $banker;
        }else{


            return "does not exist";

        }



        //return "Success";
    }


    public function Register(Request $request)
    {

        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $password = $request->input('password');
        $cpassword = $request->input('cpassword');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $dob = $request->input('dob');
        $pic = $request->file('pic');
        $gender = $request->input('gender');
        $address = $request->input('address');
        $city = $request->input('city');
        $state = $request->input('state');
        $zipcode = $request->input('zipcode');
        $acctype = $request->input('acctype');
        $pin = $request->input('pin');
        $cpin = $request->input('cpin');



        if ($password != $cpassword){


            return Redirect::back()->withErrors(['Password does not match', 'Password Mismatch']);


        } else

        if ($pin != $cpin){


            return Redirect::back()->withErrors(['Account Pin does not match', 'Password Mismatch']);


        }else{


           // return   $request->toArray();
            Banker::create($request->all());
        }



        //Carwash::create($request->all());


        //return "Success";
    }


    public function verifyCode(string $variable){


    //  Session::get('Bankers');

        $bankerNew = Session::get('Bankers');

        $banker = Banker::where('id', '=', $bankerNew->id)
            ->where('email', '=', $bankerNew->email)->first();

        if($banker->tokencode == $variable){


            return 1;

        }else{


            return 0;
        }


        //return Session::get('Bankers');

    }

    public function resendPin()
    {
        $banker = Session::get('Bankers');

        if ($banker) {


            $pin = mt_rand(1000, 9999);
            $mess = "Confirmation code  enter pin " . $pin . " to continue login";
            //$mess = ""
            $client = new GuzzleHttp\Client();
            $res = $client->get('https://api.hubtel.com/v1/messages/send?From=SwissBank&To=' . $banker->phone . '&Content=' . $mess . '&ClientId=gershon&ClientSecret=gershon2&RegisteredDelivery=false');


            if ($res->getStatusCode() == 201) {

                Banker::where('id', $banker->id)
                    ->where('email', $banker->email)
                    ->update(['tokencode' => $pin]);


                //   session(['Banker' => $banker]);


                //   Banker::where('id', '=', $banker->id)
                //   ->where('email', '=', $banker->email)->first();


                return "true";
            } else {


                return "false";

            }


            return "true"

        }

    }
}
