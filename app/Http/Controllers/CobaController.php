<?php

namespace App\Http\Controllers;

use App\Models\Coba;
use Illuminate\Http\Request;

class CobaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->data = array(
            [
                'norec' => 'a516faf0-1980-11ed-85c9-5d3d2533',
                'statusenabled' => true,
                'jeniskelamin' => 'PEREMPUAN',
                'tglregistrasi' => '2022-09-12 00:00:00',
                'nocm' => '00072782',
                'nocmfk' => 4893,
                'noregistrasi' => '2208001735',
                'namaruangan' => 'IGD UMUM',
                'namapasien' => 'CHAERUNNISA',
                'kelompokpasien' => 'BPJS',
                'namarekanan' => 'BPJS KESEHATAN - NON POLRI',
                'namadokter' => 'dr. DERYANT IMAGODEI NORON',
                'tglpulang' => '2022-09-12 00:00:00',
                'statuspasien' => 'BARU',
                'norec_pa' => '5578d8d0-3249-11ed-bab5-f989f98e',
                'objectasuransipasienfk' => 253705,
                'pgid' => 30017,
                'objectruanganlastfk' => 569,
                'nosep' => '0119R0040922V000240',
                'norec_br' => null,
                'nostruklastfk' => '66607a50-510d-11ed-bd42-e78e480c',
                'noreservasi' => null,
                'kelasditanggung' => 'Kelas II',
                'namakelas' => 'Non Kelas',
                'tgllahir' => '1977-07-14 00:00:00',
                'objectdepartemenfk' => 24,
                'objectkelasfk' => 6,
                'deptid' => 24,
                'ppkrujukan' => '-',
                'istelemedicine' => null,
                'jaminankhusus' => null,
                'noidentitas' => '0000000000000000',
                'statusschedule' => '',
                'isdiagnosis' => 'Other Specified Counselling'
            ],
            [
                'norec' => 'a565e9a0-3f97-11ed-b717-635bc9ec',
                'statusenabled' => true,
                'jeniskelamin' => 'LAKI-LAKI',
                'tglregistrasi' => '2022-09-29 08:39:29',
                'nocm' => '00072779',
                'nocmfk' => 4890,
                'noregistrasi' => '2209000001',
                'namaruangan' => 'Poliklinik Penyakit Dalam',
                'namapasien' => 'HARI MULYONO',
                'kelompokpasien' => 'Umum/Pribadi',
                'namarekanan' => 'Umum / Diri Sendiri',
                'namadokter' => 'dr. PANJI GUGAH BHASKARA, Sp. PD',
                'tglpulang' => '2022-09-29 08:39:29',
                'statuspasien' => 'LAMA',
                'norec_pa' => null,
                'objectasuransipasienfk' => null,
                'pgid' => 30007,
                'objectruanganlastfk' => 33,
                'nosep' => null,
                'norec_br' => null,
                'nostruklastfk' => null,
                'noreservasi' => null,
                'kelasditanggung' => null,
                'namakelas' => 'Non Kelas',
                'tgllahir' => '1994-12-16 00:00:00',
                'objectdepartemenfk' => 18,
                'objectkelasfk' => 6,
                'deptid' => 18,
                'ppkrujukan' => null,
                'istelemedicine' => null,
                'jaminankhusus' => null,
                'noidentitas' => '00000000',
                'statusschedule' => '2209000001',
                'isdiagnosis' => false
            ],
            [
                'norec' => 'bb5c3c30-3f9c-11ed-920d-a3e252d9',
                'statusenabled' => true,
                'jeniskelamin' => 'LAKI-LAKI',
                'tglregistrasi' => '2022-09-29 09:15:49',
                'nocm' => '00072852',
                'nocmfk' => 4963,
                'noregistrasi' => '2209000002',
                'namaruangan' => 'Poliklinik Penyakit Dalam',
                'namapasien' => 'TEST',
                'kelompokpasien' => 'Umum/Pribadi',
                'namarekanan' => 'Umum / Diri Sendiri',
                'namadokter' => 'dr. PANJI GUGAH BHASKARA, Sp. PD',
                'tglpulang' => '2022-09-29 09:15:49',
                'statuspasien' => 'BARU',
                'norec_pa' => null,
                'objectasuransipasienfk' => null,
                'pgid' => 30007,
                'objectruanganlastfk' => 33,
                'nosep' => null,
                'norec_br' => null,
                'nostruklastfk' => null,
                'noreservasi' => null,
                'kelasditanggung' => null,
                'namakelas' => 'Non Kelas',
                'tgllahir' => '2022-09-01 00:00:00',
                'objectdepartemenfk' => 18,
                'objectkelasfk' => 6,
                'deptid' => 18,
                'ppkrujukan' => null,
                'istelemedicine' => null,
                'jaminankhusus' => null,
                'noidentitas' => '0000000000000000',
                'statusschedule' => '2209000002',
                'isdiagnosis' => false
            ],
            [
                'norec' => 'befb9dd0-3fa3-11ed-942b-79197053',
                'statusenabled' => true,
                'jeniskelamin' => 'LAKI-LAKI',
                'tglregistrasi' => '2022-09-29 10:05:55',
                'nocm' => '0001822',
                'nocmfk' => 1824,
                'noregistrasi' => '2209000003',
                'namaruangan' => 'Poliklinik Penyakit Dalam',
                'namapasien' => 'MOCHAMAD RAGA PERBAWA',
                'kelompokpasien' => 'Umum/Pribadi',
                'namarekanan' => 'Umum / Diri Sendiri',
                'namadokter' => 'dr. PANJI GUGAH BHASKARA, Sp. PD',
                'tglpulang' => '2022-09-29 10:05:55',
                'statuspasien' => 'LAMA',
                'norec_pa' => null,
                'objectasuransipasienfk' => null,
                'pgid' => 30007,
                'objectruanganlastfk' => 33,
                'nosep' => null,
                'norec_br' => null,
                'nostruklastfk' => 'de560240-5118-11ed-82be-0d2df1a9',
                'noreservasi' => null,
                'kelasditanggung' => null,
                'namakelas' => 'Non Kelas',
                'tgllahir' => '1980-01-01 00:00:00',
                'objectdepartemenfk' => 18,
                'objectkelasfk' => 6,
                'deptid' => 18,
                'ppkrujukan' => null,
                'istelemedicine' => null,
                'jaminankhusus' => null,
                'noidentitas' => '000000000',
                'statusschedule' => '2209000003',
                'isdiagnosis' => 'Other Specified Counselling'
            ],
            [
                'norec' => '53c41c30-3fa5-11ed-9706-cb3e77b0',
                'statusenabled' => true,
                'jeniskelamin' => 'LAKI-LAKI',
                'tglregistrasi' => '2022-09-29 10:16:42',
                'nocm' => '00072853',
                'nocmfk' => 4964,
                'noregistrasi' => '2209000004',
                'namaruangan' => 'Poliklinik Kebidanan & Kandungan',
                'namapasien' => 'TESTING BAYI',
                'kelompokpasien' => 'Umum/Pribadi',
                'namarekanan' => 'Umum / Diri Sendiri',
                'namadokter' => 'dr. MOHAMMAD WAHYU F. Sp. OG',
                'tglpulang' => '2022-09-29 10:16:42',
                'statuspasien' => 'BARU',
                'norec_pa' => null,
                'objectasuransipasienfk' => null,
                'pgid' => 30002,
                'objectruanganlastfk' => 552,
                'nosep' => null,
                'norec_br' => null,
                'nostruklastfk' => null,
                'noreservasi' => null,
                'kelasditanggung' => null,
                'namakelas' => 'Non Kelas',
                'tgllahir' => '2022-09-01 00:00:00',
                'objectdepartemenfk' => 18,
                'objectkelasfk' => 6,
                'deptid' => 18,
                'ppkrujukan' => null,
                'istelemedicine' => null,
                'jaminankhusus' => null,
                'noidentitas' => '0000000000000000',
                'statusschedule' => '2209000004',
                'isdiagnosis' => false
            ]
        );
    }

    public function index()
    {
        $collect = collect($this->data);
        return [
            "status" => "Success",
            "result" => $collect
        ];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $myarray = collect($data);
        $name = $myarray->where('namapasien','jumlahpasien')->all();
        return[
            'status' => 'Success',
            'result' => $name
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coba  $coba
     * @return \Illuminate\Http\Response
     */
    public function show(Coba $coba)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coba  $coba
     * @return \Illuminate\Http\Response
     */
    public function edit(Coba $coba)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Coba  $coba
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coba $coba)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coba  $coba
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coba $coba)
    {
        //
    }

    public function spec1a(Request $r)
    {
        $rs = collect($this->data)
        ->groupBy('namaruangan');
        return[ 
            'Status' => 'Success',
            'Nama Ruangan' => $r->namaruangan,
            'Jumlah Pasien' => $rs[$r->namaruangan]->count()
        ];
    }

    public function spec1b(Request $r)
    {
        $rs = collect($this->data)
        ->groupBy('namadokter');
        return[ 
            'Status' => 'Success',
            'Nama Dokter' => $r->namadokter,
            'Jumlah Pasien' => $rs[$r->namadokter]->count()
        ];
    }

    public function spec2(Request $r)
    {
        $rs = collect($this->data)
        ->pluck('namapasien');
        return[ 
            'Status' => 'Success',
            'Jumlah Karakter' => substr_count($rs, $r->namapasien)
        ];
    }

    public function spec3()
    {
        $rs = collect($this->data)
        ->pluck('tglregistrasi', 'namapasien');
        return[ 
            'Status' => 'Success',
            'response' => $rs
        ];
    }

    public function spec4()
    {
        $rs = collect($this->data)->map(fn($item) => $item + ['nomor urut' => 0])->toArray();

        for ($i=0; $i < count($rs); $i++) { 
            $rs[$i]['nomor urut'] = $i+1;
        }

        return[
            'Status' => 'Success',
            'response' => $rs
        ];    
    }
}
