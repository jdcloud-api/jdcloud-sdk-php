<?php
/**
 * Rdts
 *
 * @category Jdcloud
 * @package  Jdcloud\Rdts
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Rdts;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with rdts.
 *
 * @method \Jdcloud\Result describeMigrations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMigrationsAsync(array $args = [])
 * @method \Jdcloud\Result createMigration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createMigrationAsync(array $args = [])
 * @method \Jdcloud\Result describeMigration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMigrationAsync(array $args = [])
 * @method \Jdcloud\Result modifyMigration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyMigrationAsync(array $args = [])
 * @method \Jdcloud\Result deleteMigration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMigrationAsync(array $args = [])
 * @method \Jdcloud\Result modifyMigrationName(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyMigrationNameAsync(array $args = [])
 * @method \Jdcloud\Result getMigrationProgress(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMigrationProgressAsync(array $args = [])
 * @method \Jdcloud\Result createMigrationJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createMigrationJobAsync(array $args = [])
 * @method \Jdcloud\Result startMigrationJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startMigrationJobAsync(array $args = [])
 * @method \Jdcloud\Result restartMigrationJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise restartMigrationJobAsync(array $args = [])
 */
class RdtsClient extends JdCloudClient
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
                        'service' => 'rdts',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'rdts'
            );
        };

        parent::__construct($args);
    }
}