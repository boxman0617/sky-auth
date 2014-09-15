<?php
SkyAuth::SetDenyPage('deny.page.php');

SkyAuth::$_AUTH['DEV'] = array(
    'OnFailureRoute'    => '/',
    'OnSuccessRoute'    => '/',
    'OnFailureFlash'    => 'Unable to authenticate user. Please try again...',
    'Domain'            => 'YourDomainGoesHere'
);

SkyAuth::$_ACCESS_CONTROL = array(
    'Dashboard' => array(
        'Main'          => AUTH_ALLOW_ALL
    )
);
