<?php

return [
    
    'boolean' => [
        '0' => 'No',
        '1' => 'Yes',
    ],

    'role' => [
        'admin' => 'Admin',
        'teller' => 'Teller',
        'cs' => 'Customer Service',
    ],
    
    'status' => [
        '1' => 'Active',
        '0' => 'Inactive',
    ],


    /*
    |------------------------------------------------------------------------------------
    | ENV of APP
    |------------------------------------------------------------------------------------
    */
    'APP_ADMIN' => 'admin',
    'APP_TOKEN' => env('APP_TOKEN', 'admin123456'),
];
