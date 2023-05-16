<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataForApi;


class ApiController extends Controller
{
    public function tvl(){
        $data = DataForApi::firstOrFail();
        
        return view("/api/tvl", compact('data'));
    }

    public function credit_outstanding(){
        $data = DataForApi::firstOrFail();
        
        return view("/api/credit_outstanding", compact('data'));
    }

    public function interest_repaid(){
        $data = DataForApi::firstOrFail();
        
        return view("/api/interest_repaid", compact('data'));
    }

    public function delinquency1(){
        $data = DataForApi::firstOrFail();
        
        return view("/api/delinquency1", compact('data'));
    }

    public function delinquency2(){
        $data = DataForApi::firstOrFail();
        
        return view("/api/delinquency2", compact('data'));
    }

    public function delinquency3(){
        $data = DataForApi::firstOrFail();
        
        return view("/api/delinquency3", compact('data'));
    }

    public function delinquency4(){
        $data = DataForApi::firstOrFail();
        
        return view("/api/delinquency4", compact('data'));
    }

    public function total_repaid(){
        $data = DataForApi::firstOrFail();
        
        return view("/api/total_repaid", compact('data'));
    }

    public function expositions_completed(){
        $data = DataForApi::firstOrFail();
        
        return view("/api/expositions_completed", compact('data'));
    }

    public function tvl_growth(){
        $data = DataForApi::firstOrFail();
        
        return view("/api/tvl_growth", compact('data'));
    }

    public function total_supply(){
        $data = DataForApi::firstOrFail();
        
        return view("/api/totalsupply", compact('data'));
    }

    public function circulation_supply(){
        $data = DataForApi::firstOrFail();
        
        return view("/api/circulationsupply", compact('data'));
    }

    public function total_fees(){
        $data = DataForApi::firstOrFail();
        
        return view("/api/total_fees", compact('data'));
    }

    public function average_apy(){
        $data = DataForApi::firstOrFail();
        
        return view("/api/average_apy", compact('data'));
    }

    public function rewards_apy(){
        $data = DataForApi::firstOrFail();
        
        return view("/api/rewards_apy", compact('data'));
    }

    public function total_defaults(){
        $data = DataForApi::firstOrFail();
        
        return view("/api/total_defaults", compact('data'));
    }
     
}
