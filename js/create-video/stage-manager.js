window.onbeforeunload = function() {
    localStorage.clear();
}
function checkValue() {
    inputField = document.getElementById("upload");

    if (inputField.files.length == 0) {
        errorTag = document.getElementById("error");
        errorTag.innerText = "The file couldn't be uploaded, try again.";
    } else {
        document.getElementById("video-form").submit();
        showNextStage("details");
    }
}
function showNextStage(nextStageName = "", forward = true) {

    if (localStorage.getItem("currentStageName") != null) {
        currentStageName = localStorage.getItem("currentStageName");
    } else {
        currentStageName = "details";
    }
    if (nextStageName == "") {
        if (forward) {
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
        } else {
            switch (currentStageName) {
                case "elements":
                    nextStageName = "details";
                    break;
                case "checks":
                    nextStageName = "elements";
                    break;
                case "visibility":
                    nextStageName = "checks";
                    break;
                default:
                    nextStageName = "upload";
                    break;
            }
        }
    }
    currentStageName = currentStageName.toLowerCase();
    nextStageName = nextStageName.toLowerCase();
    // SHOW NAV & TIMELINE WHEN THE VIDEO FILE HAS BEEN ACCEPTED
    if (currentStageName == "upload") {
        navBar = document.getElementById("nav");
        navBar.style.display = "block";

        timeline = document.getElementById("timeline");
        timeline.style.display = "block";
    }
    // HIDE BACK BUTTON IF ON DETAILS (FIRST) STAGE
    backBtn = document.getElementById("back-btn");
    if (nextStageName == "details") {
        backBtn.style.display = "none";
    } else {
        backBtn.style.display = "inline-block";
    }
    // HIDE NEXT AND SHOW SUBMIT BUTTON IF ON VISIBILITY (LAST) STAGE
    nextBtn = document.getElementById("next-btn");
    submitBtn = document.getElementById("submit-btn");
    if (nextStageName == "visibility") {
        nextBtn.style.display = "none";
        submitBtn.style.display = "inline-block";
    } else {
        nextBtn.style.display = "inline-block";
        submitBtn.style.display = "none";
    }
    // HIDE CURRENT STAGE
    currentStage = document.getElementById(currentStageName+"-stage");
    currentStage.style.display = "none";
    // SHOW NEXT STAGE
    nextStage = document.getElementById(nextStageName+"-stage");
    nextStage.style.display = "block";
    // UPDATE NAVIGATION/TIMELINE
    if (currentStageName != "upload") {
        currentStageLink = document.getElementById(currentStageName+"-link");
        currentStageLink.classList.remove("active");
        nextStageLink = document.getElementById(nextStageName+"-link");
        nextStageLink.classList.add("active");

        currentStageLine = document.getElementById(currentStageName+"-line");
        currentStageLine.classList.remove("active");
        nextStageLine = document.getElementById(nextStageName+"-line");
        nextStageLine.classList.add("active");
    }

    localStorage.setItem("currentStageName", nextStageName);
}