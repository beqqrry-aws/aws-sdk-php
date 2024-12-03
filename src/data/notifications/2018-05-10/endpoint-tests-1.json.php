<?php
// This file was auto-generated from sdk-root/src/data/notifications/2018-05-10/endpoint-tests-1.json
return [ 'testCases' => [ [ 'documentation' => 'For custom endpoint with region not set and fips disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://example.com', ], ], 'params' => [ 'Endpoint' => 'https://example.com', 'UseFIPS' => false, ], ], [ 'documentation' => 'For custom endpoint with fips enabled', 'expect' => [ 'error' => 'Invalid Configuration: FIPS and custom endpoint are not supported', ], 'params' => [ 'Endpoint' => 'https://example.com', 'UseFIPS' => true, ], ], [ 'documentation' => 'For region us-east-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://notifications-fips.us-east-1.api.aws', ], ], 'params' => [ 'Region' => 'us-east-1', 'UseFIPS' => true, ], ], [ 'documentation' => 'For region us-east-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://notifications.us-east-1.api.aws', ], ], 'params' => [ 'Region' => 'us-east-1', 'UseFIPS' => false, ], ], [ 'documentation' => 'For region cn-northwest-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://notifications-fips.cn-northwest-1.api.amazonwebservices.com.cn', ], ], 'params' => [ 'Region' => 'cn-northwest-1', 'UseFIPS' => true, ], ], [ 'documentation' => 'For region cn-northwest-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://notifications.cn-northwest-1.api.amazonwebservices.com.cn', ], ], 'params' => [ 'Region' => 'cn-northwest-1', 'UseFIPS' => false, ], ], [ 'documentation' => 'For region us-gov-west-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://notifications-fips.us-gov-west-1.api.aws', ], ], 'params' => [ 'Region' => 'us-gov-west-1', 'UseFIPS' => true, ], ], [ 'documentation' => 'For region us-gov-west-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://notifications.us-gov-west-1.api.aws', ], ], 'params' => [ 'Region' => 'us-gov-west-1', 'UseFIPS' => false, ], ], [ 'documentation' => 'For region us-iso-east-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://notifications-fips.us-iso-east-1.c2s.ic.gov', ], ], 'params' => [ 'Region' => 'us-iso-east-1', 'UseFIPS' => true, ], ], [ 'documentation' => 'For region us-iso-east-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://notifications.us-iso-east-1.c2s.ic.gov', ], ], 'params' => [ 'Region' => 'us-iso-east-1', 'UseFIPS' => false, ], ], [ 'documentation' => 'For region us-isob-east-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://notifications-fips.us-isob-east-1.sc2s.sgov.gov', ], ], 'params' => [ 'Region' => 'us-isob-east-1', 'UseFIPS' => true, ], ], [ 'documentation' => 'For region us-isob-east-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://notifications.us-isob-east-1.sc2s.sgov.gov', ], ], 'params' => [ 'Region' => 'us-isob-east-1', 'UseFIPS' => false, ], ], [ 'documentation' => 'For region eu-isoe-west-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://notifications-fips.eu-isoe-west-1.cloud.adc-e.uk', ], ], 'params' => [ 'Region' => 'eu-isoe-west-1', 'UseFIPS' => true, ], ], [ 'documentation' => 'For region eu-isoe-west-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://notifications.eu-isoe-west-1.cloud.adc-e.uk', ], ], 'params' => [ 'Region' => 'eu-isoe-west-1', 'UseFIPS' => false, ], ], [ 'documentation' => 'For region us-isof-south-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://notifications-fips.us-isof-south-1.csp.hci.ic.gov', ], ], 'params' => [ 'Region' => 'us-isof-south-1', 'UseFIPS' => true, ], ], [ 'documentation' => 'For region us-isof-south-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://notifications.us-isof-south-1.csp.hci.ic.gov', ], ], 'params' => [ 'Region' => 'us-isof-south-1', 'UseFIPS' => false, ], ], [ 'documentation' => 'Missing region', 'expect' => [ 'error' => 'Invalid Configuration: Missing Region', ], ], ], 'version' => '1.0',];