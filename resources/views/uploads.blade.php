@extends('layouts.main')

@section('content')
<h3 class="my-3 text-center">  Upload Mod</h3>
<form action="" method="post">

<h6> What type of file are you uploading?</h6>
<fieldset class="row mb-3">
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
        <label class="form-check-label" for="gridRadios1">
          Mod
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
        <label class="form-check-label" for="gridRadios2">
          Language
        </label>
      </div>
     <br>
     

<div class="mb-3">
<select class="form-select" aria-label="Default select example">
  <option selected>Choose game</option>
  <option value="1">Skyrim Special Edition</option>
  <option value="2">Skyrim Legendary edition</option>
  <option value="3">Skyrim</option>
  <option value="4">Fallout 76</option>
  <option value="5">Fallout 4</option>
</select>
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Mod Name</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Mod language</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Current version</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Author or team name</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Brief overview</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Detailed description</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>



<button type='Submit' class="btn btn-dark" > Add </button>

</form>
@endsection