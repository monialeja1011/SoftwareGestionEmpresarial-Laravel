<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Product;
use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function index()
    {
        $sales = Sale::with('client')
            ->latest('date')
            ->get();

        return view('sales.index', compact('sales'));
    }

    public function create()
    {
        $clients = Client::orderBy('name')->get();
        $products = Product::disponibles()->orderBy('name')->get();

        return view('sales.create', compact('clients', 'products'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'client_id' => 'required|exists:clients,id',
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
            'date' => 'required|date',
            'status' => 'required|string|max:30',
        ]);

        $product = Product::findOrFail($validated['product_id']);

        if ($validated['quantity'] > $product->stock) {
            return back()
                ->withErrors(['quantity' => 'La cantidad supera el stock disponible.'])
                ->withInput();
        }

        $total = $validated['quantity'] * $product->price;

        $sale = Sale::create([
            'client_id' => $validated['client_id'],
            'date' => $validated['date'],
            'total' => $total,
            'status' => $validated['status'],
        ]);

        $sale->details()->create([
            'product_id' => $product->id,
            'quantity' => $validated['quantity'],
            'unit_price' => $product->price,
        ]);

        $product->decrement('stock', $validated['quantity']);

        return redirect()
            ->route('sales.index')
            ->with('success', 'Venta registrada correctamente.');
    }

    public function show(Sale $sale)
    {
        $sale->load('client', 'details.product');

        return view('sales.show', compact('sale'));
    }

    public function edit(Sale $sale)
    {
        $clients = Client::orderBy('name')->get();

        return view('sales.edit', compact('sale', 'clients'));
    }

    public function update(Request $request, Sale $sale)
    {
        $validated = $request->validate([
            'client_id' => 'required|exists:clients,id',
            'date' => 'required|date',
            'status' => 'required|string|max:30',
        ]);

        $sale->update($validated);

        return redirect()
            ->route('sales.index')
            ->with('success', 'Venta actualizada correctamente.');
    }

    public function destroy(Sale $sale)
    {
        $sale->delete();

        return redirect()
            ->route('sales.index')
            ->with('success', 'Venta eliminada correctamente.');
    }
}