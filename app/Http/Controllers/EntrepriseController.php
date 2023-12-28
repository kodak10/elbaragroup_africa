<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Service;
use App\Models\Departement;
use Illuminate\Http\Request;
use App\Models\DemandeService;
use App\Models\ServiceEntreprise;
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
            'couverture' => 'image|mimes:jpeg,png,gif,webp,jpg|max:2048',
            'logo' => 'image|mimes:jpeg,png,gif,webp,jpg|max:2048'
        ];

        $messages = [
            'name.required' => 'Le champ nom est requis.',
            'nationalite.required' => 'Le champ nationalité est requis.',
            'password.confirmed' => 'Les deux champs de mot de passe ne correspondent pas.',
            'password.min' => 'Le mot de passe doit contenir au moins 6 caractères.',
            'old_password.custom_validation' => 'Le mot de passe actuel est incorrecte.',

            'email.unique' => 'L\'adresse email est déjà utilisée par un autre utilisateur.',

            'couverture.image' => 'Le fichier doit être une image valide.',
            'couverture.mimes' => 'Seules les images de type :values sont autorisées.',
            'couverture.max' => 'La taille maximale de l\'image est de :max kilo-octets.',

            'logo.image' => 'Le fichier doit être une image valide.',
            'logo.mimes' => 'Seules les images de type :values sont autorisées.',
            'logo.max' => 'La taille maximale de l\'image est de :max kilo-octets.',
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
            $image = $request->file('logo');
            $imageName = $user->id . '_' . now()->format('Ymd_His') . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/assets/images/profil', $imageName);
            $compagny->photo = $imageName;
        }
        if ($request->hasFile('couverture')) {
            $image = $request->file('couverture');
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



    public function message()
    {
        $categories = Departement::get();
        return view('dashboard.entreprises.message', compact('categories'));
    }

    public function edit_password()
    {
        $categories = Departement::get();
        return view('dashboard.entreprises.edit-password', compact('categories'));
    }

    // Service
    public function create_service(Request $request)
    {

        $categories = Departement::get();
        $services = Service::get();
        return view('dashboard.entreprises.services.create', compact('services', 'categories'));

    }

    public function create_service_store(Request $request)
    {
        $check = array(
            'service' => 'required',
            'libelle' => 'required',
            'description' => 'required',
            'delais' => 'required',
            'entreprise' => 'required',
            'images*' => 'image|mimes:jpeg,png,gif,webp,jpg|max:2048'


        );
        $request->validate($check);


        $data = array(
            'entreprise_id' => $request->entreprise,
            'service_id' => $request->service,
            'description' => $request->description,
            'libelle' => $request->libelle,
            'delais_execution' => $request->delais,
            'created_at' => now(),

        );





        if (ServiceEntreprise::insert($data)) {

            $serviceEntreprise = new ServiceEntreprise();
            $serviceEntreprise->entreprise_id = $request->entreprise;
            $serviceEntreprise->service_id = $request->service;
            $serviceEntreprise->description = $request->description;
            $serviceEntreprise->libelle = $request->libelle;
            $serviceEntreprise->delais_execution = $request->delais;
            $serviceEntreprise->created_at = now();
            $serviceEntreprise->save();



            $serviceEntrepriseId = $serviceEntreprise->id;

            if ($request->hasFile('images')) {
                $images = $request->file('images');

                foreach ($images as $image) {
                    // Générez un nom de fichier unique pour chaque image
                    $imageName = 'image_' . now()->format('Ymd_His') . '.' . $image->getClientOriginalExtension();

                    // Stockez chaque image dans le répertoire spécifié
                    $imagePath = $image->storeAs('public/assets/images/portofolio', $imageName);

                    // Créez un nouvel enregistrement dans la table "images" pour chaque image
                    $newImage = new Image();
                    $newImage->file_name = $imageName;
                    $newImage->file_path = $imagePath;
                    $newImage->service_entreprise_id = $serviceEntrepriseId; // Remplacez par l'ID du service
                    $newImage->save();
                }
            }

            return redirect('/compagny/service/create')->with('added', 'added');
        } else {
            return redirect('/compagny/service/create')->with('nothing', 'nothing');
        };
    }

    public function create_service_delete()
    {

    }



}
