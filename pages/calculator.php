<!DOCTYPE html>

<html lang="en">
<head>
    <title>Calculator</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
    <link href="/assets/css/calculator.css" rel="stylesheet">
</head>

<body>
    <header>
        <h1>Calculator</h1>
    </header>

    <main>
        <div id="container">
            <div class="row clearfix">
                <input id="screen" value="0" disabled type="text">
                <button id="clear">AC</button>
            </div>
            <div class="row clearfix">
                <button class="number">1</button>
                <button class="number">2</button>
                <button class="number">3</button>
                <button data-operator="+" class="operator">+</button>
            </div>
            <div class="row clearfix">
                <button class="number">4</button>
                <button class="number">5</button>
                <button class="number">6</button>
                <button data-operator="-" class="operator">-</button>
            </div>
            <div class="row clearfix">
                <button class="number">7</button>
                <button class="number">8</button>
                <button class="number">9</button>
                <button data-operator="*" class="operator">×</button>
            </div>
            <div class="row clearfix">
                <button id="decimal">.</button>
                <button class="number">0</button>
                <button id="equals">=</button>
                <button data-operator="/" class="operator">÷</button>
            </div>
        </div>
    </main>

    <script src="/assets/js/calculator.js"></script>
</body>
</html>
