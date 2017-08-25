<?php
namespace AppBundle\Controller;

use AppBundle\Entity\Brewery;
use AppBundle\Entity\Geocode;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ApplicationController extends Controller
{
    /**
     * @Route("/application")
     * @Method({"GET", "POST"})
     * @Template
     * @param Request $request
     * @return array|\Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function indexAction(Request $request)
    {
        $latitude = $request->get('latitude');
        $longitude = $request->get('longitude');

        $route = [];
        $breweries = [];

        if ($latitude !== null && $longitude !== null){
            //get all breweries around 1000km
            $geocodeResults = $this->get('doctrine.orm.entity_manager')->getRepository(Geocode::class)->getAllNearBreweries($latitude, $longitude);

            //calculate trip distance
            $route = $this->get('travelling_salesman_problem_service')->getTrip($geocodeResults, $latitude, $longitude);

            //take all breweries from trip
            $breweries = $this->get('doctrine.orm.entity_manager')->getRepository(Brewery::class)->getBreweries($route);
        }

        return [
            'breweries' => $breweries,
            'route' => $route,
            'latitude' => $latitude,
            'longitude' => $longitude,
        ];
    }
}
