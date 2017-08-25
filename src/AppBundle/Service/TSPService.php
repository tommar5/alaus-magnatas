<?php

namespace AppBundle\Service;

/*
 * Travelling Salesman Problem algorithm
 */

class TSPService
{
    const MaxDistance = 2050;

    private $road = [];

    /**
     * @param array $results
     * @param $latitude
     * @param $longitude
     * @return mixed
     */
    public function getTrip(array $results, $latitude, $longitude)
    {
        //count all trip distance
        $distance = 0;

        //dummy array where can delete visited breweries.
        $dummyArray = $results;

        //take size of all posible breweries arround 1000km circle.
        $IndexOfResults = sizeof($dummyArray);

        //insert home position from where we start
        $this->road += [ '0' => ['id' => 0, 'brewery_id' => 0, 'latitude' => $latitude, 'longitude' => $longitude, 'accuracy' => '', 'distance' => 0]];

        //dummy foreach to help find all posible near breweries
        foreach ($results as $dummy) {

            //min distance to nearest brewery
            $minDistance = self::MaxDistance;

            //save nearest brewery
            $brewery = [];

            //save key of nearest brewery
            $pointToDelete = 0;

            //get last visited brewery
            $getKeys = array_keys($this->road);
            $getLastKey = array_pop($getKeys);

            foreach ($dummyArray as $key => $result) {
                //distance betwenne visited brewery and new one.
                $distanceBetween = $this->distance($this->road[$getLastKey], $result);

                //check if this distance is the shortest
                //if is save params
                if ($distanceBetween < $minDistance) {
                    if(($distance + $distanceBetween + $result['distance']) <= self::MaxDistance) {
                        $minDistance = $distanceBetween;
                        $brewery = $result;
                        $brewery['distance'] = $distance + $distanceBetween;
                        $pointToDelete = $key;
                    }
                }

                //
                if ($IndexOfResults-1 == $key) {
                    if ($brewery == null) {
                        array_push($this->road, ['id' => $getLastKey+1, 'brewery_id' => 0, 'latitude' => $latitude, 'longitude' => $longitude, 'accuracy' => '', 'distance' => $distance + $dummyArray[$pointToDelete]['distance']]);
                        return $this->road;
                    }
                    $distance = $distance + $minDistance;
                    array_push($this->road, $brewery);
                    unset($dummyArray[$pointToDelete]);
                }
            }
        }
        return $this->road;
    }

    /**
     * Simple math for calculating distance with degrees.
     *
     * @param array $point1
     * @param array $point2
     * @return float|int
     */
    function distance(array $point1, array $point2) {
        if ($point1['latitude'] == $point2['latitude'] && $point1['longitude'] == $point2['longitude']) return 0;
        $unit = 'K';	// kilometers please!
        $theta = $point1['longitude'] - $point2['longitude'];
        $dist = sin(deg2rad($point1['latitude'])) * sin(deg2rad($point2['latitude'])) +  cos(deg2rad($point1['latitude'])) * cos(deg2rad($point2['latitude'])) * cos(deg2rad($theta));
        $dist = acos($dist);
        $dist = rad2deg($dist);
        $miles = $dist * 60 * 1.1515;
        $unit = strtoupper($unit);

        if ($unit == "K") {
            return ($miles * 1.609344);
        } else if ($unit == "N") {
            return ($miles * 0.8684);
        } else {
            return $miles;
        }
    }
}
