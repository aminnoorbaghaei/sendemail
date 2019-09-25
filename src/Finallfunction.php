<?php


namespace aminnourbaghaei\sendemail;

trait  Finallfunction{



    public static function SendEmail($item)
    {
        
       self::SetInformation($item);

    }

}