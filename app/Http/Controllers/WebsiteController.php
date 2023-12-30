<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Entreprise;
use App\Models\Departement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ServiceEntreprise;



class WebsiteController extends Controller
{
    public function index(Request $request)
    {
        $categories = Departement::get();
        $categories_smalls = Departement::take(10)->get();
        $entreprises = Entreprise::take(8)->get();
        $services = Service::take(8)->get();
        return view('index', compact('entreprises', 'categories', 'categories_smalls', 'services'));
    }

    public function login()
    {
        $categories = Departement::get();
        return view('login', compact('categories'));
    }

    public function departements()
    {
        $categories = Departement::get();

        return view('departements', compact('categories'));
    }


    public function register()
    {
        $categories = Departement::get();
        return view('register', compact('categories'));
    }

    public function services()
    {
        $categories = Departement::get();
        $services = Service::has('entreprises')->paginate(8);

        return view('services' , compact('categories', 'services'));
    }

    public function search(Request $request)
    {

        $categories = Departement::get();

        $category = $request->input('category');
        $keyword = $request->input('keyword');

        // $query = DB::table('services');
        $query = Service::has('entreprises');
        //$services = Service::has('entreprises')->paginate(8);


        if (!empty($category)) {
            $query->where('departement_id', $category);
        }

        if (!empty($keyword)) {
            $query->where('libelle', 'like', '%' . $keyword . '%');
        }

        $services = $query->paginate(8);


        return view('services', compact('services', 'category', 'categories'));
    }

    public function showEntrepriseService(string $slug)
    {

         $serviceEntreprises = DB::table('service_entreprises')
            ->join('services', 'service_entreprises.service_id', '=', 'services.id')
            ->join('entreprises', 'service_entreprises.entreprise_id', '=', 'entreprises.id')
            ->where('services.libelle', $slug)
            ->where('entreprises.approve', '=' , '1')
            //->select('entreprises.*', 'entreprises.couvertures as couverture') // Utilisez un alias p
            ->select('*')
            ->paginate(10);


        $categories = Departement::get();
        return view('show_entreprises_services', compact('serviceEntreprises', 'categories'));
    }

    public function serviceShow($entreprise_nom)
    {


        $images = DB::table('images_service_entreprises')
        ->join('service_entreprises', 'images_service_entreprises.service_entreprise_id', '=', 'service_entreprises.id')
        ->join('entreprises', 'service_entreprises.entreprise_id', '=', 'entreprises.id')
        //->join('entreprises', 'service_entreprises.entreprise_id', '=', 'entreprises.id')
        //->where('service_entreprises.entreprise_id', )
        ->get();


        $serviceDetails = DB::table('service_entreprises')
        ->join('services', 'service_entreprises.service_id', '=', 'services.id')
        ->join('entreprises', 'service_entreprises.entreprise_id', '=', 'entreprises.id')
        ->where('entreprises.name', $entreprise_nom)
        ->select('*')
        // ->select('service_entreprises.service_id',
        // 'service_entreprises.entreprise_id',

        // 'entreprises.id as entreprise_id',
        // 'services.id as services_id',

        // 'service_entreprises.libelle as se_libelle',
        // 'service_entreprises.description as se_description',
        // 'service_entreprises.delais_execution as delais_execution',
        // 'service_entreprises.image as se_image',
        // 'services.libelle as service_libelle',
        // 'entreprises.name as entreprise_name',
        // 'entreprises.type_entreprise as type_entreprise',
        // 'entreprises.localisation as localisation',
        // 'services.libelle as service_libelle',


        //)
        ->first();

        $categories = Departement::get();
        return view('show_services_details', compact('serviceDetails', 'categories', 'images'));
    }

    public function contact()
    {
        $categories = Departement::get();
        return view('contact', compact('categories'));
    }

    public function about()
    {
        $categories = Departement::get();
        return view('about', compact('categories'));
    }

    public function entreprise_service($id){
        $categories = Departement::get();
        $entreprises = Entreprise::with('services')->find($id);
        $services = $entreprises->services()->paginate(8);
        return view('service_entreprises', compact('categories', 'entreprises', 'services'));
    }


}
