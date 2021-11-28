<?php
header('Content-Type: text/html; charset=utf-8');
header('Content-type: text/css');
if ($_REQUEST['cod']==1) {
  echo  "
    <h5>Asus ZenBook 14 UX425EA-KI495 Intel Core i5-1135G7/16GB/512GB SSD/14</h5>
    <ol>
      <li>Tipo:Laptop</li>
      <li>Modelo:X515EA-BQ1001T</li>
      <li>Marca de procesador:INTEL</li>
      <li>Color:Transparent Silver</li>
    </ol>
  ";
} 
if ($_REQUEST['cod']==2) {
  echo "
    <h5>Laptop Hp 15-eg0027od 15.6 Fhd Intel Core I7-11 8gb 256 Ssd</h5>
    <ol>
      <li>SISTEMA OPERATIVO: Windows 10 Pro 64</li>
      <li>PROCESADORES: Procesador Intel Core i7 de 11.a generación</li>
      <li>DISCO DURO: SSD PCIe NVMe M.2 de 256 GB</li>
      <li>UNIDAD ÓPTICA: Unidad óptica no incluida</li>
    </ol>
  ";
} 
if ($_REQUEST['cod']==3) {
  echo "
    <h5>Impresora Multifuncional HP Smart Tank 515</h5>
    <ol>
      <li>Wi-Fi: Si</li>
      <li>Bluetooth: Si</li>
      <li>Entrada USB: Si</li>
      <li>Colores de impresión: Si</li>
    </ol>
  ";
}
if ($_REQUEST['cod']==4) {
  echo "
    <h5>Computadora PC GAMER Core I3-10TH 10ma RAM 16GB DISCO 1TB VIDEO GT 4GB CASE 500W LED</h5>
    <ol>
      <li>Procesador Intel Core i3-10TH 10ma Gen</li>
      <li>Placa Madre H410</li>
      <li>Memoria Ram de 16GB DDR4</li>
      <li>Disco Duro 1TB</li>
    </ol>
  ";
} 
if ($_REQUEST['cod']==5) {
  echo "
    <h5>MIFA A10 Plus 20W Parlante Bluetooth</h5>
    <ol>
      <li>20W + 3 radiadores de bajos</li>
      <li>Frecuencias: 20HZ - 20Khz</li>
      <li>Batería de 2400 mAh</li>
      <li>Bluetooth 5.0</li>
    </ol>
  ";
} 
?>