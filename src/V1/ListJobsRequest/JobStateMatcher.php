<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/jobs.proto

namespace Google\Cloud\Dataproc\V1\ListJobsRequest;

use UnexpectedValueException;

/**
 * A matcher that specifies categories of job states.
 *
 * Protobuf type <code>google.cloud.dataproc.v1.ListJobsRequest.JobStateMatcher</code>
 */
class JobStateMatcher
{
    /**
     * Match all jobs, regardless of state.
     *
     * Generated from protobuf enum <code>ALL = 0;</code>
     */
    const ALL = 0;
    /**
     * Only match jobs in non-terminal states: PENDING, RUNNING, or
     * CANCEL_PENDING.
     *
     * Generated from protobuf enum <code>ACTIVE = 1;</code>
     */
    const ACTIVE = 1;
    /**
     * Only match jobs in terminal states: CANCELLED, DONE, or ERROR.
     *
     * Generated from protobuf enum <code>NON_ACTIVE = 2;</code>
     */
    const NON_ACTIVE = 2;

    private static $valueToName = [
        self::ALL => 'ALL',
        self::ACTIVE => 'ACTIVE',
        self::NON_ACTIVE => 'NON_ACTIVE',
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
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


