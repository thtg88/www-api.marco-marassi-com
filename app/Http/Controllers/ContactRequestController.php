<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequestRequest;
use App\Mail\ContactRequested;
use App\Mail\ContactRequestedInternal;
use Illuminate\Support\Facades\Mail;
use Validator;

class ContactRequestController extends Controller
{
  /**
   * Stores a contact request.
   *
   * @param \App\Http\Requests\StoreContactRequestRequest $request
   * @return \Illuminate\Http\JsonResponse
   * @TODO introduce private+public key validation
   */
  public function store(StoreContactRequestRequest $request)
  {
    // Get all request's data
    $input = $request->only([
      'name',
      'email',
      'message',
      'phone',
      'g_recaptcha_response',
      'g-recaptcha-response',
    ]);

    // Send email
    try {
      Mail::to($input['email'])->send(new ContactRequested($input));
      Mail::to(env('MAIL_INTERNAL_NOTIFICATION'))->send(new ContactRequestedInternal($input));
    } catch(Exception $e) {
      // TODO log errors?
    }

    return response()->json([
      'success' => true,
      'contact_request' => $input,
    ]);
  }
}
