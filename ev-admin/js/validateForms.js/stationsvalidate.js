function validate() {
  const name = document.getElementById("Name1stat").value;
  const address = document.getElementById("Address1stat").value;
  const longitude = document.getElementById("Longitude1stat").value;
  const latitude = document.getElementById("Latitude1stat").value;
  const amenities = document.getElementById("Amenities1stat").value;
  const charger = document.getElementById("Chargers1stat").value;
  const price = document.getElementById("Price1stat").value;
  const access = document.getElementById("Access1stat").value;
  const error = document.getElementById("error");

  //name
  if (name == "") {
    error.innerHTML = "**Please fill the name";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }
  if (!isNaN(name)) {
    error.innerHTML = "**Number is not allow";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }
  if (name.length <= 2 || name.length > 30) {
    error.innerHTML = "**Please enter character between 3 to 30 in name field";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }

  //ADRESS
  if (address == "") {
    error.innerHTML = "**Please fill your address";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }
  if (!isNaN(address)) {
    error.innerHTML = "**Please do not enter only digits";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }
  if (address.length <= 9 || address.length > 70) {
    error.innerHTML =
      "**Please enter character between 10 to 70 in station name field";
      setTimeout(() => {
        error.innerHTML = "";
      }, 3000);
    return false;
  }

  //longitude
  if (longitude == "") {
    error.innerHTML = "**Please fill longitude";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }
  if (!isNaN(longitude)) {
    error.innerHTML = "**Please do not enter only digits";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }
  // if (longitude.length <= 9 || longitude.length > 70) {
  //   error.innerHTML =
  //     "**Please enter character between 10 to 70 in station name field";
  //   return false;
  // }

  //latitude
  if (latitude == "") {
    error.innerHTML = "**Please fill latitude";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }
  if (!isNaN(latitude)) {
    error.innerHTML = "**Please do not enter only digits";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }
  // if (latitude.length <= 9 || latitude.length > 70) {
  //   error.innerHTML =
  //     "**Please enter character between 10 to 70 in station name field";
  //   return false;
  // }

  //amenities
  if (amenities == "") {
    error.innerHTML = "**Please fill the name";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }
  if (amenities.length <= 2 || amenities.length > 40) {
    error.innerHTML = "**Please enter character between 3 to 40 in name field";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }
  if (!isNaN(amenities)) {
    error.innerHTML = "**Number is not allow";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    console.log("only no");
    return false;
  }

  //chargers
  if (charger == "") {
    error.innerHTML = "**Please fill the name";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }
  if (charger.length <= 2 || charger.length > 30) {
    error.innerHTML = "**Please enter character between 3 to 30 in name field";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }
  if (!isNaN(charger)) {
    error.innerHTML = "**Number is not allow";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }

  //price
  if (price == "") {
    error.innerHTML = "**Please fill amount";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }
  if (isNaN(price)) {
    error.innerHTML = "**Only Numeric value allow";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }

  //access
  if (access == "") {
    error.innerHTML = "**Please fill access field";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }
  if (!isNaN(access)) {
    error.innerHTML = "**Please do not enter only digits";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }
}
