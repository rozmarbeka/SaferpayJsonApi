<?php

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class Refund
{
    /**
     * @var Ticketpark\SaferpayJson\Container\Amount
     * @SerializedName("Amount")
     * @Type("Ticketpark\SaferpayJson\Container\Amount")
     */
    protected $amount;

    /**
     * @return Ticketpark\SaferpayJson\Container\Amount
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param Ticketpark\SaferpayJson\Container\Amount $amount
     * @return Refund
     */
    public function setAmount(Amount $amount)
    {
        $this->amount = $amount;

        return $this;
    }
}