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
                    <input type="number" class="form-control input-3" required>
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
    var val1 = $('#value1').val();
    var val2 = $('#value2').val();
    
    // Check if val1 is an integer
    if (Number.isInteger(Number(val1))) {
      alert("val1 is an integer.");
    } else {
      alert("val1 is not an integer.");
    }
  });



            $("#subtract").on('click', function() {
                var value2 = parseInt($("#value2").val()) || 0;
                var value1 = parseInt($("#value1").val()) || 0;
                var difference = value1 - value2;
                alert('Your subtraction result is ' - difference);
            });
        

            $("#multiply").on('click', function() {
                var value2 = parseInt($("#value2").val()) || 0;
                var value1 = parseInt($("#value1").val()) || 0;
                var sumOfValues = value1 + value2;
                alert('Your sum is ' + sumOfValues);
            });
        

            $("#divide").on('click', function() {
                var value2 = parseInt($("#value2").val()) || 0;
                var value1 = parseInt($("#value1").val()) || 0;
                var sumOfValues = value1 + value2;
                alert('Your sum is ' + sumOfValues);
            });
        
    });
</script>

@endsection



{{-- alert mein 1 and 2 ka sum show hoa integer --}}

{{-- 
$("#add").on('click', function() {
    var val1 = $('#value1').val();
    var val2 = $('#value2').val();
    
    // Convert val1 and val2 to numbers and add them
    var sum = Number(val1) + Number(val2);
    
    // Show the sum in an alert
    alert("Sum of val1 and val2 is: " + sum);
  }); --}}




  {{-- third input mein sum nikl aya hai --}}

  {{-- $("#add").on('click', function() {
    var val1 = $('#value1').val();
    var val2 = $('#value2').val();
    
    var val3 = Number(val1) + Number(val2);
    
    $('#value3').val(val3);
  }); --}}