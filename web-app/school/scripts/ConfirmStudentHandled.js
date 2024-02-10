import { post } from "../../scripts/Requests.js";

$('.confirm_btn').click(async (e) => {
    
    if (confirm("Confirm that this student's teacher has been notified?")) {
        const res = await post("../../api/confirmStudentHandled.php", {studentID: e.target.value});
        console.log(res);
        location.reload();
    }
    
});