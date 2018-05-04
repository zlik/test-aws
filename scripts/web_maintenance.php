<?php

$targetRegion = 'us-west-1';
$targetLaunchConfigurationName = 'my-launch-configuration';

function flatten(array $array) {
    $return = array();
    array_walk_recursive($array, function($a) use (&$return) { $return[] = $a; });
    return $return;
}

$targetInstanceIds = flatten(json_decode(`aws autoscaling describe-auto-scaling-groups \
    --query 'AutoScalingGroups[*].Instances[*].[InstanceId]'`, true));
$targetInstanceIdsString = implode(' ', $targetInstanceIds);

$targetInstanceIps = flatten(json_decode(`aws ec2 describe-instances --region $targetRegion \
    --instance-ids $targetInstanceIdsString --query 'Reservations[*].Instances[*].[PrivateIpAddress]'`, true));

foreach ($targetInstanceIps as $instanceIp) {
    `ssh -T -i ~/.ssh/aws-ca.pem ec2-user@$instanceIp << EOF
        cd /var/www/html; sudo chmod 777 *
        echo "We are now in maintenance mode" > index.html
EOF`;
}