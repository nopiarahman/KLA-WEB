<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laporan Penduduk</title>

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
        <td><center><b><u>LAPORAN PENDUDUK DESA KASANG LOPAK ALAI</u></b></center></td>
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
                    <td rowspan="2"><center><b>RW</b></center></td>
                    <td rowspan="2"><center><b>RT</b></center></td>
                    <td colspan="2"><center><b>Jenis Kelamin</b></center></td>
                    <td><b><center>Kepala Keluarga</b></center></td>
                    <td colspan="2"><center><b>Status</b></center></td>
                    <td colspan="2"><center><b>Kewarganegaraan</b></center></td>
                </tr>
                <tr  >
                    <td><center><b>L</b></center></td>
                    <td><center><b>P</b></center></td>
                    <td rowspan="2"><center><b>{{ $penduduks->where('hubungan','Kepala Keluarga')->count() }}</b></center></td>
                    <td><center><b>Kawin</b></center></td>
                    <td><center><b>Belum Kawin</b></center></td>
                    <td><center><b>WNI</b></center></td>
                    <td><center><b>WNA</b></center></td>
                </tr>
                <tr  >
                    <td><center>2</center></td>
                    <td><center>13</center></td>
                    <td><center>{{ $penduduks->where('jenis_kelamin','Laki-Laki')->count() }}</center></td>
                    <td><center>{{ $penduduks->where('jenis_kelamin','Perempuan')->count() }}</center></td>
                    <td><center>{{ $penduduks->where('status','Kawin')->count() }}</center></td>
                    <td><center>{{ $penduduks->where('status','Belum Kawin')->count() }}</center></td>
                    <td><center>{{ $penduduks->where('kewarganegaraan','Warga Negara Indonesia')->count() }}</center></td>
                    <td><center>{{ $penduduks->where('kewarganegaraan','Warga Negara Asing')->count() }}</center></td>
                </tr>
                <tr >
                    <td colspan="10"><b>JUMLAH PENDUDUK : {{ $penduduks->count() }} </b></td>
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