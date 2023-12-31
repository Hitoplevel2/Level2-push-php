<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: entity.proto

namespace Sa\Rpc\Entity;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *委托队列
 *
 * Generated from protobuf message <code>sa.rpc.entity.OrderQueueRecord</code>
 */
class OrderQueueRecord extends \Google\Protobuf\Internal\Message
{
    /**
     *证券市场，1-SH，2-SZ
     *
     * Generated from protobuf field <code>uint32 stock_exchange = 1;</code>
     */
    protected $stock_exchange = 0;
    /**
     *证券代码
     *
     * Generated from protobuf field <code>string stock_code = 2;</code>
     */
    protected $stock_code = '';
    /**
     *委托日期时间戳(毫秒)
     *
     * Generated from protobuf field <code>int64 created_at = 3;</code>
     */
    protected $created_at = 0;
    /**
     *买1价
     *
     * Generated from protobuf field <code>uint32 bid1_price = 4;</code>
     */
    protected $bid1_price = 0;
    /**
     *买1笔数
     *
     * Generated from protobuf field <code>uint32 bid1_quantity = 5;</code>
     */
    protected $bid1_quantity = 0;
    /**
     *卖1价
     *
     * Generated from protobuf field <code>uint32 ask1_price = 6;</code>
     */
    protected $ask1_price = 0;
    /**
     *卖1笔数
     *
     * Generated from protobuf field <code>uint32 ask1_quantity = 7;</code>
     */
    protected $ask1_quantity = 0;
    /**
     *委托买入数量明细
     *
     * Generated from protobuf field <code>repeated uint32 bid_volume_detail = 8;</code>
     */
    private $bid_volume_detail;
    /**
     *委托卖出数量明细
     *
     * Generated from protobuf field <code>repeated uint32 ask_volume_detail = 9;</code>
     */
    private $ask_volume_detail;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $stock_exchange
     *          证券市场，1-SH，2-SZ
     *     @type string $stock_code
     *          证券代码
     *     @type int|string $created_at
     *          委托日期时间戳(毫秒)
     *     @type int $bid1_price
     *          买1价
     *     @type int $bid1_quantity
     *          买1笔数
     *     @type int $ask1_price
     *          卖1价
     *     @type int $ask1_quantity
     *          卖1笔数
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $bid_volume_detail
     *          委托买入数量明细
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $ask_volume_detail
     *          委托卖出数量明细
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Entity::initOnce();
        parent::__construct($data);
    }

    /**
     *证券市场，1-SH，2-SZ
     *
     * Generated from protobuf field <code>uint32 stock_exchange = 1;</code>
     * @return int
     */
    public function getStockExchange()
    {
        return $this->stock_exchange;
    }

    /**
     *证券市场，1-SH，2-SZ
     *
     * Generated from protobuf field <code>uint32 stock_exchange = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setStockExchange($var)
    {
        GPBUtil::checkUint32($var);
        $this->stock_exchange = $var;

        return $this;
    }

    /**
     *证券代码
     *
     * Generated from protobuf field <code>string stock_code = 2;</code>
     * @return string
     */
    public function getStockCode()
    {
        return $this->stock_code;
    }

    /**
     *证券代码
     *
     * Generated from protobuf field <code>string stock_code = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setStockCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->stock_code = $var;

        return $this;
    }

    /**
     *委托日期时间戳(毫秒)
     *
     * Generated from protobuf field <code>int64 created_at = 3;</code>
     * @return int|string
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     *委托日期时间戳(毫秒)
     *
     * Generated from protobuf field <code>int64 created_at = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCreatedAt($var)
    {
        GPBUtil::checkInt64($var);
        $this->created_at = $var;

        return $this;
    }

    /**
     *买1价
     *
     * Generated from protobuf field <code>uint32 bid1_price = 4;</code>
     * @return int
     */
    public function getBid1Price()
    {
        return $this->bid1_price;
    }

    /**
     *买1价
     *
     * Generated from protobuf field <code>uint32 bid1_price = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setBid1Price($var)
    {
        GPBUtil::checkUint32($var);
        $this->bid1_price = $var;

        return $this;
    }

    /**
     *买1笔数
     *
     * Generated from protobuf field <code>uint32 bid1_quantity = 5;</code>
     * @return int
     */
    public function getBid1Quantity()
    {
        return $this->bid1_quantity;
    }

    /**
     *买1笔数
     *
     * Generated from protobuf field <code>uint32 bid1_quantity = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setBid1Quantity($var)
    {
        GPBUtil::checkUint32($var);
        $this->bid1_quantity = $var;

        return $this;
    }

    /**
     *卖1价
     *
     * Generated from protobuf field <code>uint32 ask1_price = 6;</code>
     * @return int
     */
    public function getAsk1Price()
    {
        return $this->ask1_price;
    }

    /**
     *卖1价
     *
     * Generated from protobuf field <code>uint32 ask1_price = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setAsk1Price($var)
    {
        GPBUtil::checkUint32($var);
        $this->ask1_price = $var;

        return $this;
    }

    /**
     *卖1笔数
     *
     * Generated from protobuf field <code>uint32 ask1_quantity = 7;</code>
     * @return int
     */
    public function getAsk1Quantity()
    {
        return $this->ask1_quantity;
    }

    /**
     *卖1笔数
     *
     * Generated from protobuf field <code>uint32 ask1_quantity = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setAsk1Quantity($var)
    {
        GPBUtil::checkUint32($var);
        $this->ask1_quantity = $var;

        return $this;
    }

    /**
     *委托买入数量明细
     *
     * Generated from protobuf field <code>repeated uint32 bid_volume_detail = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBidVolumeDetail()
    {
        return $this->bid_volume_detail;
    }

    /**
     *委托买入数量明细
     *
     * Generated from protobuf field <code>repeated uint32 bid_volume_detail = 8;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBidVolumeDetail($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->bid_volume_detail = $arr;

        return $this;
    }

    /**
     *委托卖出数量明细
     *
     * Generated from protobuf field <code>repeated uint32 ask_volume_detail = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAskVolumeDetail()
    {
        return $this->ask_volume_detail;
    }

    /**
     *委托卖出数量明细
     *
     * Generated from protobuf field <code>repeated uint32 ask_volume_detail = 9;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAskVolumeDetail($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->ask_volume_detail = $arr;

        return $this;
    }

}

