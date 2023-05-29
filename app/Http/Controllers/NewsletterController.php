<?php

namespace App\Http\Controllers;

use App\Models\NewsletterSubscriber;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function addSubscriber(Request $request) {
        if($request->ajax()) {
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;
            $subscriberCount = NewsletterSubscriber::where('email',$data['subscriber_email'])->count(
                );
                if($subscriberCount>0) {
                    return "exists";
                } else {
                    //add Newsletter Subscriber Email in newsletter_subscribers table 
                    $newsletter = new NewsletterSubscriber;
                    $newsletter->email = $data['subscriber_email'];
                    $newsletter->status = 1;
                    $newsletter->save();
                    return "inserted"; 
                }
        }
    }
}
