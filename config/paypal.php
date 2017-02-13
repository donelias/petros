<?php
return array(
    // set your paypal credential
    'client_id' => 'AQkUZWRyfUBO-L9LyjLyBmP20_PqJ7gqoHBV3gUcGNjIQIzRKarGn50bGxhK_WEnddW3peB_hVOtVxWm',
    'secret' => 'EGEtlkr84E_tbjOSFXzEqicY-mh9F1g6nuROUZ9-p8Ko6ayox1fCrzCFlZZ6UojIXmNXq0hpBjodxd8r',

    /**
     * SDK configuration 
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',

        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 30,

        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,

        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',

        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);