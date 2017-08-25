<?php
namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class BreweryRepository extends EntityRepository
{
    public function getBreweries($route)
    {
        $breweriesId = [];

        foreach ($route as $item) {
            array_push($breweriesId, $item['brewery_id']);
        }

        return $this->createQueryBuilder('breweries')
            ->where('breweries.id IN(:breweries_id)')
            ->setParameter('breweries_id', $breweriesId)
            ->getQuery()->getResult();
    }
}
