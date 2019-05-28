<?php
/*
 * This class was auto-generated from the API references found at
 * https://epayments-api.developer-ingenico.com/s2sapi/v1/
 */
namespace Ingenico\Connect\Sdk\Domain\Payment\Definitions;

use Ingenico\Connect\Sdk\DataObject;
use UnexpectedValueException;

/**
 * @package Ingenico\Connect\Sdk\Domain\Payment\Definitions
 */
class PaymentProduct863ThirdPartyData extends DataObject
{
    /**
     * @var string
     */
    public $appId = null;

    /**
     * @var string
     */
    public $nonceStr = null;

    /**
     * @var string
     */
    public $packageSign = null;

    /**
     * @var string
     */
    public $paySign = null;

    /**
     * @var string
     */
    public $prepayId = null;

    /**
     * @var string
     */
    public $signType = null;

    /**
     * @var string
     */
    public $timeStamp = null;

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject($object)
    {
        parent::fromObject($object);
        if (property_exists($object, 'appId')) {
            $this->appId = $object->appId;
        }
        if (property_exists($object, 'nonceStr')) {
            $this->nonceStr = $object->nonceStr;
        }
        if (property_exists($object, 'packageSign')) {
            $this->packageSign = $object->packageSign;
        }
        if (property_exists($object, 'paySign')) {
            $this->paySign = $object->paySign;
        }
        if (property_exists($object, 'prepayId')) {
            $this->prepayId = $object->prepayId;
        }
        if (property_exists($object, 'signType')) {
            $this->signType = $object->signType;
        }
        if (property_exists($object, 'timeStamp')) {
            $this->timeStamp = $object->timeStamp;
        }
        return $this;
    }
}
