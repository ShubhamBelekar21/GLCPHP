<?php


namespace App\Http\Controllers;


use App\Models\BankMasterModel;
use App\Models\BranchMasterModel;
use App\Models\CityMasterModel;
use App\Models\CommonModel;
use App\Models\DepartmentMasterModel;
use App\Models\DesignationMasterModel;
use App\Models\GradeModel;
use App\Models\IncrementMasterModel;
use App\Models\StateMasterModel;
use App\Models\StatusMasterModel;
use Illuminate\Support\Facades\DB;
use stdClass;

class HomeController extends Controller
{
    private $dbConnection;

    public function getDBName()
    {
        //$Database = DatabaseModel::select('DB')->get()->first();
        return $this->dbConnection = session()->get('Database');
    }

    public Function Index()
    {
        $Data = DB::connection($this->getDBName())->select('CALL `stp_getLatestNotice`');
        $Data1 = DB::connection($this->getDBName())->select('CALL `stp_getLatestEvent`');
        $DataButton = DB::connection($this->getDBName())->select('CALL `stp_getLatestButton`');

        $DataMarquee = DB::connection($this->getDBName())->select('CALL `stp_getLatestMarquee`');


        $DataNoticeALL = DB::connection($this->getDBName())->select('CALL `stp_getAllNotice`');

        $DataPictureALL = DB::connection($this->getDBName())->select('CALL `stp_getLatestPictures`');
        $DataPrincipalPic = DB::connection($this->getDBName())->select('CALL `stp_getLatestPrincipalImg`');
        $DataAlumini = DB::connection($this->getDBName())->select('CALL `stp_getLatestAlumini`');
        $SliderImages = DB::connection($this->getDBName())->select('CALL `stp_getLatestSliderImg`');
        $Nagarisanad = DB::connection($this->getDBName())->select('CALL `stp_getnagarisanaddetails`');
        $AntiRagging = DB::connection($this->getDBName())->select('CALL `stp_getAntiRaggingdetails`');
        $Admission = DB::connection($this->getDBName())->select('CALL `stp_getAdmissiondetails`');
        $Admission1 = DB::connection($this->getDBName())->select('CALL `stp_getAdmissiondetails1`');
        $Admission2 = DB::connection($this->getDBName())->select('CALL `stp_getAdmissiondetails2`');
        $Admission3 = DB::connection($this->getDBName())->select('CALL `stp_getAdmissiondetails3`');
        $Admission4 = DB::connection($this->getDBName())->select('CALL `stp_getAdmissiondetails4`');
        $ExamRules = DB::connection($this->getDBName())->select('CALL `stp_getExamRulesDetails`');

        return view('Home.Index', compact('Data', 'Data1', 'DataButton', 'SliderImages', 'DataMarquee', 'DataNoticeALL', 'DataPictureALL',
            'DataPrincipalPic', 'DataAlumini', 'Nagarisanad', 'AntiRagging', 'Admission', 'Admission1', 'Admission2', 'Admission3', 'Admission4', 'ExamRules'));
    }


    public Function Test()
    {
        return view('Test.Index');
    }

    function Testtt()
    {


        return view('Home.Testttt');

    }

