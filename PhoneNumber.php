<html>
<head>
    <title>Phone Number Authentication with Firebase Web</title>
</head>
<body>
<h1>Enter number to create account</h1>
<form>
    <input type="text" id="number" placeholder="+923********">
    <div id="recaptcha-container"></div>
    <button type="button" onclick="phoneAuth();">SendCode</button>
</form><br>
<h1>Enter Verification code</h1>
<form>
    <input type="text" id="verificationCode" placeholder="Enter verification code">
    <button type="button" onclick="codeverify();">Verify code</button>

</form>



<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#config-web-app -->

<script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
        apiKey: "AIzaSyBK-juZ6krPJCHHELQgOW9sFUXsS9h3wHI",
        authDomain: "fir-web-b823f.firebaseapp.com",
        databaseURL: "https://fir-web-b823f.firebaseio.com",
        projectId: "fir-web-b823f",
        storageBucket: "fir-web-b823f.appspot.com",
        messagingSenderId: "463332404757",
        appId: "1:463332404757:web:68d04d3fdeeb333f"
    };

    //tss web configuration
     // var firebaseConfig = {
     //        apiKey: "AIzaSyDmGxTjoqOB5wbgjCrpiy89RwrFamk1wSU",
     //        authDomain: "track-side-sched-1580709502943.firebaseapp.com",
     //        databaseURL: "https://track-side-sched-1580709502943.firebaseio.com",
     //        projectId: "track-side-sched-1580709502943",
     //        storageBucket: "track-side-sched-1580709502943.appspot.com",
     //        messagingSenderId: "523158023386",
     //        appId: "1:523158023386:web:91b7f3d18c5ae7017d89e3",
     //        measurementId: "G-4DQDFHSJPR"
     //    };

    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);

    // firebase.initializeApp(firebaseConfig);
    // firebase.analytics();
</script>
<script src="NumberAuthentication.js" type="text/javascript"></script>
</body>
</html>