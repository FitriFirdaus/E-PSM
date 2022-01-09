<?php

$count = 1;
$countpeserta = 1;
$kos_akhir=0;
$details = session()->get('details_application');
$details = json_decode($details[0]);



if (!$details) {
    // dd($details);
}



// dd($details['notes']);
// dd(json_decode($details[0]));

$total_peserta = session()->get('total_peserta');
//$total_peserta = json_decode($total_peserta[0]);

if (!$total_peserta) {
    // dd($total_peserta);
}

// dd($total_peserta);

$butiran_peserta = session()->get('butiran_peserta');
//$butiran_peserta = json_decode($butiran_peserta);

// Pengarah
$nama_pengarah = "-";
$jawatan_dalam_persatuan_pengarah = "-";
$Semester_pengarah = "-";
$No_telefon_pengarah= "-";
$CGPA_pengarah="-";
$no_kad_pengarah="-";
//PENASIHAT
 $name_penasihat = "-";
 $No_telefon_penasihat= "-";
 $email_penasihat="-";
if ($butiran_peserta) {
    // dd($butiran_peserta);
    foreach ($butiran_peserta as $peserta ) {
        if($peserta->position=="Pengarah Program"){
              $nama_pengarah = $peserta['name'];
              $jawatan_dalam_persatuan_pengarah = "Pengarah Program";
              $Semester_pengarah = "-";
              $No_telefon_pengarah= "-";
              $CGPA_pengarah="-";
              $no_kad_pengarah=$peserta['staff_id'];
        }
        if($peserta->position=="Penasihat Kelab")
        {
            $name_penasihat = $peserta['name'];
            $No_telefon_penasihat= "-";
            $email_pengarah="-";
        }
    }
    
}

// dd($butiran_peserta);

$detailbajet = session()->get('butiran_bajet');
$detailbajet = json_decode($detailbajet[0]);

if (!$details) {
    // dd($details);
}

$butiran_bajet = session()->get('butiran_bajet');
$butiran_bajet = json_decode($butiran_bajet);

if (!$butiran_bajet) {
    // dd($butiran_bajet);
}

// dd($butiran_bajet);

// $total_bajet = session()->get('butiran_totalbajet');
// $total_bajet = json_decode($total_bajet[0]);

// if (!$total_bajet) {
//     // dd($details);
// }

$butiran_impact = session()->get('butiran_impact');
$butiran_impact = json_decode($butiran_impact[0]);

if (!$butiran_impact) {
    // dd($butiran_impact);
}


$semakan = session()->get('laporan_admins');

$total_pensyarah = session()->get('total_pensyarah'); 
$total_alumni = session()->get('total_alumni');
$total_industri = session()->get('total_industri'); 
$total_lain = session()->get('total_lain');

$total_jemputan = $total_alumni + $total_industri + $total_lain;

$nilaibajet="0.00";



$Surat_rasmi = false;
$kertas_kerja = false;
$minit_mesyuarat = false;
$dokument_sokongan = false;
$butiran_document = session()->get('butiran_document');
if($butiran_document){
    foreach ($butiran_document as $document ) {
        if($document->file_for == 'lampiran_penceramah')
        $butiran_document = true;
        if($document->file_for == 'lampiran_kerja')
        $kertas_kerja = true;
        
    }
}

$I1=false;
$I2=false;
$I3=false;
$I4=false;
$I5=false;
$I6=false;
$I7=false;

$P1=false;
$P2=false;
$P3=false;
$P4=false;
$P5=false;
$P6=false;
$P7=false;

$promoter = explode(", ", $butiran_impact->to_promoter);
foreach ($promoter as $P) {
   if($P =='KI1')
   $P1=true;
   if($P =='KI2')
   $P2=true;
   if($P =='KI3')
   $P3=true;
   if($P =='KI4')
   $P4=true;
   if($P =='KI5')
   $P5=true;
   if($P =='KI6')
   $P1=true;
   if($P =='KI7')
   $P7=true;
}
$participants = explode(", ", $butiran_impact->to_participants);
foreach ($participants  as $P) {
   if($P =='KI1')
   $I1=true;
   if($P =='KI2')
   $I2=true;
   if($P =='KI3')
   $I3=true;
   if($P =='KI4')
   $I4=true;
   if($P =='KI5')
   $I5=true;
   if($P =='KI6')
   $I1=true;
   if($P =='KI7')
   $I1=true;

}

