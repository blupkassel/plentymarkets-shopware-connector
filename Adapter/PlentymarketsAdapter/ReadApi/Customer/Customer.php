<?php

namespace PlentymarketsAdapter\ReadApi\Customer;

use PlentymarketsAdapter\ReadApi\ApiAbstract;

/**
 * Class Customer
 */
class Customer extends ApiAbstract
{
    /**
     * @param int $id
     *
     * @return array
     */
    public function find($id)
    {
        return $this->client->request('GET', 'accounts/contacts/' . $id);
    }

    /**
     * @param array $criteria
     *
     * @return array
     */
    public function findAll(array $criteria = [])
    {
        return $this->client->request('GET', 'accounts/contacts', $criteria);
    }

    /**
     * @param array $criteria
     *
     * @return array
     */
    public function findBy(array $criteria = [])
    {
        return $this->client->request('GET', 'accounts/contacts', $criteria);
    }

    /**
     * @param array $criteria
     *
     * @return array
     */
    public function findOneBy(array $criteria = [])
    {
        $result = $this->findBy($criteria);

        if (!empty($result)) {
            $result = array_shift($result);
        }

        return $result;
    }

    /**
     * @param $params
     *
     * @return array
     */
    public function create($params)
    {
        throw new \Exception('not implemented yet');
    }

    /**
     * @param $id
     * @param $params
     *
     * @return array
     */
    public function update($id, $params)
    {
        throw new \Exception('not implemented yet');
    }

    /**
     * @param $id
     *
     * @return bool
     */
    public function delete($id)
    {
        throw new \Exception('not implemented yet');
    }
}
