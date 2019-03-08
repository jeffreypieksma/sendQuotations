<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

use App\Client;

class ClientsController extends Controller
{
    public function index() {
        $user_id = \Auth::user()->id;
        return $clients = Client::where('user_id', $user_id)
            ->orderBy('id', 'desc')
            ->get();
    }

    public function read(Request $request, $id) {

        return $client = Client::findOrfail($id);
    }
    
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'firstname' => 'required|string|max:100',
            'lastname*' => 'required|string|max:100',
        ]);

        if ($validator->fails()) {

            return response()->json($validator->errors(), 422);

        } else {
            $client = new Client();
            $client->user_id = \Auth::user()->id;
            $client->email = $request->email;
            $client->name = $request->firstname . ' ' . $request->lastname;
            $client->firstname = $request->firstname;
            $client->lastname = $request->lastname;
            $client->save();
    
            return response()->json([
                'message' => 'Client Added Successfully',
                'client' => $client
            ],200);
        }

    }

    public function update() {

    }

    public function delete() {

    }
}
