<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/shared.proto

namespace Google\Cloud\Dataproc\V1\GkeNodePoolTarget;

use UnexpectedValueException;

/**
 * `Role` specifies the tasks that will run on the node pool. Roles can be
 * specific to workloads. Exactly one
 * [GkeNodePoolTarget][google.cloud.dataproc.v1.GkeNodePoolTarget] within the
 * virtual cluster must have the `DEFAULT` role, which is used to run all
 * workloads that are not associated with a node pool.
 *
 * Protobuf type <code>google.cloud.dataproc.v1.GkeNodePoolTarget.Role</code>
 */
class Role
{
    /**
     * Role is unspecified.
     *
     * Generated from protobuf enum <code>ROLE_UNSPECIFIED = 0;</code>
     */
    const ROLE_UNSPECIFIED = 0;
    /**
     * At least one node pool must have the `DEFAULT` role.
     * Work assigned to a role that is not associated with a node pool
     * is assigned to the node pool with the `DEFAULT` role. For example,
     * work assigned to the `CONTROLLER` role will be assigned to the node pool
     * with the `DEFAULT` role if no node pool has the `CONTROLLER` role.
     *
     * Generated from protobuf enum <code>DEFAULT = 1;</code>
     */
    const PBDEFAULT = 1;
    /**
     * Run work associated with the Dataproc control plane (for example,
     * controllers and webhooks). Very low resource requirements.
     *
     * Generated from protobuf enum <code>CONTROLLER = 2;</code>
     */
    const CONTROLLER = 2;
    /**
     * Run work associated with a Spark driver of a job.
     *
     * Generated from protobuf enum <code>SPARK_DRIVER = 3;</code>
     */
    const SPARK_DRIVER = 3;
    /**
     * Run work associated with a Spark executor of a job.
     *
     * Generated from protobuf enum <code>SPARK_EXECUTOR = 4;</code>
     */
    const SPARK_EXECUTOR = 4;

    private static $valueToName = [
        self::ROLE_UNSPECIFIED => 'ROLE_UNSPECIFIED',
        self::PBDEFAULT => 'DEFAULT',
        self::CONTROLLER => 'CONTROLLER',
        self::SPARK_DRIVER => 'SPARK_DRIVER',
        self::SPARK_EXECUTOR => 'SPARK_EXECUTOR',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            $pbconst =  __CLASS__. '::PB' . strtoupper($name);
            if (!defined($pbconst)) {
                throw new UnexpectedValueException(sprintf(
                        'Enum %s has no value defined for name %s', __CLASS__, $name));
            }
            return constant($pbconst);
        }
        return constant($const);
    }
}


