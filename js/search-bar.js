function showSearchBar() {
    searchContainer = document.getElementById('search-container');
    searchBtnIcon = document.getElementById('search-btn-icon');

    searchBtnIcon.classList.add('clicked');
    setTimeout(() => { 
        searchContainer.style.display = 'block';
        searchBtnIcon.classList.remove('clicked');
    }, 200);
}
function hideSearchBar() {
    searchContainer = document.getElementById('search-container');
    backBtnIcon = document.getElementById('back-btn-icon');

    backBtnIcon.classList.add('clicked');
    setTimeout(() => { 
        searchContainer.style.display = 'none';
        backBtnIcon.classList.remove('clicked');
    }, 200);
}