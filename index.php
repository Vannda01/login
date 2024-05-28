<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Dual Login / Signup Form</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css'>
    <link rel="stylesheet" href="style.css" />
    <link rel="java"       href="js.js">
  </head>
  <body>
    <div class="ocean">
      <div class="wave"></div>
      <div class="wave"></div>
  </div>
  <!-- Log In Form Section -->
  <section>
      <div class="container" id="container">
          <div class="form-container sign-up-container">
              <form action="#">
                  <h1>Sign Up</h1>
                  <div class="social-container">
                      <a href="https://github.com/Vannda01/login-.git" target="_blank" class="social"><i class="fab fa-github"></i></a>
                      <a href="mailto:punvanda3@gmail.com" target="_blank" class="social"><i class="fab fa-google"></i></a>
                  </div>
                  <span>Or use your Email for registration</span>
                  <label>
                      <input type="text" placeholder="Name"/>
                  </label>
                  <label>
                      <input type="email" placeholder="Email"/>
                  </label>
                  <label>
                      <input type="password" placeholder="Password"/>
                  </label>
                  <button style="margin-top: 9px">Sign Up</button>
              </form>
          </div>
          <div class="form-container sign-in-container">
              <form action="#">
                  <h1>Sign in</h1>
                  <div class="social-container">
                      <a href="https://github.com/Vannda01/login-.git" target="_blank" class="social"><i class="fab fa-github"></i></a>
                      <a href="mailto:punvanda3@gmail.com" target="_blank" class="social"><i class="fab fa-google"></i></a>
                  </div>
                  <span> Or sign in using E-Mail Address</span>
                  <label>
                      <input type="email" placeholder="Email"/>
                  </label>
                  <label>
                      <input type="password" placeholder="Password"/>
                  </label>
                  <a href="#">Forgot your password?</a>
                  <button>Sign In</button>
              </form>
          </div>
          <div class="overlay-container">
              <div class="overlay">
                  <div class="overlay-panel overlay-left">
                      <h1>Log in</h1>
                      <p>Sign in here if you already have an account </p>
                      <button class="ghost mt-5" id="signIn">Sign In</button>
                  </div>
                  <div class="overlay-panel overlay-right">
                      <h1>Create, Account!</h1>
                      <p>Sign up if you still don't have an account ... </p>
                      <button class="ghost" id="signUp">Sign Up</button>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js'></script>
    <script src="script.js"></script>
  <!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
</html>