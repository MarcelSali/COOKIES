<?php
                if(isset($_POST['submit'])){
                    $noInduk = $_POST["pesan"];
                    $nama = $_POST["pesan1"];
                    $status = $_POST["kerja"];                    
                    $minats = $_POST["minat"];
                    $suka = "";
                        foreach($minats as $kesukaan){
                             $suka.= $kesukaan .",";                        
                        }
                // var_dump($suka);
                // var_dump($noInduk);
                // var_dump($nama);
                // var_dump($status);
                // var_dump($minats);
                    setcookie("NoInduk","$noInduk");                
                    setcookie("Nama","$nama");
                    setcookie("Status",$status);
                    setcookie("Minat",$suka);
                echo "<h1>PENDAFTARAN BERHASIL</h1>";
                exit();
                }
                if(isset($_COOKIE['NoInduk']) && isset($_COOKIE['Nama']) && isset($_COOKIE['Status']) && isset($_COOKIE['Minat'])){
                    header("Location: TampilkanPeserta.php");
                }

  ?>

<html>
    <head>
        <title>Pendaftaran</title>
        <h1>PENDAFTARAN PESERTA WEBINAR</h1>
    </head>
    <body>        
        <form action="" method="POST">
            <pre>No Induk <input type="text" name="pesan" value=""/></pre>
            <pre>Nama     <input type="text" name="pesan1" value=""/></pre>
            <pre>Status   <input style="margin-left: 0px;" type="radio" name="kerja" value="Dosen">Dosen</pre>
                          <pre><input style="margin-left: 66px;" type="radio" name="kerja" value="Database">Database</pre>  
            <pre>Minat    <input style="margin-left: 0px;" type="checkbox" name="minat[]" value="Programming">Programming</pre>
                          <pre><input style="margin-left: 66px;" type="checkbox" name="minat[]" value="Database">Database</pre>
                          <pre><input style="margin-left: 66px;" type="checkbox" name="minat[]" value="Networking">Networking</pre>
                          <pre><input style="margin-left: 66px;" type="checkbox" name="minat[]" value="Multimedia">Multimedia</pre>
            <input style="margin-left: 66px;" type="submit" name="submit" value="Daftar">
    
            </form>
        </body>
</html>