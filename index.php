<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
</head>
<body>
    <div class="header">
        <img src="materials/logo-light.png">
        <p>
            Deposit Calculator
        </p>
    </div>
    <div class="container">
        <h1>
            Депозитный калькулятор
        </h1>
        <h2>
            Калькулятор депозитов позволяет рассчитать ваши доходы после внесения суммы на счет в банке по опредленному тарифу.
        </h2>
        <form name="dataCalc" id="calcForm">
            <p class="date_header">Дата открытия</p>
            <input name="startDate" type="date" class="date">
            <p class="deposit_term_header">Срок вклада (мес.)</p>
            <input name="term" type="number" class="deposit_term">
            <p class="sum_deposit_header">Сумма вклада</p>
            <input name="sum" type="number" class="sum_deposit">
            <p class="interest_rate_header">Процентная ставка, % годовых</p>
            <input name="percent" type="number" class="interest_rate">
            <input type="checkbox" class="checkbox">
            <p class="checkbox_text">Ежемесячное пополнение вклада</p>
            <p class="replenishment_amount_header">Сумма пополнения вклада</p>
            <input name="sumAdd" type="number" class="replenishment_amount" value="0">
            <p><input type="submit" value="Рассчитать" class="button_calc"</p>
        </form>
        <hr class="hr">
        <p class="amountToBePaid">
            Сумма к выплате
        </p>
        <div id="result"></div>
    </div>
</body>
<script src="script.js"></script>
</html>