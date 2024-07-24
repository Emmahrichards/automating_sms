<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Modern Login Form | CodingStella </title>
  <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins&amp;display=swap'><link rel="stylesheet" href="./style.css">
<style>* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

:root {
  --primary-color: #c6c3c3;
  --second-color: #ffffff;
  --black-color: #000000;
}

body {
  background-image: url("https://media.istockphoto.com/id/1345697568/photo/men-hands-are-typing-on-their-smartphones-and-chat-box-symbols-appear-concept-of-social-media.webp?b=1&s=170667a&w=0&k=20&c=AMPZ3lLh4WMt01oefyNP6ex2Bos-k63WQ6LixVeUt_k=");
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
}

a {
  text-decoration: none;
  color: var(--second-color);
}

a:hover {
  text-decoration: underline;
}

.wrapper {
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background-color: rgba(0, 0, 0, 0.2);
}

.login_box {
  position: relative;
  width: 450px;
  backdrop-filter: blur(25px);
  border: 2px solid var(--primary-color);
  border-radius: 15px;
  padding: 7.5em 2.5em 4em 2.5em;
  color: var(--second-color);
  box-shadow: 0px 0px 10px 2px rgba(0, 0, 0, 0.2);
}

.login-header {
  position: absolute;
  top: 0;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: var(--primary-color);
  width: 140px;
  height: 70px;
  border-radius: 0 0 20px 20px;
}

.login-header span {
  font-size: 30px;
  color: var(--black-color);
}

.login-header::before {
  content: "";
  position: absolute;
  top: 0;
  left: -30px;
  width: 30px;
  height: 30px;
  border-top-right-radius: 50%;
  background: transparent;
  box-shadow: 15px 0 0 0 var(--primary-color);
}

.login-header::after {
  content: "";
  position: absolute;
  top: 0;
  right: -30px;
  width: 30px;
  height: 30px;
  border-top-left-radius: 50%;
  background: transparent;
  box-shadow: -15px 0 0 0 var(--primary-color); /* Removed space before --primary-color */
}

.input_box {
  position: relative;
  display: flex;
  flex-direction: column;
  margin: 20px 0;
}

.input-field {
  width: 100%;
  height: 55px;
  font-size: 16px;
  background: transparent;
  color: var(--second-color);
  padding-inline: 20px 50px;
  border: 2px solid var(--primary-color);
  border-radius: 30px;
  outline: none;
}

#user {
  margin-bottom: 10px;
}

.label {
  position: absolute;
  top: 15px;
  left: 20px;
  transition: 0.2s;
}

.input-field:focus ~ .label,
.input-field:valid .label {
  /* Added missing closing brace here */
  position: absolute;
  top: -10px;
  left: 20px;
  font-size: 14px;
  background-color: var(--primary-color);
  border-radius: 30px;
  color: var(--black-color);
  padding: 0 10px;
} /* Closed the missing brace */

.icon {
  position: absolute;
  top: 18px;
  right: 25px;
  font-size: 20px;
}

.remember-forgot {
  display: flex;
  justify-content: space-between;
  font-size: 15px;
}

.input-submit {
  width: 100%;
  height: 50px;
  background: #ececec;
  font-size: 16px;
  font-weight: 500;
  border: none;
  border-radius: 30px;
  cursor: pointer;
  transition: 0.3s;
}

.input-submit:hover {
  background: var(--second-color);
}

.register {
  text-align: center;
}

.register a {
  font-weight: 500;
}

@media only screen and (max-width: 564px) {
  .wrapper {
    padding: 20px;
  }

  .login_box {
    padding: 7.5em 1.5em 4em 1.5em;
  }
}</style>
</head>
<body>
<!-- partial:index.partial.html -->
<div class="wrapper">
  <div class="login_box">
    <div class="login-header">
      <span>Login</span>
    </div>

    <div class="input_box">
      <input type="text" id="user" class="input-field" required>
      <label for="user" class="label">Username</label>
      <i class="bx bx-user icon"></i>
    </div>

    <div class="input_box">
      <input type="password" id="pass" class="input-field" required>
      <label for="pass" class="label">Password</label>
      <i class="bx bx-lock-alt icon"></i>
    </div>

    <div class="remember-forgot">
      <div class="remember-me">
        <input type="checkbox" id="remember">
        <label for="remember">Remember me</label>
      </div>

      <div class="forgot">
        <a href="#">Forgot password?</a>
      </div>
    </div>

    <div class="input_box">
      <input type="submit" class="input-submit" value="Login">
    </div>


    </div>
  </div>
</div>
<!-- partial -->

</body>
</html>
