window.onload = function() {
    var currentWidth = window.innerWidth;

    changeSearchBar(currentWidth);
    changeDefaultStateNav(currentWidth);
};
window.addEventListener('resize', function(event) {
    var currentWidth = window.innerWidth;

    changeSearchBar(currentWidth);
    hideSearchContainer(currentWidth);
    changeDefaultStateNav(currentWidth);
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
    if (width > 750) {
        searchContainer = document.getElementById('search-container');

        searchContainer.style.display = 'none';
    }
}
function changeDefaultStateNav(width) {
    if (width <= 1300) {
        navLinks = document.getElementById('navLinks');
        closedNavLinks = document.getElementById('closed-navLinks');
        overlay = document.getElementById('overlay');

        navLinks.style.display = 'none';
        closedNavLinks.style.display = 'block';
        overlay.style.display = 'none';
    }
}