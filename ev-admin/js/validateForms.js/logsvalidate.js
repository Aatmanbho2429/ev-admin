function validate() {
  const email = document.getElementById("Email1log").value;
  const phone = document.getElementById("Phone1log").value;
  const ipAdress = document.getElementById("IP1log").value;
  const type = document.getElementById("Type1log").value;
  const error = document.getElementById("error");

  //email
  if (email == "") {
    error.innerHTML = " ** Please fill the email field";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }
  if (email.indexOf("@") <= 0) {
    error.innerHTML = " ** @ Invalid Position";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }

  if (
    email.charAt(email.length - 4) != "." &&
    email.charAt(email.length - 3) != "."
  ) {
    error.innerHTML = " ** (.) dot Invalid Position";
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

  //  ipadresss
  if (ipAdress == "") {
    error.innerHTML = "**Please fill ip";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }
  if (!isNaN(ipAdress)) {
    error.innerHTML = "**Please Enter Digits";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }
  //   if (ipAdress.length != 10) {
  //     error.innerHTML = "**Please enter 10 digits";
  //     return false;
  //   }

  //type
  if (type == "") {
    error.innerHTML = "**Please fill the type field";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }
  if (!isNaN(type)) {
    error.innerHTML = "**Please do not enter only digits";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }

  return true;
}
