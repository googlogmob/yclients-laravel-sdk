<?php

namespace googlogmob\YClientsSDK\Requests\Transactions;

use Carbon\Carbon;
use googlogmob\YClientsSDK\Requests\Request;
use googlogmob\YClientsSDK\Requests\Traits\Company;
use googlogmob\YClientsSDK\Requests\Traits\Paginated;

class TransactionsByFilter extends Request
{
    use Company, Paginated;

    /**
     * @var Carbon
     */
    protected $startDate = false;

    /**
     * @var Carbon
     */
    protected $endDate = false;

    protected $accountId = false;

    protected $supplierId = false;

    protected $clientId = false;

    /**
     * @param Carbon $startDate
     *
     * @return $this
     */
    public function setStartDate(Carbon $startDate)
    {
        $this->params['start_date'] = $startDate->toDateString();

        return $this;
    }

    /**
     * @param Carbon $endDate
     *
     * @return $this
     */
    public function setEndDate(Carbon $endDate)
    {
        $this->params['end_date'] = $endDate->toDateString();

        return $this;
    }

    /**
     * @param $accountId
     *
     * @return $this
     */
    public function setAccountId($accountId)
    {
        $this->params = $accountId;

        return $this;
    }

    /**
     * @param $supplierId
     *
     * @return $this
     */
    public function setSupplierId($supplierId)
    {
        $this->params['supplier_id'] = $supplierId;

        return $this;
    }

    /**
     * @param $clientId
     *
     * @return $this
     */
    public function setClientId($clientId)
    {
        $this->params['client_id'] = $clientId;

        return $this;
    }

    /**
     * @param $userId
     *
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->params['user_id'] = $userId;

        return $this;
    }

    /**
     * @param $masterId
     *
     * @return $this
     */
    public function setMasterId($masterId)
    {
        $this->params['master_id'] = $masterId;

        return $this;
    }

    /**
     * @param $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->params['type'] = $type;

        return $this;
    }

    /**
     * @param $realMoney
     *
     * @return $this
     */
    public function setRealMoney($realMoney)
    {
        $this->params['real_money'] = $realMoney;

        return $this;
    }

    /**
     * @return $this
     */
    public function isDeleted()
    {
        $this->params['deleted'] = 1;

        return $this;
    }

    /**
     * @return $this
     */
    public function isNotDeleted()
    {
        $this->params['deleted'] = 0;

        return $this;
    }

    /**
     * @param $balandeIs
     *
     * @return $this
     */
    public function setBalanceIs($balandeIs)
    {
        $this->params['balance_is'] = $balandeIs;

        return $this;
    }

    /**
     * @param $documentId
     *
     * @return $this
     */
    public function setDocumentId($documentId)
    {
        $this->params['document_id'] = $documentId;

        return $this;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    protected function request()
    {
        $params = [];
        if ($this->startDate) {
            $params['start_date'] = $this->startDate;
        }
        if ($this->endDate) {
            $params['end_date'] = $this->endDate;
        }

        return $this->paginateRequest("transactions/{$this->company_id}");
    }
}
