function showImage(index) {
    const mainImg = document.getElementById("mainImg");
    const thumbnails = document.querySelectorAll(".thumbnail-bar img");

    mainImg.src = thumbnails[index].src;
}