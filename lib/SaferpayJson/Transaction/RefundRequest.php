<?php

namespace Ticketpark\SaferpayJson\Transaction;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Message\Request;

class RefundRequest extends Request
{
    const API_PATH = '/Payment/v1/Transaction/Refund';

    const RESPONSE_CLASS = 'Ticketpark\SaferpayJson\Transaction\RefundResponse';

    /**
     * @var Ticketpark\SaferpayJson\Container\Refund
     * @SerializedName("Refund")
     */
    protected $refund;

    /**
     * @var Ticketpark\SaferpayJson\Container\CaptureReference
     * @SerializedName("CaptureReference")
     */
    protected $captureReference;

    /**
     * @return Ticketpark\SaferpayJson\Container\Refund
     */
    public function getRefund()
    {
        return $this->refund;
    }

    /**
     * @param Ticketpark\SaferpayJson\Container\Refund $refund
     * @return RefundRequest
     */
    public function setRefund($refund)
    {
        $this->refund = $refund;

        return $this;
    }

    /**
     * @return Ticketpark\SaferpayJson\Container\CaptureReference
     */
    public function getCaptureReference()
    {
        return $this->captureReference;
    }

    /**
     * @param Ticketpark\SaferpayJson\Container\CaptureReference $captureReference
     * @return RefundRequest
     */
    public function setCaptureReference($captureReference)
    {
        $this->captureReference = $captureReference;

        return $this;
    }
}