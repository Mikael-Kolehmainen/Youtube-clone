function checkValue() {
    inputField = document.getElementById("upload");

    if (inputField.files.length == 0) {
        errorTag = document.getElementById("error");
        errorTag.innerText = "The file couldn't be uploaded, try again.";
    } else {
        localStorage.clear();
        showNextStage("details");
    }
}

// Create a back button

function showNextStage(nextStageName = "") {
    currentStageName = localStorage.getItem("currentStageName");

    if (localStorage.getItem("currentStageName") != null) {
        currentStageName = localStorage.getItem("currentStageName");
    } else {
        currentStageName = "upload";
    }
    if (nextStageName == "") {
        switch (currentStageName) {
            case "upload":
                nextStageName = "details";
                break;
            case "details":
                nextStageName = "elements";
                break;
            case "elements":
                nextStageName = "checks";
                break;
            case "checks":
                nextStageName = "visibility";
                break;
            default:
                nextStageName = "upload";
                break;
        }
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

    localStorage.setItem("currentStageName", nextStageName);
}