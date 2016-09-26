<!DOCTYPE html>
<html>
<head>
    <title>RSA DEŞİFRELEME</title>
    <script src="http://peterolson.github.com/BigInteger.js/BigInteger.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

<body>
<style>
    html, body {
                background-image : url('http://wallpoper.com/images/00/41/83/93/keyboards-keys_00418393.jpg');
                background-repeat: no-repeat;
                background-size: cover;
                color: #636b6f;
                font-weight: 100;
                height: 100vh;
                margin: 150;
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
<th><font style="background:#000000"> Şifreli Metin: </th>
 <th><textarea id="ciphertext" style=" width:200px; height: 150px" placeholder="Lütfen Şifreli Dizi Elemanlarını Aralarında virgül ile yazınız."></textarea> </th></tr>

<tr><th><font style="background:#000000"> p değeri :</th> 

<th><input type="text" id="pvaluee" style=" width:200px" ></th></tr>
<tr><th><font style="background:#000000">  q değeri:</th>
 <th><input type="text" id="qvaluee" style=" width:200px"></th></tr>
<tr><th><font style="background:#000000"> e değeri : </th>
<th><input type="text" id="evaluee"  style=" width:200px"> </th> </tr>
</table>
 <br><br><br>
 <input type="button" value=" Deşifrele " style="background:#000000; color:#ffffff; width:180px; height: 50px ; margin-left:100px" onclick="rsadecryption()" />
</form>
</div>


</div>

                
                  
            </div>
        </div>

</div>
</body>

</div>
</body>

</html>
<script type="text/javascript">
    
function rsadecryption(){
var ctext= document.getElementById('ciphertext').value;
var p1= document.getElementById('pvaluee').value;
var q1= document.getElementById('qvaluee').value;
var e1= document.getElementById('evaluee').value;
var n=(p1)*(q1);
var qn=(p1-1)*(q1-1);
var say=0;
var d=1;
var plaintext= new Array();
var c= new Array();
var m= new Array();
var nuz=n.toString().length;
var i;
var esasmetin="";
while(say!=1)
{
  say=(e1*d) % qn;

  d=++d;
}

d=d-1;


c = ctext.split(",");

for(i=0;i<c.length;i++){

    plaintext[i]=(bigInt(c[i].pow(e1)) % n;

        if( plaintext[i]==1){ m[i]='a';} 
        if( plaintext[i]==2){ m[i]='b';}
        if( plaintext[i]==3){ m[i]='c';}
        if( plaintext[i]==4){ m[i]='ç';}
        if( plaintext[i]==5){ m[i]='d';}
        if( plaintext[i]==6){ m[i]='e';}
        if( plaintext[i]==7){ m[i]='f';}
        if( plaintext[i]==8){ m[i]='g';}
        if( plaintext[i]==9){ m[i]='ğ';}
        if( plaintext[i]==10){ m[i]='h';}
        if( plaintext[i]==11){ m[i]='ı';} 
        if( plaintext[i]==12){ m[i]='i';} 
        if( plaintext[i]==13){ m[i]='j';} 
        if( plaintext[i]==14){ m[i]='k';} 
        if( plaintext[i]==15){ m[i]='l';} 
        if( plaintext[i]==16){ m[i]='m';} 
        if( plaintext[i]==17){ m[i]='n';} 
        if( plaintext[i]==18){ m[i]='o';} 
        if( plaintext[i]==19){ m[i]='ö';} 
        if( plaintext[i]==20){ m[i]='p';} 
        if( plaintext[i]==21){ m[i]='r';} 
        if( plaintext[i]==22){ m[i]='s';} 
        if( plaintext[i]==23){ m[i]='ş';} 
        if( plaintext[i]==24){ m[i]='t';} 
        if( plaintext[i]==25){ m[i]='u';} 
        if( plaintext[i]==26){ m[i]='ü';} 
        if( plaintext[i]==27){ m[i]='v';} 
        if( plaintext[i]==28){ m[i]='y';} 
        if( plaintext[i]==29){ m[i]='z';} 
        if( plaintext[i]==30){ m[i]='w';} 
        if( plaintext[i]==31){ m[i]='q';} 
    

esasmetin= esasmetin+m[i];
}


alert("Metin Deşifre edildi :)  \n Sonuç : \n "  + esasmetin);
}
      
</script>
