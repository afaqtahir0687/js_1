@extends('layouts.app')

@section('contents')

<div class="container mt-4">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form >
                Name:<br />
                <input type="text" name="fullname" required class="form-control" />
                <input type="submit" class="btn btn-primary"/>
            </form>
        </div>
    </div>
</div>


<script>
    $(document).ready(function(){
    $('form').submit(function(e){
        alert ("Hi "+$("input[name='fullname']").val());
        return false;
    });
});
</script>
@endsection