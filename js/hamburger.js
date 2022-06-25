function openHamburgerMenu() {
    links = document.getElementById('navLinks');
    closedLinks = document.getElementById('closed-navLinks');
    hamburgerImg = document.getElementById("hamburgerImage");
    hamburger = document.getElementById("hamburger");
    if (links.style.display == 'block' || links.style.display == "") {
        links.style.display = 'none';
        closedLinks.style.display = 'block';
        hamburger.classList.add("hamburger-click");
        setTimeout(() => { 
            hamburger.classList.remove("hamburger-click");
        }, 1000);
    } else if (links.style.display == 'none') {
        links.style.display = 'block';
        closedLinks.style.display = 'none';
        hamburger.classList.add("hamburger-click");
        setTimeout(() => { 
            hamburger.classList.remove("hamburger-click");
        }, 1000);
    }
  }