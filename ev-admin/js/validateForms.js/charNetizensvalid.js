

function validate() {
  const email = document.getElementById("email1CharNeti").value;
  const phone = document.getElementById("PhoneNo1CharNeti").value;
  const userFirstName = document.getElementById("FirstName1CharNeti").value;
  const userLastName = document.getElementById("LastName1CharNeti").value;
  const wallet = document.getElementById("Wallet1CharNeti").value;
  const kyc = document.getElementById("KYC1CharNeti").value;
  const error = document.getElementById("error");

  //email

  if (email == "") {
    error.innerHTML =" ** Please fill the email field";
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

  //userfirstname
  if (userFirstName == "") {
    error.innerHTML = "**Please Enter your first name";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }
  if (!isNaN(userFirstName)) {
    error.innerHTML = "**Please do not enter digits";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }
  if (userFirstName.length <= 2 || userFirstName.length > 15) {
    error.innerHTML = "**Please enter character between 3 to 30 in name field";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }

  //userLastName
  if (userLastName == "") {
    error.innerHTML = "**Please Enter your last name";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }
  if (!isNaN(userLastName)) {
    error.innerHTML = "**Please do not enter digits";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }
  if (userLastName.length <= 2 || userLastName.length > 15) {
    error.innerHTML = "**Please enter character between 3 to 30 in name field";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }

  //wallet
  if (wallet == "") {
    error.innerHTML = "**Please Enter amount";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }
  if (isNaN(wallet)) {
    error.innerHTML = "**Please enter digits";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }

  //kyc
  if (kyc == "") {
    error.innerHTML = "**Please Enter kyc";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }
  if (!isNaN(kyc)) {
    error.innerHTML = "**Please do not enter digits";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }


  return true;
}
