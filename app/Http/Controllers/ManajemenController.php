<?php

namespace App\Http\Controllers;

use App\Models\Manajemen;
use Illuminate\Http\Request;
use App\Models\DetailManajemen;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Storage as FacadesStorage;

class ManajemenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Manajemen::with('detailmanajemen')->get();
            
        return view('admin.manajemen', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.crudmanajemen.createdata');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
           'judulbuku' => 'required',
           'deskripsi' => 'required',
           'penulis' => 'required',
           'penerbit' => 'required',
           'kode' => 'required',
           'tahun_terbit' => 'required|digits:4|integer|min:1900|max:2025',
           'gambarbuku' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ],[
            'judulbuku.required' => 'Judul buku harus diisi',
            'deskripsi.required' => 'Deskripsi buku harus diisi',
            'penulis.required' => 'Penulis buku harus diisi',
            'penerbit.required' => 'Penerbit buku harus diisi',
            'kode.required' => 'Kode buku harus diisi',
            'tahun_terbit.required' => 'Tahun terbit buku harus diisi',
            'tahun_terbit.digits' => 'Tahun terbit buku harus berisi 4 angka',
            'tahun_terbit.integer' => 'Tahun terbit buku harus berupa angka',
            'tahun_terbit.min' => 'Tahun terbit buku harus di atas 1900',
            'tahun_terbit.max' => 'Tahun terbit buku harus di bawah 2025',
            'gambarbuku.image' => 'File yang diupload harus berupa gambar',
            'gambarbuku.mimes' => 'File yang diupload harus berformat jpeg, png, jpg, gif, atau svg',
            'gambarbuku.max' => 'Ukuran gambar maksimal 2MB',
        ]);

        //Upload gambar
        $image = $request->file('gambarbuku');
        $image->storeAs('public/products', $image->hashName());

        $manajemen = Manajemen::create([
            'judulbuku' => $request->judulbuku,
            'gambarbuku' => $image->hashName(),
            'deskripsi' => $request->deskripsi,
        ]);

        DetailManajemen::create([
            'kode' => $request->kode,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'manajemen_id' => $manajemen->id,
            'tahun_terbit' => $request->tahun_terbit,
        ]);

        return redirect()->route('manajemen.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $books = Manajemen::with('detailmanajemen')->findOrFail
        ($id);
        return view('admin.crudmanajemen.editdata', compact('books'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'judulbuku' => 'required',
            'deskripsi' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'kode' => 'required',
            'tahun_terbit' => 'required|digits:4|integer|min:1900|max:2025',
            'gambarbuku' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
         ],[
            'judulbuku.required' => 'Judul buku harus diisi',
            'deskripsi.required' => 'Deskripsi buku harus diisi',
            'penulis.required' => 'Penulis buku harus diisi',
            'penerbit.required' => 'Penerbit buku harus diisi',
            'kode.required' => 'Kode buku harus diisi',
            'tahun_terbit.required' => 'Tahun terbit buku harus diisi',
            'tahun_terbit.digits' => 'Tahun terbit buku harus berisi 4 angka',
            'tahun_terbit.integer' => 'Tahun terbit buku harus berupa angka',
            'tahun_terbit.min' => 'Tahun terbit buku harus di atas 1900',
            'tahun_terbit.max' => 'Tahun terbit buku harus di bawah 2025',
            'gambarbuku.image' => 'File yang diupload harus berupa gambar',
            'gambarbuku.mimes' => 'File yang diupload harus berformat jpeg, png, jpg, gif, atau svg',
            'gambarbuku.max' => 'Ukuran gambar maksimal 2MB',
         ]);

        $books = Manajemen::findOrFail($id);
        
        if ($request->hasFile('gambarbuku')) {
            //hapus gambar lama
            Storage::delete(['public/products/' . $books->gambarbuku]);
            //upload gambar baru
            $image = $request->file('gambarbuku');
            $image->storeAs('public/products', $image->hashName());
            
            $books->update([
                'judulbuku' => $request->judulbuku,
                'gambarbuku' => $image->hashName(),
                'deskripsi' => $request->deskripsi,
            ]);
        } else {
            $books->update([
                'judulbuku' => $request->judulbuku,
                'deskripsi' => $request->deskripsi,
            ]);
        }

        // update data detail
        DetailManajemen::where('manajemen_id', $id)->update([
            'kode' => $request->kode,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
        ]);

        return redirect()->route('manajemen.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $manajemen = Manajemen::findOrFail($id);
        $manajemen->delete();
        return
            redirect()->route('manajemen.index')
            ->with('success', 'Data berhasil dihapus');
    }
}
