<?php
	/*require_once(ROOT_DIR.CONFIG_DIR.'/'.PHP_MAILER_DIR.'/PHPMailerAutoload.php');
	require_once(ROOT_DIR.CONFIG_DIR.'/'.PHP_MAILER_DIR.'/class.phpmailer.php');
    require_once(ROOT_DIR.CONFIG_DIR.'/'.DOM_PDF_DIR.'/autoload.php');
    require_once(ROOT_DIR.CONFIG_DIR.'/Tozzu/library/Requests.php');*/
    // reference the Dompdf namespace
	use Dompdf\Dompdf;



	class vinay{
        var $db;
        function __construct() {
            $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
            $this->db = new PDO(DB_TYPE . ':host=' . MAIN_DB_HOST . ';dbname=' . MAIN_DB_DATABASE . ';charset=' . DB_CHARSET, MAIN_DB_USER, MAIN_DB_PASSWORD, $options);
            /*echo "<pre>";print_r($this->db);die();*/
        }
        // function sendOTP($mobile_no){

        //     $api_key = '2601118BB73DC1';
        //     $contacts = $mobile_no;
        //     $from = 'POSTBN';
        //     $chars = "0123456789";
        //     $otp = substr( str_shuffle( $chars ), 0, 4 );
        //     $sms_text = urlencode("Your One Time Passwoerd is ".$otp);

        //     $api_url = "http://smsdhanera.metronicsweb.in/app/smsapi/index.php?key=".$api_key."&campaign=10671&routeid=7&type=text&contacts=".$contacts."&senderid=".$from."&msg=".$sms_text;

        //     $response = file_get_contents($api_url);
        //     $response=$otp;
        //     return $response;
        // }
        function getStates(){
            $states = array('Andhra Pradesh','Arunachal Pradesh','Assam','Bihar','Chhattisgarh','Goa','Gujarat','Haryana','Himachal Pradesh','Jammu and Kashmir','Jharkhand','Karnataka','Kerala','Madhya Pradesh','Maharashtra','Manipur','Meghalaya','Mizoram','Nagaland','Odisha','Punjab','Rajasthan','Sikkim','Tamil Nadu','Telangana','Tripura','Uttar Pradesh','Uttarakhand','West Bengal','Andaman and Nicobar Islands','Chandigarh','Dadra and Nagar Haveli','Daman and Diu','Lakshadweep','National Capital Territory of Delhi','Puducherry');
            asort($states);
            return $states;
        }
        function getCountry(){
            $country = array("India");
            return $country;
        }
        function smtpmailer($to, $from, $from_name, $subject, $body, $file='') { 
            $mail = new PHPMailer();  // create a new object
            //$mail->isSMTP();
            //$mail->isHTML(true);  
            $mail->Host = 'mail.pankajjoshi.in';
            $mail->Username = 'contact@pankajjoshi.in';          // SMTP username
            $mail->Password = 'hz%~pyTDId.I';
            $mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;
            $mail->SetFrom($from, $from_name);
            $mail->Subject = $subject;
            $mail->Body = $body;
            $mail->IsHTML(true);
            $mail->AddAddress($to);
            if(!empty($file)){
                $mail->AddAttachment($file,"Receipt");
            }
            if(!$mail->Send()) {
                $mail_status = new stdClass();
                $mail_status->status = false;
                $mail_status->error = 'Mail error: '.$mail->ErrorInfo; 
                return $mail_status;
            } else {
                $mail_status = new stdClass();
                $mail_status->status = true;
                $mail_status->success = 'Message sent!';
                return $mail_status;
            }
        }

        function TeacherLogin($username,$password,$role_id){
            $field='';
            
            if(is_numeric($username)){
                $field = "admin_phone";
            }else{
                $field = "email_id";
            }

            if($role_id==1){ // admin login
                $sql = "SELECT * FROM `mst_employee` WHERE $field=:username AND password=:password";
            }else if($role_id==2){ // business login
                $sql = "SELECT * FROM `mst_employee` WHERE $field=:username AND password=:password";
            }else{
                $teacher = new stdClass();
                $teacher->emp_id = 0;
                $teacher->error=  "Invalid username/password.";
                return $teacher;
            }
            $params = array(':username'=>$username,':password'=>md5($password));
            $query = $this->db->prepare($sql);
            $query->execute($params);
            $teacher = $query->fetch();
            if(empty($teacher)){
                $teacher = new stdClass();
                $teacher->emp_id = 0;
                $teacher->error=  "Invalid username/password.";
                return $teacher;
            }elseif($teacher->status==0){            
                $teacher = new stdClass();
                $teacher->emp_id = 0;
                $teacher->error=  "Your account has been pending for approval.";            
                return $teacher;
            }else if($teacher->status==3){
                $teacher = new stdClass();
                $teacher->emp_id = 0;
                $teacher->error=  "Your account has been blocked.";
                return $teacher;
            }
            return $teacher;
        }


        


        function TeacherLogin1($username,$password,$role_id){
            $field='';
            
            if(is_numeric($username)){
                $field = "admin_phone";
            }else{
                $field = "email_id";
            }

            if($role_id==2){ // admin login
                $sql = "SELECT * FROM `mst_employee` WHERE $field=:username AND password=:password";
            }else{
                $teacher = new stdClass();
                $teacher->emp_id = 0;
                $teacher->error=  "Invalid username/password.";
                return $teacher;
            }
            $params = array(':username'=>$username,':password'=>md5($password));
            $query = $this->db->prepare($sql);
            $query->execute($params);
            $teacher = $query->fetch();
            if(empty($teacher)){
                $teacher = new stdClass();
                $teacher->emp_id = 0;
                $teacher->error=  "Invalid username/password.";
                return $teacher;
            }elseif($teacher->status==0){            
                $teacher = new stdClass();
                $teacher->emp_id = 0;
                $teacher->error=  "Your account has been pending for approval.";            
                return $teacher;
            }else if($teacher->status==3){
                $teacher = new stdClass();
                $teacher->emp_id = 0;
                $teacher->error=  "Your account has been blocked.";
                return $teacher;
            }
            return $teacher;
        }


        

         function TeacherLogin2($username,$password,$role_id){
            $field='';
            
            if(is_numeric($username)){
                $field = "admin_phone";
            }else{
                $field = "email_id";
            }

            if($role_id==1){ // admin login
                $sql = "SELECT * FROM `mst_employee` WHERE $field=:username AND password=:password";
            }else if($role_id==2){ // business login
                $sql = "SELECT * FROM `mst_employee` WHERE $field=:username AND password=:password";
            }else{
                $teacher = new stdClass();
                $teacher->emp_id = 0;
                $teacher->error=  "Invalid username/password.";
                return $teacher;
            }
            $params = array(':username'=>$username,':password'=>md5($password));
            $query = $this->db->prepare($sql);
            $query->execute($params);
            $teacher = $query->fetch();
            if(empty($teacher)){
                $teacher = new stdClass();
                $teacher->emp_id = 0;
                $teacher->error=  "Invalid username/password.";
                return $teacher;
            }elseif($teacher->status==0){            
                $teacher = new stdClass();
                $teacher->emp_id = 0;
                $teacher->error=  "Your account has been pending for approval.";            
                return $teacher;
            }else if($teacher->status==3){
                $teacher = new stdClass();
                $teacher->emp_id = 0;
                $teacher->error=  "Your account has been blocked.";
                return $teacher;
            }
            return $teacher;
        }


        


        function CheckAuthentication($username,$password){
            $field='';
            if(is_numeric($username)){
                $field = "admin_phone";
            }else{
                $field = "email_id";
            }
            $sql = "SELECT * FROM `mst_employee` WHERE $field=:username AND password=:password";
            $params = array(':username'=>$username,':password'=>md5($password));
            $query = $this->db->prepare($sql);
            $query->execute($params);
            $user = $query->fetch();
            /*echo "<pre>";print_r($user);die();*/
            
            if(empty($user)){
                $user = new stdClass();
                $user->emp_id = 0;
                $user->error=  "Invalid username/password.";
                return $user;
            }elseif($user->admin_status==2){            
                $user = new stdClass();
                $user->emp_id = 0;
                $user->error=  "Your account has been pending for approval.";            
                return $user;
            }else if($user->admin_status==3){
                $user = new stdClass();
                $user->emp_id = 0;
                $user->error=  "Your account has been blocked.";
                return $user;
            }

            return $user;
            /*echo "<pre>";print_r($user);die();*/
        }

        // sending push message to multiple users by firebase registration ids
        function sendMultiple($registration_ids, $message) {
            $fields = array(
                'registration_ids' => $registration_ids,
                'priority'=> "high",
                'data' => $message,
            );
            // echo "<pre>";print_r($fields);die();
            return $this->sendPushNotification($fields);
        }

        // function makes curl request to firebase servers
        function sendPushNotification($fields) {
        
            // Set POST variables
            $url = 'https://fcm.googleapis.com/fcm/send';
        
            $headers = array(
                'Authorization: key=' . FIREBASE_API_KEY,
                'Content-Type: application/json',
            );
            // Open connection
            $ch = curl_init();
        
            // Set the url, number of POST vars, POST data
            curl_setopt($ch, CURLOPT_URL, $url);
        
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
            // Disabling SSL Certificate support temporarly
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
        
            // Execute post
            $result = curl_exec($ch);
            if ($result === FALSE) {
                die('Curl failed: ' . curl_error($ch));
            }
            
            // Close connection
            curl_close($ch);
        
            return $result;
        }

        function getUserDeviceTokens($filter=array()){
            $params = array();
            $sql = "SELECT device_token FROM manage_user WHERE status=1";
            if(!empty($filter)){
                foreach ($filter as $key => $val) {
                    if ($key=="user_ids") {
                        $sql.=" AND `user_id` IN (".$val.")";
                    }else{
                        $sql.=" AND `".$key."`=:".$key;
                        $params[":".$key]=$val;
                    }
                }
            }
            $query = $this->db->prepare($sql);
            if(!empty($params)){
                $query->execute($params);
            }else{
                $query->execute();
            }
            $DeviceTokens = $query->fetchAll(PDO::FETCH_COLUMN);
            return $DeviceTokens;
        }

        /*add edit admin user code start  ruchit 3/11/21*/
        function addEdit_admin_user($data,$admin_id=""){
            $params = array();
            if (empty($admin_id)) {
                $sql="INSERT INTO `admin_user` (";
                $all_data='';
                foreach ($data as $key => $value) {
                    $sql .="`".$key."`,";
                    $all_data .=":".$key.",";
                    $params[':'.$key]=$value;
                }
                $sql=rtrim($sql,",");
                $all_data=rtrim($all_data,",");
                $sql .=") VALUES (".$all_data.")";
            }else{
                $sql="UPDATE `admin_user` SET";
                foreach ($data as $key => $value) {
                    $sql.=" `".$key."`=:".$key.",";
                    $params[':'.$key]=$value;
                }
                $sql =rtrim($sql,",");
                $sql .=" WHERE `admin_id`=:admin_id";
                $params[':admin_id']=$admin_id;
            }
           // print_r($sql);die();
            $query=$this->db->prepare($sql);
            $result = $query->execute($params);
            return $result;
        }
        function get_admin_user($filter=array(),$is_edited=''){
            $params = array();
            extract($filter);
            $sql = "SELECT * FROM `admin_user` WHERE 1";

            if(!empty($filter)){
                foreach ($filter as $key => $val) {
                    $sql.=" AND `".$key."`=:".$key;
                    $params[":".$key]=$val;
                }
            }
            if(!empty($is_edited)){
                $sql.=" AND `admin_id`!=:is_edited";
                $params[":is_edited"]=$is_edited;
            }

            $sql.=" ORDER BY `admin_id` DESC";

            $query = $this->db->prepare($sql);
            if(!empty($params)){
                $query->execute($params);
            }else{
                $query->execute();
            }

            if((isset($admin_id) && !empty($admin_id)) || !empty($is_edited)){
                $adminuser = $query->fetch();
            }else{
                $adminuser = $query->fetchAll();
            }
            return $adminuser;
        }
        function remove_admin_user($filter=array()){
            $params = array();
            $sql = "DELETE FROM `admin_user` WHERE 1";
            if(!empty($filter)){
                foreach ($filter as $key => $val) {
                    $sql.=" AND `".$key."`=:".$key;
                    $params[":".$key]=$val;
                }
            }
            $query = $this->db->prepare($sql);
            if(!empty($params)){
                $query->execute($params);
            }else{
                $query->execute();
            }

            return $query->rowCount();
        }
        /*add edit admin user  end ruchit 3/11/21*/

       
        function getSummary($emp_id='',$pr_id=''){
            $sql = "SELECT 
                (SELECT COUNT(*) FROM `mst_lead` WHERE 1) AS total_lead_count,
                (SELECT COUNT(*) FROM `mst_lead` WHERE 1 AND `status`=1) AS positive_lead_count,
                (SELECT COUNT(*) FROM `mst_lead` WHERE 1 AND `status`=2) AS negative_lead_count,
                (SELECT COUNT(*) FROM `mst_lead` WHERE 1 AND `status`=3) AS confirm_leads_count,
                (SELECT COUNT(*) FROM `mst_leave` WHERE 1 AND `status`=1) AS approve,
                (SELECT COUNT(*) FROM `mst_leave` WHERE 1 AND `status`=2) AS reject,
                (SELECT COUNT(*) FROM `mst_project` WHERE 1 AND `status`=1) AS project_count,
                (SELECT COUNT(*) FROM `mst_project` WHERE 1 AND `status`=2) AS on_going_project_count,
                (SELECT COUNT(*) FROM `trn_project` WHERE 1 AND `assign_to`= '".$emp_id."') AS assign_points,
                (SELECT COUNT(inserted) FROM `trn_project` WHERE inserted =1 AND `pr_id`='".$pr_id."') AS complete,
                (SELECT COUNT(deleted) FROM `trn_project` WHERE deleted =1 AND `pr_id`='".$pr_id."') AS complete1,
                (SELECT COUNT(updated) FROM `trn_project` WHERE updated =1 AND `pr_id`='".$pr_id."') AS complete2,
                (SELECT COUNT(display) FROM `trn_project` WHERE display =1 AND `pr_id`='".$pr_id."') AS complete3,
                (SELECT COUNT(testing) FROM `trn_project` WHERE testing =1 AND `pr_id`='".$pr_id."') AS complete4,
                (SELECT SUM(complete2+complete1+complete+complete3+complete4)) AS total,

                (SELECT COUNT(inserted) FROM `trn_project` WHERE `inserted` =2  AND `pr_id`='".$pr_id."') AS incomplete,
                (SELECT COUNT(deleted) FROM `trn_project` WHERE `deleted` =2  AND `pr_id`='".$pr_id."') AS incomplete1,
                (SELECT COUNT(updated) FROM `trn_project` WHERE `updated` =2  AND `pr_id`='".$pr_id."') AS incomplete2,
                (SELECT COUNT(display) FROM `trn_project` WHERE `display` =2  AND `pr_id`='".$pr_id."') AS incomplete3,
                (SELECT COUNT(testing) FROM `trn_project` WHERE `testing` =2  AND `pr_id`='".$pr_id."') AS incomplete4,
                (SELECT SUM(incomplete2+incomplete1+incomplete+incomplete3+incomplete4)) AS minus,

                (SELECT COUNT(*) FROM `mst_project` WHERE 1 AND `status`=3) AS up_coming_project_count";
                /*echo "<pre>";print_r($total);die();*/
            $query = $this->db->prepare($sql);
            $query->execute();
            //echo "<pre>";print_r($query);die();
            $summary = $query->fetch();
            return $summary;
        }
    
        function getAboutUs(){
            $params=array();
            $sql="SELECT * FROM `about_us` where 1";
            $query=$this->db->prepare($sql);
            $query->execute();
            $result=$query->fetch();
            return $result;
        }

        function addEditAboutUs($data,$page_id=""){
            $params = array();
            if (empty($page_id)) {
                $sql="INSERT INTO `about_us` (";
                $all_data='';
                foreach ($data as $key => $value) {
                    $sql .="`".$key."`,";
                    $all_data .=":".$key.",";
                    $params[':'.$key]=$value;
                }
                $sql=rtrim($sql,",");
                $all_data=rtrim($all_data,",");
                $sql .=") VALUES (".$all_data.")";
            }else{
                $sql="UPDATE `about_us` SET";
                foreach ($data as $key => $value) {
                    $sql.=" `".$key."`=:".$key.",";
                    $params[':'.$key]=$value;
                }
                $sql =rtrim($sql,",");
                $sql .=" WHERE `page_id`=:page_id";
                $params[':page_id']=$page_id;
            }
            $query=$this->db->prepare($sql);
            $result = $query->execute($params);
            return $result;
        }
        
        function getContactUs(){
            $params=array();
            $sql="SELECT * FROM `contact_us` where 1";
            $query=$this->db->prepare($sql);
            $query->execute();
            $result=$query->fetch();
            return $result;
        }
        function updatepassword($emp_id='',$password=''){
            $sql = "UPDATE `mst_employee` SET `password`=:password  WHERE 1 ";
            $params = array(":password"=>$password);
            if(!empty($emp_id)){
               $sql.=" AND `emp_id`=:emp_id ";
               $params[":emp_id"] = $emp_id;
            }
            if(!empty($admin_phone)){
               $sql.=" AND `mobile_no`=:admin_phone ";
               $params[":admin_phone"] = $admin_phone;
            }
            $query = $this->db->prepare($sql);
            $result = $query->execute($params);
            return $result;
        }



        /*add edit admin user code start  ruchit 4/13/21*/
        function addEdit_emp($data,$emp_id=""){
            $params = array();
            if (empty($emp_id)) {
                $sql="INSERT INTO `mst_employee` (";
                $all_data='';
                foreach ($data as $key => $value) {
                    $sql .="`".$key."`,";
                    $all_data .=":".$key.",";
                    $params[':'.$key]=$value;
                }
                $sql=rtrim($sql,",");
                $all_data=rtrim($all_data,",");
                $sql .=") VALUES (".$all_data.")";
            }else{
                $sql="UPDATE `mst_employee` SET";
                foreach ($data as $key => $value) {
                    $sql.=" `".$key."`=:".$key.",";
                    $params[':'.$key]=$value;
                }
                $sql =rtrim($sql,",");
                $sql .=" WHERE `emp_id`=:emp_id";
                $params[':emp_id']=$emp_id;
            }
           // print_r($sql);die();
            $query=$this->db->prepare($sql);
            $result = $query->execute($params);
            return $result;
        }
        function get_business($filter=array(),$is_edited=''){
            $params = array();
            extract($filter);
            $sql = "SELECT * FROM `sellers` WHERE 1";

            if(!empty($filter)){
                foreach ($filter as $key => $val) {
                    $sql.=" AND `".$key."`=:".$key;
                    $params[":".$key]=$val;
                }
            }
            if(!empty($is_edited)){
                $sql.=" AND `id`!=:is_edited";
                $params[":is_edited"]=$is_edited;
            }

            $sql.=" ORDER BY `id` DESC";

            $query = $this->db->prepare($sql);
            if(!empty($params)){
                $query->execute($params);
            }else{
                $query->execute();
            }

            if((isset($id) && !empty($id)) || !empty($is_edited)){
                $adminuser = $query->fetch();
            }else{
                $adminuser = $query->fetchAll();
            }
            return $adminuser;
        }
        function remove_emp($filter=array()){
            $params = array();
            $sql = "DELETE FROM `mst_employee` WHERE 1";
            if(!empty($filter)){
                foreach ($filter as $key => $val) {
                    $sql.=" AND `".$key."`=:".$key;
                    $params[":".$key]=$val;
                }
            }
            $query = $this->db->prepare($sql);
            if(!empty($params)){
                $query->execute($params);
            }else{
                $query->execute();
            }

            return $query->rowCount();
        }
        /*add edit admin user  end ruchit 4/13/21*/



        /*add edit admin user code start  ruchit 4/13/21*/
         function addEdit_role($data,$role_id=""){
            $params = array();
            if (empty($role_id)) {
                $sql="INSERT INTO `user_role` (";
                $all_data='';
                foreach ($data as $key => $value) {
                    $sql .="`".$key."`,";
                    $all_data .=":".$key.",";
                    $params[':'.$key]=$value;
                }
                $sql=rtrim($sql,",");
                $all_data=rtrim($all_data,",");
                $sql .=") VALUES (".$all_data.")";
            }else{
                $sql="UPDATE `user_role` SET";
                foreach ($data as $key => $value) {
                    $sql.=" `".$key."`=:".$key.",";
                    $params[':'.$key]=$value;
                }
                $sql =rtrim($sql,",");
                $sql .=" WHERE `role_id`=:role_id";
                $params[':role_id']=$role_id;
            }
            $query=$this->db->prepare($sql);
            $item = $query->execute($params);
            return $item;
        }
        function get_role($filter=array(),$is_edited=''){
            $params = array();
            extract($filter);
            $sql = "SELECT * FROM `user_roles` WHERE 1";

            if(!empty($filter)){
                foreach ($filter as $key => $val) {
                    $sql.=" AND `".$key."`=:".$key;
                    $params[":".$key]=$val;
                }
            }
            if(!empty($is_edited)){
                $sql.=" AND `role_id`!=:is_edited";
                $params[":is_edited"]=$is_edited;
            }

            /*$sql.=" ORDER BY `role_id` DESC";*/

            $query = $this->db->prepare($sql);
            if(!empty($params)){
                $query->execute($params);
            }else{
                $query->execute();
            }

            if((isset($role_id) && !empty($role_id)) || !empty($is_edited)){
                $adminuser = $query->fetch();
            }else{
                $adminuser = $query->fetchAll();
            }
            return $adminuser;
        }
        function remove_role($filter=array()){
            $params = array();
            $sql = "DELETE FROM `user_roles` WHERE 1";
            if(!empty($filter)){
                foreach ($filter as $key => $val) {
                    $sql.=" AND `".$key."`=:".$key;
                    $params[":".$key]=$val;
                }
            }
            $query = $this->db->prepare($sql);
            if(!empty($params)){
                $query->execute($params);
            }else{
                $query->execute();
            }

            return $query->rowCount();
        }
        /*add edit admin user  end ruchit 4/13/21*/




        /*add edit Product/service code start  ruchit 4/14/21*/
        function addEdit_product($data,$product_id=""){
            $params = array();
            if (empty($product_id)) {
                $sql="INSERT INTO `manage_product` (";
                $all_data='';
                foreach ($data as $key => $value) {
                    $sql .="`".$key."`,";
                    $all_data .=":".$key.",";
                    $params[':'.$key]=$value;
                }
                $sql=rtrim($sql,",");
                $all_data=rtrim($all_data,",");
                $sql .=") VALUES (".$all_data.")";
            }else{
                $sql="UPDATE `manage_product` SET";
                foreach ($data as $key => $value) {
                    $sql.=" `".$key."`=:".$key.",";
                    $params[':'.$key]=$value;
                }
                $sql =rtrim($sql,",");
                $sql .=" WHERE `product_id`=:product_id";
                $params[':product_id']=$product_id;
            }
          /* print_r($sql);die();*/
            $query=$this->db->prepare($sql);
            $result = $query->execute($params);
            return $result;
        }
        function get_product($filter=array(),$is_edited=''){
            $params = array();
            extract($filter);
            $sql = "SELECT * FROM `manage_product` WHERE 1";

            if(!empty($filter)){
                foreach ($filter as $key => $val) {
                    $sql.=" AND `".$key."`=:".$key;
                    $params[":".$key]=$val;
                }
            }
            if(!empty($is_edited)){
                $sql.=" AND `product_id`!=:is_edited";
                $params[":is_edited"]=$is_edited;
            }

            $sql.=" ORDER BY `product_id` DESC";

            $query = $this->db->prepare($sql);
            if(!empty($params)){
                $query->execute($params);
            }else{
                $query->execute();
            }

            if((isset($product_id) && !empty($product_id)) || !empty($is_edited)){
                $adminuser = $query->fetch();
            }else{
                $adminuser = $query->fetchAll();
            }
            return $adminuser;
        }
        function remove_product($filter=array()){
            $params = array();
            $sql = "DELETE FROM `manage_product` WHERE 1";
            if(!empty($filter)){
                foreach ($filter as $key => $val) {
                    $sql.=" AND `".$key."`=:".$key;
                    $params[":".$key]=$val;
                }
            }
            $query = $this->db->prepare($sql);
            if(!empty($params)){
                $query->execute($params);
            }else{
                $query->execute();
            }

            return $query->rowCount();
        }
        /*add edit Product/service  end ruchit 4/14/21*/

        function addEdit_lead($data,$lead_id=""){
            $params = array();
            if (empty($lead_id)){
                $sql="INSERT INTO `mst_lead` (";
                $all_data='';
                foreach ($data as $key => $value) {
                    $sql .="`".$key."`,";
                    $all_data .=":".$key.",";
                    $params[':'.$key]=$value;
                }
                $sql=rtrim($sql,",");
                $all_data=rtrim($all_data,",");
                $sql .=") VALUES (".$all_data.")";
                $query=$this->db->prepare($sql);
                if(!empty($params)){
                    $query->execute($params);
                }else{
                    $query->execute();
                }
                return $this->db->lastInsertId();
            }else{
                $sql="UPDATE `mst_lead` SET";
                foreach ($data as $key => $value) {
                    $sql.=" `".$key."`=:".$key.",";
                    $params[':'.$key]=$value;
                }
                $sql =rtrim($sql,",");
                $sql .=" WHERE `lead_id`=:lead_id";
                $params[':lead_id']=$lead_id;
            }
          /* print_r($sql);die();*/
            /*$query=$this->db->prepare($sql);*/
            $query=$this->db->prepare($sql);
            $item = $query->execute($params);
            return $item;
        }
        function get_lead($filter=array(),$is_edited=''){
            $params = array();
            extract($filter);
            $sql = "SELECT * FROM `mst_lead` WHERE 1";

            if(!empty($filter)){
                foreach ($filter as $key => $val) {
                    $sql.=" AND `".$key."`=:".$key;
                    $params[":".$key]=$val;
                }
            }
            if(!empty($is_edited)){
                $sql.=" AND `lead_id`!=:is_edited";
                $params[":is_edited"]=$is_edited;
            }
            $sql.=" ORDER BY `lead_id` DESC";

            $query = $this->db->prepare($sql);
            if(!empty($params)){
                $query->execute($params);
            }else{
                $query->execute();
            }

            if((isset($lead_id) && !empty($lead_id)) || !empty($is_edited)){
                $adminuser = $query->fetch();
            }else{
                $adminuser = $query->fetchAll();
            }
            return $adminuser;
        }
        function remove_lead($filter=array()){
            $params = array();
            $sql = "DELETE FROM `mst_lead` WHERE 1";
            if(!empty($filter)){
                foreach ($filter as $key => $val) {
                    $sql.=" AND `".$key."`=:".$key;
                    $params[":".$key]=$val;
                }
            }
            $query = $this->db->prepare($sql);
            if(!empty($params)){
                $query->execute($params);
            }else{
                $query->execute();
            }

            return $query->rowCount();
        }

        function addEdit_communication($data,$comunication_id =""){
            $params = array();
            if (empty($comunication_id)){
                $sql="INSERT INTO `mst_comunication` (";
                $all_data='';
                foreach ($data as $key => $value) {
                    $sql .="`".$key."`,";
                    $all_data .=":".$key.",";
                    $params[':'.$key]=$value;
                }
                $sql=rtrim($sql,",");
                $all_data=rtrim($all_data,",");
                $sql .=") VALUES (".$all_data.")";
                $query=$this->db->prepare($sql);
                if(!empty($params)){
                    $query->execute($params);
                }else{
                    $query->execute();
                }
                return $this->db->lastInsertId();
            }else{
                $sql="UPDATE `mst_comunication` SET";
                foreach ($data as $key => $value) {
                    $sql.=" `".$key."`=:".$key.",";
                    $params[':'.$key]=$value;
                }
                $sql =rtrim($sql,",");
                $sql .=" WHERE `comunication_id`=:comunication_id";
                $params[':comunication_id']=$comunication_id;
            }
            $query=$this->db->prepare($sql);
            $item = $query->execute($params);
            return $item;
        }
        function get_communication($filter=array(),$is_edited=''){
            $params = array();
            extract($filter);
            $sql = "SELECT * FROM `mst_comunication` WHERE 1";

            if(!empty($filter)){
                foreach ($filter as $key => $val) {
                    $sql.=" AND `".$key."`=:".$key;
                    $params[":".$key]=$val;
                }
            }
            if(!empty($is_edited)){
                $sql.=" AND `comunication_id`!=:is_edited";
                $params[":is_edited"]=$is_edited;
            }

            $sql.=" ORDER BY `comunication_id` DESC";

            $query = $this->db->prepare($sql);
            if(!empty($params)){
                $query->execute($params);
            }else{
                $query->execute();
            }

            if((isset($comunication_id) && !empty($comunication_id)) || !empty($is_edited)){
                $adminuser = $query->fetch();
            }else{
                $adminuser = $query->fetchAll();
            }
            return $adminuser;
        }
        function remove_communication($filter=array()){
            $params = array();
            $sql = "DELETE FROM `mst_comunication` WHERE 1";
            if(!empty($filter)){
                foreach ($filter as $key => $val) {
                    $sql.=" AND `".$key."`=:".$key;
                    $params[":".$key]=$val;
                }
            }
            $query = $this->db->prepare($sql);
            if(!empty($params)){
                $query->execute($params);
            }else{
                $query->execute();
            }

            return $query->rowCount();
        }

        function addEdit_target($data,$trg_id=""){
            $params = array();
            if (empty($trg_id)) {
                $sql="INSERT INTO `mst_target` (";
                $all_data='';
                foreach ($data as $key => $value) {
                    $sql .="`".$key."`,";
                    $all_data .=":".$key.",";
                    $params[':'.$key]=$value;
                }
                $sql=rtrim($sql,",");
                $all_data=rtrim($all_data,",");
                $sql .=") VALUES (".$all_data.")";
            }else{
                $sql="UPDATE `mst_target` SET";
                foreach ($data as $key => $value) {
                    $sql.=" `".$key."`=:".$key.",";
                    $params[':'.$key]=$value;
                }
                $sql =rtrim($sql,",");
                $sql .=" WHERE `trg_id`=:trg_id";
                $params[':trg_id']=$trg_id;
            }
            $query=$this->db->prepare($sql);
            $item = $query->execute($params);
            return $item;
        }
        function get_target($filter=array(),$is_edited=''){
            $params = array();
            extract($filter);
            $sql = "SELECT * FROM `mst_target` WHERE 1";

            if(!empty($filter)){
                foreach ($filter as $key => $val) {
                    $sql.=" AND `".$key."`=:".$key;
                    $params[":".$key]=$val;
                }
            }
            if(!empty($is_edited)){
                $sql.=" AND `trg_id`!=:is_edited";
                $params[":is_edited"]=$is_edited;
            }

            $sql.=" ORDER BY `trg_id` DESC";

            $query = $this->db->prepare($sql);
            if(!empty($params)){
                $query->execute($params);
            }else{
                $query->execute();
            }

            if((isset($trg_id) && !empty($trg_id)) || !empty($is_edited)){
                $adminuser = $query->fetch();
            }else{
                $adminuser = $query->fetchAll();
            }
            return $adminuser;
        }
        function remove_target($filter=array()){
            $params = array();
            $sql = "DELETE FROM `mst_target` WHERE 1";
            if(!empty($filter)){
                foreach ($filter as $key => $val) {
                    $sql.=" AND `".$key."`=:".$key;
                    $params[":".$key]=$val;
                }
            }
            $query = $this->db->prepare($sql);
            if(!empty($params)){
                $query->execute($params);
            }else{
                $query->execute();
            }

            return $query->rowCount();
        }

        function addEdit_leave($data,$leave_id=""){
            $params = array();
            if (empty($leave_id)) {
                $sql="INSERT INTO `mst_leave` (";
                $all_data='';
                foreach ($data as $key => $value) {
                    $sql .="`".$key."`,";
                    $all_data .=":".$key.",";
                    $params[':'.$key]=$value;
                }
                $sql=rtrim($sql,",");
                $all_data=rtrim($all_data,",");
                $sql .=") VALUES (".$all_data.")";
            }else{
                $sql="UPDATE `mst_leave` SET";
                foreach ($data as $key => $value) {
                    $sql.=" `".$key."`=:".$key.",";
                    $params[':'.$key]=$value;
                }
                $sql =rtrim($sql,",");
                $sql .=" WHERE `leave_id`=:leave_id";
                $params[':leave_id']=$leave_id;
            }
            $query=$this->db->prepare($sql);
            $item = $query->execute($params);
            return $item;
        }
        function get_leave($filter=array(),$is_edited=''){
            $params = array();
            extract($filter);
            $sql = "SELECT * FROM `mst_leave` WHERE 1";

            if(!empty($filter)){
                foreach ($filter as $key => $val) {
                    $sql.=" AND `".$key."`=:".$key;
                    $params[":".$key]=$val;
                }
            }
            if(!empty($is_edited)){
                $sql.=" AND `leave_id`!=:is_edited";
                $params[":is_edited"]=$is_edited;
            }

            $sql.=" ORDER BY `leave_id` DESC";

            $query = $this->db->prepare($sql);
            if(!empty($params)){
                $query->execute($params);
            }else{
                $query->execute();
            }

            if((isset($leave_id) && !empty($leave_id)) || !empty($is_edited)){
                $adminuser = $query->fetch();
            }else{
                $adminuser = $query->fetchAll();
            }
            return $adminuser;
        }
        function remove_leave($filter=array()){
            $params = array();
            $sql = "DELETE FROM `mst_leave` WHERE 1";
            if(!empty($filter)){
                foreach ($filter as $key => $val) {
                    $sql.=" AND `".$key."`=:".$key;
                    $params[":".$key]=$val;
                }
            }
            $query = $this->db->prepare($sql);
            if(!empty($params)){
                $query->execute($params);
            }else{
                $query->execute();
            }

            return $query->rowCount();
        }

        function addEdit_work($data,$entry_id=""){
            $params = array();
            if (empty($entry_id)){
                $sql="INSERT INTO `work_entry` (";
                $all_data='';
                foreach ($data as $key => $value) {
                    $sql .="`".$key."`,";
                    $all_data .=":".$key.",";
                    $params[':'.$key]=$value;
                }
                $sql=rtrim($sql,",");
                $all_data=rtrim($all_data,",");
                $sql .=") VALUES (".$all_data.")";
                $query=$this->db->prepare($sql);
                if(!empty($params)){
                    $query->execute($params);
                }else{
                    $query->execute();
                }
                return $this->db->lastInsertId();
            }else{
                $sql="UPDATE `work_entry` SET";
                foreach ($data as $key => $value) {
                    $sql.=" `".$key."`=:".$key.",";
                    $params[':'.$key]=$value;
                }
                $sql =rtrim($sql,",");
                $sql .=" WHERE `entry_id`=:entry_id";
                $params[':entry_id']=$entry_id;
            }
          /* print_r($sql);die();*/
            /*$query=$this->db->prepare($sql);*/
            $query=$this->db->prepare($sql);
            $item = $query->execute($params);
            return $item;
        }
        function get_work($filter=array(),$is_edited=''){
            $params = array();
            extract($filter);
            $sql = "SELECT * FROM `work_entry` WHERE 1";

            if(!empty($filter)){
                foreach ($filter as $key => $val) {
                    $sql.=" AND `".$key."`=:".$key;
                    $params[":".$key]=$val;
                }
            }
            if(!empty($is_edited)){
                $sql.=" AND `entry_id`!=:is_edited";
                $params[":is_edited"]=$is_edited;
            }

            $sql.=" ORDER BY `entry_id` DESC";

            $query = $this->db->prepare($sql);
            if(!empty($params)){
                $query->execute($params);
            }else{
                $query->execute();
            }

            if((isset($entry_id) && !empty($entry_id)) || !empty($is_edited)){
                $adminuser = $query->fetch();
            }else{
                $adminuser = $query->fetchAll();
            }
            return $adminuser;
        }
        function remove_work($filter=array()){
            $params = array();
            $sql = "DELETE FROM `work_entry` WHERE 1";
            if(!empty($filter)){
                foreach ($filter as $key => $val) {
                    $sql.=" AND `".$key."`=:".$key;
                    $params[":".$key]=$val;
                }
            }
            $query = $this->db->prepare($sql);
            if(!empty($params)){
                $query->execute($params);
            }else{
                $query->execute();
            }

            return $query->rowCount();
        }

        function addEdit_project($data,$pr_id=""){
            $params = array();
            if (empty($pr_id)){
                $sql="INSERT INTO `mst_project` (";
                $all_data='';
                foreach ($data as $key => $value) {
                    $sql .="`".$key."`,";
                    $all_data .=":".$key.",";
                    $params[':'.$key]=$value;
                }
                $sql=rtrim($sql,",");
                $all_data=rtrim($all_data,",");
                $sql .=") VALUES (".$all_data.")";
                $query=$this->db->prepare($sql);
                if(!empty($params)){
                    $query->execute($params);
                }else{
                    $query->execute();
                }
                return $this->db->lastInsertId();
            }else{
                $sql="UPDATE `mst_project` SET";
                foreach ($data as $key => $value) {
                    $sql.=" `".$key."`=:".$key.",";
                    $params[':'.$key]=$value;
                }
                $sql =rtrim($sql,",");
                $sql .=" WHERE `pr_id`=:pr_id";
                $params[':pr_id']=$pr_id;
            }
            $query=$this->db->prepare($sql);
            $item = $query->execute($params);
            return $item;
        }
        function get_project($filter=array(),$is_edited=''){
            $params = array();
            extract($filter);
            $sql = "SELECT * FROM `mst_project` WHERE 1";

            if(!empty($filter)){
                foreach ($filter as $key => $val) {
                    $sql.=" AND `".$key."`=:".$key;
                    $params[":".$key]=$val;
                }
            }
            if(!empty($is_edited)){
                $sql.=" AND `pr_id`!=:is_edited";
                $params[":is_edited"]=$is_edited;
            }

            $sql.=" ORDER BY `pr_id` DESC";

            $query = $this->db->prepare($sql);
            if(!empty($params)){
                $query->execute($params);
            }else{
                $query->execute();
            }

            if((isset($pr_id) && !empty($pr_id)) || !empty($is_edited)){
                $adminuser = $query->fetch();
            }else{
                $adminuser = $query->fetchAll();
            }
            return $adminuser;
        }
        function remove_project($filter=array()){
            $params = array();
            $sql = "DELETE FROM `mst_project` WHERE 1";
            if(!empty($filter)){
                foreach ($filter as $key => $val) {
                    $sql.=" AND `".$key."`=:".$key;
                    $params[":".$key]=$val;
                }
            }
            $query = $this->db->prepare($sql);
            if(!empty($params)){
                $query->execute($params);
            }else{
                $query->execute();
            }

            return $query->rowCount();
        }


       function addEdit_trnproject($data,$trn_pr_id=""){
            $params = array();
            if (empty($trn_pr_id)){
                $sql="INSERT INTO `trn_project` (";
                $all_data='';
                foreach ($data as $key => $value) {
                    $sql .="`".$key."`,";
                    $all_data .=":".$key.",";
                    $params[':'.$key]=$value;
                }
                $sql=rtrim($sql,",");
                $all_data=rtrim($all_data,",");
                $sql .=") VALUES (".$all_data.")";
                $query=$this->db->prepare($sql);
                if(!empty($params)){
                    $query->execute($params);
                }else{
                    $query->execute();
                }
                return $this->db->lastInsertId();
            }else{
                $sql="UPDATE `trn_project` SET";
                foreach ($data as $key => $value) {
                    $sql.=" `".$key."`=:".$key.",";
                    $params[':'.$key]=$value;
                }
                $sql =rtrim($sql,",");
                $sql .=" WHERE `trn_pr_id`=:trn_pr_id";
                $params[':trn_pr_id']=$trn_pr_id;
            }
            $query=$this->db->prepare($sql);
            $item = $query->execute($params);
            return $item;
        }
        function get_trnproject($filter=array(),$is_edited=''){
            $params = array();
            extract($filter);
            $sql = "SELECT * FROM `trn_project` WHERE 1";

            if(!empty($filter)){
                foreach ($filter as $key => $val) {
                    $sql.=" AND `".$key."`=:".$key;
                    $params[":".$key]=$val;
                }
            }
            if(!empty($is_edited)){
                $sql.=" AND `trn_pr_id`!=:is_edited";
                $params[":is_edited"]=$is_edited;
            }

            $sql.=" ORDER BY `trn_pr_id` DESC";

            $query = $this->db->prepare($sql);
            if(!empty($params)){
                $query->execute($params);
            }else{
                $query->execute();
            }

            if((isset($trn_pr_id) && !empty($trn_pr_id)) || !empty($is_edited)){
                $adminuser = $query->fetch();
            }else{
                $adminuser = $query->fetchAll();
            }
            return $adminuser;
        }
        function remove_trnproject($filter=array()){
            $params = array();
            $sql = "DELETE FROM `trn_project` WHERE 1";
            if(!empty($filter)){
                foreach ($filter as $key => $val) {
                    $sql.=" AND `".$key."`=:".$key;
                    $params[":".$key]=$val;
                }
            }
            $query = $this->db->prepare($sql);
            if(!empty($params)){
                $query->execute($params);
            }else{
                $query->execute();
            }

            return $query->rowCount();
        }

        function addEdit_quotation($data,$quo_id=""){
            $params = array();
            if (empty($quo_id)){
                $sql="INSERT INTO `mst_quotation` (";
                $all_data='';
                foreach ($data as $key => $value) {
                    $sql .="`".$key."`,";
                    $all_data .=":".$key.",";
                    $params[':'.$key]=$value;
                }
                $sql=rtrim($sql,",");
                $all_data=rtrim($all_data,",");
                $sql .=") VALUES (".$all_data.")";
                $query=$this->db->prepare($sql);
                if(!empty($params)){
                    $query->execute($params);
                }else{
                    $query->execute();
                }
                return $this->db->lastInsertId();
            }else{
                $sql="UPDATE `mst_quotation` SET";
                foreach ($data as $key => $value) {
                    $sql.=" `".$key."`=:".$key.",";
                    $params[':'.$key]=$value;
                }
                $sql =rtrim($sql,",");
                $sql .=" WHERE `quo_id`=:quo_id";
                $params[':quo_id']=$quo_id;
            }
            //echo $sql."<pre>";print_r($params);die();
            /*$query=$this->db->prepare($sql);*/
            $query=$this->db->prepare($sql);
            if(!empty($params)){
                $item = $query->execute($params);
            }else{
                $item = $query->execute();
            }
            return $item;
        }
        function get_quotation($filter=array(),$is_edited=''){
            $params = array();
            extract($filter);
            $sql = "SELECT * FROM `mst_quotation` WHERE 1";

            if(!empty($filter)){
                foreach ($filter as $key => $val) {
                    $sql.=" AND `".$key."`=:".$key;
                    $params[":".$key]=$val;
                }
            }
            if(!empty($is_edited)){
                $sql.=" AND `quo_id`!=:is_edited";
                $params[":is_edited"]=$is_edited;
            }

            $sql.=" ORDER BY `quo_id` DESC";

            $query = $this->db->prepare($sql);
            if(!empty($params)){
                $query->execute($params);
            }else{
                $query->execute();
            }

            if((isset($quo_id) && !empty($quo_id)) || !empty($is_edited)){
                $adminuser = $query->fetch();
            }else{
                $adminuser = $query->fetchAll();
            }
            return $adminuser;
        }
        function remove_quotation($filter=array()){
            $params = array();
            $sql = "DELETE FROM `mst_quotation` WHERE 1";
            if(!empty($filter)){
                foreach ($filter as $key => $val) {
                    $sql.=" AND `".$key."`=:".$key;
                    $params[":".$key]=$val;
                }
            }
            $query = $this->db->prepare($sql);
            if(!empty($params)){
                $query->execute($params);
            }else{
                $query->execute();
            }

            return $query->rowCount();
        }

        function addEdit_trnquotation($data,$trn_quo_id=""){
            $params = array();
            if (empty($trn_quo_id)){
                $sql="INSERT INTO `trn_quotation` (";
                $all_data='';
                foreach ($data as $key => $value) {
                    $sql .="`".$key."`,";
                    $all_data .=":".$key.",";
                    $params[':'.$key]=$value;
                }
                $sql=rtrim($sql,",");
                $all_data=rtrim($all_data,",");
                $sql .=") VALUES (".$all_data.")";
                $query=$this->db->prepare($sql);
                if(!empty($params)){
                    $query->execute($params);
                }else{
                    $query->execute();
                }
                return $this->db->lastInsertId();
            }else{
                $sql="UPDATE `trn_quotation` SET";
                foreach ($data as $key => $value) {
                    $sql.=" `".$key."`=:".$key.",";
                    $params[':'.$key]=$value;
                }
                $sql =rtrim($sql,",");
                $sql .=" WHERE `trn_quo_id`=:trn_quo_id";
                $params[':trn_quo_id']=$trn_quo_id;
            }
          /* print_r($sql);die();*/
            /*$query=$this->db->prepare($sql);*/
            $query=$this->db->prepare($sql);
            $item = $query->execute($params);
            return $item;
        }
        function get_trnquotation($filter=array(),$is_edited=''){
            $params = array();
            extract($filter);
            $sql = "SELECT * FROM `trn_quotation` WHERE 1";

            if(!empty($filter)){
                foreach ($filter as $key => $val) {
                    $sql.=" AND `".$key."`=:".$key;
                    $params[":".$key]=$val;
                }
            }
            if(!empty($is_edited)){
                $sql.=" AND `trn_quo_id`!=:is_edited";
                $params[":is_edited"]=$is_edited;
            }

            $sql.=" ORDER BY `trn_quo_id` DESC";

            $query = $this->db->prepare($sql);
            if(!empty($params)){
                $query->execute($params);
            }else{
                $query->execute();
            }

            if((isset($trn_quo_id) && !empty($trn_quo_id)) || !empty($is_edited)){
                $adminuser = $query->fetch();
            }else{
                $adminuser = $query->fetchAll();
            }
            return $adminuser;
        }
        function remove_trnquotation($filter=array()){
            $params = array();
            $sql = "DELETE FROM `trn_quotation` WHERE 1";
            if(!empty($filter)){
                foreach ($filter as $key => $val) {
                    $sql.=" AND `".$key."`=:".$key;
                    $params[":".$key]=$val;
                }
            }
            $query = $this->db->prepare($sql);
            if(!empty($params)){
                $query->execute($params);
            }else{
                $query->execute();
            }

            return $query->rowCount();
        }

        function addEdit_invoice($data,$inv_id=""){
            $params = array();
            if (empty($inv_id)){
                $sql="INSERT INTO `mst_invoice` (";
                $all_data='';
                foreach ($data as $key => $value) {
                    $sql .="`".$key."`,";
                    $all_data .=":".$key.",";
                    $params[':'.$key]=$value;
                }
                $sql=rtrim($sql,",");
                $all_data=rtrim($all_data,",");
                $sql .=") VALUES (".$all_data.")";
                $query=$this->db->prepare($sql);
                if(!empty($params)){
                    $query->execute($params);
                }else{
                    $query->execute();
                }
                return $this->db->lastInsertId();
            }else{
                $sql="UPDATE `mst_invoice` SET";
                foreach ($data as $key => $value) {
                    $sql.=" `".$key."`=:".$key.",";
                    $params[':'.$key]=$value;
                }
                $sql =rtrim($sql,",");
                $sql .=" WHERE `inv_id`=:inv_id";
                $params[':inv_id']=$inv_id;
            }
          /* print_r($sql);die();*/
            /*$query=$this->db->prepare($sql);*/
            $query=$this->db->prepare($sql);
            $item = $query->execute($params);
            return $item;
        }
        function get_invoice($filter=array(),$is_edited=''){
            $params = array();
            extract($filter);
            $sql = "SELECT * FROM `mst_invoice` WHERE 1";

            if(!empty($filter)){
                foreach ($filter as $key => $val) {
                    $sql.=" AND `".$key."`=:".$key;
                    $params[":".$key]=$val;
                }
            }
            if(!empty($is_edited)){
                $sql.=" AND `inv_id`!=:is_edited";
                $params[":is_edited"]=$is_edited;
            }

            $sql.=" ORDER BY `inv_id` DESC";

            $query = $this->db->prepare($sql);
            if(!empty($params)){
                $query->execute($params);
            }else{
                $query->execute();
            }

            if((isset($inv_id) && !empty($inv_id)) || !empty($is_edited)){
                $adminuser = $query->fetch();
            }else{
                $adminuser = $query->fetchAll();
            }
            return $adminuser;
        }
        function remove_invoice($filter=array()){
            $params = array();
            $sql = "DELETE FROM `mst_invoice` WHERE 1";
            if(!empty($filter)){
                foreach ($filter as $key => $val) {
                    $sql.=" AND `".$key."`=:".$key;
                    $params[":".$key]=$val;
                }
            }
            $query = $this->db->prepare($sql);
            if(!empty($params)){
                $query->execute($params);
            }else{
                $query->execute();
            }

            return $query->rowCount();
        }

        function addEdit_trninvoice($data,$trn_inv_id=""){
            $params = array();
            if (empty($trn_inv_id)){
                $sql="INSERT INTO `trn_invoice` (";
                $all_data='';
                foreach ($data as $key => $value) {
                    $sql .="`".$key."`,";
                    $all_data .=":".$key.",";
                    $params[':'.$key]=$value;
                }
                $sql=rtrim($sql,",");
                $all_data=rtrim($all_data,",");
                $sql .=") VALUES (".$all_data.")";
                $query=$this->db->prepare($sql);
                if(!empty($params)){
                    $query->execute($params);
                }else{
                    $query->execute();
                }
                return $this->db->lastInsertId();
            }else{
                $sql="UPDATE `trn_invoice` SET";
                foreach ($data as $key => $value) {
                    $sql.=" `".$key."`=:".$key.",";
                    $params[':'.$key]=$value;
                }
                $sql =rtrim($sql,",");
                $sql .=" WHERE `trn_inv_id`=:trn_inv_id";
                $params[':trn_inv_id']=$trn_inv_id;
            }
          /* print_r($sql);die();*/
            /*$query=$this->db->prepare($sql);*/
            $query=$this->db->prepare($sql);
            $item = $query->execute($params);
            return $item;
        }
        function get_trninvoice($filter=array(),$is_edited=''){
            $params = array();
            extract($filter);
            $sql = "SELECT * FROM `trn_invoice` WHERE 1";

            if(!empty($filter)){
                foreach ($filter as $key => $val) {
                    $sql.=" AND `".$key."`=:".$key;
                    $params[":".$key]=$val;
                }
            }
            if(!empty($is_edited)){
                $sql.=" AND `trn_invoice`!=:is_edited";
                $params[":is_edited"]=$is_edited;
            }

            $sql.=" ORDER BY `inv_id` DESC";

            $query = $this->db->prepare($sql);
            if(!empty($params)){
                $query->execute($params);
            }else{
                $query->execute();
            }

            if((isset($trn_inv_id) && !empty($trn_inv_id)) || !empty($is_edited)){
                $adminuser = $query->fetch();
            }else{
                $adminuser = $query->fetchAll();
            }
            return $adminuser;
        }
        function remove_trninvoice($filter=array()){
            $params = array();
            $sql = "DELETE FROM `trn_invoice` WHERE 1";
            if(!empty($filter)){
                foreach ($filter as $key => $val) {
                    $sql.=" AND `".$key."`=:".$key;
                    $params[":".$key]=$val;
                }
            }
            $query = $this->db->prepare($sql);
            if(!empty($params)){
                $query->execute($params);
            }else{
                $query->execute();
            }

            return $query->rowCount();
        }

        /*function addEditRights($data,$right_id=""){
            $params = array();
            if (empty($right_id)) {
                $sql="INSERT INTO `manage_rights` (";
                $all_data='';
                foreach ($data as $key => $value) {
                    $sql .="`".$key."`,";
                    $all_data .=":".$key.",";
                    $params[':'.$key]=$value;
                }
                $sql=rtrim($sql,",");
                $all_data=rtrim($all_data,",");
                $sql .=") VALUES (".$all_data.")";
                echo "<pre>";print_r($sql);die();
            }else{
                $sql="UPDATE `manage_rights` SET";
                foreach ($data as $key => $value) {
                    $sql.=" `".$key."`=:".$key.",";
                    $params[':'.$key]=$value;
                }
                $sql =rtrim($sql,",");
                $sql .=" WHERE `right_id`=:right_id";
                $params[':right_id']=$right_id;
            }
            $query=$this->db->prepare($sql);
            $result = $query->execute($params);
            return $result;
        }*/

        /*function getRights($filter=array(),$is_single=''){
            $params = array();
            extract($filter);
            $sql = "SELECT * FROM `manage_rights` WHERE 1";

            if(!empty($filter)){
                foreach ($filter as $key => $val) {
                    $sql.=" AND `".$key."`=:".$key;
                    $params[":".$key]=$val;
                }
            }
            $query = $this->db->prepare($sql);
            if(!empty($params)){
                $query->execute($params);
            }else{
                $query->execute();
            }

            if((isset($right_id) && !empty($right_id)) || isset($is_single)){
                $rightsData = $query->fetch();
            }else{
                $rightsData = $query->fetchAll();
            }
            return $rightsData;
        }*/

        function addEdit_menu($data,$menu_id=""){
            $params = array();
            if (empty($menu_id)) {
                $sql="INSERT INTO `admin_menu` (";
                $all_data='';
                foreach ($data as $key => $value) {
                    $sql .="`".$key."`,";
                    $all_data .=":".$key.",";
                    $params[':'.$key]=$value;
                }
                $sql=rtrim($sql,",");
                $all_data=rtrim($all_data,",");
                $sql .=") VALUES (".$all_data.")";

                $query=$this->db->prepare($sql);
                $query->execute($params);
                return $this->db->lastInsertId();
            }else{
                $sql="UPDATE `admin_menu` SET";
                foreach ($data as $key => $value) {
                    $sql.=" `".$key."`=:".$key.",";
                    $params[':'.$key]=$value;
                }
                $sql =rtrim($sql,",");
                $sql .=" WHERE `menu_id`=:menu_id";
                $params[':menu_id']=$menu_id;
            }
            $query=$this->db->prepare($sql);
            $result = $query->execute($params);
            return $result;
        }

        function get_menu($filter=array(),$is_single=false){
            $params = array();
            extract($filter);
            $sql = "SELECT * FROM `admin_menu` WHERE 1";

            if(!empty($filter)){
                foreach ($filter as $key => $val) {
                    $sql.=" AND `".$key."`=:".$key;
                    $params[":".$key]=$val;
                }
            }
            $query = $this->db->prepare($sql);
            if(!empty($params)){
                $query->execute($params);
            }else{
                $query->execute();
            }

            if((isset($menu_id) && !empty($menu_id)) || ($is_single)){
                $adminMenu = $query->fetch();
            }else{
                $adminMenu = $query->fetchAll();
            }
            return $adminMenu;
        }

        function addEditRole($data,$role_id=""){
            $params = array();
            if (empty($role_id)) {
                $sql="INSERT INTO `user_roles` (";
                $all_data='';
                foreach ($data as $key => $value) {
                    $sql .="`".$key."`,";
                    $all_data .=":".$key.",";
                    $params[':'.$key]=$value;
                }
                $sql=rtrim($sql,",");
                $all_data=rtrim($all_data,",");
                $sql .=") VALUES (".$all_data.")";
            }else{
                $sql="UPDATE `user_roles` SET";
                foreach ($data as $key => $value) {
                    $sql.=" `".$key."`=:".$key.",";
                    $params[':'.$key]=$value;
                }
                $sql =rtrim($sql,",");
                $sql .=" WHERE `role_id`=:role_id";
                $params[':role_id']=$role_id;
            }
            $query=$this->db->prepare($sql);
            $result = $query->execute($params);
            return $result;
        }

        function getRoles($filter=array(),$is_edited=''){
            $params = array();
            extract($filter);
            $sql = "SELECT * FROM `user_roles` WHERE 1";

            if(!empty($filter)){
                foreach ($filter as $key => $val) {
                    $sql.=" AND `".$key."`=:".$key;
                    $params[":".$key]=$val;
                }
            }
            if(!empty($is_edited)){
                $sql.=" AND `role_id`!=:is_edited";
                $params[":is_edited"]=$is_edited;
            }

            $sql.=" ORDER BY role_id DESC";

            $query = $this->db->prepare($sql);
            if(!empty($params)){
                $query->execute($params);
            }else{
                $query->execute();
            }

            if((isset($role_id) && !empty($role_id)) || !empty($is_edited)){
                $roles = $query->fetch();
            }else{
                $roles = $query->fetchAll();
            }
            return $roles;
        }

        function removeRoles($filter=array()){
            $params = array();
            $sql = "DELETE FROM `user_roles` WHERE 1";
            if(!empty($filter)){
                foreach ($filter as $key => $val) {
                    $sql.=" AND `".$key."`=:".$key;
                    $params[":".$key]=$val;
                }
            }
            $query = $this->db->prepare($sql);
            if(!empty($params)){
                $query->execute($params);
            }else{
                $query->execute();
            }

            return $query->rowCount();
        }

        function getRights($filter=array(),$is_single=''){
            $params = array();
            extract($filter);
            $sql = "SELECT * FROM `manage_rights` WHERE 1";

            if(!empty($filter)){
                foreach ($filter as $key => $val) {
                    $sql.=" AND `".$key."`=:".$key;
                    $params[":".$key]=$val;
                }
            }
            $query = $this->db->prepare($sql);
            if(!empty($params)){
                $query->execute($params);
            }else{
                $query->execute();
            }

            if((isset($right_id) && !empty($right_id)) || isset($is_single)){
                $rightsData = $query->fetch();
            }else{
                $rightsData = $query->fetchAll();
            }
            return $rightsData;
        }

        function addEditRights($data,$right_id=""){
            $params = array();
            if (empty($right_id)) {
                $sql="INSERT INTO `manage_rights` (";
                $all_data='';
                foreach ($data as $key => $value) {
                    $sql .="`".$key."`,";
                    $all_data .=":".$key.",";
                    $params[':'.$key]=$value;
                }
                $sql=rtrim($sql,",");
                $all_data=rtrim($all_data,",");
                $sql .=") VALUES (".$all_data.")";

                $query=$this->db->prepare($sql);
                $query->execute($params);
                return $this->db->lastInsertId();
            }else{
                $sql="UPDATE `manage_rights` SET";
                foreach ($data as $key => $value) {
                    $sql.=" `".$key."`=:".$key.",";
                    $params[':'.$key]=$value;
                }
                $sql =rtrim($sql,",");
                $sql .=" WHERE `right_id`=:right_id";
                $params[':right_id']=$right_id;
            }
            $query=$this->db->prepare($sql);
            $result = $query->execute($params);
            return $result;
        }
    }


?>