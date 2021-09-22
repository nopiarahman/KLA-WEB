<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laporan Surat</title>

</head>
<table align="center" >
    <tr>
        <td height="50"></td>
    </tr>
    <tr>
    <td><img src="{{('/logo/logo.png')}}" width="70" height="90"></td>
    <td><center>
        <font size="3">PEMERINTAH KABUPATEN MUARO JAMBI</font><br>
        <font size="4"><b>KECAMATAN KUMPEH ULU</b></font><br>
        <font size="5"><b>PEMERINTAH DESA KASANG LOPAK ALAI</b></font><br>
        <font size="2"><b>Alamat : Jalan Raya Desa Kasang Lopak Alai Rt 03 / I Kode Pos 36373</b></font><br>
        <font size="2">email: <u>kasanglopakalai@yahoo.com</u></font><br>
        <font size="2"><b>KASANG LOPAK ALAI</b></font><br>
        </center>
    </td>
    </tr>
    <tr>
        <td colspan="2"><hr style="border-color: black;" ></td>
    </tr>
</table>
<br>

<body>
<table align="center" >
    <tbody>
    <tr>
        <td><center><b><u>LAPORAN SURAT KETERANGAN</u></b></center></td>
    </tr>
    <tr>
        <td><center>Berdasarkan Rekapitulasi Kriteria Berikut :</center></td>
    </tr>
    <tr>
        <td height="20"></td>
    </tr>
</table >
<table align="center" border="1" cellpadding="5" style="border-color: black;" >
                    
            <tbody class="text-center">
                <tr  >
                    <td ><center><b>SURAT KETERANGAN <br> BIASA</b></center></td>
                    <td ><center><b>SURAT KETERANGAN <br> TIDAK MAMPU</b></center></td>
                    <td ><center><b>SURAT KETERANGAN <br> USAHA</b></center></td>
                </tr>
                <tr  >
                    <td><center>{{ $srt_ket_biasas->count() }}</center></td>
                    <td><center>{{ $srt_ket_tdk_mampus->count() }}</center></td>
                    <td><center>{{ $srt_ket_usahas->count() }}</center></td>
                </tr>
            </tbody>
</table>
<table align="center" >
    <tr>
        <td height="10"></td>
    </tr>
    <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        DIKELUARKAN DI : KASANG LOPAK ALAI</td>
    </tr>
    <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        PADA HARI/TANGGAL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <span id="tanggalwaktu"></span>
        <script>
        var tw = new Date();
        if (tw.getTimezoneOffset() == 0) (a=tw.getTime() + ( 7 *60*60*1000))
        else (a=tw.getTime());
        tw.setTime(a);
        var tahun= tw.getFullYear ();
        var hari= tw.getDay ();
        var bulan= tw.getMonth ();
        var tanggal= tw.getDate ();
        var hariarray=new Array("Minggu,","Senin,","Selasa,","Rabu,","Kamis,","Jum'at,","Sabtu,");
        var bulanarray=new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","Nopember","Desember");
        document.getElementById("tanggalwaktu").innerHTML = hariarray[hari]+" "+tanggal+" "+bulanarray[bulan]+" "+tahun;
        </script> </td>
    </tr>
    <tr>
        <td height="10"></td>
    </tr>
    <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        KEPALA DESA KASANG LOPAK ALAI</td>
    </tr>
    <tr>
        <td height="50"></td>
    </tr>
    <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <u><b>PAWI</b></u></td>
    </tr>
    <tr>
        <td height="50"></td>
    </tr>
</table >

</body>
</html>

<!--
|--------------------------------------------------------------------------
| @copyrigt BanDotz
|--------------------------------------------------------------------------
| app.view
|--------------------------------------------------------------------------
|
-->