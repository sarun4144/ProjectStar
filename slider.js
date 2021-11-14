(function() {

  var parent = document.querySelector("#attack");
  if(!parent) return;

  var
  rangeS = parent.querySelectorAll("input[type=number]"),
    numberS = parent.querySelectorAll("input[type=range]");

  rangeS.forEach(function(el) {
    el.oninput = function() {
      var slide1 = parseFloat(rangeS[0].value),
        slide2 = parseFloat(rangeS[1].value);

      if (slide1 > slide2) {
        [slide1, slide2] = [slide2, slide1];
      }

      numberS[0].value = slide1;
      numberS[1].value = slide2;
    }
  });

  numberS.forEach(function(el) {
    el.oninput = function() {
      var number1 = parseFloat(numberS[0].value),
        number2 = parseFloat(numberS[1].value);

      if (number1 > number2) {
        var tmp = number1;
        numberS[0].value = number2;
        numberS[1].value = tmp;
      }

      rangeS[0].value = number1;
      rangeS[1].value = number2;

    }
  });

})();
(function() {

  var parent = document.querySelector("#defence");
  if(!parent) return;

  var
  rangeS = parent.querySelectorAll("input[type=number]"),
    numberS = parent.querySelectorAll("input[type=range]");

  rangeS.forEach(function(el) {
    el.oninput = function() {
      var slide1 = parseFloat(rangeS[0].value),
        slide2 = parseFloat(rangeS[1].value);

      if (slide1 > slide2) {
        [slide1, slide2] = [slide2, slide1];
        // var tmp = slide2;
        // slide2 = slide1;
        // slide1 = tmp;
      }

      numberS[0].value = slide1;
      numberS[1].value = slide2;
    }
  });

  numberS.forEach(function(el) {
    el.oninput = function() {
      var number1 = parseFloat(numberS[0].value),
        number2 = parseFloat(numberS[1].value);

      if (number1 > number2) {
        var tmp = number1;
        numberS[0].value = number2;
        numberS[1].value = tmp;
      }

      rangeS[0].value = number1;
      rangeS[1].value = number2;

    }
  });

})();
(function() {

  var parent = document.querySelector("#vitality");
  if(!parent) return;

  var
  rangeS = parent.querySelectorAll("input[type=number]"),
    numberS = parent.querySelectorAll("input[type=range]");

  rangeS.forEach(function(el) {
    el.oninput = function() {
      var slide1 = parseFloat(rangeS[0].value),
        slide2 = parseFloat(rangeS[1].value);

      if (slide1 > slide2) {
        [slide1, slide2] = [slide2, slide1];
        // var tmp = slide2;
        // slide2 = slide1;
        // slide1 = tmp;
      }

      numberS[0].value = slide1;
      numberS[1].value = slide2;
    }
  });

  numberS.forEach(function(el) {
    el.oninput = function() {
      var number1 = parseFloat(numberS[0].value),
        number2 = parseFloat(numberS[1].value);

      if (number1 > number2) {
        var tmp = number1;
        numberS[0].value = number2;
        numberS[1].value = tmp;
      }

      rangeS[0].value = number1;
      rangeS[1].value = number2;

    }
  });

})();
(function() {

  var parent = document.querySelector("#charisma");
  if(!parent) return;

  var
  rangeS = parent.querySelectorAll("input[type=number]"),
    numberS = parent.querySelectorAll("input[type=range]");

  rangeS.forEach(function(el) {
    el.oninput = function() {
      var slide1 = parseFloat(rangeS[0].value),
        slide2 = parseFloat(rangeS[1].value);

      if (slide1 > slide2) {
        [slide1, slide2] = [slide2, slide1];
        // var tmp = slide2;
        // slide2 = slide1;
        // slide1 = tmp;
      }

      numberS[0].value = slide1;
      numberS[1].value = slide2;
    }
  });

  numberS.forEach(function(el) {
    el.oninput = function() {
      var number1 = parseFloat(numberS[0].value),
        number2 = parseFloat(numberS[1].value);

      if (number1 > number2) {
        var tmp = number1;
        numberS[0].value = number2;
        numberS[1].value = tmp;
      }

      rangeS[0].value = number1;
      rangeS[1].value = number2;

    }
  });

})();
(function() {

  var parent = document.querySelector("#agility");
  if(!parent) return;

  var
  rangeS = parent.querySelectorAll("input[type=number]"),
    numberS = parent.querySelectorAll("input[type=range]");

  rangeS.forEach(function(el) {
    el.oninput = function() {
      var slide1 = parseFloat(rangeS[0].value),
        slide2 = parseFloat(rangeS[1].value);

      if (slide1 > slide2) {
        [slide1, slide2] = [slide2, slide1];
        // var tmp = slide2;
        // slide2 = slide1;
        // slide1 = tmp;
      }

      numberS[0].value = slide1;
      numberS[1].value = slide2;
    }
  });

  numberS.forEach(function(el) {
    el.oninput = function() {
      var number1 = parseFloat(numberS[0].value),
        number2 = parseFloat(numberS[1].value);

      if (number1 > number2) {
        var tmp = number1;
        numberS[0].value = number2;
        numberS[1].value = tmp;
      }

      rangeS[0].value = number1;
      rangeS[1].value = number2;

    }
  });

})();
(function() {

  var parent = document.querySelector("#talent");
  if(!parent) return;

  var
  rangeS = parent.querySelectorAll("input[type=number]"),
    numberS = parent.querySelectorAll("input[type=range]");

  rangeS.forEach(function(el) {
    el.oninput = function() {
      var slide1 = parseFloat(rangeS[0].value),
        slide2 = parseFloat(rangeS[1].value);

      if (slide1 > slide2) {
        [slide1, slide2] = [slide2, slide1];
        // var tmp = slide2;
        // slide2 = slide1;
        // slide1 = tmp;
      }

      numberS[0].value = slide1;
      numberS[1].value = slide2;
    }
  });

  numberS.forEach(function(el) {
    el.oninput = function() {
      var number1 = parseFloat(numberS[0].value),
        number2 = parseFloat(numberS[1].value);

      if (number1 > number2) {
        var tmp = number1;
        numberS[0].value = number2;
        numberS[1].value = tmp;
      }

      rangeS[0].value = number1;
      rangeS[1].value = number2;

    }
  });

})();