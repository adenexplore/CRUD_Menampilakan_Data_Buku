
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
</head>
<body>
   <div class="proses">
      
	<h1>Halaman Login</h1>
      
        <br>
       <form action="aksilogin.php" method="post"> 
        <table >      
           <tr>
               <td>Username</td>
               <td>:</td>
               <td><input type="text" name="username"  style="width:200px;"></td>
           </tr>
           <tr>
               <td>Password</td>
               <td>:</td>
               <td><input type="password" name="password" style="width:200px;"></td>
           </tr>
             </table>
           <br>
            <table class="kedua"> 
           <tr>
            <td></td>
            <td></td>
               <td><button name="login">Login</button></td>
           </tr>
           </table> 
       </form>
        <style type="text/css">
        body{
  background: #1690A7;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  flex-direction: column;
}


.proses {
  width: 500px;
  border: 2px solid #ccc;
  padding: 30px;
  background: #fff;
  border-radius: 15px;
}



input {
  display: block;
  border: 2px solid #ccc;
  width: 95%;
  padding: 10px;
  margin: 10px auto;
  border-radius: 5px;
}


button {
  margin-left:10vh;
  float: right;
  background: #555;
  padding: 10px 15px;
  color: #fff;
  border-radius: 5px;
  margin-right: 10px;
  border: none;
}
button:hover{
  opacity: .7;
}

h1 {
  text-align: center;
  color: black;
}


    </style>
  </div>
</body>
</html>
