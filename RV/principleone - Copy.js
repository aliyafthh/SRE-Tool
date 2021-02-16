const DomParser = new DOMParser()
  ,   myForm = document.getElementById('my-form')
  ,   bt_Add = document.getElementById('btn-add')
  ;
function newRow(numRow)
  {
  let row_N = `
    <div class="form-group row">
      <div class="col-sm-7 mb-3 mb-sm-0">
        <label for="inputName"></label>
        <input type="Name" class="form-control form-control-user" id="inputName" placeholder="Name ">
      </div>
      <div class="col-sm-5">
        <label for="inputPassword"></label>
        <input type="name" class="form-control form-control-user" id="inputPassword" placeholder="Position ">
      </div>
    </div>`
  return (DomParser.parseFromString(row_N, 'text/html')).body.firstChild
  }
bt_Add.onclick =()=>
  {
  let rowCount = myForm.querySelectorAll('div.form-group row').length
  myForm.appendChild(newRow(++rowCount))
  }