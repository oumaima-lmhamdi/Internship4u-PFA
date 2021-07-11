<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offer;
class OfferController extends Controller
{
    //
    public function index() {

        $offers = Offer::latest()->get();      
    
        return view('offers.index', [
          'offers' => $offers,
        ]);
      }
    
      public function show($city, $field) {
        
        $offers = Offer::select('*')
                ->where('i_city', '=', $city)
                ->where('i_category_id', '=', $field)
                ->get();
    
        return view('offers.show', ['offers' => $offers]);
      }
}
