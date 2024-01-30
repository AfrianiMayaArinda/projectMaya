@extends('layouts.app')

@section('title', 'Checksheet')


@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gridlines Example</title>
    <style> 
        /* CSS untuk gridlines */
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
        
        th {
            background-color: #f2f2f2;
            position: relative;
            z-index: 1;
        }
    </style>
</head>
<body>
    
    <table>
        <thead>
            <tr style="border-top: 3px solid black; border-left: 3px solid black; border-right: 3px solid black;">
                <th> <img src="{{ asset('img/logopatria.png') }}" height="40"> </th>
                <th rowspan="2"> <p style="custom-font text-center, font-family: 'Arial', sans-serif; font-size: 18px; color: #030303; ">INSPECTION SHEET QUALITY FUNCTION DEPLOYMENT PLANNING(QFDP)</p></th>
                <th><p class="custom-font text-center"> Rev </p> </th>
                <th>Keterangan</th>
                <th>Tanggal</th>
                <th>Dibuat</th> 
            </tr>
        </thead>
        <tbody>
            <tr style="border-left: 3px solid black; border-right: 3px solid black;">
                <td> No Dokumen: QC/IS/001 </td>
                <td rowspan="2"> <p class="custom-font text-center">IS A QFDP</p> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> <img src="{{ asset('img/ttd.png') }}" height="50"></td>
            </tr>
            <tr style="border-bottom: 3px solid black; border-left: 3px solid black; border-right: 3px solid black;">
                <td> Tanggal: 15/03/2023 </td>
                <td></td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
            <tr >
                <td style="border-left: 3px solid black;"> UNIT MODEL </td>
                <td> </td>
                <td>DRAWING REVISI</td>
                <td> - </td>
                <td></td>
                <td style="border-right: 3px solid black;"> </td>
            </tr>
            <tr>
                <td style="border-left: 3px solid black;">NAMA BAGIAN</td>
                <td>VESSEL WESTECH EH4500 EUCLID</td>
                <td>CUSTOMER</td>
                <td>TRIATRA SINERGI PRATAMA</td>
                <td> </td>
                <td style="border-right: 3px solid black;"> </td>
            </tr>
            <tr>
                <td style="border-left: 3px solid black;"> PART NUMBER</td>
                <td> </td>
                <td> QUANTITY ORDER </td>
                <td> 1 SET </td>
                <td> </td>
                <td style="border-right: 3px solid black;"> </td>
            </tr>
            <tr>
                <td style="border-left: 3px solid black;"> NO PRO </td>
                <td> 4300000505 </td>
                <td> TARGET DELIVERY </td>
                <td> URGENT</td>
                <td> </td>
                <td style="border-right: 3px solid black;"> </td>
            </tr>

        </tbody>
    </table>

    <table>
        <thead>
            <tr>
                <th style="border-left: 3px solid black;"> No </th>
                <th> <p class="custom-font text-center"> Part Number </th>
                <th> Part Name </th>
                <th> Detail </th>
                <th> Process </th>
                <th> Grade </th>
                <th> Tebal </th>
                <th> Bobot(Kg) </th>
                <th> Desc </th>
                <th> Qty Std </th>
                <th> Qty Ord </th>
                <th> Qty Act </th>
                <th colspan="7" style="border-right: 3px solid black;"> Standart Proses </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="border-left: 3px solid black;"> <p class="custom-font text-center"> 1 </td>
                <td> <p class="custom-font text-center"> - </td>
                <td>  BOTTOM BODY </td>
                <td> <p class="custom-font text-center"> SUB </td>
                <td> <p class="custom-font text-center"> IH </td>
                <td> <p class="custom-font text-center"> G250 </td>
                <td> <p class="custom-font text-center"> 10 </td>
                <td> <p class="custom-font text-center"> 215.01</td>
                <td> </td>
                <td> <p class="custom-font text-center"> 1 </td>
                <td> <p class="custom-font text-center"> 1 </td>
                <td> <p class="custom-font text-center"> 1 </td>
                <td> CT </td>
                <td> SG </td>
                <td> RD </td>
                <td> BD</td>
                <td> SA</td>
                <td> LB </td>
                <td style="border-right: 3px solid black;"> FN </td>
            </tr>
            <tr>
                <td style="border-left: 3px solid black;"> <p class="custom-font text-center"> 2 </td>
                <td> <p class="custom-font text-center"> - </td>
                <td> DOUBLER TOP BODY SEGMEN 1 </td>
                <td> <p class="custom-font text-center"> SUB </td>
                <td> <p class="custom-font text-center"> IH </td>
                <td> <p class="custom-font text-center"> G250 </td>
                <td> <p class="custom-font text-center"> 10 </td>
                <td> <p class="custom-font text-center"> 215.01 </td>
                <td> </td>
                <td> <p class="custom-font text-center"> 1 </td>
                <td> <p class="custom-font text-center"> 1 </td>
                <td> <p class="custom-font text-center"> 1 </td>
                <td style="border-right: 3px solid black;"> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <td style="border-left: 3px solid black;"> <p class="custom-font text-center"> 3 </td>
                <td> <p class="custom-font text-center"> - </td>
                <td> DOUBLER TOP BODY SEGMEN 2 </td>
                <td> <p class="custom-font text-center"> ASSY </td>
                <td> <p class="custom-font text-center"> IH </td>
                <td> <p class="custom-font text-center"> G250 </td>
                <td> <p class="custom-font text-center"> 10 </td>
                <td> <p class="custom-font text-center"> 189.10 </td>
                <td> </td>
                <td> <p class="custom-font text-center"> 1 </td>
                <td> <p class="custom-font text-center"> 1 </td>
                <td> <p class="custom-font text-center"> 1 </td>
                <td style="border-right: 3px solid black;"></td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <td style="border-left: 3px solid black;"> <p class="custom-font text-center"> 4 </td>
                <td> <p class="custom-font text-center"> - </td>
                <td> DOUBLER TOP BODY SEGMEN 3 </td>
                <td> <p class="custom-font text-center"> SUB </td>
                <td> <p class="custom-font text-center"> IH </td>
                <td> <p class="custom-font text-center"> G250 </td>
                <td> <p class="custom-font text-center"> 10 </td>
                <td> <p class="custom-font text-center"> 189.19 </td>
                <td> </td>
                <td> <p class="custom-font text-center"> 1 </td>
                <td> <p class="custom-font text-center"> 1 </td>
                <td> <p class="custom-font text-center"> 1 </td>
                <td style="border-right: 3px solid black;"> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
            <tr>

                <td style="border-left: 3px solid black;"> <p class="custom-font text-center"> 5 </td>
                <td> <p class="custom-font text-center"> - </td>
                <td> REAR BODY SEGMEN 1</td>
                <td> <p class="custom-font text-center"> SUB </td>
                <td> <p class="custom-font text-center"> IH </td>
                <td> <p class="custom-font text-center"> G250 </td>
                <td> <p class="custom-font text-center"> 10</td>
                <td> <p class="custom-font text-center"> 275.08</td>
                <td> </td>
                <td> <p class="custom-font text-center"> 1</td>
                <td> <p class="custom-font text-center"> 1</td>
                <td> <p class="custom-font text-center"> 1</td>
                <td style="border-right: 3px solid black;"> </td>
            </tr>
            <tr>
                <td style="border-left: 3px solid black;"> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td style="border-right: 3px solid black;"> </td>
            </tr>
            <tr>
                <td style="border-left: 3px solid black;"> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td style="border-right: 3px solid black;"> </td>
            </tr>
            <tr>
                <td style="border-left: 3px solid black;"> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td style="border-right: 3px solid black;"> </td>
            </tr>
            <tr>
                <td style="border-left: 3px solid black;"> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td style="border-right: 3px solid black;"> </td>
            </tr>
            <tr>
                <td style="border-left: 3px solid black;"> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td style="border-right: 3px solid black;"> </td>
            </tr>
            <tr>
                <td style="border-left: 3px solid black;"> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td style="border-right: 3px solid black;"> </td>
            </tr>
            <tr>
                <td style="border-left: 3px solid black;"> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td style="border-right: 3px solid black;"> </td>
            </tr>
            <tr>
                <td style="border-left: 3px solid black;"> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td style="border-right: 3px solid black;"> </td>
            </tr>
            <tr>
                <td style="border-left: 3px solid black;"> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td style="border-right: 3px solid black;"> </td>
            </tr>
            <tr>
                <td style="border-left: 3px solid black;"> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td style="border-right: 3px solid black;"> </td>
            </tr>
            <tr>
                <td style="border-left: 3px solid black;"> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td style="border-right: 3px solid black;"> </td>
            </tr>
            <tr>
                <td style="border-left: 3px solid black;"> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td style="border-right: 3px solid black;"> </td>
            </tr>
            <tr>
                <td style="border-left: 3px solid black;"> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td style="border-right: 3px solid black;"> </td>
            </tr>
            <tr>
                <td style="border-left: 3px solid black;"> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td style="border-right: 3px solid black;"> </td>
            </tr>
    </table>

    <table>
        <thead>
            <tr>
                <td style="border-left: 3px solid black;" rowspan="6"> Keterangan : 
                    CT: Plasma Cutting SG: Straight Gas Cutting RD: Radial Drill BD: Bending
                SA: Sub Assy LB: Liner Boring FN: Finishing/Epoxy</td>
                <td> Diperiksa </td>
                <td> Disetujui </td>
                <td> Mengetahui </td>
            </tr>
            <tr>
                <td rowspan="4"></td>
                <td rowspan="4"></td>
                <td rowspan="4"></td>
            </tr>
            <tr>
            </tr>
            <tr>
            </tr>
            <tr>

            </tr>
            <tr>
                <td> Engineering </td>
                <td> PPC </td>
                <td> SPV </td>
            </tr>
        </thead>
    </table>  


    <!-- ChecksheetB -->
    <table>
        <thead>
            <tr style="border-top: 3px solid black; border-left: 3px solid black; border-right: 3px solid black;">
                <td rowspan="3" colspan="2"> <img src="{{ asset('img/logopatria.png') }}" height="40"> </td>
                <td colspan="12" rowspan="3"> <p style="custom-font text-center, font-family: 'Arial'; font-size:30px; color: #030303; "> </p> <b> INSPECTION SHEET PERSIAPAN BAHAN </b> </td>
                <td style="width: 300px;"> <p class="custom-font text-center"> </p> <b> Part Name </b> </td>
                <td> PLATE  </td>
                <td> <b> No PRO </b> </td>
                <td>4300000505</td>
                <td><p class="custom-font text-center"> <b> Rev </b> </td>
                <td><b>Keterangan</b></td>
                <td><b>Tanggal</b></td>
                <td><b>Dibuat</b></td>
            </tr>
        </thead>
        <tbody>
            <tr style="border-left: 3px solid black; border-right: 3px solid black;">
                <td colspan="2"> </td>
                <td colspan="12"> </td>
                <td> <b>Part Number</b> </td>
                <td>BOTTOM BODY </td>
                <td><b>Jenis Material</b></td>
                <td>GRADE250 T10</td>
                <td></td>
                <td></td>
                <td></td>
                <td rowspan="2"><img src="{{ asset('img/ttd.png') }}" height="50"></td>
            </tr>
            <tr style="border-left: 3px solid black; border-right: 3px solid black;">
                <td colspan="2"> <b> No Dokumen: QC/IS/002 <b> </td>
                <td colspan="12"> </td>
                <td><b>Drawing Revisi</b> </td>
                <td></td>
                <td><b>No Registrasi</b></td>
                <td>0505</td>
                <td></td>
                <td></td>
            </tr>
            <tr style="border-bottom: 3px solid black; border-left: 3px solid black; border-right: 3px solid black;">
                <td colspan="2"><b>Tanggal : 15/03/2023</b></td>
                <td colspan="12"><p class="custom-font text-center"></p><b>IS B PB</b></td>
                <td><b>QTY</b></td>
                <td>1 Pcs</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td> <p class="custom-font text-center"> QO </td>
            </tr>
            <tr>
                <td colspan="9" rowspan="29"> Sketsa :</td>
                <td rowspan="2"> <p class="custom-font text-center"> </p><b> No </b></td>
                <td rowspan="2"> <p class="custom-font text-center"> </p><b> Item</b> </td>
                <td colspan="2"rowspan="2"> <p class="custom-font text-center"> </p><b> Standart </b></td>
                <td rowspan="2"> <p class="custom-font text-center"> </p> <b>Alat Ukur </b> </td>
                <td colspan="8"> <p class="custom-font text-center"> </p> <b>Hasil Pengukuran</b> </td>
            </tr>
            <tr>
                <td><b> Oprt </b></td>
                <td> <p class="custom-font text-center"> </p><b> Ket </b></td>
                <td> <p class="custom-font text-center"> </p><b> QC </b> </td>
                <td> <p class="custom-font text-center"> </p><b> Ket </b></td>
                <td> <b>Oprt</b> </td>
                <td> <b>Ket</b> </td>
                <td> <b>QC</b> </td>
                <td> <b>Ket </b></td>
            </tr>
            <tr>
                <td> <p class="custom-font text-center"> </p> A </td>
                <td> Jarak Plate </td>
                <td rowspan="3"> <p class="custom-font text-center"> </p> Plasma Cutting </td>
                <td> <p class="custom-font text-center"></p> 702 </td>
                <td> RM </td>
                <td> <p class="custom-font text-center"> </p> 702 </td>
                <td> </td>
                <td> 702</td>
                <td> </td>
                <td> 702</td> 
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <td> <p class="custom-font text-center"> </p> B </td>
                <td> Jarak Plate </td>
                <td> <p class="custom-font text-center"> </p> 3900 </td>
                <td> RM </td>
                <td> <p class="custom-font text-center"> </p> 3900 </td>
                <td> </td>
                <td> 3903 </td>
                <td> </td>
                <td> 3900</td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <td> <p class="custom-font text-center"> </p> C </td>
                <td> <p class="custom-font text-center"> </p> Tebal Plate </td>
                <td> <p class="custom-font text-center"> </p> 10 </td>
                <td> Caliper </td>
                <td> <p class="custom-font text-center"> </p> 10 </td>
                <td> </td>
                <td> <p class="custom-font text-center"> </p> 10 </td>
                <td> </td>
                <td> <p class="custom-font text-center"> </p> 10 </td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <td colspan="13"> </td>
            </tr>
            <tr>
                <td colspan="3"> <b>Finishing Hasil Cutting </b> </td>
                <td><b> V </b></td>
                <td> <b>X </b></td>
                <td colspan="2"> <p class="custom-font text-center"> </p> <b>Operator </b></td>
                <td colspan="3"> <b> Inspector </b></td>
                <td colspan="3"> <b> SPV </b> </td>
            </tr>
            <tr>
                <td> Start Date </td>
                <td> 20.10.23</td>
                <td> Finish Date</td>
                <td> 23.10.2023 </td>
                <td> </td>
                <td colspan="2" rowspan="2"> <p class="custom-font text-center"> </p> </td>
                <td colspan="3" rowspan="2"> </td>
                <td colspan="3" rowspan="2"> </td>
            </tr>
            <tr>
                <td> Start Time </td>
                <td> </td>
                <td> Finish Time</td>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <td colspan="13"></td>
            </tr>
            <tr>
                <td rowspan="2"> <b> No </b></td>
                <td rowspan="2"> <b>Item </b></td>
                <td colspan="2" rowspan="2"> <b>Standart</b></td>
                <td rowspan="2"> <b>Alat Ukur</b></td>
                <td colspan="8"> <b>Hasil Pengukuran</b></td>
            </tr>
            <tr>
                <td> <b>Oprt</b> </td>
                <td> <b>Ket</b> </td>
                <td> <b>QC</b> </td>
                <td> <b>Ket</b> </td>
                <td> <b>Oprt</b> </td>
                <td> <b>Ket</b> </td>
                <td> <b>QC</b> </td>
                <td> <b>Ket</b> </td>
            </tr>
            <tr>
                <td> D </td>
                <td> Jarak Plate </td>
                <td rowspan="2"> SGC </td>
                <td> 8 </td>
                <td> RM </td>
                <td> 8 </td>
                <td> </td>
                <td> 8 </td>
                <td> </td>
                <td> 8 </td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <td> E </td>
                <td> Chamfer </td>
                <td> 30 </td>
                <td> BP </td>
                <td> 30 </td>
                <td> </td>
                <td> 30 </td>
                <td> </td>
                <td> 30 </td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <td colspan="3"> <b>Finishing Hasil SGC</b> </td>
                <td> <b>V </b></td>
                <td> <b>X </b></td>
                <td colspan="2"><b> Operator</b> </td>
                <td colspan="3"> <b>Inspector</b> </td>
                <td colspan="3"> <b>SPV</b> </td>
            </tr>
            <tr>
                <td> Start Date </td>
                <td> 23.10.2023</td>
                <td> Finish Date</td>
                <td> 23.10.2023</td>
                <td> </td>
                <td colspan="2" rowspan="2"> </td>
                <td colspan="3" rowspan="2"> </td>
                <td colspan="3" rowspan="2"> </td>
            </tr>
            <tr>
                <td> Start Time </td>
                <td> </td>
                <td> Finish Time </td>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <td colspan="13"> </td>
            </tr>
            <tr>
                <td> <b>No</b> </td>
                <td> <b>Name</b> </td>
                <td colspan="2"><b> Standart </b></td>
                <td> <b>Alat Ukur</b> </td>
                <td colspan="8"> <b>Hasil Pengukuran</b> </td>
            </tr>
            <tr>
                <td> F </td>
                <td> Jarak Plate </td>
                <td rowspan="6"> Bending </td>
                <td> 366 </td>
                <td> RM </td>
                <td> 363 </td>
                <td> </td>
                <td> 363 </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <td> G </td>
                <td> Jarak Plate </td>
                <td> 205 </td>
                <td> RM </td>
                <td> 185 </td>
                <td> </td>
                <td> 185 </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <td> H </td>
                <td> Sudut </td>
                <td> 90° </td>
                <td> BP </td>
                <td> 90° </td>
                <td> </td>
                <td> 90° </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <td> I </td>
                <td> Sudut </td>
                <td> 96° </td>
                <td> BP </td>
                <td> 96° </td>
                <td> </td>
                <td> 96° </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <td> J </td>
                <td> Jarak Plate </td>
                <td> 200 </td>
                <td> RM </td>
                <td> 180 </td>
                <td> </td>
                <td> 180 </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <td> K </td>
                <td> Jarak Plate </td>
                <td> 366 </td>
                <td> RM </td>
                <td> 366 </td>
                <td> </td>
                <td> 366 </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <td colspan="13"> </td>
            </tr>
            <tr>
                <td colspan="3"><b> Finishing Hasil Bending</b></td>
                <td> <b>V </b></td>
                <td> <b>X </b></td>
                <td colspan="2"> <p class="custom-font text-center"> </p> <b>Operator</b> </td>
                <td colspan="3"> <b>Inspector</b> </td>
                <td colspan="3"> <b>SPV</b> </td>
            </tr>
            <tr>
                <td> Start Date </td>
                <td> 24.10.23</td>
                <td> Finish Date</td>
                <td> 26.10.2023 </td>
                <td> </td>
                <td colspan="2" rowspan="2"> <p class="custom-font text-center"> </p> </td>
                <td colspan="3" rowspan="2"> </td>
                <td colspan="3" rowspan="2"> </td>
            </tr>
            <tr>
                <td> Start Time </td>
                <td> </td>
                <td> Finish Time</td>
                <td> </td>
                <td> </td>
            </tr>
        </tbody>
    </table>
    <table>
        <thead>
            <tr>
                <td colspan="25"> <b> Ket : v = OK x=NG/Rejec x=OK Hasil Perbaikan RM:Roll Meter BP:Bever Protactor </b> </td>
            </tr>
            <tr>
                <td rowspan="2"> <b> Catatan: </b> </td>
                <td rowspan="2"> Toleransi Umum Untuk Permesinan</td>
                <td> Nominal </td>
                <td> >0,5 s/d 3 </td>
                <td> >3 s/d 6 </td>
                <td> >6 s/d 30 </td>
                <td> >30 s/d 120 </td>
                <td> >120 s/d 315 </td>
                <td> >315 s/d 1000 </td>
                <td> >1000 s/d 2000 </td>
                <td> >2000 s/d 4000 </td>
                <td> >4000 s/d 8000 </td>
            </tr>
            <tr>
                <td> Toleransi </td>
                <td> ±0,15</td>
                <td> ±0,2</td>
                <td> ±0,5</td>
                <td> ±0,8</td>
                <td> ±1,2</td>
                <td> ±2 </td>
                <td> ±3 </td>
                <td> ±4 </td>
                <td> ±5 </td>
            </tr>
        </thead>
    </table>
    
    <!-- ChecksheetC -->
    <table>
        <thead>
            <tr style="border-top: 3px solid black; border-left: 3px solid black; border-right: 3px solid black;">
                <td rowspan="3" colspan="2"> <img src="{{ asset('img/logopatria.png') }}" height="40"> </td>
                <td colspan="12" rowspan="3"> <p style="custom-font text-center, font-family: 'Arial'; font-size:30px; color: #030303; "> </p> <b> INSPECTION SHEET SUB ASSY </b> </td>
                <td style="width: 300px;"> <p class="custom-font text-center"> </p> <b> Part Name </b> </td>
                <td> DOUBLER ASSY </td>
                <td> <b> No PRO </b> </td>
                <td>4300000540,41,42</td>
                <td><p class="custom-font text-center"> <b> Rev </b> </td>
                <td><b>Keterangan</b></td>
                <td><b>Tanggal</b></td>
                <td><b>Dibuat</b></td>
            </tr>
        </thead>
        <tbody>
            <tr style="border-left: 3px solid black; border-right: 3px solid black;">
                <td colspan="2"> </td>
                <td colspan="12"> </td>
                <td> <b>Part Number</b> </td>
                <td> RD7005-BIG22000 </td>
                <td><b> Jenis Material </b></td>
                <td> - </td>
                <td></td>
                <td></td>
                <td></td>
                <td rowspan="2"><img src="{{ asset('img/ttd.png') }}" height="50"></td>
            </tr>
            <tr style="border-left: 3px solid black; border-right: 3px solid black;">
                <td colspan="2"> <b> No Dokumen: QC/IS/003 <b> </td>
                <td colspan="12"> </td>
                <td><b>Drawing Revisi</b> </td>
                <td> Revisi 1</td>
                <td><b>No Registrasi</b></td>
                <td>540,541,542</td>
                <td></td>
                <td></td>
            </tr>
            <tr style="border-bottom: 3px solid black; border-left: 3px solid black; border-right: 3px solid black;">
                <td colspan="2"><b>Tanggal : 15/03/2023</b></td>
                <td colspan="12"><p class="custom-font text-center"></p><b>IS C SA</b></td>
                <td><b>QTY</b></td>
                <td> 3 SET</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td> <p class="custom-font text-center"> QO </td>
            </tr>
            <tr>
                <td colspan="9" rowspan="35"> Sketsa :</td>
                <td rowspan="2"> <p class="custom-font text-center"> </p><b> No </b></td>
                <td rowspan="2"> <p class="custom-font text-center"> </p><b> Item</b> </td>
                <td colspan="2"rowspan="2"> <p class="custom-font text-center"> </p><b> Standart </b></td>
                <td rowspan="2"> <p class="custom-font text-center"> </p> <b>Alat Ukur </b> </td>
                <td colspan="8"> <p class="custom-font text-center"> </p> <b>Hasil Pengukuran</b> </td>
            </tr>
            <tr>
                <td><b> SC </b></td>
                <td> <p class="custom-font text-center"> </p><b> Ket </b></td>
                <td> <p class="custom-font text-center"> </p><b> QC </b> </td>
                <td> <p class="custom-font text-center"> </p><b> Ket </b></td>
                <td> <b> SC </b> </td>
                <td> <b>Ket</b> </td>
                <td> <b>QC</b> </td>
                <td> <b>Ket </b></td>
            </tr>
            <tr>
                <td> <p class="custom-font text-center"> </p> A </td>
                <td> Welding Bead </td>
                <td rowspan="3"> <p class="custom-font text-center"> </p> 4 </td>
                <td> <p class="custom-font text-center"></p> RM </td>
                <td> 4 </td>
                <td> <p class="custom-font text-center"> </p> </td>
                <td> 4 </td>
                <td> </td>
                <td> 4</td>
                <td> </td> 
                <td> 4</td>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <td> <p class="custom-font text-center"> </p> B </td>
                <td> Jarak Plate </td>
                <td> <p class="custom-font text-center"> </p> 161 </td>
                <td> WG </td>
                <td> <p class="custom-font text-center"> </p> 161 </td>
                <td> </td>
                <td> 160 </td>
                <td> </td>
                <td> 161 </td>
                <td> </td>
                <td> 161 </td>
                <td> </td>
            </tr>
            <tr>
                <td> <p class="custom-font text-center"> </p> C </td>
                <td> <p class="custom-font text-center"> </p> Jarak Plate </td>
                <td> <p class="custom-font text-center"> </p> 171 </td>
                <td> RM </td>
                <td> <p class="custom-font text-center"> </p> 171 </td>
                <td> </td>
                <td> <p class="custom-font text-center"> </p> 170 </td>
                <td> </td>
                <td> <p class="custom-font text-center"> </p> 171 </td>
                <td> </td>
                <td> 170</td>
                <td> </td>
            </tr>
            <tr>
                <td> <p class="custom-font text-center"> </p> D </td>
                <td> <p class="custom-font text-center"> </p> Jarak Plate </td>
                <td> <p class="custom-font text-center"> </p> 1048 </td>
                <td> RM </td>
                <td> <p class="custom-font text-center"> </p> 1048 </td>
                <td> </td>
                <td> <p class="custom-font text-center"> </p> 1048 </td>
                <td> </td>
                <td> <p class="custom-font text-center"> </p> 1048 </td>
                <td> </td>
                <td> 1046 </td>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <td> <p class="custom-font text-center"> </p> E </td>
                <td> <p class="custom-font text-center"> </p> Welding Bead </td>
                <td> <p class="custom-font text-center"> </p> 4 </td>
                <td> RM </td>
                <td> <p class="custom-font text-center"> </p> 4 </td>
                <td> </td>
                <td> <p class="custom-font text-center"> </p> 6</td>
                <td> </td>
                <td> <p class="custom-font text-center"> </p> 4 </td>
                <td> </td>
                <td> 5 </td>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <td> <p class="custom-font text-center"> </p> F </td>
                <td> <p class="custom-font text-center"> </p> Jarak Plate </td>
                <td> <p class="custom-font text-center"> </p> 10 </td>
                <td> RM </td>
                <td> <p class="custom-font text-center"> </p> WG </td>
                <td> </td>
                <td> <p class="custom-font text-center"> </p> 10</td>
                <td> </td>
                <td> <p class="custom-font text-center"> </p> 10 </td>
                <td> </td>
                <td> 10 </td>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <td> <p class="custom-font text-center"> </p> G </td>
                <td> <p class="custom-font text-center"> </p> Jarak Plate </td>
                <td> <p class="custom-font text-center"> </p> 486 </td>
                <td> RM </td>
                <td> <p class="custom-font text-center"> </p> 486 </td>
                <td> </td>
                <td> <p class="custom-font text-center"> </p> 485 </td>
                <td> </td>
                <td> <p class="custom-font text-center"> </p> 486 </td>
                <td> </td>
                <td> 486 </td>
                <td> </td>
                <td> </td>
            <tr>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <td colspan="3"> <b>Finishing Hasil Welding </b> </td>
                <td><b> V </b></td>
                <td> <b>X </b></td>
                <td colspan="2"> <p class="custom-font text-center"> </p> <b> Welder </b></td>
                <td colspan="3"> <b> Inspector </b></td>
                <td colspan="3"> <b> SPV </b> </td>
            </tr>
            <tr>
                <td> Start Date </td>
                <td> 29.11.23</td>
                <td> Finish Date</td>
                <td> 30.11.2023 </td>
                <td> </td>
                <td colspan="2" rowspan="2"> <p class="custom-font text-center"> </p> </td>
                <td colspan="3" rowspan="2"> </td>
                <td colspan="3" rowspan="2"> </td>
            </tr>
            <tr>
                <td> Start Time </td>
                <td> :</td>
                <td> Finish Time</td>
                <td> :</td>
                <td> </td>
            </tr>
            <tr>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <td COLspan="13"> <b> PART NUMBER SUB ASSY : </b></td>
            </tr>
            <tr>
                <td> 1 </td>
                <td colspan="6"> RD7005-BIG22100</td>
                <td colspan="6"> : PLATE </td>
            </tr>
            <tr>
                <td> 2 </td>
                <td colspan="6"> RD7005-BIG22200</td>
                <td colspan="6"> : PLATE </td>
            </tr>
            <tr>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <td colspan="13"> <b> Catatan: </b> </td>
            </tr>
                <td colspan="13"> Keterangan :V=OK X=NG/Reject V=OK Hasil Perbaikan RM:Roll Meter WG:Welding Gauge LB:Liner Booring </td>
            </tr>
            <tr>
                <td colspan="13"> <b> Toleransi Umum Untuk Permesinan </b> </td>
            </tr>
                <td colspan="4"> Nominal </td>
                <td> >0,5 s/d 3</td>
                <td> >3 s/d 6 </td>
                <td> >6 s/d 30</td>
                <td> >30 s/d 120</td>
                <td> >120 s/d 315 </td>
                <td> >315 s/d 1000 </td>
                <td> >1000 s/d 2000 </td>
                <td >2000 s/d 4000 </td>
                <td> 4000 s/d 8000 </td>
            </tr>
            <tr>
                <td colspan="4"> Toleransi </td>
                <td> ±0,15</td>
                <td> ±0,2</td>
                <td> ±0,5</td>
                <td> ±0,8</td>
                <td> ±1,2</td>
                <td> ±2</td>
                <td> ±3</td>
                <td> ±4</td>
                <td> ±5</td>
            </tr>
        </thead>
    </table>

    <!-- ChecksheetD -->
    <table>
        <thead>
            <tr style="border-top: 3px solid black; border-left: 3px solid black; border-right: 3px solid black;">
                <th> <img src="{{ asset('img/logopatria.png') }}" height="40"> </th>
                <th rowspan="2"> <p style="custom-font text-center, font-family: 'Arial', sans-serif; font-size: 18px; color: #030303; ">INSPECTION SHEET FINAL</p></th>
                <th><p class="custom-font text-center"> Rev </p> </th>
                <th>Keterangan</th>
                <th>Tanggal</th>
                <th>Dibuat</th> 
            </tr>
        </thead>
        <tbody>
            <tr style="border-left: 3px solid black; border-right: 3px solid black;">
                <td> No Dokumen: QC/IS/004 </td>
                <td rowspan="2"> <p class="custom-font text-center">IS D FI</p> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> <img src="{{ asset('img/ttd.png') }}" height="50"></td>
            </tr>
            <tr style="border-bottom: 3px solid black; border-left: 3px solid black; border-right: 3px solid black;">
                <td> Tanggal: 15/03/2023 </td>
                <td></td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
            <tr >
                <td style="border-left: 3px solid black;"> UNIT MODEL </td>
                <td> </td>
                <td colspan="2">CUSTOMER</td>
                <td colspan="2"> TRIATRA SINERGI PRATAMA </td>
            </tr>
            <tr>
                <td style="border-left: 3px solid black;">NAMA BAGIAN</td>
                <td>VESSEL WESTECH EH4500 EUCLID</td>
                <td colspan="2">NO PRO</td>
                <td colspan="2">4300000505</td>
            </tr>
            <tr>
                <td style="border-left: 3px solid black;"> PART NUMBER</td>
                <td> - </td>
                <td colspan="2"> QTY</td>
                <td colspan="2"> 1 SET </td>
            </tr>
           
        </tbody>
    </table>

    <table>
        <thead>
            <tr>
                <th style="border-left: 3px solid black;"> No </th>
                <th> <p class="custom-font text-center"></p> Part Number </th>
                <th colspan="3"> <p class="custom-font text-center"></p> Part Name </th>
                <th colspan="2"> Epoxy</th>
                <th colspan="2"> Wrapping </th>
                <th colspan="2"> QC Passed </th>
                <th colspan="4"> Remark </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="border-left: 3px solid black;"> <p class="custom-font text-center"> 1 </td>
                <td> <p class="custom-font text-center"> - </td>
                <td colspan="3">  BOTTOM BODY </td>
                <td colspan="2"> <p class="custom-font text-center"> </td>
                <td colspan="2"> <p class="custom-font text-center"> </td>
                <td colspan="2"> <p class="custom-font text-center"> </td>
                <td colspan="4"> <p class="custom-font text-center"> </td>
            </tr>
            <tr>
                <td style="border-left: 3px solid black;"> <p class="custom-font text-center"> 2 </td>
                <td> <p class="custom-font text-center"> - </td>
                <td colspan="3"> DOUBLER TOP BODY SEGMEN 1 </td>
                <td colspan="2"> <p class="custom-font text-center"> </td>
                <td colspan="2"> <p class="custom-font text-center"> </td>
                <td colspan="2"> <p class="custom-font text-center"> </td>
                <td colspan="4"> <p class="custom-font text-center"> </td>
            </tr>
            <tr>
                <td style="border-left: 3px solid black;"> <p class="custom-font text-center"> 3 </td>
                <td> <p class="custom-font text-center"> - </td>
                <td colspan="3"> DOUBLER TOP BODY SEGMEN 2 </td>
                <td colspan="2"> <p class="custom-font text-center"> </td>
                <td colspan="2"> <p class="custom-font text-center"> </td>
                <td colspan="2"> <p class="custom-font text-center"> </td>
                <td colspan="4"> <p class="custom-font text-center"> </td>
            </tr>
            <tr>
                <td style="border-left: 3px solid black;"> <p class="custom-font text-center"> 4 </td>
                <td> <p class="custom-font text-center"> - </td>
                <td colspan="3"> DOUBLER TOP BODY SEGMEN 3 </td>
                <td colspan="2"> <p class="custom-font text-center"> </td>
                <td colspan="2"> <p class="custom-font text-center"> </td>
                <td colspan="2"> <p class="custom-font text-center"> </td>
                <td colspan="4"> <p class="custom-font text-center"> </td>
            </tr>
            <tr>

                <td style="border-left: 3px solid black;"> <p class="custom-font text-center"> 5 </td>
                <td> <p class="custom-font text-center"> - </td>
                <td colspan="3"> REAR BODY SEGMEN 1</td>
                <td colspan="2"> <p class="custom-font text-center"> </td>
                <td colspan="2"> <p class="custom-font text-center"> </td>
                <td colspan="2"> <p class="custom-font text-center"> </td>
                <td colspan="4"> <p class="custom-font text-center"> </td>
            </tr>
            <tr>
                <td style="border-left: 3px solid black;"> </td>
                <td> </td>
                <td colspan="3"> </td>
                <td colspan="2"> <p class="custom-font text-center"> </td>
                <td colspan="2"> <p class="custom-font text-center"> </td>
                <td colspan="2"> <p class="custom-font text-center"> </td>
                <td colspan="4"> <p class="custom-font text-center"> </td>
            </tr>
            <tr>
                <td style="border-left: 3px solid black;"> </td>
                <td> </td>
                <td colspan="3"> </td>
                <td colspan="2"> <p class="custom-font text-center"> </td>
                <td colspan="2"> <p class="custom-font text-center"> </td>
                <td colspan="2"> <p class="custom-font text-center"> </td>
                <td colspan="4"> <p class="custom-font text-center"> </td>
            </tr>
            <tr>
                <td style="border-left: 3px solid black;"> </td>
                <td> </td>
                <td colspan="3"> </td>
                <td colspan="2"> <p class="custom-font text-center"> </td>
                <td colspan="2"> <p class="custom-font text-center"> </td>
                <td colspan="2"> <p class="custom-font text-center"> </td>
                <td colspan="4"> <p class="custom-font text-center"> </td>
            </tr>
            <tr>
                <td style="border-left: 3px solid black;"> </td>
                <td> </td>
                <td colspan="3"> </td>
                <td colspan="2"> <p class="custom-font text-center"> </td>
                <td colspan="2"> <p class="custom-font text-center"> </td>
                <td colspan="2"> <p class="custom-font text-center"> </td>
                <td colspan="4"> <p class="custom-font text-center"> </td>
            </tr>
            <tr>
                <td style="border-left: 3px solid black;"> </td>
                <td> </td>
                <td colspan="3"> </td>
                <td colspan="2"> <p class="custom-font text-center"> </td>
                <td colspan="2"> <p class="custom-font text-center"> </td>
                <td colspan="2"> <p class="custom-font text-center"> </td>
                <td colspan="4"> <p class="custom-font text-center"> </td>
            </tr>
            <tr>
                <td style="border-left: 3px solid black;"> </td>
                <td> </td>
                <td colspan="3"> </td>
                <td colspan="2"> <p class="custom-font text-center"> </td>
                <td colspan="2"> <p class="custom-font text-center"> </td>
                <td colspan="2"> <p class="custom-font text-center"> </td>
                <td colspan="4"> <p class="custom-font text-center"> </td>
            </tr>
            <tr>
                <td style="border-left: 3px solid black;"> </td>
                <td> </td>
                <td colspan="3"> </td>
                <td colspan="2"> <p class="custom-font text-center"> </td>
                <td colspan="2"> <p class="custom-font text-center"> </td>
                <td colspan="2"> <p class="custom-font text-center"> </td>
                <td colspan="4"> <p class="custom-font text-center"> </td>
            </tr>
            <tr>
                <td style="border-left: 3px solid black;"> </td>
                <td> </td>
                <td colspan="3"> </td>
                <td colspan="2"> <p class="custom-font text-center"> </td>
                <td colspan="2"> <p class="custom-font text-center"> </td>
                <td colspan="2"> <p class="custom-font text-center"> </td>
                <td colspan="4"> <p class="custom-font text-center"> </td>
            </tr>
            <tr>
                <td style="border-left: 3px solid black;"> </td>
                <td> </td>
                <td colspan="3"> </td>
                <td colspan="2"> <p class="custom-font text-center"> </td>
                <td colspan="2"> <p class="custom-font text-center"> </td>
                <td colspan="2"> <p class="custom-font text-center"> </td>
                <td colspan="4"> <p class="custom-font text-center"> </td>
            </tr>
            <tr>
                <td style="border-left: 3px solid black;"> </td>
                <td> </td>
                <td colspan="3"> </td>
                <td colspan="2"> <p class="custom-font text-center"> </td>
                <td colspan="2"> <p class="custom-font text-center"> </td>
                <td colspan="2"> <p class="custom-font text-center"> </td>
                <td colspan="4"> <p class="custom-font text-center"> </td>
            </tr>
            <tr>
                <td style="border-left: 3px solid black;"> </td>
                <td> </td>
                <td colspan="3"> </td>
                <td colspan="2"> <p class="custom-font text-center"> </td>
                <td colspan="2"> <p class="custom-font text-center"> </td>
                <td colspan="2"> <p class="custom-font text-center"> </td>
                <td colspan="4"> <p class="custom-font text-center"> </td>
            </tr>
            <tr>
                <td style="border-left: 3px solid black;"> </td>
                <td> </td>
                <td colspan="3"> </td>
                <td colspan="2"> <p class="custom-font text-center"> </td>
                <td colspan="2"> <p class="custom-font text-center"> </td>
                <td colspan="2"> <p class="custom-font text-center"> </td>
                <td colspan="4"> <p class="custom-font text-center"> </td>
            </tr>
            <tr>
                <td style="border-left: 3px solid black;"> </td>
                <td> </td>
                <td colspan="3"> </td>
                <td colspan="2"> <p class="custom-font text-center"> </td>
                <td colspan="2"> <p class="custom-font text-center"> </td>
                <td colspan="2"> <p class="custom-font text-center"> </td>
                <td colspan="4"> <p class="custom-font text-center"> </td>
            </tr>
            <tr>
                <td style="border-left: 3px solid black;"> </td>
                <td> </td>
                <td colspan="3"> </td>
                <td colspan="2"> <p class="custom-font text-center"> </td>
                <td colspan="2"> <p class="custom-font text-center"> </td>
                <td colspan="2"> <p class="custom-font text-center"> </td>
                <td colspan="4"> <p class="custom-font text-center"> </td>
            </tr>
    </table>

    <table>
        <thead>
            <tr>
                <td rowspan="6" colspan="10" style="border-left: 3px solid black;" > </td>
                <td> PDC</td>
                <td> QC </td>
                <td> SPV </td>
                <td> PPC </td>
            </tr>
            <tr>
                <td img src="{{ asset('img/logopatria.png') }}" height="40">  </td>
                <td img src="{{ asset('img/logopatria.png') }}" height="40">  </td>
                <td img src="{{ asset('img/logopatria.png') }}" height="40">  </td>
                <td img src="{{ asset('img/logopatria.png') }}" height="40">  </td>
            </tr>
            <tr>
                <td> Date: 27/10/2023 </td>
                <td> Date: 27/10/2023 </td>
                <td> Date: 27/10/2023 </td>
                <td> Date: 27/10/2023 </td>
            </tr>
            <tr>
                <td> Name : Rifki </td>
                <td> Name : Pandu </td>
                <td> Name : A.Rizal </td>
                <td> Name : Fauzan </td>
            </tr>
            <tr>
            </tr>
        </thead>
    </table>

</body>
</html>

@endsection   