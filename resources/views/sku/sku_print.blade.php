<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Surat Keterangan Usaha</title>

</head>
<table align="center">
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
        <td><center><b><u>SURAT KETERANGAN USAHA</u></b></center></td>
    </tr>
    <tr>
        <td><center>Nomor : 517 / {{ $srt_ket_usahas->no }}{{ $srt_ket_usahas->id }} / IV / SKU- KSLA / 2021</center></td>
    </tr>
    <tr>
        <td height="10"></td>
    </tr>
</table>
<table align="center">
    <td>
        <font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Yang bertanda tangan di bawah ini, Kepala Desa Kasang Lopak Alai Kecamatan <br> Kumpeh Ulu Kabupaten Muaro Jambi Provinsi Jambi, dengan ini menerangkan bahwa :</font>
    </td>
    <tr>
        <td height="10"></td>
    </tr>
</table>
<table align="center">
    <tr>
        <td>Nama</td>
        <td width="320">: {{ $srt_ket_usahas->nama }}</td>
    </tr>
    <tr>
        <td>Tempat/Tanggal Lahir&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td width="320">: {{ $srt_ket_usahas->tpt_tgl_lhr }}</td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td width="320">: {{ $srt_ket_usahas->jenkel }}</td>
    </tr>
    <tr>
        <td>Nomor nik</td>
        <td width="320">: {{ $srt_ket_usahas->nik }}</td>
    </tr>
    <tr>
        <td>Pekerjaan</td>
        <td width="320">: {{ $srt_ket_usahas->pekerjaan }}</td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td width="320">: Rt. {{ $srt_ket_usahas->rt_rw }}. Desa&nbsp;{{ $srt_ket_usahas->desa }}</td>
    </tr>
    <tr>
        <td></td>
        <td width="320">: Kecamatan {{ $srt_ket_usahas->kec }}</td>
    </tr>
    <tr>
        <td></td>
        <td width="320">: Kabupaten {{ $srt_ket_usahas->kab }}</td>
    </tr>
    <tr>
        <td height="10"></td>
    </tr>  
</table>
<table align="center" >
    <td>
        <font >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Nama tersebut diatas adalah benar tercatat sebagai warga masyarakat Desa Kasang<br>  Lopak Alai, &nbsp;&nbsp;Kecamatan Kumpeh Ulu, Kabupaten Muaro Jambi dan&nbsp;&nbsp; yang &nbsp;&nbsp;bersangkutan<br> memang benar mempunyai sebuah usaha <b>{{ $srt_ket_usahas->perihal }}</b> yang terletak di resort <b>{{ $srt_ket_usahas->resort }}.</b></font>
    </td>
    <tr>
        <td height="10"></td>
    </tr>
    <td>
        <font >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Demikian&nbsp;&nbsp; Surat&nbsp;&nbsp; Keterangan Usaha ini&nbsp;&nbsp; dibuat dengan&nbsp;&nbsp; sebenarnya, &nbsp;&nbsp;untuk dapat <br>dipergunakan sebagaimana mestinya.</b></font>
    </td>
    <tr>
        <td height="15"></td>
    </tr>
</table>
<table align="center" >
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
        PADA TANGGAL&nbsp;&nbsp;&nbsp;&nbsp;: {{ $srt_ket_usahas->tgl_keluar }} </td>
    </tr>
    <tr>
        <td height="15"></td>
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