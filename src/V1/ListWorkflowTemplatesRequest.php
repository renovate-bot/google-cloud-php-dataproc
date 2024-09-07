<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/workflow_templates.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request to list workflow templates in a project.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.ListWorkflowTemplatesRequest</code>
 */
class ListWorkflowTemplatesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the region or location, as described
     * in https://cloud.google.com/apis/design/resource_names.
     * * For `projects.regions.workflowTemplates,list`, the resource
     *   name of the region has the following format:
     *   `projects/{project_id}/regions/{region}`
     * * For `projects.locations.workflowTemplates.list`, the
     *   resource name of the location has the following format:
     *   `projects/{project_id}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Optional. The maximum number of results to return in each response.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_size = 0;
    /**
     * Optional. The page token, returned by a previous call, to request the
     * next page of results.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_token = '';

    /**
     * @param string $parent Required. The resource name of the region or location, as described
     *                       in https://cloud.google.com/apis/design/resource_names.
     *
     *                       * For `projects.regions.workflowTemplates,list`, the resource
     *                       name of the region has the following format:
     *                       `projects/{project_id}/regions/{region}`
     *
     *                       * For `projects.locations.workflowTemplates.list`, the
     *                       resource name of the location has the following format:
     *                       `projects/{project_id}/locations/{location}`
     *                       Please see {@see WorkflowTemplateServiceClient::regionName()} for help formatting this field.
     *
     * @return \Google\Cloud\Dataproc\V1\ListWorkflowTemplatesRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the region or location, as described
     *           in https://cloud.google.com/apis/design/resource_names.
     *           * For `projects.regions.workflowTemplates,list`, the resource
     *             name of the region has the following format:
     *             `projects/{project_id}/regions/{region}`
     *           * For `projects.locations.workflowTemplates.list`, the
     *             resource name of the location has the following format:
     *             `projects/{project_id}/locations/{location}`
     *     @type int $page_size
     *           Optional. The maximum number of results to return in each response.
     *     @type string $page_token
     *           Optional. The page token, returned by a previous call, to request the
     *           next page of results.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\WorkflowTemplates::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the region or location, as described
     * in https://cloud.google.com/apis/design/resource_names.
     * * For `projects.regions.workflowTemplates,list`, the resource
     *   name of the region has the following format:
     *   `projects/{project_id}/regions/{region}`
     * * For `projects.locations.workflowTemplates.list`, the
     *   resource name of the location has the following format:
     *   `projects/{project_id}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the region or location, as described
     * in https://cloud.google.com/apis/design/resource_names.
     * * For `projects.regions.workflowTemplates,list`, the resource
     *   name of the region has the following format:
     *   `projects/{project_id}/regions/{region}`
     * * For `projects.locations.workflowTemplates.list`, the
     *   resource name of the location has the following format:
     *   `projects/{project_id}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Optional. The maximum number of results to return in each response.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. The maximum number of results to return in each response.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Optional. The page token, returned by a previous call, to request the
     * next page of results.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. The page token, returned by a previous call, to request the
     * next page of results.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

