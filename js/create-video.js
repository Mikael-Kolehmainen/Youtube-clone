function checkValue() {
    inputField = document.getElementById("upload");

    if (inputField.files.length == 0) {
        errorTag = document.getElementById("error");
        errorTag.innerText = "The file couldn't be uploaded";
    } else {
        showNextStage("upload", "details");
    }
}
function showNextStage(currentStageName, nextStageName) {
    currentStageName = currentStageName.toLowerCase();
    nextStageName = nextStageName.toLowerCase();
    idSuffix = "-stage";
    // SHOW NAV & TIMELINE WHEN THE VIDEO FILE HAS BEEN ACCEPTED
    if (currentStageName == "upload") {
        navBar = document.getElementById("nav");
        navBar.style.display = "block";

        timeline = document.getElementById("timeline");
        timeline.style.display = "block";
    }
    // HIDE CURRENT STAGE
    currentStage = document.getElementById(currentStageName+idSuffix);
    currentStage.style.display = "none";
    // SHOW NEXT STAGE
    nextStage = document.getElementById(nextStageName+idSuffix);
    nextStage.style.display = "block";
}