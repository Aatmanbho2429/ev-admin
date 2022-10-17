function validate() {
  const manufacturer = document.getElementById("OEM1").value;
  const error = document.getElementById("error");

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
}
