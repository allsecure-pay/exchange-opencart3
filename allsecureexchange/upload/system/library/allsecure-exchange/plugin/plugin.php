<?php

namespace AllsecureExchange;

final class AllsecureExchangePlugin
{
    public function getVersion()
    {
        return '1.2.1';
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
