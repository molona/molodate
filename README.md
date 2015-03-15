# molodate


Repositorio de pruebas. Contiene una clase para convertir formato de fechas de MySql a formato dd[/|-]mm[/|-]aaaa

Ejemplos:

echo UtilidadesDeFechas::ConvertirFechaMysqlADDMMYYYY('2015-01-01','/');    //muestra:  01/01/2015
    
echo UtilidadesDeFechas::ConvertirFechaDDMMYYYYAMysql('01-01-2015');        //muestra:  2015-01-01
echo UtilidadesDeFechas::ConvertirFechaDDMMYYYYAMysql('01/01/2015','/');    //muestra:  2015-01-01



Instalación:


Añadir a composer.json:

"require-dev": {
    "molona/molodate": "dev-master"
},