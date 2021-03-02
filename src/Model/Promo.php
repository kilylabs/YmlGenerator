<?php

/*
 * This file is part of the Bukashk0zzzYmlGenerator
 *
 * (c) Denis Golubovskiy <bukashk0zzz@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Bukashk0zzz\YmlGenerator\Model;

/**
 * Class Promo
 */
class Promo
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $url;

    /**
     * @var array
     */
    private $offer_id = [];

    /**
     * @var array
     */
    private $promoOfferId = [];

    /**
     * @var array
     */
    private $promoGiftId = [];

    /**
     * @param int $id
     * @return Promo
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param string $type
     * @return Promo
     */
    public function setType_($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @param string $name
     * @return Promo
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param string $url
     * @return Promo
     */
    public function setUrl($url) 
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @param array $offer_id
     * @return Promo
     */
    public function setPromoOfferId($offer_id)
    {
        $this->promoOfferId = $offer_id;

        return $this;
    }

    /**
     * @param array $gift_id
     * @return Promo
     */
    public function setPromoGiftId($gift_id)
    {
        $this->promoGiftId = $gift_id;
        return $this;
    }

    /**
     * @param array $offer_id
     * @return Promo
     */
    public function setOfferId($offer_id)
    {
        $this->offer_id = $offer_id;

        return $this;
    }

    /** 
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getType_()
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @return array
     */
    public function getPromoOfferId()
    {
        return $this->promoOfferId;
    }

    /**
     * @return array
     */
     public function getPromoGiftId()
    {
        return $this->promoGiftId;
    }

    /**
     * @return array
     */
    public function getOfferId()
    {
        return $this->offer_id;
    }
}
