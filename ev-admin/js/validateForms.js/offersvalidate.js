function validate() {
  const name = document.getElementById("Name1off").value;
  const offer = document.getElementById("Offer1").value;
  const offerMoney = document.getElementById("OfferMoney1").value;
  const Used = document.getElementById("Used1").value;
  const error = document.getElementById("error");

  //manufacturer
  if (name == "") {
    error.innerHTML = "**Please fill your name";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }
  if (!isNaN(name)) {
    error.innerHTML = "**Numbers is not allow";
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

  //offer
  if (offer == "") {
    error.innerHTML = "**Please fill offer field";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }
  if (!isNaN(offer)) {
    error.innerHTML = "**Numbers is not allow";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }
  if (offer.length <= 5 || offer.length > 20) {
    error.innerHTML = "**Please enter character between 6 to 20 in offer field";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }

  //offerMoney
  if (offerMoney == "") {
    error.innerHTML = "**Please fill offer money field";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }
  if (!isNaN(offerMoney)) {
    error.innerHTML = "**Numbers is not allow";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }
  if (offerMoney.length <= 2 || offerMoney.length > 20) {
    error.innerHTML = "**Please enter character between 3 to 20 in offer money field";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }

  //used
  if (Used == "") {
    error.innerHTML = "**Please fill used field";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }
  if (!isNaN(Used)) {
    error.innerHTML = "**Numbers is not allow";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }
  if (Used.length <=1 || Used.length > 3) {
    error.innerHTML = "**Please Enter Yes or No";
    setTimeout(() => {
      error.innerHTML = "";
    }, 3000);
    return false;
  }

}
