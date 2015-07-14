<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html class="js" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Tienda Luz</title>
    <link rel="shortcut icon" href="images/puntoluz.ico">
	<link rel="stylesheet" href="css/jquery-ui.css">
	<link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="css/font-kit.css">
    <link rel="stylesheet" href="css/style.css">        
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>
    <script type="text/javascript" src="js/webfont.js"></script>
   	<link rel="stylesheet" type="text/css" href="css/style2.css">
</head>

<body id="residential" class="newtype compact-header">                               
<div id="content">
<div id="wrap">        
                

<div id="header">
	<div class="logo"><img src="images/logo2.png"></div>

    <div class="header-holder">
        <h1 class="header-logo">TiendaLuz.com</h1>

        <ul id="header-nav">
            <li>REGALOS EMPRESARIALES</li>
            <li>PARA EL HOGAR</li>
            <li>ARTICULOS ESPECIALES</li>
        </ul>
        <div class="header-box">
            <ul class="side-menu">
                <li>111-222-3456</li>
            </ul>
            <ul class="links">
                <li>
                    <a href="mailto:tiendaluz.com@gmail.com" title="Email tiendaluz.com@gmail.com">tiendaluz.com@gmail.com</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div id="copy" class="wrap-fullwidth">
                    
   	<div id="residential-form">
   		<div>
   			<div>
   				<h1 style="color:white; text-shadow: 1px 1px black;">EL TOQUE PERFECTO</h1>
   				<p style="color:black; text-shadow: 1px 1px white;">
   					Pasi&oacute;n por el Dise&ntilde;o<br>
   					Todo lo que necesitás, en un solo lugar.
   				</p>
   				<p style="color:black; text-shadow: 1px 1px white;">
   					Solicita nuestro catalogo de productos, y 
   					<br>comentanos acerca de lo que estas buscando
   				<p>
   			</div>
   			<form action="consulta.php" class="flat white vertical corporate-lead-form" method="POST" action="/no-form" id="">
   				<label for="name">Nombre</label>
   				<input name="name" id="name" required="required" type="text">
   				<label for="phone">Tel&eacute;fono</label>
   				<input name="phone" id="phone" required="required" type="tel">
   				<label for="email">Email</label>
   				<input name="email" id="email" required="required" type="email">
   				<label for="location">Ciudad</label>
   				<input name="email" id="email" required="required" type="email">
   				<label for="comments">Comentarios</label>
   				<textarea name="comments" id="comments" rows="2" cols="20" required="required"></textarea>
   				<input name="submit" id="submit" value="Enviar" type="submit">
   			</form>
   		</div>
   	</div>

 	<div class="fullwidth-content">
 		<h2 style="text-align: center; margin-bottom: 0px;">OFERTAS ESPECIALES - PROMOCION LANZAMIENTO</h2>
 		<p style="text-align: center;">Oferta exclusiva por tiempo limitado comprando &uacute;nicamente a trav&eacute;s de nuestra web</p>

 		<div class="values-unit" id="values-unit-1">
 			<div>
	 			<h3 class="num">1</h3>
	 			<h4>LAMPARA COLGANTE<br>MDF DOMO</h4>
	 			<img src="images/lampara_domo.jpg" width="250">
	 			<p>&euro; 39.90</p>
	 			<p>
	 				<font class="cantidad-label">Cantidad:</font>
	 				<br><input name="lamp1" id="lamp1" type="text" value="0" class="input-cantidad" onChange="calcularPrecio();">
	 			</p>
 			</div>
 		</div>
 		<div class="values-unit" id="values-unit-2">
 			<div>
	 			<h3 class="num">2</h3>
	 			<h4>LAMPARA DE MESA<br>SOHO</h4>
	 			<img src="images/lampara_soho.jpg" width="250">
	 			<p>&euro; 39.90</p>
	 			<p>
	 				<font class="cantidad-label">Cantidad:</font>
	 				<br><input name="lamp2" id="lamp2" type="text" value="0" class="input-cantidad" onChange="calcularPrecio();">
	 			</p>
 			</div>
 		</div>
 		<div class="values-unit" id="values-unit-3">
 			<div>
	 			<h3 class="num">3</h3>
	 			<h4>LAMPARA DE PARED<br>ASTRID</h4>
	 			<img src="images/lampara_astrid.jpg" width="250">
	 			<p>&euro; 39.90</p>
	 			<p>
	 				<font class="cantidad-label">Cantidad:</font>
	 				<br><input name="lamp3" id="lamp3" type="text" value="0" class="input-cantidad" onChange="calcularPrecio();">
	 			</p>
	 		</div>
 		</div>
 	</div>

 	<div class="beige-bg" id="residential-photos" style="text-align:center;">
		<img src="images/compra_segura_2.png" style="position: absolute; float: right; right: 0px; margin-top: -150px;">
		<img src="images/calidad_2.png" style="position: absolute; float: left; left: 0px; margin-top: -80px;">

