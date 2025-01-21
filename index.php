<?php 

    // Output text

    $out = $ans = $txtAmount =																								
																															
																															
																															
    // txtSelectBox1 selection																								
																															
    $selA0 = $selA1 = $selA2 = $selA3 =	$selA4 = $selA5 = $selA6 = $selA7 = $selA8 = $selA9 = $selA10 = $selA11 ="";		

    // txtSelectBox2 selection

    $selB0 = $selB1 = $selB2 = $selB3 = $selB4 = $selB5 = $selB6 = $selB7 = $selB8 = $selB9 = $selB10 = $selB11 ="";				

    // Check if form was submitted

    if(isset($_POST['txtSelectBox1'])) {

        // Get post values

        $txtSel1   = $_POST['txtSelectBox1'];

        $txtSel2   = $_POST['txtSelectBox2'];

        $txtAmount = $_POST['txtAmount'];

        // Exchange rates

        $cur = array("PHP",       "CAD",      "HKD",      "JPY",		"EUR",		"HUF",		"USD",		"CHF",		"KYD",		"GBP",		"GIP",		"JOD",);
							/*PHP*/   /*CAD*/	 /*HKD*/	  /*JPY*/	   /*EUR*/		 /*HUF*/	  /*USD*/		/*CHF*/			/*KYD*/		 /*GBP*/		/*GIP*/		/*JOD*/
		/*PHP*/  $php = array("1",  "0.026219", "0.159988", "2.187584", "0.016424963","6.2035273" ,"0.018032001","0.015760806", "0.014837239","0.014188223","0.01418844", "0.012784489");
		
								/*PHP*/    /*CAD*/	 /*HKD*/	   /*JPY*/	   /*EUR*/		  /*USD*/		/*CHF*/		 /*KYD*/	  /*GBP*/	   /*GIP*/		/*JOD*/
		/*CAD*/  $cad = array("38.148506",  "1",    "6.104467",  "83.556541","0.67055592", "0.73609432", "0.64323986","0.60596651","0.57929929","0.57929929","0.52194882");

								/*PHP*/    /*CAD*/	 /*HKD*/	 /*JPY*/	 /*EUR*/	/*HUF */		 /*USD*/		/*CHF*/		 /*KYD*/	  /*GBP*/	   /*GIP*/		/*JOD*/
		/*HKD*/  $hkd = array("6.250537","0.163831",  "1",    "13.689826","0.11668295","253.4492","0.12811032","0.11194322","0.10564404","0.10080104","0.10080104","0.090831227");

								/*PHP*/      /*CAD*/	 /*HKD*/ /*JPY*/   /*EUR*/	     /*HUF*/			/*USD*/		/*CHF*/		   /*KYD*/	      /*GBP*/	     /*GIP*/		/*JOD*/
		/*JPY*/  $jpy = array("0.45631",   "0.011967", "0.07302",  "1","0.0061880335","2.3378927","0.006794951","0.0059362759","0.0056027076","0.0053454419","0.0053454419","0.0048179185");

								/*PHP*/        /*CAD*/	    /*HKD*/        /*JPY*/   /*EUR*/	/*HUF*/     /*USD*/	     /*CHF*/		/*KYD*/	    /*GBP*/	     /*GIP*/	  /*JOD*/
		/*EUR*/  $eur = array("60.896919",   "1.4917607", "8.5718348",  "161.65951",  "1",	  "378.14274","1.0981902", "0.95934987","0.90416409","0.86378442","0.86378442","0.7786952");

								/*PHP*/           /*CAD*/	     /*HKD*/         /*JPY*/   	   /*EUR*/	 	/*HUF*/		/*USD*/	  	  /*CHF*/		  /*KYD*/	    /*GBP*/	     	/*GIP*/	  	  /*JOD*/
		/*HUF*/  $huf = array("0.16101422",   "0.0039439997", "0.022664833",  "0.42743207","0.0026438182",	 "1",	"0.0029041558","0.0025361571","0.0023890565","0.0022835357","0.0022835146","0.0020588644");

								/*PHP*/         /*CAD*/	     /*HKD*/       /*JPY*/   	/*EUR*/	 	/*HUF*/		/*USD*/	  	  /*CHF*/	  /*KYD*/	    /*GBP*/	     /*GIP*/   /*JOD*/
		/*USD*/  $usd = array("55.452321",   "1.3580926", "7.8054462",  "147.20429","0.91038681","344.35042",    "1",     "0.87323729","0.82378693","0.78625387","0.78625387","0.709");

								/*PHP*/         /*CAD*/	     /*HKD*/      /*JPY*/   /*EUR*/	 	/*HUF*/		/*USD*/	  	  /*CHF*/	  /*KYD*/	   /*GBP*/	   /*GIP*/      /*JOD*/
		/*CHF*/  $chf = array("63.507557",   "1.5552136", "8.9392158",  "168.57","1.0425293","394.24087","1.1452228",	   "1",	  "0.94183357","0.90064028","0.90064028","0.81204049");

								/*PHP*/         /*CAD*/	     /*HKD*/       /*JPY*/     /*EUR*/	   /*HUF*/	   /*USD*/	   /*CHF*/	  /*KYD*/	   /*GBP*/	   /*GIP*/      /*JOD*/
		/*KYD*/  $kyd = array("67.271412",   "1.6472365", "9.4644786",  "178.43508","1.1036439","417.35326","1.2125436","1.0593116",    "1",   "0.95421713","0.95378552","0.86022927");

								/*PHP*/         /*CAD*/	     /*HKD*/       /*JPY*/     /*EUR*/	   /*HUF*/	   /*USD*/	   /*CHF*/	   /*KYD*/	   /*GBP*/	   /*GIP*/      /*JOD*/
		/*GBP*/  $gbp = array("70.536593",   "1.7271269", "9.9313117",  "187.20371", "1.157775", "437.81401","1.2724468","1.1101715","1.0471181",    "1",       "1",     "0.90213163");

								/*PHP*/         /*CAD*/	     /*HKD*/       /*JPY*/     /*EUR*/	   /*HUF*/	   /*USD*/	   /*CHF*/	   /*KYD*/	   /*GBP*/	   /*GIP*/      /*JOD*/
		/*GIP*/  $gip = array("70.561355",   "1.7271463", "9.9320337",  "187.2234", "1.1576766", "437.77549", "1.2726084", "1.1101653", "1.0493942",     "1",         "1",    "0.90231183");

								/*PHP*/         /*CAD*/	     /*HKD*/      /*JPY*/     /*EUR*/	   /*HUF*/	   /*USD*/	   /*CHF*/	   /*KYD*/	   /*GBP*/	   /*GIP*/      /*JOD*/
		/*JOD*/  $jod = array("78.214847",   "1.9142922", "11.00883",  "207.47314","1.2829687", "485.15433", "1.4104372","1.2302703","1.1623646","1.1083974","1.1083974",    '1');

        switch ($txtSel1) {

            case "php":

                $selA0 = ${"selB".$txtSel2} = "selected";

                $ans   = $txtAmount * floatval($php[$txtSel2]);

                $case  = 0; 

                break;

            case "cad":

                $selA1 = ${"selB".$txtSel2} = "selected";

                $ans   = $txtAmount * floatval($cad[$txtSel2]);

                $case  = 1; 

                break;

            case "hkd":

                $selA2 = ${"selB".$txtSel2} = "selected";

                $ans   = $txtAmount * floatval($hkd[$txtSel2]);

                $case  = 2; 

                break;

            case "jpy":

                $selA3 = ${"selB".$txtSel2} = "selected";

                $ans   = $txtAmount * floatval($jpy[$txtSel2]);

                $case  = 3; 

                break;

			case "eur":

				$selA4 = ${"selB".$txtSel2} = "selected";
	
				$ans   = $txtAmount * floatval($eur[$txtSel2]);

				$case  = 4; 

				break;

			case "huf":

				$selA5 = ${"selB".$txtSel2} = "selected";
		
				$ans   = $txtAmount * floatval($huf[$txtSel2]);
	
				$case  = 5; 
		
				break;

			case "usd":

				$selA6 = ${"selB".$txtSel2} = "selected";
	
				$ans   = $txtAmount * floatval($usd[$txtSel2]);
	
				$case  = 6; 
	
				break;

			case "chf":

				$selA7 = ${"selB".$txtSel2} = "selected";
	
				$ans   = $txtAmount * floatval($chf[$txtSel2]);
	
				$case  = 7; 
	
				break;

			case "kyd":

				$selA8 = ${"selB".$txtSel2} = "selected";
		
				$ans   = $txtAmount * floatval($kyd[$txtSel2]);
		
				$case  = 8; 
		
				break;

			case "gbp":

				$selA9 = ${"selB".$txtSel2} = "selected";
			
				$ans   = $txtAmount * floatval($gbp[$txtSel2]);
			
				$case  = 9; 
			
				break;
				
			case "gip":

				$selA10 = ${"selB".$txtSel2} = "selected";
				
				$ans   = $txtAmount * floatval($gip[$txtSel2]);
				
				$case  = 10; 
				
				break;

			case "jod":

				$selA11 = ${"selB".$txtSel2} = "selected";
					
				$ans   = $txtAmount * floatval($jod[$txtSel2]);
					
				$case  = 11; 
					
				break;

        }

        $out = '<div class="answer">'.$txtAmount.' '.$cur[$case].' = '.$ans.' '.$cur[$txtSel2].'</div>';

    }