/*
 $nilaibajet=$butiran_bajet['peserta_food'] + $butiran_bajet['pensyarah_food'] + $butiran_bajet['jemputan_food']
                                        + $butiran_bajet['lodging_cost']+ $butiran_bajet['baju_cost']+ $butiran_bajet['honorarium_cost']
                                        + $butiran_bajet['souvenir_1']+ $butiran_bajet['souvenir_2']+ $butiran_bajet['trophy']+ $butiran_bajet['gift_single']
                                        + $butiran_bajet['gift_group'].".00";

*/
//$butiran_peserta = json_decode($butiran_peserta);
?>
<div style="page-break-after:always">
    <table style="border: 1px solid black;
 border-collapse: collapse;padding: 5px;">
        <tbody>
            <tr>
                <th colspan="2">
                    <div style="margin-top: 5px">
                        <img src="https://i.pinimg.com/736x/20/f0/81/20f08181138d3047c8b8ee8ea057ef1d.jpg" width="150">
                    </div>
                </th>
                <th colspan="4">
                    <h3>BORANG PERMOHONAN AKTIVITI
                        PELAJAR BAHAGIAN HAL EHWAL PELAJAR
                        UNIVERSITI TEKNOLOGI MARA</h3>

                </th>
            </tr>
            <tr>
                <th colspan="6" style="border: 1px solid black;font-size: 12px;text-align: center;border-collapse: collapse;background-color: #ccccff;">
                    A.RINGKASAN PERMOHONAN AKTIVITI PELAJAR
                </th>
            </tr>
           
            <tr>
                <th colspan="2" style="width: 20%;font-size: 10px;border: 1px solid black;text-align:center">
                    <div>
                        <b>TARIKH TERIMA PERMOHONAN</b>
                    </div>
                </th>
                <td colspan="2" style="width: 40%;border: 1px solid black;">
                    {{$details->created_at}}
                </td>
                <td colspan="2" style="width: 40%;font-size: 12px;">
                    <div>
                        KOD PERSATUAN:
                        <table style="border: 1px solid black;padding:5px;text-align:center">
                            <tr>
                                <td style="border: 1px solid black;">SH</td>
                                <td style="border: 1px solid black;">TEST</td>
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>
            <tr>
                <th colspan="2" style="width: 20%;font-size: 10px;border: 1px solid black;text-align:center">
                    <div>
                        <b>NAMA PERSATUAN</b><br>
                    </div>

                </th>
                <td colspan="4" style="width: 80%;font-size: 10px;border: 1px solid black;">
                    {{$details->sponsors}}
                </td>
            </tr>
            <tr>
                <th colspan="2" style="width: 20%;font-size: 10px;border: 1px solid black;text-align:center">
                    <div>
                        <b>NAMA AKTIVITI</b>
                    </div>

                </th>
                <td colspan="4" style="width: 80%;font-size: 10px;border: 1px solid black;">
                    {{$details->activity_name}}
                </td>
            </tr>
            <tr>
                <fieldset>
                <th colspan="2" style="width: 20%;font-size: 10px;border: 1px solid black;text-align:center">
                    <div>
                        <b>PERINGKAT AKTIVITI</b> <br>
                        <p style="font-size: 8px;">(Sila tandakan <b>SATU</b> yang berkenaan sahaja)</p>
                    </div>
                </th>
                <td colspan="2" style="width: 40%;font-size: 10px;border: 1px solid black;">
                    <table>
                        <tr>
                            <td>
                                <input type="radio" id="html" name="fav_language" value="HTML"
                                @if ($details->level ==  "Antarabangsa")
                                checked="checked"
                                @endif
                                >
                                <label for="html"> ANTARABANGSA</label><br>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="radio" id="html" name="fav_language" value="HTML" 
                                @if ($details->level ==  "Kebangsaan")
                                checked="checked"
                                @endif
                                >
                                <label for="html"> KEBANGSAAN</label><br>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="radio" id="html" name="fav_language" value="HTML"
                                @if ($details->level ==  "Negeri")
                                checked="checked"
                                @endif
                                >
                                <label for="html"> NEGERI</label><br>


                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="radio" id="html" name="fav_language" value="HTML"
                                @if ($details->level ==  "Daerah")
                                checked="checked"
                                @endif
                                >
                                <label for="html">DAERAH</label><br>


                            </td>
                        </tr>
                    </table>
                </td>
                <td colspan="2" style="width: 40%;font-size: 12px;border: 1px solid black;">
                    <table>
                        <tr>
                            <td>
                                <input type="radio" id="html" name="fav_language" value="HTML"
                                @if ($details->level ==  "Universiti")
                                checked="checked"
                                @endif
                                >


                                <label for="html">UNIVERSITI</label><br>


                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="radio" id="html" name="fav_language" value="HTML"
                                @if ($details->level ==  "Fakulti")
                                checked="checked"
                                @endif
                                >
                                <label for="html"> FAKULTI</label><br>


                            </td>
                        </tr>
                        <tr>
                            <td>

                                <input type="radio" id="html" name="fav_language" value="HTML"
                                @if ($details->level ==  "Persatuan & Kelab")
                                checked="checked"
                                @endif
                                >
                                <label for="html"> PERSATUAN & KELAB</label><br>



                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="radio" id="html" name="fav_language" value="HTML"
                                @if ($details->level ==  "Kolej Kediaman")
                                checked="checked"
                                @endif
                                >
                                <label for="html"> KOLEJ KEDIAMAN</label><br>


                            </td>
                        </tr>
                    </table>
                </td>
            </fieldset>
            </tr>
            <tr>
                <th colspan="2" style="width: 20%;font-size: 12px;text-align:center">
                    <div>
                        <b>KATEGORI AKTIVITI</b>
                        <p style="font-size: 8px;">(Sila tandakan <b>SATU</b> yang berkenaan sahaja)</p>
                    </div>
                </th>
                <td colspan="2" style="width: 40%;font-size: 12px;border: 1px solid black;">
                    <table>
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input type="radio" id="html" name="language1" value="HTML"
                                    @if ($details->category ==  "Akademik & Ilmiah")
                                checked="checked"
                                @endif
                                    >
                                    <label class="form-check-label" for="flexCheckDefault">
                                        AKADEMIK / ILMIAH
                                    </label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input type="radio" id="html" name="language1" value="HTML">
                                    <label class="form-check-label" for="flexCheckDefault"
                                    @if ($details->category ==  "Kebudayaan & Warisan")
                                    checked="checked"
                                    @endif
                                    >
                                        KEBUDAYAAN / WARISAN
                                    </label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input type="radio" id="html" name="language1" value="HTML" 
                                    @if ($details->category ==  "Kerohanian")
                                    checked="checked"
                                    @endif>
                                    <label class="form-check-label" for="flexCheckDefault"
                                    >
                                        KEROHANIAN
                                    </label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input type="radio" id="html" name="language1" value="HTML"
                                    @if ($details->category ==  "Kesukarelawanan")
                                    checked="checked"
                                    @endif>
                                    <label class="form-check-label" for="flexCheckDefault"
                                
                                    >
                                        KESUKARELAWANAN
                                    </label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input type="radio" id="html" name="language1" value="HTML"
                                    @if ($details->category ==  "Keusahawanan")
                                    checked="checked"
                                    @endif
                                    >
                                    <label class="form-check-label" for="flexCheckDefault"
                                   
                                    >
                                        KEUSAHAWANAN
                                    </label>
                                </div>
                            </td>
                        </tr>
                    </table>
                </td>
                <td colspan="2" style="width: 40%;font-size: 10px;border: 1px solid black;">
                    <table>
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input type="radio" id="html" name="language1" value="HTML" 
                                    @if ($details->category ==  "Pengucapan Awam")
                                    checked="checked"
                                    @endif
                                    >
                                    <label class="form-check-label" for="flexCheckDefault"
                                    
                                    >
                                        PENGUCAPAN AWAM
                                    </label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input type="radio" id="html" name="language1" value="HTML"
                                    @if ($details->category ==  "Sains, Teknologi & Inovasi")
                                    checked="checked"
                                    @endif
                                    >
                                    <label class="form-check-label" for="flexCheckDefault"
                                    
                                    >
                                        SAINS, TEKNOLOGI & INOVASI
                                    </label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input type="radio" id="html" name="language1" value="HTML"  
                                    @if ($details->category ==  "Sukan Intelek")
                                    checked="checked"
                                    @endif>
                                    <label class="form-check-label" for="flexCheckDefault"
                                   
                                    >
                                        SUKAN & REKREASI
                                    </label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input type="radio" id="html" name="language1" value="HTML"
                                    @if ($details->category ==  "Wacana Intelek")
                                    checked="checked"
                                    @endif
                                    >
                                    <label class="form-check-label" for="flexCheckDefault"
                                   
                                    >
                                        WACANA INTELEK
                                    </label>
                                </div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <th colspan="2" style="width: 20%;font-size: 12px;border: 1px solid black;text-align:center">
                    <b>TEMPAT AKTIVITI</b>
                </th>
                <td colspan="4" style="width: 80%;font-size: 12px;border: 1px solid black;">
                    {{$details->location}}
                </td>
            </tr>
        </tbody>
    </table>
