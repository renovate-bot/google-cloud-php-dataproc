<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/batches.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A representation of a batch workload in the service.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.Batch</code>
 */
class Batch extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the batch.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name = '';
    /**
     * Output only. A batch UUID (Unique Universal Identifier). The service
     * generates this value when it creates the batch.
     *
     * Generated from protobuf field <code>string uuid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $uuid = '';
    /**
     * Output only. The time when the batch was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. Runtime information about batch execution.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.RuntimeInfo runtime_info = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $runtime_info = null;
    /**
     * Output only. The state of the batch.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.Batch.State state = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $state = 0;
    /**
     * Output only. Batch state details, such as a failure
     * description if the state is `FAILED`.
     *
     * Generated from protobuf field <code>string state_message = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $state_message = '';
    /**
     * Output only. The time when the batch entered a current state.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp state_time = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $state_time = null;
    /**
     * Output only. The email address of the user who created the batch.
     *
     * Generated from protobuf field <code>string creator = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $creator = '';
    /**
     * Optional. The labels to associate with this batch.
     * Label **keys** must contain 1 to 63 characters, and must conform to
     * [RFC 1035](https://www.ietf.org/rfc/rfc1035.txt).
     * Label **values** may be empty, but, if present, must contain 1 to 63
     * characters, and must conform to [RFC
     * 1035](https://www.ietf.org/rfc/rfc1035.txt). No more than 32 labels can be
     * associated with a batch.
     *
     * Generated from protobuf field <code>map<string, string> labels = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $labels;
    /**
     * Optional. Runtime configuration for the batch execution.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.RuntimeConfig runtime_config = 14 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $runtime_config = null;
    /**
     * Optional. Environment configuration for the batch execution.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.EnvironmentConfig environment_config = 15 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $environment_config = null;
    /**
     * Output only. The resource name of the operation associated with this batch.
     *
     * Generated from protobuf field <code>string operation = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $operation = '';
    /**
     * Output only. Historical state information for the batch.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1.Batch.StateHistory state_history = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $state_history;
    protected $batch_config;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The resource name of the batch.
     *     @type string $uuid
     *           Output only. A batch UUID (Unique Universal Identifier). The service
     *           generates this value when it creates the batch.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time when the batch was created.
     *     @type \Google\Cloud\Dataproc\V1\PySparkBatch $pyspark_batch
     *           Optional. PySpark batch config.
     *     @type \Google\Cloud\Dataproc\V1\SparkBatch $spark_batch
     *           Optional. Spark batch config.
     *     @type \Google\Cloud\Dataproc\V1\SparkRBatch $spark_r_batch
     *           Optional. SparkR batch config.
     *     @type \Google\Cloud\Dataproc\V1\SparkSqlBatch $spark_sql_batch
     *           Optional. SparkSql batch config.
     *     @type \Google\Cloud\Dataproc\V1\RuntimeInfo $runtime_info
     *           Output only. Runtime information about batch execution.
     *     @type int $state
     *           Output only. The state of the batch.
     *     @type string $state_message
     *           Output only. Batch state details, such as a failure
     *           description if the state is `FAILED`.
     *     @type \Google\Protobuf\Timestamp $state_time
     *           Output only. The time when the batch entered a current state.
     *     @type string $creator
     *           Output only. The email address of the user who created the batch.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. The labels to associate with this batch.
     *           Label **keys** must contain 1 to 63 characters, and must conform to
     *           [RFC 1035](https://www.ietf.org/rfc/rfc1035.txt).
     *           Label **values** may be empty, but, if present, must contain 1 to 63
     *           characters, and must conform to [RFC
     *           1035](https://www.ietf.org/rfc/rfc1035.txt). No more than 32 labels can be
     *           associated with a batch.
     *     @type \Google\Cloud\Dataproc\V1\RuntimeConfig $runtime_config
     *           Optional. Runtime configuration for the batch execution.
     *     @type \Google\Cloud\Dataproc\V1\EnvironmentConfig $environment_config
     *           Optional. Environment configuration for the batch execution.
     *     @type string $operation
     *           Output only. The resource name of the operation associated with this batch.
     *     @type \Google\Cloud\Dataproc\V1\Batch\StateHistory[]|\Google\Protobuf\Internal\RepeatedField $state_history
     *           Output only. Historical state information for the batch.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\Batches::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the batch.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The resource name of the batch.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Output only. A batch UUID (Unique Universal Identifier). The service
     * generates this value when it creates the batch.
     *
     * Generated from protobuf field <code>string uuid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * Output only. A batch UUID (Unique Universal Identifier). The service
     * generates this value when it creates the batch.
     *
     * Generated from protobuf field <code>string uuid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setUuid($var)
    {
        GPBUtil::checkString($var, True);
        $this->uuid = $var;

        return $this;
    }

    /**
     * Output only. The time when the batch was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The time when the batch was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Optional. PySpark batch config.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.PySparkBatch pyspark_batch = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataproc\V1\PySparkBatch|null
     */
    public function getPysparkBatch()
    {
        return $this->readOneof(4);
    }

    public function hasPysparkBatch()
    {
        return $this->hasOneof(4);
    }

    /**
     * Optional. PySpark batch config.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.PySparkBatch pyspark_batch = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataproc\V1\PySparkBatch $var
     * @return $this
     */
    public function setPysparkBatch($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\PySparkBatch::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Optional. Spark batch config.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.SparkBatch spark_batch = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataproc\V1\SparkBatch|null
     */
    public function getSparkBatch()
    {
        return $this->readOneof(5);
    }

    public function hasSparkBatch()
    {
        return $this->hasOneof(5);
    }

    /**
     * Optional. Spark batch config.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.SparkBatch spark_batch = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataproc\V1\SparkBatch $var
     * @return $this
     */
    public function setSparkBatch($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\SparkBatch::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Optional. SparkR batch config.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.SparkRBatch spark_r_batch = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataproc\V1\SparkRBatch|null
     */
    public function getSparkRBatch()
    {
        return $this->readOneof(6);
    }

    public function hasSparkRBatch()
    {
        return $this->hasOneof(6);
    }

    /**
     * Optional. SparkR batch config.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.SparkRBatch spark_r_batch = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataproc\V1\SparkRBatch $var
     * @return $this
     */
    public function setSparkRBatch($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\SparkRBatch::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Optional. SparkSql batch config.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.SparkSqlBatch spark_sql_batch = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataproc\V1\SparkSqlBatch|null
     */
    public function getSparkSqlBatch()
    {
        return $this->readOneof(7);
    }

    public function hasSparkSqlBatch()
    {
        return $this->hasOneof(7);
    }

    /**
     * Optional. SparkSql batch config.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.SparkSqlBatch spark_sql_batch = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataproc\V1\SparkSqlBatch $var
     * @return $this
     */
    public function setSparkSqlBatch($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\SparkSqlBatch::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Output only. Runtime information about batch execution.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.RuntimeInfo runtime_info = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Dataproc\V1\RuntimeInfo|null
     */
    public function getRuntimeInfo()
    {
        return $this->runtime_info;
    }

    public function hasRuntimeInfo()
    {
        return isset($this->runtime_info);
    }

    public function clearRuntimeInfo()
    {
        unset($this->runtime_info);
    }

    /**
     * Output only. Runtime information about batch execution.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.RuntimeInfo runtime_info = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Dataproc\V1\RuntimeInfo $var
     * @return $this
     */
    public function setRuntimeInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\RuntimeInfo::class);
        $this->runtime_info = $var;

        return $this;
    }

    /**
     * Output only. The state of the batch.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.Batch.State state = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The state of the batch.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.Batch.State state = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataproc\V1\Batch\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. Batch state details, such as a failure
     * description if the state is `FAILED`.
     *
     * Generated from protobuf field <code>string state_message = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getStateMessage()
    {
        return $this->state_message;
    }

    /**
     * Output only. Batch state details, such as a failure
     * description if the state is `FAILED`.
     *
     * Generated from protobuf field <code>string state_message = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setStateMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->state_message = $var;

        return $this;
    }

    /**
     * Output only. The time when the batch entered a current state.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp state_time = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStateTime()
    {
        return $this->state_time;
    }

    public function hasStateTime()
    {
        return isset($this->state_time);
    }

    public function clearStateTime()
    {
        unset($this->state_time);
    }

    /**
     * Output only. The time when the batch entered a current state.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp state_time = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->state_time = $var;

        return $this;
    }

    /**
     * Output only. The email address of the user who created the batch.
     *
     * Generated from protobuf field <code>string creator = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getCreator()
    {
        return $this->creator;
    }

    /**
     * Output only. The email address of the user who created the batch.
     *
     * Generated from protobuf field <code>string creator = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setCreator($var)
    {
        GPBUtil::checkString($var, True);
        $this->creator = $var;

        return $this;
    }

    /**
     * Optional. The labels to associate with this batch.
     * Label **keys** must contain 1 to 63 characters, and must conform to
     * [RFC 1035](https://www.ietf.org/rfc/rfc1035.txt).
     * Label **values** may be empty, but, if present, must contain 1 to 63
     * characters, and must conform to [RFC
     * 1035](https://www.ietf.org/rfc/rfc1035.txt). No more than 32 labels can be
     * associated with a batch.
     *
     * Generated from protobuf field <code>map<string, string> labels = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. The labels to associate with this batch.
     * Label **keys** must contain 1 to 63 characters, and must conform to
     * [RFC 1035](https://www.ietf.org/rfc/rfc1035.txt).
     * Label **values** may be empty, but, if present, must contain 1 to 63
     * characters, and must conform to [RFC
     * 1035](https://www.ietf.org/rfc/rfc1035.txt). No more than 32 labels can be
     * associated with a batch.
     *
     * Generated from protobuf field <code>map<string, string> labels = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. Runtime configuration for the batch execution.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.RuntimeConfig runtime_config = 14 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataproc\V1\RuntimeConfig|null
     */
    public function getRuntimeConfig()
    {
        return $this->runtime_config;
    }

    public function hasRuntimeConfig()
    {
        return isset($this->runtime_config);
    }

    public function clearRuntimeConfig()
    {
        unset($this->runtime_config);
    }

    /**
     * Optional. Runtime configuration for the batch execution.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.RuntimeConfig runtime_config = 14 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataproc\V1\RuntimeConfig $var
     * @return $this
     */
    public function setRuntimeConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\RuntimeConfig::class);
        $this->runtime_config = $var;

        return $this;
    }

    /**
     * Optional. Environment configuration for the batch execution.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.EnvironmentConfig environment_config = 15 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataproc\V1\EnvironmentConfig|null
     */
    public function getEnvironmentConfig()
    {
        return $this->environment_config;
    }

    public function hasEnvironmentConfig()
    {
        return isset($this->environment_config);
    }

    public function clearEnvironmentConfig()
    {
        unset($this->environment_config);
    }

    /**
     * Optional. Environment configuration for the batch execution.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.EnvironmentConfig environment_config = 15 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataproc\V1\EnvironmentConfig $var
     * @return $this
     */
    public function setEnvironmentConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\EnvironmentConfig::class);
        $this->environment_config = $var;

        return $this;
    }

    /**
     * Output only. The resource name of the operation associated with this batch.
     *
     * Generated from protobuf field <code>string operation = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * Output only. The resource name of the operation associated with this batch.
     *
     * Generated from protobuf field <code>string operation = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setOperation($var)
    {
        GPBUtil::checkString($var, True);
        $this->operation = $var;

        return $this;
    }

    /**
     * Output only. Historical state information for the batch.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1.Batch.StateHistory state_history = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStateHistory()
    {
        return $this->state_history;
    }

    /**
     * Output only. Historical state information for the batch.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1.Batch.StateHistory state_history = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Dataproc\V1\Batch\StateHistory[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStateHistory($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataproc\V1\Batch\StateHistory::class);
        $this->state_history = $arr;

        return $this;
    }

    /**
     * @return string
     */
    public function getBatchConfig()
    {
        return $this->whichOneof("batch_config");
    }

}

