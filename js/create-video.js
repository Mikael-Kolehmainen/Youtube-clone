function checkValue() {
    inputField = document.getElementById("upload");

    if (inputField.files.length == 0) {
        errorTag = document.getElementById("error");
        errorTag.innerText = "The file couldn't be uploaded, try again.";
    } else {
        showNextStage("details");
    }
}

// Save currentstage in localStorage instead of the link and when the forward and backwards 
// buttons are clicked check localstorage to know last location

function showNextStage(nextStageName = "") {
    if (window.location.href.includes("#")) {
        splitUrl = window.location.href.split("#");
        if (splitUrl[1] == "") {
            currentStageName = "upload";
        } else {
            currentStageName = splitUrl[1];
        }
    } else {
        currentStageName = "upload";
    }
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