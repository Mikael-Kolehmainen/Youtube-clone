function showCounter(inputField) {
    // HIDE ALL COUNTERS
    let counters = document.getElementsByClassName("counter");

    for (i = 0; i < counters.length; i++) {
        counters[i].style.display = "none";
    }

    // SHOW THE COUNTER FOR THIS INPUT FIELD
    let counter = findCounter(inputField);

    counter.style.display = "block";
}
function updateCounter(inputField) {
    // UPDATE COUNTER
    let counter = findCounter(inputField);

    counter.innerText = inputField.value.length + "/" + inputField.maxLength;

    if (inputField.name == "title") {
        // UPDATE TITLE
        let title = document.getElementById("video-title");

        title.innerText = inputField.value;
        // UPDATE NAME ON VISIBILITY STAGE
        let name = document.getElementById("video-name");

        name.innerText = inputField.value;
    }
}
function findCounter(inputField) {
    let placeholder = inputField.nextElementSibling;
    let counter;

    while (placeholder) {
        if (placeholder.classList.contains('counter')) {
            counter = placeholder;
            break;
        }
        placeholder = placeholder.nextElementSibling;
    }

    return counter;
}