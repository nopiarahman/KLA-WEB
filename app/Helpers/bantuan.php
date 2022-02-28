<?php

use App\Srt_ket_tdk_mampu;
use App\Srt_ket_biasa;
use App\Srt_ket_usaha;
use App\pengajuan;
use App\suratKematian;
use Carbon\Carbon;

function romawi($number)
{
    $map = array('M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400, 'C' => 100, 'XC' => 90, 'L' => 50, 'XL' => 40, 'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1);
    $returnValue = '';
    while ($number > 0) {
        foreach ($map as $roman => $int) {
            if ($number >= $int) {
                $number -= $int;
                $returnValue .= $roman;
                break;
            }
        }
    }
    return $returnValue;
}

function nomorSuratSKTM($suratId)
{
    $id = Srt_ket_tdk_mampu::find($suratId);
    $surat = Srt_ket_tdk_mampu::where('created_at', '<=', $id->created_at)->count();
    return $surat;
}
function nomorSuratSKB($suratId)
{
    $id = Srt_ket_biasa::find($suratId);
    $surat = Srt_ket_biasa::where('created_at', '<=', $id->created_at)->count();
    return $surat;
}
function nomorSuratSKU($suratId)
{
    $id = Srt_ket_usaha::find($suratId);
    $surat = Srt_ket_usaha::where('created_at', '<=', $id->created_at)->count();
    return $surat;
}
function nomorSuratSK($suratId)
{
    $id = suratKematian::find($suratId);
    $surat = suratKematian::where('created_at', '<=', $id->created_at)->count();
    return $surat;
}
function cetakSurat($pengajuanId)
{
    $pengajuan = pengajuan::find($pengajuanId);
    if ($pengajuan->jenis == 'sktm') {
        $surat = Srt_ket_tdk_mampu::where('penduduk_id', $pengajuan->penduduk_id)->first();
    } elseif ($pengajuan->jenis == "sku") {
        $surat = Srt_ket_usaha::where('penduduk_id', $pengajuan->penduduk_id)->first();
    } else {
        $surat = Srt_ket_biasa::where('penduduk_id', $pengajuan->penduduk_id)->first();
    }
    return $surat->id;
}
function cekUmur($lahir, $sekarang)
{
    $umur  = Carbon::parse($sekarang)->diffInYears(Carbon::parse($lahir));
    return $umur;
}

function formatTanggal($tanggal)
{
    $format = Carbon::parse($tanggal)->isoFormat('DD MMMM YYYY');
    return $format;
}
