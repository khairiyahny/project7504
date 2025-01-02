<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KegiatanTpi;

class KegiatanControllerTpi extends Controller
{
    public function create(Request $request)
    {
        $anggotaTim = [
            (object) ['id' => 1, 'nama' => 'Anggota 1'],
            (object) ['id' => 2, 'nama' => 'Anggota 2'],
            (object) ['id' => 3, 'nama' => 'Anggota 3'],
            (object) ['id' => 4, 'nama' => 'Anggota 4'],
            (object) ['id' => 5, 'nama' => 'Anggota 5'],
        ];

        return view('backend.forms-tambahkegiatan-tpi', compact('anggotaTim'));
    }    

    public function submit(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'tanggal' => 'required|date',
            'nama_anggota_tim_sms' => 'required|array', // Pastikan input array
            'nama_anggota_tim_sms.*' => 'integer', // Setiap elemen array harus integer
            'objek_kegiatan' => 'required|string|in:"1 Survei Harga, Badan Keuangan","2 Peta Ketahanan & Kerawanan Pangan"',
            'kunjungan' => 'required|string|in:Kunjungan Ke-1,Kunjungan Ke-2,Kunjungan Ke-3,Kunjungan Ke-4,Kunjungan Ke-5,"Kunjungan Ke-5, Dst"',
            'nama_anggota_tpi_epss' => 'required|string',
            'jabatan_anggota_tpi_epss' => 'required|string',
            'opd_epss' => 'required|string|in:"1 Dinas Ketahanan Pangan Kabupaten Bone Bolango","2 Badan Keuangan Kabupaten Bone Bolango","3 Bappeda Kabupaten Bone Bolango","4 Dinas Komunikasi dan Informatika Kabupaten Bone Bolango"',

            'pendampingan_domain_1' => 'required|array|in:Indikator-1,Indikator-2,Indikator-3,Indikator-4,NA',
            'pendampingan_domain_2' => 'required|array|in:Indikator-5,Indikator-6,Indikator-7,Indikator-8,Indikator-9,Indikator-10,Indikator-11,Indikator-12,Indikator-13,Indikator-14,NA',
            'pendampingan_domain_3' => 'required|array|in:Indikator-15,Indikator-16,Indikator-17,Indikator-18,Indikator-19,Indikator-20,Indikator-21,NA',
            'pendampingan_domain_4' => 'required|array|in:Indikator-22,Indikator-23,Indikator-24,Indikator-25,Indikator-26,Indikator-27,Indikator-28,Indikator-29,Indikator-30,Indikator-31,NA',
            'pendampingan_domain_5' => 'required|array|in:Indikator-32,Indikator-33,Indikator-34,Indikator-35,Indikator-36,Indikator-37,Indikator-38,NA',

            'maturitas_kode_1' => 'required|array|in:Indikator-1,Indikator-2,Indikator-3,Indikator-4,Indikator-5,Indikator-6,Indikator-7,Indikator-8,Indikator-9,Indikator-10,Indikator-11,Indikator-12,Indikator-13,Indikator-14,Indikator-15,Indikator-16,Indikator-17,Indikator-18,Indikator-19,Indikator-20,Indikator-21,Indikator-22,Indikator-23,Indikator-24,Indikator-25,Indikator-26,Indikator-27,Indikator-28,Indikator-29,Indikator-30,Indikator-31,Indikator-32,Indikator-33,Indikator-34,Indikator-35,Indikator-36,Indikator-37,Indikator-38,NA',
            'maturitas_kode_2' => 'required|array|in:Indikator-1,Indikator-2,Indikator-3,Indikator-4,Indikator-5,Indikator-6,Indikator-7,Indikator-8,Indikator-9,Indikator-10,Indikator-11,Indikator-12,Indikator-13,Indikator-14,Indikator-15,Indikator-16,Indikator-17,Indikator-18,Indikator-19,Indikator-20,Indikator-21,Indikator-22,Indikator-23,Indikator-24,Indikator-25,Indikator-26,Indikator-27,Indikator-28,Indikator-29,Indikator-30,Indikator-31,Indikator-32,Indikator-33,Indikator-34,Indikator-35,Indikator-36,Indikator-37,Indikator-38,NA',
            'maturitas_kode_3' => 'required|array|in:Indikator-1,Indikator-2,Indikator-3,Indikator-4,Indikator-5,Indikator-6,Indikator-7,Indikator-8,Indikator-9,Indikator-10,Indikator-11,Indikator-12,Indikator-13,Indikator-14,Indikator-15,Indikator-16,Indikator-17,Indikator-18,Indikator-19,Indikator-20,Indikator-21,Indikator-22,Indikator-23,Indikator-24,Indikator-25,Indikator-26,Indikator-27,Indikator-28,Indikator-29,Indikator-30,Indikator-31,Indikator-32,Indikator-33,Indikator-34,Indikator-35,Indikator-36,Indikator-37,Indikator-38,NA',
            'maturitas_kode_4' => 'required|array|in:Indikator-1,Indikator-2,Indikator-3,Indikator-4,Indikator-5,Indikator-6,Indikator-7,Indikator-8,Indikator-9,Indikator-10,Indikator-11,Indikator-12,Indikator-13,Indikator-14,Indikator-15,Indikator-16,Indikator-17,Indikator-18,Indikator-19,Indikator-20,Indikator-21,Indikator-22,Indikator-23,Indikator-24,Indikator-25,Indikator-26,Indikator-27,Indikator-28,Indikator-29,Indikator-30,Indikator-31,Indikator-32,Indikator-33,Indikator-34,Indikator-35,Indikator-36,Indikator-37,Indikator-38,NA',
            'maturitas_kode_5' => 'required|array|in:Indikator-1,Indikator-2,Indikator-3,Indikator-4,Indikator-5,Indikator-6,Indikator-7,Indikator-8,Indikator-9,Indikator-10,Indikator-11,Indikator-12,Indikator-13,Indikator-14,Indikator-15,Indikator-16,Indikator-17,Indikator-18,Indikator-19,Indikator-20,Indikator-21,Indikator-22,Indikator-23,Indikator-24,Indikator-25,Indikator-26,Indikator-27,Indikator-28,Indikator-29,Indikator-30,Indikator-31,Indikator-32,Indikator-33,Indikator-34,Indikator-35,Indikator-36,Indikator-37,Indikator-38,NA',
            'resume' => 'required|string',
            'lokasi' => 'required|string',
            'dokumentasi_kunjungan' => 'required|file|mimes:jpg,png,pdf|max:10240',  // Validasi untuk file
        ]);

        // dd($validated);
    
        // Mengupload file jika ada
        if ($request->hasFile('dokumentasi_kunjungan')) {
            $file = $request->file('dokumentasi_kunjungan');
            $path = $file->store('dokumentasi_kunjungan_tpi', 'public');  // Menyimpan file di storage/app/public/dokumentasi_kunjungan
        }

        // Mengambil data pendampingan dan maturitas
        $pendampingan_domain_1 = implode(',', $request->pendampingan_domain_1);
        $pendampingan_domain_2 = implode(',', $request->pendampingan_domain_2);
        $pendampingan_domain_3 = implode(',', $request->pendampingan_domain_3);
        $pendampingan_domain_4 = implode(',', $request->pendampingan_domain_4);
        $pendampingan_domain_5 = implode(',', $request->pendampingan_domain_5);
        $maturitas_kode_1 = implode(',', $request->maturitas_kode_1);
        $maturitas_kode_2 = implode(',', $request->maturitas_kode_2);
        $maturitas_kode_3 = implode(',', $request->maturitas_kode_3);
        $maturitas_kode_4 = implode(',', $request->maturitas_kode_4);
        $maturitas_kode_5 = implode(',', $request->maturitas_kode_5);
    
        // Menyimpan data ke database, termasuk path file
        $kegiatanTpi = KegiatanTpi::create([
            'tanggal' => $validated['tanggal'],
            'nama_anggota_tim_sms' => implode(',', $validated['nama_anggota_tim_sms']), // Menggabungkan ID anggota yang dipilih menjadi string
            'objek_kegiatan' => $validated['objek_kegiatan'],
            'kunjungan' => $validated['kunjungan'],
            'nama_anggota_tpi_epss' => $validated['nama_anggota_tpi_epss'],
            'jabatan_anggota_tpi_epss' => $validated['jabatan_anggota_tpi_epss'],
            'opd_epss' => $validated['opd_epss'],
            'pendampingan_domain_1' => $pendampingan_domain_1,
            'pendampingan_domain_2' => $pendampingan_domain_2,
            'pendampingan_domain_3' => $pendampingan_domain_3,
            'pendampingan_domain_4' => $pendampingan_domain_4,
            'pendampingan_domain_5' => $pendampingan_domain_5,
            'maturitas_kode_1' => $maturitas_kode_1,
            'maturitas_kode_2' => $maturitas_kode_2,
            'maturitas_kode_3' => $maturitas_kode_3,
            'maturitas_kode_4' => $maturitas_kode_4,
            'maturitas_kode_5' => $maturitas_kode_5,
            'resume' => $validated['resume'],
            'lokasi' => $validated['lokasi'],
            'dokumentasi_kunjungan' => $path,  // Menyimpan path file
        ]);
    
        return redirect()->back()->with('success', 'Kegiatan berhasil ditambahkan');
    }
    

    public function index(Request $request)
    {
        $kegiatanTpi = KegiatanTpi::all(); 
        return view('backend.tables-kegiatan-tpi', compact('kegiatanTpi'));
    }    

    public function destroy($id)
    {
        $kegiatanTpi = KegiatanTpi::findOrFail($id);
        $kegiatanTpi->delete();

        return redirect()->back()->with('success', 'Kegiatan berhasil dihapus');
    }

    public function edit($id)
    {
        $kegiatanTpi = KegiatanTpi::findOrFail($id);

        // Data anggota tim SMS yang sudah dipilih (dari database)
        $selectedAnggota = explode(',', $kegiatanTpi->nama_anggota_tim_sms); // Mengubah string koma menjadi array
        // Data anggota tim SMS yang dapat dipilih (bukan dari database)
        $anggotaTim = [
            (object) ['id' => 1, 'nama' => 'Anggota 1'],
            (object) ['id' => 2, 'nama' => 'Anggota 2'],
            (object) ['id' => 3, 'nama' => 'Anggota 3'],
            (object) ['id' => 4, 'nama' => 'Anggota 4'],
            (object) ['id' => 5, 'nama' => 'Anggota 5'],
        ];

        $kegiatanTpi->pendampingan_domain_1 = explode(',', $kegiatanTpi->pendampingan_domain_1);
        $kegiatanTpi->pendampingan_domain_2 = explode(',', $kegiatanTpi->pendampingan_domain_2);
        $kegiatanTpi->pendampingan_domain_3 = explode(',', $kegiatanTpi->pendampingan_domain_3);
        $kegiatanTpi->pendampingan_domain_4 = explode(',', $kegiatanTpi->pendampingan_domain_4);
        $kegiatanTpi->pendampingan_domain_5 = explode(',', $kegiatanTpi->pendampingan_domain_5);
        $kegiatanTpi->maturitas_kode_1 = explode(',', $kegiatanTpi->maturitas_kode_1);
        $kegiatanTpi->maturitas_kode_2 = explode(',', $kegiatanTpi->maturitas_kode_2);
        $kegiatanTpi->maturitas_kode_3 = explode(',', $kegiatanTpi->maturitas_kode_3);
        $kegiatanTpi->maturitas_kode_4 = explode(',', $kegiatanTpi->maturitas_kode_4);
        $kegiatanTpi->maturitas_kode_5 = explode(',', $kegiatanTpi->maturitas_kode_5);
        
        return view('backend.forms-tambahkegiatan-tpi', compact('kegiatanTpi', 'anggotaTim', 'selectedAnggota'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $validated = $request->validate([
            'tanggal' => 'required|date',
            'nama_anggota_tim_sms' => 'required|array',
            'nama_anggota_tim_sms.*' => 'integer',
            'objek_kegiatan' => 'required|string|in:"1 Survei Harga, Badan Keuangan","2 Peta Ketahanan & Kerawanan Pangan"',
            'kunjungan' => 'required|string|in:Kunjungan Ke-1,Kunjungan Ke-2,Kunjungan Ke-3,Kunjungan Ke-4,Kunjungan Ke-5,"Kunjungan Ke-5, Dst"',
            'nama_anggota_tpi_epss' => 'required|string',
            'jabatan_anggota_tpi_epss' => 'required|string',
            'opd_epss' => 'required|string|in:"1 Dinas Ketahanan Pangan Kabupaten Bone Bolango","2 Badan Keuangan Kabupaten Bone Bolango","3 Bappeda Kabupaten Bone Bolango","4 Dinas Komunikasi dan Informatika Kabupaten Bone Bolango"',
            'pendampingan_domain_1' => 'required|array|in:Indikator-1,Indikator-2,Indikator-3,Indikator-4,NA',
            'pendampingan_domain_2' => 'required|array|in:Indikator-5,Indikator-6,Indikator-7,Indikator-8,Indikator-9,Indikator-10,Indikator-11,Indikator-12,Indikator-13,Indikator-14,NA',
            'pendampingan_domain_3' => 'required|array|in:Indikator-15,Indikator-16,Indikator-17,Indikator-18,Indikator-19,Indikator-20,Indikator-21,NA',
            'pendampingan_domain_4' => 'required|array|in:Indikator-22,Indikator-23,Indikator-24,Indikator-25,Indikator-26,Indikator-27,Indikator-28,Indikator-29,Indikator-30,Indikator-31,NA',
            'pendampingan_domain_5' => 'required|array|in:Indikator-32,Indikator-33,Indikator-34,Indikator-35,Indikator-36,Indikator-37,Indikator-38,NA',
            'maturitas_kode_1' => 'required|array|in:Indikator-1,Indikator-2,Indikator-3,Indikator-4,Indikator-5,Indikator-6,Indikator-7,Indikator-8,Indikator-9,Indikator-10,Indikator-11,Indikator-12,Indikator-13,Indikator-14,Indikator-15,Indikator-16,Indikator-17,Indikator-18,Indikator-19,Indikator-20,Indikator-21,Indikator-22,Indikator-23,Indikator-24,Indikator-25,Indikator-26,Indikator-27,Indikator-28,Indikator-29,Indikator-30,Indikator-31,Indikator-32,Indikator-33,Indikator-34,Indikator-35,Indikator-36,Indikator-37,Indikator-38,NA',
            'maturitas_kode_2' => 'required|array|in:Indikator-1,Indikator-2,Indikator-3,Indikator-4,Indikator-5,Indikator-6,Indikator-7,Indikator-8,Indikator-9,Indikator-10,Indikator-11,Indikator-12,Indikator-13,Indikator-14,Indikator-15,Indikator-16,Indikator-17,Indikator-18,Indikator-19,Indikator-20,Indikator-21,Indikator-22,Indikator-23,Indikator-24,Indikator-25,Indikator-26,Indikator-27,Indikator-28,Indikator-29,Indikator-30,Indikator-31,Indikator-32,Indikator-33,Indikator-34,Indikator-35,Indikator-36,Indikator-37,Indikator-38,NA',
            'maturitas_kode_3' => 'required|array|in:Indikator-1,Indikator-2,Indikator-3,Indikator-4,Indikator-5,Indikator-6,Indikator-7,Indikator-8,Indikator-9,Indikator-10,Indikator-11,Indikator-12,Indikator-13,Indikator-14,Indikator-15,Indikator-16,Indikator-17,Indikator-18,Indikator-19,Indikator-20,Indikator-21,Indikator-22,Indikator-23,Indikator-24,Indikator-25,Indikator-26,Indikator-27,Indikator-28,Indikator-29,Indikator-30,Indikator-31,Indikator-32,Indikator-33,Indikator-34,Indikator-35,Indikator-36,Indikator-37,Indikator-38,NA',
            'maturitas_kode_4' => 'required|array|in:Indikator-1,Indikator-2,Indikator-3,Indikator-4,Indikator-5,Indikator-6,Indikator-7,Indikator-8,Indikator-9,Indikator-10,Indikator-11,Indikator-12,Indikator-13,Indikator-14,Indikator-15,Indikator-16,Indikator-17,Indikator-18,Indikator-19,Indikator-20,Indikator-21,Indikator-22,Indikator-23,Indikator-24,Indikator-25,Indikator-26,Indikator-27,Indikator-28,Indikator-29,Indikator-30,Indikator-31,Indikator-32,Indikator-33,Indikator-34,Indikator-35,Indikator-36,Indikator-37,Indikator-38,NA',
            'maturitas_kode_5' => 'required|array|in:Indikator-1,Indikator-2,Indikator-3,Indikator-4,Indikator-5,Indikator-6,Indikator-7,Indikator-8,Indikator-9,Indikator-10,Indikator-11,Indikator-12,Indikator-13,Indikator-14,Indikator-15,Indikator-16,Indikator-17,Indikator-18,Indikator-19,Indikator-20,Indikator-21,Indikator-22,Indikator-23,Indikator-24,Indikator-25,Indikator-26,Indikator-27,Indikator-28,Indikator-29,Indikator-30,Indikator-31,Indikator-32,Indikator-33,Indikator-34,Indikator-35,Indikator-36,Indikator-37,Indikator-38,NA',
            'resume' => 'required|string',
            'lokasi' => 'required|string',
            'dokumentasi_kunjungan' => 'nullable|file|mimes:jpg,png,pdf|max:10240',
        ]);
    
        // Temukan data yang akan diupdate
        $kegiatanTpi = KegiatanTpi::findOrFail($id);
    
        // Periksa apakah ada file yang diupload
        if ($request->hasFile('dokumentasi_kunjungan')) {
            // Hapus file lama jika ada
            if ($kegiatanTpi->dokumentasi_kunjungan) {
                $oldFile = storage_path('app/public/' . $kegiatanTpi->dokumentasi_kunjungan);
                if (file_exists($oldFile)) {
                    unlink($oldFile);  // Hapus file lama
                }
            }
    
            // Upload file baru
            $file = $request->file('dokumentasi_kunjungan');
            $path = $file->store('dokumentasi_kunjungan_tpi', 'public');  // Menyimpan file di storage/app/public/dokumentasi_kunjungan
    
            // Update path file di database
            $kegiatanTpi->dokumentasi_kunjungan = $path;
        }
    
        // Update data lainnya
        $kegiatanTpi->update(array_merge($validated, [
            'nama_anggota_tim_sms' => implode(',', $validated['nama_anggota_tim_sms']), // Menyimpan anggota yang dipilih dalam bentuk string
            'dokumentasi_kunjungan' => isset($path) ? $path : $kegiatanTpi->dokumentasi_kunjungan,
        ]));
    
        return redirect()->route('backend.tables-kegiatan-tpi')->with('success', 'Kegiatan berhasil diupdate');
    }
}
