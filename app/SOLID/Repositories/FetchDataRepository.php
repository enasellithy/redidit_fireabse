<?php

namespace App\SOLID\Repositories;

use App\Http\Resources\API\DataFetchResource;
use App\SOLID\Traits\JsonTrait;
use GuzzleHttp\Client;
use http\Env\Request;

class FetchDataRepository
{
    use JsonTrait;
    public function getAllDataMovies($page)
    {
        $path = 'https://api.themoviedb.org/3/discover/movie?api_key=db456e2314b333719aaf25c1c9eb11fc&page='.$page;
        $client = new Client();
        $response = $client->get($path);
        $json = json_decode($response->getBody());
        $data['total_pages'] =  $json->total_pages;
        $data['total_results'] = $json->total_results;
        $data['movies'] = DataFetchResource::collection($json->results);
        return $this->whenDone($data);
    }

    public function getAllDataTv($page)
    {
        $path = 'https://api.themoviedb.org/3/discover/tv?api_key=db456e2314b333719aaf25c1c9eb11fc&page='.$page;
        $client = new Client();
        $response = $client->get($path);
        $json = json_decode($response->getBody());
        $data['total_pages'] =  $json->total_pages;
        $data['total_results'] = $json->total_results;
        $data['tv'] = DataFetchResource::collection($json->results);
        return $this->whenDone($data);
    }
}