<!-- 		<style>	 table tr { border: 1px solid black;} </style>-->
 		<h2 style="text-align: center; margin-bottom: 0px;">TU PEDIDO</h2>

 		<form method="post" class="flat white vertical corporate-lead-form" action="compra.php" style="width: 100%;">
		<input type="hidden" name="monto" id="monto" value="">
		<input type="hidden" name="mdf_domo" id="mdf_domo" value="">
		<input type="hidden" name="mesa_soho" id="mesa_soho" value="">
		<input type="hidden" name="pared_astrid" id="pared_astrid" value="">

 		<table border=0 style="width: 100%; overflow: auto; clear: none;">
 		<tr><td width="50%" style="text-align:center;">
 			<table border=0 style="width: 90%; border: 0px;">
   				<tr><td>
   					<h4>LAMPARA COLGANTE MDF DOMO</h4>
   				</td><td>
   					<div id="total1">&euro; 0.00</div>
   				</td></tr>
   				<tr><td>
   					<h4>LAMPARA DE MESA SOHO</h4>
   				</td><td>
   					<div id="total2">&euro; 0.00</div>
   				</td></tr>
   				<tr><td>
   					<h4>LAMPARA DE PARED ASTRID</h4>
   				</td><td>
   					<div id="total3">&euro; 0.00</div>
   				</td></tr>
   				<tr><td>
   					<h4 style="color:#900;">EMPAQUETADO Y ENVIO</h4>
   				</td><td>
   					<div id="total3">&euro; 19.90</div>
   				</td></tr>
   				<tr><td>
   					<h4><b>TOTAL</b></h4>
   				</td><td>
   					<div id="totaltotal" style="font-weight:bold;">&euro; 0.00</div>
   				</td></tr>
   			</table>
   			<img src="images/ssl_100.png" style="margin: 0px; padding: 0px; float: right;">
   			<img src="images/tarjetas_300.png" align="center" style="margin: 15px 10px; padding: 0px; float: right;">
 		</td><td width="50%" style="text-align: left;">
 			<table border=0 style="width: 100%; border: 0px;">
 			<tr><td style="vertical-align: middle;">
				<label style="display: inline; color: black; text-align: left;">Total a Pagar</label>
			</td><td>
 				<div id="totaltotal2" style="font-weight:bold;">&euro; 0.00</div>
 			</td></tr>
 			<tr><td style="vertical-align: middle;">
				<label style="display: inline; color: black; text-align: left;">Nombre</label>
			</td><td>
 				<input name="cc_name" id="cc_name" required="required" type="text" style="width:250px; border: 1px solid #999;">
 			</td></tr>
 			<tr><td style="vertical-align: middle;">
				<label style="display: inline; color: black; text-align: left;">N&uacute;mero de Tarjeta</label>
			</td><td>
 				<input name="cc_number" id="cc_number" required="required" type="text" style="width:250px; border: 1px solid #999;">
 			</td></tr>
 			<tr><td style="vertical-align: middle;">
				<label style="display: inline; color: black; text-align: left;">Fecha de Vencimiento</label>
			</td><td>
 				<select name="cc_exp_month" id="cc_exp_month" required="required" type="text" style="width:50px; border: 1px solid #999; background-color: white; display: inline;">
 				<option value=""></option>
 				<?php for ($i=1; $i<=12; $i++) { if ($ii < 10) { $ii = '0'.$i; } else { $ii = $i; } ?>
 					<option value="<?=$ii?>"><?=$ii?></option>
 				<?php } ?>
 				</select>
 				<select name="cc_exp_year" id="cc_exp_year" required="required" type="text" style="width:100px; border: 1px solid #999; background-color: white; display: inline;">
 				<option value=""></option>
 				<?php for ($i=date('Y'); $i<=date('Y')+10; $i++) { ?>
 					<option value="<?=$i?>"><?=$i?></option>
 				<?php } ?>
 				</select>
 			</td></tr>
 			<tr><td style="vertical-align: middle;">
				<label style="display: inline; color: black; text-align: left;">CCV 
					<a href="#" style="margin-left:2px;" onclick="window.open('images/cvv2codes_4ccs.png','CVV','width=178,height=223,resizable=yes,scrollbars=no,menus=no');return false">(?)</a>
				</label>
			</td><td>
 				<input name="cc_ccv" id="cc_ccv" required="required" type="text" style="width:50px; border: 1px solid #999;">
 			</td></tr>
 			<tr><td style="vertical-align: middle;">
				<label style="display: inline; color: black; text-align: left;">Direcci&oacute;n de Env&iacute;o</label>
			</td><td>
 				<input name="direccion" id="direccion" required="required" type="text" style="width:250px; border: 1px solid #999;">
 			</td></tr>
 			<tr><td style="vertical-align: middle;">
				<label style="display: inline; color: black; text-align: left;">Comentarios</label>
			</td><td>
 				<textarea name="comentarios" id="comentarios" required="required" type="text" style="width:300px; height:50px; border: 1px solid #999; background-color: white;"></textarea>
 			</td></tr>
 			<tr><td style="vertical-align: middle;">
				&nbsp;
			</td><td style="text-align: left;">
 				<input name="submit" value="Pagar" type="submit" style="float:none; margin-bottom: 20px;">
 			</td></tr>
 			</table>
 		</td></tr></table>
 		</form>

 	</div>
 	

            
