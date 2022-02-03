<?php

declare(strict_types = 1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use App\penduduk;
class Menikah extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $menikah = penduduk::where('status','Kawin')->count();
        $belum = penduduk::where('status','Belum Kawin')->count();
        $janda = penduduk::where('status','Janda')->count();
        $duda = penduduk::where('status','Duda')->count();
        return Chartisan::build()
            ->labels(['Kawin', 'Belum Kawin','Janda','Duda'])
            ->dataset('Status Pernikahan', [$menikah,$belum,$janda,$duda]);
    }
}