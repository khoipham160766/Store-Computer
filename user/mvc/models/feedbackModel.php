<?php

    class feedbackModel extends connectDB{
        function insert_feedback($name, $email, $feedback, $time){
            $sql = "INSERT INTO `feedback`(`email_user`, `time_send`, `name`, `content_feedback`) 
                    VALUES ('".$email."','".$time."','".$name."','".$feedback."')";
            if(mysqli_query($this->con, $sql))
            {
                return true;
            }
            return false;
        }
    }

?>