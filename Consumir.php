<?php
$location = "http://localhost/webservices/InsertCategoria.php?wsdl";

$request= "
<soapenv:Envelope xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\" xmlns:soapenv=\"http://schemas.xmlsoap.org/soap/envelope/\" xmlns:ins=\"InsertCategoriaSOAP\">
   <soapenv:Header/>
   <soapenv:Body>
      <ins:InsertCategoriaService soapenv:encodingStyle=\"http://schemas.xmlsoap.org/soap/encoding/\">
         <InsertCategoria xsi:type=\"ins:InsertCategoria\">
            <!--Se puedan ingresar los valores en cualquier orden-->
            <usu_nom xsi:type=\"xsd:string\">nombre</usu_nom>
            <usu_ape xsi:type=\"xsd:string\">apellido</usu_ape>
            <usu_correo xsi:type=\"xsd:string\">email@gmail.com</usu_correo>
         </InsertCategoria>
      </ins:InsertCategoriaService>
   </soapenv:Body>
</soapenv:Envelope>
";
?>