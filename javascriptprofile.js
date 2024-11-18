
    // Sentences and corresponding images
const data = [
{ text: "Welcome to the first slide!", image: "images/pic1.PNG?text=Templateshares" },
{ text: "Here's the second one.", image: "images/pic2.PNG?text=Templateshares" },
{ text: "Hope you're enjoying this!", image: "images/pic3.PNG?text=Templateshares" },
{ text: "This is the final slide. Goodbye!", image: "images/pic4.PNG?text=Templateshares" }
];

    let index = 0; // Tracks current sentence/image
    let charIndex = 0; // Tracks current character
    const backgroundImage = document.getElementById("backgroundImage");
    const sentenceElement = document.getElementById("innerpartsentence");

    function displayLetters() {
      const { text, image } = data[index];

      // Set the background image and reset variables
      backgroundImage.src = image;
      sentenceElement.textContent = ""; // Clear the sentence
      charIndex = 0;

      // Function to show letters one by one
      const letterInterval = setInterval(() => {
        if (charIndex < text.length) {
          sentenceElement.textContent += text[charIndex];
          charIndex++;
        } else {
          clearInterval(letterInterval); // Stop displaying letters for this sentence

          // Move to the next sentence
          index = (index + 1) % data.length; // Loop back to the start
          setTimeout(displayLetters, 2000); // Delay before the next sentence
        }
      }, 150); // Time between letters
    }

    // Start displaying the first sentence
    displayLetters();
  


    function tittoggleMenu() {
      const mainMenu = document.getElementById('mainMenu');
      mainMenu.classList.toggle('active');
  }

  function toggleNestedMenu(event) {
      event.preventDefault(); // Prevent link from navigating
      const nestedMenu = event.target.nextElementSibling; // Get the nested menu
      nestedMenu.classList.toggle('active'); // Toggle visibility
  }

  // Close the menu when clicking outside of it
  document.addEventListener('click', function(event) {
      const mainMenu = document.getElementById('mainMenu');
      const menuIcon = document.querySelector('.menu-icon');

      // Check if the click is outside the menu and the menu icon
      if (!mainMenu.contains(event.target) && !menuIcon.contains(event.target)) {
          mainMenu.classList.remove('active'); // Close the main menu
          // Close all nested menus
          document.querySelectorAll('.nested-menu').forEach(menu => {
              menu.classList.remove('active');
          });
      }
  });
  
      function toggleMenu() {
        const navbarLinks = document.querySelector('.navbar-links');
        navbarLinks.classList.toggle('active');
      }
      function toggleMenu() {
          const navbarLinks = document.querySelector('.navbar-links');
          navbarLinks.classList.toggle('active');
        }
    
        function showContent(sectionId) {
          // Hide all sections first
          const sections = document.querySelectorAll('.linavbar');
          sections.forEach(section => section.style.display = 'none');
          
          // Show the hovered section
          document.getElementById(sectionId).style.display = 'flex';
        }
    
        function hideContent() {
          // Hide all sections when not hovering over a menu item
          const sections = document.querySelectorAll('.linavbar');
          sections.forEach(section => section.style.display = 'none');
        }
  
        let activeSection = null;
  
  function showContent(sectionId) {
    // Hide currently active section if it’s not the same as the one clicked
    if (activeSection && activeSection.id !== sectionId) {
      activeSection.style.display = 'none';
      activeSection.classList.remove('active');
    }
  
    // Show or toggle the clicked section
    const section = document.getElementById(sectionId);
    if (section === activeSection) {
      section.style.display = 'none';
      activeSection = null;
    } else {
      section.style.display = 'flex';
      section.classList.add('active');
      activeSection = section;
    }
  }
  
  // Hide active section if clicking outside of navbar or content area
  document.addEventListener('click', function(event) {
    const navbar = document.querySelector('.navbar');
    const isClickInside = navbar.contains(event.target) || 
                          (activeSection && activeSection.contains(event.target));
  
    if (!isClickInside && activeSection) {
      activeSection.style.display = 'none';
      activeSection.classList.remove('active');
      activeSection = null;
    }
  });




  // have started in in this section 
// Function to set a cookie

// Function to set a cookie
// Function to set a cookie
// Function to set a cookie
function setCookie(name, value, days) {
  const date = new Date();
  date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
  document.cookie = `${name}=${value}; expires=${date.toUTCString()}; path=/`;
}

// Function to get a cookie
function getCookie(name) {
  const cookieArr = document.cookie.split(";");
  for (let cookie of cookieArr) {
      let [key, value] = cookie.trim().split("=");
      if (key === name) return value;
  }
  return null;
  
}

// Function to remove old theme classes
function removeThemeClasses(elements, themes) {
  elements.forEach((el) => {
      themes.forEach((theme) => el.classList.remove(`${theme}-theme`));
  });
}

// Function to apply a new theme
function applyTheme(theme) {
  const menubarelements = document.querySelectorAll(".ulnavbys");
  const linavbarelements = document.querySelectorAll(".linavbar");
  const themes = ["light", "dark", "blue", "green","yellow","red","orange","brown"]; // List of theme names

  // Remove previous theme classes
  removeThemeClasses([...menubarelements, ...linavbarelements, document.body], themes);

  // Apply new theme class to each element
  menubarelements.forEach((el) => el.classList.add(`${theme}-theme`));
  linavbarelements.forEach((el) => el.classList.add(`${theme}-theme`));
  //document.body.classList.add(`${theme}-theme`);
}

// Function to initialize theme on load
function initializeTheme() {
  const savedTheme = getCookie("theme") || "light"; // Default to "light" theme
  applyTheme(savedTheme);
  const selectElement = document.getElementById("theme-select");
  if (selectElement) {
      selectElement.value = savedTheme;
  }
}

// Wait for DOM to fully load
document.addEventListener("DOMContentLoaded", () => {
  // Initialize theme on page load
  initializeTheme();

  /// Add event listener for theme selection change
  const selectElement = document.getElementById("theme-select");
  if (selectElement) {
      selectElement.addEventListener("change", (event) => {
          const selectedTheme = event.target.value;
          applyTheme(selectedTheme);
          setCookie("theme", selectedTheme, 30); // Save theme for 30 days
          
          // Refresh the page after 2 seconds
        //  setTimeout(() => {
             // window.location.reload();
         // }, 1000); // 1000 ms = 1 seconds
      });
  }
});


