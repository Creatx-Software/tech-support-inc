<?php

namespace App\Http\Controllers;

use App\Mail\NewContactMessage;
use App\Models\Contact;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('frontend.contact.index');
    }

    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:30',
            'message' => 'required|string|max:2000',
        ]);

        $contact = Contact::create($validated);

        if ($adminEmail = config('mail.admin_email')) {
            try {
                Mail::to($adminEmail)->send(new NewContactMessage($contact));
            } catch (\Throwable $e) {
                Log::error('Failed to send contact notification email: '.$e->getMessage());
            }
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Your message has been sent successfully.',
        ]);
    }
}
