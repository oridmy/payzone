<?php

namespace PayXpert\Connect2Pay\containers\response;

class WeChatPaymentMeanInfo
{
    /**
     * Total amount in Chinese currency
     *
     * @var int
     */
    private $totalFee;

    /**
     * Exchange rate between transaction currency and Chinese currency
     *
     * @var float
     */
    private $exchangeRate;

    /**
     * @return int
     */
    public function getTotalFee()
    {
        return $this->totalFee;
    }

    /**
     * @param int $totalFee
     * @return WeChatPaymentMeanInfo
     */
    public function setTotalFee($totalFee)
    {
        $this->totalFee = $totalFee;
        return $this;
    }

    /**
     * @return float
     */
    public function getExchangeRate()
    {
        return $this->exchangeRate;
    }

    /**
     * @param float $exchangeRate
     * @return WeChatPaymentMeanInfo
     */
    public function setExchangeRate($exchangeRate)
    {
        $this->exchangeRate = $exchangeRate;
        return $this;
    }
}