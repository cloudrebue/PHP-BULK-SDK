<?php


namespace CloudRebue\Api\Models;


class VoiceSms implements \JsonSerializable
{
    protected $originator;
    protected $phone;
    protected $message;
    protected $correlator;
    protected $voice;
    protected $repeat;
    protected $end_point;

    /**
     * Sms constructor.
     * @param $originator
     * @param $phone
     * @param $message
     * @param $correlator
     * @param $voice
     * @param $repeat
     * @param $end_point
     */
    public function __construct($originator, $phone, $message, $correlator = null, $voice = 1, $repeat = 1, $end_point = null)
    {
        $this->originator = $originator;
        $this->phone = $phone;
        $this->message = $message;
        $this->correlator = $correlator;
        $this->voice = $voice;
        $this->repeat = $repeat;
        $this->end_point = $end_point;
    }

    /**
     * @return mixed
     */
    public function getOriginator()
    {
        return $this->originator;
    }

    /**
     * @param mixed $originator
     */
    public function setOriginator($originator): void
    {
        $this->originator = $originator;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message): void
    {
        $this->message = $message;
    }

    /**
     * @return null
     */
    public function getCorrelator()
    {
        return $this->correlator;
    }

    /**
     * @param null $correlator
     */
    public function setCorrelator($correlator): void
    {
        $this->correlator = $correlator;
    }

    /**
     * @return null
     */
    public function getVoice()
    {
        return $this->voice;
    }

    /**
     * @param null $voice
     */
    public function setVoice($voice): void
    {
        $this->voice = $voice;
    }

    /**
     * @return null
     */
    public function getRepeat()
    {
        return $this->repeat;
    }

    /**
     * @param null $repeat
     */
    public function setRepeat($repeat): void
    {
        $this->voice = $repeat;
    }

    /**
     * @return null
     */
    public function getEndPoint()
    {
        return $this->end_point;
    }

    /**
     * @param null $end_point
     */
    public function setEndPoint($end_point): void
    {
        $this->end_point = $end_point;
    }


    /**
     * @inheritDoc
     */
    public function jsonSerialize()
    {
        return [
            'originator'=>$this->getOriginator(),
            'phone'=>$this->getPhone(),
            'message'=>$this->getMessage(),
            'correlator'=>$this->getCorrelator(),
            'voice'=>$this->getVoice(),
            'repeat'=>$this->getRepeat(),
            'endpoint'=>$this->getEndPoint()
        ];
    }
}
