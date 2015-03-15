<?php

require_once '../src/UtilidadesDeFechas.php';

use Molodate\UtilidadesDeFechas;

/**
 * Description of UtilidadesDeFechasTest
 *
 * @author mpijierro
 */
class UtilidadesDeFechasTest extends PHPUnit_Framework_TestCase
{

    public function setUp()
    {

    }

    public function tearDown()
    {
        
    }

    public function testComprobarSiUnaFechaEsMysql()
    {
        $this->assertTrue(UtilidadesDeFechas::comprobarSiFechaEsMysql('2015-12-01')==true);
        $this->assertTrue(UtilidadesDeFechas::comprobarSiFechaEsMysql('2000-01-13')==true);
    }

    public function testComprobarFechaMysqlAnioErroneo(){
        $this->assertTrue(UtilidadesDeFechas::comprobarSiFechaEsMysql('20155-15-13')==false);
        $this->assertTrue(UtilidadesDeFechas::comprobarSiFechaEsMysql('-03-13')==false);
    }

    public function testComprobarFechaMysqlMesErroneo(){
        $this->assertTrue(UtilidadesDeFechas::comprobarSiFechaEsMysql('2015-15-13')==false);
        $this->assertTrue(UtilidadesDeFechas::comprobarSiFechaEsMysql('2015--13')==false);
    }

    public function testComprobarFechaMysqlDiaErroneo(){
        $this->assertTrue(UtilidadesDeFechas::comprobarSiFechaEsMysql('2015-15-32')==false);
        $this->assertTrue(UtilidadesDeFechas::comprobarSiFechaEsMysql('2015-03-')==false);
    }

    public function testComprobarSiUnaFechaEsDDMMYYYY()
    {
        $this->assertTrue(UtilidadesDeFechas::comprobarSiFechaEsDDMMYYYY('12-01-2015')==true);
        $this->assertTrue(UtilidadesDeFechas::comprobarSiFechaEsDDMMYYYY('12-03-1999')==true);
        $this->assertTrue(UtilidadesDeFechas::comprobarSiFechaEsDDMMYYYY('12/03/1999','/')==true);
        $this->assertTrue(UtilidadesDeFechas::comprobarSiFechaEsDDMMYYYY('12#03#1999','#')==true);
    }

    public function testComprobarFechaDDMMYYYYAnioErroneo(){
        $this->assertTrue(UtilidadesDeFechas::comprobarSiFechaEsDDMMYYYY('01-01-20112')==false);
        $this->assertTrue(UtilidadesDeFechas::comprobarSiFechaEsDDMMYYYY('01-01-')==false);
    }

    public function testComprobarFechaDDMMYYYYMesErroneo(){
        $this->assertTrue(UtilidadesDeFechas::comprobarSiFechaEsDDMMYYYY('01-015-2015')==false);
        $this->assertTrue(UtilidadesDeFechas::comprobarSiFechaEsDDMMYYYY('01--2015')==false);
    }

    public function testComprobarFechaDDMMYYYYDiaErroneo(){
        $this->assertTrue(UtilidadesDeFechas::comprobarSiFechaEsDDMMYYYY('32-01-2015')==false);
        $this->assertTrue(UtilidadesDeFechas::comprobarSiFechaEsDDMMYYYY('-01-2015')==false);
    }

    public function testConvertirFechaMysqlADDMMYYYY(){
        $this->assertEquals(UtilidadesDeFechas::ConvertirFechaMysqlADDMMYYYY('2015-01-01'),'01-01-2015');
        $this->assertEquals(UtilidadesDeFechas::ConvertirFechaMysqlADDMMYYYY('2015-12-31'),'31-12-2015');
    }

    public function testConvertirFechaDDMMYYYYAMysql(){
        $this->assertEquals(UtilidadesDeFechas::ConvertirFechaDDMMYYYYAMysql('01-01-2015'),'2015-01-01');
        $this->assertEquals(UtilidadesDeFechas::ConvertirFechaDDMMYYYYAMysql('31-12-2015'),'2015-12-31');
    }

    public function testExtraerDiaFechaDDMMYYYY (){
        
    }

}