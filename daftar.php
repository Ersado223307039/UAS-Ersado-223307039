<!DOCTYPE html>
<html lang="en-ID">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>...::Pendaftaran Online::...</title>
    
    
    <style>
        body{
            margin: 0;
            padding: 0;
            background: url(img/bg.png);
            background-size: cover;
            font-family: cursive;
        }
        img{
            width: 20%;
        }
        .FormLogin{
            position: absolute;
            top: 53%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 350px;
            height: 680px;
            padding: 80px 40px;
            border: 1px solid #fff;
            border-radius: 20px;
            box-sizing: border-box;
            background: rgba(119, 137, 197, 0.42);
            margin-bottom: 25px;
        }
        .profile{
            width: 100px;
            height: 100px;
            border: 3px solid  #efed40;
            border-radius: 50%;
            overflow: hidden;
            position: absolute;
            top: calc(-100px/2);
            left: calc(50% - 50px);
        }
        h2{
            margin: 0;
            padding: 0 0 20px;
            color: #efed40;
            text-align: center;
        }
        .FormLogin p{
            margin: 0;
            padding: 0;
            font-weight: bold;
            color: #fff;
        }
        .FormLogin input{
            width: 100%;
            margin-bottom: 10px;
        }
        .FormLogin input[type="text"],[type="date"],[type="email"]
        {
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
            outline: none;
            height: 40px;
            color: #fff;
            font-size: 16px;
        }
       
        textarea{
            width: 270px;
            height: 40px;
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
            outline: none;
            color: #fff;
            font-size: 16px;
            margin-bottom: 20px;
        }
        
        
        ::placeholder{
            color: rgba(255,255,255,.5);
        }
        
        .FormLogin input[type="submit"]{
            border: none;
            outline: none;
            height: 30px;
            color: #fff;
            font-size: 16px;
            background: #0692CD;
            cursor: pointer;
            border-radius: 10px;
            text-align: center;
        }
        .FormLogin input[type="submit"]:hover
        {
            background: #1b71fc;
            color: #fff;
        }
        
        
        @media(max-width: 580px) {
        
        .FormLogin{
            position: absolute;
            top: 60%;
            transform: translate(-50%,-50%);
            width: 250px;
            height: 720px;
            padding: 80px 40px;
            border-radius: 20px;
            box-sizing: border-box;
            margin-bottom: 25px;
        }
        .FormLogin h4 {
           margin-left: 10px;
           margin-right: 10px;
           margin-bottom: -10px;

        } 

        
        textarea{
            width: 180px;
        }
            
        }
       
    </style>
</head>

<body>
    <div class="FormLogin">
        <img src="img/profile1.png" class="profile">

        <h2>Form Pendaftaran </h2>
        <form  action="proses_pendaftaran.php" method="POST">
            <p>Nomor Ujian</p>
            <input type="text" name="nomor" id="nomor" >

            <p>Nama</p>
            <input type="text"  name="nama" id="nama">

            <p>Tanggal Lahir</p>
            <input type="date" name="tgl_lahir" id="tgl_lahir" >

            <p>Email</p>
            <input type="email" name="email" id="email">

            <p>Address</p>
            <textarea  name="alamat" id="alamat"> </textarea>
            
            <input type="submit" name="inputpendaftaran" value="Send">

            <h4>sudah mendaftar?
                    <a href="view.php">lihat data</a>
                </h4>
            
                
            </div>

        </form>
    </div>
</body>

</html>