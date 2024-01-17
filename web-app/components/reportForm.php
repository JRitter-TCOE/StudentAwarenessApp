<h1>First Responder<br>HOSWC Notification</h1>
<form id='report_form'>
  <label for='inc_date'>DATE OF INCIDENT (MM/DD/YYYY):</label>
  <input id='inc_date' name='inc_date' type='date'>

  <label>TIME OF INCIDENT:</label>
  <input id='inc_time' name='inc_time'>

  <label for='agency'>AGENCY REFERRED BY:</label>
  <?php 
  echo "<input id='agency' name='agency' value='".$_SESSION['username']."'>";
  ?>

  <label for='reported_by'>OFFICER / REPORTER NAME:</label>
  <input id='reported_by' name='reported_by' placeholder='Officer / Reporter Name'>

  <label for='case_num'>CASE NUMBER:</label>
  <input id='case_num' name='case_num' placeholder='Case Number'>
  
  <hr>

  <label for='child_fname'>CHILD FIRST NAME:</label>
  <input id='child_fname' name='child_fname' placeholder='Child First Name'>   
  <label for='child_lname'>CHILD LAST NAME:</label>
  <input id='child_lname' name='child_lname' placeholder='Child Last Name'>
  
  <label for='child_dob'>DATE OF BIRTH (MM/DD/YYYY):</label>
  <input id='child_dob' name='child_dob' type='date'>

  <label for='school'>SCHOOL:</label>
  <?php include('../components/schoolSelect.html') ?>
  
  <hr>

  <p class='feedback' id='report_feedback'></p>

  <div id='btn_row'>
    <input id='submit_btn' type="submit" value="Submit FOCUS">
  </div>
</form>

<p>2024 HOWSC California. All Rights Reserved.</p>

<script type='module' src='../scripts/ReportForm.js'></script>