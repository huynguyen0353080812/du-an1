<?php
    require_once('mvc/Model/database.php'); 
    require_once('mvc/Model/Base.php'); 

    class CustomController{
        public function index()
        {
            $customer = new Base();
            $result = $customer->all('manage_user');
            require_once("mvc/view/admin/component/user/list_user.php");
        }
        public function edit()
        {
            $id = $_GET['id'];
            $customer = new Base();
            $result = $customer->find('manage_user',$id);
            require_once("mvc/view/admin/component/user/EditCustom.php");
        }
        public function insert()
        {
            include ('mvc/view/admin/component/user/created_user.php');
        }
        public function created_user()
        {
            extract($_POST);
            $file = $_FILES['image'];
            if ($file['size'] > 0) {
                $avatar = $file['name'];
                move_uploaded_file($file['tmp_name'],"public/img/".$avatar);
            }else{
                $avatar = "";
            }
            // die;
            $password = password_hash($Password,PASSWORD_DEFAULT);
            $customer = new Base();
            $result = $customer->insert('manage_user',["user_name='$user_name',number_phone='$number_phone',email = '$Email',password = '$password',image='$avatar',status='$status',role='$vai_tro'"]);
            return header('location:list_user?messeger');
        }
        public function update_acount()
        {
            extract($_POST);
            $file = $_FILES['image'];
            if ($file['size'] > 0) {
                $avatar = $file['name'];
                move_uploaded_file($file['tmp_name'],"public/img/".$avatar);
            }else{
                $avatar = $cu;
            }
            $id = $id ;
            $customer = new Base();
            $result1 = $customer->find('manage_user',$id);
            if ($Password == '') {
                $password = $result1['password'];
            }else {
                $password = password_hash($Password,PASSWORD_DEFAULT);
            }
            $result = $customer->update('manage_user',["user_name='$user_name',number_phone='$number_phone',email = '$Email',password = '$password',image='$avatar',status='$status',role='$vai_tro'"],$id);
            return header('location:list_user?messeger');
        }
        public function Unset()
        {
            $id = $_GET['id'];
            $customer = new Base();
            $result = $customer->delete('manage_user',$id);
            return header('location:list_user');
        }
        public function update_user_status()
        {
            $time = time()+10;
            $customer = new Base();
            $id =  $_SESSION['user_name']['id'];
            $sql = $customer->update('manage_user',["last_login = '$time'"],$id);
        }
        public function show_user_status()
        {
            $customer = new Base();
            $result = $customer->all('manage_user');
            $timestamep = time();
            foreach ($result as $row){
                if ($row['last_login']>$timestamep) {
                    $status = 'green';
                }else {
                    $status = 'red';
                }
                if ($row['role']==1) {
                    echo $vai_tro = 'quản trị viên';
                }else {
                    echo $vai_tro = 'khách hàng';
                } 
                echo '<tr>
                    <td>1</td>
                    <td>'.$row['email'].'</td>
                    <td>
                        <div class="user" style = "margin-left:60px">
                            <img src="http://localhost:81/Duanmau/public/img/'.$row['image'].'" class="user_image">
                        </div>
                    </td>
                    <td>
                    <i class="fa fa-circle" aria-hidden="true" style = "color:'.$status.'"></i>
                    </td>
                    <td>
                        '.$row['status'].'
                    </td>
                    <td>
                        '.$vai_tro.'
                    </td>
                    <td><a href="delete_custom?id='.$row['id'].'"><button class="bnt_delete">xóa</button></a></td>
                    <td><a href="edit_custom?id='.$row['id'].'"><button class="bnt_edit">sửa</button></a></td>
                </tr>';
            }
        }
    }