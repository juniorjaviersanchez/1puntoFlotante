<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>IEEE 754 calculator</title>
 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css" />

  <link rel="stylesheet" href="../../assets/personales/css/personal.css"></link>
    
 

  <style>
    .bits span  {
      display: inline-block;
      line-height: 1.5em;
      height: 1.5em;
      width: 1.5em;
      margin-right: 0.1em;
      border: 1px solid;
      text-align: center;
    }
    .bits2 span  {
      display: inline-block;
      line-height: 1.5em;
      height: 1.5em;
      width: 1.5em;
      margin-right: 0.1em;
      border: 1px solid;
      text-align: center;
    }

    #sign .bits span {
      border-color: #ff9;
    }
    #exponent .bits span {
      border-color: #99f;
    }
    #mantissa .bits span {
      border-color: #9f9;
    }
    #sign2 .bits2 span {
      border-color: #ff9;
    }
    #exponent2 .bits2 span {
      border-color: #99f;
    }
    #mantissa2 .bits2 span {
      border-color: #9f9;
    }

    .group {
      display: inline-block;
    }
    .group .label {
      display: block;
      margin-bottom: 0.5em;
      text-align: center;
    }
  </style>
</head>
<body>

  <div> 
      <h2 align="center">Número 1</h2>
      <div class="group" id="sign">
        <span class="label">Sign</span>
        <div class="bits">
          <span>0</span>
        </div>
      </div>
      <div class="group" id="exponent">
        <span class="label">Exponent</span>
        <div class="bits"></div>
      </div>
      <div class="group" id="mantissa">
        <span class="label">Mantissa</span>
        <div class="bits"></div>
      </div>

      <select id="precision">
        <option value="8">Demo (8)</option>
        <option value="16">Half (16)</option>
        <option value="32">Single (32)</option>
        <option value="64">Double (64)</option>
      </select>

      <table>
        <tr>
          <th>valor binario</th>
          <td id="val_binary"></td>
        </tr>
        <tr>
          <th>precise decimal</th>
          <td id="val_precise"></td>
        </tr>
      </table>
  </div>

  <hr>

<div>

      <h2 align="center">Número 2</h2>
      <div class="group" id="sign2">
        <span class="label">Sign</span>
        <div class="bits2">
          <span>0</span>
        </div>
      </div>
      <div class="group" id="exponent2">
        <span class="label">Exponent</span>
        <div class="bits2"></div>
      </div>
      <div class="group" id="mantissa2">
        <span class="label">Mantissa</span>
        <div class="bits2"></div>
      </div>

      <select id="precision2">
        <option value="8">Demo (8)</option>
        <option value="16">Half (16)</option>
        <option value="32">Single (32)</option>
        <option value="64">Double (64)</option>
      </select>

      <table>
        <tr>
          <th>valor binario</th>
          <td id="val_binary2"></td>
        </tr>
        <tr>
          <th>precise decimal</th>
          <td id="val_precise2"></td>
        </tr>
      </table>
  </div>

  <hr>

  <div align="center">
    <input class="btn btn-success"  id="solverBtn" type="button" value="SUMAR" onclick="solver();" style="width: 200px;">
  </div>
    
    <hr>

  <div>

    <h2 href="" align="center">RESULTADO</h2>

    <h3>Expresado en Decimal</h3>
      <p id="variablesuma" class="respuestas"></p>
    <h3>Expresado en IEEE754</h3>
      <p id="val_exp1" class="respuestas"></p>
    <h2 id="resultadonum1"></h2>

    
  </div>
<!---==============================================-->
  

</body>
<script>  

function suma(params) {
    var suma= parseFloat(valor)+parseFloat(valor2);
    document.getElementById("variablesuma").innerHTML = suma;
    
}
function resta(params) {
  var suma= parseFloat(valor)-parseFloat(valor2);
    document.getElementById("variablesuma").innerHTML = suma;
} 
function multiplicar(params) {
  var suma= parseFloat(valor)*parseFloat(valor2);
    document.getElementById("variablesuma").innerHTML = suma;
}
function dividir(params) {
  var suma= parseFloat(valor)/parseFloat(valor2);
    document.getElementById("variablesuma").innerHTML = suma;
}

