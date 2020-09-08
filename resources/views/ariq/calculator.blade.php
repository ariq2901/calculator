<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <title>Calculator !</title>
</head>
<body>
  <div class="pembungkus">
    <form name="calc" class="calculator">
      <input class="value" type="text" name="txt" readonly>
      <span class="num" onclick="document.calc.txt.value +='7'">7</span>
      <span class="num" onclick="document.calc.txt.value +='8'">8</span>
      <span class="num" onclick="document.calc.txt.value +='9'">9</span>
      <span class="num" onclick="document.calc.txt.value +='/'">/</span>
      <span class="num" onclick="document.calc.txt.value +='4'">4</span>
      <span class="num" onclick="document.calc.txt.value +='5'">5</span>
      <span class="num" onclick="document.calc.txt.value +='6'">6</span>
      <span class="num" onclick="document.calc.txt.value +='*'">*</span>
      <span class="num" onclick="document.calc.txt.value +='1'">1</span>
      <span class="num" onclick="document.calc.txt.value +='2'">2</span>
      <span class="num" onclick="document.calc.txt.value +='3'">3</span>
      <span class="num" onclick="document.calc.txt.value +='-'">-</span>
      <span class="num" onclick="document.calc.txt.value +='0'">0</span>
      <span class="num" onclick="document.calc.txt.value +='.'">.</span>
      <span class="num hasil" onclick="document.calc.txt.value = eval(calc.txt.value)">=</span>
      <span class="num tambah" onclick="document.calc.txt.value +='+'">+</span>
    </form>
    <div class="cont-clear" class="num clear" onclick="document.calc.txt.value =''">
      <span>clear</span>
    </div>
  </div>
</body>
</html>