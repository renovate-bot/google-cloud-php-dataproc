<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/shared.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Auxiliary services configuration for a workload.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.PeripheralsConfig</code>
 */
class PeripheralsConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Resource name of an existing Dataproc Metastore service.
     * Example:
     * * `projects/[project_id]/locations/[region]/services/[service_id]`
     *
     * Generated from protobuf field <code>string metastore_service = 1 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     */
    protected $metastore_service = '';
    /**
     * Optional. The Spark History Server configuration for the workload.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.SparkHistoryServerConfig spark_history_server_config = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $spark_history_server_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $metastore_service
     *           Optional. Resource name of an existing Dataproc Metastore service.
     *           Example:
     *           * `projects/[project_id]/locations/[region]/services/[service_id]`
     *     @type \Google\Cloud\Dataproc\V1\SparkHistoryServerConfig $spark_history_server_config
     *           Optional. The Spark History Server configuration for the workload.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\Shared::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Resource name of an existing Dataproc Metastore service.
     * Example:
     * * `projects/[project_id]/locations/[region]/services/[service_id]`
     *
     * Generated from protobuf field <code>string metastore_service = 1 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getMetastoreService()
    {
        return $this->metastore_service;
    }

    /**
     * Optional. Resource name of an existing Dataproc Metastore service.
     * Example:
     * * `projects/[project_id]/locations/[region]/services/[service_id]`
     *
     * Generated from protobuf field <code>string metastore_service = 1 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setMetastoreService($var)
    {
        GPBUtil::checkString($var, True);
        $this->metastore_service = $var;

        return $this;
    }

    /**
     * Optional. The Spark History Server configuration for the workload.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.SparkHistoryServerConfig spark_history_server_config = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataproc\V1\SparkHistoryServerConfig|null
     */
    public function getSparkHistoryServerConfig()
    {
        return $this->spark_history_server_config;
    }

    public function hasSparkHistoryServerConfig()
    {
        return isset($this->spark_history_server_config);
    }

    public function clearSparkHistoryServerConfig()
    {
        unset($this->spark_history_server_config);
    }

    /**
     * Optional. The Spark History Server configuration for the workload.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.SparkHistoryServerConfig spark_history_server_config = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataproc\V1\SparkHistoryServerConfig $var
     * @return $this
     */
    public function setSparkHistoryServerConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\SparkHistoryServerConfig::class);
        $this->spark_history_server_config = $var;

        return $this;
    }

}

