<?php
namespace PPESApi;

use NPPESApi\Entity\ApiResponse;
use NPPESApi\Entity\Provider;
use JsonMapper;
use RestClient;

class NPPESApi implements NPPESApiInterface
{
    const BASE_URL = "https://npiregistry.cms.hhs.gov/api/";

    private $apiClient = null;

    public function __construct($verifySsl = true)
    {
        $this->apiClient = new RestClient([
            'base_url' => self::BASE_URL,
            'curl_options' => [CURLOPT_SSL_VERIFYPEER => (int) $verifySsl === true ? 1 : 0, CURLOPT_SSL_VERIFYHOST => $verifySsl === true ? 2 : 0]
        ]);
    }

    /**
     * Search for a single provider by NPI Number
     *
     * @param $number
     * @return Provider|null Returns a Provider if one is found by the number, otherwise null
     */
    
    public function searchByNumber($number)
    {
        $apiRequest = $this->apiClient->get("", ['number' => $number]);

        $response = $this->handleResponse($apiRequest);
        
        if ($response->getResultCount() == 1) {

            return $this->object_to_array($response->getResults()[0]);
        }

        return null;
    }

    /**
     * @param array $parameters Search based on allowed parameters in the NPI Registry (https://npiregistry.cms.hhs.gov/api/demo)
     * @return ApiResponse
     */
    public function search($parameters)
    {
        return $this->handleResponse($this->apiClient->get("", $parameters));
    }

    /**
     * @param $response CURL resposne from the API Client
     *
     * @return ApiResponse
     * @throws NPPESAPIException When there was an error in the request parameters.
     */
    private function handleResponse($response) {

        switch ($response->info->http_code) {
            case 200:
                $mapper = new JsonMapper();
                return $mapper->map(json_decode($response->response), new ApiResponse());
            default:
                throw new NPPESAPIException($response->response);
        }
    }
    /**
     * @param obj
     * @return array
     */
    public function object_to_array($obj) {
        $_arr = is_object($obj) ? get_object_vars($obj) : $obj;
        foreach ($_arr as $key => $val) {
            $val = (is_array($val) || is_object($val)) ? $this->object_to_array($val) : $val;
            $arr[$key] = $val;
        }
        return $arr;
    }
    
}