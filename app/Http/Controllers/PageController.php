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

    public function testimonials()
    {
        return view('pages.testimonials');
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
            'first-name' => 'required|string|max:255',
            'last-name' => 'nullable|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'inquiry-type' => 'required|string',
            'message' => 'required|string',
        ]);

        // Save to database (Database Backup)
        $quote = Quote::create([
            'user_id' => auth()->id(), 
            'customer_name' => $validated['first-name'] . ' ' . ($validated['last-name'] ?? ''),
            'customer_email' => $validated['email'],
            'customer_phone' => $validated['phone'] ?? null,
            'details' => $validated['inquiry-type'] . ":\n" . $validated['message'],
            'status' => 'pending',
        ]);

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Inquiry backed up to database successfully.',
                'quote_id' => $quote->id
            ]);
        }

        return redirect()->back()->with('success', 'Thank you! Your inquiry has been sent successfully.');
    }
}
