<html >

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<body>
<style>
    html, body {
                background-image : url('http://wallpapercave.com/wp/zZq9RsU.jpg');
                background-repeat: no-repeat;
                background-size: cover;
                color: #ffffff;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

 .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            
        



</style>
</head>
 <body>

<form action="" method="post">

	

<b><br>BİLGİLERİNİZ</br></b>

<hr width="300" align="left">

	

Ad Soyad<font color="#a80000">*</font> : <input type="text" name="kim" style=" height: 40; margin-top: 15; margin-left: 25;">

<br>

Mail Adresi <font color="#a80000">*</font> : <input type="email" name="mail" style=" height: 40; margin-top: 15 ; margin-left: 6;">		



<br></br>

    

 Mesaj Konusu:  <textarea name="konu" style=" width:172; height: 80; margin-left: 8;" ></textarea>	



<br> </br>

<b>Mesajınız : <font color="#a80000">*</font> </b>

 <hr width="350" align="left"> 

 

 <textarea  name="mesaj" style=" width:350; height:200;" ></textarea>	

 <br></br>
<input type="hidden" name="_token" value="{{ csrf_token() }}">
 <font color="#a80000">*</font>  <font style="font-size: 0.7em">'lı yerler gereklidir.</font>

 <br></br>
<input type="submit" name="mesajgönder" value="Mesajı Gönder" style="background: no-repeat; font-style: inherit; color:#ffffff; font-size:0.8em; width:150; height:50; margin-left: 30;"  >

 



</form>
</html>

