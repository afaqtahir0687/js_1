@extends('layouts.app')

@section('contents')

<style>
    .class {
        text-align: center;
    }
</style>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 mt-4">
            <input type="text" id="value" class="form-control">

            <input type="hidden" name="num1">
            <input type="hidden" name="operator">

            <div class="class mt-4">
                <button type="button" class="btn">7</button>
                <button type="button" class="btn">8</button>
                <button type="button" class="btn">9</button>
                <button type="button" class="btn operator">/</button>
            </div>

            <div class="class mt-2">
                <button type="button" class="btn">4</button>
                <button type="button" class="btn">5</button>
                <button type="button" class="btn">6</button>
                <button type="button" class="btn operator">*</button>
            </div>

            <div class="class mt-2">
                <button type="button" class="btn">1</button>
                <button type="button" class="btn">2</button>
                <button type="button" class="btn">3</button>
                <button type="button" class="btn operator">-</button>
            </div>

            <div class="class mt-2">
                <button type="button" class="btn ">0</button>
                <button type="button" class="btn ">.</button>
                <button type="button" class="btn equal">=</button>
                <button type="button" class="btn operator">+</button>
            </div>
        </div>
    </div>
</div>

{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
<script>
    $(document).ready(function () {
        $(".btn").on('click', function () {
            var value = $(this).text();
            var currentValue = $('#value').val();
            $('#value').val(currentValue + value);
        });

        $(".btn.operator").on('click', function () {
            var old_Operator = $('input[name="operator"]').val();
            if (!old_Operator) {
                var num1 = $('#value').val();
                $('input[name="num1"]').val(num1);
                $('#value').val('');
            }
            var operator = $(this).text();
            $('input[name="operator"]').val(operator);
        });

        $(".btn.equal").on('click', function () {
            var num1 = parseFloat($('input[name="num1"]').val());
            var operator = $('input[name="operator"]').val();
            var num2 = parseFloat($('#value').val());

            if (!isNaN(num1) && !isNaN(num2) && operator) {
                var ans = calculate(num1, operator, num2);
                $('#value').val(ans);
                $('input[name="num1"]').val('');
                $('input[name="operator"]').val('');
            }
        });
        function calculate(val1, operator, val2) {
            if (operator == '+') {
                return val1 + val2;
            } else if (operator == '-') {
                return val1 - val2;
            } else if (operator == '*') {
                return val1 * val2;
            } else if (operator == '/') {
                if (val2 === 0) {
                    return "Error: Division by zero";
                }
                return val1 / val2;
            }
        }
    });
</script>

@endsection
