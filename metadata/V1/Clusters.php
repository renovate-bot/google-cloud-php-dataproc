<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/clusters.proto

namespace GPBMetadata\Google\Cloud\Dataproc\V1;

class Clusters
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Dataproc\V1\Operations::initOnce();
        \GPBMetadata\Google\Cloud\Dataproc\V1\Shared::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Type\Interval::initOnce();
        $pool->internalAddGeneratedFile(
            '
�j
\'google/cloud/dataproc/v1/clusters.protogoogle.cloud.dataproc.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto)google/cloud/dataproc/v1/operations.proto%google/cloud/dataproc/v1/shared.proto#google/longrunning/operations.protogoogle/protobuf/duration.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.protogoogle/protobuf/wrappers.protogoogle/type/interval.proto"�
Cluster

project_id (	B�A
cluster_name (	B�A<
config (2\'.google.cloud.dataproc.v1.ClusterConfigB�AS
virtual_cluster_config
 (2..google.cloud.dataproc.v1.VirtualClusterConfigB�AB
labels (2-.google.cloud.dataproc.v1.Cluster.LabelsEntryB�A<
status (2\'.google.cloud.dataproc.v1.ClusterStatusB�AD
status_history (2\'.google.cloud.dataproc.v1.ClusterStatusB�A
cluster_uuid (	B�A>
metrics	 (2(.google.cloud.dataproc.v1.ClusterMetricsB�A-
LabelsEntry
key (	
value (	:8"�	
ClusterConfig
config_bucket (	B�A
temp_bucket (	B�AK
gce_cluster_config (2*.google.cloud.dataproc.v1.GceClusterConfigB�AI
master_config	 (2-.google.cloud.dataproc.v1.InstanceGroupConfigB�AI
worker_config
 (2-.google.cloud.dataproc.v1.InstanceGroupConfigB�AS
secondary_worker_config (2-.google.cloud.dataproc.v1.InstanceGroupConfigB�AF
software_config (2(.google.cloud.dataproc.v1.SoftwareConfigB�AW
initialization_actions (22.google.cloud.dataproc.v1.NodeInitializationActionB�AJ
encryption_config (2*.google.cloud.dataproc.v1.EncryptionConfigB�AL
autoscaling_config (2+.google.cloud.dataproc.v1.AutoscalingConfigB�AF
security_config (2(.google.cloud.dataproc.v1.SecurityConfigB�AH
lifecycle_config (2).google.cloud.dataproc.v1.LifecycleConfigB�AF
endpoint_config (2(.google.cloud.dataproc.v1.EndpointConfigB�AH
metastore_config (2).google.cloud.dataproc.v1.MetastoreConfigB�AS
dataproc_metric_config (2..google.cloud.dataproc.v1.DataprocMetricConfigB�AP
auxiliary_node_groups (2,.google.cloud.dataproc.v1.AuxiliaryNodeGroupB�A"�
VirtualClusterConfig
staging_bucket (	B�A[
kubernetes_cluster_config (21.google.cloud.dataproc.v1.KubernetesClusterConfigB�AH Y
auxiliary_services_config (21.google.cloud.dataproc.v1.AuxiliaryServicesConfigB�AB
infrastructure_config"�
AuxiliaryServicesConfigH
metastore_config (2).google.cloud.dataproc.v1.MetastoreConfigB�A\\
spark_history_server_config (22.google.cloud.dataproc.v1.SparkHistoryServerConfigB�A"�
EndpointConfigP

http_ports (27.google.cloud.dataproc.v1.EndpointConfig.HttpPortsEntryB�A$
enable_http_port_access (B�A0
HttpPortsEntry
key (	
value (	:8",
AutoscalingConfig

policy_uri (	B�A"4
EncryptionConfig 
gce_pd_kms_key_name (	B�A"�
GceClusterConfig
zone_uri (	B�A
network_uri (	B�A
subnetwork_uri (	B�A"
internal_ip_only (B�AH �k
private_ipv6_google_access (2B.google.cloud.dataproc.v1.GceClusterConfig.PrivateIpv6GoogleAccessB�A
service_account (	B�A#
service_account_scopes (	B�A
tags (	O
metadata (28.google.cloud.dataproc.v1.GceClusterConfig.MetadataEntryB�AP
reservation_affinity (2-.google.cloud.dataproc.v1.ReservationAffinityB�AM
node_group_affinity (2+.google.cloud.dataproc.v1.NodeGroupAffinityB�AW
shielded_instance_config (20.google.cloud.dataproc.v1.ShieldedInstanceConfigB�A_
confidential_instance_config (24.google.cloud.dataproc.v1.ConfidentialInstanceConfigB�A/
MetadataEntry
key (	
value (	:8"�
PrivateIpv6GoogleAccess*
&PRIVATE_IPV6_GOOGLE_ACCESS_UNSPECIFIED 
INHERIT_FROM_SUBNETWORK
OUTBOUND
BIDIRECTIONALB
_internal_ip_only"0
NodeGroupAffinity
node_group_uri (	B�A"�
ShieldedInstanceConfig$
enable_secure_boot (B�AH �
enable_vtpm (B�AH�-
enable_integrity_monitoring (B�AH�B
_enable_secure_bootB
_enable_vtpmB
_enable_integrity_monitoring"F
ConfidentialInstanceConfig(
enable_confidential_compute (B�A"�
InstanceGroupConfig
num_instances (B�A
instance_names (	B�AM
instance_references (2+.google.cloud.dataproc.v1.InstanceReferenceB�A
	image_uri (	B�A
machine_type_uri (	B�A>
disk_config (2$.google.cloud.dataproc.v1.DiskConfigB�A
is_preemptible (B�AY
preemptibility
 (2<.google.cloud.dataproc.v1.InstanceGroupConfig.PreemptibilityB�AO
managed_group_config (2,.google.cloud.dataproc.v1.ManagedGroupConfigB�AF
accelerators (2+.google.cloud.dataproc.v1.AcceleratorConfigB�A
min_cpu_platform	 (	B�A
min_num_instances (B�A]
instance_flexibility_policy (23.google.cloud.dataproc.v1.InstanceFlexibilityPolicyB�AD
startup_config (2\'.google.cloud.dataproc.v1.StartupConfigB�A"`
Preemptibility
PREEMPTIBILITY_UNSPECIFIED 
NON_PREEMPTIBLE
PREEMPTIBLE
SPOT"d
StartupConfig0
required_registration_fraction (B�AH �B!
_required_registration_fraction"m
InstanceReference
instance_name (	
instance_id (	

public_key (	
public_ecies_key (	"�
ManagedGroupConfig#
instance_template_name (	B�A(
instance_group_manager_name (	B�A\'
instance_group_manager_uri (	B�A"�
InstanceFlexibilityPolicyk
instance_selection_list (2E.google.cloud.dataproc.v1.InstanceFlexibilityPolicy.InstanceSelectionB�At
instance_selection_results (2K.google.cloud.dataproc.v1.InstanceFlexibilityPolicy.InstanceSelectionResultB�AB
InstanceSelection
machine_types (	B�A
rank (B�As
InstanceSelectionResult
machine_type (	B�AH �
vm_count (B�AH�B
_machine_typeB
	_vm_count"L
AcceleratorConfig
accelerator_type_uri (	
accelerator_count ("�

DiskConfig
boot_disk_type (	B�A
boot_disk_size_gb (B�A
num_local_ssds (B�A 
local_ssd_interface (	B�A"n
AuxiliaryNodeGroup<

node_group (2#.google.cloud.dataproc.v1.NodeGroupB�A
node_group_id (	B�A"�
	NodeGroup
name (	<
roles (2(.google.cloud.dataproc.v1.NodeGroup.RoleB�AM
node_group_config (2-.google.cloud.dataproc.v1.InstanceGroupConfigB�AD
labels (2/.google.cloud.dataproc.v1.NodeGroup.LabelsEntryB�A-
LabelsEntry
key (	
value (	:8"(
Role
ROLE_UNSPECIFIED 

DRIVER:v�As
!dataproc.googleapis.com/NodeGroupNprojects/{project}/regions/{region}/clusters/{cluster}/nodeGroups/{node_group}"s
NodeInitializationAction
executable_file (	B�A9
execution_timeout (2.google.protobuf.DurationB�A"�
ClusterStatusA
state (2-.google.cloud.dataproc.v1.ClusterStatus.StateB�A
detail (	B�A�A9
state_start_time (2.google.protobuf.TimestampB�AG
substate (20.google.cloud.dataproc.v1.ClusterStatus.SubstateB�A"�
State
UNKNOWN 
CREATING
RUNNING	
ERROR
ERROR_DUE_TO_UPDATE	
DELETING
UPDATING
STOPPING
STOPPED
STARTING
	REPAIRING
"<
Substate
UNSPECIFIED 
	UNHEALTHY
STALE_STATUS"�
SecurityConfigF
kerberos_config (2(.google.cloud.dataproc.v1.KerberosConfigB�AF
identity_config (2(.google.cloud.dataproc.v1.IdentityConfigB�A"�
KerberosConfig
enable_kerberos (B�A(
root_principal_password_uri (	B�A
kms_key_uri (	B�A
keystore_uri (	B�A
truststore_uri (	B�A"
keystore_password_uri (	B�A
key_password_uri (	B�A$
truststore_password_uri (	B�A$
cross_realm_trust_realm	 (	B�A"
cross_realm_trust_kdc
 (	B�A+
cross_realm_trust_admin_server (	B�A2
%cross_realm_trust_shared_password_uri (	B�A
kdc_db_key_uri (	B�A
tgt_lifetime_hours (B�A
realm (	B�A"�
IdentityConfigr
user_service_account_mapping (2G.google.cloud.dataproc.v1.IdentityConfig.UserServiceAccountMappingEntryB�A@
UserServiceAccountMappingEntry
key (	
value (	:8"�
SoftwareConfig
image_version (	B�AQ

properties (28.google.cloud.dataproc.v1.SoftwareConfig.PropertiesEntryB�AE
optional_components (2#.google.cloud.dataproc.v1.ComponentB�A1
PropertiesEntry
key (	
value (	:8"�
LifecycleConfig7
idle_delete_ttl (2.google.protobuf.DurationB�A;
auto_delete_time (2.google.protobuf.TimestampB�AH 9
auto_delete_ttl (2.google.protobuf.DurationB�AH 8
idle_start_time (2.google.protobuf.TimestampB�AB
ttl"_
MetastoreConfigL
dataproc_metastore_service (	B(�A�A"
 metastore.googleapis.com/Service"�
ClusterMetricsO
hdfs_metrics (29.google.cloud.dataproc.v1.ClusterMetrics.HdfsMetricsEntryO
yarn_metrics (29.google.cloud.dataproc.v1.ClusterMetrics.YarnMetricsEntry2
HdfsMetricsEntry
key (	
value (:82
YarnMetricsEntry
key (	
value (:8"�
DataprocMetricConfigK
metrics (25.google.cloud.dataproc.v1.DataprocMetricConfig.MetricB�A�
MetricW
metric_source (2;.google.cloud.dataproc.v1.DataprocMetricConfig.MetricSourceB�A
metric_overrides (	B�A"�
MetricSource
METRIC_SOURCE_UNSPECIFIED 
MONITORING_AGENT_DEFAULTS
HDFS	
SPARK
YARN
SPARK_HISTORY_SERVER
HIVESERVER2
HIVEMETASTORE"�
CreateClusterRequest

project_id (	B�A
region (	B�A7
cluster (2!.google.cloud.dataproc.v1.ClusterB�A

request_id (	B�AV
 action_on_failed_primary_workers (2\'.google.cloud.dataproc.v1.FailureActionB�A"�
UpdateClusterRequest

project_id (	B�A
region (	B�A
cluster_name (	B�A7
cluster (2!.google.cloud.dataproc.v1.ClusterB�AE
graceful_decommission_timeout (2.google.protobuf.DurationB�A4
update_mask (2.google.protobuf.FieldMaskB�A

request_id (	B�A"�
StopClusterRequest

project_id (	B�A
region (	B�A
cluster_name (	B�A
cluster_uuid (	B�A

request_id (	B�A"�
StartClusterRequest

project_id (	B�A
region (	B�A
cluster_name (	B�A
cluster_uuid (	B�A

request_id (	B�A"�
DeleteClusterRequest

project_id (	B�A
region (	B�A
cluster_name (	B�A
cluster_uuid (	B�A

request_id (	B�A"\\
GetClusterRequest

project_id (	B�A
region (	B�A
cluster_name (	B�A"�
ListClustersRequest

project_id (	B�A
region (	B�A
filter (	B�A
	page_size (B�A

page_token (	B�A"n
ListClustersResponse8
clusters (2!.google.cloud.dataproc.v1.ClusterB�A
next_page_token (	B�A"�
DiagnoseClusterRequest

project_id (	B�A
region (	B�A
cluster_name (	B�A
tarball_gcs_dir (	B�A6
diagnosis_interval (2.google.type.IntervalB�A
jobs
 (	B�A!
yarn_application_ids (	B�A"1
DiagnoseClusterResults

output_uri (	B�A"�
ReservationAffinityY
consume_reservation_type (22.google.cloud.dataproc.v1.ReservationAffinity.TypeB�A
key (	B�A
values (	B�A"_
Type
TYPE_UNSPECIFIED 
NO_RESERVATION
ANY_RESERVATION
SPECIFIC_RESERVATION2�
ClusterController�
CreateCluster..google.cloud.dataproc.v1.CreateClusterRequest.google.longrunning.Operation"����>"3/v1/projects/{project_id}/regions/{region}/clusters:cluster�Aproject_id,region,cluster�A<
Cluster1google.cloud.dataproc.v1.ClusterOperationMetadata�
UpdateCluster..google.cloud.dataproc.v1.UpdateClusterRequest.google.longrunning.Operation"����M2B/v1/projects/{project_id}/regions/{region}/clusters/{cluster_name}:cluster�A2project_id,region,cluster_name,cluster,update_mask�A<
Cluster1google.cloud.dataproc.v1.ClusterOperationMetadata�
StopCluster,.google.cloud.dataproc.v1.StopClusterRequest.google.longrunning.Operation"����L"G/v1/projects/{project_id}/regions/{region}/clusters/{cluster_name}:stop:*�A<
Cluster1google.cloud.dataproc.v1.ClusterOperationMetadata�
StartCluster-.google.cloud.dataproc.v1.StartClusterRequest.google.longrunning.Operation"����M"H/v1/projects/{project_id}/regions/{region}/clusters/{cluster_name}:start:*�A<
Cluster1google.cloud.dataproc.v1.ClusterOperationMetadata�
DeleteCluster..google.cloud.dataproc.v1.DeleteClusterRequest.google.longrunning.Operation"����D*B/v1/projects/{project_id}/regions/{region}/clusters/{cluster_name}�Aproject_id,region,cluster_name�AJ
google.protobuf.Empty1google.cloud.dataproc.v1.ClusterOperationMetadata�

GetCluster+.google.cloud.dataproc.v1.GetClusterRequest!.google.cloud.dataproc.v1.Cluster"k���DB/v1/projects/{project_id}/regions/{region}/clusters/{cluster_name}�Aproject_id,region,cluster_name�
ListClusters-.google.cloud.dataproc.v1.ListClustersRequest..google.cloud.dataproc.v1.ListClustersResponse"j���53/v1/projects/{project_id}/regions/{region}/clusters�Aproject_id,region�Aproject_id,region,filter�
DiagnoseCluster0.google.cloud.dataproc.v1.DiagnoseClusterRequest.google.longrunning.Operation"����P"K/v1/projects/{project_id}/regions/{region}/clusters/{cluster_name}:diagnose:*�Aproject_id,region,cluster_name�AK
DiagnoseClusterResults1google.cloud.dataproc.v1.ClusterOperationMetadataK�Adataproc.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformBl
com.google.cloud.dataproc.v1BClustersProtoPZ;cloud.google.com/go/dataproc/v2/apiv1/dataprocpb;dataprocpbbproto3'
        , true);

        static::$is_initialized = true;
    }
}

