<?php
// bagian yang dieksekusi ketika pengunjung submit nama
if (isset($_POST['submit'])){
    // mengeset cookie username dari namanya, lama cookie 3 bulan
    setcookie("username", $_POST['username'], time()+3*30*24*3600,"/");
    header("Location:Bilangan Random.php");
}
// jika sudah ada cookie username
if (isset($_COOKIE['username'])){  
    // tampilkan nama user, baca dari cookie
    echo "<p>Hallo " .$_COOKIE['username'].", nama saya Mr. PHP. Saya telah memilih secara random sebuah bilangan bulat. Silakan Anda menebak ya!</p>";
    session_start();
        if(!isset($_POST['num'])){
            $_POST['bil']=rand(0,100);
        }else if($_POST['num']<$_POST['bil']){
            echo "Waaah… masih salah ya, bilangan tebakan Anda terlalu rendah.";
        }else if($_POST['num']>$_POST['bil']){
            echo "Waaah… masih salah ya, bilangan tebakan Anda terlalu tinggi.";
        }else if($_POST['num']==$_POST['bil']){
            echo "Selamat ya… Anda benar, saya telah memilih bilangan ".$_POST['num'];
            echo "<br>";
            echo "<a href='Bilangan Random.php'>Ulangi lagi</a>";
        }
    session_destroy();
?>
    <form method="POST" action="">
        <input type="text" name="num">
        <input type="hidden" name="bil" value="<?php echo $_POST['bil'];?>">
        <input type="submit" name="ok" value="Submit">
    </form>

<?php
} else {
    // jika cookie username belum ada, munculkan form
?>
    <h1>Selamat Datang di Game Tebak Angka</h1>
    <p>Ini kunjungan Anda pertama kali di situs ini ya?</p>
    <p>Kita kenalan dulu ya, silakan masukkan nama Anda</p>
    <form method="post" action="Bilangan Random.php">
        Nama Anda <input type="text" name="username">
        <input type="submit" name="submit" value="Submit">
    </form> 
<?php   
    }
?>