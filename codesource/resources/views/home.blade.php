@extends('layouts.app')

@section('content')
<div class="msg">
<div class="imag1">
    <img src="j.png" alt="img" height="200" width="270"> 
</div>
<p>Welcome to Internship4u <br> the right 
    place to find an internship in your favorite field</p>
    
<div class="imag2">
    <img src="téléchargement.png" alt="img" height="200" width="200"> 
</div>

</div>

<span> &#x261B find an internship by :</span>
<P><HR NOSHADE></P><br>

<div class="search">
<form action="/offers" method="GET">
    @csrf
    <div class="select">
    <select name="city" id="city">
        <option selected disabled>city</option>
        <option value="1">casa</option>
        <option value="2">Tanger</option>
        <option value="rabat">Rabat</option>
    </select>
    
    </div>
    <div class="select">
    <select name="field" id="field">
        <option selected disabled>field</option>
        <option value="1">commerce et management</option>
        <option value="2">gestion</option>
        <option value="3">informatique</option>
    </select>
    
    
</div>
    <input type="submit"   value="Search">
</form>
   
</div>
    
</div>
<br><br><br><br>
<P><HR NOSHADE></P>
<h1> Most Popular internship posts :</h1><br>
<div class="offer">
    <img src="images (1).jpg" alt="img" height="200" width="200"> 
    <div class="desc">
    <a href="">Offer X in field Y in Company Z </a>
    <p>description:</p>
    </div>
    
</div>
<br>
<div>
<br>
<button class="btn"
    type="button">
    Find More...
    </button>
</div>
<P><HR NOSHADE></P>
<h1>Most Popular company where you can find an internship :</h1>

<div class="company">
    <img src="téléchargement (2).jpg" alt="img" height="400" width="400">
    
    <button class="btn1"
    type="button">
    company name
    </button>


</div>


@endsection       
