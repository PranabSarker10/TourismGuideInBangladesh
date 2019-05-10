    
<html>
<body>

<?php
    $url = $_POST["searchbox"];
    $url = strtolower( $url );
    switch($url) {
        case "dhaka":
        case "dacca":    
        case "daka":
        case "dakka":
        case "daha":
        case "dakha":
        case "dha":
            header( "Location: Dhakaoffline.php" );
            break;
            
        case "rajshahi":
        case "rajsahi":
        case "rajsai":
        case "rassai":
        case "raj":
        case "ragshahi":
        case "ragsahi":
        case "ragsai":
        case "ragssai":
        case "rag":
        case "razshahi":
        case "razsahi":
        case "razsai":
        case "razssai":
        case "raz":
            header( "Location: Rajshahioffline.php" );
            break;
            
        case "mymensingh":
        case "momisingh":
        case "mymisingh":
        case "mamisingh":
        case "momising":
        case "mymising":
        case "mamising":
        case "mominsing":
        case "myminsing":
        case "maminsing":
        case "mominsingh":
        case "myminsingh":
        case "maminsingh":
        case "mym":
            header( "Location: Mymensinghoffline.php" );
            break;
            
        case "rangpur":
        case "ranpur":
        case "ranhur":
        case "rngpur":
        case "rnpur":
        case "rnhur":
        case "rongpur":
        case "ronpur":
        case "rangfur":
        case "ranfur":
        case "ranfur":
        case "rngfur":
        case "rnfur":
        case "rnfur":
        case "rongfur":
        case "ronfur":
        case "ronhur":
            header( "Location: Rangpuroffline.php" );
            break;
        
        case "sylhet":    
        case "sylet":
        case "selet":
        case "sehlet":
        case "sihlet":
        case "selhet":
        case "silhet":
        case "silet":
        case "slet":
        case "silt":
        case "syl":
        case "syt":
        case "syhlet":
        case "syt":            
            header( "Location: Sylhetoffline.php" );
            break;    
            
        case "barisal":    
        case "barishal":
        case "borishal":
        case "borisal":
        case "brisal":
        case "brishal":
        case "birsal":
        case "birshal":
        case "bairshal":
        case "bairshal":
        case "boirshal":
        case "boirshal":
        case "br":
        case "bar":
            header( "Location: Barisaloffline.php" );
            break;    
            
        case "khulna":    
        case "kulna":
        case "klna":
        case "khu":
            header( "Location: Khulnaoffline.php" );
            break;    
            
        case "chittagong":    
        case "chittagang":
        case "chittageng":
        case "cittagong":    
        case "cittagang":
        case "cittageng":
        case "chitagong":    
        case "chitagang":
        case "chitageng":
        case "citagong":    
        case "citagang":
        case "citageng":
        case "chittagonj":    
        case "chittaganj":
        case "chittagenj":
        case "cittagonj":    
        case "cittaganj":
        case "cittagenj":
        case "chitagonj":    
        case "chitaganj":
        case "chitagenj":
        case "citagonj":    
        case "citaganj":
        case "citagenj":
        case "chottogram":    
        case "chottogram":
        case "chottogram":
        case "cottogram":    
        case "cottogram":
        case "cottogram":
        case "chotogram":    
        case "chotogram":
        case "chotogram":
        case "cotogram":    
        case "cotogram":
        case "cotogram":    
        case "ctg":
            header( "Location: Chittagongoffline.php" );
            break;    
        
        default:
            echo "Check your pronunciation";
            echo "<br>";
            echo "<a href='index.php'>HOME</a>";
            break;
    }
?>

</body>
</html>