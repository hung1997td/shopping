<?php
namespace Aws\ApplicationDiscoveryService;

use Aws\AwsClient;

/**
 * This Client is used to interact with the **AWS Application Discovery Service** service.
 * @method \Aws\Result associateConfigurationItemsToApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateConfigurationItemsToApplicationAsync(array $args = [])
 * @method \Aws\Result batchDeleteImportData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchDeleteImportDataAsync(array $args = [])
 * @method \Aws\Result createApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createApplicationAsync(array $args = [])
 * @method \Aws\Result createTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTagsAsync(array $args = [])
 * @method \Aws\Result deleteApplications(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteApplicationsAsync(array $args = [])
 * @method \Aws\Result deleteTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTagsAsync(array $args = [])
 * @method \Aws\Result describeAgents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAgentsAsync(array $args = [])
 * @method \Aws\Result describeConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeConfigurationsAsync(array $args = [])
 * @method \Aws\Result describeContinuousExports(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeContinuousExportsAsync(array $args = [])
 * @method \Aws\Result describeExportConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeExportConfigurationsAsync(array $args = [])
 * @method \Aws\Result describeExportTasks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeExportTasksAsync(array $args = [])
 * @method \Aws\Result describeImportTasks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeImportTasksAsync(array $args = [])
 * @method \Aws\Result describeTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTagsAsync(array $args = [])
 * @method \Aws\Result disassociateConfigurationItemsFromApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateConfigurationItemsFromApplicationAsync(array $args = [])
 * @method \Aws\Result exportConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise exportConfigurationsAsync(array $args = [])
 * @method \Aws\Result getDiscoverySummary(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDiscoverySummaryAsync(array $args = [])
 * @method \Aws\Result listConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listConfigurationsAsync(array $args = [])
 * @method \Aws\Result listServerNeighbors(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listServerNeighborsAsync(array $args = [])
 * @method \Aws\Result startContinuousExport(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startContinuousExportAsync(array $args = [])
 * @method \Aws\Result startDataCollectionByAgentIds(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startDataCollectionByAgentIdsAsync(array $args = [])
 * @method \Aws\Result startExportTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startExportTaskAsync(array $args = [])
 * @method \Aws\Result startImportTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startImportTaskAsync(array $args = [])
 * @method \Aws\Result stopContinuousExport(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopContinuousExportAsync(array $args = [])
 * @method \Aws\Result stopDataCollectionByAgentIds(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopDataCollectionByAgentIdsAsync(array $args = [])
 * @method \Aws\Result updateApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateApplicationAsync(array $args = [])
 */
class ApplicationDiscoveryServiceClient extends AwsClient {}
