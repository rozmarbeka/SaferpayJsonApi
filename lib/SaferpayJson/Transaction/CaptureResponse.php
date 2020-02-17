<?php

namespace Ticketpark\SaferpayJson\Transaction;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Ticketpark\SaferpayJson\Container\Invoice;
use Ticketpark\SaferpayJson\Message\Response;

class CaptureResponse extends Response
{
    /**
     * @var string
     * @SerializedName("CaptureId")
     * @Type("string")
     */
    protected $captureId;

    /**
     * @var string
     * @SerializedName("Status")
     * @Type("string")
     */
    protected $status;

    /**
     * @var string
     * @SerializedName("Date")
     * @Type("string")
     */
    protected $date;

    /**
     * @var Ticketpark\SaferpayJson\Container\Invoice
     * @SerializedName("Invoice")
     * @Type("Ticketpark\SaferpayJson\Container\Invoice")
     */
    protected $invoice;

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param string $date
     * @return CaptureResponse
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @return Ticketpark\SaferpayJson\Container\Invoice
     */
    public function getInvoice()
    {
        return $this->invoice;
    }

    /**
     * @param Ticketpark\SaferpayJson\Container\Invoice $invoice
     * @return CaptureResponse
     */
    public function setInvoice(Invoice $invoice)
    {
        $this->invoice = $invoice;

        return $this;
    }

    /**
     * @return string
     */
    public function getCaptureId()
    {
        return $this->captureId;
    }

    /**
     * @param string $captureId
     */
    public function setCaptureId($captureId)
    {
        $this->captureId = $captureId;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }
}
