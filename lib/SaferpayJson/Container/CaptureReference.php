<?php

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class CaptureReference
{
    /**
     * @var string
     * @SerializedName("CaptureId")
     * @Type("string")
     */
    protected $captureId;

    /**
     * @return string
     */
    public function getCaptureId()
    {
        return $this->captureId;
    }

    /**
     * @param string $captureId
     * @return CaptureReference
     */
    public function setCaptureId($captureId)
    {
        $this->captureId = $captureId;

        return $this;
    }

}