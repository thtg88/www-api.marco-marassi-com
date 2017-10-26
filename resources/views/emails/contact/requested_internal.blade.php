@extends('layouts.email')
@section('content')
  <p>New contact request received.</p>
  <p>Details:</p>
  <ul>
    <li><strong>Name:</strong> {{ $input['name'] }}</li>
    <li><strong>Email:</strong> {{ $input['email'] }}</li>
    <li><strong>Telephone Number:</strong> {{ $input['phone'] }}</li>
    <li><strong>Message:</strong> {!! nl2br(htmlspecialchars($input['message'])) !!}</li>
  </ul>
@endsection
