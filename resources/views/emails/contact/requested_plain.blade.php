Dear {{ $input['name'] }},
We are in receipt of your email regarding your contact request.
This is the data you provided, which will be used for our future correspondence:
Name: {{ $input['name'] }}
Email: {{ $input['email'] }}
Telephone Number: {{ $input['phone'] }}
Message: {!! nl2br(htmlspecialchars($input['message'])) !!}
Thanks for your interest, we will contact you shortly.
Best regards,
Marco Marassi
