<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/clusters.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Confidential Instance Config for clusters using [Confidential
 * VMs](https://cloud.google.com/compute/confidential-vm/docs)
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.ConfidentialInstanceConfig</code>
 */
class ConfidentialInstanceConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Defines whether the instance should have confidential compute
     * enabled.
     *
     * Generated from protobuf field <code>bool enable_confidential_compute = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $enable_confidential_compute = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $enable_confidential_compute
     *           Optional. Defines whether the instance should have confidential compute
     *           enabled.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\Clusters::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Defines whether the instance should have confidential compute
     * enabled.
     *
     * Generated from protobuf field <code>bool enable_confidential_compute = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getEnableConfidentialCompute()
    {
        return $this->enable_confidential_compute;
    }

    /**
     * Optional. Defines whether the instance should have confidential compute
     * enabled.
     *
     * Generated from protobuf field <code>bool enable_confidential_compute = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableConfidentialCompute($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_confidential_compute = $var;

        return $this;
    }

}

