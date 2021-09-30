<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Program & Win - Login page</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>

	<div class="main-inputs" id="login_div">
		<h1>
			Sign up Now
		</h1>

		<br>
		<h2>Email</h2>
		<input type="email" placeholder="Email, make sure it is real" class="input-email" id="email_field">
		<br>
		<h2>Password</h2>
		<input type="password" placeholder="password, must be strong for your safty" class="input-password" id="password_field">
		<br>
		<button type="submit" class="input-btn" onclick="login()">Sign up</button>
	</div>






<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.1.0/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.1.0/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyBdvr-MTK6mJpjIZoQ1pU_VoxCaA1fJ3pc",
    authDomain: "program-win.firebaseapp.com",
    projectId: "program-win",
    storageBucket: "program-win.appspot.com",
    messagingSenderId: "405000201123",
    appId: "1:405000201123:web:9817ad4f3240ec8293f016",
    measurementId: "G-C5YRQ6TEEW"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
</script>

<script src="script/login.js"></script>

</body>
</html>