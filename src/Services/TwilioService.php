<?php

namespace App\Services;

use Twilio\Rest\Client;

class TwilioService
{
    public function sendTwillioMessage($recipientPhoneNumber, $message)
    {
        $accountSid = $_ENV['TWILIO_ACCOUNT_SID'];
        $authToken = $_ENV['TWILIO_AUTH_TOKEN'];
        $twilioWhatsappNumber = $_ENV['TWILIO_NUMBER'];
        $client = new Client($accountSid, $authToken);
        $message = $client->messages->create(
            $recipientPhoneNumber,
            [
                'from' => "$twilioWhatsappNumber",
                'body' => "We have a new : {$message}.",
            ]
        );
        return $message->sid;
    }
}