import { post } from "./Requests.js";

$('.confirm_btn').click(async (e) => {
    const res = await post("../api/confirmStudentHandled.php", {studentID: e.target.value});
    console.log(res);
});