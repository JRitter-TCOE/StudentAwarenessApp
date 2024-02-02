import { post } from "./Requests";

const form = document.getElementById('report_form');
const inc_date = document.getElementById('inc_date');
const inc_time = document.getElementById('inc_time');
const agency = document.getElementById('agency');
const reported_by = document.getElementById('reported_by');
const case_num = document.getElementById('case_num');
const child_fname = document.getElementById('child_fname');
const child_lname = document.getElementById('child_lname');
const child_dob = document.getElementById('child_dob');
const school = document.getElementById('school_select');
const feedback = document.getElementById('report_feedback');


const date = new Date();

date.setDate

// Auto populate current date and time
inc_date.value = date.getFullYear() + "-" + ("0" + (date.getMonth()+1)).slice(-2) + "-" + ("0" + date.getDate()).slice(-2);
inc_time.value = date.toLocaleTimeString();


// Form submit function
form.onsubmit = async (e) => {
  e.preventDefault();

  const values = getFormValues();

  if (verifyReportForm(values)) {
    // submit report form values to backend
    const result = await post("../api/createReport.php", values);
    console.log(result);
    alert("You have successfully submitted a report.");
    
  }
  

}

// Get all values from inputs and return them as an object
function getFormValues() {
  return {
    inc_date: inc_date.value,
    inc_time: inc_time.value,
    agency: agency.value,
    reported_by: reported_by.value,
    case_num: case_num.value,
    child_fname: child_fname.value,
    child_lname: child_lname.value,
    child_dob: child_dob.value,
    school: school.value
  }
}

// Verify required fields are not blank
function verifyReportForm(values) {
  // Verify required fields
  child_fname.style.border = values.child_fname ? '1px solid white' : '4px solid red';
  child_lname.style.border = values.child_lname ? '1px solid white' : '4px solid red';
  school.style.border = values.school ? '1px solid white' : '4px solid red';

  if (!values.child_fname || !values.child_lname || !values.school) {
    feedback.innerText = 'Child first name, last name, and school are required fields.';
    return false;
  }

  feedback.innerText = '';

  return true;
}