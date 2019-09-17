<?php
return array(
    // set your paypal credential
    'client_id' => 'AZK1j3Dm4vmV_9FprJVadKQSvyKOVYMLcPYw31WCdGFLSmKh4C0LhxiU-_t-Vj-npvEfI5s4rnelTTRx',
    'secret' => 'EDMjugMpDjE0U_wr8tfYj8PYNyQ_OdDp0lG9jGxWGeiuq7JbxqJ098RQ66JR_im6ByX9mh2bTemph1-B-7q',

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