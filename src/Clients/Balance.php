<?php

namespace TomIrons\Accountant\Clients;


use TomIrons\Accountant\Client;

class Balance extends Client
{
    /**
     * Gets the name of the Stripe Client name
     * @return string
     */
    function getClientName(): string
    {
        return 'Balance';
    }
}