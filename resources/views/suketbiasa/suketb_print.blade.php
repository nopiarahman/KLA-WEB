<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Surat Keterangan</title>

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
        <td><center><b><u>SURAT KETERANGAN</u></b></center></td>
    </tr>
    <tr>
        <td><center>Nomor :474.4 /{{ nomorSuratSKB($srt_ket_biasas->id )}}/ KSLA / {{romawi(Carbon\Carbon::parse($srt_ket_biasas->tgl_keluar)->isoFormat('M'))}} / {{Carbon\Carbon::parse($srt_ket_biasas->tgl_keluar)->isoFormat('YYYY')}} </center></td>
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
        <td width="320">: {{ $srt_ket_biasas->penduduk->nama }}</td>
    </tr>
    <tr>
        <td>Tempat/Tanggal Lahir&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td width="320">: {{ $srt_ket_biasas->penduduk->tempatLahir }} / {{ $srt_ket_biasas->penduduk->tanggalLahir }}</td>
    </tr>
    <tr>
        <td>Status Perkawinan</td>
        <td width="320">: {{ $srt_ket_biasas->penduduk->status }}</td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td width="320">: {{ $srt_ket_biasas->penduduk->jenis_kelamin }}</td>
    </tr>
    <tr>
        <td>Golongan Darah</td>
        <td width="320">: {{ $srt_ket_biasas->penduduk->goldarah }}</td>
    </tr>
    <tr>
        <td>Nomor nik</td>
        <td width="320">: {{ $srt_ket_biasas->penduduk->nik }}</td>
    </tr>
    <tr>
        <td>Agama</td>
        <td width="320">: {{ $srt_ket_biasas->penduduk->agama }}</td>
    </tr>
    <tr>
        <td>Pekerjaan</td>
        <td width="320">: {{ $srt_ket_biasas->penduduk->pekerjaan }}</td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td width="320">: Rt. {{ $srt_ket_biasas->penduduk->kartukeluarga->rt }}.&nbsp;Desa {{ $srt_ket_biasas->penduduk->kartukeluarga->kelurahan }}</td>
        
    </tr>
    <tr>
        <td height="10"></td>
    </tr>  
</table>
<table align="center" >
    <td>
        <font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Memang benar bahwa yang bersangkutan tercatat sebagai warga masyarakat yang <br> berdomisili di <b>Rt. {{ $srt_ket_biasas->penduduk->kartukeluarga->rt }}.</b> Desa Kasang Lopak Alai Kecamatan Kumpeh Ulu Kabupaten Muaro <br> Jambi.</font><br>
        <font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Demikian Surat Keterangan ini dibuat dengan sebenarnya untuk dapat dipergunakan <br> sebagaimana mestinya.</font>
    </td>
    <tr>
        <td height="10"></td>
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
        PADA TANGGAL&nbsp;&nbsp;&nbsp;&nbsp;: {{ $srt_ket_biasas->tgl_keluar }} </td>
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