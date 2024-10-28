<?php
require 'RtcTokenBuilder.php'; // Download the Agora PHP SDK

$appID = "edecf9346e3647a09bd9f1078cab0d89";
$appCertificate = "7484dbccf48744dc99aaf2dcd1d4327f";
$channelName = "stecybertech";
$uid = 0; // 0 for anonymous users
$role = RtcTokenBuilder::ROLE_PUBLISHER; // For instructor
$expireTimeInSeconds = 3600; // Token validity
$currentTimestamp = (new DateTime())->getTimestamp();
$privilegeExpiredTs = $currentTimestamp + $expireTimeInSeconds;

$token = RtcTokenBuilder::buildTokenWithUid($appID, $appCertificate, $channelName, $uid, $role, $privilegeExpiredTs);
echo json_encode(['token' => $token]);
