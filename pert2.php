<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
                  background: linear-gradient(to right,#0a0a00,#b3b310);
                  text-align: center;
            }
        p{
                color:rgb(0, 0, 0);
                background-color: white;
                text-shadow: 3px 2px 5px rgb(252, 235, 3);
            }
        .container{
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
        }
        fieldset{
            margin-left: 28rem;
            margin-top: 5rem;
            align-items: center;
            width: 25rem;
            background-color: rgb(13, 14, 13);
        }
        h1{
            text-align: center;
        }
        #hasile{
            background-color:white;
            margin-top: 1rem;
            margin-left: 0rem;
            display: none;
            color: black;
            text-shadow: 2px 2px 5px rgb(243, 207, 4);
            width:25rem;
        }
        label{
            font-size: 1.2rem;
            color: white;
            text-shadow: 2px 2px 5px rgb(243, 207, 4);
        }
        legend{
            font-size: 0.7rem;
            color: white;
            text-shadow: 2px 2px 5px rgb(243, 207, 4);
            border-radius: 50% ;
            background-color: rgb(13, 14, 13);
            width: 10rem;
            align-items: center;
            justify-content: center;
        }
        .contain1{
            width: 11rem;
            text-align: right; 
            display: grid;
            grid-template-rows: 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
        }
        .contain2{
            width: 14rem;
            display: grid;
            grid-template-rows: 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
        }
    </style>
</head>
<body>
    <fieldset>
        <legend><h1>Data Diri</h1></legend>
        <p>Disini saya akan mulai dengan mengisis data diri saya sendiri</p>
        <form  id="form">
            <div class="container">
                <div class="contain1">
                    <div> <label for="name">Nama Lengkap :</label></div>
                    <div><label for="NIM">NIM :</label></div>
                    <div><label for="TB">Tinggi Badan :</label></div>
                    <div><label for="BB">Berat Badan :</label></div>
                    <div><label for="panggil1">Panggilan pertama :</label></div>
                    <div><label for="panggil2">Panggilan kedua :</label></div>
                    <div><label for="panggil3">Panggilan ketiga :</label></div>
                </div>
                <div class="contain2">
                    <div class="satu">
                        <input type="text" id="name"></p>
                    </div>
                    <div class="dua">
                        <input type="text" id="NIM"></p>
                    </div>
                    <div class="tiga">
                        <input type="text" id="TB"></p>
                    </div>
                    <div class="empat">
                        <input type="text" id="BB"></p>
                    </div>
                    <div class="lima">
                        <input type="text" id="panggil1"></p>
                    </div>
                    <div class="enam">
                        <input type="text" id="panggil2"></p>
                    </div>
                    <div class="tujuh">
                        <input type="text" id="panggil3"></p>
                    </div>
                </div>
            </div>
            <input type="submit" value="SAVE" onclick="CheckForm()" id="save"><br>
            <div id="hasile">
                <p>berikut hasil pendataan diri saya:</p>
                <?php
                    $nama="Soni Indra Maulana";
                    echo("Nama : ".$nama."<br>");
                    $nim=210411100136;
                    echo("Nim : ");
                    echo("<br>".var_dump($nim));
                    $tb=160.5;
                    $bb=60.5;
                    echo("Tinggi Badan : ");
                    echo("<br>");
                    echo(var_dump($tb));
                    echo("<br>");
                    echo("Berat Badan : ");
                    echo("<br>");
                    echo(var_dump($bb));
                    echo("<br>");
                    $p=array("Soni","Indra","Catot");
                    $panggil=count($p);
                    echo("Berikut panggilan yang biasa saya terima");
                    for ($i=0; $i <$panggil ; $i++) { 
                        print("<br>panggilan ke ".$i." : $p[$i]<br>");
                    }
                ?>
            </div>
        </form>
    </fieldset>
    <script>
        const form = document.getElementById("form");
        const nama = document.getElementById("name");
        const nim= document.getElementById("NIM");
        const Tb=document.getElementById("TB");
        const Bb=document.getElementById("BB");
        const p1=document.getElementById("panggil1");
        const p2= document.getElementById("panggil2");
        const p3= document.getElementById("panggil3");
        form.addEventListener("submit",e=>{e.preventDefault();
        CheckForm(nama,nim,Tb,Bb,p1,p2,p3);})
        function CheckForm(nama,nim,Tb,Bb,p1,p2,p3){
            var namavalue=nama.value;
            var nimvalue=nim.value;
            var Tbvalue=Tb.value;
            var Bbvalue=Bb.value;
            var p1value=p1.value;
            var p2value=p2.value;
            var p3value=p3.value;
            if((namavalue!="")&&(nimvalue!="")&&(Tbvalue!="")&&(Bbvalue!="")&&(p1value!="")&&(p2value!="")&&(p3value!="")){
                var hasil=document.getElementById("hasile");
                hasil.style.display="block";
            }
        }
    </script>
</body>
</html>