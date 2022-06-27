window.onload = function() {
    var currentWidth = window.innerWidth;

    changeSearchBar(currentWidth);
};
window.addEventListener('resize', function(event) {
    var currentWidth = window.innerWidth;

    changeSearchBar(currentWidth);
});
function changeSearchBar(width) {
    searchBar = document.getElementById('search-bar');
    searchBtn = document.getElementById('search-btn');

    if (width <= 750) {
        searchBar.style.display = 'none';
        searchBtn.style.display = 'block';
    } else if (width > 750) {
        searchBar.style.display = 'block';
        searchBtn.style.display = 'none';
    }
}