</div>
<div style="page-break-after:always">
    <table style="border: 1px solid black;
 border-collapse: collapse;padding: 5px;">
        <tbody>
            <tr>
                <th colspan="2" style="width: 20%;font-size: 12px;border: 1px solid black;text-align:center">
                    <b>TARIKH AKTIVITI</b>
                </th>
                <td colspan="4" style="width: 80%;font-size: 12px;border: 1px solid black;">
                {{$details->start_dt}}-{{$details->end_dt}}
                </td>
            </tr>
            
            <tr>
                <th colspan="2" style="width: 20%;font-size: 12px;border: 1px solid black;text-align:center">
                    <b>BILANGAN PESERTA</b>
                </th>
                <td colspan="4" style="width: 26%;">{{$total_peserta }} Perserta/Ajk</td>
            </tr>
            <tr>
                <th colspan="2" style="width: 20%;font-size: 12px;border: 1px solid black;text-align:center">
                    <b>ANGGARAN KOS (RM)</b>

                </th>
                <td colspan="4" style="width: 80%;font-size: 12px;border: 1px solid black;">{{$detailbajet->peserta_food+$detailbajet->pensyarah_food+
                            $detailbajet->jemputan_food+$detailbajet->lodging_cost+$detailbajet->baju_cost+$detailbajet->honorarium_cost+
                            $detailbajet->souvenir_1+$detailbajet->souvenir_2+$detailbajet->trophy+
                            $detailbajet->gift_single+$detailbajet->gift_group}}.00</td>
            </tr>
            <tr>
                <th colspan="2" style="width: 20%;font-size: 9px;border: 1px solid black;text-align:center">
                    <b>ANGGARAN TAJAAN (RM)</b>

                </th>
                <td colspan="4" style="width: 80%;font-size: 12px;border: 1px solid black;">{{$nilaibajet}}</td>
            </tr>
            
        </tbody>
    </table>
    <br> <br> <br>
    <table style="border: 1px solid black;
 border-collapse: collapse;padding: 5px;">
        <tbody>
            <tr>
                <th colspan="8" style="border: 1px solid black;font-size: 10px;text-align: center;border-collapse: collapse;background-color: #ccccff;">
                    <b> B : IMPAK AKTIVITI</b><br>
                    (Sila Senaraikan Sekurang-kurangnya <b>3</b> Impak Utama Pembelajaran Daripada Penganjuran Aktiviti)
                </th>
            </tr>
            <tr>
                <th colspan="3" style="width: 20%;font-size: 8px;border: 1px solid black;text-align:center">
                    <b>1. KEPADA PELAJAR</b>
               
                </th>
                <td colspan="5" style="width: 80%;font-size: 8px;border: 1px solid black;">
                    {{$butiran_impact->to_student}}
                </td>
            </tr>
            <tr>
                <th colspan="3" style="width: 20%;font-size: 8px;border: 1px solid black;text-align:center">
                    <b>2. KEPADA UNIVERSITI</b>
                
                </th>
                <td colspan="5" style="width: 80%;font-size: 8px;border: 1px solid black;">
                    {{$butiran_impact->to_university}}
                </td>
            </tr>
            <tr>
                <th colspan="3" style="width: 20%;font-size: 8px;border: 1px solid black;text-align:center">
                    <b>3. KEPADA KOMUNITI /
                        MASYARAKAT</b>
                </th>
                <td colspan="5" style="width: 80%;font-size: 8px;border: 1px solid black;">
                    {{$butiran_impact->to_community}}
                </td>
            </tr>
            <tr>
                <th colspan="8" style="border: 1px solid black;font-size: 10px;text-align: center;border-collapse: collapse;background-color: #ccccff;">
                    <b>IMPAK AKTIVITI & KEMAHIRAN INSANIAH YANG TERLIBAT</b><br>
                    (Sila Tandakan X di Dalam Petak – Sila Rujuk Borang C Permohonan Kelulusan Aktiviti)
                </th>
            </tr>
            <tr style="font-size: 8px;">
                <td style="width: 12%;border: 1px solid black;">
                    <div>Impak
                        Aktiviti
                        (kategori)</div>
                </td>
                <td style="width: 12%;border: 1px solid black;">
                    <div>Kemahiran
                        Berkomunikasi
                        (KI1)</div>
                </td>
                <td style="width: 14%;border: 1px solid black;">
                    <div>Pemikiran Kritis
                        dan Kemahiran
                        Menyelesaikan
                        Masalah (KI2)</div>
                </td>
                <td style="width: 12%;border: 1px solid black;">
                    <div>Kemahiran
                        Kerja
                        Berpasukan
                        (KI3)</div>
                </td>
                <td style="width: 14%;border: 1px solid black;">
                    <div>Pembelajaran
                        Berterusan
                        dan
                        Pengurusan
                        Maklumat (KI4)</div>
                </td>
                <td style="width: 12%;border: 1px solid black;">
                    <div>Kemahiran
                        Keusahawanan
                        (KI5)</div>
                </td>
                <td style="width: 12%;border: 1px solid black;">
                    <div>Etika dan Moral
                        Profesional (KI6)</div>
                </td>
                <td style="width: 12%;border: 1px solid black;">
                    <div>Kemahiran
                        Kepimpinan
                        (KI7)</div>
                </td>

            </tr>
            <tr>
                <td style="width: 12%;border: 1px solid black;font-size: 8px;text-align:center">
                    <div>Kepada
                        Penganjur</div>
                </td>
                <td style="width: 12%;border: 1px solid black;">
                    <div>
                        @if($P1)
                        X
                        @endif
                    </div>
                </td>
                <td style="width: 14%;border: 1px solid black;">
                    <div>
                        @if($P2)
                        X
                        @endif
                    </div>
                </td>
                <td style="width: 12%;border: 1px solid black;">
                    <div>
                        @if($P3)
                        X
                        @endif
                    </div>
                </td>
                <td style="width: 14%;border: 1px solid black;">
                    <div>
                        @if($P4)
                        X
                        @endif
                    </div>
                </td>
                <td style="width: 12%;border: 1px solid black;">
                    <div>
                        @if($P5)
                        X
                        @endif
                    </div>
                </td>
                <td style="width: 12%;border: 1px solid black;">
                    <div>
                        @if($P6)
                        X
                        @endif
                    </div>
                </td>
                <td style="width: 12%;border: 1px solid black;">
                    <div>
                        @if($P7)
                        X
                        @endif
                    </div>
                </td>
            </tr>
            <tr>
                <td style="width: 12%;border: 1px solid black;font-size: 8px;text-align:center">
                    <div>Kepada
                        Peserta</div>
                </td>
                <td style="width: 12%;border: 1px solid black;">
                    <div>@if($I1)
                        X
                        @endif</div>
                </td>
                <td style="width: 14%;border: 1px solid black;">
                    <div>
                        @if($I2)
                        X
                        @endif
                    </div>
                </td>
                <td style="width: 12%;border: 1px solid black;">
                    <div>
                        @if($I3)
                        X
                        @endif
                    </div>
                </td>
                <td style="width: 14%;border: 1px solid black;">
                    <div>
                        @if($I4)
                        X
                        @endif
                    </div>
                </td>
                <td style="width: 12%;border: 1px solid black;">
                    <div>
                        @if($I5)
                        X
                        @endif
                    </div>
                </td>
                <td style="width: 12%;border: 1px solid black;">
                    <div>
                        @if($I6)
                        X
                        @endif
                    </div>
                </td>
                <td style="width: 12%;border: 1px solid black;">
                    <div>
                        @if($I7)
                        X
                        @endif
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<div style="page-break-after:always">
    <table style="border: 1px solid black;
 border-collapse: collapse;padding: 5px;">
        <tbody>
            <tr>
                <th colspan="8" style="border: 1px solid black;font-size: 10px;text-align: center;border-collapse: collapse;background-color: #ccccff;">
                    C : BUTIR PEMOHON
                </th>
            </tr>
            <tr>
                <td colspan="2" style="font-size:8px;border-bottom: 1px solid black;">
                    <b>NAMA PENGARAH<br>
                        PROGRAM</b>
                </td>
                <td colspan="6" style="border-bottom: 1px solid black;"> :{{$nama_pengarah}}</td>
            </tr>
            <tr>
                <td colspan="2" style="font-size:8px;border-bottom: 1px solid black;">
                    <b>Jawatan Dalam Persatuan
                    </b>
                </td>
                <td colspan="2" style="border-bottom: 1px solid black;border-right:1px solid black;"> :{{$jawatan_dalam_persatuan_pengarah}}</td>
                <td colspan="2" style="font-size:8px;border-bottom: 1px solid black;">
                    <b>No. Telefon Bimbit
                    </b>
                </td>
                <td colspan="2" style="border-bottom: 1px solid black;border-right:1px solid black;"> :{{$No_telefon_pengarah}}</td>
            </tr>
            <tr>
                <td colspan="2" style="font-size:8px;border-bottom: 1px solid black;">
                    <b>Semester
                    </b>
                </td>
                <td colspan="2" style="border-bottom: 1px solid black;border-right:1px solid black;"> :{{$Semester_pengarah}}</td>
                <td colspan="2" style="font-size:8px;border-bottom: 1px solid black;">
                    <b>CGPA Semasa<br>
                        (Dicadangkan 3.00 ke atas)
                    </b>
                </td>
                <td colspan="2" style="font-size:8px;border-bottom: 1px solid black;"> :{{ $CGPA_pengarah}}</td>
            </tr>
            <tr>
                <td colspan="2" style="font-size:8px;border-bottom: 1px solid black;">
                    <b>No. Kad Pelajar
                    </b>
                </td>
                <td colspan="6" style="font-size:8px;border-bottom: 1px solid black;"> :{{$no_kad_pengarah}}</td>
            </tr>
            <tr>
                <td colspan="2" style="font-size:8px;font-size:8px;border-bottom: 1px solid black;">
                    <b>NAMA PENASIHAT<br>
                        PERSATUAN</b>
                </td>
                <td colspan="6" style="font-size:8px;border-bottom: 1px solid black;"> :{{$name_penasihat }}</td>
            </tr>
            <tr>
                <td colspan="2" style="font-size:8px;border-bottom: 1px solid black;">
                    <b>Email
                    </b>
                </td>
                <td colspan="2" style="border-bottom: 1px solid black;border-right:1px solid black;"> :{{$email_penasihat}}</td>
                <td colspan="2" style="font-size:8px;border-bottom: 1px solid black;">
                    <b>No. Telefon Bimbit
                    </b>
                </td>
                <td colspan="2" style="border-bottom: 1px solid black;border-right:1px solid black;"> :{{$No_telefon_penasihat}}</td>
            </tr>
            <tr>
                <td colspan="8" style="font-size:8px;border-bottom: 1px solid black;">PEGAWAI PENGIRING (Sekiranya Ruangan Tidak Mencukupi Sila Buat Lampiran)</td>
            </tr>
            <tr>
                <td colspan="2" style="font-size:8px;border-bottom: 1px solid black;">
                    <b>Nama
                    </b>
                </td>
                <td colspan="2" style="border-bottom: 1px solid black;border-right:1px solid black;"> :</td>
                <td colspan="2" style="font-size:8px;border-bottom: 1px solid black;">
                    <b>No. Telefon Bimbit
                    </b>
                </td>
                <td colspan="2" style="border-bottom: 1px solid black;border-right:1px solid black;"> :</td>
            </tr>
            <tr>
                <td colspan="2" style="font-size:8px;border-bottom: 1px solid black;">
                    <b>Nama
                    </b>
                </td>
                <td colspan="2" style="border-bottom: 1px solid black;border-right:1px solid black;"> :</td>
                <td colspan="2" style="font-size:8px;border-bottom: 1px solid black;">
                    <b>No. Telefon Bimbit
                    </b>
                </td>
                <td colspan="2" style="border-bottom: 1px solid black;border-right:1px solid black;"> :</td>
            </tr>
        </tbody>
    </table>
    <br><br><br>
    <table style="border: 1px solid black;
 border-collapse: collapse;padding: 5px;">
        <tbody>
            <tr>
                <th colspan="8" style="border: 1px solid black;font-size: 10px;text-align: center;border-collapse: collapse;background-color: #ccccff;">
                    <b>D : DOKUMEN SOKONGAN</b><br>
                    (Dokumen Yang Diperlukan Bagi Permohonan Aktiviti Pelajar)
                </th>

            </tr>
            <tr>
                <td colspan="2" style="border: 1px solid black;">Persatuan / Kelab / Kumpulan
                    Pelajar</td>
                <td colspan="6" style="border: 1px solid black;">
                    <input type="checkbox" name="favorite_pet1" value="1" @if($Surat_rasmi)  checked="checked" @endif>Surat Rasmi Permohonan Aktiviti Pelajar<br>
                    <input type="checkbox" name="favorite_pet2" value="1" @if($kertas_kerja)  checked="checked" @endif >Kertas Kerja (Format Seperti dilampiran)<br>
                    <input type="checkbox" name="favorite_pet3" value="1" checked="checked">Borang C<br>
                    <input type="checkbox" name="favorite_pet4" value="1" @if($minit_mesyuarat)  checked="checked" @endif>Minit Mesyuarat Berkaitan<br>
                    <input type="checkbox" name="favorite_pet5" value="1" @if($dokument_sokongan)  checked="checked" @endif>Dokumen Sokongan Yang Berkaitan<br>
                </td>
            </tr>

        </tbody>
    </table>
