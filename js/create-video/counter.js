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

// TO-DO: Show the amount of chars in inputField through counter, chars + '/' + maxLength

function updateCounter(inputField) {
    let counter = findCounter(inputField);

    console.log(inputField.maxLength);
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