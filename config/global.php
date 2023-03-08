<?php
if(env('APP_ENV') =='local' || env('APP_ENV') =='staging')

    return[
        'api' => env('STAGING_API'),  
    ];
else
    return[
        'api' => env('LIVE_API'),
       
    ];
?>