<?php

namespace AllsecureExchange;

final class AllsecureExchangePlugin
{
	const METHOD_DEBIT = 'debit';
    const METHOD_PREAUTHORIZE = 'preauthorize';
	const HOST_TEST = 'https://asxgw.paymentsandbox.cloud/';
    const HOST_LIVE = 'https://asxgw.com/';

    public function getVersion()
    {
        return '1.5.0';
    }

    public function getName()
    {
        return 'AllSecure Exchange OpenCart Extension';
    }

    public function getShopName()
    {
        return 'OpenCart';
    }

    public function getShopVersion()
    {
        return VERSION;
    }

    public function getTemplateData()
    {
        return [
            'plugin_name' => self::getName(),
            'plugin_version' => self::getVersion(),
        ];
    }
}
