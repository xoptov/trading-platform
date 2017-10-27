<?php

namespace Xoptov\TradingBot\Event;

use Xoptov\TradingBot\Model\AbstractTrade;

class Trade extends AbstractTrade
{
    /** @var string */
    private $id;

    /**
     * Trade constructor.
     * @param string $id
     * @param string $type
     * {@inheritdoc}
     */
    public function __construct($id, $type, $price, $volume, \DateTime $createdAt)
    {
        parent::__construct($type, $price, $volume, $createdAt);

        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
}