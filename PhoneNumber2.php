
<html>
<head>
    <title>Phone Number Authentication with Firebase Web</title>
</head>
<body>
<h1>Enter number to create account</h1>
<form>
    <input type="text" id="number" placeholder="+923********" value="+919667472268">
    <div id="recaptcha-container"></div>
    <button type="button" onclick="phoneAuth();">SendCode</button>
</form><br>
<h1>Enter Verification code</h1>
<form>
    <input type="text" id="verificationCode" placeholder="Enter verification code">
    <button type="button" onclick="codeverify();">Verify code</button>

</form>

<!-- The core Firebase JS SDK is always required and must be listed first -->
<!-- <script src="https://www.gstatic.com/firebasejs/7.14.0/firebase-app.js"></script> -->
<script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>
<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<!-- <script src="https://www.gstatic.com/firebasejs/7.14.0/firebase-analytics.js"></script> -->

<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyDmGxTjoqOB5wbgjCrpiy89RwrFamk1wSU",
    authDomain: "track-side-sched-1580709502943.firebaseapp.com",
    databaseURL: "https://track-side-sched-1580709502943.firebaseio.com",
    projectId: "track-side-sched-1580709502943",
    storageBucket: "track-side-sched-1580709502943.appspot.com",
    messagingSenderId: "523158023386",
    appId: "1:523158023386:web:91b7f3d18c5ae7017d89e3",
    measurementId: "G-4DQDFHSJPR"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  // firebase.analytics();
</script>

<script src="NumberAuthentication2.js" type="text/javascript"></script>