<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Pricing\Pricing;
use App\Models\Backend\Pricing\PricingDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PricingController extends Controller
{
    public function index()
    {
        $title = 'Pricing';
        $pricing = Pricing::latest()->paginate(10)->withQueryString();

        return view('backend.pricing.index', compact('title', 'pricing'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'nullable|string|max:255',
            'best' => 'nullable|in:0,1', // Memastikan best hanya 0 atau 1
            'price' => 'required|integer',
            'payment_period' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $best = $request->has('best') ? 1 : 0;

        // Simpan foto jika ada
        $photoPath = $request->hasFile('photo') ? $request->file('photo')->store('pricing_photos', 'public') : null;

        $pricing = Pricing::create([
            'title' => $request->title,
            'category' => $request->category,
            'best' => $best,
            'price' => $request->price,
            'payment_period' => $request->payment_period,
            'photo' => $photoPath,
        ]);

        return redirect()->route('pricing.index')->with('success', 'Pricing berhasil ditambahkan');
    }

    public function show(Pricing $pricing)
    {
        $title = 'Pricing ' . $pricing->title;

        return view('backend.pricing.show', compact('title', 'pricing'));
    }

    public function update(Request $request, Pricing $pricing)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'nullable|string|max:255',
            'best' => 'nullable|in:0,1', // Memastikan best hanya 0 atau 1
            'price' => 'required|integer',
            'payment_period' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $best = $request->has('best') ? 1 : 0;

        // Update foto jika ada yang baru
        if ($request->hasFile('photo')) {
            if ($pricing->photo) {
                Storage::disk('public')->delete($pricing->photo);
            }
            $photoPath = $request->file('photo')->store('pricing_photos', 'public');
        } else {
            $photoPath = $pricing->photo; // Gunakan foto lama jika tidak ada file baru
        }

        $pricing->update([
            'title' => $request->title,
            'category' => $request->category,
            'best' => $best,
            'price' => $request->price,
            'payment_period' => $request->payment_period,
            'photo' => $photoPath,
        ]);

        return redirect()->route('pricing.index')->with('success', 'Pricing berhasil diperbarui');
    }

    public function destroy(Pricing $pricing)
    {
        if ($pricing->photo) {
            Storage::disk('public')->delete($pricing->photo);
        }

        $pricing->delete();

        return redirect(route('pricing.index'))->with('success', 'Pricing berhasil dihapus');
    }

    public function detailStore(Pricing $pricing, Request $request)
    {
        $request->validate([
            'list' => ['required'],
        ]);

        DB::beginTransaction();
        try {
            PricingDetail::create([
                'pricing_id' => $pricing->id,
                'list' => $request->list,
            ]);

            DB::commit();

            return redirect(route('pricing.show', $pricing->id))->with('success', 'Detail berhasil ditambahkan');
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Error: ' . $th->getMessage());
        }
    }

    public function detailDestroy(PricingDetail $pricingDetail)
    {
        $pricingDetail->delete();

        return redirect(route('pricing.show', $pricingDetail->pricing_id))->with('success', 'Detail berhasil dihapus');
    }
}
