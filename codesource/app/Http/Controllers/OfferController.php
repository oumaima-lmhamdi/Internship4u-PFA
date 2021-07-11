<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offer;
class OfferController extends Controller
{
    //
    public function index() {

      $city = request('city');
      $field = request('field');
      error_log($city);
      error_log($field);
      $offers = Offer::select('*')
              ->where('i_city', '=', $city)
              ->where('i_category_id', '=', $field)
              ->get();
  
      return view('offers.show', ['offers' => $offers]);
      }

     public function create() {
        return view('offers.create');
      }

      public function store() {

        $offer = new Offer();
        $offer->i_companyName = request('companyName');
        $offer->i_title = request('title');
        $offer->i_city = request('city');
        $offer->i_category_id = request('field');
        $offer->i_duration = request('duration');
        $offer->i_salary = request('salary');
        $offer->i_description = request('description');
        $offer->i_status = 1;
    
        $offer->save();
    
        return redirect('/')->with('mssg', 'Thanks for your order!');
    
      }
      
      
      // public function show($city, $field) {
      //   this.$city = request('city');
      //   this.$field = request('field');
      //   $offers = Offer::select('*')
      //           ->where('i_city', '=', request('city'))
      //           ->where('i_category_id', '=', request('field'))
      //           ->get();
    
      //   return view('offers.show', ['offers' => $offers]);
      // }
}
