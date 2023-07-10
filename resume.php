<!DOCTYPE html>
<head>
    <title></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <script src="s.js"></script>
    </head>
    <table>
        <button onclick="changeColor()" style="height: 20%;">change background color</button>
   
    <tr>
      
        <th ><a href="#">نام</a></th>
        <td><?= $_POST['name'] ?></td>
    </tr>
    <tr>
      
        <th ><a href="#">جنسیت</a></th>
        <td><?= $_POST['gender'] ?></td>
    </tr>
    <tr>
        <th ><a href="#">تاریخ تولد</a></th>
        <td><?= $_POST['birthday'] ?></td>
    </tr>  
    <tr>
        <th><a href="#">شماره همراه</a></th>
        <td><?= $_POST['phone'] ?></td>
    </tr>
    <tr>
        <th><a href="#">وضعیت</a></th>
        <td><?= $_POST['Condition'] ?></td>

    </tr>
    <tr>
        <th><a href="#">نشانی</a></th>
        <td><?= $_POST['address'] ?></td>
    </tr>
    <tr>
        <th><a href="#">تحصیلات</a></th>
        <td><?= $_POST['tahsilat'] ?></td>
       
    </tr>   
    <tr>
        <th ><a href="#">ایمیل</a></th>
        <td><?= $_POST['email'] ?></td>
      
    </tr>    
    <tr>
        <th><a href="#">درباره</a></th>
        <td><?= $_POST['info'] ?></td>
    </tr>   
 
    <tr>
        <th><a href="#">پروفایل</a></th>
        

        
  <td><img src="<?php  ?>" alt="" sizes="20%" ></td>
        
    </tr>   
</table>
</html>