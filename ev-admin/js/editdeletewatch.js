// function myFunction(inx) {
//   tableRowIndex = inx.rowIndex;
//   console.log(tableRowIndex);
// }

const watchbox = document.getElementById("watchbox");
const editbox = document.getElementById("editbox");
const deletebox = document.getElementById("deletebox");
const watchicon = document.querySelectorAll(".watchicon");
const editicon = document.querySelectorAll(".editicon");
const deleteicon = document.querySelectorAll(".deleteicon");
const closeWatch = document.getElementById("closewatch");
const closeedit = document.getElementById("closeedit");
const closedelete = document.getElementById("closedelete");
const okBtn = document.getElementById("okBtn");
const webbody = document.getElementById("body");
const blurDiv = document.getElementById("blurDiv");
const deleteCancle = document.getElementById("cancleButton");

for (let i = 0; i < watchicon.length; i++) {
  watchicon[i].addEventListener("click", () => {
    watchbox.style.transform = "translate(13rem, -60rem)";
    blurDiv.style.display = "block";
  });
}
for (let i = 0; i < editicon.length; i++) {
  editicon[i].addEventListener("click", () => {
    editbox.style.transform = "translate(13rem, -60rem)";
    blurDiv.style.display = "block";
  });
}
for (let i = 0; i < deleteicon.length; i++) {
    deleteicon[i].addEventListener("click", () => {
      deletebox.style.transform = "translate(352px, -444px)";
      blurDiv.style.display = "block";
    });
  }

closeWatch.addEventListener("click", () => {
  watchbox.style.transform = "translate(13rem, -147rem)";
  blurDiv.style.display = "none";
});
okBtn.addEventListener("click", () => {
  watchbox.style.transform = "translate(13rem, -147rem)";
  blurDiv.style.display = "none";
});
closeedit.addEventListener("click", () => {
  editbox.style.transform = "translate(13rem, -147rem)";
  blurDiv.style.display = "none";
});
closedelete.addEventListener("click", () => {
  deletebox.style.transform = "translate(352px, -2044px)";
  blurDiv.style.display = "none";
});
deleteCancle.addEventListener("click", () => {
  deletebox.style.transform = "translate(352px, -2044px)";
  blurDiv.style.display = "none";
});