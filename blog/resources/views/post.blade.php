
@extends('layouts.app')

@section('content')
<h1>Post Page {{$id."-".$username."-".$pass}}</h1>
<form action="{{url('/addHeroes')}}" method="post">
    @csrf
    <input type="text" name="name"/>
    <input type="submit">
</form>
<h2>
   
    <?php
    if(isset($_SESSION['heroes'])){
        for($i=0;$i<count($_SESSION['heroes']);$i++){

            echo "<br>".$_SESSION['heroes'][$i];
        }
    }
    ?>
</h2>

@endsection



