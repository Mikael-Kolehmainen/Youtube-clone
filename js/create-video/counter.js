function showCounter() {
    placeholder = this.nextElementSibling;

    while (placeholder) {
        if (placeholder.classList.contains('counter')) {
            counter = placeholder;
            break;
        }
        placeholder = placeholder.nextElementSibling;
    }

    console.log(counter);
}