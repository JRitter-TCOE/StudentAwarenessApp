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
  
    if (res.status == "SUCCESS" && res.role == "Agency") {
      window.location.href = './report';
    }
    else if (res.status == "SUCCESS" && res.role == "School") {
      window.location.href = './school/notifications';
    }
    else if (res.status == "SUCCESS" && res.role == "District") {
      window.location.href = './district/notifications';
    }
    else if (res.status == "SUCCESS" && res.role == "Admin") {
      window.location.href = './admin/notifications';
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