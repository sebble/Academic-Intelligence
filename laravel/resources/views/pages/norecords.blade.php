@extends('app')

@section('content')

<div class='panel panel-danger col-lg-3' id='alertBox' role='alert'>
   <div class='panel-heading'>
       <h1 class='panel-title'>
           ALERT<span class='glyphicon glyphicon-exclamation-sign'></span>
       </h1>
   </div>
   <div class='panel-body'>
       <p>There were no records found for your search</p>
       <p>Please review your search options and try again</p>
       <h2>
           <button type='button' class='back btn btn-danger'>
               <span class='glyphicon glyphicon-fast-backward'></span>
               <strong>Click here to return to search page</strong>
           </button>
       </h2>
   </div>
</div>

@stop