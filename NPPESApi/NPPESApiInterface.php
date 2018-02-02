<?php
namespace NPPESApi;


use NPPESApi\Entity\ApiResponse;
use NPPESApi\Entity\Provider;

interface NPPESApiInterface
{

    /**
     * Search for a single provider by NPI Number
     *
     * @param $number
     * @return Provider|null Returns a Provider if one is found by the number, otherwise null
     */
    public function searchByNumber($number);

    /**
     * @param array $parameters Search based on allowed parameters in the NPI Registry (https://npiregistry.cms.hhs.gov/api/demo)
     * @return ApiResponse
     */
    public function search($parameters);

}