<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: settings/dh-settings.proto

namespace Agrirouter\Message\Settings;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use GPBMetadata\Settings\DhSettings;

/**
 * Used to control application communications (Based on configuration options we have within the DH)
 *
 * Generated from protobuf message <code>agrirouter.message.settings.DataHubControlSettings</code>
 */
class DataHubControlSettings extends Message
{
    /**
     * Generated from protobuf field <code>int32 max_message_size = 1;</code>
     */
    protected $max_message_size = 0;
    /**
     * Generated from protobuf field <code>int32 max_messages_per_query = 2;</code>
     */
    protected $max_messages_per_query = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $max_message_size
     *     @type int $max_messages_per_query
     * }
     */
    public function __construct($data = NULL) {
        DhSettings::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 max_message_size = 1;</code>
     * @return int
     */
    public function getMaxMessageSize()
    {
        return $this->max_message_size;
    }

    /**
     * Generated from protobuf field <code>int32 max_message_size = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxMessageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_message_size = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 max_messages_per_query = 2;</code>
     * @return int
     */
    public function getMaxMessagesPerQuery()
    {
        return $this->max_messages_per_query;
    }

    /**
     * Generated from protobuf field <code>int32 max_messages_per_query = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxMessagesPerQuery($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_messages_per_query = $var;

        return $this;
    }

}
