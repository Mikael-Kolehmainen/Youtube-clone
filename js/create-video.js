function checkValue() {
    inputField = document.getElementById("upload");

    if (inputField.files.length == 0) {
        errorTag = document.getElementById("error");
        errorTag.innerText = "The file couldn't be uploaded";
    } else {
        showDetailsStage();
    }
}
// MAKE SHOWNEXTSTAGE INSTEAD LESS CODE, ONCLICK EVENTS ON BTNS TELL WHAT STAGE
function showDetailsStage() {
    // HIDE PREVIOUS STAGE
    uploadStage = document.getElementById("upload-stage");
    uploadStage.style.display = "none";
    // SHOW CURRENT STAGE
    detailsStage = document.getElementById("details-stage");
    detailsStage.style.display = "block";
}
function showNav() {
    navBar = document.getElementById("nav");
    navBar.style.display = "block";
}