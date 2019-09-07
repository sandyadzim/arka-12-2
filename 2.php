<?php
            function userValidasi($username){
                $smalVal = preg_match('/[a-z]/', $username);
                $batas = strlen($username);
                $bigVal = preg_match('/[A-Z]/', $username);
                $angka = preg_match('/[0-9]/', $username);
                $specVal = preg_match('/[#$%^&*()+=\-\[\]\';,.\/{}|":<>?~\\\\]/', $username);
            
                if ($bigVal) {
                    echo "Username Invalid";
                }
                elseif ($angka) {
                    echo "Username Invalid";
                }
                elseif ($specVal) {
                    echo "Username Invalid";
                }
                elseif ($batas <= 4 || $batas >= 10) {
                    echo "Username Invalid";
                }
                else {
                    echo "Username Valid";
                }
            }

            $username = "siska";
            userValidasi($username);
            echo "<br>";

            function passValidasi($password){
                $minVal = strlen($password) >= 8;
                $kapVal = preg_match('/[A-Z]/', $password);
                $lowVal = preg_match('/[a-z]/', $password);
                $numberr = preg_match('/[0-9]/', $password);
                $specVal = preg_match('/[#$%^&*()+=\-\[\]\';,.\/{}|":!<>?~\\\\]/', $password);
                
                if ($minVal && $kapVal && $lowVal && $numberr && $specVal) {
                    echo "Password Valid";
                }else{
                    echo "Password Invalid";
                }
            }
        
            $password = "codeYourFuture!123";
            passValidasi($password);
?>