?>

<!DOCTYPE html>

<html lang="en">

    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="widthe=device-width,initial-scale=1.0">

        <title>Valutavaltó (ütöképes)</title>

        <link rel="stylesheet" href="style.css">


		<style>
        body {
            
            margin: 0px;
            padding: 0px;
            width: 100%;
            height: 100vh;
            background-image: url(hatter.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }

        h1 {
            text-align: center;
            color: white; /* Fehér szöveg */
            padding-top: 40vh; /* Margin a felső részhez */
        }

        /* Más stílus a logónak */
        .currency-logo {
			position: absolute;
            top: 1%;
            left: 40%;
            transform: translate(-50%, -50%);
            width: 120px;
            height: 70px;
            background-color: #1e3256; /* Zöldes árnyalat */
            color: #FFFFFF; /* Fehér szöveg */
            border-radius: 10px;
            font-size: 48px;
            font-weight: bold;
            text-transform: uppercase;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            transform: rotate(0deg);
        }
		/*Diaggram beállitásai*/
		.exchange-widget-container {
            width: 178px;
            margin: 0;
            padding: 0;
            border: 1px solid #2D6AB4;
            background: #e6f2fa;
            text-align: center;
            transform: translate(80%, 120%);
        
            width: 200px;
            height: 240px;
            left: 0;
        }

        .exchange-widget-header {
            width: 174px;
            text-align: center;
            margin: 2px auto;
            padding: 2px 0px;
            background: #2D6AB4;
            font-family: Arial, sans-serif;
            font-size: 11px;
            color: #ffffff;
            font-weight: bold;
        }

        .exchange-widget-link {
            color: #ffffff;
            text-decoration: none;
            text-transform: uppercase;
        }
 
    </style>

    </head>

    <body>
    
    <div class="glass"></div>

	<iframe src="https://fxpricing.com/fx-widget/ticker-tape-widget.php?id=1,2,3,5,14,20,882&border=show&speed=50&click_target=blank&theme=dark&tm-cr=212529&hr-cr=FFFFFF13&by-cr=28A745&sl-cr=DC3545&flags=circle&d_mode=compact-name&column=ask,bid,spread&lang=en&font=Arial, sans-serif" width="100%" height="60" style="border: unset;"></iframe><div id="fx-pricing-widget-copyright"></style> 

		<div class="rounded-box"></div> 

		<div class="exchange-widget-container">
        <div class="exchange-widget-header">
            <a class="exchange-widget-link" rel="nofollow" href="https://www.exchangerates.org.uk/Pounds-to-Euros-currency-conversion-page.html" target="_new" title="GBP EUR">GBP EUR</a> CHARTS
        </div>
        <div style="padding: 2px;">
            <script type="text/javascript">
                var dcf = 'GBP';
                var dct = 'EUR';
                var mcol = '2D6AB4';
                var mbg = 'e6f2fa';
                var tc = 'ffffff';
                var tz = 'userset';
            </script>
            <script type="text/javascript" src="https://www.currency.me.uk/remote/ER-CHART-1.php"></script>
        </div>
    </div>

		<main>

            <div class="container">

                <div class="title">
				<div class="currency-logo">💱</div>
                </div>

                <div class="container-wrapper">

                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="frmSelect" name="frm">

                        <div class="selectWrapper">

                            <select class="txtSelectBox" name="txtSelectBox1" id="txtSelectBox1">

                                <option value="php" <?php echo $selA0; ?>>Philippine Peso (PHP)</option>

                                <option value="cad" <?php echo $selA1; ?>>Canadian Dollar (CAD)</option>

                                <option value="hkd" <?php echo $selA2; ?>>Hong Kong Dollar (HKD)</option>

                                <option value="jpy" <?php echo $selA3; ?>>Japanese Yen (JPY)</option>
								
								<option value="eur" <?php echo $selA4; ?>>Euro (EUR)</option>

								<option value="huf" <?php echo $selA5; ?>>Hungarian Forint (HUF)</option>

								<option value="usd" <?php echo $selA6; ?>>US Dollars (USD)</option>

								<option value="chf" <?php echo $selA7; ?>>Swiss Francs (CHF)</option>

								<option value="kyd" <?php echo $selA8; ?>>Caymanian Dollars (KYD)</option>

								<option value="gbp" <?php echo $selA9; ?>>British Pounds (GBP)</option>

								<option value="gip" <?php echo $selA10; ?>>Gibraltar Pounds (GIP)</option>

								<option value="jod" <?php echo $selA11; ?>>Jordanian Dinars (JOD)</option>

                            </select>

							<select class="txtSelectBox" name="txtSelectBox2" id="txtSelectBox2">
    							<option value="0" <?php echo $selB0; ?>>Philippine Peso (PHP)</option>

								<option value="1" <?php echo $selB1; ?>>Canadian Dollar (CAD)</option>

								<option value="2" <?php echo $selB2; ?>>Hong Kong Dollar (HKD)</option>

								<option value="3" <?php echo $selB3; ?>>Japanese Yen (JPY)</option>

								<option value="4" <?php echo $selB4; ?>>Euro (EUR)</option>

								<option value="5" <?php echo $selB5; ?>>Hungarian Forint (HUF)</option>

								<option value="6" <?php echo $selB6; ?>>US Dollars (USD)</option>

								<option value="7" <?php echo $selB7; ?>>Swiss Francs (CHF)</option>

								<option value="8" <?php echo $selB8; ?>>Caymanian Dollars (KYD)</option>

								<option value="9" <?php echo $selB9; ?>>British Pounds (GBP)</option>

								<option value="10" <?php echo $selB10; ?>>Gibraltar Pounds (GIP)</option>

								<option value="11" <?php echo $selB11; ?>>Jordanian Dinars (JOD)</option>
	
							</select>			

                        </div>

                        <input type="number" class="txtbox" name="txtAmount" id="txtAmount" value="<?php echo $txtAmount; ?>" placeholder="Input Amount" required>

                        <div class="btnWrapper">

                            <a href="index.php" class="btn btnReset" name="btnReset">Reset</a>

                            <button type="submit" class="btn btnConvert" name="btnConvert">Convert</button>

                        </div>

                        <?php echo $out; ?>
                    </form>
                </div>
            </div>
        </main>
    </body>
</html>
