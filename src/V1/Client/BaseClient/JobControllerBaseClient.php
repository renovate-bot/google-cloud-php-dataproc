<?php
/*
 * Copyright 2023 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/dataproc/v1/jobs.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Dataproc\V1\Client\BaseClient;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\LongRunning\OperationsClient;
use Google\ApiCore\OperationResponse;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Dataproc\V1\CancelJobRequest;
use Google\Cloud\Dataproc\V1\DeleteJobRequest;
use Google\Cloud\Dataproc\V1\GetJobRequest;
use Google\Cloud\Dataproc\V1\Job;
use Google\Cloud\Dataproc\V1\ListJobsRequest;
use Google\Cloud\Dataproc\V1\SubmitJobRequest;
use Google\Cloud\Dataproc\V1\UpdateJobRequest;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: The JobController provides methods to manage jobs.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * This class is currently experimental and may be subject to changes. See {@see
 * \Google\Cloud\Dataproc\V1\JobControllerClient} for the stable implementation
 *
 * @experimental
 *
 * @internal
 *
 * @method PromiseInterface cancelJobAsync(CancelJobRequest $request, array $optionalArgs = [])
 * @method PromiseInterface deleteJobAsync(DeleteJobRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getJobAsync(GetJobRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listJobsAsync(ListJobsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface submitJobAsync(SubmitJobRequest $request, array $optionalArgs = [])
 * @method PromiseInterface submitJobAsOperationAsync(SubmitJobRequest $request, array $optionalArgs = [])
 * @method PromiseInterface updateJobAsync(UpdateJobRequest $request, array $optionalArgs = [])
 */
abstract class JobControllerBaseClient
{
    use GapicClientTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.dataproc.v1.JobController';

    /** The default address of the service. */
    private const SERVICE_ADDRESS = 'dataproc.googleapis.com';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
    ];

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../../resources/job_controller_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../../resources/job_controller_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../../resources/job_controller_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../../resources/job_controller_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Return an OperationsClient object with the same endpoint as $this.
     *
     * @return OperationsClient
     */
    public function getOperationsClient()
    {
        return $this->operationsClient;
    }

    /**
     * Resume an existing long running operation that was previously started by a long
     * running API method. If $methodName is not provided, or does not match a long
     * running API method, then the operation can still be resumed, but the
     * OperationResponse object will not deserialize the final response.
     *
     * @param string $operationName The name of the long running operation
     * @param string $methodName    The name of the method used to start the operation
     *
     * @return OperationResponse
     */
    public function resumeOperation($operationName, $methodName = null)
    {
        $options = isset($this->descriptors[$methodName]['longRunning']) ? $this->descriptors[$methodName]['longRunning'] : [];
        $operation = new OperationResponse($operationName, $this->getOperationsClient(), $options);
        $operation->reload();
        return $operation;
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'dataproc.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string
     *           `rest` or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $apiEndpoint setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string. This can be used to
     *           provide a certificate and private key to the transport layer for mTLS.
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
        $this->operationsClient = $this->createOperationsClient($clientOptions);
    }

    /** Handles execution of the async variants for each documented method. */
    public function __call($method, $args)
    {
        if (substr($method, -5) !== 'Async') {
            trigger_error('Call to undefined method ' . __CLASS__ . "::$method()", E_USER_ERROR);
        }

        array_unshift($args, substr($method, 0, -5));
        return call_user_func_array([$this, 'startAsyncCall'], $args);
    }

    /**
     * Starts a job cancellation request. To access the job resource
     * after cancellation, call
     * [regions/{region}/jobs.list](https://cloud.google.com/dataproc/docs/reference/rest/v1/projects.regions.jobs/list)
     * or
     * [regions/{region}/jobs.get](https://cloud.google.com/dataproc/docs/reference/rest/v1/projects.regions.jobs/get).
     *
     * The async variant is {@see self::cancelJobAsync()} .
     *
     * @param CancelJobRequest $request     A request to house fields associated with the call.
     * @param array            $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Job
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function cancelJob(CancelJobRequest $request, array $callOptions = []): Job
    {
        return $this->startApiCall('CancelJob', $request, $callOptions)->wait();
    }

    /**
     * Deletes the job from the project. If the job is active, the delete fails,
     * and the response returns `FAILED_PRECONDITION`.
     *
     * The async variant is {@see self::deleteJobAsync()} .
     *
     * @param DeleteJobRequest $request     A request to house fields associated with the call.
     * @param array            $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function deleteJob(DeleteJobRequest $request, array $callOptions = []): void
    {
        $this->startApiCall('DeleteJob', $request, $callOptions)->wait();
    }

    /**
     * Gets the resource representation for a job in a project.
     *
     * The async variant is {@see self::getJobAsync()} .
     *
     * @param GetJobRequest $request     A request to house fields associated with the call.
     * @param array         $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Job
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getJob(GetJobRequest $request, array $callOptions = []): Job
    {
        return $this->startApiCall('GetJob', $request, $callOptions)->wait();
    }

    /**
     * Lists regions/{region}/jobs in a project.
     *
     * The async variant is {@see self::listJobsAsync()} .
     *
     * @param ListJobsRequest $request     A request to house fields associated with the call.
     * @param array           $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listJobs(ListJobsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListJobs', $request, $callOptions);
    }

    /**
     * Submits a job to a cluster.
     *
     * The async variant is {@see self::submitJobAsync()} .
     *
     * @param SubmitJobRequest $request     A request to house fields associated with the call.
     * @param array            $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Job
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function submitJob(SubmitJobRequest $request, array $callOptions = []): Job
    {
        return $this->startApiCall('SubmitJob', $request, $callOptions)->wait();
    }

    /**
     * Submits job to a cluster.
     *
     * The async variant is {@see self::submitJobAsOperationAsync()} .
     *
     * @param SubmitJobRequest $request     A request to house fields associated with the call.
     * @param array            $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function submitJobAsOperation(SubmitJobRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('SubmitJobAsOperation', $request, $callOptions)->wait();
    }

    /**
     * Updates a job in a project.
     *
     * The async variant is {@see self::updateJobAsync()} .
     *
     * @param UpdateJobRequest $request     A request to house fields associated with the call.
     * @param array            $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Job
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function updateJob(UpdateJobRequest $request, array $callOptions = []): Job
    {
        return $this->startApiCall('UpdateJob', $request, $callOptions)->wait();
    }
}
