@extends('layouts.app2')

@section('content')
<div class="fluid-container">


<div class="msg row justify-content-between">
<div class="imag1 col-lg-2">
    <img src="/img/j.png" alt="img" height="200" width="270"> 
</div>
<div class="col-lg-10">
<p class="col-lg-10">Welcome to Internship4u <br> the right 
    place to find an internship in your favorite field</p>
</div>

    


</div>

<!-- <span class="my-5"> &#x261B find an internship by :</span> -->
<P><HR NOSHADE></P><br>
<span class="my-5"> &#x261B find an internship by :</span>
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
</div>
<!-- <P><HR NOSHADE></P>
<h1> Most Popular internship posts :</h1><br>


<br>
<div>
</div>
<P><HR NOSHADE></P>
<h1>Most Popular company where you can find an internship :</h1>

<div class="company">
    <img src="/img/téléchargement (2).jpg" alt="img" height="400" width="400">
    
    <button class="btn1"
    type="button">
    company name
    </button>


</div> -->


@endsection       
