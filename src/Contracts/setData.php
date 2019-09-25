<?php

namespace aminnourbaghaei\sendemail\Contracts;


interface setData{

    /**
     * Construct 
     
     */
   
    public  function __construct();

    /**
     * SetInformation for set data in list.
     * @param array $item
     * @return array
     */

    public static function SetInformation($item);


    /**
     * SendEmail for send information data for subject email.
     * @param $subject
     * @param $to
     * @param $message
     * @param $request
     * @return
     * @internal param $from
     */
    public static function SendStatus($subject,$to,$message);


}