<div id="footerwrap">
    <div id="footer">
        <div class="footer-holder">
            <ul class="footer-menu">
                <li><a href="terminos.php">Terminos y Condiciones</a></li>
                <li><a href="privacidad.php">Politica de Privacidad</a></li>
            </ul>
            <p>© <?=date('Y')?> TiendaLuz.com - Todos los derechos reservados</p>
        </div>
    </div>
</div>
        </div>        
        


        
        <div id="product-zoom">
            <div class="canvas">
                <div style="cursor: move;" class="content kinetic-active">
                </div>
                <div id="product-zoom-close">Close ×</div>
            </div>
        </div>
 
      
            <img alt="" src="images/a.gif" border="0" height="1" width="1">                   
        
           
<script language="JavaScript">        
	function calcularPrecio() {
		count1 = $('#lamp1').val();
		count2 = $('#lamp2').val();
		count3 = $('#lamp3').val();
		price1 = (count1 * 39.90);
		price2 = (count2 * 39.90);
		price3 = (count3 * 39.90);
		subtotal = price1 + price2 + price3;
		if (subtotal > 0) { total = subtotal + 19.90; } else { total = 0; }

		$('#total1').html('&euro; '+price1.toFixed(2));
		$('#total2').html('&euro; '+price2.toFixed(2));
		$('#total3').html('&euro; '+price3.toFixed(2));
		$('#totaltotal').html('&euro; '+total.toFixed(2));
		$('#totaltotal2').html('&euro; '+total.toFixed(2));

	}
	calcularPrecio();
</script>

</body></html>