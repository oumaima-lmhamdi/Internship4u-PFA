<!-- @extends('layouts.layout') -->
@extends('layouts.app1')

@section('content')
<div class="createoffer">
    
    <h1> Create An Offer </h1>
    <div class="profile">
    <form action="{{ route('offers.store') }}" method="POST">
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
    <input type="text" placeholder="Internship title" name="title" required ><br><br>
    <input type="text" placeholder="Company Name" name="companyName" required ><br><br>
    <input type="text" placeholder="Duration of the intership in months" name="duration" required ><br><br>
    <input type="text" placeholder="salary" name="salary" required ><br><br>
    <input type="text" placeholder="Description " name="description" required ><br><br>

    <input type="submit"   value="Add offer">
    </form>
</div>
</div>
@endsection