</div>
<div style="page-break-after:always">

    <table style="border: 1px solid black;
 border-collapse: collapse;padding: 5px;">
        <tbody>
            <tr>
                <th colspan="8" style="border: 1px solid black;font-size: 10px;text-align: center;border-collapse: collapse;background-color: #ccccff;">
                    E : MAKLUMAT PERBELANJAAN
                </th>

            </tr>
            <tr>
                <th colspan="8" style="border: 1px solid black;font-size: 10px;border-collapse: collapse;background-color: #C3C3C3;">
                    i. Makanan dan Penginapan
                </th>
            </tr>
            <tr>
                <td colspan="6" style="font-size: 8px;border: 1px solid black;">
                    <b>Elaun Makanan</b> (Peserta)<br>
                    <table style="border-collapse: collapse;">
                        <tbody>
                            <tr>
                                <td colspan="2">Sarapan pagi</td>
                                <td colspan="1"></td>
                                <td colspan="5" style="text-align: right"> RM {{$detailbajet->peserta_sarapan}} X {{$detailbajet->bil_pelajar}} peserta X {{$detailbajet->peserta_sarapan_day}} hari</td>
                            </tr>
                             <tr>
                                <td colspan="2">Minum pagi</td>
                                <td colspan="1"></td>
                                <td colspan="5" style="text-align: right"> RM {{$detailbajet->peserta_minumpg}} X {{$detailbajet->bil_pelajar}} peserta X {{$detailbajet->peserta_minumpg_day}} hari</td>
                            </tr>
                            <tr>
                                <td colspan="2">Makan Tengahari</td>
                                <td colspan="1"></td>
                                <td colspan="5" style="text-align: right"> RM {{$detailbajet->peserta_tgh}} X {{$detailbajet->bil_pelajar}} peserta X {{$detailbajet->peserta_tgh_day}} hari </td>
                            </tr>
                              <tr>
                                <td colspan="2">Minum petang</td>
                                <td colspan="1"></td>
                                <td colspan="5" style="text-align: right"> RM {{$detailbajet->peserta_minumptg}} X {{$detailbajet->bil_pelajar}} peserta X {{$detailbajet->peserta_minumptg_day}} hari </td>
                            </tr>
                            <tr>
                                <td colspan="2">Makan Malam</td>
                                <td colspan="1"></td>
                                <td colspan="5" style="text-align: right"> RM {{$detailbajet->peserta_mknmlm}} X {{$detailbajet->bil_pelajar}} peserta X {{$detailbajet->peserta_mknmlm_day}} hari</td>
                            </tr>
                              <tr>
                                <td colspan="2">Minum Malam</td>
                                <td colspan="1"></td>
                                <td colspan="5" style="text-align: right"> RM {{$detailbajet->peserta_minummlm}} X {{$detailbajet->bil_pelajar}} peserta X {{$detailbajet->peserta_minummlm_day}} hari </td>
                            </tr>
                              <tr>
                                <td colspan="2">Sahur</td>
                                <td colspan="1"></td>
                                <td colspan="5" style="text-align: right">RM {{$detailbajet->peserta_sahur}} X {{$detailbajet->bil_pelajar}} peserta X {{$detailbajet->peserta_sahur_day}} hari </td>
                            </tr>
                             <tr>
                                <td colspan="2">Berbuka</td>
                                <td colspan="1"></td>
                                <td colspan="5" style="text-align: right">RM {{$detailbajet->peserta_sarapan}} X {{$detailbajet->bil_pelajar}} peserta X {{$detailbajet->peserta_sarapan_day}} hari</td>
                            </tr>   
                        </tbody>
                    </table>
                </td>
                <td colspan="2" style="border: 1px solid black;">RM{{$detailbajet->peserta_food}}</td>
            </tr>
            <tr>
                <td colspan="6" style="font-size: 8px;border: 1px solid black;">
                    <b>Elaun Makanan</b> (Pensyarah)<br>
                    <table style="border-collapse: collapse;">
                        <tbody>
                            <tr>
                                <td colspan="2">Sarapan pagi</td>
                                <td colspan="1"></td>
                                <td colspan="5" style="text-align: right"> RM12 X {{$detailbajet->bil_pensyarah}} pensyarah X {{$detailbajet->pensyarah_sarapan_day}} hari </td>
                            </tr>
                             <tr>
                                <td colspan="2">Minum pagi</td>
                                <td colspan="1"></td>
                                <td colspan="5" style="text-align: right"> RM12 X {{$detailbajet->bil_pensyarah}} pensyarah X {{$detailbajet->pensyarah_minumpg_day}} hari </td>
                            </tr>
                            <tr>
                                <td colspan="2">Makan Tengahari</td>
                                <td colspan="1"></td>
                                <td colspan="5" style="text-align: right"> RM12 X {{$detailbajet->bil_pensyarah}} pensyarah X {{$detailbajet->pensyarah_tgh_day}} hari </td>
                            </tr>
                              <tr>
                                <td colspan="2">Minum petang</td>
                                <td colspan="1"></td>
                                <td colspan="5" style="text-align: right"> RM12 X {{$detailbajet->bil_pensyarah}} pensyarah X {{$detailbajet->pensyarah_minumptg_day}} hari </td>
                            </tr>
                            <tr>
                                <td colspan="2">Makan Malam</td>
                                <td colspan="1"></td>
                                <td colspan="5" style="text-align: right"> RM12 X {{$detailbajet->bil_pensyarah}} pensyarah X {{$detailbajet->pensyarah_mknmlm_day}} hari </td>
                            </tr>
                              <tr>
                                <td colspan="2">Minum Malam</td>
                                <td colspan="1"></td>
                                <td colspan="5" style="text-align: right"> RM12 X {{$detailbajet->bil_pensyarah}} pensyarah X {{$detailbajet->pensyarah_minummlm_day}} hari </td>
                            </tr>
                              <tr>
                                <td colspan="2">Sahur</td>
                                <td colspan="1"></td>
                                <td colspan="5" style="text-align: right"> RM12 X {{$detailbajet->bil_pensyarah}} pensyarah X {{$detailbajet->pensyarah_sahur_day}} hari </td>
                            </tr>
                             <tr>
                                <td colspan="2">Berbuka</td>
                                <td colspan="1"></td>
                                <td colspan="5" style="text-align: right"> RM12 X {{$detailbajet->bil_pensyarah}} pensyarah X {{$detailbajet->pensyarah_sarapan_day}} hari </td>
                            </tr> 
                        </tbody>
                    </table>
                </td>
                <td colspan="2" style="border: 1px solid black;"> RM{{$detailbajet->pensyarah_food}} </td>
            </tr>
     <tr>
                <td colspan="6" style="font-size: 8px;border: 1px solid black;">
                    <b>Elaun Makanan</b> (Pensyarah)<br>
                    <table style="border-collapse: collapse;">
                        <tbody>
                            <tr>
                                <td colspan="2">Sarapan pagi</td>
                                <td colspan="1"></td>
                                <td colspan="5" style="text-align: right"> RM12 X {{$detailbajet->bil_jemputan }} jemputan  X {{$detailbajet->jemputan_sarapan_day}} hari </td>
                            </tr>
                             <tr>
                                <td colspan="2">Minum pagi</td>
                                <td colspan="1"></td>
                                <td colspan="5" style="text-align: right"> RM12 X {{$detailbajet->bil_jemputan }} jemputan  X {{$detailbajet->jemputan_minumpg_day}} hari </td>
                            </tr>
                            <tr>
                                <td colspan="2">Makan Tengahari</td>
                                <td colspan="1"></td>
                                <td colspan="5" style="text-align: right"> RM12 X {{$detailbajet->bil_jemputan }} jemputan  X {{$detailbajet->jemputan_tgh_day}} hari </td>
                            </tr>
                              <tr>
                                <td colspan="2">Minum petang</td>
                                <td colspan="1"></td>
                                <td colspan="5" style="text-align: right"> RM12 X {{$detailbajet->bil_jemputan }} jemputan  X {{$detailbajet->jemputan_minumptg_day}} hari </td>
                            </tr>
                            <tr>
                                <td colspan="2">Makan Malam</td>
                                <td colspan="1"></td>
                                <td colspan="5" style="text-align: right"> RM12 X {{$detailbajet->bil_jemputan }} jemputan  X {{$detailbajet->jemputan_mknmlm_day}} hari </td>
                            </tr>
                              <tr>
                                <td colspan="2">Minum Malam</td>
                                <td colspan="1"></td>
                                <td colspan="5" style="text-align: right"> RM12 X {{$detailbajet->bil_jemputan }} jemputan  X {{$detailbajet->jemputan_minummlm_day}} hari </td>
                            </tr>
                              <tr>
                                <td colspan="2">Sahur</td>
                                <td colspan="1"></td>
                                <td colspan="5" style="text-align: right"> RM12 X {{$detailbajet->bil_jemputan }} jemputan  X {{$detailbajet->jemputan_sahur_day}} hari </td>
                            </tr>
                             <tr>
                                <td colspan="2">Berbuka</td>
                                <td colspan="1"></td>
                                <td colspan="5" style="text-align: right"> RM12 X {{$detailbajet->bil_jemputan }} jemputan  X {{$detailbajet->jemputan_sarapan_day}} hari </td>
                            </tr> 
                        </tbody>
                    </table>
                </td>
                <td colspan="2" style="border: 1px solid black;"> RM{{$detailbajet->jemputan_food}} </td>
            </tr>
            <tr>
                <td colspan="6" style="font-size: 8px;border: 1px solid black;">Penginapan<br>
                    <table style="border-collapse: collapse;">
                        <tbody>
                            <tr>
                                <td colspan="3">
                                    <ul>
                                        <li>Penginapan (RM) </li>
                                    </ul>
                                </td>
                                <td colspan="5" style="text-align: right">RM {{$detailbajet->lodging_price}} X {{$detailbajet->bil_pelajar}} peserta X {{$detailbajet->event_day}} hari</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td colspan="2" style="border: 1px solid black;">RM{{$detailbajet->lodging_cost}}</td>
            </tr>
            <tr>
                <th colspan="8" style="border: 1px solid black;font-size: 10px;border-collapse: collapse;background-color: #C3C3C3;">
                    ii. Keperluan Program
                </th>
            </tr>
            <tr>
                <td colspan="8" style="font-size: 8px;border: 1px solid black;"><b>Peralatan/Keperluan Program</b><br>
                    <table style="border-collapse: collapse;">
                        <tbody>
                            <tr>
                                <td colspan="8">
                                   {{$detailbajet->equipment_list}}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="6" style="font-size: 8px;border: 1px solid black;"> Pakaian (RM) <br>
                </td>
                <td colspan="2" style="border: 1px solid black;">RM{{$detailbajet->baju_cost}}</td>
            </tr>
        </tbody>
    </table>
