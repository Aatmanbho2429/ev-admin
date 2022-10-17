function validate() {
  const model = document.getElementById("Model1model").value;
  const manufacturer = document.getElementById("Manufacturer1model").value;
  const year = document.getElementById("Year1model").value;
  const error = document.getElementById("error");

  //model
  if (model == "") {
    error.innerHTML = "**Please fill model information";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }
  if (!isNaN(model)) {
    error.innerHTML = "**Numbers is not allow";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }
  if (model.length <= 2 || model.length > 30) {
    error.innerHTML =
      "**Please enter character between 3 to 30 in manufacturer field";
      setTimeout(() => {
        error.innerHTML = "";
      }, 3000);
    return false;
  }

  //manufacturer
  if (manufacturer == "") {
    error.innerHTML = "**Please fill manufacturer name";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }
  if (!isNaN(manufacturer)) {
    error.innerHTML = "**Numbers is not allow";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }
  if (manufacturer.length <= 2 || manufacturer.length > 30) {
    error.innerHTML =
      "**Please enter character between 3 to 30 in manufacturer field";
      setTimeout(() => {
        error.innerHTML = "";
      }, 3000);
    return false;
  }

  //year
  if (year == "") {
    error.innerHTML = "**Please fill year";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }
  if (isNaN(year)) {
    error.innerHTML = "**Only Digit are allow";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }
  if (year.length != 4) {
    error.innerHTML = "**Please only four digits";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }
return true;
}
