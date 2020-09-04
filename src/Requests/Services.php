<?php

namespace googlogmob\YClientsSDK\Requests;

use googlogmob\YClientsSDK\Requests\Traits\Company;
use googlogmob\YClientsSDK\Requests\Traits\Paginated;

class Services extends Request
{
    use Company;

    protected function request()
    {
        return $this->requestApi("services/{$this->company_id}");
    }
}
