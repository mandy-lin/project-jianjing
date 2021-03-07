<?php
     error_reporting(2);
     $o_actual_date = @$_POST['o_actual_date'];
     $p_id=@$_POST['pid'];
     $p_maintain_time=@$_POST['pmt'];
     $p_name=@$_POST['pname'];
     $p_amount=@$_POST['pamount'];
     $p_no=@$_POST['pno'];
     $a=0;
     $p=0;
     $e=0;  

      for($c=0; $c<mysqli_num_rows($data); $c++){
        
        if (strchr($p_no[$c], "e")){
            $e += $p_amount[$c];
           // echo $e;
        }
        else if (strchr($p_no[$c], "p")){
            $p += $p_amount[$c];
            //echo $p;
        }
        else if (strchr($p_no[$c], "a")){
            $a += $p_amount[$c];
           // echo $a;
        }
     }
     
    if ($a>1 or $e>1 or $p>1){
         
         for($c=0; $c<mysqli_num_rows($data); $c++){
             
             if($p_name[$c]=='停車設備' and $p>='1'){
       
                 for ($i=1; $i<=$p; $i++){
                     
                     for ($t=1 ;$t<=12; $t++){
                     
                          $sql1=mysqli_query($con,"INSERT INTO `maintain`(`m_status`,`m_type`,`m_pretime`, `m_pno`,`m_pname`,`m_month`, `price_no`,`p_id`) VALUES('需保養','月保養','$p_maintain_time[$c]','$p_name[$c]$i','$p_name[$c]','$t','$id','$p_id[$c]')");
                       
                       
    
                     }

                 }
            
          }
          else if($p_name[$c]=='附屬設備' and $a>='1'){
        
                 for ($i=1; $i<=$a; $i++){
                  
                     for ($t=1 ;$t<=12; $t++){
                         $sql1=mysqli_query($con,"INSERT INTO `maintain`(`m_status`,`m_type`,`m_pretime`, `m_pno`,`m_pname`,`m_month`, `price_no`,`p_id`) VALUES('需保養','月保養','$p_maintain_time[$c]','$p_name[$c]$i','$p_name[$c]','$t','$id','$p_id[$c]')");
                     }

                 }
           
             }
       
            else if($p_name[$c]=='電梯' and $e>='1'){
      
                 for ($i=1;$i<=$e; $i++){
                  
                     for ($t=1;$t<=12; $t++){
                     if ($m==12){
                     $sql1=mysqli_query($con,"INSERT INTO `maintain`(`m_status`,`m_type`,`m_pretime`, `m_pno`,`m_pname`,`m_month`, `price_no`,`p_id`) VALUES('需保養','年保養','$p_maintain_time[$c]','$p_name[$c]$i','$p_name[$c]','$t','$id','$p_id[$c]')");}
                     else if ($m==6){
                     $sql1=mysqli_query($con,"INSERT INTO `maintain`(`m_status`,`m_type`,`m_pretime`, `m_pno`,`m_pname`,`m_month`, `price_no`,`p_id`) VALUES('需保養','半年保養','$p_maintain_time[$c]','$p_name[$c]$i','$p_name[$c]','$t','$id','$p_id[$c]')");}
                     else if ($m==3 or $m==9){
                     $sql1=mysqli_query($con,"INSERT INTO `maintain`(`m_status`,`m_type`,`m_pretime`, `m_pno`,`m_pname`,`m_month`, `price_no`,`p_id`) VALUES('需保養','季保養','$p_maintain_time[$c]','$p_name[$c]$i','$p_name[$c]','$t','$id','$p_id[$c]')");}
                      else {
                      $sql1=mysqli_query($con,"INSERT INTO `maintain`(`m_status`,`m_type`,`m_pretime`, `m_pno`,`m_pname`,`m_month`, `price_no`,`p_id`) VALUES('需保養','月保養','$p_maintain_time[$c]','$p_name[$c]$i','$p_name[$c]','$t','$id','$p_id[$c]')");}
                         
                     }

                 }
             
             }
                       if ($p_name[$c]=='附屬設備'){
            
                         for ($m=1; $m<=12; $m++){
         
                             $date2=date("Y-m-d", strtotime($o_actual_date."+$m month"));
                             $sql3=mysqli_query($con,"UPDATE `maintain` SET  `m_date`= STR_TO_DATE('$date2', '%Y-%m-%d'), `m_pretime`='$p_maintain_time[$c]', `p_start_date`=STR_TO_DATE('$date2', '%Y-%m-%d') where m_month='$m'and m_pno LIKE '附屬設備%'and price_no='$id' ");
            
                         }
                     }
                     else if ($p_name[$c]=='停車設備'){
                        
                         for ($m=1; $m<=12; $m++){
                
                             $date3=date("Y-m-d", strtotime($o_actual_date."+$m month"));
                             $sql3=mysqli_query($con,"UPDATE `maintain` SET  `m_date`= STR_TO_DATE('$date3', '%Y-%m-%d'), `m_pretime`='$p_maintain_time[$c]', `p_start_date`=STR_TO_DATE('$date3', '%Y-%m-%d')where m_month='$m'and m_pno LIKE '停車設備%'and price_no='$id'");
                         }
            
                     }
                          
                    else if ($p_name[$c]=='電梯'){
                    
                         for ($m=1; $m<=12; $m++){
                        
                             if ($m==12){
                   
                                 $date2=date("Y-m-d", strtotime($o_actual_date."+$m month"));
                                 $sql3=mysqli_query($con,"UPDATE `maintain` SET  `m_type`='年保養', `m_date`= STR_TO_DATE('$date2', '%Y-%m-%d'), `m_pretime`='$p_maintain_time[$c]', `p_start_date`=STR_TO_DATE('$date2', '%Y-%m-%d')  where m_month='$m' and m_pno LIKE '電梯%'and price_no='$id'");
                             }
                             else if ($m==6){
                        
                                 $date2=date("Y-m-d", strtotime($o_actual_date."+$m month"));
                                 $sql3=mysqli_query($con,"UPDATE `maintain` SET  `m_type`='半年保養', `m_date`= STR_TO_DATE('$date2', '%Y-%m-%d'), `m_pretime`='$p_maintain_time[$c]', `p_start_date`=STR_TO_DATE('$date2', '%Y-%m-%d')   where m_month='$m'and m_pno LIKE '電梯%'and price_no='$id'");
                            }
                            else if ($m==3 or $m==9){
                        
                                $date2=date("Y-m-d", strtotime($o_actual_date."+$m month"));
                                $sql3=mysqli_query($con,"UPDATE `maintain` SET  `m_type`='季保養', `m_date`= STR_TO_DATE('$date2', '%Y-%m-%d'), `m_pretime`='$p_maintain_time[$c]', `p_start_date`=STR_TO_DATE('$date2', '%Y-%m-%d') where m_month='$m'and m_pno LIKE '電梯%'and price_no='$id'");
                            }
                            else {
                        
                                $date2=date("Y-m-d", strtotime($o_actual_date."+$m month"));
                                $sql3=mysqli_query($con,"UPDATE `maintain` SET  `m_date`= STR_TO_DATE('$date2', '%Y-%m-%d'), `m_pretime`='$p_maintain_time[$c]', `p_start_date`=STR_TO_DATE('$date2', '%Y-%m-%d') where m_month='$m'and m_pno LIKE '電梯%'and price_no='$id'");
                            }

                        }
                     }
                     

             
          
         }   
    
     }else{

         for($c=0; $c<mysqli_num_rows($data); $c++){
   
             if($p_name[$c]=='附屬設備' and $p_amount[$c]>='1'){
        
                 for ($i=1; $i<=$p_amount[$c]; $i++){
                  
                     for ($t=1 ;$t<=12; $t++){
                         $sql1=mysqli_query($con,"INSERT INTO `maintain`(`m_status`,`m_type`,`m_pretime`, `m_pno`,`m_pname`,`m_month`, `price_no`,`p_id`) VALUES('需保養','月保養','$p_maintain_time[$c]','附屬設備$i','$p_name[$c]','$t','$id','$p_id[$c]')");
                     }

                 };
             }
             else if($p_name[$c]=='停車設備' and $p_amount[$c]>='1'){
       
                 for ($i=1; $i<=$p_amount[$c]; $i++){
                  
                     for ($t=1 ;$t<=12; $t++){
                         $sql1=mysqli_query($con,"INSERT INTO `maintain`(`m_status`,`m_type`,`m_pretime`, `m_pno`,`m_pname`,`m_month`, `price_no`,`p_id`) VALUES('需保養','月保養','$p_maintain_time[$c]','停車設備$i','$p_name[$c]','$t','$id','$p_id[$c]')");
                     }

                 };
             
             }else if($p_name[$c]=='電梯' and $p_amount[$c]>='1'){
      
                 for ($i=1;$i<=$p_amount[$c]; $i++){
                  
                for ($t=1;$t<=12; $t++){
                     if ($t==12){
                     $sql1=mysqli_query($con,"INSERT INTO `maintain`(`m_status`,`m_type`,`m_pretime`, `m_pno`,`m_pname`,`m_month`, `price_no`,`p_id`) VALUES('需保養','年保養','$p_maintain_time[$c]','$p_name[$c]$i','$p_name[$c]','$t','$id','$p_id[$c]')");}
                     else if ($t==6){
                     $sql1=mysqli_query($con,"INSERT INTO `maintain`(`m_status`,`m_type`,`m_pretime`, `m_pno`,`m_pname`,`m_month`, `price_no`,`p_id`) VALUES('需保養','半年保養','$p_maintain_time[$c]','$p_name[$c]$i','$p_name[$c]','$t','$id','$p_id[$c]')");}
                     else if ($t==3 or $t==9){
                     $sql1=mysqli_query($con,"INSERT INTO `maintain`(`m_status`,`m_type`,`m_pretime`, `m_pno`,`m_pname`,`m_month`, `price_no`,`p_id`) VALUES('需保養','季保養','$p_maintain_time[$c]','$p_name[$c]$i','$p_name[$c]','$t','$id','$p_id[$c]')");}
                      else {
                      $sql1=mysqli_query($con,"INSERT INTO `maintain`(`m_status`,`m_type`,`m_pretime`, `m_pno`,`m_pname`,`m_month`, `price_no`,`p_id`) VALUES('需保養','月保養','$p_maintain_time[$c]','$p_name[$c]$i','$p_name[$c]','$t','$id','$p_id[$c]')");}
                         
                     }
                 };
                }
            

            
                 if ($p_name[$c]=='電梯'){
                    
                     for ($m=1; $m<=12; $m++){
                        
                         if ($m==12){
                        
                             $date2=date("Y-m-d", strtotime($o_actual_date."+$m month"));
                             $sql3=mysqli_query($con,"UPDATE `maintain` SET  `m_date`= STR_TO_DATE('$date2', '%Y-%m-%d'), `m_pretime`='$p_maintain_time[$c]', `p_start_date`=STR_TO_DATE('$date2', '%Y-%m-%d')  where m_month='$m'and price_no='$id'and m_pno LIKE '電梯%'");
                         }
                         else if ($m==6){
                        
                             $date2=date("Y-m-d", strtotime($o_actual_date."+$m month"));
                             $sql3=mysqli_query($con,"UPDATE `maintain` SET   `m_date`= STR_TO_DATE('$date2', '%Y-%m-%d'), `m_pretime`='$p_maintain_time[$c]', `p_start_date`=STR_TO_DATE('$date2', '%Y-%m-%d')   where m_month='$m'and price_no='$id'and m_pno LIKE '電梯%'");
                        }
                         else if ($m==3 or $m==9){
                        
                             $date2=date("Y-m-d", strtotime($o_actual_date."+$m month"));
                             $sql3=mysqli_query($con,"UPDATE `maintain` SET  `m_date`= STR_TO_DATE('$date2', '%Y-%m-%d'), `m_pretime`='$p_maintain_time[$c]', `p_start_date`=STR_TO_DATE('$date2', '%Y-%m-%d') where m_month='$m'and price_no='$id'and m_pno LIKE '電梯%'");
                         }
                         else {
                        
                             $date2=date("Y-m-d", strtotime($o_actual_date."+$m month"));
                             $sql3=mysqli_query($con,"UPDATE `maintain` SET `m_date`= STR_TO_DATE('$date2', '%Y-%m-%d'), `m_pretime`='$p_maintain_time[$c]', `p_start_date`=STR_TO_DATE('$date2', '%Y-%m-%d') where m_month='$m'and price_no='$id'and m_pno LIKE '電梯%'");
                         }

                     }
                 }
                 else if ($p_name[$c]=='附屬設備'){
            
                     for ($m=1; $m<=12; $m++){
         
                         $date2=date("Y-m-d", strtotime($o_actual_date."+$m month"));
                         $sql3=mysqli_query($con,"UPDATE `maintain` SET `m_type`='月保養', `m_date`= STR_TO_DATE('$date2', '%Y-%m-%d'), `m_pretime`='$p_maintain_time[$c]', `p_start_date`=STR_TO_DATE('$date2', '%Y-%m-%d') where m_month='$m'and price_no='$id'and m_pno LIKE '附屬設備%'");
            
                     }
                 }
                 else if ($p_name[$c]=='停車設備'){
                        
                     for ($m=1; $m<=12; $m++){
                
                         $date3=date("Y-m-d", strtotime($o_actual_date."+$m month"));
                         $sql3=mysqli_query($con,"UPDATE `maintain` SET `m_type`='月保養',  `m_date`= STR_TO_DATE('$date3', '%Y-%m-%d'), `m_pretime`='$p_maintain_time[$c]', `p_start_date`=STR_TO_DATE('$date3', '%Y-%m-%d')where m_month='$m'and price_no='$id'and m_pno LIKE '停車設備%'");
                     }
            
                 }

             if($sql1){
                 echo 'ok';
             }
             else{
                 echo mysqli_error($con);
             }
                
         }

     }
            
 

?>
