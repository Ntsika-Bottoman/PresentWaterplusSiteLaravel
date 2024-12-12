<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Http;

class RequestController extends Controller
{
    public function addPost(Request $request)
    {
        $totalAmount = $request->input('amount'); // Retrieve the total price from the request

        $post = Http::withHeaders([
            'Authorization' => 'Bearer sk_live_ce029a36prxr6bE1f0b4724bb4a9'
        ])->post("https://payments.yoco.com/api/checkouts", [
            'amount' => $totalAmount,
            'currency' => 'ZAR'
        ]);

        return $post->json();
    }
}
