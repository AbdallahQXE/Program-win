import { getAuth, onAuthStateChanged } from "firebase/auth";

const auth = getAuth();
onAuthStateChanged(auth, (user) => {
  if (user) {
    
    document.getElementById("user_div").style.display = "block";
    document.getElementById("login_div").style.display = "none";

  } else {
    document.getElementById("user_div").style.display = "none";
    document.getElementById("login_div").style.display = "block";
  }
});

function login() {
	var userEmail = document.getElementById("email_field").value;
	var userPass = document.getElementById("password_field").value;

	firebase.auth().signInWithEmailAndPassword(userEmail, userPass)
  .then((userCredential) => {
    // Signed in
    var user = userCredential.user;
    // ...
  })
  .catch((error) => {
    var errorCode = error.code;
    var errorMessage = error.message;

    window.alert("Error : " + errorMessage);

  });



}


function logout() {
	firebase.auth().signOut();
}