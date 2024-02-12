<?php
namespace App\Service;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Process\Process;
use Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\DecodingExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;



class OfferService
{

    private $client;

    public function __construct(HttpClientInterface $client){$this->client = $client;}

    public function getAgencies()
    {
        // URL de l'API que vous souhaitez consommer
        $apiUrl = 'https://hejerbenjeddi-gastro.com/api/list/agency';
        // Récupérer les données de l'API en tant qu'objet Response
        $response = $this->client->request('GET',
            $apiUrl
        );
        // Décoder le contenu JSON de la réponse en tableau associatif
        return $response->getContent();
    }
    public function getLimitedListAgency($max){return $this->client->request('GET', 'https://hejerbenjeddi-gastro.com/api/limited_list/agency/'.$max)->getContent();}
    public function getBanner(){return $this->client->request('GET', 'https://hejerbenjeddi-gastro.com/api/list/banner')->getContent();}
    public function getBlog(){return $this->client->request('GET', 'https://hejerbenjeddi-gastro.com/api/list/blog')->getContent();}
    public function getLimitedListBlog($max){return $this->client->request('GET', 'https://hejerbenjeddi-gastro.com/api/limited_list/blog/'.$max)->getContent();}
    public function getOffer($id){return $this->client->request('GET', 'https://hejerbenjeddi-gastro.com/api/offer/'.$id)->getContent();}
    public function getOfferByAgency($agency_id){return $this->client->request('GET', 'https://hejerbenjeddi-gastro.com/api/offer_by_agency/'.$agency_id)->getContent();}
    public function getCruise(){return $this->client->request('GET', 'https://hejerbenjeddi-gastro.com/api/list/cruise')->getContent();}
    public function getLimitedCruise($max){return $this->client->request('GET', 'https://hejerbenjeddi-gastro.com/api/limited_list/cruise/'.$max)->getContent();}
    public function getExcursion(){return $this->client->request('GET', 'https://hejerbenjeddi-gastro.com/api/list/excursion')->getContent();}
    public function getLimitedExcursion($max){return $this->client->request('GET', 'https://hejerbenjeddi-gastro.com/api/limited_list/excursion/'.$max)->getContent();}
    public function getgoodAddress($max){return $this->client->request('GET', 'https://hejerbenjeddi-gastro.com/api/list/goodAddress/'.$max)->getContent();}
    public function getHiking(){return $this->client->request('GET', 'https://hejerbenjeddi-gastro.com/api/list/hiking')->getContent();}
    public function getLimitedHiking($max){return $this->client->request('GET', 'https://hejerbenjeddi-gastro.com/api/limited_list/hiking/'.$max)->getContent();}
    public function getHotel(){return $this->client->request('GET', 'https://hejerbenjeddi-gastro.com/api/list/hotel')->getContent();}
    public function getLimitedHotel($max){return $this->client->request('GET', 'https://hejerbenjeddi-gastro.com/api/list/hotel/'.$max)->getContent();}
    public function getContinent(){return $this->client->request('GET', 'https://hejerbenjeddi-gastro.com/api/list/continent')->getContent();}
    public function getCountry(){return $this->client->request('GET', 'https://hejerbenjeddi-gastro.com/api/list/country')->getContent();}
    public function getRegion(){return $this->client->request('GET', 'https://hejerbenjeddi-gastro.com/api/list/region')->getContent();}
    public function getTravel(){return $this->client->request('GET', 'https://hejerbenjeddi-gastro.com/api/list/travel')->getContent();}
    public function getLimitedListTravel($max){return $this->client->request('GET', 'https://hejerbenjeddi-gastro.com/api/limited_list/travel/'.$max)->getContent();}
    public function getUmrah(){return $this->client->request('GET', 'https://hejerbenjeddi-gastro.com/api/list/umrah')->getContent();}
    public function getLimitedListUmrah($max){return $this->client->request('GET', 'https://hejerbenjeddi-gastro.com/api/limited_list/umrah/'.$max)->getContent();}

}

        



