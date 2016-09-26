<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>RSA ŞİFRELEME</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-image : url('http://wallpoper.com/images/00/41/83/93/keyboards-keys_00418393.jpg') ;
                background-repeat: no-repeat;
                background-size: cover;
                color: #636b6f;
          
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

        th, td {
    padding: 7px;
    font-style: bold;
    text-align: center;
}
        

      </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
        
                    <div class="content">
                <div class="title m-b-md" >
                    <font color="CCFF33" style="background : #333333">
                  
                  <body>


<div class="flex-center position-ref full-height" style="color:#ffffff;margin:60px">

<form action="" method="post">

<table class="table table-bordered" border='2'>
<tr>
<th><font style="background:#000000"> Şifrelenecek Metin: </th>
 <th><textarea id="plaintext" style=" width:200px; height: 150px"></textarea> </th></tr>

<tr><th><font style="background:#000000"> p değeri :</th> 

<th><input type="text" id="pvalue" style=" width:200px" ></th></tr>
<tr><th><font style="background:#000000">  q değeri:</th>
 <th><input type="text" id="qvalue" style=" width:200px"></th></tr>
<tr><th><font style="background:#000000"> e değeri : </th>
<th><input type="text" id="evalue"  style=" width:200px"> </th> </tr>
</table>
<br><br>
 <input type="button" value=" E sayısı Uygunluk Kontrolü" style="background:#000000; color:#ffffff; width:180px; height: 30px "  onclick="control()">
 <br><br><br>
 <input type="button" value=" Şifrele " style="background:#000000; color:#ffffff; width:180px; height: 50px ; margin-left:100px" onclick="rsaencryption()" />
</form>
</div>


</div>

                
                  
            </div>
        </div>

</div>
</body>

</html>
<script src="http://peterolson.github.com/BigInteger.js/BigInteger.min.js"></script>
<script type="text/javascript" >


function rsaencryption(){

var ptext= document.getElementById('plaintext').value;
var acsiikod= new Array();
var cst=new Array();
var c = new Array();
var i;
var p1= document.getElementById('pvalue').value;
var q1= document.getElementById('qvalue').value;
var e1= document.getElementById('evalue').value;
var n=(p1)*(q1);

for(i=0; i<ptext.length;i++)
{       if(ptext.charAt(i)=='a') { acsiikod[i]=1;}
        if(ptext.charAt(i)=='b') { acsiikod[i]=2; }
        if(ptext.charAt(i)=='c') { acsiikod[i]=3; }
        if(ptext.charAt(i)=='ç') { acsiikod[i]=4; }
        if(ptext.charAt(i)=='d') { acsiikod[i]=5; }
        if(ptext.charAt(i)=='e') { acsiikod[i]=6; }
        if(ptext.charAt(i)=='f') { acsiikod[i]=7; }
        if(ptext.charAt(i)=='g') { acsiikod[i]=8; }
        if(ptext.charAt(i)=='ğ') { acsiikod[i]=9; }
        if(ptext.charAt(i)=='h') { acsiikod[i]=10; }
        if(ptext.charAt(i)=='ı') { acsiikod[i]=11; }
        if(ptext.charAt(i)=='i') { acsiikod[i]=12; }
        if(ptext.charAt(i)=='j') { acsiikod[i]=13; }
        if(ptext.charAt(i)=='k') { acsiikod[i]=14; }
        if(ptext.charAt(i)=='l') { acsiikod[i]=15; }
        if(ptext.charAt(i)=='m') { acsiikod[i]=16; }
        if(ptext.charAt(i)=='n') { acsiikod[i]=17; }
        if(ptext.charAt(i)=='o') { acsiikod[i]=18; }
        if(ptext.charAt(i)=='ö') { acsiikod[i]=19; }
        if(ptext.charAt(i)=='p') { acsiikod[i]=20; }
        if(ptext.charAt(i)=='r') { acsiikod[i]=21; }
        if(ptext.charAt(i)=='s') { acsiikod[i]=22; }
        if(ptext.charAt(i)=='ş') { acsiikod[i]=23; }
        if(ptext.charAt(i)=='t') { acsiikod[i]=24; }
        if(ptext.charAt(i)=='u') { acsiikod[i]=25; }
        if(ptext.charAt(i)=='ü') { acsiikod[i]=26; }
        if(ptext.charAt(i)=='v') { acsiikod[i]=27; }
        if(ptext.charAt(i)=='y') { acsiikod[i]=28; }
        if(ptext.charAt(i)=='z') { acsiikod[i]=29; }
        if(ptext.charAt(i)=='w') { acsiikod[i]=30; }
        if(ptext.charAt(i)=='q') { acsiikod[i]=31; }
       
   
  c[i]= (bingInt(acsiikod).pow(e1))% n;
  
}
alert("Girilen metnin şifreli hali : \n " + c);
}

</script>
 <script type="text/javascript">
     
function control(){

var p1= document.getElementById('pvalue').value;
var q1= document.getElementById('qvalue').value;
var e1= document.getElementById('evalue').value;
var i;
var bsay;
var qn=(p1-1)*(q1-1);
var ekok=Math.sqrt(e1);

bsay=0;

for(i=2;i<ekok;i++)
{

    if( (qn % i == 0) && (e1 % i == 0)){
    
      bsay++;
    }
}

if(bsay==0)
{
    alert(" e,Qn obebi 1 olup kullanılabilirdir.");
}
else{

    alert(" e,Qn değeri 1 den farklıdır.Lütfen farklı bir e sayısı seçiniz");
}
}


 </script>