</div>
<div style="page-break-after:always">
    <table style="border: 1px solid black;
    border-collapse: collapse;padding: 5px;">
           <tbody>
            <tr>
                <th colspan="8" style="border: 1px solid black;font-size: 10px;border-collapse: collapse;background-color: #C3C3C3;">
                    iii. Honorarium
                </th>
            </tr>
            <tr>
                <td colspan="6" style="border: 1px solid black;">
                    <h5>Honorarium (Ceramah)</h5>
                    <table style="font-size: 8px">
                        <tr>
                            <td>Kump. Pengurusan Tertinggi :</td>
                            <td></td>
                            <td>RM 300 X {{$detailbajet->bil_tinggi}}</td>
                        </tr>
                        <tr>
                            <td>Kump. Pengurusan & Prefesional ( Gred 53 & 54) :</td>
                            <td></td>
                            <td>RM 200 X {{$detailbajet->bil_5354}}</td>
                        </tr>
                        <tr>
                            <td>Kump. Pengurusan & Prefesional ( Gred 45 & 52) :</td>
                            <td></td>
                            <td>RM 150 X {{$detailbajet->bil_4552}}</td>
                        </tr>
                        <tr>
                            <td>Kump. Pengurusan & Prefesional ( Gred 41 & 44) :</td>
                            <td></td>
                            <td>RM 120 X {{$detailbajet->bil_4144}}</td>
                        </tr>
                        <tr>
                            <td>Kump. Sokongan :</td>
                            <td></td>
                            <td>RM 80 X {{$detailbajet->bil_kump}}</td>
                        </tr>
                    </table>
                </td>
                <td colspan="2" style="border-left: 1px solid black;">RM{{$detailbajet->honorarium_cost}}</td>
            </tr>
              <tr>
                <td colspan="6" style="border: 1px solid black;font-size:10px">
                    <b>
                        <table>
                            <tr>
                                <td colspan="3">Nilai Lain :</td>
                            </tr>
                        </table>
                    </b>
                </td>
                <td colspan="2" style="border: 1px solid black;">RM{{$detailbajet->price_hono*$detailbajet->bil_hono}}</td>
            </tr>
              <tr>
                <td colspan="6" style="border: 1px solid black;font-size:10px">
                    <b>
                        <table>
                            <tr>
                                <td colspan="3">Jurulatih-STAFF (Bukan Tugas Hakiki) :</td>
                            </tr>
                        </table>
                    </b>
                </td>
                <td colspan="2" style="border: 1px solid black;">RM{{50*$detailbajet->staf_hour*$detailbajet->staff_num}}</td>
            </tr>
            <tr>
                <td colspan="6" style="border: 1px solid black;font-size:10px">
                    <b>
                        <table>
                            <tr>
                                <td colspan="3">Jurulatih-PELAJAR :</td>
                            </tr>
                        </table>
                    </b>
                </td>
                <td colspan="2" style="border: 1px solid black;">RM{{15*$detailbajet->stud_hour*$detailbajet->stud_num}}</td>
            </tr>
            <tr>
                <td colspan="6" style="border: 1px solid black;font-size:10px">
                    <b>
                        <table>
                            <tr>
                                <td colspan="3">Cenderamata Jemputan Pemimpin Luar (RM) :</td>
                            </tr>
                        </table>
                    </b>
                </td>
                <td colspan="2" style="border: 1px solid black;"> {{$detailbajet->souvenir_1}}</td>
            </tr>
            
            
           </tbody>
       </table>
