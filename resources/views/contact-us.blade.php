@extends('layouts.layout')

@section('content')
<div class="container" id="contactMe">
    <div class="text-center">
      <h2 class="display-5 mt-5">Contact Us</h2>
    </div>
    <form action="#">
      <div class="mb-4">
        <label for="name" class="form-label">Nama</label>
        <input type="text" class="form-control transparant" placeholder="Nama" id="name">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control transparant" placeholder="Email" id="email">
      </div>
      <div class="mb-3">
        <label for="textarea" class="form-label">Komentar</label>
       <textarea name="textArea" id="textarea" cols="30" rows="10" class="form-control transparant"></textarea>
      </div>
      <div class="row flex-row-reverse mx-1">
        <input type="submit" class="btn btn-primary m-2">
        <input type="reset" class="btn btn-secondary m-2">
      </div>
    </form>
@endsection