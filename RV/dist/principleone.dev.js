"use strict";

var DomParser = new DOMParser(),
    myForm = document.getElementById('my-form'),
    bt_Add = document.getElementById('btn-add');

function newRow(numRow) {
  var row_N = "\n    <div class=\"form-row\">\n      <div class=\"form-group col-md-7\">\n        <label for=\"inputName".concat(numRow, "\"></label>\n        <input type=\"Name\" class=\"form-control\" id=\"inputName").concat(numRow, "\" placeholder=\"Name ").concat(numRow, "\">\n      </div>\n      <div class=\"form-group col\">\n        <label for=\"inputPassword").concat(numRow, "\"></label>\n        <input type=\"name\" class=\"form-control\" id=\"inputPassword").concat(numRow, "\" placeholder=\"Position ").concat(numRow, "\">\n      </div>\n    </div>");
  return DomParser.parseFromString(row_N, 'text/html').body.firstChild;
}

bt_Add.onclick = function () {
  var rowCount = myForm.querySelectorAll('div.form-row').length;
  myForm.appendChild(newRow(++rowCount));
};