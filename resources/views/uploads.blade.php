@extends('layouts.main')

@section('content')
<h3 class="my-3 text-center">  Upload Mod</h3>
@if ($errors ->any())
  <div class ="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
          <li> {{$error}}</li>
          @endforeach
      </ul>
   </div
@endif  
<form action="" method="post">
@csrf
<h6> What type of file are you uploading?</h6>
<fieldset class="row mb-3">
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" id="type" name="type" value="Mod" checked>
        <label class="form-check-label" for="gridRadios1">
          Mod
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" id="type" name="type" value="Language">
        <label class="form-check-label" for="gridRadios2">
          Language
        </label>
      </div>
     <br>
     

<div class="mb-3">
<select class="form-select" id="game" name="game" aria-label="Default select example">
  <option selected>Choose game</option>
  <option value="Skyrim Special Edition">Skyrim Special Edition</option>
  <option value="Skyrim Legendary edition">Skyrim Legendary edition</option>
  <option value="Skyrim">Skyrim</option>
  <option value="Fallout 76">Fallout 76</option>
  <option value="Fallout 4">Fallout 4</option>
</select>
</div>
<div class="input-group mb-3">
  <span class="input-group-text"  >Mod Name</span>
  <input type="text" class="form-control" id="name" name="name" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" >Mod language</span>
  <input type="text" class="form-control" id="language" name="language" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" >Current version</span>
  <input type="text" class="form-control" id="version" name="version" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" >Author or team name</span>
  <input type="text" class="form-control" id="author" name="author" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" >Brief overview</span>
  <input type="text" class="form-control" id="overview" name="overview" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Detailed description</label>
  <textarea class="form-control" id="description" name="description" rows="3"></textarea>
</div>



<button type='Submit' class="btn btn-dark" > Add </button>

</form>



@endsection