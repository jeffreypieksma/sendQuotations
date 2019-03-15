<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

use App\Client;
use App\Manager;
use App\File;
use App\Mailer;

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
            $manager->client_id = $request->client_id;
            $manager->status = 1;
            $manager->save();
            
            $mailer = new Mailer();
            $mailer->user_id = $uid;
            $mailer->manager_id = $manager->id;
            $mailer->subject = ' subject';
            $mailer->message = ' message' ;
            $mailer->receiver_email = $request->client_email;
            $mailer->send = 0; 
            $mailer->save();

            $files = new File();
            $files->user_id = $uid;
            $files->subject = 'subject';
            $files->name = 'name';
            $files->path = '/path';
            $files->extension = 'png';
            $files->size = 9876;
            $files->visibility = 1;
            $files->manager_id = $manager->id;
            $files->save();       
    
            return response()->json([
                'message' => 'Quotation created Successfully',
                'quotation' => $manager,
                'mailer' => $mailer,
                'files' => $files
            ],200);
        }

    }
}
