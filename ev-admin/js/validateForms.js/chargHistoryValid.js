function validate() {
  const name = document.getElementById("nameWatch1charHistory").value;
  const station = document.getElementById("station1charHistory").value;
  const amount = document.getElementById("amount1charHistory").value;
  const error = document.getElementById("error");
  const volume = document.getElementById("volume1charHistory").value;
  const paymentStatus = document.getElementById("volume1charHistory").value;

  if (name == "") {
    error.innerHTML = "**Please fill the name";
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
  if (!isNaN(name)) {
    error.innerHTML = "**Number is not allow";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }

  if (station == "") {
    error.innerHTML = "**Please fill the station name";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }
  if (station.length <= 2 || station.length > 40) {
    error.innerHTML =
      "**Please enter character between 3 to 40 in station name field";
      setTimeout(() => {
        error.innerHTML = "";
      }, 3000);
    return false;
  }
  if (!isNaN(station)) {
    error.innerHTML = "**Number is not allow";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }

  if (amount == "") {
    error.innerHTML = "**Please fill amount";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }
  if (isNaN(amount)) {
    error.innerHTML = "**Only Numeric value allow";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }

  if (volume == "") {
    error.innerHTML = "**Please fill volume";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }

  if (paymentStatus == "") {
    error.innerHTML = "**Please fill payment status";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }

  if (paymentStatus.length <= 3 || paymentStatus.length > 8) {
    error.innerHTML = "**enter character between 4 to 10";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }

  return true;
}
