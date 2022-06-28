window.onload = function() {
    var currentWidth = window.innerWidth;

    changeSearchBar(currentWidth);
};
window.addEventListener('resize', function(event) {
    var currentWidth = window.innerWidth;

    changeSearchBar(currentWidth);
    hideSearchContainer(currentWidth);
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
function hideSearchContainer(width) {
    searchContainer = document.getElementById('search-container');

    if (width > 750) {
        searchContainer.style.display = 'none';
    }
}