<!DOCTYPE html>
<!--
Copyright 2014 Google Inc. All Rights Reserved.

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

  http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sample illustrating the use of Push Messaging and Notifications.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Push Messaging &amp; Notifications</title>
    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="../images/touch/chrome-touch-icon-192x192.png">
    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-title" content="Push Messaging and Notifications Sample">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="apple-touch-icon-precomposed" href="../images/apple-touch-icon-precomposed.png">
    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">
    <link rel="icon" href="../images/favicon.ico">
    <!-- Include manifest file in the page -->
    <link rel="manifest" href="{{URL::to('js/push/manifest.json')}}">
  </head>
  <body>
        <button class="js-push-button" disabled>
          Enable Push Messages
        </button>
    </p>

    <br />
    <br />

    <h2>cURL Command to Send Push</h2>
    <div class="js-curl-command"></div>
<script src="https://www.gstatic.com/firebasejs/3.8.0/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyCAMDj8-n5TYt3aZRefRjsDKF9rPcnG9R8",
    authDomain: "rb-push.firebaseapp.com",
    databaseURL: "https://rb-push.firebaseio.com",
    projectId: "rb-push",
    storageBucket: "rb-push.appspot.com",
    messagingSenderId: "129096352747"
  };
  firebase.initializeApp(config);
</script>
    <script src="{{URL::to('js/push/config.js')}}"></script>
    <script src="{{URL::to('js/push/demo.js')}}"></script>
    <script src="{{URL::to('js/push/main.js')}}"></script>
    <script>
      /* jshint ignore:start */
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-53563471-1', 'auto');
      ga('send', 'pageview');
      /* jshint ignore:end */
    </script>
    <!-- Built with love using Web Starter Kit -->
  </body>
</html>
