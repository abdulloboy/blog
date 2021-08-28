<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use App\Services\Newsletter;

class NewsletterController extends Controller
{
    public function __invoke(Newsletter $newsletter)
    {
        request()->validate([
            'email' => 'required|email'
        ]);
    
        try{
            $newsletter->subscribe(request('email'));
        } catch (Exception $e){
            throw ValidationException::withMessages([
                'email' => $e->getMessage() //'This email could not be added to our newsletter list.'
            ]);
        }
    
        return redirect('/')->with('success', 'You are now signed up for our newsletter!');
    }
}
