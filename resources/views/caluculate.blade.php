@extends('layouts.app')

@section('contents')

<div class="container mt-5">
    <div class="row mt-5">
        <div class="card">
            <div class="card-body">
                <div class="col">
                    <label for="">Input: 1</label>
                    <input type="number" id="value1" class="form-control input-1" required>
                </div>
                <div class="col mt-3">
                    <label for="">Input: 2</label>
                    <input type="number" id="value2" class="form-control input-2" required>
                </div>
                <div class="col mt-3">
                    <label for="">Result:</label>
                    <input type="number" id="value3" class="form-control input-3" readonly>
                </div>
            </div>

            <div class="btn-group mb-5 mt-3">
                <button type="button" id="add" class="btn btn-warning calculate-btn">Adding</button>
                <button type="button" id="subtract" class="btn btn-primary calculate-btn">Subtraction</button>
                <button type="button" id="multiply" class="btn btn-danger calculate-btn">Multiplication</button>
                <button type="button" id="divide" class="btn btn-dark calculate-btn">Dividing</button>
                <!-- Add more buttons for other operations if needed -->
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $("#add").on('click', function () {
            var val1 = parseFloat($('#value1').val()) || 0;
            var val2 = parseFloat($('#value2').val()) || 0;
            var val3 = val1 + val2;
            $('#value3').val(val3);
        });

        $("#subtract").on('click', function () {
            var val1 = parseFloat($('#value1').val()) || 0;
            var val2 = parseFloat($('#value2').val()) || 0;
            var val3 = val1 - val2;
            $('#value3').val(val3);
        });

        $("#multiply").on('click', function () {
            var val1 = parseFloat($('#value1').val()) || 0;
            var val2 = parseFloat($('#value2').val()) || 0;
            var val3 = val1 * val2;
            $('#value3').val(val3);
        });

        $("#divide").on('click', function () {
            var val1 = parseFloat($('#value1').val()) || 0;
            var val2 = parseFloat($('#value2').val()) || 1; 
            var val3 = val1 / val2;
            $('#value3').val(val3);
        });

       
    });
</script>

@endsection
