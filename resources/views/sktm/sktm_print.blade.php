<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Surat Keterangan Tidak Mampu</title>

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
        <td><center><b><u>SURAT KETERANGAN TIDAK MAMPU</u></b></center></td>
    </tr>
    <tr>
        <td><center>Nomor : 474.31 /{{ $srt_ket_tdk_mampus->no }}{{ $srt_ket_tdk_mampus->id }} / SKTM-KSLA / V / 2020</center></td>
    </tr>
    <tr>
        <td height="10"></td>
    </tr>
</table>
<table align="center">
    <td>
        <font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Yang bertanda tangan dibawah ini Kepala Desa Kasang Lopak Alai, Kecamatan Kumpeh <br> Ulu, Kabupaten Muaro Jambi dengan ini menerangkan bahwa :</font>
    </td>
    <tr>
        <td height="10"></td>
    </tr>
</table>
<table align="center">
    <tr>
        <td>Nama</td>
        <td width="320">: {{ $srt_ket_tdk_mampus->nama }}</td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td width="320">: {{ $srt_ket_tdk_mampus->jenkel }}</td>
    </tr>
    <tr>
        <td>Tempat/Tanggal Lahir&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td width="320">: {{ $srt_ket_tdk_mampus->tpt_tgl_lhr }}</td>
    </tr>
    <tr>
        <td>Status Perkawinan</td>
        <td width="320">: {{ $srt_ket_tdk_mampus->status }}</td>
    </tr>
    <tr>
        <td>Agama</td>
        <td width="320">: {{ $srt_ket_tdk_mampus->agama }}</td>
    </tr>
    <tr>
        <td>Pekerjaan</td>
        <td width="320">: {{ $srt_ket_tdk_mampus->pekerjaan }}</td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td width="320">: Rt. {{ $srt_ket_tdk_mampus->rt_rw }}.&nbsp;Desa {{ $srt_ket_tdk_mampus->alamat }}</td>
    </tr>
    <tr>
        <td></td>
        <td width="320">: Kec. {{ $srt_ket_tdk_mampus->kec }},&nbsp;Kab. {{ $srt_ket_tdk_mampus->kab }}</td>
    </tr>
    <tr>
        <td height="10"></td>
    </tr>  
</table>
<table align="center" >
    <td>
        <font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Nama tersebut di atas adalah benar warga masyarakat Desa Kasang Lopak Alai<br> Kecamatan Kumpeh Ulu Kabupaten Muaro Jambi yang dikategorikan sebagai warga :</font>
    </td>
    <tr>
        <td height="10"></td>
    </tr>
</table>
<table align="center" >
    <td>
        <font><b>"TIDAK MAMPU"</b></font>
    </td>
    <tr>
        <td height="10"></td>
    </tr>
</table>
<table align="center" >
    <td>
        <font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Demikian surat keterangan ini kami buat dengan sebenarnya untuk dapat dipergunakan <br> sebagaimana mestinya.</font>
    </td>
    <tr>
        <td height="10"></td>
    </tr>
</table>
<table align="center" >
    <tr>
        <td>Reg No</td>
        <td width="250">: {{ $srt_ket_tdk_mampus->no_reg }}</td>
        <td>DIKELUARKAN DI </td>
        <td >: {{ $srt_ket_tdk_mampus->desa }}</td>
    </tr>
    <tr>
        <td>Tanggal</td>
        <td width="250">: {{ $srt_ket_tdk_mampus->tgl_reg }}</td>
        <td>PADA TANGGAL </td>
        <td >: {{ $srt_ket_tdk_mampus->tgl_keluar }}</td>
    </tr>
</table >
<table align="center">
    <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;DIKETAHUI OLEH</td>
        <td width="150"></td>
        <td>Kepala Desa Kasang Lopak Alai</td>
    </tr>
    <tr>
        <td>CAMAT KUMPEH ULU</td>
        <td width="150"></td>
    </tr>
    <tr>
        <td height="50"></td>
    </tr>
    <tr>
        <td></td>
        <td width="150"></td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;
            <b><u>PAWI</u></b></td>
    </tr>
    <tr>
        <td><b><u>...........................................</u></b></td>
        <td width="150"></td>
        <td></td>
    </tr>
    <tr>
        <td>NIP. </td>
        <td width="150"></td>
        <td></td>
    </tr>
    <tr>
        <td height="50"></td>
    </tr>
</table>

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