</div>
<div style="page-break-after:always">
    <table style="border: 1px solid black;
    border-collapse: collapse;padding: 5px;">
     <tr>
        <th colspan="8" style="border: 1px solid black;font-size: 10px;border-collapse: collapse;background-color: #C3C3C3;">
            iv. Hadiah Program/Pertandingan
        </th>
    </tr>
    <tr>
        <td colspan="6" style="border: 1px solid black;">
            <h4>Piala Pusingan</h4>
            <ul style="font-size: 8px">
                <li>Peringkat UiTM/Kampus/Fakulti/Kolej/IPTA/Negeri/Kebangsaan dan setaraf – maksima RM300.00</li>
                <li>Peringkat antarabangsa maksima RM500.00</li>
            </ul>
        </td>
        <td colspan="6" style="border: 1px solid black;">{{$detailbajet->trophy}}</td>
    </tr>
    <tr>
        <td colspan="6" style="border: 1px solid black;">
            <h5>Hadiah Individu (Piala Iringan/ Wang Tunai/ Barangan Lain) melibatkan pertandignan akademik/ aktiviti pelajar</h5>
            <p style="font-size: 8px">
                *Peringkat UiTM/ Kampus/ Fakulti/ Kolej/ Setaraf<br>
                <table>
                    <tr>
                        <td><ul><li>Pertama</li></ul></td>
                        <td></td>
                        <td>RM100.00</td>
                    </tr>
                    <tr>
                        <td><ul><li>Kedua</li></ul></td>
                        <td></td>
                        <td>RM75.00</td>
                    </tr>
                    <tr>
                        <td><ul><li>Ketiga</li></ul></td>
                        <td></td>
                        <td>RM50.00</td>
                    </tr>
                </table>
                *Peringkat IPTA/ Negeri/ Kebangsaan/ Setaraf<br>
                <table>
                    <tr>
                        <td><ul><li>Pertama</li></ul></td>
                        <td></td>
                        <td>RM150.00</td>
                    </tr>
                    <tr>
                        <td><ul><li>Kedua</li></ul></td>
                        <td></td>
                        <td>RM100.00</td>
                    </tr>
                    <tr>
                        <td><ul><li>Ketiga</li></ul></td>
                        <td></td>
                        <td>RM70.00</td>
                    </tr>
                </table>
                *Peringkat Antarabangsa<br>
                <table>
                    <tr>
                        <td><ul><li>Pertama</li></ul></td>
                        <td></td>
                        <td>RM200.00</td>
                    </tr>
                    <tr>
                        <td><ul><li>Kedua</li></ul></td>
                        <td></td>
                        <td>RM100.00</td>
                    </tr>
                    <tr>
                        <td><ul><li>Ketiga</li></ul></td>
                        <td></td>
                        <td>RM70.00</td>
                    </tr>
                </table>
            </p>
        </td>
        <td colspan="2" style="border: 1px solid black;"> {{$detailbajet->gift_single}}</td>
    </tr>
    <tr>
        <td colspan="6" style="border: 1px solid black;">
            <h5>Hadiah Kumpulan (Piala Iringan/ Wang Tunai/ Barangan Lain) melibatkan pertandignan akademik/ aktiviti pelajar</h5>
            <p style="font-size: 8px">
                *Peringkat UiTM/ Kampus/ Fakulti/ Kolej/ Setaraf<br>
                <table>
                    <tr>
                        <td><ul><li>Pertama</li></ul></td>
                        <td></td>
                        <td>RM200.00</td>
                    </tr>
                    <tr>
                        <td><ul><li>Kedua</li></ul></td>
                        <td></td>
                        <td>RM150.00</td>
                    </tr>
                    <tr>
                        <td><ul><li>Ketiga</li></ul></td>
                        <td></td>
                        <td>RM100.00</td>
                    </tr>
                </table>
                *Peringkat IPTA/ Negeri/ Kebangsaan/ Setaraf<br> 
                <table>
                    <tr>
                        <td><ul><li>Pertama</li></ul></td>
                        <td></td>
                        <td>RM500.00</td>
                    </tr>
                    <tr>
                        <td><ul><li>Kedua</li></ul></td>
                        <td></td>
                        <td>RM400.00</td>
                    </tr>
                    <tr>
                        <td><ul><li>Ketiga</li></ul></td>
                        <td></td>
                        <td>RM300.00</td>
                    </tr>
                </table>
                *Peringkat Antarabangsa<br>
                <table>
                    <tr>
                        <td><ul><li>Pertama</li></ul></td>
                        <td></td>
                        <td>RM1 000.00</td>
                    </tr>
                    <tr>
                        <td><ul><li>Kedua</li></ul></td>
                        <td></td>
                        <td>RM750.00</td>
                    </tr>
                    <tr>
                        <td><ul><li>Ketiga</li></ul></td>
                        <td></td>
                        <td>RM500.00</td>
                    </tr>
                </table>
            </p>
        </td>
          <td colspan="2" style="border: 1px solid black;">{{$detailbajet->gift_group}}</td>
    </tr>
    </table>
</div>

