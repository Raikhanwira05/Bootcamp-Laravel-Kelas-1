@extends('layout.master')
@section('title')
<h1>Buat Account Baru</h1>
@endsection

@section('content')
<form action="/welcome" method="POST">
    @csrf
        <br />
        <h2>Sign Up Form</h2>
        <label>first name:</label> <br />
        <input type="text" name="firstname" /> <br />
        <br />
        <label>last name:</label> <br />
        <input type="text" name="lastname" /> <br />
        <br />
        <label>Gender:</label> <br />
        <input type="radio" name="gender" /> Male <br />
        <input type="radio" name="gender" /> Female <br />
        <input type="radio" name="gender" /> Other <br />
        <br />
        <label>Nationality:</label> <br />
        <select name="nationality">
            <option value="Indonesia">Indonesia</option>
            <option value="Malaysia">Malaysia</option>
            <option value="Singapore">Singapore</option>
        </select>
        <br />
        <label>Languege Spoken:</label> <br />
        <input type="checkbox" name="languegespoken" /> Bahasa Indonesia <br />
        <input type="checkbox" name="languegespoken" /> English <br />
        <input type="checkbox" name="languegespoken" /> Other <br />
        <br />
        <label>Bio:</label> <br />
        <textarea name="bio" rows="10" cols="30"></textarea> <br />
        <br />
        <input type="submit" value="Sign Up"> <br />

        

    </form>
@endsection