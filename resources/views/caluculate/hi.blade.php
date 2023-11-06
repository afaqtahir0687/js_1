@extends('layouts.app')

@section('contents')
<style>

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background: rgb(224, 213, 147);
        border-radius: 30px;
    }

    .calculator {
        background-color:#fff;
        border: 1px solid #ccc;
        padding: 20px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        border-radius: 5px;
        width: 300px;
        border-radius: 30px;
    }

    #display {
      
        font-size: 24px;
        margin-bottom: 10px;
        text-align: right;
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 30px;
        height: 50px;
    }

    .buttons {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 10px;
    }

    .btn {
        padding: 10px;
        font-size: 18px;
        cursor: pointer;
        background-color: #ffffff;
        border: 1px solid #ccc;
        border-radius: 10px;
    }

    .btn:hover {
        background-color: #f0f0f0;
    }

    .equal {
        grid-column: span 4;
        background-color: #007bff;
        color: #fff;
        font-weight: bold;
    }

    .equal:hover {
        background-color: #0056b3;
    }

    .clear {
        background-color: #dc3545;
        color: #fff;
        font-weight: bold;
    }

    .clear:hover {
        background-color: #bd2130;
    }
</style>

<div class="container">
    <div class="calculator">
        <h1 style="text-align: center; font-size: 28px;">Calculator</h1>
        <input type="text" class="form-control" id="display" disabled>
        <div class="buttons">
            <button class="btn number" value="1">1</button>
            <button class="btn number" value="2">2</button>
            <button class="btn number" value="3">3</button>
            <button class="btn operator" value="+">+</button>
            <button class="btn number" value="4">4</button>
            <button class="btn number" value="5">5</button>
            <button class="btn number" value="6">6</button>
            <button class="btn operator" value="-">-</button>
            <button class="btn number" value="7">7</button>
            <button class="btn number" value="8">8</button>
            <button class="btn number" value="9">9</button>
            <button class="btn operator" value="*">*</button>
            <button class="btn clear" id="clear">C</button>
            <button class="btn number" value="0">0</button>
            <button class="btn operator" value="/">/</button>
            <button class="btn equal" id="calculate">=</button>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        var display = $("#display");
        var buttons = $(".btn");

        buttons.on("click", function() {
            var value = $(this).val();
            display.val(display.val() + value);
        });

        $("#clear").on("click", function() {
            display.val("");
        });

        $("#calculate").on("click", function() {
            try {
                display.val(eval(display.val()));
            } catch (error) {
                display.val("Error");
            }
        });
    });
</script>
@endsection
