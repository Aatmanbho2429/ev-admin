function valiadate() {
  const userName = document.getElementById("UserName1Ev").value;
  const manufacturer = document.getElementById("Manufacturer1Ev").value;
  const model = document.getElementById("Model1Ev").value;
  const year = document.getElementById("Year1Ev").value;
  const carType = document.getElementById("CarType1Ev").value;
  const registrationNumber = document.getElementById(
    "RegistrationNumber1Ev"
  ).value;
  const vin = document.getElementById("Vin1Ev").value;
  const error = document.getElementById("error");

  //username
  if (userName == "") {
    error.innerHTML = "**Please fill your name";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }
  if (!isNaN(userName)) {
    error.innerHTML = "**Numbers is not allow";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }
  if (userName.length <= 2 || userName.length > 30) {
    error.innerHTML = "**Please enter character between 3 to 30 in name field";
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
    error.innerHTML = "**Please enter character between 3 to 30 in manufacturer field";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }

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
    error.innerHTML = "**Please enter character between 3 to 30 in manufacturer field";
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

      //car type
      if (carType == "") {
        error.innerHTML = "**Please fill car type";
        setTimeout(() => {
          error.innerHTML = "";
        }, 3000);
        return false;
      }

      //registrationNumber
      if (registrationNumber == "") {
        error.innerHTML = "**Please fill regstration number";
        setTimeout(() => {
          error.innerHTML = "";
        }, 3000);
        return false;
      }

      //vin
      if (vin == "") {
        error.innerHTML = "**Please fill vin";
        setTimeout(() => {
          error.innerHTML = "";
        }, 3000);
        return false;
      }

}
