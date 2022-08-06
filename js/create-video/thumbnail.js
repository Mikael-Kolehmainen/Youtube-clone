function showThumbnailMenu(thumbnailInput) {
    let imgIcon = document.getElementById("img-icon");
    let thumbnailImg = document.getElementById("thumbnail-image");
    let videoPlayers = document.getElementsByClassName("player");

    thumbnailInput.style.display = "none";
    imgIcon.style.display = "none";

    const [file] = thumbnailInput.files;
    thumbnailImg.src = URL.createObjectURL(file);

    for (i = 0; i < videoPlayers.length; i++) {
        videoPlayers[i].poster = URL.createObjectURL(file);
    }

    thumbnailImg.style.display = "block";
}
function uploadThumbnail() {
    document.getElementById('thumbnail-input').click();
}