<div style="page-break-after:always">
    <table  style="border: 1px solid black;
    border-collapse: collapse;padding: 5px;font-size:10px">
    
    <tr>
        <th colspan="9" style="border: 1px solid black;font-size: 12px;text-align: center;border-collapse: collapse;background-color: #ccccff;">
            F : ULASAN DAN KELULUSAN
        </th>
    </tr>
    <tr>
        <th colspan="9" style="border: 1px solid black;font-size: 10px;border-collapse: collapse;background-color: #C3C3C3;">
            1. ULASAN PEMOHON
        </th>
    </tr>
    <tr>
        <td colspan="3" style="border: 1px solid black;">Saya mengesahkan maklumat di atas adalah 
            benar</td>
        <td colspan="3" style="border: 1px solid black;">
        <table>
            <tr>
                <br>
                <br>
              
                <td>...................</td>
            </tr>
            <tr>
                <td>Tandangan</td>
            </tr>
            <tr>
                <td>Nama:</td>
            </tr>
            <tr>
                <td>Tarikh :</td>
            </tr>
        </table>
        </td>
        <td colspan="3" style="border: 1px solid black;">
        COP PENGESAHAN
           <br><br>   <br>
        </td>
    </tr>
    <tr>
        <th colspan="9" style="border: 1px solid black;font-size: 10px;border-collapse: collapse;background-color: #C3C3C3;">
            2. ULASAN PENASIHAT PERSATUAN/ KELAB
        </th>
    </tr>
    <tr>
        <td colspan="3" style="border: 1px solid black;">
        Saya telah membaca kertas kerja ini dan mengesahkan aktiviti yang dirancang boleh
        dilaksanakan. Sekiranya saya tidak dapat mengikut aktiviti ini , saya bersetuju
        melantik seorang pengawai pengiring bagi aktiviti yang akan bersama pelajar
        sepanjang aktiviti diadakan
        </td>
        <td colspan="3" style="border: 1px solid black;">
        <table>
            <tr>
                <br>
                <br>
                <br>
                <td>...................</td>
            </tr>
            <tr>
                <td>Tandangan</td>
            </tr>
            <tr>
                <td>Nama:</td>
            </tr>
            <tr>
                <td>Tarikh :</td>
            </tr>
        </table>
        </td>
        <td colspan="3" style="border: 1px solid black;">
        COP PENGESAHAN
         <br><br> <br>
        </td>
    </tr>
    <tr>
        <th colspan="9" style="border: 1px solid black;font-size: 10px;border-collapse: collapse;background-color: #C3C3C3;">
            3. ULASAN FAKULTI (DEKAN/ TIMBALAN DEKAN HEP) / PENGETUA KOLEJ
        </th>
    </tr>
    <tr>
        <td colspan="3" style="border: 1px solid black;">
       Untuk disi oleh Persatuan dibawah faklti/Kolej sahaja
       <input type="radio" name="" id="">
       <input type="radio" name="" id="">
       ulasan
        </td>
        <td colspan="3" style="border: 1px solid black;">
        <table>
            <tr>
                <br>
                <br>
               <br>
                <td>...................</td>
            </tr>
            <tr>
                <td>Tandangan</td>
            </tr>
            <tr>
                <td>Nama:</td>
            </tr>
            <tr>
                <td>Tarikh :</td>
            </tr>
        </table>
        </td>
        <td colspan="3" style="border: 1px solid black;">
        COP PENGESAHAN
        <br><br><br>
        </td>
    </tr>
    </table>
</div>
<div style="page-break-after:always">
    <table  style="border: 1px solid black;
    border-collapse: collapse;padding: 5px;font-size:10px">
    <tr>
        <th colspan="9" style="border: 1px solid black;font-size: 8px;border-collapse: collapse;background-color: #C3C3C3;">
            4. SEMAKAN DAN ULASAN BAHAGIAN HEP (PUSAT KEGIATAN PELAJAR/ UNIT KEGIATAN PELAJAR KAMPUS NEGERI)
        </th>
    </tr>
    <tr>
        <td colspan="6" style="border: 1px solid black;">Senarai Semak</td>
        <td colspan="1" style="border: 1px solid black;">Ya / Tidak</td>
        <td colspan="2" style="border: 1px solid black;">Catatan</td>
    </tr>
    <tr>
        <td colspan="6" style="border: 1px solid black;">a. Borang permohonan (Borang C) lengkap diisi</td>
        <td colspan="1" style="border: 1px solid black;"></td>
        <td colspan="2" style="border: 1px solid black;"></td>
    </tr>
    <tr>
        <td colspan="6" style="border: 1px solid black;">b. Persatuan/ kelab berdaftar berstatus AKTIF</td>
        <td colspan="1" style="border: 1px solid black;"></td>
        <td colspan="2" style="border: 1px solid black;"></td>
    </tr>
    <tr>
        <td colspan="6" style="border: 1px solid black;">c. Aktiviti yang dianjurkan termasuk dalam perancangan tahunan persatuan</td>
        <td colspan="1" style="border: 1px solid black;"></td>
        <td colspan="2" style="border: 1px solid black;"></td>
    </tr>
    <tr>
        <td colspan="6" style="border: 1px solid black;"> d. Tarikh/ masa tidak bercanggah dengan masa kuliah/ aktiviti utama university</td>
        <td colspan="1" style="border: 1px solid black;"></td>
        <td colspan="2" style="border: 1px solid black;"></td>
    </tr>
    <tr>
        <td colspan="6" style="border: 1px solid black;"> e. Pengawai pengiring telah dilantk iaitu penasihat atau orang lain yang telah
            menadapat kelulusan/ dilantik. (Nisbah 1 pengiring : 40 orang pelajar)</td>
        <td colspan="1" style="border: 1px solid black;"></td>
        <td colspan="2" style="border: 1px solid black;"></td>
    </tr>
    <tr>
        <td colspan="6" style="border: 1px solid black;"> f. Perancangan/ persiapan mengambil kira aspek keselamatan, kebersihan, kesihatan
            dan keselesaan peserta dan masyarakat sekeliling</td>
        <td colspan="1" style="border: 1px solid black;"></td>
        <td colspan="2" style="border: 1px solid black;"></td>
    </tr>
    <tr>
        <td colspan="6" style="border: 1px solid black;">g. Jika ada penceramah/ panel jemputan – nama, jawatan, organisasi dan latar
            belakang (CV) penceramah telah disertakan bersama Borang C</td>
        <td colspan="1" style="border: 1px solid black;"></td>
        <td colspan="2" style="border: 1px solid black;"></td>
    </tr>
    <tr>
        <td colspan="6" style="border: 1px solid black;">h. Butiran perbelanjaan ikut kadar yang telah ditetapkan/ telah dipinda dan
            diseragamkan dengan perkadaran dan kelulusan-kelulusan terdahulu
           </td>
        <td colspan="1" style="border: 1px solid black;"></td>
        <td colspan="2" style="border: 1px solid black;"></td>
    </tr>
    <tr>
        <td colspan="3">Ulasan</td>
        <td colspan="3" style="border: 1px solid black;">
            <table>
                <tr>
                    <br>
                    <br>
                    <br>
                    <td>...................</td>
                </tr>
                <tr>
                    <td>Tandangan</td>
                </tr>
                <tr>
                    <td>Nama:</td>
                </tr>
                <tr>
                    <td>Tarikh :</td>
                </tr>
            </table>
        </td>
        <td colspan="3" style="border: 1px solid black;">
            COP PENGESAHAN
            <br>
            <br>
            <br>
        </td>
    </tr>
    </table>
