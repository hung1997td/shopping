<?php
namespace Aws\Athena;

use Aws\AwsClient;

/**
 * This Client is used to interact with the **Amazon Athena** service.
 * @method \Aws\Result batchGetNamedQuery(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetNamedQueryAsync(array $args = [])
 * @method \Aws\Result batchGetQueryExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetQueryExecutionAsync(array $args = [])
 * @method \Aws\Result createDataCatalog(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDataCatalogAsync(array $args = [])
 * @method \Aws\Result createNamedQuery(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createNamedQueryAsync(array $args = [])
 * @method \Aws\Result createPreparedStatement(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPreparedStatementAsync(array $args = [])
 * @method \Aws\Result createWorkGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createWorkGroupAsync(array $args = [])
 * @method \Aws\Result deleteDataCatalog(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDataCatalogAsync(array $args = [])
 * @method \Aws\Result deleteNamedQuery(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteNamedQueryAsync(array $args = [])
 * @method \Aws\Result deletePreparedStatement(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePreparedStatementAsync(array $args = [])
 * @method \Aws\Result deleteWorkGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteWorkGroupAsync(array $args = [])
 * @method \Aws\Result getDataCatalog(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDataCatalogAsync(array $args = [])
 * @method \Aws\Result getDatabase(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDatabaseAsync(array $args = [])
 * @method \Aws\Result getNamedQuery(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getNamedQueryAsync(array $args = [])
 * @method \Aws\Result getPreparedStatement(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPreparedStatementAsync(array $args = [])
 * @method \Aws\Result getQueryExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getQueryExecutionAsync(array $args = [])
 * @method \Aws\Result getQueryResults(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getQueryResultsAsync(array $args = [])
 * @method \Aws\Result getTableMetadata(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTableMetadataAsync(array $args = [])
 * @method \Aws\Result getWorkGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getWorkGroupAsync(array $args = [])
 * @method \Aws\Result listDataCatalogs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDataCatalogsAsync(array $args = [])
 * @method \Aws\Result listDatabases(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDatabasesAsync(array $args = [])
 * @method \Aws\Result listEngineVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listEngineVersionsAsync(array $args = [])
 * @method \Aws\Result listNamedQueries(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listNamedQueriesAsync(array $args = [])
 * @method \Aws\Result listPreparedStatements(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPreparedStatementsAsync(array $args = [])
 * @method \Aws\Result listQueryExecutions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listQueryExecutionsAsync(array $args = [])
 * @method \Aws\Result listTableMetadata(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTableMetadataAsync(array $args = [])
 * @method \Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws\Result listWorkGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listWorkGroupsAsync(array $args = [])
 * @method \Aws\Result startQueryExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startQueryExecutionAsync(array $args = [])
 * @method \Aws\Result stopQueryExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopQueryExecutionAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateDataCatalog(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDataCatalogAsync(array $args = [])
 * @method \Aws\Result updatePreparedStatement(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePreparedStatementAsync(array $args = [])
 * @method \Aws\Result updateWorkGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateWorkGroupAsync(array $args = [])
 */
class AthenaClient extends AwsClient {}
