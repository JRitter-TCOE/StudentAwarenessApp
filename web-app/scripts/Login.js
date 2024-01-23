import {get, post} from './Requests.js';

const login = document.getElementById('login_form');
const user = document.getElementById('username');
const pass = document.getElementById('password');
const login_feedback = document.getElementById('login_feedback');

login.onsubmit = async (e) => {
  e.preventDefault();
  const params = {username: user.value, password: pass.value}

  user.style.borderColor = params.username ? 'white' : 'red';
  pass.style.borderColor = params.password ? 'white' : 'red';
    
  if (!params.username || !params.password) {
    login_feedback.innerText = "Please enter a username and password";
    return;
  }

  try {
      
    const res = await post('../api/login.php', params);
  
    if (res == "SUCCESS" && params.username == "wpd") {
      window.location.href = './pages/report.php';
    }
    else if (res == "SUCCESS" && params.username == "EastW") {
      window.location.href = './pages/school.php';
    }
    else {
      login_feedback.innerText = "Invalid Credentials";
    }
    
  }
  catch (err) {
    login_feedback.innerText = "Something went wrong...";
    console.log(err);
  }
}