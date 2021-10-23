<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <main>
        <header>
            sklep - księgarnia
        </header>
     <nav>     
            <?php
                include("menu.txt");
            ?>         
     </nav>
        <section>
            <h1>koszyk</h1>
            <?php
            session_start();
                if(isset($_GET['p-1'])){
                    // p-nr - ilosc
                    // c-nr - cena 
                    // generowanie koszyka
                   // var_dump($_GET);
                    $_SESSION['koszyk']=array("ksiazki"=>array());
                    $nr=0;
                    for($i=1;$i<=10;$i++){
                        $ile='p-'.$i;
                        $nrautor='a-'.$i;
                        $nrtytul='t-'.$i;
                        $nrcena='c-'.$i;
                        if((int)$_GET[$ile]>0){
                           // echo "autor $_GET[$nrautor] tyt $_GET[$nrtytul] <br>";
$_SESSION['koszyk']['ksiazki'][$nr]['autor']=$_GET[$nrautor];
$_SESSION['koszyk']['ksiazki'][$nr]['tytul']=$_GET[$nrtytul];
$_SESSION['koszyk']['ksiazki'][$nr]['cena']=$_GET[$nrcena];
$_SESSION['koszyk']['ksiazki'][$nr]['ilosc']=$_GET[$ile];
$nr++;
                        }
                    }
                foreach($_SESSION['koszyk'] as $produkty){
                    //var_dump($produkty);
                    foreach($produkty as $produkt){
                        //var_dump($produkt);
                        echo "$produkt[autor] $produkt[tytul] $produkt[cena] ilosc sztuk - $produkt[ilosc]";
                        echo "<br><br>";
                    }           
                }         
                }
                else {
                    // wyświetlanie koszyka
                    foreach($_SESSION['koszyk'] as $produkty){
                        //var_dump($produkty);
                        foreach($produkty as $produkt){
                            //var_dump($produkt);
                            echo "$produkt[autor] $produkt[tytul] $produkt[cena] ilosc sztuk - $produkt[ilosc]";
                            echo "<br><br>";
                        }     
                }   
                }
               // var_dump($_SESSION['koszyk']);  
            ?>
        </section>
    </main>
</body>
</html>
