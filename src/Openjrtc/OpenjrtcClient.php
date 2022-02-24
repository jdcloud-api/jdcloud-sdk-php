<?php
/**
 * Openjrtc
 *
 * @category Jdcloud
 * @package  Jdcloud\Openjrtc
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Openjrtc;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with openjrtc.
 *
 * @method \Jdcloud\Result describeApps(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAppsAsync(array $args = [])
 * @method \Jdcloud\Result describeApp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAppAsync(array $args = [])
 * @method \Jdcloud\Result describeAppKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAppKeyAsync(array $args = [])
 * @method \Jdcloud\Result createRoom(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRoomAsync(array $args = [])
 * @method \Jdcloud\Result describeRoomInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRoomInfoAsync(array $args = [])
 * @method \Jdcloud\Result updateRoom(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRoomAsync(array $args = [])
 * @method \Jdcloud\Result deleteRoom(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRoomAsync(array $args = [])
 * @method \Jdcloud\Result describeRooms(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRoomsAsync(array $args = [])
 * @method \Jdcloud\Result describeRoomOnlineUserNum(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRoomOnlineUserNumAsync(array $args = [])
 * @method \Jdcloud\Result removeRoomUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeRoomUserAsync(array $args = [])
 * @method \Jdcloud\Result removeAllRoomUsers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeAllRoomUsersAsync(array $args = [])
 * @method \Jdcloud\Result createUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createUserAsync(array $args = [])
 * @method \Jdcloud\Result describeUserByPeer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeUserByPeerAsync(array $args = [])
 * @method \Jdcloud\Result startMcuTranscode(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startMcuTranscodeAsync(array $args = [])
 * @method \Jdcloud\Result stopMcuTranscode(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopMcuTranscodeAsync(array $args = [])
 * @method \Jdcloud\Result sendMessageToUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendMessageToUserAsync(array $args = [])
 * @method \Jdcloud\Result sendMessageToRoom(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendMessageToRoomAsync(array $args = [])
 * @method \Jdcloud\Result addPushStreamRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addPushStreamRuleAsync(array $args = [])
 * @method \Jdcloud\Result addRecordRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addRecordRuleAsync(array $args = [])
 * @method \Jdcloud\Result registerUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerUserAsync(array $args = [])
 * @method \Jdcloud\Result describeRegisterUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRegisterUserAsync(array $args = [])
 * @method \Jdcloud\Result describeRegisterUsers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRegisterUsersAsync(array $args = [])
 * @method \Jdcloud\Result removeUserByUserRoomId(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeUserByUserRoomIdAsync(array $args = [])
 * @method \Jdcloud\Result removeAllUsersByUserRoomId(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeAllUsersByUserRoomIdAsync(array $args = [])
 * @method \Jdcloud\Result describeRoomUsers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRoomUsersAsync(array $args = [])
 * @method \Jdcloud\Result describeRoomUsersNum(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRoomUsersNumAsync(array $args = [])
 * @method \Jdcloud\Result closeRoomUserStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise closeRoomUserStreamAsync(array $args = [])
 * @method \Jdcloud\Result createToken(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTokenAsync(array $args = [])
 * @method \Jdcloud\Result postMessageToUserRoom(array $args = [])
 * @method \GuzzleHttp\Promise\Promise postMessageToUserRoomAsync(array $args = [])
 * @method \Jdcloud\Result postMessageToUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise postMessageToUserAsync(array $args = [])
 * @method \Jdcloud\Result registerUserRoom(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerUserRoomAsync(array $args = [])
 * @method \Jdcloud\Result updateUserRoom(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateUserRoomAsync(array $args = [])
 * @method \Jdcloud\Result describeUserRoom(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeUserRoomAsync(array $args = [])
 * @method \Jdcloud\Result describeUserRooms(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeUserRoomsAsync(array $args = [])
 */
class OpenjrtcClient extends JdCloudClient
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
                        'service' => 'openjrtc',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'openjrtc'
            );
        };

        parent::__construct($args);
    }
}