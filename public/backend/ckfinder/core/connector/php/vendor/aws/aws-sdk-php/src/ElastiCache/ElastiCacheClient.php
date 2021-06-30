<?php
namespace Aws\ElastiCache;

use Aws\AwsClient;

/**
 * This Client is used to interact with the **Amazon ElastiCache** service.
 *
 * @method \Aws\Result addTagsToResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addTagsToResourceAsync(array $args = [])
 * @method \Aws\Result authorizeCacheSecurityGroupIngress(array $args = [])
 * @method \GuzzleHttp\Promise\Promise authorizeCacheSecurityGroupIngressAsync(array $args = [])
 * @method \Aws\Result batchApplyUpdateAction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchApplyUpdateActionAsync(array $args = [])
 * @method \Aws\Result batchStopUpdateAction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchStopUpdateActionAsync(array $args = [])
 * @method \Aws\Result completeMigration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise completeMigrationAsync(array $args = [])
 * @method \Aws\Result copySnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise copySnapshotAsync(array $args = [])
 * @method \Aws\Result createCacheCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCacheClusterAsync(array $args = [])
 * @method \Aws\Result createCacheParameterGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCacheParameterGroupAsync(array $args = [])
 * @method \Aws\Result createCacheSecurityGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCacheSecurityGroupAsync(array $args = [])
 * @method \Aws\Result createCacheSubnetGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCacheSubnetGroupAsync(array $args = [])
 * @method \Aws\Result createGlobalReplicationGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createGlobalReplicationGroupAsync(array $args = [])
 * @method \Aws\Result createReplicationGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createReplicationGroupAsync(array $args = [])
 * @method \Aws\Result createSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSnapshotAsync(array $args = [])
 * @method \Aws\Result createUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createUserAsync(array $args = [])
 * @method \Aws\Result createUserGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createUserGroupAsync(array $args = [])
 * @method \Aws\Result decreaseNodeGroupsInGlobalReplicationGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise decreaseNodeGroupsInGlobalReplicationGroupAsync(array $args = [])
 * @method \Aws\Result decreaseReplicaCount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise decreaseReplicaCountAsync(array $args = [])
 * @method \Aws\Result deleteCacheCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCacheClusterAsync(array $args = [])
 * @method \Aws\Result deleteCacheParameterGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCacheParameterGroupAsync(array $args = [])
 * @method \Aws\Result deleteCacheSecurityGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCacheSecurityGroupAsync(array $args = [])
 * @method \Aws\Result deleteCacheSubnetGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCacheSubnetGroupAsync(array $args = [])
 * @method \Aws\Result deleteGlobalReplicationGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteGlobalReplicationGroupAsync(array $args = [])
 * @method \Aws\Result deleteReplicationGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteReplicationGroupAsync(array $args = [])
 * @method \Aws\Result deleteSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSnapshotAsync(array $args = [])
 * @method \Aws\Result deleteUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteUserAsync(array $args = [])
 * @method \Aws\Result deleteUserGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteUserGroupAsync(array $args = [])
 * @method \Aws\Result describeCacheClusters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCacheClustersAsync(array $args = [])
 * @method \Aws\Result describeCacheEngineVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCacheEngineVersionsAsync(array $args = [])
 * @method \Aws\Result describeCacheParameterGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCacheParameterGroupsAsync(array $args = [])
 * @method \Aws\Result describeCacheParameters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCacheParametersAsync(array $args = [])
 * @method \Aws\Result describeCacheSecurityGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCacheSecurityGroupsAsync(array $args = [])
 * @method \Aws\Result describeCacheSubnetGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCacheSubnetGroupsAsync(array $args = [])
 * @method \Aws\Result describeEngineDefaultParameters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEngineDefaultParametersAsync(array $args = [])
 * @method \Aws\Result describeEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEventsAsync(array $args = [])
 * @method \Aws\Result describeGlobalReplicationGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeGlobalReplicationGroupsAsync(array $args = [])
 * @method \Aws\Result describeReplicationGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeReplicationGroupsAsync(array $args = [])
 * @method \Aws\Result describeReservedCacheNodes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeReservedCacheNodesAsync(array $args = [])
 * @method \Aws\Result describeReservedCacheNodesOfferings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeReservedCacheNodesOfferingsAsync(array $args = [])
 * @method \Aws\Result describeServiceUpdates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeServiceUpdatesAsync(array $args = [])
 * @method \Aws\Result describeSnapshots(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSnapshotsAsync(array $args = [])
 * @method \Aws\Result describeUpdateActions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeUpdateActionsAsync(array $args = [])
 * @method \Aws\Result describeUserGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeUserGroupsAsync(array $args = [])
 * @method \Aws\Result describeUsers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeUsersAsync(array $args = [])
 * @method \Aws\Result disassociateGlobalReplicationGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateGlobalReplicationGroupAsync(array $args = [])
 * @method \Aws\Result failoverGlobalReplicationGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise failoverGlobalReplicationGroupAsync(array $args = [])
 * @method \Aws\Result increaseNodeGroupsInGlobalReplicationGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise increaseNodeGroupsInGlobalReplicationGroupAsync(array $args = [])
 * @method \Aws\Result increaseReplicaCount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise increaseReplicaCountAsync(array $args = [])
 * @method \Aws\Result listAllowedNodeTypeModifications(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAllowedNodeTypeModificationsAsync(array $args = [])
 * @method \Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws\Result modifyCacheCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyCacheClusterAsync(array $args = [])
 * @method \Aws\Result modifyCacheParameterGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyCacheParameterGroupAsync(array $args = [])
 * @method \Aws\Result modifyCacheSubnetGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyCacheSubnetGroupAsync(array $args = [])
 * @method \Aws\Result modifyGlobalReplicationGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyGlobalReplicationGroupAsync(array $args = [])
 * @method \Aws\Result modifyReplicationGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyReplicationGroupAsync(array $args = [])
 * @method \Aws\Result modifyReplicationGroupShardConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyReplicationGroupShardConfigurationAsync(array $args = [])
 * @method \Aws\Result modifyUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyUserAsync(array $args = [])
 * @method \Aws\Result modifyUserGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyUserGroupAsync(array $args = [])
 * @method \Aws\Result purchaseReservedCacheNodesOffering(array $args = [])
 * @method \GuzzleHttp\Promise\Promise purchaseReservedCacheNodesOfferingAsync(array $args = [])
 * @method \Aws\Result rebalanceSlotsInGlobalReplicationGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rebalanceSlotsInGlobalReplicationGroupAsync(array $args = [])
 * @method \Aws\Result rebootCacheCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rebootCacheClusterAsync(array $args = [])
 * @method \Aws\Result removeTagsFromResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeTagsFromResourceAsync(array $args = [])
 * @method \Aws\Result resetCacheParameterGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resetCacheParameterGroupAsync(array $args = [])
 * @method \Aws\Result revokeCacheSecurityGroupIngress(array $args = [])
 * @method \GuzzleHttp\Promise\Promise revokeCacheSecurityGroupIngressAsync(array $args = [])
 * @method \Aws\Result startMigration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startMigrationAsync(array $args = [])
 * @method \Aws\Result testFailover(array $args = [])
 * @method \GuzzleHttp\Promise\Promise testFailoverAsync(array $args = [])
 */
class ElastiCacheClient extends AwsClient {}
