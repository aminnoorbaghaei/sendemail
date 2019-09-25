<?php

namespace aminnourbaghaei\sendemail;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use aminnourbaghaei\sendemail\Contracts\setData;
use aminnourbaghaei\sendemail\Mail\Sendemailable;
use PHPUnit\Framework\MockObject\Exception;


class sendemail implements setData{

    use Finallfunction;

    protected $from;
    protected $to;
    protected $message;

    /**
     * Construct
     */
    public function __construct()
{

}

    /**
     * SetInformation for set data in list.
     * @param array $item
     * @return array
     */
    public static function SetInformation($item)
    {


        return self::SendStatus($item['subject'],$item['to'],$item['message']);

    }

    /**
     * SendEmail for send information data for subject email.
     * @param $subject
     * @param string $to
     * @param string $message
     * @param Request $request
     * @return string
     * @internal param string $from
     */
    public static function SendStatus($subject,$to,$message)
    {

      Mail::to($to)->send(new Sendemailable($message,$subject));
        
        

    }
    
}




