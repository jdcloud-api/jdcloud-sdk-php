<?php
/**
 * Dcap
 *
 * @category Jdcloud
 * @package  Jdcloud\Dcap
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Dcap;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with dcap.
 *
 * @method \Jdcloud\Result describeLevelList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLevelListAsync(array $args = [])
 * @method \Jdcloud\Result modifyLevel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyLevelAsync(array $args = [])
 * @method \Jdcloud\Result describeCategoryList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCategoryListAsync(array $args = [])
 * @method \Jdcloud\Result addCategory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addCategoryAsync(array $args = [])
 * @method \Jdcloud\Result modifyCategory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyCategoryAsync(array $args = [])
 * @method \Jdcloud\Result deleteCategory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCategoryAsync(array $args = [])
 * @method \Jdcloud\Result describeDataTypeList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDataTypeListAsync(array $args = [])
 * @method \Jdcloud\Result createDataType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDataTypeAsync(array $args = [])
 * @method \Jdcloud\Result modifyDataType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyDataTypeAsync(array $args = [])
 * @method \Jdcloud\Result deleteDataType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDataTypeAsync(array $args = [])
 * @method \Jdcloud\Result describeDataSourceList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDataSourceListAsync(array $args = [])
 * @method \Jdcloud\Result createDataSource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDataSourceAsync(array $args = [])
 * @method \Jdcloud\Result describeDataSource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDataSourceAsync(array $args = [])
 * @method \Jdcloud\Result updateDataSourceName(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDataSourceNameAsync(array $args = [])
 * @method \Jdcloud\Result deleteDataSource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDataSourceAsync(array $args = [])
 * @method \Jdcloud\Result setDataSourceKms(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setDataSourceKmsAsync(array $args = [])
 * @method \Jdcloud\Result generateDataSourceDDL(array $args = [])
 * @method \GuzzleHttp\Promise\Promise generateDataSourceDDLAsync(array $args = [])
 * @method \Jdcloud\Result describeDataSourceTableList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDataSourceTableListAsync(array $args = [])
 * @method \Jdcloud\Result createDataSourceTable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDataSourceTableAsync(array $args = [])
 * @method \Jdcloud\Result describeDataSourceTableFieldList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDataSourceTableFieldListAsync(array $args = [])
 * @method \Jdcloud\Result createDataSourceTableField(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDataSourceTableFieldAsync(array $args = [])
 * @method \Jdcloud\Result deleteDataSourceTable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDataSourceTableAsync(array $args = [])
 * @method \Jdcloud\Result describeDataSourceTableField(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDataSourceTableFieldAsync(array $args = [])
 * @method \Jdcloud\Result modifyDataSourceTableField(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyDataSourceTableFieldAsync(array $args = [])
 * @method \Jdcloud\Result deleteDataSourceTableField(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDataSourceTableFieldAsync(array $args = [])
 * @method \Jdcloud\Result modifyDataSourceTableFieldTag(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyDataSourceTableFieldTagAsync(array $args = [])
 * @method \Jdcloud\Result describeInstanceList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceListAsync(array $args = [])
 * @method \Jdcloud\Result createInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createInstanceAsync(array $args = [])
 * @method \Jdcloud\Result describeInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceAsync(array $args = [])
 * @method \Jdcloud\Result modifyInstanceName(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyInstanceNameAsync(array $args = [])
 * @method \Jdcloud\Result deleteInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteInstanceAsync(array $args = [])
 * @method \Jdcloud\Result setInstanceAccessKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setInstanceAccessKeyAsync(array $args = [])
 * @method \Jdcloud\Result setInstanceByPassMode(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setInstanceByPassModeAsync(array $args = [])
 * @method \Jdcloud\Result describeInstanceConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceConfigAsync(array $args = [])
 * @method \Jdcloud\Result describeAppList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAppListAsync(array $args = [])
 * @method \Jdcloud\Result describeIpWhiteList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeIpWhiteListAsync(array $args = [])
 * @method \Jdcloud\Result addIpWhiteItem(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addIpWhiteItemAsync(array $args = [])
 * @method \Jdcloud\Result deleteIpWhiteItem(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteIpWhiteItemAsync(array $args = [])
 */
class DcapClient extends JdCloudClient
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
                        'service' => 'dcap',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'dcap'
            );
        };

        parent::__construct($args);
    }
}