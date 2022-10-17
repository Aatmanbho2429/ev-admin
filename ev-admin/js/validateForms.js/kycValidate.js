function validate() {
  const userName = document.getElementById("Name1kyc").value;
  const adhar = document.getElementById("Aadhar1kyc").value;
  const pan = document.getElementById("PanNumber1kyc").value;
  const paymentStatus = document.getElementById("PaymentStatus1kyc").value;
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
    error.innerHTML = "**Please do not enter only digits";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }
  if (userName.length <= 2 || userName.length > 30) {
    error.innerHTML = "**Please enter character between 3 to 40 in name field";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }

  //aadhar
  if (adhar == "") {
    error.innerHTML = "**Please Enter your Adhar number";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }
  if (isNaN(adhar)) {
    error.innerHTML = "**Please enter only digits";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }
  if (adhar.length != 12) {
    error.innerHTML = "**Please Enter 12 digit of your adhar no.";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }

  //pan
  if (pan == "") {
    error.innerHTML = "**Please Enter your pan number";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }
  if (!isNaN(pan)) {
    error.innerHTML = "**Please don't enter only digits";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }
//   if (pan.length != 12) {
//     error.innerHTML = "**Please Enter 12 digit of your adhar no.";
//     return false;
//   }

 //paymentStatus
 if (paymentStatus == "") {
    error.innerHTML = "**Please Enter payment status";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }
  if (!isNaN(paymentStatus)) {
    error.innerHTML = "**Please don't enter only digits";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }
  if (paymentStatus.length <= 4 || paymentStatus.length > 10) {
    error.innerHTML = "**Please enter character between 4 to 10 in payment status field";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }

  return true;
}
