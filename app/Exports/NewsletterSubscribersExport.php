<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\NewsletterSubscriber;
use Maatwebsite\Excel\Facades\Excel;

class NewsletterSubscribersExport implements FromCollection
{
    public function collection()
    {
        return NewsletterSubscriber::all();
    }

    public function export()
    {
        return Excel::download($this, 'newsletter_subscribers.xlsx');
    }
}
