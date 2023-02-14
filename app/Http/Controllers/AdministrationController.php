<?php


namespace App\Http\Controllers;
use App\Models\BankMasterModel;
use App\Models\BranchMasterModel;
use App\Models\CityMasterModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use mysql_xdevapi\Exception;



class AdministrationController extends Controller
{
    private $dbConnection;

    public function getDBName()
    {
        //$Database = DatabaseModel::select('DB')->get()->first();
        return $this->dbConnection = session()->get('Database');
    }
































































































}
