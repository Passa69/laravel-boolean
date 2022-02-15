<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function home() {

        return view('pages.home');
    }

    public function createPostcard() {

        return view('pages.create');
    }
    public function storePostcard(Request $request) {

        $data = $request -> validate([

            'sender' => 'required|string',
            'text' => 'required|string',
            'address' => 'required|string',
            'img' => 'required|image',
        ]);

        $imageFile = $data['img']; //$request -> file('image');
        $imageFile -> storeAs('/postcards/', $imageFile -> getClientOriginalName(), 'public');

        // $data = $request -> all();

        dd($imageFile);

        dd($data);
    }
}
