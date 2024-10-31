<?php
$student_marks = 75; // Assume the student marks are 75

if ($student_marks >= 90) {
    echo "Grade A";
} elseif ($student_marks >= 80) {
    echo "Grade B";
} elseif ($student_marks >= 70) {
    echo "Grade C";
} elseif ($student_marks >= 60) {
    echo "Grade D";
} elseif ($student_marks >= 50) {
    echo "Grade E";
} else {
    echo "Grade F";
}
?>