var number = 0;

  
  //This is the stuff.
  function solver() {
    var suma= parseFloat(valor)+parseFloat(valor2);
    var number = suma;
    number = singleIEEE754(number)
    document.getElementById("val_exp1").innerHTML = number;
    document.getElementById("variablesuma").innerHTML = suma;
    
  }



  //Get Binary
  function getBinary(number) {
    number = parseInt(number)
    //document.getElementById("debug").innerHTML = number;
    var digits = [];
    var counter = 0;
    while(number >= 1) {
      digit = number % 2;
      number = number / 2;
      digits.push(parseInt(digit));
      counter += 1;
    }
    //document.getElementById("debug").innerHTML = digits;
    var reverseDigits = digits.reverse();
    //document.getElementById("debug").innerHTML = reverseDigits;
    var stringContainer = "";
    for (var j = 0; j < reverseDigits.length; j++) {
      stringContainer += String(reverseDigits[j]) + ' ';
    }
    return reverseDigits;
  }
  function getFraction(number,wholeNumberSize) {
    var digits = [];
    var counter = 0;
    var decimalNum = number % 1;
    var strContainer = "";
    var fraction = 0;
    var whole =0;
    if(wholeNumberSize > 0) {
      while(counter < 32 - wholeNumberSize) {
        fraction = (2*decimalNum)% 1;
        whole = Math.trunc((2*decimalNum));
        digits.push(whole);
        decimalNum = fraction;
        counter++;
      }
      for(var i = 0; i < digits.length; i++) {
        strContainer += String(digits[i]) + ' ';
      }
      return digits;
    }
    else {
      exponentNegative = 0;
      while(number < 1) {
        number *=2;
        exponentNegative += 1;
      }
      while(counter < 32) {
        fraction = (2*decimalNum)% 1;
        whole = Math.trunc((2*decimalNum));
        digits.push(whole);
        decimalNum = fraction;
        counter++;
      }
      return digits;
    }
  }
  function getStrValues(bits) {
    for(var i = 0; i<bits.length;i++){
    }
  }
  //Get Exponent.
  function getExponent(number, wholeNumberSize) {
    var digits = [];
    var counter = 0;
    var wholeBitsSize = wholeNumberSize;
    decimalNum = number % 1;
    if (wholeBitsSize > 0) {
      return (wholeNumberSize - 1);
    }
    else {
      var exponentNegative = 0;
      while(number < 1) {
        number = number * 2.0;
        exponentNegative--;
      }
      return exponentNegative;
    }
  }
  //Get the mantissa
  function getMantissa(wholeBits, fractionBits) {
    var wholeBitsSize = wholeBits.length;
    var found = false;
    var bitPattern = wholeBits.concat(fractionBits);
    //document.getElementById("debug").innerHTML = bitPattern;
    var mantissa = [];
    var counter = 0
    //document.getElementById("debug").innerHTML = wholeBits;
    //document.getElementById("debug").innerHTML = fractionBits;
    if(wholeBitsSize > 0) {
      counter = 1;
      var bitPatternSize = bitPattern.length;
      while (counter < bitPatternSize) {
        mantissa.push(bitPattern[counter]);
        counter++;
      }
      //document.getElementById("debug").innerHTML = mantissa;
      var myMantissa = [];
      for(var i = 0; i < 23; i++) {
        myMantissa.push(mantissa[i]);
      }
      return myMantissa;
    }
    else {
      counter = 0;
      while( (counter < 23) && (!(found)) ) {
        if (fractionBits[counter] == 1) {
          var found = true
        }
        else {
          counter = counter+1
        }
      }
      if(found == false) {
        return [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]
      }
      else {
        var start = counter + 1
        if(start > 0) {
          for(var i = start; i < bitPattern.length; i++) {
            mantissa.push(bitPattern[i]);
          }
       }
       while(mantissa.length < 23) {
         mantissa.push(0)
       }
       var myMantissa = [];
       for(var i = 0; i < 23; i++) {
         myMantissa.push(mantissa[i]);
       }
       return myMantissa;
      }
    }
  }
  //IEEE754 Converter.
  function singleIEEE754(number) {
    var signBit = 0;
    if(number < 0) {
      signBit = 1;
      number = number *(-1);
    }
    //document.getElementById("signo").innerHTML = signBit;
    var fraction = number % 1;
    var trueNumber = number;
    number = Math.trunc(number);
    var wholeNumberBit = getBinary(number);
    //document.getElementById("debug").innerHTML = wholeNumberBit;
    //document.getElementById("binario").innerHTML = wholeNumberBit;
    //Here It is.
    var wholeNumberBitLength = wholeNumberBit.length;
    var fractionBit = getFraction(fraction, wholeNumberBitLength);
    //document.getElementById("debug").innerHTML = fractionBit;
    //I need to get the exponent.
    //Determine the fraction number.
    var exponente = getExponent(trueNumber, wholeNumberBitLength);
    //document.getElementById("exponente").innerHTML = exponente;

    var exponent = getExponent(trueNumber, wholeNumberBitLength) + 127;
    //document.getElementById("debug").innerHTML = exponent;
    exponentBits = getBinary(exponent);
    while(exponentBits.length < 8) {
        exponentBits.unshift(0);
    }
    //document.getElementById("exponente_binario").innerHTML = exponentBits;
    /*var finalBitPattern = wholeNumberBit;
    // + fractionBit;
    for(int i = 0; i < fractionBit.length; i++) {
      finalBitPattern.push(fractionBit[i]);
    }
    document.getElementById("debug").innerHTML = finalBitPattern;
    */
    var counter = 1
    var finalValue = String(signBit)+"  ";
    var mantissa = getMantissa(wholeNumberBit,fractionBit)
    //document.getElementById("mantisa").innerHTML = mantissa;
    var finalArray = [];
    finalArray.push(signBit);
    finalArray = finalArray.concat(" - ");
    finalArray = finalArray.concat(exponentBits);
    finalArray = finalArray.concat(" - ");
    finalArray = finalArray.concat(mantissa);
    //document.getElementById("debug").innerHTML = finalArray;
    //finalArray.concat(exponentBits);
    //finalArray.concat(mantissa);
    /*
    for(var a = 0; a < exponentBits.length; a++) {
      finalValue += String(mantissa[a]) + " ";
    }
    //document.getElementById("debug").innerHTML = mantissa;
    for(var b = 0; b < mantissa.length; b++ ) {
      finalValue += String(mantissa[b]) + " ";
    }
    */
    var finalStr = "";
    for(var a = 0; a < finalArray.length; a++) {
      finalStr += String(finalArray[a]) + " ";
    }
    return finalStr;
  }

</script>




</html>