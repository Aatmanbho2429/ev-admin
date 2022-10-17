function validate() {
  const name = document.getElementById("Name1wallet").value;
  const amount = document.getElementById("Amount1wallet").value;
  const transactionmethod = document.getElementById("Transaction1wallet").value;
  //time time
  //date date date
  const paymentstatus = document.getElementById("PaymentStatus1wallet").value;
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

  //amount
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

  //transactionmethod
  if (transactionmethod == "") {
    error.innerHTML = "**Please fill transaction method";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }
  if (!isNaN(transactionmethod)) {
    error.innerHTML = "**Digit are not allowed";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }

  //payment status
  if (paymentstatus == "") {
    error.innerHTML = "**Please fill payment status";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }

  if (paymentstatus.length <= 3 || paymentstatus.length > 8) {
    error.innerHTML = "**enter character between 4 to 10";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }
}
