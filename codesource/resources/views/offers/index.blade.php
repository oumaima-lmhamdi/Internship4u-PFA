@extends('layouts.app')

@section('content')

<div class="fluid-container">
    <div class="container">
    <h1 class="my-5">Looking for an internship? find one by searching by:</h1>
    <a href="{{ 'applications.show' }}"><h1>APPLICATIONS</h1></a>

    <div class="row my-5 pt-5">
     <form action="/offers" method="GET">
        <div class="col-4">
        @csrf
        <div class="select">
            <select name="city" id="city">
                <option selected disabled>city</option>
                <option value="1">casa</option>
                <option value="2">Tanger</option>
                <option value="rabat">rabat</option>
            </select>
        </div>
        </div>
        <div class="col-4">
        <div class="select">
            <select name="field" id="field">
                <option selected disabled>field</option>
                <option value="1">1</option>
                <option value="1">commerce et management</option>
                <option value="2">gestion</option>
                <option value="3">informatique</option>
            </select>        
        </div>
        </div>
        <button type="submit" class="col-1 ms-auto" value="Search">search</button>
        </form> 
        <!-- <div class="search">
            <form action="/action_page.php">
                
                <div class="select">
                <select name="slct" id="slct">
                    <option selected disabled>city</option>
                    <option value="1">casa</option>
                    <option value="2">Tanger</option>
                    <option value="3">Rabat</option>
                </select>
                
                </div>
                <div class="select">
                <select name="slct" id="slct">
                    <option selected disabled>field</option>
                    <option value="1">commerce et management/option>
                    <option value="2">gestion</option>
                    <option value="3">informatique</option>
                </select>
                
                
            </div>
                <input type="submit"   value="Search">
            </form> 
                
            </div> -->
    </div>
    </div>
    <hr>

    <div class="container">
    @foreach($offers as $offer)
    <div class="card my-5">
        <div class="row offer-card">
        <div class="col-md-4">
            <img src="images/offers.png" alt="" class="offer">
        </div>
        <div class="col-md-8">
            <div class="card-body">
            <h5 class="card-title">Offer in {{ $offer->i_companyName }} company in field {{ $offer->i_category_id }}</h5>
            <p class="card-text">{{ $offer->i_description }}</p>
            <button type="button" class="btn btn-submit" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Apply now
            </button>
            <!-- modal pop-up -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apply to offer {{ $offer->i_title }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form action="{{ route('applications.store') }}" method="POST">
                    @csrf
                        <div class="row justify-content-between mx-5 py-3">
                            <input type="text" id="fullName" name="fullName" placeholder="Enter your Full Name" class="col-lg-5">
                            <input type="text" id="email" name="email" placeholder="Enter your Email Adress" class="col-lg-5">
                        </div>  
                        <div class="row justify-content-between mx-5 py-3">
                            <textarea id="bio" name="bio" cols="40" rows="5" placeholder="Add your bio.." class="col-lg-12"></textarea>
                        </div>
                        <div class="row justify-content-between mx-5 py-3">
                        <label for="#CV" class="mb-3">Upload your CV here</label>
                        <input type="file" id="CV" name="CV" class="col-lg-12">
                        </div>
                        <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Apply Now!</button>
                        </div>
                    </form>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    @endforeach

    </div>
</div>

 
<a href="#" class="back"><- Back to home</a>
@endsection