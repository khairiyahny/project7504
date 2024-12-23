<?php

namespace App\Http\Controllers;

use App\Models\KegiatanTpiEpss;
use Illuminate\Http\Request;

class TpiEpssController extends Controller
{
    public function create()
    {
        return view('backend/forms-layouts');  
    }

    public function submit(Request $request)
    {
        // dd($request->all());

        $validated = $request->validate([
            'question' => 'required|string',  
            'answer' => 'required|string',
        ]);

        Faq::create([ 
            'question' => $validated['question'],
            'answer' => $validated['answer'],
        ]);

        return redirect()->back()->with('success', 'FAQ berhasil disimpan');
    }


    public function index()
    {
        $faqs = Faq::all();
        return view('backend.tables-data', compact('faqs'));
    }
    

    public function destroy($id)
    {
        $faq = Faq::findOrFail($id);
        $faq->delete();

        return redirect()->route('faq.index')->with('success', 'FAQ berhasil dihapus');
    }

    public function edit($id)
    {
        $faq = Faq::findOrFail($id);
        return view('backend.forms-layouts', compact('faq'));
        // return view('backend.forms-layouts', ['faq' => new Faq()]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'question' => 'required|string',
            'answer' => 'required|string',
        ]);
    
        $faq = Faq::findOrFail($id);
        $faq->update([
            'question' => $validated['question'],
            'answer' => $validated['answer'],
        ]);
    
        return redirect()->route('faq.index')->with('success', 'FAQ berhasil diupdate');
    }    
}
