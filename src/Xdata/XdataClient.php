<?php
namespace Jdcloud\Xdata;

use Jdcloud\JdcloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with xdata.
 *
 * @method \Jdcloud\Result listDatabaseInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDatabaseInfoAsync(array $args = [])
 * @method \Jdcloud\Result getDatabaseInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDatabaseInfoAsync(array $args = [])
 * @method \Jdcloud\Result createDatabase(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDatabaseAsync(array $args = [])
 * @method \Jdcloud\Result deleteDatabase(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDatabaseAsync(array $args = [])
 * @method \Jdcloud\Result listInstanceInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listInstanceInfoAsync(array $args = [])
 * @method \Jdcloud\Result executeRasQuery(array $args = [])
 * @method \GuzzleHttp\Promise\Promise executeRasQueryAsync(array $args = [])
 * @method \Jdcloud\Result executePySparkQuery(array $args = [])
 * @method \GuzzleHttp\Promise\Promise executePySparkQueryAsync(array $args = [])
 * @method \Jdcloud\Result getRasQueryState(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRasQueryStateAsync(array $args = [])
 * @method \Jdcloud\Result getPySparkExecuteState(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPySparkExecuteStateAsync(array $args = [])
 * @method \Jdcloud\Result getRasQueryLog(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRasQueryLogAsync(array $args = [])
 * @method \Jdcloud\Result getRasQueryResult(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRasQueryResultAsync(array $args = [])
 * @method \Jdcloud\Result getPySparkExecuteResult(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPySparkExecuteResultAsync(array $args = [])
 * @method \Jdcloud\Result cancelRasQuery(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelRasQueryAsync(array $args = [])
 * @method \Jdcloud\Result cancelPySparkJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelPySparkJobAsync(array $args = [])
 * @method \Jdcloud\Result listTableInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTableInfoAsync(array $args = [])
 * @method \Jdcloud\Result createTable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTableAsync(array $args = [])
 * @method \Jdcloud\Result getTableInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTableInfoAsync(array $args = [])
 * @method \Jdcloud\Result deleteTable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTableAsync(array $args = [])
 */
class XdataClient extends JdcloudClient
{
    public function __construct(array $args)
    {
        $args['with_resolved'] = function (array $args) {
            $this->getHandlerList()->appendInit(
                PresignUrlMiddleware::wrap(
                    $this,
                    $args['endpoint_provider'],
                    [
                        'operations' => [
                        ],
                        'service' => 'xdata',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'xdata'
            );
        };

        parent::__construct($args);
    }
}