function validate() {
    const amenitiesNameid = document.getElementById('nameWatch1').value;
    const desc = document.getElementById('descc').value;
    const error = document.getElementById('error');

    if(amenitiesNameid == ""){
        error.innerHTML = "**Please fill the name";
        setTimeout(() => {
            error.innerHTML = "";
          }, 3000);
        return false;
    }
    if((amenitiesNameid.length <= 2) || (amenitiesNameid.length > 40)) {
       error.innerHTML = "**Please enter character between 3 to 40 in name field";
       setTimeout(() => {
        error.innerHTML = "";
      }, 3000);
       return false;
    }
    if(!isNaN(amenitiesNameid)){
        error.innerHTML = "**Number is not allow";
        setTimeout(() => {
            error.innerHTML = "";
          }, 3000);
        console.log("only no");
        return false;
    }

  //   if((desc.length <= 99)) {
  //       error.innerHTML = "**Please enter minimum 100 characters in description box";
  //       setTimeout(() => {
  //           error.innerHTML = "";
  //         }, 3000);
  //       return false;
  //   }

  //  return true;
  
}
