function openDropdownMenu(id) {
    dropDowns = document.getElementsByClassName("dropdown");
    for (i = 0; i < dropDowns.length; i++) {
        if (id != dropDowns[i].id) {
            dropDowns[i].style.display = "none";
        }
    }

    dropDownMenu = document.getElementById(id);

    if (dropDownMenu.style.display == "block") {
        dropDownMenu.style.display = "none";
    } else if (dropDownMenu.style.display == "none") {
        dropDownMenu.style.display = "block";
    }
}