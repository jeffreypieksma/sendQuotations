<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

use App\Client;
use App\Manager;
use App\Files;
use App\Mails;

class QuotationController extends Controller
{

    /**
     *  1. Model Manager
     *     user_id
     *     
     *  2. Model Files
     *  3. Model Mails
     * 
     * #toDo 
     *  Add user_id to manager table
     * add fields to files table 
     */
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'client_email' => 'required|email',
            'client_id' => 'required|integer',
            'subject._value' => 'required|string|max:120',
            'message._value' => 'required|string|max:400',
        ]);

        if ($validator->fails()) {

            return response()->json($validator->errors(), 422);

        } else {
            $uid = \Auth::user()->id;

            $manager = new Manager();
            $manager->user_id = $uid;
            $manager->save();

            $files = new Files();
            $files->user_id = $uid;
            $files->save();       
            
            $mails = new Mails();
            $mails->user_id = $uid;
            $mails->manager_id = $manager->id;
            $mails->subject = $request->subject;
            $mails->message = $request->message;
            $mails->send = 0; 
            $mails->save();
    
            return response()->json([
                'message' => 'Quotation created Successfully',
                'quotation' => $quotation
            ],200);
        }

    }
}
