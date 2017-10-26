@extends('layouts.email')
@section('content')
New contact request received.
Details:
Name: {{ $input['name'] }}
Email: {{ $input['email'] }}
Telephone Number: {{ $input['phone'] }}
Message: {!! nl2br(htmlspecialchars($input['message'])) !!}
@endsection
