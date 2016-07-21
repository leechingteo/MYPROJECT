<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

        <?php
     
        
        function loggedin(){
            if(isset($_SESSION['user_id'])&& !empty($_SESSION['user_id'])){
                return true;
            }else{
                return false;
                
            }
        }
        
        ?>
   