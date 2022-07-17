function openProfileMenu() {
    profileMenu = document.getElementById("profileMenu");

    if (profileMenu.style.display == "block") {
        profileMenu.style.display = "none";
    } else if (profileMenu.style.display == "none") {
        profileMenu.style.display = "block";
    }
}