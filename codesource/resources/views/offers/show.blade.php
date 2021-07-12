<!-- @extends('layouts.layout')

@section('content')

<div class="fluid-container">
    <div class="container">
    <h1 class="my-5">Looking for an internship? find one by searching by:</h1>
    <div class="row my-5 pt-5">
        <div class="col-4">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
            data-bs-toggle="dropdown" aria-expanded="false">
            City
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="#">city 1</a></li>
            <li><a class="dropdown-item" href="#">city 2</a></li>
            <li><a class="dropdown-item" href="#">city 3</a></li>
            </ul>
        </div>
        </div>
        <div class="col-4">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
            data-bs-toggle="dropdown" aria-expanded="false">
            Field
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="#a">field 1</a></li>
            <li><a class="dropdown-item" href="#b">field 2</a></li>
            <li><a class="dropdown-item" href="#c">field 3</a></li>
            </ul>
        </div>
        </div>
        <button type="submit" class="col-1 ms-auto">search</button>
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
                    <h5 class="modal-title" id="exampleModalLabel">Apply to this offer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form>
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
@endsection -->