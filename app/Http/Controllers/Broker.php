<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;
use App\Goutte\Read;

class Broker extends Controller
{
    use Read;

    public function index(){
    
        $client = new Client();
        
        $this->set($client);
        
        $parsing = $this->getTable();
        
        // dd($title->html());
        // $crawler->filter('table')->each(function ($node) {
        //      dd( $node->text()."<n>");
        // });
        // dd( $crawler);


        return view("welcome")->with("parsing", $parsing);
        
    }
}
