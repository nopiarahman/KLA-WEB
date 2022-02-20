<?php

declare(strict_types=1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use App\penduduk;

class HomeChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $laki = penduduk::where('jenis_kelamin', 'Laki-Laki')->count();
        $perempuan = penduduk::where('jenis_kelamin', 'Perempuan')->count();
        return Chartisan::build()
            ->labels(['Jenis Kelamin'])
            ->dataset('Laki - Laki', [$laki])
            ->dataset('Perempuan', [$perempuan]);
    }
}
