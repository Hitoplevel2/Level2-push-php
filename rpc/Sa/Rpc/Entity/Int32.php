<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: entity.proto

namespace Sa\Rpc\Entity;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>sa.rpc.entity.Int32</code>
 */
class Int32 extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 value = 1;</code>
     */
    protected $value = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $value
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Entity::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 value = 1;</code>
     * @return int|string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Generated from protobuf field <code>int64 value = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkInt64($var);
        $this->value = $var;

        return $this;
    }

}
