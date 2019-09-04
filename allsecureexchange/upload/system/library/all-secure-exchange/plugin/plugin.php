<?php

namespace AllSecureExchange;

final class AllSecureExchangePlugin
{
    public function getVersion()
    {
        return 'X.Y.Z';
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
