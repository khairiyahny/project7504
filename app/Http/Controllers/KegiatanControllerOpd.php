<?php

namespace App\Http\Controllers;

use App\Models\KegiatanOpd;
use Illuminate\Http\Request;

class KegiatanControllerOpd extends Controller
{
    public function create(Request $request)
    {
        // return view('backend.forms-tambahkegiatan-opd');
        $anggotaTim = [
            (object) ['id' => 1, 'nama' => 'Anggota 1'],
            (object) ['id' => 2, 'nama' => 'Anggota 2'],
            (object) ['id' => 3, 'nama' => 'Anggota 3'],
            (object) ['id' => 4, 'nama' => 'Anggota 4'],
            (object) ['id' => 5, 'nama' => 'Anggota 5'],
        ];
        
        // Data OPD Lokus
        $opdList = [
            'OPD 1',
            'OPD 2',
            'OPD 3',
            'OPD 4',
            'OPD 5'
        ];

        return view('backend.forms-tambahkegiatan-opd', compact('anggotaTim', 'opdList'));
    }    

    public function submit(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'tanggal' => 'required|date',
            'nama_anggota_tim_sms' => 'required|array', // Pastikan input array
            'nama_anggota_tim_sms.*' => 'integer', // Setiap elemen array harus integer
            'opd_lokus' => 'required|string',
            'lokus_lainnya' => 'required|string',
            'jenis_kegiatan' => 'required|string|in:Kompilasi Produk Administrasi (Kompromi),Survei (Pendataan tidak lengkap),Pendataan Lengkap',
            'judul_kegiatan' => 'required|string',
            'kunjungan' => 'required|string|in:Kunjungan Ke-1,Kunjungan Ke-2,Kunjungan Ke-3,Kunjungan Ke-4,Kunjungan Ke-5,"Kunjungan Ke-5, Dst"',
            'nama_pegawai_opd' => 'required|string',
            'jabatan_pegawai_opd' => 'required|string',
            'topik_pendampingan' => 'required|string',
            'skor_pemahaman_gsbpm' => 'required|string|in:1,2,3,4,5,6,7,8,9,10,NA',
            'skor_pemahaman_rekomstat' => 'required|string|in:1,2,3,4,5,6,7,8,9,10,NA',
            'skor_pemahaman_metadata' => 'required|string|in:1,2,3,4,5,6,7,8,9,10,NA',
            'resume' => 'required|string',
            'lokasi' => 'required|string',
            'dokumentasi_kunjungan' => 'required|file|mimes:jpg,png,pdf|max:10240',  // Validasi untuk file
        ]);
    
        // Mengupload file jika ada
        if ($request->hasFile('dokumentasi_kunjungan')) {
            $file = $request->file('dokumentasi_kunjungan');
            $path = $file->store('dokumentasi_kunjungan_opd', 'public');  // Menyimpan file di storage/app/public/dokumentasi_kunjungan
        }
    
        // Menyimpan data ke database, termasuk path file
        $kegiatanOpd = KegiatanOpd::create([
            'tanggal' => $validated['tanggal'],
            'nama_anggota_tim_sms' => implode(',', $validated['nama_anggota_tim_sms']), // Menggabungkan ID anggota yang dipilih menjadi string
            'opd_lokus' => $validated['opd_lokus'],
            'lokus_lainnya' => $validated['lokus_lainnya'],
            'jenis_kegiatan' => $validated['jenis_kegiatan'],
            'judul_kegiatan' => $validated['judul_kegiatan'],
            'kunjungan' => $validated['kunjungan'],
            'nama_pegawai_opd' => $validated['nama_pegawai_opd'],
            'jabatan_pegawai_opd' => $validated['jabatan_pegawai_opd'],
            'topik_pendampingan' => $validated['topik_pendampingan'],
            'skor_pemahaman_gsbpm' => $validated['skor_pemahaman_gsbpm'],
            'skor_pemahaman_rekomstat' => $validated['skor_pemahaman_rekomstat'],
            'skor_pemahaman_metadata' => $validated['skor_pemahaman_metadata'],
            'resume' => $validated['resume'],
            'lokasi' => $validated['lokasi'],
            'dokumentasi_kunjungan' => $path, 
        ]);
    
        return redirect()->back()->with('success', 'Kegiatan berhasil ditambahkan');
    }
    

    public function index(Request $request)
    {
        $kegiatanOpd = KegiatanOpd::all(); 
        return view('backend.tables-kegiatan-opd', compact('kegiatanOpd'));
    }    

    public function destroy($id)
    {
        $kegiatanOpd = KegiatanOpd::findOrFail($id);
        $kegiatanOpd->delete();

        return redirect()->back()->with('success', 'Kegiatan berhasil dihapus');
    }

    public function edit($id)
    {
        // Mendapatkan data kegiatan OPD
        $kegiatanOpd = KegiatanOpd::findOrFail($id);

        // Data anggota tim SMS yang sudah dipilih (dari database)
        $selectedAnggota = explode(',', $kegiatanOpd->nama_anggota_tim_sms); // Mengubah string koma menjadi array

        // Data anggota tim SMS yang dapat dipilih (bukan dari database)
        $anggotaTim = [
            (object) ['id' => 1, 'nama' => 'Anggota 1'],
            (object) ['id' => 2, 'nama' => 'Anggota 2'],
            (object) ['id' => 3, 'nama' => 'Anggota 3'],
            (object) ['id' => 4, 'nama' => 'Anggota 4'],
            (object) ['id' => 5, 'nama' => 'Anggota 5'],
        ];

        // Data OPD Lokus
        $opdList = [
            'OPD 1',
            'OPD 2',
            'OPD 3',
            'OPD 4',
            'OPD 5'
        ];

        return view('backend.forms-tambahkegiatan-opd', compact('anggotaTim', 'selectedAnggota', 'kegiatanOpd', 'opdList'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $validated = $request->validate([
            'tanggal' => 'required|date',
            'nama_anggota_tim_sms' => 'required|array',
            'nama_anggota_tim_sms.*' => 'integer',
            'opd_lokus' => 'required|string',
            'lokus_lainnya' => 'required|string',
            'jenis_kegiatan' => 'required|string|in:Kompilasi Produk Administrasi (Kompromi),Survei (Pendataan tidak lengkap),Pendataan Lengkap',
            'judul_kegiatan' => 'required|string',
            'kunjungan' => 'required|string|in:Kunjungan Ke-1,Kunjungan Ke-2,Kunjungan Ke-3,Kunjungan Ke-4,Kunjungan Ke-5,"Kunjungan Ke-5, Dst"',
            'nama_pegawai_opd' => 'required|string',
            'jabatan_pegawai_opd' => 'required|string',
            'topik_pendampingan' => 'required|string',
            'skor_pemahaman_gsbpm' => 'required|string|in:1,2,3,4,5,6,7,8,9,10,NA',
            'skor_pemahaman_rekomstat' => 'required|string|in:1,2,3,4,5,6,7,8,9,10,NA',
            'skor_pemahaman_metadata' => 'required|string|in:1,2,3,4,5,6,7,8,9,10,NA',
            'resume' => 'required|string',
            'lokasi' => 'required|string',
            'dokumentasi_kunjungan' => 'nullable|file|mimes:jpg,png,pdf|max:10240',  // Validasi untuk file
        ]);
    
        // Temukan data yang akan diupdate
        $kegiatanOpd = KegiatanOpd::findOrFail($id);
    
        // Periksa apakah ada file yang diupload
        if ($request->hasFile('dokumentasi_kunjungan')) {
            // Hapus file lama jika ada
            if ($kegiatanOpd->dokumentasi_kunjungan) {
                $oldFile = storage_path('app/public/' . $kegiatanOpd->dokumentasi_kunjungan);
                if (file_exists($oldFile)) {
                    unlink($oldFile);  // Hapus file lama
                }
            }

            // Upload file baru
            $file = $request->file('dokumentasi_kunjungan');
            $path = $file->store('dokumentasi_kunjungan_opd', 'public');  // Menyimpan file di storage/app/public/dokumentasi_kunjungan

            // \Log::info('File path after upload: ' . $path);

            // Update path file di database
            $kegiatanOpd->dokumentasi_kunjungan = $path;
        }
        // Update data lainnya
        // $kegiatanOpd->update(array_merge($validated, [
        //     'dokumentasi_kunjungan' => isset($path) ? $path : $kegiatanOpd->dokumentasi_kunjungan,
        // ]));
        $kegiatanOpd->update(array_merge($validated, [
            'nama_anggota_tim_sms' => implode(',', $validated['nama_anggota_tim_sms']), // Menyimpan anggota yang dipilih dalam bentuk string
            'dokumentasi_kunjungan' => isset($path) ? $path : $kegiatanOpd->dokumentasi_kunjungan,
        ]));
    
        return redirect()->route('backend.tables-kegiatan-opd')->with('success', 'Kegiatan berhasil diupdate');
    }
    
}
