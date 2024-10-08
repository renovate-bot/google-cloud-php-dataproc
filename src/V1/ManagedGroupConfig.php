<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/clusters.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specifies the resources used to actively manage an instance group.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.ManagedGroupConfig</code>
 */
class ManagedGroupConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The name of the Instance Template used for the Managed
     * Instance Group.
     *
     * Generated from protobuf field <code>string instance_template_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $instance_template_name = '';
    /**
     * Output only. The name of the Instance Group Manager for this group.
     *
     * Generated from protobuf field <code>string instance_group_manager_name = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $instance_group_manager_name = '';
    /**
     * Output only. The partial URI to the instance group manager for this group.
     * E.g. projects/my-project/regions/us-central1/instanceGroupManagers/my-igm.
     *
     * Generated from protobuf field <code>string instance_group_manager_uri = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $instance_group_manager_uri = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $instance_template_name
     *           Output only. The name of the Instance Template used for the Managed
     *           Instance Group.
     *     @type string $instance_group_manager_name
     *           Output only. The name of the Instance Group Manager for this group.
     *     @type string $instance_group_manager_uri
     *           Output only. The partial URI to the instance group manager for this group.
     *           E.g. projects/my-project/regions/us-central1/instanceGroupManagers/my-igm.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\Clusters::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The name of the Instance Template used for the Managed
     * Instance Group.
     *
     * Generated from protobuf field <code>string instance_template_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getInstanceTemplateName()
    {
        return $this->instance_template_name;
    }

    /**
     * Output only. The name of the Instance Template used for the Managed
     * Instance Group.
     *
     * Generated from protobuf field <code>string instance_template_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setInstanceTemplateName($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance_template_name = $var;

        return $this;
    }

    /**
     * Output only. The name of the Instance Group Manager for this group.
     *
     * Generated from protobuf field <code>string instance_group_manager_name = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getInstanceGroupManagerName()
    {
        return $this->instance_group_manager_name;
    }

    /**
     * Output only. The name of the Instance Group Manager for this group.
     *
     * Generated from protobuf field <code>string instance_group_manager_name = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setInstanceGroupManagerName($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance_group_manager_name = $var;

        return $this;
    }

    /**
     * Output only. The partial URI to the instance group manager for this group.
     * E.g. projects/my-project/regions/us-central1/instanceGroupManagers/my-igm.
     *
     * Generated from protobuf field <code>string instance_group_manager_uri = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getInstanceGroupManagerUri()
    {
        return $this->instance_group_manager_uri;
    }

    /**
     * Output only. The partial URI to the instance group manager for this group.
     * E.g. projects/my-project/regions/us-central1/instanceGroupManagers/my-igm.
     *
     * Generated from protobuf field <code>string instance_group_manager_uri = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setInstanceGroupManagerUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance_group_manager_uri = $var;

        return $this;
    }

}

