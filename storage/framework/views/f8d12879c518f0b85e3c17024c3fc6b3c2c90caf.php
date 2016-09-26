<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="utf-8" >
	<title>RSA HAKKINDA</title>
</head>
<body>
<style>
            html, body {
                
                background-image : url('http://wallpoper.com/images/00/41/83/93/keyboards-keys_00418393.jpg');
                background-repeat: no-repeat;
                background-size: cover;
                color: #ffffff;
                padding: 15px;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
}
        

      </style>

<div>
<div style="background:#000000"> 
 <h2> RSA ŞİFRELEME NEDİR ?</h2>  
<p>Bir açık anahtarlı şifreleme yöntemi olan RSA, 1977 yılında Ron Rives, Adi Shamir ve Leonard Aldeman tarafından bulunmuştur. Şifreleme yönteminin adı da bu üç kişinin soy isimlerinin baş harflerinden oluşur.</p>

<p>Çalışması:</p>

<p>Yeterince büyük iki adet asal sayı seçilir: Bu sayılar örneğimizde p ve q olsunlar.
n=pq hesaplanır. Buradaki n sayısı iki asal sayının çarpımıdır ve hem umumî hem de hususî şifreler için taban (modulus) olarak kabul eder.</p>
<p> Totient fonksiyonu hesaplanır. Bu örnek için çarpanların ikisi de asal sayı olduğu için φ(n) = (p-1)(q-1) olarak bulunur.
Hesaplanan totient fonksiyonu değeri (φ(n) ) ile aralarında asal olan öyle bir e sayısı alınır ki 1 < e < φ(n) olmalıdır. Bu seçilen e sayısı umumî anahtar olarak ilan edilebilir.
d gibi bir sayı hesaplanır ki bu sayı için şu denklik geçerli olmalıdır : de ≡ 1 mod ( φ(n) ). Bu d değeri hususî şifre olarak saklanır. Bu sayının hesaplanması sırasında uzatılmış öklit (extended euclid) algoritmasından faydalanılır.
Yukarıdaki şifreleme yönteminin en önemli dez avantajlarından birisi büyük asal sayılar bulmak aşamasında ortaya çıkar. Bilindiği üzere ele alınan bir sayının asal olup olmadığını bulmak kolay bir işlem değildir. Bunun için fermat teoreminden yararlanılabilir.</p>

<h3>Şifreleme işlemi:</h3>

Şifreleme işlemi için Alice kendi umumî şifresi olan (n,e) ikilisini yayınlar. Bu şifreyi alan Bob aşağıdaki şekilde mesajını şifreler:

<b>c = me mod n </b>

Burada m, şifrelenecek olan açık metin, e ve n ise Alice tarafından yayınlanan umumî şifredir.

Şifrenin Açılması:

Alice, Bob tarafından yollanmış olan mesajın açılması sırasında aşağıdaki formülü kullanır:

<b> m = cd mod n </b>

Burada açılacak olan şifrelenmiş metin c, Alice’in hususî şifresi ise d ile gösterilmiştir. n ise taban değeri olan modulus’tur.

Örnek:

İki asal sayı seçilir
p = 61 ve q = 53

n değeri hesaplanır n = pq şeklinde
n = 61 * 53 = 3233

Totient fonksiyonu hesaplanır

φ(n) = (p-1)(q-1)

φ(n) = (61-1)(53-1) = 3120

totient fonksiyon sonucu ile aralarında asal olan ve 1 den büyük bir sayı seçilir
e > 1 => e = 17 (3120 ile aralarında asal) , bu sayı aynı zamanda umumî şifredir.

Hususî şifre olması için bir d sayısı seçilir:
de ≡ 1 mod(n) olacak şekilde d sayısı bulunur , d = 2753 (çünkü 17 * 2753 = 46801 = 1 + 15 * 3120 ) Bu sayının hesaplanması sırasında uzatılmış öklit (extended euclid) yöntemi kullanılmıştır.

Örneğin mesaj olarak 123 gönderilecek olsun:
12317 mod 3233 = 855 olarak şifreli metin bulunur.

açacak taraf için tersi işlem uygulanır:
8552753 mod 3233 = 123 şeklinde orjinal mesaj geri elde edilir.

</div>
</div>
</body>
</html>