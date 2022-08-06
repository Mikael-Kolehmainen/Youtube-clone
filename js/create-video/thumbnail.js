function showThumbnailMenu(thumbnailInput) {
    let imgIcon = document.getElementById("img-icon");
    let thumbnailImg = document.getElementById("thumbnail-image");
    let videoPlayer = document.getElementById("video-player");

    thumbnailInput.style.display = "none";
    imgIcon.style.display = "none";

    const [file] = thumbnailInput.files;
    thumbnailImg.src = URL.createObjectURL(file);
    videoPlayer.poster = URL.createObjectURL(file);

    thumbnailImg.style.display = "block";
}
function uploadThumbnail() {
    document.getElementById('thumbnail-input').click();
}