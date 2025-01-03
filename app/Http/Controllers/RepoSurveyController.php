<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RepoSurvey;

class RepoSurveyController extends Controller
{
    public function create(Request $request)
    {
        $sifatSurvey = ['Mingguan', 'Bulanan', 'Triwulanan', 'Semesteran', 'Tahunan', 'Lainnya'];
        $unitSampling = ['User/Orang/Responden', 'Rumah Tangga', 'Sub-SLS/SLS/Blok Sensus (BS)', 'Sub-Segmen/Segmen', 'Desa', 'Kecamatan/Dinas', 'Usaha', 'UTP', 'Perusahaan', 'BS dan Rumah Tangga', 'BS dan Usaha'];
        $tim = ['Produksi', 'Distribusi', 'Sosial', 'Neraca', 'IPDS'];
        $kegiatan = ['Ada di 2024', 'Tidak ada di 2024'];
        $cekPok = ['Ada di POK-0 2025', 'Tidak ada di POK-0 2025'];

        return view('backend.forms-repository-survey', compact('sifatSurvey', 'unitSampling', 'tim', 'kegiatan', 'cekPok'));
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'nama_survey' => 'required|string|max:255',
            'sifat' => 'required|string',
            'unit_sampling_observasi' => 'required|string',
            'tim' => 'required|string',
            'kegiatan' => 'required|string',
            'tingkat_kesulitan' => 'required|integer|min:1|max:5',
            'hasil_pengecekan' => 'required|string',
            'pj' => 'required|string|max:255',
            'jumlah_sampel' => 'required|integer',
            'tahun' => 'required|integer',
            'kuesioner' => 'nullable|file|mimes:pdf|max:10240',
            'raw_data' => 'required|string',
            'pengolahan_kab' => 'required|boolean',
            'platform_pengolahan' => 'required|boolean',
            'link_monitoring' => 'nullable|url|required_if:platform_pengolahan,1',  
            'link_webentry' => 'nullable|url|required_if:platform_pengolahan,0',
        ]);

        // Mengupload file jika ada
        if ($request->hasFile('kuesioner')) {
            $file = $request->file('kuesioner');
            $path = $file->store('dokumen_kuesioner_repository_survey', 'public');   
        }

        $repoSurvey = RepoSurvey::create([
            'nama_survey' => $validated['nama_survey'],
            'sifat' => $validated['sifat'],
            'unit_sampling_observasi' => $validated['unit_sampling_observasi'],
            'tim' => $validated['tim'],
            'kegiatan' => $validated['kegiatan'],
            'tingkat_kesulitan' => $validated['tingkat_kesulitan'],
            'hasil_pengecekan' => $validated['hasil_pengecekan'],
            'pj' => $validated['pj'],
            'jumlah_sampel' => $validated['jumlah_sampel'],
            'tahun' => $validated['tahun'],
            'kuesioner' => $path,  
            'raw_data' => $validated['raw_data'],
            'pengolahan_kab' => $validated['pengolahan_kab'],
            'platform_pengolahan' => $validated['platform_pengolahan'],
            'link_monitoring' => $validated['link_monitoring'] ?? null,
            'link_webentry' => $validated['link_webentry'] ?? null,
        ]);

        return redirect()->back()->with('success', 'Survey berhasil ditambahkan');
    }

    public function index()
    {
        $repoSurveys = RepoSurvey::all(); 
        return view('backend.tables-repository-survey', compact('repoSurveys'));
    }

    public function destroy($id)
    {
        $repoSurvey = RepoSurvey::findOrFail($id); 
        $repoSurvey->delete(); 

        return redirect()->back()->with('success', 'Survey berhasil dihapus');
    }

    public function edit($id)
    {
        $repoSurvey = RepoSurvey::findOrFail($id);

        $sifatSurvey = ['Mingguan', 'Bulanan', 'Triwulanan', 'Semesteran', 'Tahunan', 'Lainnya'];
        $unitSampling = ['User/Orang/Responden', 'Rumah Tangga', 'Sub-SLS/SLS/Blok Sensus (BS)', 'Sub-Segmen/Segmen', 'Desa', 'Kecamatan/Dinas', 'Usaha', 'UTP', 'Perusahaan', 'BS dan Rumah Tangga', 'BS dan Usaha'];
        $tim = ['Produksi', 'Distribusi', 'Sosial', 'Neraca', 'IPDS'];
        $kegiatan = ['Ada di 2024', 'Tidak ada di 2024'];
        $cekPok = ['Ada di POK-0 2025', 'Tidak ada di POK-0 2025'];

        return view('backend.forms-repository-survey', compact('repoSurvey', 'sifatSurvey', 'unitSampling', 'tim', 'kegiatan', 'cekPok'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_survey' => 'required|string|max:255',
            'sifat' => 'required|string',
            'unit_sampling_observasi' => 'required|string',
            'tim' => 'required|string',
            'kegiatan' => 'required|string',
            'tingkat_kesulitan' => 'required|integer|min:1|max:5',
            'hasil_pengecekan' => 'required|string',
            'pj' => 'required|string|max:255',
            'jumlah_sampel' => 'required|integer',
            'tahun' => 'required|integer|min:1900|max:' . now()->year,
            'kuesioner' => 'nullable|file|mimes:pdf|max:10240',
            'raw_data' => 'required|string|max:255',
            'pengolahan_kab' => 'required|boolean',
            'platform_pengolahan' => 'required|boolean',
            'link_monitoring' => 'nullable|url|required_if:platform_pengolahan,1', 
            'link_webentry' => 'nullable|url|required_if:platform_pengolahan,0',  
        ]);

        $repoSurvey = RepoSurvey::findOrFail($id);

        // Periksa apakah ada file yang diupload
        if ($request->hasFile('kuesioner')) {
            // Hapus file lama jika ada
            if ($repoSurvey->kuesioner) {
                $oldFile = storage_path('app/public/' . $repoSurvey->kuesioner);
                if (file_exists($oldFile)) {
                    unlink($oldFile);  // Hapus file lama
                }
            }

            // Upload file baru
            $file = $request->file('kuesioner');
            $path = $file->store('dokumen_kuesioner_repository_survey', 'public');  // Menyimpan file di storage/app/public/dokumentasi_kunjungan

            $repoSurvey->kuesioner = $path;
        }

        $repoSurvey->update(array_merge($validated, [
            'kuesioner' => isset($path) ? $path : $repoSurvey->kuesioner,
        ]));
    
        return redirect()->route('backend.tables-repository-survey')->with('success', 'Survey berhasil diupdate');
    }
}
