const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () =>
  container.classList.add("right-panel-active")
);

signUpButton.addEventListener('click', () =>
  container.classList.remove("move-back")
);



signInButton.addEventListener('click', () =>
  container.classList.remove("right-panel-active")
);

signInButton.addEventListener('click', () =>
  container.classList.add("move-back")
);
document.getElementById("IN").onclick=function(){
  location.href="http://localhost/Final%20Project/";
};
document.getElementById("UP").onclick=function(){
  location.href="http://localhost/Final%20Project/";
};