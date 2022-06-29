window.onload = function() {
    var currentWidth = window.innerWidth;

    changeSearchBar(currentWidth);
    changeDefaultStateNav(currentWidth);
    hideSmallNav(currentWidth);
};
window.addEventListener('resize', function(event) {
    var currentWidth = window.innerWidth;

    changeSearchBar(currentWidth);
    hideSearchContainer(currentWidth);
    changeDefaultStateNav(currentWidth);
    hideSmallNav(currentWidth);
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
    navLinks = document.getElementById('navLinks');
    closedNavLinks = document.getElementById('closed-navLinks');
    overlay = document.getElementById('overlay');
    videoSection = document.getElementById('video-section');

    if (width <= 1300) {
        navLinks.style.display = 'none';
        closedNavLinks.style.display = 'block';
        overlay.style.display = 'none';
    } else if (width > 1300) {
        videoSection.classList.remove("expanded-view");
        navLinks.style.display = 'block';
        navLinks.classList.add("opened");
        closedNavLinks.style.display = 'none';
    }
}
function hideSmallNav(width) {
    closedNavLinks = document.getElementById('closed-navLinks');

    if (width <= 800) {
        closedNavLinks.style.display = 'none';
    }
}