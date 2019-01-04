function add () {
  rezult.value = var_1.value - (-1) * var_2.value
}

function subtract () {
  rezult.value = var_1.value - var_2.value
}

function multiply () {
  rezult.value = var_1.value * var_2.value
}

function divide () {
  rezult.value = var_1.value / var_2.value
}

function pow () {
  var b = var_1.value
  var n = var_2.value
  a = b
  for (var i = 1; i < n; i++) {
    b *= a
  }
  rezult.value = b
}

function sqrt () {
  rezult.value = Math.sqrt(var_1.value)
}

function cosinus () {
  rezult.value = Math.cos(var_1.value)
}

function sinus () {
  rezult.value = Math.sin(var_1.value)
}

function factorial () {
  var x = var_1.value
  var f = 1
  for (var i = 1; i <= x; i++) {
    f = f * i
  }
  rezult.value = f
}
