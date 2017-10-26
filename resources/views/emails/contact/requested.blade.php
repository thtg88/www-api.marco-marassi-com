@extends('layouts.email')
@section('content')
  <p>Dear {{ $input['name'] }},</p>
  <p>We are in receipt of your email regarding your contact request.</p>
  <p>This is the data you provided, which will be used for our future correspondence:</p>
  <ul>
    <li><strong>Name:</strong> {{ $input['name'] }}</li>
    <li><strong>Email:</strong> {{ $input['email'] }}</li>
    <li><strong>Telephone Number:</strong> {{ $input['phone'] }}</li>
    <li><strong>Message:</strong> {!! nl2br(htmlspecialchars($input['message'])) !!}</li>
  </ul>
  <p>Thanks for your interest, we will contact you shortly.</p>
  <p>Best regards,<p>
  <p>Marco Marassi</p>
@endsection
