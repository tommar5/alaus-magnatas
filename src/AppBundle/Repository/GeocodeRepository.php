<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class GeocodeRepository extends EntityRepository
{
    /**
     * @param $lat
     * @param $lng
     * @return array
     */
    public function getAllNearBreweries($lat, $lng)
    {
        $conn = $this->getEntityManager()->getConnection();
        $sql = 'SELECT id, brewery_id, latitude, longitude, accuracy,
                ( 6371 * acos( cos( radians('.$lat.') ) * cos( radians( latitude ) ) * cos( radians( longitude ) - radians('.$lng.') ) + sin( radians('.$lat.') ) * sin( radians( latitude ) ) ) ) as distance
                FROM geocode WHERE ( 6371 * acos( cos( radians('.$lat.') ) * cos( radians( latitude ) ) * cos( radians( longitude ) - radians('.$lng.') ) + sin( radians('.$lat.') ) * sin( radians( latitude ) ) ) ) < 1000';
        $smt = $conn->prepare($sql);
        $smt->execute();
        return $smt->fetchAll();
    }
}
