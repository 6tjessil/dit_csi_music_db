function openOption(evt, optionName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(optionName).style.display = "block";
  evt.currentTarget.className += " active";
}

document.getElementById("loginbtn").addEventListener("click", loginform);

function loginform(){
  document.getElementById('login_form').style.display='block'
}

document.getElementById("signupbtn").addEventListener("click", signupform);

function signupform(){
  document.getElementById('signup_form').style.display='block'
<<<<<<< Updated upstream
}
=======
}

const toggleSwitch = document.querySelector('.theme-switch input[type = "checkbox"]');

function switchTheme(e) {
  if(e.target.checked){
    document.documentElement.setAttribute('data-theme', 'dark');
    localStorage.setItem('theme', 'dark');
  } else {
    document.documentElement.setAttribute('data-theme', 'light');
    localStorage.setItem('theme', 'light');
  }
}

toggleSwitch.addEventListener('change', switchTheme, false);

const currentTheme = localStorage.getItem('theme') ? localStorage.getItem('theme') : null;
if(currentTheme){
  document.documentElement.setAttribute('data-theme', currentTheme);
  if(currentTheme === 'dark'){
    toggleSwitch.checked = true;
  }

}


function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
} 


>>>>>>> Stashed changes
