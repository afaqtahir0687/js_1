@extends('layouts.app')

@section('contents')

<style>
    .calculator {
        text-align: center;
        margin-top: 20px;
    }

    .calculator input[type="text"] {
        width: 100%;
        padding: 10px;
        font-size: 14px;
        text-align: right;
        margin-top: 20px;
    }

    .calculator .btn {
        width: 50px;
        height: 50px;
        font-size: 20px;
    }

    .history {
        text-align: left;
        margin-top: 20px;
    }

    .history ul {
        list-style: none;
        padding: 0;
    }

    .history li {
        margin-bottom: 5px;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 mt-4 calculator">
            <input type="text" id="value" class="form-control" readonly>

            <div>
                <button type="button" class="btn" onclick="clearDisplay()">C</button>
                <button type="button" class="btn" onclick="appendToDisplay('7')">7</button>
                <button type="button" class="btn" onclick="appendToDisplay('8')">8</button>
                <button type="button" class="btn" onclick="appendToDisplay('9')">9</button>
                <button type="button" class="btn" onclick="appendToDisplay('/')">/</button>
            </div>

            <div>
                <button type="button" class="btn" onclick="appendToDisplay('4')">4</button>
                <button type="button" class="btn" onclick="appendToDisplay('5')">5</button>
                <button type="button" class="btn" onclick="appendToDisplay('6')">6</button>
                <button type="button" class="btn" onclick="appendToDisplay('*')">*</button>
            </div>

            <div>
                <button type="button" class="btn" onclick="appendToDisplay('1')">1</button>
                <button type="button" class="btn" onclick="appendToDisplay('2')">2</button>
                <button type="button" class="btn" onclick="appendToDisplay('3')">3</button>
                <button type="button" class="btn" onclick="appendToDisplay('-')">-</button>
            </div>

            <div>
                <button type="button" class="btn" onclick="appendToDisplay('0')">0</button>
                <button type="button" class="btn" onclick="appendToDisplay('.')">.</button>
                <button type="button" class="btn" onclick="calculateResult()">=</button>
                <button type="button" class="btn" onclick="appendToDisplay('+')">+</button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 mt-4 history">
            Calculation History:
            <ul id="history-list"></ul>
        </div>
    </div>
</div>

<script>
    var historyList = [];

    function appendToHistory(expression, result) {
        historyList.push({
            expression: expression,
            result: result
        });
        updateHistoryList();
    }

    function updateHistoryList() {
        var historyListElement = document.getElementById('history-list');
        historyListElement.innerHTML = '';
        historyList.forEach(function(entry, index) {
            var listItem = document.createElement('li');
            if (entry.expression != entry.result) {
                listItem.innerHTML = `<strong>History:</strong> ${entry.expression}, <strong>Result:</strong> ${entry.result}`;
                historyListElement.appendChild(listItem);
            }

        });
    }

    document.addEventListener('keydown', function(event) {
        const key = event.key;

        if (key === 'Enter') {
            calculateResult();
        } else if (key === 'Backspace') {
            clearDisplay();
        } else if (/[0-9\.+\-*/]/.test(key)) {
            appendToDisplay(key);
        }
    });

    function appendToDisplay(value) {
        var currentValue = document.getElementById('value').value;
        document.getElementById('value').value = currentValue + value;
    }

    function clearDisplay() {
        document.getElementById('value').value = '';
    }

    function calculateResult() {
    var expression = document.getElementById('value').value;
    try {
        var result = math.evaluate(expression);
        if (result === Infinity || result === -Infinity) {
            document.getElementById('value').value = '0';
        } else {
            var formattedResult = parseFloat(result.toFixed(3));
            document.getElementById('value').value = formattedResult;
            appendToHistory(expression, formattedResult);
        }
    } catch (error) {
        document.getElementById('value').value = '0';
    }
}

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mathjs/10.6.0/math.min.js"></script>

@endsection
