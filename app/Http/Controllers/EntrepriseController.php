<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Departement;
use Illuminate\Http\Request;
use App\Models\DemandeService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class EntrepriseController extends Controller
{
    // Account
    public function update_password(Request $request)
    {
        $user = Auth::user() ;

        $rules = [
            'password' => 'nullable|string|confirmed',
        ];

        $messages = [
            'password.confirmed' => 'Les deux champs de mot de passe ne correspondent pas.',
            'password.min' => 'Le mot de passe doit contenir au moins 6 caractères.',
            'old_password.custom_validation' => 'Le mot de passe actuel est incorrecte.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }


        if ($request->filled('old_password')) {
            // Valider l'ancien mot de passe
            if (!password_verify($request->input('old_password'), $user->password)) {
                return redirect()->back()->with('error', 'Mot de passe actuel incorrect.');

            }

            // Mettre à jour le nouveau mot de passe
            $user->password = bcrypt($request->input('password'));
        }

        $user->save();

        return redirect('/compagny/profil/edit')->with('success', 'Profil mis à jour avec succès.');
    }

    public function edit_account()
    {
        $categories = Departement::get();
        return view('dashboard.entreprises.edit-account', compact('categories'));
    }

    public function update(Request $request)
    {

        $user = Auth::user() ;
        $compagny = Auth::user()->compagny ;

        //$extension = strtolower($request->file('image')->getClientOriginalExtension());

        $rules = [
            'name' => 'required|string|max:255',
            'nationalite' => 'required|string|max:255',
            'password' => 'nullable|string|confirmed',
            'telephone' => 'nullable|string|max:15',
            'image' => 'image|mimes:jpeg,png,gif,webp,jpg|max:2048'
        ];

        $messages = [
            'name.required' => 'Le champ nom est requis.',
            'nationalite.required' => 'Le champ nationalité est requis.',
            'password.confirmed' => 'Les deux champs de mot de passe ne correspondent pas.',
            'password.min' => 'Le mot de passe doit contenir au moins 6 caractères.',
            'old_password.custom_validation' => 'Le mot de passe actuel est incorrecte.',
            'image.image' => 'Le fichier doit être une image valide.',
            'image.mimes' => 'Seules les images de type :values sont autorisées.',
            'image.max' => 'La taille maximale de l\'image est de :max kilo-octets.',
            'email.unique' => 'L\'adresse email est déjà utilisée par un autre utilisateur.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }


        if ($request->filled('old_password')) {
            // Valider l'ancien mot de passe
            if (!password_verify($request->input('old_password'), $user->password)) {
                return redirect()->back()->with('error', 'Mot de passe actuel incorrect.');

            }

            // Mettre à jour le nouveau mot de passe
            $user->password = bcrypt($request->input('password'));
        }

        if ($request->hasFile('logo')) {
            $image = $request->file('image');
            $imageName = $user->id . '_' . now()->format('Ymd_His') . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/assets/images/profil', $imageName);
            $compagny->photo = $imageName;
        }
        if ($request->hasFile('couverture')) {
            $image = $request->file('image');
            $imageName = $user->id . '_' . now()->format('Ymd_His') . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/assets/images/couverture', $imageName);
            $compagny->photo = $imageName;
        }


        $user->name = $request->input('name');

        $compagny->name = $request->input('name');
        $compagny->nationalite = $request->input('nationalite');
        $compagny->site_web = $request->input('site_web');
        $compagny->about = $request->input('about');
        $compagny->facebook = $request->input('facebook');


        $user->save();
        $compagny->save();


        return redirect('/compagny/mon_compte')->with('success', 'Profil mis à jour avec succès.');
    }


    public function index()
    {
        $categories = Departement::get();
        $demandes = DemandeService::where('entreprise_id', Auth::user()->compagny->id);

        return view('dashboard.entreprises.home', compact('demandes', 'categories'));
    }

    // Service
    public function create_service()
    {
        $service = Service::get();
        return view('dashboard.entreprises.services.create', compact('service'));
    }

    public function create_service_store()
    {

    }

    public function create_service_edit()
    {

    }

    public function create_service_update()
    {

    }

    public function create_service_delete()
    {

    }



}
