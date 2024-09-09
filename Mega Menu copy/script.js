document.addEventListener("DOMContentLoaded", function() {
    var menuItems = document.querySelectorAll(".menu-item");
  
    // Close mega menus when clicking outside
    document.addEventListener("click", function(event) {
      if (!event.target.closest(".menu-item")) {
        closeAllMegaMenus();
      }
    });
  
    // Close mega menus when the user moves the cursor out of the navigation area
    document.querySelector("nav").addEventListener("mouseleave", function() {
      closeAllMegaMenus();
    });
  
    // Close all mega menus
    function closeAllMegaMenus() {
      var megaMenus = document.querySelectorAll(".mega-menu");
      megaMenus.forEach(function(megaMenu) {
        megaMenu.style.display = "none";
      });
    }
  });
  