<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/jobs.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Dataproc job for running [Apache Spark
 * SQL](https://spark.apache.org/sql/) queries.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.SparkSqlJob</code>
 */
class SparkSqlJob extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Mapping of query variable names to values (equivalent to the
     * Spark SQL command: SET `name="value";`).
     *
     * Generated from protobuf field <code>map<string, string> script_variables = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $script_variables;
    /**
     * Optional. A mapping of property names to values, used to configure
     * Spark SQL's SparkConf. Properties that conflict with values set by the
     * Dataproc API may be overwritten.
     *
     * Generated from protobuf field <code>map<string, string> properties = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $properties;
    /**
     * Optional. HCFS URIs of jar files to be added to the Spark CLASSPATH.
     *
     * Generated from protobuf field <code>repeated string jar_file_uris = 56 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $jar_file_uris;
    /**
     * Optional. The runtime log config for job execution.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.LoggingConfig logging_config = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $logging_config = null;
    protected $queries;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $query_file_uri
     *           The HCFS URI of the script that contains SQL queries.
     *     @type \Google\Cloud\Dataproc\V1\QueryList $query_list
     *           A list of queries.
     *     @type array|\Google\Protobuf\Internal\MapField $script_variables
     *           Optional. Mapping of query variable names to values (equivalent to the
     *           Spark SQL command: SET `name="value";`).
     *     @type array|\Google\Protobuf\Internal\MapField $properties
     *           Optional. A mapping of property names to values, used to configure
     *           Spark SQL's SparkConf. Properties that conflict with values set by the
     *           Dataproc API may be overwritten.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $jar_file_uris
     *           Optional. HCFS URIs of jar files to be added to the Spark CLASSPATH.
     *     @type \Google\Cloud\Dataproc\V1\LoggingConfig $logging_config
     *           Optional. The runtime log config for job execution.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\Jobs::initOnce();
        parent::__construct($data);
    }

    /**
     * The HCFS URI of the script that contains SQL queries.
     *
     * Generated from protobuf field <code>string query_file_uri = 1;</code>
     * @return string
     */
    public function getQueryFileUri()
    {
        return $this->readOneof(1);
    }

    public function hasQueryFileUri()
    {
        return $this->hasOneof(1);
    }

    /**
     * The HCFS URI of the script that contains SQL queries.
     *
     * Generated from protobuf field <code>string query_file_uri = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setQueryFileUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * A list of queries.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.QueryList query_list = 2;</code>
     * @return \Google\Cloud\Dataproc\V1\QueryList|null
     */
    public function getQueryList()
    {
        return $this->readOneof(2);
    }

    public function hasQueryList()
    {
        return $this->hasOneof(2);
    }

    /**
     * A list of queries.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.QueryList query_list = 2;</code>
     * @param \Google\Cloud\Dataproc\V1\QueryList $var
     * @return $this
     */
    public function setQueryList($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\QueryList::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Optional. Mapping of query variable names to values (equivalent to the
     * Spark SQL command: SET `name="value";`).
     *
     * Generated from protobuf field <code>map<string, string> script_variables = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getScriptVariables()
    {
        return $this->script_variables;
    }

    /**
     * Optional. Mapping of query variable names to values (equivalent to the
     * Spark SQL command: SET `name="value";`).
     *
     * Generated from protobuf field <code>map<string, string> script_variables = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setScriptVariables($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->script_variables = $arr;

        return $this;
    }

    /**
     * Optional. A mapping of property names to values, used to configure
     * Spark SQL's SparkConf. Properties that conflict with values set by the
     * Dataproc API may be overwritten.
     *
     * Generated from protobuf field <code>map<string, string> properties = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * Optional. A mapping of property names to values, used to configure
     * Spark SQL's SparkConf. Properties that conflict with values set by the
     * Dataproc API may be overwritten.
     *
     * Generated from protobuf field <code>map<string, string> properties = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setProperties($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->properties = $arr;

        return $this;
    }

    /**
     * Optional. HCFS URIs of jar files to be added to the Spark CLASSPATH.
     *
     * Generated from protobuf field <code>repeated string jar_file_uris = 56 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getJarFileUris()
    {
        return $this->jar_file_uris;
    }

    /**
     * Optional. HCFS URIs of jar files to be added to the Spark CLASSPATH.
     *
     * Generated from protobuf field <code>repeated string jar_file_uris = 56 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setJarFileUris($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->jar_file_uris = $arr;

        return $this;
    }

    /**
     * Optional. The runtime log config for job execution.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.LoggingConfig logging_config = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataproc\V1\LoggingConfig|null
     */
    public function getLoggingConfig()
    {
        return $this->logging_config;
    }

    public function hasLoggingConfig()
    {
        return isset($this->logging_config);
    }

    public function clearLoggingConfig()
    {
        unset($this->logging_config);
    }

    /**
     * Optional. The runtime log config for job execution.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.LoggingConfig logging_config = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataproc\V1\LoggingConfig $var
     * @return $this
     */
    public function setLoggingConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\LoggingConfig::class);
        $this->logging_config = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getQueries()
    {
        return $this->whichOneof("queries");
    }

}

