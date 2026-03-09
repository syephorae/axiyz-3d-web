<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Quote;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function gallery()
    {
        return view('pages.gallery');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function storeQuote(Request $request)
    {
        $validated = $request->validate([
            'message' => 'required|string',
            'inquiry-type' => 'required|string',
        ]);

        Quote::create([
            'user_id' => auth()->id(),
            'details' => $validated['inquiry-type'] . ":\n" . $validated['message'],
        ]);

        return back()->with('success', 'Your quote request has been submitted successfully.');
    }
}
