@extends('layouts.app')

@section('contents')

<div class="container mt-5">
    <div class="row mt-5">
        <div class="card">
            <div class="card-body">
                <div class="col">
                    <label for="">Input: 1</label>
                    <input type="number"  id="value1" class="form-control input-1" required>
                </div>
                <div class="col mt-3">
                    <label for="">Input: 2</label>
                    <input type="number"  id="value2" class="form-control input-2" required>
                </div>
                <div class="col mt-3">
                    <label for="">Input: 3</label>
                    <input type="number" id="value3" class="form-control input-3" required>
                </div>
            </div>
            
            <div class="btn-group mb-5 mt-3">
                <button type="submit" id="add" class="btn btn-warning calculate-btn">Adding</button>
                <button type="submit" id="subtract" class="btn btn-primary calculate-btn">Subtraction</button>
                <button type="submit" id="multiply" class="btn btn-danger calculate-btn">Multiplication</button>
                <button type="submit" id="divide" class="btn btn-dark calculate-btn">Dividing</button>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    $("#add").on('click', function() {
    var val1 = parseInt($('#value1').val());
    var val2 = parseInt($('#value2').val());
    var val3 = val1 + val2;
    $('#value3').val(val3);

    // var typeOfVal1 = typeof val1;
    // var intval1 = parseInt(val1);
    // var typeOfVal2 = typeof val2;
    // var intval2 = parseInt(val2);

    // alert("Type of val1 is: " + val3);
  });

  $("#subtract").on('click', function() {
    var val1 = parseInt($('#value1').val());
    var val2 = parseInt($('#value2').val());
    var val3 = val1 - val2;

    // var typeOfVal1 = typeof val1;
    // var intval1 = parseInt(val1);
    // var typeOfVal2 = typeof val2;
    // var intval2 = parseInt(val2);
    // var val3 = intval1 - intval2;
    $('#value3').val(val3);
    
  });

  $("#multiply").on('click', function() {

    var val1 = parseInt($('#value1').val());
    var val2 = parseInt($('#value2').val());
    var val3 = val1 * val2;
    // var typeOfVal1 = typeof val1;
    // var intval1 = parseInt(val1);
    // var typeOfVal2 = typeof val2;
    // var intval2 = parseInt(val2);
    // var val3 = intval1 * intval2;
    $('#value3').val(val3);
  });

  $("#divide").on('click', function() {

    var val1 = parseInt($('#value1').val());
    var val2 = parseInt($('#value2').val());
    var val3 = val1 / val2;
    // var typeOfVal1 = typeof val1;
    // var intval1 = parseInt(val1);
    // var typeOfVal2 = typeof val2;
    // var intval2 = parseInt(val2);
    // var val3 = intval1 / intval2;
    $('#value3').val(val3);
  });
});
</script>

@endsection
