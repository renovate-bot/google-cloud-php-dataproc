<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/clusters.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to get the resource representation for a cluster in a project.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.GetClusterRequest</code>
 */
class GetClusterRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The ID of the Google Cloud Platform project that the cluster
     * belongs to.
     *
     * Generated from protobuf field <code>string project_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $project_id = '';
    /**
     * Required. The Dataproc region in which to handle the request.
     *
     * Generated from protobuf field <code>string region = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $region = '';
    /**
     * Required. The cluster name.
     *
     * Generated from protobuf field <code>string cluster_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $cluster_name = '';

    /**
     * @param string $projectId   Required. The ID of the Google Cloud Platform project that the cluster
     *                            belongs to.
     * @param string $region      Required. The Dataproc region in which to handle the request.
     * @param string $clusterName Required. The cluster name.
     *
     * @return \Google\Cloud\Dataproc\V1\GetClusterRequest
     *
     * @experimental
     */
    public static function build(string $projectId, string $region, string $clusterName): self
    {
        return (new self())
            ->setProjectId($projectId)
            ->setRegion($region)
            ->setClusterName($clusterName);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project_id
     *           Required. The ID of the Google Cloud Platform project that the cluster
     *           belongs to.
     *     @type string $region
     *           Required. The Dataproc region in which to handle the request.
     *     @type string $cluster_name
     *           Required. The cluster name.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\Clusters::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The ID of the Google Cloud Platform project that the cluster
     * belongs to.
     *
     * Generated from protobuf field <code>string project_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * Required. The ID of the Google Cloud Platform project that the cluster
     * belongs to.
     *
     * Generated from protobuf field <code>string project_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;

        return $this;
    }

    /**
     * Required. The Dataproc region in which to handle the request.
     *
     * Generated from protobuf field <code>string region = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Required. The Dataproc region in which to handle the request.
     *
     * Generated from protobuf field <code>string region = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

    /**
     * Required. The cluster name.
     *
     * Generated from protobuf field <code>string cluster_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getClusterName()
    {
        return $this->cluster_name;
    }

    /**
     * Required. The cluster name.
     *
     * Generated from protobuf field <code>string cluster_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setClusterName($var)
    {
        GPBUtil::checkString($var, True);
        $this->cluster_name = $var;

        return $this;
    }

}

