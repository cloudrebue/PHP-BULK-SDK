<?php


namespace CloudRebue\Api\Handlers\SmsHandlers;


// use CloudRebue\Api\Exceptions\BongaException;
use CloudRebue\Api\Models\VoiceSms;

trait VoiceSMSHandler
{
    /**
     * @param VoiceSms $sms
     * @return mixed|string
     */
    public function sendVoiceSMS(VoiceSms $sms)
    {
        $uri = "$this->version/voice-sms";
        try {
            return (new VoiceSMSHandlerImpl($this->token, $uri, $sms))->processVoice();
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * @param Sms ...$messages
     * @return mixed|string
     */
    public function sendBatchVoiceSMS(VoiceSms ...$messages)
    {
        $uri = "$this->version/voice-sms";
        try {
            return (new VoiceSMSHandlerImpl($this->token, $uri, $messages))->processVoice();
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
