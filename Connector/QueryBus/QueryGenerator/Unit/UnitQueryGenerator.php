<?php

namespace PlentyConnector\Connector\QueryBus\QueryGenerator\Unit;

use PlentyConnector\Connector\QueryBus\Query\Unit\FetchAllUnitsQuery;
use PlentyConnector\Connector\QueryBus\Query\Unit\FetchChangedUnitsQuery;
use PlentyConnector\Connector\QueryBus\Query\Unit\FetchUnitQuery;
use PlentyConnector\Connector\QueryBus\QueryGenerator\QueryGeneratorInterface;
use PlentyConnector\Connector\TransferObject\Unit\Unit;

/**
 * Class UnitQueryGenerator
 */
class UnitQueryGenerator implements QueryGeneratorInterface
{
    /**
     * {@inheritdoc}
     */
    public function supports($transferObjectType)
    {
        return $transferObjectType === Unit::getType();
    }

    /**
     * {@inheritdoc}
     */
    public function generateFetchChangedQuery($adapterName)
    {
        return new FetchChangedUnitsQuery($adapterName);
    }

    /**
     * {@inheritdoc}
     */
    public function generateFetchAllQuery($adapterName)
    {
        return new FetchAllUnitsQuery($adapterName);
    }

    /**
     * {@inheritdoc}
     */
    public function generateFetchQuery($adapterName, $identifier)
    {
        return new FetchUnitQuery($adapterName, $identifier);
    }
}