</div>
<div style="page-break-after:always">
    <table  style="border: 1px solid black;
    border-collapse: collapse;padding: 5px;">
        <tr>
            <th colspan="9" style="border: 1px solid black;font-size: 10px;text-align: center;border-collapse: collapse;background-color: #ccccff;">
                5. KELULUSAN TNC HEP/ PENGARAH PEMBANGUNAN PELAJAR/ TIMBALAN REKTOR (HEP)
            </th>
        </tr>
    <tr>
        <td colspan="3" style="border: 1px solid black;font-size: 8px;">

            <input type="radio" name="" id="">
            <input type="radio" name="" id="">NOTA :
 Kelulusan PPP – RM6,000.00 dan kebawah
 Kelulusan TR (HEP) RM6,000.00 dan kebawah
 Kelulusan TNC HEP – RM10,000.00 dan
 kebawah
             </td>
             <td colspan="3" style="border: 1px solid black;">
             <table>
                 <tr>
                     <br> <br> <br>
                     <td>...................</td>
                 </tr>
                 <tr>
                     <td>Tandangan</td>
                 </tr>
                 <tr>
                     <td>Nama:</td>
                 </tr>
                 <tr>
                     <td>Tarikh :</td>
                 </tr>
             </table>
             </td>
             <td colspan="3" style="border: 1px solid black;">
             COP PENGESAHAN
              <br> <br> <br>
             </td>
    </tr>
    <tr>
        <th colspan="9" style="border: 1px solid black;font-size: 10px;text-align: center;border-collapse: collapse;background-color: #ccccff;">
            6. KELULUSAN JAWATANKUASA AKAUN AMANAH HEP
        </th>
    </tr>
    <tr>
        <td colspan="3" style="border: 1px solid black;">
            <input type="radio" name="" id="">
            <input type="radio" name="" id="">
             </td>
             <td colspan="3" style="border: 1px solid black;">
             <table>
                 <tr>
                      <br> <br> <br>
                     <td>...................</td>
                 </tr>
                 <tr>
                     <td>Tandangan</td>
                 </tr>
                 <tr>
                     <td>Nama:</td>
                 </tr>
                 <tr>
                     <td>Tarikh :</td>
                 </tr>
             </table>
             </td>
             <td colspan="3" style="border: 1px solid black;">
             COP PENGESAHAN
              <br> <br> <br>
             </td>
    </tr>
    <tr>
        <th colspan="9" style="border: 1px solid black;font-size: 10px;text-align: center;border-collapse: collapse;background-color: #ccccff;">
            7. KEGUNAAN PEJABAT
        </th>
    </tr>
    <tr>
        <td colspan="4"  style="border: 1px solid black;">Keputusan :<br><br><br><br><br><br></td>
        <td colspan="5"  style="border: 1px solid black;">Catatan :<br><br><br><br><br><br></td>
    </tr>
    </table>
    <table>
        <tr>
            <td colspan="9">
                <p style="font-size: 8px">
                    <br>
                    <b>Perhatian</b><br><br>
                    1. Borang yang lengkap diisi hendaklah dimajukan ke Pusat Kegiatan Pelajar selewat-lewatnya 4 MINGGU dari tarikh<br>
                    program. BORANG YANG TIDAK LENGKAP TIDAK AKAN DIPROSES.<br>
                    2. Sila tambah lampiran sekiranya ruang yang disediakan tidak mencukupi .<br>
                    3. Laporan beserta gambar aktiviti (CD/saiz 4R) hendaklah dikemukakan ke Pusat Kegiatan Pelajar/ Fakulti/ HEP<br>
                    Cawangan selewat-lewatnya 14 HARI setelah program dijalankan. JIKA GAGAL BERBUAT DEMIKIAN, SEBARANG<br>
                    PERMOHONAN DI MASA HADAPAN BOLEH UNTUK TIDAK DIPERTIMBANGKAN<br>
                </p>
            </td>
           
        </tr>
    </table>
</div>
<div style="page-break-after:always">
    <table  style="border: 1px solid black;
    border-collapse: collapse;padding: 5px;font-style:10px">
    <tr style="border: 1px solid black;font-size: 8px;text-align: center;border-collapse: collapse;background-color: #ccccff;">
        <td colspan="1"  style="border: 1px solid black;">BIL</td>
        <td colspan="2"  style="border: 1px solid black;">NAMA Pelajar</td>
        <td colspan="1" style="border: 1px solid black;">ID PELAJAR</td>
        <td colspan="1" style="border: 1px solid black;">NO TELEFON</td>
        <td colspan="1" style="border: 1px solid black;">KOD KURSUS</td>
        <td colspan="2" style="border: 1px solid black;">NO BILIK & KOLEJ</td>
    </tr>
        @if(count($butiran_peserta) != 0)
         @foreach($butiran_peserta as $response)
         <tr style="border: 1px solid black;font-size: 8px;text-align: center;border-collapse: collapse;">
            <td colspan="1" scope="row">{{$count++}}</td>
            <td colspan="2" >{{$response->name}}</td>
            <td colspan="1">{{$response->staff_id}}</td>
            <td colspan="1">-</td>
            <td colspan="1">-</td>
            <td colspan="2">-</td>
        </tr>
         @endforeach
        @endif
    </table>
</div>
<div>
    <table style="font-size:10px">
        <tr>
            <td>
                1. TAJUK KERTAS KERJA
                <ul>
                    <li>Tajuk hendaklah ringkas, jelas dan padat</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>
                2. TUJUAN
                <ul>
                    <li>Terangkan secara ringkas tetapi jelas tujuan kertas kerja ini dikemukakan</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>
                3. LATAR BELAKANG
                <ul>
                    <li>Terangkan secara ringkas latar belakang aktiviti</li>
                    <li>Apa masalah/implikasi sekiranya aktiviti ini tidak diadakan</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>4. OBJEKTIF
                <ul>
                    <li>Senaraikan apa yang ingin dicapai dari pelaksanaan program ini</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>5. KUMPULAN SASARAN
                <ul>
                    <li>Siapa?</li>
                    <li>Bilangan? (Termasuk urusetia)</li>
                    <li>Lampirkan senarai peserta</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>
                6. TARIKH/MASA/TEMPAT
                <ul>
                    <li>Terangkan butiran aturcara setiap hari</li>
                    <li>Beri butiran nama penceramah dan topik (Jika berkaitan)</li>
                    <li>Beri butiran pengendali aktiviti dalam aturcara (Jika berkaitan)</li>
                    <li>Tempat hendaklah sesuai dengan objektif aktiviti dan tidak melibatkan kos yang tinggi</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>
                7. PERASMI (JIKA BERKAITAN)
                <ul>
                    <li>Siapa?</li>
                    <li>Peranan perasmi</li>
                    <li>Jemputan lain dan bilangan</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>
                8. KAEDAH PERLAKSANAAN AKTIVITI/ IMPAK KEPADA PELAJAR, UNIVERSITI, MASYARAKAT/KOMUNITI.
                TERANGKAN BAGAIMANA AKTIVITI TERSEBUT DILAKSANAKAN. ADAKAH DALAM BENTUK :
                <ul>
                    <li>Ceramah</li>
                    <li>Latihan dalam kumpulan (LDK)</li>
                    <li>Persembahan individu/ berkumpulan</li>
                    <li>Melibatkan aktiviti lasak/ aktiviti ‘in-door’ dan sebagainya</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>9. BIODATA PENCERAMAH (JIKA BERKAITAN)
                <ul>
                    <li>Nama, pekerjaan, alamat, no. telefon</li>
                    <li>Profil penceramah</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>10. JAWATANKUASA PELAKSANA
                <ul>
                    <li>Nyatakan penaung/ penasihat dan senarai ahli jawatankuasa</li>
                    <li>Jawatan dan skop tugas bagi setiap ahli jawatankuasa</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>11. IMPLIKASI KEWANGAN
                <ul>
                    <li>Anggaran bajet (senaraikan butiran. Cth : Wang Tajaan (Luar UiTM) (Nyatakan Anggaran Pendapatan)</li>
                    <li>Lain-Lain Sumber Pendapatan (Derma, sumbangan ahli, sumbangan fakulti</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>12. PENUTUP
                <ul>
                    <li>Rumusan kertas kerja</li>
                </ul>
            </td>
        </tr>
    </table>
</div>