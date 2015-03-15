# molodate


Repositorio de pruebas. Contiene una clase para convertir formato de fechas de MySql a formato dd[/|-]mm[/|-]aaaa

Ejemplos:

echo UtilidadesDeFechas::ConvertirFechaMysqlADDMMYYYY('2015-01-01','/');    //muestra:  01/01/2015
    
echo UtilidadesDeFechas::ConvertirFechaDDMMYYYYAMysql('01-01-2015');        //muestra:  2015-01-01
echo UtilidadesDeFechas::ConvertirFechaDDMMYYYYAMysql('01/01/2015','/');    //muestra:  2015-01-01



Instalación:


1) Añadir a composer.json:

"require-dev": {
    "molona/molodate": "dev-master"
},


2) composer update


3) Agregar en el fichero/clase en el que se vaya a utilizar y llamar a alguna de sus fuciones.

use Molodate\UtilidadesDeFechas;
..
..
..
UtilidadesDeFechas::ConvertirFechaDDMMYYYYAMysql('01/01/2015','/');
