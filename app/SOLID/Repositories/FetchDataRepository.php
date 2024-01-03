<?php

namespace App\SOLID\Repositories;

use App\Http\Resources\API\DataFetchResource;
use App\SOLID\Traits\JsonTrait;
use GuzzleHttp\Client;

class FetchDataRepository
{
    use JsonTrait;
    public function getAllData()
    {
        $path = 'https://api.themoviedb.org/3/discover/movie?api_key=db456e2314b333719aaf25c1c9eb11fc';
        $client = new Client();
        $response = $client->get($path);
        $json = json_decode($response->getBody());
        $data['total_pages'] =  $json->total_pages;
        $data['total_results'] = $json->total_results;
        $data['movies'] =
//            $json->results;
            DataFetchResource::collection($json->results);
        return $this->whenDone($data);
//        dd($json, $json->page, $json->total_results, $json->total_pages, count($json->results));
    }
}