    // CSR Statestics To Add In Home Controller
    public function CSRStatesticsIndex()
    {
        try {
            $a = HomeController::getLayoutData();

            foreach ($a as $item) {
                $LayoutAntiRaggingPDF = $item->LayoutAntiRaggingPDF;
                $LayoutNagarisanadPDF = $item->LayoutNagarisanadPDF;
                $LayoutAdmissionPDF = $item->LayoutAdmissionPDF;
                $LayoutAdmission1PDF = $item->LayoutAdmission1PDF;
                $LayoutAdmission2PDF = $item->LayoutAdmission2PDF;
                $LayoutAdmission3PDF = $item->LayoutAdmission3PDF;
                $LayoutAdmission4PDF = $item->LayoutAdmission4PDF;
                $LayoutExamRulesPDF = $item->LayoutExamRulesPDF;

            }

            $CSRStatesticsList = DB::connection($this->getDBName())->select('CALL `stp_getCSRStatisticsDetails`()');
            $DistinctHeaderList = DB::connection($this->getDBName())->select('CALL `stp_getDistinctHeaders`()');
            $DistinctValueList = DB::connection($this->getDBName())->select('CALL `stp_getDistinctValuess`()');
            foreach ($CSRStatesticsList as $item) {
                $a = $item;
                foreach ($a as $item1) {
                    $b = $item1;
                }
            }
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'HomeController', 'CSRStatesticsIndex');
            return 'Some error occurred while processing your request in CSR Statestics Index';
        }
        return view('Home.CSRStatesticsIndex',
            compact('CSRStatesticsList', 'DistinctHeaderList', 'DistinctValueList','LayoutAntiRaggingPDF','LayoutNagarisanadPDF','LayoutAdmissionPDF'
                ,'LayoutAdmission1PDF','LayoutAdmission2PDF','LayoutAdmission3PDF','LayoutAdmission4PDF','LayoutExamRulesPDF'));
    }

    //-------------------------about us index---------------------------------------//
    public function getLayoutData()
    {

        $AntiRagging = DB::connection($this->getDBName())->select('CALL `stp_getAntiRaggingdetails`');
        foreach ($AntiRagging as $item8) {
            $LayoutAntiRaggingPDF = $item8->PDF;
        }
        $LayoutNagarisanad = DB::connection($this->getDBName())->select('CALL `stp_getnagarisanaddetails`');
        foreach ($LayoutNagarisanad as $item8) {
            $LayoutNagarisanadPDF = $item8->PDF;
        }
        $Admission = DB::connection($this->getDBName())->select('CALL `stp_getAdmissiondetails`');
        foreach ($Admission as $item8) {
            $LayoutAdmissionPDF = $item8->PDF;
        }
        $Admission1 = DB::connection($this->getDBName())->select('CALL `stp_getAdmissiondetails1`');
        foreach ($Admission1 as $item8) {
            $LayoutAdmission1PDF = $item8->PDF;
        }
        $Admission2 = DB::connection($this->getDBName())->select('CALL `stp_getAdmissiondetails2`');
        foreach ($Admission2 as $item8) {
            $LayoutAdmission2PDF = $item8->PDF;
        }
        $Admission3 = DB::connection($this->getDBName())->select('CALL `stp_getAdmissiondetails3`');
        foreach ($Admission3 as $item8) {
            $LayoutAdmission3PDF = $item8->PDF;
        }
        $Admission4 = DB::connection($this->getDBName())->select('CALL `stp_getAdmissiondetails4`');
        foreach ($Admission4 as $item8) {
            $LayoutAdmission4PDF = $item8->PDF;
        }
        $ExamRules = DB::connection($this->getDBName())->select('CALL `stp_getExamRulesDetails`');
        foreach ($ExamRules as $item8) {
            $LayoutExamRulesPDF = $item8->PDF;
        }
        $obj = new stdClass;
        $obj->LayoutNagarisanadPDF = $LayoutNagarisanadPDF;
        $obj->LayoutAntiRaggingPDF = $LayoutAntiRaggingPDF;
        $obj->LayoutAdmissionPDF = $LayoutAdmissionPDF;
        $obj->LayoutAdmission1PDF = $LayoutAdmission1PDF;
        $obj->LayoutAdmission2PDF = $LayoutAdmission2PDF;
        $obj->LayoutAdmission3PDF = $LayoutAdmission3PDF;
        $obj->LayoutAdmission4PDF = $LayoutAdmission4PDF;
        $obj->LayoutExamRulesPDF = $LayoutExamRulesPDF;

        $arr = array($obj);
        return $arr;
    }

    public Function AboutUsIndex()
    {
        $a = HomeController::getLayoutData();

        foreach ($a as $item) {
            $LayoutAntiRaggingPDF = $item->LayoutAntiRaggingPDF;
            $LayoutNagarisanadPDF = $item->LayoutNagarisanadPDF;
            $LayoutAdmissionPDF = $item->LayoutAdmissionPDF;
            $LayoutAdmission1PDF = $item->LayoutAdmission1PDF;
            $LayoutAdmission2PDF = $item->LayoutAdmission2PDF;
            $LayoutAdmission3PDF = $item->LayoutAdmission3PDF;
            $LayoutAdmission4PDF = $item->LayoutAdmission4PDF;
            $LayoutExamRulesPDF = $item->LayoutExamRulesPDF;

        }
        return view('Home.AboutUsIndex', compact('LayoutAntiRaggingPDF','LayoutNagarisanadPDF','LayoutAdmissionPDF'
        ,'LayoutAdmission1PDF','LayoutAdmission2PDF','LayoutAdmission3PDF','LayoutAdmission4PDF','LayoutExamRulesPDF'));
    }

    public Function VisionMissionIndex()
    {
        $a = HomeController::getLayoutData();

        foreach ($a as $item) {
            $LayoutAntiRaggingPDF = $item->LayoutAntiRaggingPDF;
            $LayoutNagarisanadPDF = $item->LayoutNagarisanadPDF;
            $LayoutAdmissionPDF = $item->LayoutAdmissionPDF;
            $LayoutAdmission1PDF = $item->LayoutAdmission1PDF;
            $LayoutAdmission2PDF = $item->LayoutAdmission2PDF;
            $LayoutAdmission3PDF = $item->LayoutAdmission3PDF;
            $LayoutAdmission4PDF = $item->LayoutAdmission4PDF;
            $LayoutExamRulesPDF = $item->LayoutExamRulesPDF;

        }

        return view('Home.VisionMissionIndex', compact('LayoutAntiRaggingPDF','LayoutNagarisanadPDF','LayoutAdmissionPDF'
            ,'LayoutAdmission1PDF','LayoutAdmission2PDF','LayoutAdmission3PDF','LayoutAdmission4PDF','LayoutExamRulesPDF'));
    }

    public Function RTIIndex()
    {
        $a = HomeController::getLayoutData();

        foreach ($a as $item) {
            $LayoutAntiRaggingPDF = $item->LayoutAntiRaggingPDF;
            $LayoutNagarisanadPDF = $item->LayoutNagarisanadPDF;
            $LayoutAdmissionPDF = $item->LayoutAdmissionPDF;
            $LayoutAdmission1PDF = $item->LayoutAdmission1PDF;
            $LayoutAdmission2PDF = $item->LayoutAdmission2PDF;
            $LayoutAdmission3PDF = $item->LayoutAdmission3PDF;
            $LayoutAdmission4PDF = $item->LayoutAdmission4PDF;
            $LayoutExamRulesPDF = $item->LayoutExamRulesPDF;

        }

        return view('Home.RTIIndex', compact('LayoutAntiRaggingPDF','LayoutNagarisanadPDF','LayoutAdmissionPDF'
            ,'LayoutAdmission1PDF','LayoutAdmission2PDF','LayoutAdmission3PDF','LayoutAdmission4PDF','LayoutExamRulesPDF'));
    }

    public Function LawReviewIndex()
    {
        $a = HomeController::getLayoutData();

        foreach ($a as $item) {
            $LayoutAntiRaggingPDF = $item->LayoutAntiRaggingPDF;
            $LayoutNagarisanadPDF = $item->LayoutNagarisanadPDF;
            $LayoutAdmissionPDF = $item->LayoutAdmissionPDF;
            $LayoutAdmission1PDF = $item->LayoutAdmission1PDF;
            $LayoutAdmission2PDF = $item->LayoutAdmission2PDF;
            $LayoutAdmission3PDF = $item->LayoutAdmission3PDF;
            $LayoutAdmission4PDF = $item->LayoutAdmission4PDF;
            $LayoutExamRulesPDF = $item->LayoutExamRulesPDF;

        }

        return view('Home.LawReviewIndex', compact('LayoutAntiRaggingPDF','LayoutNagarisanadPDF','LayoutAdmissionPDF'
            ,'LayoutAdmission1PDF','LayoutAdmission2PDF','LayoutAdmission3PDF','LayoutAdmission4PDF','LayoutExamRulesPDF'));
    }

    public Function MagazineIndex()
    {
        $a = HomeController::getLayoutData();

        foreach ($a as $item) {
            $LayoutAntiRaggingPDF = $item->LayoutAntiRaggingPDF;
            $LayoutNagarisanadPDF = $item->LayoutNagarisanadPDF;
            $LayoutAdmissionPDF = $item->LayoutAdmissionPDF;
            $LayoutAdmission1PDF = $item->LayoutAdmission1PDF;
            $LayoutAdmission2PDF = $item->LayoutAdmission2PDF;
            $LayoutAdmission3PDF = $item->LayoutAdmission3PDF;
            $LayoutAdmission4PDF = $item->LayoutAdmission4PDF;
            $LayoutExamRulesPDF = $item->LayoutExamRulesPDF;

        }

        return view('Home.MagazineIndex', compact('LayoutAntiRaggingPDF','LayoutNagarisanadPDF','LayoutAdmissionPDF'
            ,'LayoutAdmission1PDF','LayoutAdmission2PDF','LayoutAdmission3PDF','LayoutAdmission4PDF','LayoutExamRulesPDF'));
    }

    public Function FromTheDeskOfPrincipalIndex()
    {
        $a = HomeController::getLayoutData();

        foreach ($a as $item) {
            $LayoutAntiRaggingPDF = $item->LayoutAntiRaggingPDF;
            $LayoutNagarisanadPDF = $item->LayoutNagarisanadPDF;
            $LayoutAdmissionPDF = $item->LayoutAdmissionPDF;
            $LayoutAdmission1PDF = $item->LayoutAdmission1PDF;
            $LayoutAdmission2PDF = $item->LayoutAdmission2PDF;
            $LayoutAdmission3PDF = $item->LayoutAdmission3PDF;
            $LayoutAdmission4PDF = $item->LayoutAdmission4PDF;
            $LayoutExamRulesPDF = $item->LayoutExamRulesPDF;

        }

        $DataPrincipalPic = DB::connection($this->getDBName())->select('CALL `stp_getLatestPrincipalImg`');
        return view('Home.FromTheDeskOfPrincipalIndex', compact('LayoutAntiRaggingPDF','LayoutNagarisanadPDF','LayoutAdmissionPDF'
            ,'LayoutAdmission1PDF','LayoutAdmission2PDF','LayoutAdmission3PDF','LayoutAdmission4PDF','LayoutExamRulesPDF','DataPrincipalPic'));
    }

    //--------------------------------Faculty-----------------------------------//
    public function TeachingStaffFacultyIndex()
    {
        try {
            $a = HomeController::getLayoutData();

            foreach ($a as $item) {
                $LayoutAntiRaggingPDF = $item->LayoutAntiRaggingPDF;
                $LayoutNagarisanadPDF = $item->LayoutNagarisanadPDF;
                $LayoutAdmissionPDF = $item->LayoutAdmissionPDF;
                $LayoutAdmission1PDF = $item->LayoutAdmission1PDF;
                $LayoutAdmission2PDF = $item->LayoutAdmission2PDF;
                $LayoutAdmission3PDF = $item->LayoutAdmission3PDF;
                $LayoutAdmission4PDF = $item->LayoutAdmission4PDF;
                $LayoutExamRulesPDF = $item->LayoutExamRulesPDF;

            }

            $TeachingStaffFacultyList = DB::connection($this->getDBName())->select('CALL `stp_getTeachingStaffFacultyIndex1`()');
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'HomeController', 'TeachingStaffFacultyIndex');
            return 'Some error occurred while processing your request in TeachingStaffFaculty Index';
        }
        return view('Home.TeachingStaffFacultyIndex', compact('TeachingStaffFacultyList','LayoutAntiRaggingPDF','LayoutNagarisanadPDF','LayoutAdmissionPDF'
            ,'LayoutAdmission1PDF','LayoutAdmission2PDF','LayoutAdmission3PDF','LayoutAdmission4PDF','LayoutExamRulesPDF'));
    }

    public function TeachingStaffAdjunctIndex()
    {
        try {
            $a = HomeController::getLayoutData();

            foreach ($a as $item) {
                $LayoutAntiRaggingPDF = $item->LayoutAntiRaggingPDF;
                $LayoutNagarisanadPDF = $item->LayoutNagarisanadPDF;
                $LayoutAdmissionPDF = $item->LayoutAdmissionPDF;
                $LayoutAdmission1PDF = $item->LayoutAdmission1PDF;
                $LayoutAdmission2PDF = $item->LayoutAdmission2PDF;
                $LayoutAdmission3PDF = $item->LayoutAdmission3PDF;
                $LayoutAdmission4PDF = $item->LayoutAdmission4PDF;
                $LayoutExamRulesPDF = $item->LayoutExamRulesPDF;

            }

            $TeachingStaffAdjunctList = DB::connection($this->getDBName())->select('CALL `stp_getTeachingStaffAdjunctIndex`()');
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'HomeController', 'TeachingStaffAdjunctIndex');
            return 'Some error occurred while processing your request in TeachingStaffAdjunct Index';
        }
        return view('Home.TeachingStaffAdjunctIndex', compact('TeachingStaffAdjunctList','LayoutAntiRaggingPDF','LayoutNagarisanadPDF','LayoutAdmissionPDF'
            ,'LayoutAdmission1PDF','LayoutAdmission2PDF','LayoutAdmission3PDF','LayoutAdmission4PDF','LayoutExamRulesPDF'));
    }

    public function NonTeachingStaffIndex()
    {
        try {
            $a = HomeController::getLayoutData();

            foreach ($a as $item) {
                $LayoutAntiRaggingPDF = $item->LayoutAntiRaggingPDF;
                $LayoutNagarisanadPDF = $item->LayoutNagarisanadPDF;
                $LayoutAdmissionPDF = $item->LayoutAdmissionPDF;
                $LayoutAdmission1PDF = $item->LayoutAdmission1PDF;
                $LayoutAdmission2PDF = $item->LayoutAdmission2PDF;
                $LayoutAdmission3PDF = $item->LayoutAdmission3PDF;
                $LayoutAdmission4PDF = $item->LayoutAdmission4PDF;
                $LayoutExamRulesPDF = $item->LayoutExamRulesPDF;

            }

            $NonTeachingStaffList = DB::connection($this->getDBName())->select('CALL `stp_getNonTeachingStaffIndex`()');
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'HomeController', 'NonTeachingStaffIndex');
            return 'Some error occurred while processing your request in NonTeachingStaff Index';
        }
        return view('Home.NonTeachingStaffIndex', compact('NonTeachingStaffList','LayoutAntiRaggingPDF','LayoutNagarisanadPDF','LayoutAdmissionPDF'
            ,'LayoutAdmission1PDF','LayoutAdmission2PDF','LayoutAdmission3PDF','LayoutAdmission4PDF','LayoutExamRulesPDF'));
    }

    //--------------------------------Committee-----------------------------------//

    public function CommitteeIndex()
    {
        try {
            $a = HomeController::getLayoutData();

            foreach ($a as $item) {
                $LayoutAntiRaggingPDF = $item->LayoutAntiRaggingPDF;
                $LayoutNagarisanadPDF = $item->LayoutNagarisanadPDF;
                $LayoutAdmissionPDF = $item->LayoutAdmissionPDF;
                $LayoutAdmission1PDF = $item->LayoutAdmission1PDF;
                $LayoutAdmission2PDF = $item->LayoutAdmission2PDF;
                $LayoutAdmission3PDF = $item->LayoutAdmission3PDF;
                $LayoutAdmission4PDF = $item->LayoutAdmission4PDF;
                $LayoutExamRulesPDF = $item->LayoutExamRulesPDF;

            }

            $CommitteeList = DB::connection($this->getDBName())->select('CALL `stp_getCommitteeIndex`()');
            $Data = DB::connection($this->getDBName())->select('CALL `stp_getstudentcouncildetails`');
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'HomeController', 'CommitteeIndex');
            return 'Some error occurred while processing your request in Committee Index';
        }
        return view('Home.CommitteeIndex', compact('CommitteeList', 'Data','LayoutAntiRaggingPDF','LayoutNagarisanadPDF','LayoutAdmissionPDF'
            ,'LayoutAdmission1PDF','LayoutAdmission2PDF','LayoutAdmission3PDF','LayoutAdmission4PDF','LayoutExamRulesPDF'));
    }

    //--------------------------------Program / Courses-----------------------------------//

    public function CoursesIndex()
    {
        try {
            $a = HomeController::getLayoutData();

            foreach ($a as $item) {
                $LayoutAntiRaggingPDF = $item->LayoutAntiRaggingPDF;
                $LayoutNagarisanadPDF = $item->LayoutNagarisanadPDF;
                $LayoutAdmissionPDF = $item->LayoutAdmissionPDF;
                $LayoutAdmission1PDF = $item->LayoutAdmission1PDF;
                $LayoutAdmission2PDF = $item->LayoutAdmission2PDF;
                $LayoutAdmission3PDF = $item->LayoutAdmission3PDF;
                $LayoutAdmission4PDF = $item->LayoutAdmission4PDF;
                $LayoutExamRulesPDF = $item->LayoutExamRulesPDF;

            }

            $CoursesList = DB::connection($this->getDBName())->select('CALL `stp_getcoursesdetails`');
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'HomeController', 'CoursesIndex');
            return 'Some error occurred while processing your request in Courses Index';
        }
        return view('Home.CoursesIndex', compact('CoursesList','LayoutAntiRaggingPDF','LayoutNagarisanadPDF','LayoutAdmissionPDF'
            ,'LayoutAdmission1PDF','LayoutAdmission2PDF','LayoutAdmission3PDF','LayoutAdmission4PDF','LayoutExamRulesPDF'));
    }

    //--------------------------------Tenders-----------------------------------//
    public function TendersIndex2()
    {
        try {
            $a = HomeController::getLayoutData();

            foreach ($a as $item) {
                $LayoutAntiRaggingPDF = $item->LayoutAntiRaggingPDF;
                $LayoutNagarisanadPDF = $item->LayoutNagarisanadPDF;
                $LayoutAdmissionPDF = $item->LayoutAdmissionPDF;
                $LayoutAdmission1PDF = $item->LayoutAdmission1PDF;
                $LayoutAdmission2PDF = $item->LayoutAdmission2PDF;
                $LayoutAdmission3PDF = $item->LayoutAdmission3PDF;
                $LayoutAdmission4PDF = $item->LayoutAdmission4PDF;
                $LayoutExamRulesPDF = $item->LayoutExamRulesPDF;

            }

            $TendersList = DB::connection($this->getDBName())->select('CALL `stp_getTendersIndex`()');
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'HomeController', 'TendersIndex2');
            return 'Some error occurred while processing your request in Tenders Index2';
        }
        return view('Home.TendersIndex', compact('TendersList','LayoutAntiRaggingPDF','LayoutNagarisanadPDF','LayoutAdmissionPDF'
            ,'LayoutAdmission1PDF','LayoutAdmission2PDF','LayoutAdmission3PDF','LayoutAdmission4PDF','LayoutExamRulesPDF'));
    }

    //--------------------------------Rank List-----------------------------------//
    public function RankListIndex()
    {
        try {
            $a = HomeController::getLayoutData();

            foreach ($a as $item) {
                $LayoutAntiRaggingPDF = $item->LayoutAntiRaggingPDF;
                $LayoutNagarisanadPDF = $item->LayoutNagarisanadPDF;
                $LayoutAdmissionPDF = $item->LayoutAdmissionPDF;
                $LayoutAdmission1PDF = $item->LayoutAdmission1PDF;
                $LayoutAdmission2PDF = $item->LayoutAdmission2PDF;
                $LayoutAdmission3PDF = $item->LayoutAdmission3PDF;
                $LayoutAdmission4PDF = $item->LayoutAdmission4PDF;
                $LayoutExamRulesPDF = $item->LayoutExamRulesPDF;

            }

            $RankList = DB::connection($this->getDBName())->select('CALL `stp_getRankListIndex`()');
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'HomeController', 'RankListIndex');
            return 'Some error occurred while processing your request in RankList Index';
        }
        return view('RankList.RankListIndex', compact('RankList','LayoutAntiRaggingPDF','LayoutNagarisanadPDF','LayoutAdmissionPDF'
            ,'LayoutAdmission1PDF','LayoutAdmission2PDF','LayoutAdmission3PDF','LayoutAdmission4PDF','LayoutExamRulesPDF'));
    }

    //--------------------------------Infrastructure-----------------------------------//
    public function InfrastructureIndex()
    {
        try {
            $a = HomeController::getLayoutData();

            foreach ($a as $item) {
                $LayoutAntiRaggingPDF = $item->LayoutAntiRaggingPDF;
                $LayoutNagarisanadPDF = $item->LayoutNagarisanadPDF;
                $LayoutAdmissionPDF = $item->LayoutAdmissionPDF;
                $LayoutAdmission1PDF = $item->LayoutAdmission1PDF;
                $LayoutAdmission2PDF = $item->LayoutAdmission2PDF;
                $LayoutAdmission3PDF = $item->LayoutAdmission3PDF;
                $LayoutAdmission4PDF = $item->LayoutAdmission4PDF;
                $LayoutExamRulesPDF = $item->LayoutExamRulesPDF;

            }

            $InfrastructureList = DB::connection($this->getDBName())->select('CALL `stp_getInfrastructureIndex`()');
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'HomeController', 'InfrastructureIndex');
            return 'Some error occurred while processing your request in Infrastructure Index';
        }
        return view('Infrastructure.InfrastructureIndex', compact('InfrastructureList','LayoutAntiRaggingPDF','LayoutNagarisanadPDF','LayoutAdmissionPDF'
            ,'LayoutAdmission1PDF','LayoutAdmission2PDF','LayoutAdmission3PDF','LayoutAdmission4PDF','LayoutExamRulesPDF'));
    }

    //--------------------------------Alumni-----------------------------------//
    public function AlumniIndex()
    {
        try {
            $a = HomeController::getLayoutData();

            foreach ($a as $item) {
                $LayoutAntiRaggingPDF = $item->LayoutAntiRaggingPDF;
                $LayoutNagarisanadPDF = $item->LayoutNagarisanadPDF;
                $LayoutAdmissionPDF = $item->LayoutAdmissionPDF;
                $LayoutAdmission1PDF = $item->LayoutAdmission1PDF;
                $LayoutAdmission2PDF = $item->LayoutAdmission2PDF;
                $LayoutAdmission3PDF = $item->LayoutAdmission3PDF;
                $LayoutAdmission4PDF = $item->LayoutAdmission4PDF;
                $LayoutExamRulesPDF = $item->LayoutExamRulesPDF;

            }

            $AlumniList = DB::connection($this->getDBName())->select('CALL `stp_getAlumniIndex`()');
            $PartialAlumniList = DB::connection($this->getDBName())->select('CALL `stp_getAlumniPartialIndex`()');
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'HomeController', 'AlumniIndex');
            return 'Some error occurred while processing your request in Alumni Index';
        }
        return view('Alumni.AlumniIndex', compact('AlumniList', 'PartialAlumniList','LayoutAntiRaggingPDF','LayoutNagarisanadPDF','LayoutAdmissionPDF'
            ,'LayoutAdmission1PDF','LayoutAdmission2PDF','LayoutAdmission3PDF','LayoutAdmission4PDF','LayoutExamRulesPDF'));
    }

    //-----------------------------------New Law Review---------------------------------------------//
    public function NewLawReviewIndex()
    {
        try {
            $a = HomeController::getLayoutData();

            foreach ($a as $item) {
                $LayoutAntiRaggingPDF = $item->LayoutAntiRaggingPDF;
                $LayoutNagarisanadPDF = $item->LayoutNagarisanadPDF;
                $LayoutAdmissionPDF = $item->LayoutAdmissionPDF;
                $LayoutAdmission1PDF = $item->LayoutAdmission1PDF;
                $LayoutAdmission2PDF = $item->LayoutAdmission2PDF;
                $LayoutAdmission3PDF = $item->LayoutAdmission3PDF;
                $LayoutAdmission4PDF = $item->LayoutAdmission4PDF;
                $LayoutExamRulesPDF = $item->LayoutExamRulesPDF;

            }

            $NewLawReviewList = DB::connection($this->getDBName())->select('CALL `stp_getNewLawReviewdetails`()');
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'HomeController', 'NewLawReviewIndex');
            return 'Some error occurred while processing your request in NewLawReview Index';
        }
        return view('NewLawReview.NewLawReviewIndex', compact('NewLawReviewList','LayoutAntiRaggingPDF','LayoutNagarisanadPDF','LayoutAdmissionPDF'
            ,'LayoutAdmission1PDF','LayoutAdmission2PDF','LayoutAdmission3PDF','LayoutAdmission4PDF','LayoutExamRulesPDF'));
    }


}

