<?php
namespace App\Goutte;


trait Read{
  
  public $client;

  public function set($client){

      $this->client = $client->request('GET', 'https://sibtoptrade.ru/trade/18049/');   
     
  }

  public function getTable(){

       $newClient = $this->client->filter('table');
       
     return  $newClient->filter('table')->each(function ($node) {
        return  "<table>".$node->html()."</table>";
       });
  }
 


}