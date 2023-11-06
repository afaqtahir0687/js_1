@extends('layouts.app')

@section('contents')

<style>
    .class {
        text-align: center;
    }
</style>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 mt-4">

                <input type="text" id="value" class="form-control" name="filter" required readonly>
                <!-- Use type="text" instead of "number" and set it to readonly to prevent manual input -->

                <div class="class mt-4">
                    <button type="button" class="btn" onclick="appendToDisplay('7')">7</button>
                    <button type="button" class="btn" onclick="appendToDisplay('8')">8</button>
                    <button type="button" class="btn" onclick="appendToDisplay('9')">9</button>
                    <button type="button" class="btn" onclick="clearDisplay()">C</button>
                </div>

                <div class="class mt-2">
                    <button type="button" class="btn" onclick="appendToDisplay('4')">4</button>
                    <button type="button" class="btn" onclick="appendToDisplay('5')">5</button>
                    <button type="button" class="btn" onclick="appendToDisplay('6')">6</button>
                    <button type="button" class="btn" onclick="appendToDisplay('*')">*</button>
                </div>

                <div class="class mt-2">
                    <button type="button" class="btn" onclick="appendToDisplay('1')">1</button>
                    <button type="button" class="btn" onclick="appendToDisplay('2')">2</button>
                    <button type="button" class="btn" onclick="appendToDisplay('3')">3</button>
                    <button type="button" class="btn" onclick="appendToDisplay('-')">-</button>
                </div>

                <div class="class mt-2">
                    <button type="button" class="btn" onclick="appendToDisplay('0')">0</button>
                    <button type="button" class="btn" onclick="appendToDisplay('.')">.</button>
                    <button type="button" class="btn" onclick="calculateResult()">=</button>
                    <button type="button" class="btn" onclick="appendToDisplay('+')">+</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function appendToDisplay(value) {
            var currentValue = $('#value').val();
            $('#value').val(currentValue + value);
        }

        function clearDisplay() {
            $('#value').val('');
        }

        function calculateResult() {
            var expression = $('#value').val();
            try {
                var result = eval(expression);
                $('#value').val(result);
            } catch (error) {
                $('#value').val('Error');
            }
        }
    </script>

</body>
</html>

@endsection
