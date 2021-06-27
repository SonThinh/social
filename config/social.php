<?php
return [
    'google' => [
        'CLIENT_ID'     => env('GOOGLE_CLIENT_ID'),
        'CLIENT_SECRET' => env('GOOGLE_CLIENT_SECRET'),
        'PROFILE_URL'   => 'https://people.googleapis.com/v1/people/me?personFields=emailAddresses,names',
        'REDIRECT_URL'  => 'postmessage',
    ],

];