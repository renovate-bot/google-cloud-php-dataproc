<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/operations.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata describing the Session operation.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.SessionOperationMetadata</code>
 */
class SessionOperationMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the session for the operation.
     *
     * Generated from protobuf field <code>string session = 1;</code>
     */
    protected $session = '';
    /**
     * Session UUID for the operation.
     *
     * Generated from protobuf field <code>string session_uuid = 2;</code>
     */
    protected $session_uuid = '';
    /**
     * The time when the operation was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3;</code>
     */
    protected $create_time = null;
    /**
     * The time when the operation was finished.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp done_time = 4;</code>
     */
    protected $done_time = null;
    /**
     * The operation type.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.SessionOperationMetadata.SessionOperationType operation_type = 6;</code>
     */
    protected $operation_type = 0;
    /**
     * Short description of the operation.
     *
     * Generated from protobuf field <code>string description = 7;</code>
     */
    protected $description = '';
    /**
     * Labels associated with the operation.
     *
     * Generated from protobuf field <code>map<string, string> labels = 8;</code>
     */
    private $labels;
    /**
     * Warnings encountered during operation execution.
     *
     * Generated from protobuf field <code>repeated string warnings = 9;</code>
     */
    private $warnings;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $session
     *           Name of the session for the operation.
     *     @type string $session_uuid
     *           Session UUID for the operation.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           The time when the operation was created.
     *     @type \Google\Protobuf\Timestamp $done_time
     *           The time when the operation was finished.
     *     @type int $operation_type
     *           The operation type.
     *     @type string $description
     *           Short description of the operation.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Labels associated with the operation.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $warnings
     *           Warnings encountered during operation execution.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\Operations::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the session for the operation.
     *
     * Generated from protobuf field <code>string session = 1;</code>
     * @return string
     */
    public function getSession()
    {
        return $this->session;
    }

    /**
     * Name of the session for the operation.
     *
     * Generated from protobuf field <code>string session = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSession($var)
    {
        GPBUtil::checkString($var, True);
        $this->session = $var;

        return $this;
    }

    /**
     * Session UUID for the operation.
     *
     * Generated from protobuf field <code>string session_uuid = 2;</code>
     * @return string
     */
    public function getSessionUuid()
    {
        return $this->session_uuid;
    }

    /**
     * Session UUID for the operation.
     *
     * Generated from protobuf field <code>string session_uuid = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSessionUuid($var)
    {
        GPBUtil::checkString($var, True);
        $this->session_uuid = $var;

        return $this;
    }

    /**
     * The time when the operation was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * The time when the operation was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * The time when the operation was finished.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp done_time = 4;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getDoneTime()
    {
        return $this->done_time;
    }

    public function hasDoneTime()
    {
        return isset($this->done_time);
    }

    public function clearDoneTime()
    {
        unset($this->done_time);
    }

    /**
     * The time when the operation was finished.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp done_time = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setDoneTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->done_time = $var;

        return $this;
    }

    /**
     * The operation type.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.SessionOperationMetadata.SessionOperationType operation_type = 6;</code>
     * @return int
     */
    public function getOperationType()
    {
        return $this->operation_type;
    }

    /**
     * The operation type.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.SessionOperationMetadata.SessionOperationType operation_type = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setOperationType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataproc\V1\SessionOperationMetadata\SessionOperationType::class);
        $this->operation_type = $var;

        return $this;
    }

    /**
     * Short description of the operation.
     *
     * Generated from protobuf field <code>string description = 7;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Short description of the operation.
     *
     * Generated from protobuf field <code>string description = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Labels associated with the operation.
     *
     * Generated from protobuf field <code>map<string, string> labels = 8;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Labels associated with the operation.
     *
     * Generated from protobuf field <code>map<string, string> labels = 8;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Warnings encountered during operation execution.
     *
     * Generated from protobuf field <code>repeated string warnings = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getWarnings()
    {
        return $this->warnings;
    }

    /**
     * Warnings encountered during operation execution.
     *
     * Generated from protobuf field <code>repeated string warnings = 9;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setWarnings($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->warnings = $arr;

        return $this;
    }

}

