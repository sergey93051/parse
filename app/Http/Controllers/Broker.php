<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;

class Broker extends Controller
{
    public function index(){
    
        $client = new Client();
        $crawler = $client->request('GET', 'https://sibtoptrade.ru/trade/18049/');

        // dd($client->getInternalResponse());
        $title = $crawler->filter('table');
         
      $a =  $crawler->filter('table')->each(function ($node) {
            return  "<table>".$node->html()."</table>";
        });
        // dd($title->html());
        // $crawler->filter('table')->each(function ($node) {
        //      dd( $node->text()."<n>");
        // });
        // dd( $crawler);


        return view("welcome")->with("parsing", $a);
        
    }
}
