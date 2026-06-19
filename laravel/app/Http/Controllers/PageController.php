<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display the Home Page view.
     */
    public function home()
    {
        return view('home');
    }

    /**
     * Display the About Us Page view.
     */
    public function about()
    {
        return view('about');
    }

    /**
     * Display the Solutions Page view.
     */
    public function services()
    {
        return view('services');
    }

    /**
     * Display the Sectors / Industries Page view.
     */
    public function industries()
    {
        return view('industries');
    }

    /**
     * Display the Contact Page view.
     */
    public function contact()
    {
        return view('contact');
    }

    /**
     * Handle incoming contact and recruitment form submissions.
     */
    public function submitContact(Request $request)
    {
        $formType = $request->input('form_type');

        if ($formType === 'consultation') {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'volume' => 'required|string',
                'sector' => 'required|string',
                'instructions' => 'required|string',
            ]);

            // Real implementation would mail/log or save to database (e.g. Zoho integration)
            return back()->with('success', 'Request received! A practice group agent will call you within 24 hours.');
        }

        if ($formType === 'employer') {
            $request->validate([
                'company_name' => 'required|string|max:255',
                'contact_name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required|string|max:30',
                'sector' => 'required|string',
                'message' => 'required|string',
            ]);

            return back()->with('success', 'Request received! A practice group agent will call you within 24 hours.');
        }

        if ($formType === 'candidate') {
            $request->validate([
                'first_name' => 'required|string|max:100',
                'last_name' => 'required|string|max:100',
                'email' => 'required|email|max:255',
                'phone' => 'required|string|max:30',
                'sector' => 'required|string',
                'experience_summary' => 'nullable|string',
                'resume_text' => 'required|string',
            ]);

            return back()->with('success', 'Application received! Our recruitment department will review your profile.');
        }

        return back()->with('error', 'Invalid form submission.');
    }
}
