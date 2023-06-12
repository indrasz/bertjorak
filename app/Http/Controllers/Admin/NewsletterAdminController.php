<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NewsletterSubscriber;
use App\Exports\NewsletterSubscribersExport;

use Auth;
use Illuminate\Http\Request;

class NewsletterAdminController extends Controller
{
    public function index()
    {
        if (Auth::user()) {
            if (Auth::user()->hasRole('admin')) {
                $newsletter_subscribers = NewsletterSubscriber::get()->all();

                return view('pages.dashboard.newsletter.index')->with(compact('newsletter_subscribers'));

            }
        } else {
            return view('errors.404');
        }
    }

    public function export()
    {
        return (new NewsletterSubscribersExport())->export();
    }



    public function destroy(Request $request, $id)
    {
        $newsletter_subscribers = NewsletterSubscriber::find($id);
        ;

        if ($newsletter_subscribers->delete()) {
            return redirect()->route('dashboard.newsletter.index')->withToastSuccess('Subscriber deleted successfully');
        } else {
            return redirect()->route('dashboard.newsletter.index')->withToastError('Subscriber failed delete');
        }
    }
    // public function newsletterSubscriber() {
    //     $newsletter_subscribers = NewsletterSubscriber::get()->toArray();
    //     dd($newsletter_subscribers);
    // }
}