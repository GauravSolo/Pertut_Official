<?php
include "../config.inc.php";


if (isset($_POST['fetch_teachers']) && $_POST['fetch_teachers'] == "teachers") {
    $query = "SELECT * FROM teachers WHERE Active_Status = 1";
    $error = 0;
    $teacher_data = [];

    try {
        $st = $db->prepare($query);
        $st->execute();
        $teacher_data = $st->fetchAll(PDO::FETCH_ASSOC);

        foreach($teacher_data as $index => $teacher) {
            $sub_query = "SELECT COUNT(DISTINCT student_id) as cnt FROM enrollments WHERE teacher_id = :teacher_id";
            $sub_st = $db->prepare($sub_query);
            $sub_st->bindParam(':teacher_id', $teacher['teacher_id'], PDO::PARAM_INT);
            $sub_st->execute();
            $teacher_data[$index]['cnt'] = $sub_st->fetch()['cnt']; 
        }
    } catch (Throwable $th) {
        $error = 1;
    }

    // Return the result as JSON
    echo json_encode(array("error" => $error, "teachers" => $teacher_data));
}


if (isset($_POST['fetch_subjects']) && $_POST['fetch_subjects'] == "subjects") {

   $query = "SELECT DISTINCT expertise FROM teachers WHERE Active_Status = 1";
   $stmt = $db->prepare($query);
   $stmt->execute();

   $expertiseList = $stmt->fetchAll(PDO::FETCH_COLUMN);

   $courses = [];
   foreach ($expertiseList as $expertise) {
       $expertiseArray = array_map('trim', explode(',', $expertise));
       $courses = array_merge($courses, $expertiseArray);
   }

   $courses = array_unique($courses);
   sort($courses);
    $html = "<option value='' selected>Select Subject</option>";
    foreach ($courses as $course) {
        $html .= '<option value="' . htmlspecialchars($course) . '">' . htmlspecialchars($course) . '</option>';
    }
    echo json_encode(array("html"=>$html));
    $db = null;
    die();
}


?>
