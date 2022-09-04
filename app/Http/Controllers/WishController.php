<?php

namespace App\Http\Controllers;

use App\Models\Wish;
use Illuminate\Http\Request;

class WishController extends Controller
{
    public function saveWish(Request $request)
    {
        $user = Wish::create([
            'name' => $request->username,
            'email' => $request->email,
            'wish' => $request->wish
        ]);
        $notification = array(
            'message' => 'Success!',
            'alert-type' => 'success'
        );
        return redirect('/')->with($notification);
    }
}
