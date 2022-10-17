function validate() {
  const name = document.getElementById("nameWatch1charger").value;
  const type = document.getElementById("Type1charger").value;
  const chrNo = document.getElementById("charNo1charger").value;
  const error = document.getElementById("error");

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

  if (type == "") {
    error.innerHTML = "**Please fill the type field";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }
  if (type.length <= 4 || type.length > 10) {
    error.innerHTML = "**Please enter character between 5 to 10 in type field";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }
  if (!isNaN(type)) {
    error.innerHTML = "**Number is not allow";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }

  if (chrNo == "") {
    error.innerHTML = "**Please fill the type field";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }
  if (chrNo.length <= 8 || chrNo.length > 30) {
    error.innerHTML = "**Please enter character between 9 to 30 in chrNo field";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }

  return true;
}
