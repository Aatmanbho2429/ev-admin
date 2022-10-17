function validate() {
  const stationName = document.getElementById("Name1Fav").value;
  const address = document.getElementById("Address1Fav").value;
  const userName = document.getElementById("uName1Fav").value;
  const phone = document.getElementById("Phone1Fav").value;
  const amenities = document.getElementById("Amenities1Fav").value;
  const charger = document.getElementById("Chargers1Fav").value;
  const error = document.getElementById("error");

  //stationName
  if (stationName == "") {
    error.innerHTML = "**Please fill station name";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }
  if (!isNaN(stationName)) {
    error.innerHTML = "**Please do not enter only digits";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }
  if (stationName.length <= 2 || stationName.length > 40) {
    error.innerHTML =
      "**Please enter character between 3 to 40 in station name field";
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

  //userName
  if (userName == "") {
    error.innerHTML = "**Please fill your name";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }
  if (!isNaN(userName)) {
    error.innerHTML = "**Please do not enter only digits";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }
  if (userName.length <= 2 || userName.length > 30) {
    error.innerHTML =
      "**Please enter character between 3 to 30 in user name field";
      setTimeout(() => {
        error.innerHTML = "";
      }, 3000);
    return false;
  }

  //phone
  if (phone == "") {
    error.innerHTML = "**Please fill your phone no.";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }
  if (isNaN(phone)) {
    error.innerHTML = "**Please Enter Digits";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }
  if (phone.length != 10) {
    error.innerHTML = "**Please enter 10 digits";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }

  //amenities
  if (amenities == "") {
    error.innerHTML = "**Please fill the ametinies";
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
    error.innerHTML = "**Please fill charger information";
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

  return true;
}
