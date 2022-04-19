<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class OrdersController extends Controller
{
    public function checkout()
    {
        return view('orders.checkout');
    }

    public function store(Request $request)
    {
        // Valideer het formulier zodat alle velden verplicht zijn.
        // Vul het formulier terug in, en toon de foutmeldingen.
        $user = Auth::user();
        $request->validate([
            'voornaam' => 'required',
            'naam' => 'required',
            'straat' => 'required',
            'huisnummer' => 'required',
            'straat' => 'required',
            'postcode' => 'required',
            'woonplaats' => 'required',
        ]);
        // Maak een nieuw "order" met de gegevens uit het formulier in de databank
        // Zorg ervoor dat hett order gekoppeld is aan de ingelogde gebruiker.
        $order = new Order();
        $order->user_id = $user->id;
        $order->voornaam = $request->voornaam;
        $order->achternaam = $request->naam;
        $order->straat = $request->straat;
        $order->huisnummer = $request->huisnummer;
        $order->postcode = $request->postcode;
        $order->woonplaats = $request->woonplaats;
        $order->save();

        // Zoek alle producten op die gekoppeld zijn aan de ingelogde gebruiker (shopping cart)

        $shopping_cart = $user->cart()->get();
        foreach ($shopping_cart as $key => $item) {
            // dd(
            //     $item->pivot->product_id,
            //     $item->pivot->quantity,
            //     $item->pivot->size
            // );
            $item->orders()->attach([
                $key => [
                    'order_id' => $order->id,
                    'product_id' => $item->pivot->product_id,
                    'quantity' => $item->pivot->quantity,
                    'size' => $item->pivot->size,
                ]
            ]);
        };

        // Overloop alle gekoppelde producten van een user (shopping cart)
        // Attach het product, met bijhorende quantity en size, aan het order
        // https://laravel.com/docs/9.x/eloquent-relationships#retrieving-intermediate-table-columns
        // Detach tegelijk het product van de ingelogde gebruiker zodat de shopping cart terug leeg wordt.

        $user->cart()->detach();

        // BONUS: Als er een discount code in de sessie zit koppel je deze aan het discount_code_id in het order model
        // Verwijder nadien ook de discount code uit de sessie


        // BONUS: Stuur een e-mail naar de gebruiker met de melding dat zijn bestelling gelukt is,
        // samen met een knop of link naar de show pagina van het order


        // Redirect naar de show pagina van het order en pas de functie daar aan
        return redirect()->route('orders.show', $order->id);
    }

    public function index()
    {
        // Zoek alle orders van de ingelogde gebruiker op. Vervang de "range" hieronder met de juiste code
        $user = Auth::user();
        // Pas de views aan zodat de juiste info van een order getoond word in de "order" include file
        return view('orders.index', [
            'orders' => Order::where('user_id', $user->id)->get()
        ]);
    }

    public function show($id)
    {
        // Order $order
        // Beveilig het order met een GATE zodat je enkel jouw eigen orders kunt bekijken.

        // In de URL wordt het id van een order verstuurd. Zoek het order uit de url op.
        // Zoek de bijbehorende producten van het order hieronder op.
        $user = Auth::user();
        $order = Order::find($id);

        if (!Gate::allows('order_show', $order)) {
            abort(403);
        }

        $products = $order->products()->get();

        // Geef de juiste data door aan de view
        // Pas de "order-item" include file aan zodat de gegevens van het order juist getoond worden in de website
        return view('orders.show', [
            'order' => $order,
            'products' => $products
        ]);
    }
}