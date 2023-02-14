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

class GLCMasterController extends Controller
{

    private $dbConnection;

    public function getDBName()
    {
        //$Database = DatabaseModel::select('DB')->get()->first();
        return $this->dbConnection = session()->get('Database');
    }

    public function FourButtonStatusChange($id, $IsActive)
    {
        $StatusChange = DB::connection($this->getDBName())->select('CALL `stp_changeActiveStatusFourButton`(?,?)'
            , array($id, $IsActive));
        return json_encode($StatusChange);
    }

    // Button Index
    public function FourButtonIndex()
    {
        try {
            $FourButtonIndexList = DB::connection($this->getDBName())->select('CALL `stp_GetDataOfButtons`()');
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'FourButtonIndex');
            return 'Some error occurred while processing your request in FourButton Index';
        }
        return view('GLCMaster.FourButtonIndex', compact('FourButtonIndexList'));
    }

    // Button Create Get

    public function EditButtonDetails($id)
    {
        try {
            $EditButton = DB::connection($this->getDBName())->select('CALL `stp_getButtonDetailsToEdit`(?)'
                , array($id));
            foreach ($EditButton as $item) {

                $DisplayText = $item->DisplayText;
                $PdfUrl = $item->PdfUrl;
//                $Url = $item->Url;
                $IsActive = $item->IsActive;
            }
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'EditButtonDetails');
            return 'Some error occurred while processing your request in Edit ButtonDetails';
        }
        return view('GLCMaster.EditButtonDetails',
            compact('DisplayText', 'PdfUrl','IsActive','id'));
    }

    public function PostEditButtonDetails(request $request)
    {
        try {
            $Buttons = array();
            $DBButtons ="";



            $validator = Validator::make($request->all(), [
                'uploadpdf' => 'required|mimes:png,jpg,jpeg,csv,txt,pdf|max:2048'
            ]);

            if ($validator->fails()) {

                $Buttons['success'] = 0;
                $Buttons['error'] = $validator->errors()->first('file'); // Error response

            }
            else {
                if ($request->file('uploadpdf')) {

                    $file = $request->file('uploadpdf');
                    $filename = time() . '_' . $file->getClientOriginalName();

                    // File extension
                    $extension = $file->getClientOriginalExtension();

                    // File upload location
                    $location = 'Upload/Buttons/PDF/';

                    $DBButtons = 'Upload/Buttons/PDF/' . $filename;

//                $location = 'files';

                    // Upload file
                    $file->move($location, $filename);

                    // File path
                    $filepath = url('file/' . $filename);

                    // Response
                    $Buttons['success'] = 1;
                    $Buttons['message'] = 'Uploaded Successfully!';
                    $Buttons['filepath'] = $filepath;
                    $Buttons['extension'] = $extension;

                } else {
                    // Response
                    $Buttons['success'] = 2;
                    $Buttons['message'] = 'File not uploaded.';


                }
            }

            if ($DBButtons == null || $DBButtons == "") {
                $id = $request["id"];
                $DisplayText = $request["DisplayText"];
//                $PdfUrl = $request["PdfUrl"];


                DB::connection($this->getDBName())->select('CALL `stp_UpdateTitleInFourButtons`(?,?)'
                    , array($id ,$DisplayText));

            } else {
                $id = $request["id"];
                $DisplayText = $request["DisplayText"];
//          $PdfUrl = $request["PdfUrl"];

                DB::connection($this->getDBName())->select('CALL `stp_UpdateFourButtonDetails`(?,?,?)'
                    , array($id ,$DisplayText, $DBButtons));
            }



//            $id = $request["id"];
//            $DisplayText = $request["DisplayText"];
////          $PdfUrl = $request["PdfUrl"];
//
//            DB::connection($this->getDBName())->select('CALL `stp_UpdateFourButtonDetails`(?,?,?)'
//                , array($id ,$DisplayText, $DBButtons));


        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'PostEditButtonDetails');
            return 'Some error occurred while processing your request in PostEdit ButtonDetails';
        }
//        return \Redirect::Route('FourButtonIndex')->with('flash_message', 'Button Added Successfully');
        return json_encode($Buttons);
    }


    public function PostEditButtonsDetailsForUrl(Request $request)
    {
        try {

            $Buttons = array();


            $id = $request["id"];
            $DisplayText = $request["DisplayText"];
            $PdfUrl = $request["Enterurl"];

            DB::connection($this->getDBName())->select('CALL `stp_UpdateFourButtonDetails`(?,?,?)'
                , array($id, $DisplayText, $PdfUrl));

        }
        catch(\Exception $ex){
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'PostEditButtonsDetailsForUrl');
            return 'Some error occurred while processing your request in PostEdit ButtonsDetailsForUrl';
        }

//        return \Redirect::Route('FourButtonIndex')->with('flash_message', 'New Button Has Successfully Created');
        return json_encode($Buttons);

    }


    public function ViewButtonDetails($id)
    {
        try {
            $ViewButton = DB::connection($this->getDBName())->select('CALL `stp_getButtonDetailsToEdit`(?)'
                , array($id));
            foreach ($ViewButton as $item) {

                $DisplayText = $item->DisplayText;
                $PdfUrl = $item->PdfUrl;
//                $Url = $item->Url;
                $IsActive = $item->IsActive;
            }
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'ViewButtonDetails');
            return 'Some error occurred while processing your request in View ButtonDetails';
        }
        return view('GLCMaster.ViewButtonDetails',
            compact('DisplayText', 'PdfUrl', 'id', 'IsActive'));
    }

    //-------------------------------------------------- NoticeSection ------------------------------------------------------------//

    public function NoticeStatusChange($id, $IsActive)
    {
        $NoticeChange = DB::connection($this->getDBName())->select('CALL `stp_changeActiveStatusNotice`(?,?)'
            , array($id, $IsActive));
        return json_encode($NoticeChange);
    }

//    Notice Section Index

    public function NoticeSectionIndex()
    {
        try {
            $NoticeSectionList = DB::connection($this->getDBName())->select('CALL `stp_getNoticeDetails`()');
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'NoticeSectionIndex');
            return 'Some error occurred while processing your request in NoticeSection Index';
        }
        return view('GLCMaster.NoticeSectionIndex', compact('NoticeSectionList'));
    }

//    Create Notice Section Get

    public function CreateNoticeDetails()
    {
        try {
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'CreateNoticeDetails');
            return 'Some error occurred while processing your request in Create NoticeDetails';
        }
        return view('GLCMaster.CreateNoticeDetails');
    }

    // Notice Create Post

    /*public function PostNoticeDetails(Request $request)
    {
        try {

            $data = array();

            $validator = Validator::make($request->all(), [
                'file' => 'required|mimes:pdf|max:2048'
            ]);

            if ($validator->fails()) {

                $data['success'] = 0;
                $data['error'] = $validator->errors()->first('file');// Error response

            } else {
                if ($request->file('file')) {

                    $file = $request->file('file');
                    $filename = time() . '_' . $file->getClientOriginalName();

                    // File extension
                    $extension = $file->getClientOriginalExtension();

                    // File upload location
                    $location = 'Upload/Notice/Pdf/';
//                    $location = 'D:\PHP\GLC\GLCPHP\public\Upload/';

//                    $DBPrincipalImage = 'D:\PHP\GLC\GLCPHP\public\Upload/' . $filename;
                    $DBNoticePDF = 'Upload/Notice/Pdf/' . $filename;
//                $location = 'files';

                    // Upload file
                    $file->move($location, $filename);

                    // File path
                    $filepath = url('files/' . $filename);

                    // Response
                    $data['success'] = 1;
                    $data['message'] = 'Uploaded Successfully!';
                    $data['filepath'] = $filepath;
                    $data['extension'] = $extension;
                } else {
                    // Response
                    $data['success'] = 2;
                    $data['message'] = 'File not uploaded.';
                }
            }


            $Title = $request["Title"];
            $Description = $request["Description"];
            $ShortDescription = $request["ShortDescription"];
            $Url = $request["Url"];
//            $Url = $destinationPath.$filename;
            DB::connection($this->getDBName())->select('CALL `stp_InsertIntoNoticeSection`(?,?,?,?,?)'
                , array($Title, $Description, $ShortDescription, $Url, '1'));

        } catch (\Exception $ex) {
        }
        return \Redirect::route('NoticeSectionIndex')->with('flash_message', 'New Notice Has Successfully Created');
    }*/

    public function PostNoticeDetails(Request $request)
    {
        try {

            $data = array();

            $validator = Validator::make($request->all(), [
                'file' => 'required|mimes:png,jpg,jpeg,csv,txt,pdf|max:2048'
            ]);

            if ($validator->fails()) {

                $data['success'] = 0;
                $data['error'] = $validator->errors()->first('file'); // Error response

            }
            else {
                if ($request->file('file')) {

                    $file = $request->file('file');
                    $filename = time() . '_' . $file->getClientOriginalName();

                    // File extension
                    $extension = $file->getClientOriginalExtension();

                    // File upload location
                    $location = 'Upload/Notice/PDF/';

                    $DBNotice = 'Upload/Notice/PDF/' . $filename;

//                $location = 'files';

                    // Upload file
                    $file->move($location, $filename);

                    // File path
                    $filepath = url('files/' . $filename);

                    // Response
                    $data['success'] = 1;
                    $data['message'] = 'Uploaded Successfully!';
                    $data['filepath'] = $filepath;
                    $data['extension'] = $extension;
                } else {
                    // Response
                    $data['success'] = 2;
                    $data['message'] = 'File not uploaded.';
                }
            }

            $Title = $request["Title"];
            $Description = $request["Description"];
            $ShortDescription = $request["ShortDescription"];

            DB::connection($this->getDBName())->select('CALL `stp_InsertIntoNoticeSection`(?,?,?,?,?)'
                , array($Title,$Description, $ShortDescription, $DBNotice, '1'));

        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'PostNoticeDetails');
            return 'Some error occurred while processing your request in Post NoticeDetails';
        }
        return response()->json($data);
    }
//    Edit Notice Section

    public function EditNoticeDetails($id)
    {
        try {
            $EditNotice = DB::connection($this->getDBName())->select('CALL `stp_getNoticeDetailsToEdit`(?)'
                , array($id));
            foreach ($EditNotice as $item) {
                $Title = $item->Title;
                $Description = $item->Description;
                $ShortDescription = $item->ShortDescription;
                /*$DBNotice = $item->PDFUrl;*/
                $PDFUrl = $item->PDFUrl;
                $IsActive = $item->IsActive;
            }
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'EditNoticeDetails');
            return 'Some error occurred while processing your request in Edit NoticeDetails';
        }
        return view('GLCMaster.EditNoticeDetails',
            compact('Title', 'Description', 'ShortDescription', 'PDFUrl','IsActive', 'id'));
    }

//    Notice Edit Post Function

    public function PostEditNoticeDetails(request $request)
    {
        try {


            $PDFUrl = "";
            $data = array();
            $files = $request->file('file');
            if ($request->hasFile('file')) {

                $file = $request->file('file');

                $string = $file->getClientOriginalName();
                $filename = str_replace(' ', '-', $string);
                $extension = $file->getClientMimeType();


                // File upload location
                $location = 'Upload/Notice/PDF/';

                $PDFUrl = 'Upload/Notice/PDF/' . $filename;

                // Upload file
                $file->move($location, $filename);

                // File path
                $filepath = url('files/' . $filename);

                // Response
                $data['success'] = 1;
                $data['message'] = 'Uploaded Successfully!';
                $data['filepath'] = $filepath;
                $data['extension'] = $extension;
            }


            if ($PDFUrl == null || $PDFUrl == "") {
                $id = $request["id"];
                $Title = $request["Title"];
                $Description = $request["Description"];
                $ShortDescription = $request["ShortDescription"];

                /*$PDFUrl = $request["Url"];*/
                DB::connection($this->getDBName())->statement('CALL `stp_UpdateTitleInNoticeDetails`(?,?,?,?)'
                    , array($id, $Title,$Description, $ShortDescription));
            } else {
                $id = $request["id"];
                $Title = $request["Title"];
                $Description = $request["Description"];
                $ShortDescription = $request["ShortDescription"];
                /*$PDFUrl = $request["PDFUrl"];*/
                DB::connection($this->getDBName())->statement('CALL `stp_UpdatePDFInNoticeDetails`(?,?,?,?,?)'
                    , array($id, $Title, $Description ,$ShortDescription ,$PDFUrl));
            }

            /*$id = $request["id"];
            $Title = $request["Title"];
            $Description = $request["Description"];
            $ShortDescription = $request["ShortDescription"];
            $UpdatedPdf = $request["UpdatedPdf"];
            $PDFUrl = $request["Url"];*/
            /*DB::connection($this->getDBName())->statement('CALL `stp_UpdateNoticeDetails`(?,?,?,?,?)'
                , array($id, $Title, $Description, $ShortDescription, $UpdatedPdf, $PDFUrl));*/
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'PostEditNoticeDetails');
            return 'Some error occurred while processing your request in PostEdit NoticeDetails';
        }
        return \Redirect::route('NoticeSectionIndex')->with('flash_message', 'Notice Added Successfully');
    }

    //    Notice View Function

    public function ViewNoticeDetails($id)
    {
        try {

            $ViewNotice = DB::connection($this->getDBName())->select('CALL `stp_getNoticeDetailsToEdit`(?)'
                , array($id));
            foreach ($ViewNotice as $item) {
                $Title = $item->Title;
                $Description = $item->Description;
                $ShortDescription = $item->ShortDescription;

                $PDFUrl = $item->PDFUrl;
                $IsActive = $item->IsActive;
            }
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'ViewNoticeDetails');
            return 'Some error occurred while processing your request in View NoticeDetails';
        }
        return view('GLCMaster.ViewNoticeDetails',
            compact('Title', 'Description', 'ShortDescription', 'PDFUrl', 'IsActive', 'id'));
    }

    //-----------------------------------------------Event Section---------------------------------------------------------------//

    public function EventStatusChange($id, $IsActive)
    {
        $EventChange = DB::connection($this->getDBName())->select('CALL `stp_changeActiveStatusEvent`(?,?)'
            , array($id, $IsActive));
        return json_encode($EventChange);
    }

//    Event Section Index

    public function EventSectionIndex()
    {
        try {
            $EventSectionList = DB::connection($this->getDBName())->select('CALL `stp_getEventDetails`()');
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'EventSectionIndex');
            return 'Some error occurred while processing your request in EventSection Index';
        }
        return view('GLCMaster.EventSectionIndex', compact('EventSectionList'));
    }

    // Event Create Get

    public function CreateEventDetails()
    {
        try {

        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'CreateEventDetails');
            return 'Some error occurred while processing your request in Create EventDetails';

        }
        return view('GLCMaster.CreateEventDetails');
    }

    // Events Create Post

    public function PostEventDetails(Request $request)
    {
        try {

            $data1 = array();

                if ($request->file('file')) {

                    $file = $request->file('file');
                    $filename = time() . '_' . $file->getClientOriginalName();

                    // File extension
                    $extension = $file->getClientOriginalExtension();

                    // File upload location
                    $location = 'Upload/Events/PDF/';

                    $DBEvents = 'Upload/Events/PDF/' . $filename;

//                $location = 'files';

                    // Upload file
                    $file->move($location, $filename);

                    // File path
                    $filepath = url('files/' . $filename);

                    // Response
                    $data1['success'] = 1;
                    $data1['message'] = 'Uploaded Successfully!';
                    $data1['filepath'] = $filepath;
                    $data1['extension'] = $extension;
                }
                else {
                    // Response
                    $data1['success'] = 2;
                    $data1['message'] = 'File not uploaded.';
                }


            $Title = $request["Title"];
            $Description = $request["Description"];
            $ShortDescription = $request["ShortDescription"];

            DB::connection($this->getDBName())->select('CALL `stp_InsertIntoEventSection`(?,?,?,?,?)'
                , array($Title,$Description, $ShortDescription, $DBEvents, '1'));

        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'PostEventDetails');
            return 'Some error occurred while processing your request in Post EventDetails';
        }
        return response()->json($data1);
    }

//    Edit Events Section

    public function EditEventsDetails($id)
    {
        try {
            $EditEvents = DB::connection($this->getDBName())->select('CALL `stp_getEventDetailsToEdit`(?)'
                , array($id));
            foreach ($EditEvents as $item) {
                $Title = $item->Title;
                $Description = $item->Description;
                $ShortDescription = $item->ShortDescription;
                $PDFUrl = $item->PDFUrl;
                $IsActive = $item->IsActive;
            }
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'EditEventsDetails');
            return 'Some error occurred while processing your request in Edit EventsDetails';
        }
        return view('GLCMaster.EditEventsDetails',
            compact('Title', 'Description', 'ShortDescription', 'PDFUrl', 'IsActive', 'id'));
    }

    //    Events Edit Post Function

    public function PostEditEventsDetails(request $request)
    {
        try {

            $DBEvent = "";
            $data = array();
            $files = $request->file('file');

            if ($request->hasFile('file')) {

                $file = $request->file('file');
                $string = $file->getClientOriginalName();
                $filename = str_replace('', '-',$string) ;
                // File extension
                $extension = $file->getClientOriginalExtension();




                // File upload location
                $location = 'Upload/Events/PDF/';




                $DBEvent = 'Upload/Events/PDF/' . $filename;


                $file->move($location, $filename);

                // File path
                $filepath = url('files/' . $filename);

                // Response
                $data['success'] = 1;
                $data['message'] = 'Uploaded Successfully!';
                $data['filepath'] = $filepath;
                $data['extension'] = $extension;
            }


            if ($DBEvent == null || $DBEvent == "") {
                $id = $request["id"];
                $Title = $request["Title"];
                $Description = $request["Description"];
                $ShortDescription = $request["ShortDescription"];

                /*$PDFUrl = $request["Url"];*/
                DB::connection($this->getDBName())->statement('CALL `stp_UpdateTitleInEventDetails`(?,?,?,?)'
                    , array($id, $Title,$Description, $ShortDescription));
            } else {
                $id = $request["id"];
                $Title = $request["Title"];
                $Description = $request["Description"];
                $ShortDescription = $request["ShortDescription"];

                DB::connection($this->getDBName())->statement('CALL `stp_UpdatePDFInEventDetails`(?,?,?,?,?)'
                    , array($id, $Title, $Description ,$ShortDescription ,$DBEvent));
            }


            /*$id = $request["id"];
            $Title = $request["Title"];
            $Description = $request["Description"];
            $ShortDescription = $request["ShortDescription"];
            $PDFUrl = $request["Url"];
            DB::connection($this->getDBName())->statement('CALL `stp_UpdateEventDetails`(?,?,?,?,?)'
                , array($id, $Title, $Description, $ShortDescription, $PDFUrl));*/

        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'PostEditEventsDetails');
            return 'Some error occurred while processing your request in PostEdit EventsDetails';
        }
        return \Redirect::route('EventSectionIndex')->with('flash_message', 'Events Added Successfully');
    }

    //    Events View Function

    public function ViewEventsDetails($id)
    {
        try {
            $ViewEvents = DB::connection($this->getDBName())->select('CALL `stp_getEventDetailsToEdit`(?)'
                , array($id));
            foreach ($ViewEvents as $item) {
                $Title = $item->Title;
                $Description = $item->Description;
                $ShortDescription = $item->ShortDescription;
                $PDFUrl = $item->PDFUrl;
                $IsActive = $item->IsActive;
            }
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'ViewEventsDetails');
            return 'Some error occurred while processing your request in View EventsDetails';
        }
        return view('GLCMaster.ViewEventsDetails',
            compact('Title', 'Description', 'ShortDescription', 'PDFUrl', 'IsActive', 'id'));
    }

    //-----------------------------------------------Marquee Section---------------------------------------------------------------//

    public function MarqueeStatusChange($id, $IsActive)
    {
        $MarqueeChange = DB::connection($this->getDBName())->select('CALL `stp_changeActiveStatusMarquee`(?,?)'
            , array($id, $IsActive));
        return json_encode($MarqueeChange);
    }

    //    Marquee Section Index

    public function MarqueeSectionIndex()
    {
        try {
            $MarqueeSectionList = DB::connection($this->getDBName())->select('CALL `stp_getMarqueeSection`()');
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'MarqueeSectionIndex');
            return 'Some error occurred while processing your request in MarqueeSection Index';
        }
        return view('GLCMaster.MarqueeSectionIndex', compact('MarqueeSectionList'));
    }

    //    Create Marquee Section Get

    public function CreateMarqueeDetails()
    {
        try {
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'CreateMarqueeDetails');
            return 'Some error occurred while processing your request in Create MarqueeDetails';
        }
        return view('GLCMaster.CreateMarqueeDetails');
    }

    // Marquee Create Post

    public function PostMarqueeDetails(Request $request)
    {
        try {

            $Marquee = array();

            $validator = Validator::make($request->all(), [
                'uploadpdf' => 'required|mimes:png,jpg,jpeg,csv,txt,pdf|max:2048'
            ]);

            if ($validator->fails()) {

                $Marquee['success'] = 0;
                $Marquee['error'] = $validator->errors()->first('file'); // Error response

            }
            else {
                if ($request->file('uploadpdf')) {

                    $file = $request->file('uploadpdf');
                    $filename = time() . '_' . $file->getClientOriginalName();

                    // File extension
                    $extension = $file->getClientOriginalExtension();

                    // File upload location
                    $location = 'Upload/Marquee/PDF/';

                    $DBMarquee = 'Upload/Marquee/PDF/' . $filename;

//                $location = 'files';

                    // Upload file
                    $file->move($location, $filename);

                    // File path
                    $filepath = url('file/' . $filename);

                    // Response
                    $Marquee['success'] = 1;
                    $Marquee['message'] = 'Uploaded Successfully!';
                    $Marquee['filepath'] = $filepath;
                    $Marquee['extension'] = $extension;
                } else {
                    // Response
                    $Marquee['success'] = 2;
                    $Marquee['message'] = 'File not uploaded.';
                }
            }


            $Text = $request["Text"];
//            $Url = $request["PDFUrl"];

            DB::connection($this->getDBName())->select('CALL `stp_InsertIntoMarqueeSection`(?,?,?)'
                , array($Text, $DBMarquee, '1'));

        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'PostMarqueeDetails');
            return 'Some error occurred while processing your request in Post MarqueeDetails';
        }
        return response()->json($Marquee);
    }



    public function PostMarqueeDetailsUrl(Request $request)
    {
        try {
            $Text = $request["Text"];
            $Url = $request["Enterurl"];

            DB::connection($this->getDBName())->select('CALL `stp_InsertIntoMarqueeSection`(?,?,?)'
                , array($Text, $Url, '1'));

        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'PostMarqueeDetailsUrl');
            return 'Some error occurred while processing your request in Post MarqueeDetailsUrl';
        }
        return response()->json();
    }


    //    Edit Marque Section

    public function EditMarqueeDetails($id)
    {
        try {
            $EditMarquee = DB::connection($this->getDBName())->select('CALL `stp_getMarqueeDetailsEdit`(?)'
                , array($id));
            foreach ($EditMarquee as $item) {
                $Text = $item->Text;
                $PDFUrl = $item->PdfUrl;
                $IsActive = $item->IsActive;

            }
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'EditMarqueeDetails');
            return 'Some error occurred while processing your request in Edit MarqueeDetails';
        }
        return view('GLCMaster.EditMarqueeDetails',
            compact('Text', 'PDFUrl', 'IsActive', 'id'));
    }

    //    Marquee Edit Post Function

    public function PostEditMarqueeDetails(request $request)
    {
        try {
            $Marquee = array();
            $DBMarquee ="";

            $validator = Validator::make($request->all(), [
                'uploadpdf' => 'required|mimes:png,jpg,jpeg,csv,txt,pdf|max:2048'
            ]);

            if ($validator->fails()) {

                $Marquee['success'] = 0;
                $Marquee['error'] = $validator->errors()->first('file'); // Error response

            }
            else {
                if ($request->file('uploadpdf')) {

                    $file = $request->file('uploadpdf');
                    $filename = time() . '_' . $file->getClientOriginalName();

                    // File extension
                    $extension = $file->getClientOriginalExtension();

                    // File upload location
                    $location = 'Upload/Marquee/PDF';

                    $DBMarquee = 'Upload/Marquee/PDF/' . $filename;

                    // Upload file
                    $file->move($location, $filename);

                    // File path
                    $filepath = url('file/' . $filename);

                    // Response
                    $Marquee['success'] = 1;
                    $Marquee['message'] = 'Uploaded Successfully!';
                    $Marquee['filepath'] = $filepath;
                    $Marquee['extension'] = $extension;

                } else {
                    // Response
                    $Marquee['success'] = 2;
                    $Marquee['message'] = 'File not uploaded.';

                }
            }

            if ($DBMarquee == null || $DBMarquee == "") {
                $id = $request["Id"];
                $DisplayText = $request["Text"];
//                $PdfUrl = $request["PdfUrl"];


                DB::connection($this->getDBName())->select('CALL `stp_updateMarqueeTitleDetails`(?,?)'
                    , array($id ,$DisplayText));

            } else {
                $id = $request["Id"];
                $DisplayText = $request["Text"];
//          $PdfUrl = $request["PdfUrl"];

                DB::connection($this->getDBName())->select('CALL `stp_UpdateMarqueeDetails`(?,?,?)'
                    , array($id ,$DisplayText, $DBMarquee));
            }


//            $id = $request["id"];
//            $Text = $request["Text"];
//            $PDFUrl = $request["PdfUrl"];
//            DB::connection($this->getDBName())->statement('CALL `stp_UpdateMarqueeDetails`(?,?,?)'
//                , array($id, $Text, $PDFUrl));
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'PostEditMarqueeDetails');
            return 'Some error occurred while processing your request in PostEdit MarqueeDetails';
        }
//        return \Redirect::route('MarqueeSectionIndex')->with('flash_message', 'Marquee Added Successfully');
        return json_encode($Marquee);
    }


    public function PostEditMarqueeDetailsForUrl(Request $request)
    {
        try {

            $Marquee = array();


            $id = $request["Id"];
            $DisplayText = $request["Text"];
            $PdfUrl = $request["Enterurl"];

            DB::connection($this->getDBName())->select('CALL `stp_UpdateMarqueeDetails`(?,?,?)'
                , array($id, $DisplayText, $PdfUrl));

        }
        catch(\Exception $ex){
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'PostEditMarqueeDetailsForUrl');
            return 'Some error occurred while processing your request in PostEdit MarqueeDetailsForUrl';

        }

//        return \Redirect::Route('FourButtonIndex')->with('flash_message', 'New Button Has Successfully Created');
        return json_encode($Marquee);

    }

//    Marquee View Function

    public function ViewMarqueeDetails($id)
    {
        try {
            $ViewMarquee = DB::connection($this->getDBName())->select('CALL `stp_getMarqueeDetailsEdit`(?)'
                , array($id));
            foreach ($ViewMarquee as $item) {
                $Text = $item->Text;
                $PDFUrl = $item->PdfUrl;
                $IsActive = $item->IsActive;
            }
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'ViewMarqueeDetails');
            return 'Some error occurred while processing your request in View MarqueeDetails';
        }
        return view('GLCMaster.ViewMarqueeDetails',
            compact('Text', 'PDFUrl', 'IsActive', 'id'));
    }

    //-----------------------------------------------Principal Section---------------------------------------------------------------//
    public function PrincipalStatusChange($id, $IsActive)
    {
        $PrincipalChange = DB::connection($this->getDBName())->select('CALL `stp_changeActiveStatusPrincipal`(?,?)'
            , array($id, $IsActive));
        return json_encode($PrincipalChange);
    }

    //    Principal Section Index

    public function PrincipalSectionIndex()
    {
        try {
            $PrincipalSectionList = DB::connection($this->getDBName())->select('CALL `stp_getPrincipalDetails`()');
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'PrincipalSectionIndex');
            return 'Some error occurred while processing your request in Principal SectionIndex';
        }
        return view('GLCMaster.PrincipalSectionIndex', compact('PrincipalSectionList'));
    }

    //    Create Principal Section Get

    public function CreatePrincipalDetails()
    {
        try {
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'CreatePrincipalDetails');
            return 'Some error occurred while processing your request in Create PrincipalDetails';
        }
        return view('GLCMaster.CreatePrincipalDetails');
    }

    // Principal Create Post

    public function PostPrincipalDetails(Request $request)
    {
        try {

            $data = array();

            $validator = Validator::make($request->all(), [
                'file' => 'required|mimes:png,jpg,jpeg,csv,txt,pdf|max:2048'
            ]);

            if ($validator->fails()) {

                $data['success'] = 0;
                $data['error'] = $validator->errors()->first('file');// Error response

            } else {
                if ($request->file('file')) {

                    $file = $request->file('file');
                    $filename = time() . '_' . $file->getClientOriginalName();

                    // File extension
                    $extension = $file->getClientOriginalExtension();

                    // File upload location
                    $location = 'Upload/PrincipalImage/Images/';

                    $DBPrincipalImage = 'Upload/PrincipalImage/Images/' . $filename;

//                $location = 'files';

                    // Upload file
                    $file->move($location, $filename);

                    // File path
                    $filepath = url('files/' . $filename);

                    // Response
                    $data['success'] = 1;
                    $data['message'] = 'Uploaded Successfully!';
                    $data['filepath'] = $filepath;
                    $data['extension'] = $extension;
                } else {
                    // Response
                    $data['success'] = 2;
                    $data['message'] = 'File not uploaded.';
                }
            }

            $Title = $request["Title"];
            $Description = $request["Description"];

            DB::connection($this->getDBName())->select('CALL `stp_InsertIntoPrincipalSection`(?,?,?,?)'
                , array($Title, $DBPrincipalImage, $Description, '1'));

        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'PostPrincipalDetails');
            return 'Some error occurred while processing your request in Post PrincipalDetails';
        }
        return response()->json($data);
    }



    //    Edit Principal Section

    public function EditPrincipalDetails($id)
    {
        try {
            $EditPrincipal = DB::connection($this->getDBName())->select('CALL `stp_getPrincipalDetailsToEdit`(?)'
                , array($id));
            foreach ($EditPrincipal as $item) {
                $Title = $item->Title;
                $Description = $item->Description;
                $Url = $item->ImageUrl;
                $IsActive = $item->IsActive;

            }
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'EditPrincipalDetails');
            return 'Some error occurred while processing your request in Edit PrincipalDetails';
        }
        return view('GLCMaster.EditPrincipalDetails',
            compact('Title', 'Description', 'Url', 'IsActive', 'id'));
    }

    //    Principal Edit Post Function

    public function PostEditPrincipalDetails(request $request)
    {
        try {

            $DBPrincipalImage = "";
            $data = array();

            if ($request->file('file')) {

                $file = $request->file('file');
                $filename = time() . '_' . $file->getClientOriginalName();


                // File extension
                $extension = $file->getClientOriginalExtension();

                // File upload location
                $location = 'Upload/PrincipalImage/Images/';

                $DBPrincipalImage = 'Upload/PrincipalImage/Images/' . $filename;

//                $location = 'files';

                // Upload file
                $file->move($location, $filename);

                // File path
                $filepath = url('files/' . $filename);

                // Response
                $data['success'] = 1;
                $data['message'] = 'Uploaded Successfully!';
                $data['filepath'] = $filepath;
                $data['extension'] = $extension;
            }

            if ($DBPrincipalImage == null || $DBPrincipalImage == "") {
                $id = $request["id"];
                $Title = $request["Title"];
                $Description = $request["Description"];
                DB::connection($this->getDBName())->statement('CALL `stp_UpdateTitleInPrincipalsectionDetails`(?,?,?)'
                    , array($id, $Title, $Description));
            } else {
                $id = $request["id"];
                $Title = $request["Title"];
                $Description = $request["Description"];
                DB::connection($this->getDBName())->statement('CALL `stp_UpdatePrincipalDetails`(?,?,?,?)'
                    , array($id, $Title, $DBPrincipalImage, $Description));
            }
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'PostEditPrincipalDetails');
            return 'Some error occurred while processing your request in PostEdit PrincipalDetails';

        }
        return response()->json($data);
    }


    //    Principal View Function

    public function ViewPrincipalDetails($id)
    {
        try {
            $ViewPrincipal = DB::connection($this->getDBName())->select('CALL `stp_getPrincipalDetailsToEdit`(?)'
                , array($id));

            foreach ($ViewPrincipal as $item) {
                $Title = $item->Title;
                $Description = $item->Description;
                $Url = $item->ImageUrl;
                $IsActive = $item->IsActive;

            }
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'ViewPrincipalDetails');
            return 'Some error occurred while processing your request in View PrincipalDetails';
        }
        return view('GLCMaster.ViewPrincipalDetails',
            compact('Title', 'Description','Url', 'IsActive', 'id'));
    }

    //----------------------------------------------- Gallery Section time removed till here---------------------------------------------------------------//

    public function GalleryStatusChange($id, $IsActive)
    {
        $GalleryChange = DB::connection($this->getDBName())->select('CALL `stp_changeActiveStatusGallery`(?,?)'
            , array($id, $IsActive));
        return json_encode($GalleryChange);
    }


    //    Gallery Section Index

    public function GallerySectionIndex()
    {
        try {
            $GallerySectionList = DB::connection($this->getDBName())->select('CALL `stp_getGallerySection`()');
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'GallerySectionIndex');
            return 'Some error occurred while processing your request in Gallery SectionIndex';

        }
        return view('GLCMaster.GallerySectionIndex', compact('GallerySectionList'));
    }

    //    Create Gallery Section Get

    public function CreateGalleryDetails()
    {
        try {
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'CreateGalleryDetails');
            return 'Some error occurred while processing your request in Create GalleryDetails';
        }
        return view('GLCMaster.CreateGalleryDetails');
    }

    // Gallery Create Post

    public function PostGalleryDetails(Request $request)
    {
        try {

            $data = array();

            $validator = Validator::make($request->all(), [
                'file' => 'required|mimes:png,jpg,jpeg,csv,txt,pdf|max:2048'
            ]);

            if ($validator->fails()) {

                $data['success'] = 0;
                $data['error'] = $validator->errors()->first('file');// Error response

            } else {
                if ($request->file('file')) {

                    $file = $request->file('file');
                    $filename = $file->getClientOriginalName();

                    // File extension
                    $extension = $file->getClientOriginalExtension();

                    // File upload location
                    $location = 'Upload/Gallery/Images/';

                    $DBGallery = 'Upload/Gallery/Images/' . $filename;

//                $location = 'files';

                    // Upload file
                    $file->move($location, $filename);

                    // File path
                    $filepath = url('files/' . $filename);

                    // Response
                    $data['success'] = 1;
                    $data['message'] = 'Uploaded Successfully!';
                    $data['filepath'] = $filepath;
                    $data['extension'] = $extension;
                } else {
                    // Response
                    $data['success'] = 2;
                    $data['message'] = 'File not uploaded.';
                }
            }

            $Title = $request["Title"];
            DB::connection($this->getDBName())->select('CALL `stp_InsertIntoGallerySection`(?,?,?)'
                , array($Title, $DBGallery, '1'));

        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'PostGalleryDetails');
            return 'Some error occurred while processing your request in Post GalleryDetails';
        }
        return response()->json($data);
    }


    //    Edit Gallery Section

    public function EditGalleryDetails($id)
    {
        try {
            $EditGallery = DB::connection($this->getDBName())->select('CALL `stp_getGalleryDetailsToEdit`(?)'
                , array($id));
            foreach ($EditGallery as $item) {
                $Title = $item->Title;
                $ImageUrl = $item->ImageUrl;
                $IsActive = $item->IsActive;
            }

        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'EditGalleryDetails');
            return 'Some error occurred while processing your request in Edit GalleryDetails';
        }
        return view('GLCMaster.EditGalleryDetails',
            compact('Title', 'ImageUrl', 'IsActive', 'id'));
    }

//    Gallery Edit Post Function

    public function PostEditGalleryDetails(request $request)
    {
        try {

            $DBGallery = "";
            $data = array();

            if ($request->file('file')) {

                $file = $request->file('file');
                $filename = $file->getClientOriginalName();


                // File extension
                $extension = $file->getClientOriginalExtension();

                // File upload location
                $location = 'Upload/Gallery/Images/';

                $DBGallery = 'Upload/Gallery/Images/' . $filename;

//                $location = 'files';

                // Upload file
                $file->move($location, $filename);

                // File path
                $filepath = url('files/' . $filename);

                // Response
                $data['success'] = 1;
                $data['message'] = 'Uploaded Successfully!';
                $data['filepath'] = $filepath;
                $data['extension'] = $extension;
            }


            if ($DBGallery == null || $DBGallery == "") {
                $id = $request["id"];
                $Title = $request["Title"];
                DB::connection($this->getDBName())->statement('CALL `stp_UpdateTitleInGalleryDetails`(?,?)'
                    , array($id, $Title));
            } else {
                $id = $request["id"];
                $Title = $request["Title"];
                DB::connection($this->getDBName())->statement('CALL `stp_UpdateGalleryDetails`(?,?,?)'
                    , array($id, $Title, $DBGallery));
            }

        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'PostEditGalleryDetails');
            return 'Some error occurred while processing your request in PostEdit GalleryDetails';
        }
        return \Redirect::route('GallerySectionIndex')->with('flash_message', 'Photo Details Added Successfully');
//        return redirect('GallerySectionIndex')->with('flash_message', 'Photo Details Added Successfully ');
    }

    //    Gallery View Function

    public function ViewGalleryDetails($id)
    {
        try {
            $ViewGallery = DB::connection($this->getDBName())->select('CALL `stp_getGalleryDetailsToEdit`(?)'
                , array($id));
            foreach ($ViewGallery as $item) {
                $Title = $item->Title;
                $ImageUrl = $item->ImageUrl;
                $IsActive = $item->IsActive;
            }
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'ViewGalleryDetails');
            return 'Some error occurred while processing your request in View GalleryDetails';
        }
        return view('GLCMaster.ViewGalleryDetails',
            compact('Title', 'ImageUrl', 'IsActive', 'id'));
    }

    //-----------------------------------------------Alumni Section---------------------------------------------------------------//

    public function AlumniStatusChange($id, $IsActive)
    {
        $AlumniChange = DB::connection($this->getDBName())->select('CALL `stp_changeActiveStatusAlumni`(?,?)'
            , array($id, $IsActive));
        return json_encode($AlumniChange);
    }

    // Alumni Section Index

    public function AlumniSectionIndex()
    {
        try {
            $AlumniSectionList = DB::connection($this->getDBName())->select('CALL `stp_getalumnisectionDetails`()');
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'AlumniSectionIndex');
            return 'Some error occurred while processing your request in Alumni SectionIndex';
        }
        return view('GLCMaster.AlumniSectionIndex', compact('AlumniSectionList'));
    }

    //    Create Alumni Section Get

    public function CreateAlumniDetails()
    {
        try {
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'CreateAlumniDetails');
            return 'Some error occurred while processing your request in Create AlumniDetails';
        }
        return view('GLCMaster.CreateAlumniDetails');
    }

    // Alumni Create Post

    public function PostAlumniDetails(Request $request)
    {
        try {

            $data = array();

            $validator = Validator::make($request->all(), [
                'file' => 'required|mimes:png,jpg,jpeg,csv,txt,pdf|max:2048'
            ]);

            if ($validator->fails()) {

                $data['success'] = 0;
                $data['error'] = $validator->errors()->first('file');// Error response

            } else {
                if ($request->file('file')) {

                    $file = $request->file('file');
                    $filename = time() . '_' . $file->getClientOriginalName();

                    // File extension
                    $extension = $file->getClientOriginalExtension();

                    // File upload location
                    $location = 'Upload/Alumni/Images/';

                    $DBAlumniSection = 'Upload/Alumni/Images/' . $filename;

//                $location = 'files';

                    // Upload file
                    $file->move($location, $filename);

                    // File path
                    $filepath = url('files/' . $filename);

                    // Response
                    $data['success'] = 1;
                    $data['message'] = 'Uploaded Successfully!';
                    $data['filepath'] = $filepath;
                    $data['extension'] = $extension;
                } else {
                    // Response
                    $data['success'] = 2;
                    $data['message'] = 'File not uploaded.';
                }
            }

            $Title = $request["Title"];
            $Description = $request["Description"];
            DB::connection($this->getDBName())->select('CALL `stp_InsertIntoAlumniSection`(?,?,?,?)'
                , array($Title, $Description, $DBAlumniSection, '1'));

        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'PostAlumniDetails');
            return 'Some error occurred while processing your request in Post AlumniDetails';
        }
        return response()->json($data);
    }

    //    Edit Alumni Section

    public function EditAlumniDetails($id)
    {
        try {
            $EditAlumni = DB::connection($this->getDBName())->select('CALL `stp_getAlumniDetailsToEdit`(?)'
                , array($id));
            foreach ($EditAlumni as $item) {
                $Title = $item->Title;
                $Description = $item->DESCRIPTION;
                $ImageUrl = $item->ImageUrl;
                $IsActive = $item->IsActive;
            }
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'EditAlumniDetails');
            return 'Some error occurred while processing your request in Edit AlumniDetails';
        }
        return view('GLCMaster.EditAlumniDetails',
            compact('Title', 'Description', 'ImageUrl', 'IsActive', 'id'));
    }

    //    Alumni Edit Post Function

    public function PostEditAlumniDetails(request $request)
    {
        try {
            $DBAlumnilImage = "";
            $data = array();

            if ($request->file('file')) {

                $file = $request->file('file');
                $filename = $file->getClientOriginalName();


                // File extension
                $extension = $file->getClientOriginalExtension();

                // File upload location
                $location = 'Upload/Alumni/Images/';

                $DBAlumnilImage = 'Upload/Alumni/Images/' . $filename;

//                $location = 'files';

                // Upload file
                $file->move($location, $filename);

                // File path
                $filepath = url('files/' . $filename);

                // Response
                $data['success'] = 1;
                $data['message'] = 'Uploaded Successfully!';
                $data['filepath'] = $filepath;
                $data['extension'] = $extension;
            }

            if ($DBAlumnilImage == null || $DBAlumnilImage == "") {
                $id = $request["id"];
                $Title = $request["Title"];
                $Description = $request["Description"];
                DB::connection($this->getDBName())->statement('CALL `stp_UpdateTitleAlumni`(?,?,?)'
                    , array($id, $Title, $Description));
            } else {
                $id = $request["id"];
                $Title = $request["Title"];
                $Description = $request["Description"];
                DB::connection($this->getDBName())->statement('CALL `stp_UpdateAlumniDetails`(?,?,?,?)'
                    , array($id, $Title, $DBAlumnilImage, $Description));
            }

        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'PostEditAlumniDetails');
            return 'Some error occurred while processing your request in PostEdit AlumniDetails';
        }
        return \Redirect::route('AlumniSectionIndex')->with('flash_message', 'Alumni Added Successfully');
    }

    //    Alumni View Function

    public function ViewAlumniDetails($id)
    {
        try {
            $ViewAlumni = DB::connection($this->getDBName())->select('CALL `stp_getAlumniDetailsToEdit`(?)'
                , array($id));
            foreach ($ViewAlumni as $item) {
                $Title = $item->Title;
                $Description = $item->DESCRIPTION;
                $ImageUrl = $item->ImageUrl;
                $IsActive = $item->IsActive;
            }
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'ViewAlumniDetails');
            return 'Some error occurred while processing your request in View AlumniDetails';
        }
        return view('GLCMaster.ViewAlumniDetails',
            compact('Title', 'Description', 'ImageUrl', 'IsActive', 'id'));
    }

    //-----------------------------------------------Slider Section---------------------------------------------------------------//

    public function SliderStatusChange($id, $IsActive)
    {
        $SliderChange = DB::connection($this->getDBName())->select('CALL `stp_changeActiveStatusSlider`(?,?)'
            , array($id, $IsActive));
        return json_encode($SliderChange);
    }

    //    Slider Section Index

    public function SliderSectionIndex()
    {
        try {
            $SliderSectionList = DB::connection($this->getDBName())->select('CALL `stp_getsliderDetails`()');
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'SliderSectionIndex');
            return 'Some error occurred while processing your request in Slider SectionIndex';
        }
        return view('GLCMaster.SliderSectionIndex', compact('SliderSectionList'));
    }

//    Create Slider Section Get

    public function CreateSliderDetails()
    {
        try {
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'CreateSliderDetails');
            return 'Some error occurred while processing your request in Create SliderDetails';
        }
        return view('GLCMaster.CreateSliderDetails');
    }

    // Slider Create Post

    public function PostSliderDetails(Request $request)
    {
        try {

            $Sliders = array();

            $validator = Validator::make($request->all(), [
                'file' => 'required|mimes:png,jpg,jpeg,csv,txt,pdf|max:2048'
            ]);

            if ($validator->fails()) {

                $Sliders['success'] = 0;
                $Sliders['error'] = $validator->errors()->first('file');// Error response

            } else {
                if ($request->file('file')) {

                    $file = $request->file('file');
                    $filename = time() . '_' . $file->getClientOriginalName();

                    // File extension
                    $extension = $file->getClientOriginalExtension();

                    // File upload location
                    $location = 'Upload/Sliders/Images/';

                    $DBSlidersImage = 'Upload/Sliders/Images/' . $filename;

                    // Upload file
                    $file->move($location, $filename);

                    // File path
                    $filepath = url('files/' . $filename);

                    // Response
                    $Sliders['success'] = 1;
                    $Sliders['message'] = 'Uploaded Successfully!';
                    $Sliders['filepath'] = $filepath;
                    $Sliders['extension'] = $extension;
                } else {
                    // Response
                    $Sliders['success'] = 2;
                    $Sliders['message'] = 'File not uploaded.';
                }
            }

            $Title = $request["Title"];
//            $Description = $request["Description"];

            DB::connection($this->getDBName())->select('CALL `stp_InsertIntoSliderSection`(?,?,?)', array($Title, $DBSlidersImage, '1'));

        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'PostSliderDetails');
            return 'Some error occurred while processing your request in Post SliderDetails';
        }
        return response()->json($Sliders);
    }

    //    Edit Slider Section

    public function EditSliderDetails($id)
    {
        try {
            $EditSlider = DB::connection($this->getDBName())->select('CALL `stp_getSliderDetailsToEdit`(?)', array($id));
            foreach ($EditSlider as $item) {
                $Title = $item->Title;
                $ImageUrl = $item->ImageUrl;
                $IsActive = $item->IsActive;

            }
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'EditSliderDetails');
            return 'Some error occurred while processing your request in Edit SliderDetails';
        }
        return view('GLCMaster.EditSliderDetails',
            compact('Title', 'ImageUrl', 'IsActive', 'id'));
    }

    //    Slider Edit Post Function

    public function PostEditSliderDetails(request $request)
    {
        try {

            $DBSliderImage = "";
            $data = array();

            if ($request->file('file')) {

                $file = $request->file('file');
                $filename = $file->getClientOriginalName();


                // File extension
                $extension = $file->getClientOriginalExtension();

                // File upload location
                $location = 'Upload/Sliders/Images/';

                $DBSliderImage = 'Upload/Sliders/Images/' . $filename;

//                $location = 'files';

                // Upload file
                $file->move($location, $filename);

                // File path
                $filepath = url('files/' . $filename);

                // Response
                $data['success'] = 1;
                $data['message'] = 'Uploaded Successfully!';
                $data['filepath'] = $filepath;
                $data['extension'] = $extension;
            }

            if ($DBSliderImage == null || $DBSliderImage == "") {
                $id = $request["id"];
                $Title = $request["Title"];
                DB::connection($this->getDBName())->statement('CALL `stp_UpdateTitleInSlidersection`(?,?)', array($id, $Title));
            } else {
                $id = $request["id"];
                $Title = $request["Title"];

                DB::connection($this->getDBName())->statement('CALL `stp_UpdateSliderDetails`(?,?,?)', array($id, $Title, $DBSliderImage));
            }
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'PostEditSliderDetails');
            return 'Some error occurred while processing your request in PostEdit SliderDetails';
        }
        return response()->json($data);
//        return \Redirect::route('SliderSectionIndex')->with('flash_message', 'Slider Added Successfully');
    }

    //    View Slider Section

    public function ViewSliderDetails($id)
    {
        try {
            $ViewSlider = DB::connection($this->getDBName())->select('CALL `stp_getSliderDetailsToEdit`(?)'
                , array($id));
            foreach ($ViewSlider as $item) {
                $Title = $item->Title;
                $ImageUrl = $item->ImageUrl;
                $IsActive = $item->IsActive;
            }
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'ViewSliderDetails');
            return 'Some error occurred while processing your request in View SliderDetails';
        }
        return view('GLCMaster.ViewSliderDetails',
            compact('Title', 'ImageUrl', 'IsActive', 'id'));
    }

    /*public function CreateFourButtons()
    {
        try {
            $NoticeSectionList = DB::connection($this->getDBName())->select('CALL `stp_getNoticeDetails`()');
        } catch (\Exception $ex) {
        }
        return view('GLCMaster.FourButtonIndex', compact('CreateFourButtons'));

    }*/
    //-----------------------------------------------Buttons---------------------------------------------------------------//


    public function CreateButtonsDetails()
    {
        try {
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'CreateButtonsDetails');
            return 'Some error occurred while processing your request in Create Buttons Details';
        }
        return view('GLCMaster.CreateButtonsDetails');
    }


    // Button Create Post
    public function PostButtonsDetails(Request $request)
    {
        try {


            $Buttons = array();

            $validator = Validator::make($request->all(), [
                'uploadpdf' => 'required|mimes:png,jpg,jpeg,csv,txt,pdf|max:2048'
            ]);

            if ($validator->fails()) {

                $Buttons['success'] = 0;
                $Buttons['error'] = $validator->errors()->first('file'); // Error response

            }
            else {
                if ($request->file('uploadpdf')) {

                    $file = $request->file('uploadpdf');
                    $filename = $file->getClientOriginalName();

                    // File extension
                    $extension = $file->getClientOriginalExtension();

                    // File upload location
                    $location = 'Upload/Buttons/PDF/';

                    $DBButtons = 'Upload/Buttons/PDF/' . $filename;

//                $location = 'files';

                    // Upload file
                    $file->move($location, $filename);

                    // File path
                    $filepath = url('file/' . $filename);

                    // Response
                    $Buttons['success'] = 1;
                    $Buttons['message'] = 'Uploaded Successfully!';
                    $Buttons['filepath'] = $filepath;
                    $Buttons['extension'] = $extension;
                } else {
                    // Response
                    $Buttons['success'] = 2;
                    $Buttons['message'] = 'File not uploaded.';
                }
            }


            $DisplayText = $request["DisplayText"];
//          $PdfUrl = $request["PdfUrl"];

                DB::connection($this->getDBName())->select('CALL `stp_InsertIntoFourButtonDetails`(?,?,?)'
                    , array($DisplayText, $DBButtons, '1'));



        }
        catch(\Exception $ex){
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'PostButtonsDetails');
            return 'Some error occurred while processing your request in Post Buttons Details';
        }
//        return \Redirect::route('FourButtonIndex')->with('flash_message', 'New Button Has Successfully Created');
        return response()->json($Buttons);
    }



    public function PostButtonsDetailsForUrl(Request $request)
    {
        try {


            $DisplayText = $request["DisplayText"];
            $PdfUrl = $request["Enterurl"];

            DB::connection($this->getDBName())->select('CALL `stp_InsertIntoFourButtonDetailsUrl`(?,?,?)'
                , array($DisplayText, $PdfUrl, '1'));

        }
        catch(\Exception $ex){
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'PostButtonsDetailsForUrl');
            return 'Some error occurred while processing your request in PostButtons Details ForUrl';
        }
//        return \Redirect::route('FourButtonIndex')->with('flash_message', 'New Button Has Successfully Created');
        return response()->json();

    }

    //-----------------------------------------------CSR Statestics er---------------------------------------------------------------//
    // CSR Statestics To Add In Home Controller

//    public function CSRStatesticsIndex()
//    {
//        try {
//            $CSRStatesticsList = DB::connection($this->getDBName())->select('CALL `stp_getCSRStatisticsDetails`()');
//            $DistinctHeaderList = DB::connection($this->getDBName())->select('CALL `stp_getDistinctHeaders`()');
//            $DistinctValueList = DB::connection($this->getDBName())->select('CALL `stp_getDistinctValuess`()');
//            foreach ($CSRStatesticsList as $item) {
//                $a = $item;
//                foreach ($a as $item1) {
//                    $b = $item1;
//                }
//            }
//        } catch (\Exception $ex) {
//        }
//        return view('GLCMaster.CSRStatesticsIndex',
//            compact('CSRStatesticsList', 'DistinctHeaderList', 'DistinctValueList'));
//    }

    // CSR Statestics
    public function CSRStatesticsIndexForMember()
    {
        try {
            $CSRStatesticsForMemberList = DB::connection($this->getDBName())->select('CALL `stp_getCSRStatisticForMember`()');
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'CSRStatesticsIndexForMember');
            return 'Some error occurred while processing your request in CSR Statestics IndexForMember';
        }
        return view('GLCMaster.CSRStatesticsIndexForMember',
            compact('CSRStatesticsForMemberList'));
    }

    // Create CSR Statistics

    public function CreateCSRStatesticsForMember()
    {
        try {
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'CreateCSRStatesticsForMember');
            return 'Some error occurred while processing your request in Create CSRStatestics ForMember';
        }
        return view('GLCMaster.CreateCSRStatesticsForMember');
    }

    // Post CSR Statistics Create

    public function PostCSRStatesticsForMember(Request $request)
    {
        try {
            $Category = $request["Category"];
            $Headers = $request["Headers"];
            $Values = $request["Values"];

            DB::connection($this->getDBName())->select('CALL `stp_InsertIntoCSRStatistics`(?,?,?)'
                , array($Category, $Headers, $Values));

        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'PostCSRStatesticsForMember');
            return 'Some error occurred while processing your request in Post CSRStatestics ForMember';
        }
        return \Redirect::route('CSRStatesticsIndexForMember');
    }


//    Edit CSR Section

    public function EditCSRStatesticsDetails($id)
    {
        try {
            $EditCSRStatestics = DB::connection($this->getDBName())->select('CALL `stp_GetCSRStatisticsToEdit`(?)'
                , array($id));
            foreach ($EditCSRStatestics as $item) {
                $Categories = $item->Categories;
                $Headers = $item->Headers;
                $Valuesss = $item->Valuesss;
            }
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'EditCSRStatesticsDetails');
            return 'Some error occurred while processing your request in Edit CSRStatestics Details';

        }
        return view('GLCMaster.EditCSRStatesticsDetails',
            compact('Categories', 'Headers', 'Valuesss', 'id'));
    }

    //Post Edit CSR Section

    public function PostEditCSRStatesticsDetails(request $request)
    {
        try {
            $id = $request["id"];
            $Category = $request["Category"];
            $Headers = $request["Headers"];
            $Values = $request["Values"];

            DB::connection($this->getDBName())->statement('CALL `stp_UpdateCSRStatesticsPost`(?,?,?,?)'
                , array($id, $Category, $Headers, $Values));

        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'PostEditCSRStatesticsDetails');
            return 'Some error occurred while processing your request in PostEdit CSRStatestics Details';

        }
        return \Redirect::route('CSRStatesticsIndexForMember')->with('flash_message', 'New Column Added Successfully');
    }

    // View CSR Statestics Here

    public function ViewCSRStatesticsDetails($id)
    {
        try {
            $ViewCSRStatestics = DB::connection($this->getDBName())->select('CALL `stp_GetCSRStatisticsToEdit`(?)'
                , array($id));
            foreach ($ViewCSRStatestics as $item) {
                $Categories = $item->Categories;
                $Headers = $item->Headers;
                $Valuesss = $item->Valuesss;
            }
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'ViewCSRStatesticsDetails');
            return 'Some error occurred while processing your request in View CSRStatestics Details';
        }
        return view('GLCMaster.ViewCSRStatesticsDetails',
            compact('Categories', 'Headers', 'Valuesss', 'id'));
    }

    //slidersection post



    //------------------------------------Faculty er---------------------------------------//
    public function TeachingStaffFacultyIndex2()
    {
        try {
            $TeachingStaffFacultyList = DB::connection($this->getDBName())->select('CALL `stp_getTeachingStaffFacultyIndex`()');
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'TeachingStaffFacultyIndex2');
            return 'Some error occurred while processing your request in Teaching StaffFaculty Index2';
        }
        return view('GLCMaster.TeachingStaffFacultyIndex2', compact('TeachingStaffFacultyList'));
    }

    public function CreateTeachingStaffFaculty()
    {
        try {
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'CreateTeachingStaffFaculty');
            return 'Some error occurred while processing your request in Create TeachingStaff Faculty';
        }
        return view('GLCMaster.CreateTeachingStaffFaculty');
    }

    public function PostCreateTeachingStaffFaculty(Request $request)
    {
        try {

            $data = array();

            $validator = Validator::make($request->all(), [
                'file' => 'required|mimes:png,jpg,jpeg,csv,txt,pdf|max:2048'
            ]);

            if ($validator->fails()) {

                $data['success'] = 0;
                $data['error'] = $validator->errors()->first('file');// Error response

            } else {
                if ($request->file('file')) {

                    $file = $request->file('file');
                    $filename = time() . '_' . $file->getClientOriginalName();

                    // File extension
                    $extension = $file->getClientOriginalExtension();

                    // File upload location
                    $location = 'Upload/Faculty/Images/';

                    $DBAlumniSection = 'Upload/Faculty/Images/' . $filename;

//                $location = 'files';

                    // Upload file
                    $file->move($location, $filename);

                    // File path
                    $filepath = url('files/' . $filename);

                    // Response
                    $data['success'] = 1;
                    $data['message'] = 'Uploaded Successfully!';
                    $data['filepath'] = $filepath;
                    $data['extension'] = $extension;
                } else {
                    // Response
                    $data['success'] = 2;
                    $data['message'] = 'File not uploaded.';
                }
            }

            $ProfessorsName = $request["ProfessorsName"];
            $Subject = $request["Subject"];
            $Qualification = $request["Qualification"];
            $TeachingExperience = $request["TeachingExperience"];
            DB::connection($this->getDBName())->select('CALL `stp_InsertIntoTeachingStaffFaculty`(?,?,?,?,?,?)'
                , array($ProfessorsName, $Subject,$Qualification,$TeachingExperience,$DBAlumniSection,'1'));

        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'PostCreateTeachingStaffFaculty');
            return 'Some error occurred while processing your request in PostCreate TeachingStaff Faculty';
        }
        return response()->json($data);
    }

    public function EditTeachingStaffFaculty($SrNo)
    {
        try {
            $EditTeachingStaffFaculty = DB::connection($this->getDBName())->select('CALL `stp_getTeachingStaffFacultyDetailsToEdit`(?)'
                , array($SrNo));
            foreach ($EditTeachingStaffFaculty as $item) {
                $ProfessorsName = $item->ProfessorsName;
                $Subject = $item->Subject;
                $Qualification = $item->Qualification;
                $TeachingExperience = $item->TeachingExperience;
                $IsActive = $item->IsActive;
                $Photo = $item->Photo;
            }
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'EditTeachingStaffFaculty');
            return 'Some error occurred while processing your request in Edit TeachingStaff Faculty';
        }
        return view('GLCMaster.EditTeachingStaffFaculty',
            compact('ProfessorsName', 'Subject', 'Qualification','TeachingExperience', 'IsActive', 'SrNo','Photo'));
    }

    public function PostEditTeachingStaffFaculty(request $request)
    {
        try {
            $DBAlumnilImage = "";
            $data = array();

            if ($request->file('file')) {

                $file = $request->file('file');
                $filename = $file->getClientOriginalName();


                // File extension
                $extension = $file->getClientOriginalExtension();

                // File upload location
                $location = 'Upload/Faculty/Images/';

                $DBAlumnilImage = 'Upload/Faculty/Images/' . $filename;

//                $location = 'files';

                // Upload file
                $file->move($location, $filename);

                // File path
                $filepath = url('files/' . $filename);

                // Response
                $data['success'] = 1;
                $data['message'] = 'Uploaded Successfully!';
                $data['filepath'] = $filepath;
                $data['extension'] = $extension;
            }

            if ($DBAlumnilImage == null || $DBAlumnilImage == "") {
                $SrNo = $request["SrNo"];
                $ProfessorsName = $request["ProfessorsName"];
                $Subject = $request["Subject"];
                $Qualification = $request["Qualification"];
                $TeachingExperience = $request["TeachingExperience"];
                DB::connection($this->getDBName())->statement('CALL `stp_UpdateTeachingStaffFaculty1`(?,?,?,?,?)'
                    , array($SrNo,$ProfessorsName,$Subject,$Qualification,$TeachingExperience));
            } else {
                $SrNo = $request["SrNo"];
                $ProfessorsName = $request["ProfessorsName"];
                $Subject = $request["Subject"];
                $Qualification = $request["Qualification"];
                $TeachingExperience = $request["TeachingExperience"];
                DB::connection($this->getDBName())->statement('CALL `stp_UpdateTeachingStaffFaculty2`(?,?,?,?,?,?)'
                    , array($SrNo, $ProfessorsName,$Subject,$Qualification,$TeachingExperience,$DBAlumnilImage));
            }

        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'PostEditTeachingStaffFaculty');
            return 'Some error occurred while processing your request in PostEdit TeachingStaff Faculty';
        }
        return \Redirect::route('TeachingStaffFacultyIndex2')->with('flash_message', 'Alumni Added Successfully');
    }

    public function ViewTeachingStaffFaculty($SrNo)
    {
        try {
            $ViewTeachingStaffFaculty = DB::connection($this->getDBName())->select('CALL `stp_getTeachingStaffFacultyDetailsToEdit`(?)'
                , array($SrNo));
            foreach ($ViewTeachingStaffFaculty as $item) {
                $ProfessorsName = $item->ProfessorsName;
                $Subject = $item->Subject;
                $Qualification = $item->Qualification;
                $TeachingExperience = $item->TeachingExperience;
                $IsActive = $item->IsActive;
                $Photo = $item->Photo;
            }
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'ViewTeachingStaffFaculty');
            return 'Some error occurred while processing your request in View TeachingStaff Faculty';
        }
        return view('GLCMaster.ViewTeachingStaffFaculty',
            compact('ProfessorsName', 'Subject', 'Qualification', 'TeachingExperience', 'IsActive','Photo','SrNo'));
    }


    public function TeachingStaffFacultyStatusChange($SrNo, $IsActive)
    {
        $StatusChange = DB::connection($this->getDBName())->select('CALL `stp_changeTeachingStaffFacultyStatus`(?,?)'
            , array($SrNo, $IsActive));
        return json_encode($StatusChange);
    }

    //----------------------------------TeachingStaffAdjunct er--------------------------------//

    public function TeachingStaffAdjunctIndex2()
    {
        try {
            $TeachingStaffAdjunctList = DB::connection($this->getDBName())->select('CALL `stp_getTeachingStaffAdjunctIndex1`()');
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'TeachingStaffAdjunctIndex2');
            return 'Some error occurred while processing your request in Teaching Staff AdjunctIndex2';
        }
        return view('GLCMaster.TeachingStaffAdjunctIndex2', compact('TeachingStaffAdjunctList'));
    }

    public function CreateTeachingStaffAdjunct()
    {
        try {
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'CreateTeachingStaffAdjunct');
            return 'Some error occurred while processing your request in Create TeachingStaff Adjunct';
        }
        return view('GLCMaster.CreateTeachingStaffAdjunct');
    }

    public function PostCreateTeachingStaffAdjunct(Request $request)
    {
        try {

            $data = array();

            $validator = Validator::make($request->all(), [
                'file' => 'required|mimes:png,jpg,jpeg,csv,txt,pdf|max:2048'
            ]);

            if ($validator->fails()) {

                $data['success'] = 0;
                $data['error'] = $validator->errors()->first('file');// Error response

            } else {
                if ($request->file('file')) {

                    $file = $request->file('file');
                    $filename = time() . '_' . $file->getClientOriginalName();

                    // File extension
                    $extension = $file->getClientOriginalExtension();

                    // File upload location
                    $location = 'Upload/Adjunct/';

                    $DBAdjunct = 'Upload/Adjunct/' . $filename;

//                $location = 'files';

                    // Upload file
                    $file->move($location, $filename);

                    // File path
                    $filepath = url('files/' . $filename);

                    // Response
                    $data['success'] = 1;
                    $data['message'] = 'Uploaded Successfully!';
                    $data['filepath'] = $filepath;
                    $data['extension'] = $extension;
                } else {
                    // Response
                    $data['success'] = 2;
                    $data['message'] = 'File not uploaded.';
                }
            }

            $ProfessorsName = $request["ProfessorsName"];
            $Subject = $request["Subject"];
            $Qualification = $request["Qualification"];
            $TeachingExperience = $request["TeachingExperience"];
            $ProfessionalExperience = $request["ProfessionalExperience"];
            $ResearchPublication = $request["ResearchPublication"];
            DB::connection($this->getDBName())->select('CALL `stp_InsertIntoTeachingStaffAdjunct`(?,?,?,?,?,?,?,?)'
                , array($ProfessorsName, $Subject,$Qualification,$TeachingExperience,$ProfessionalExperience,$ResearchPublication,$DBAdjunct,'1'));

        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'PostCreateTeachingStaffAdjunct');
            return 'Some error occurred while processing your request in PostCreate TeachingStaff Adjunct';
        }
        return response()->json($data);
    }

    public function EditTeachingStaffAdjunct($SrNo)
    {
        try {
            $EditTeachingStaffAdjunct = DB::connection($this->getDBName())->select('CALL `stp_getTeachingStaffAdjunctDetailsToEdit`(?)'
                , array($SrNo));
            foreach ($EditTeachingStaffAdjunct as $item) {
                $ProfessorsName = $item->ProfessorsName;
                $Subject = $item->Subject;
                $Qualification = $item->Qualification;
                $TeachingExperience = $item->TeachingExperience;
                $ProfessionalExperience = $item->ProfessionalExperience;
                $ResearchPublication = $item->Research_Publication;
                $IsActive = $item->IsActive;
                $Photo = $item->Photo;
            }
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'EditTeachingStaffAdjunct');
            return 'Some error occurred while processing your request in Edit TeachingStaff Adjunct';
        }
        return view('GLCMaster.EditTeachingStaffAdjunct',
            compact('ProfessorsName', 'Subject', 'Qualification','TeachingExperience','ProfessionalExperience','ResearchPublication', 'IsActive', 'SrNo','Photo'));
    }

    public function PostEditTeachingStaffAdjunct(request $request)
    {
        try {
            $DBAdjunctImage = "";
            $data = array();

            if ($request->file('file')) {

                $file = $request->file('file');
                $filename = $file->getClientOriginalName();


                // File extension
                $extension = $file->getClientOriginalExtension();

                // File upload location
                $location = 'Upload/Adjunct/';

                $DBAdjunctImage = 'Upload/Adjunct/' . $filename;

//                $location = 'files';

                // Upload file
                $file->move($location, $filename);

                // File path
                $filepath = url('files/' . $filename);

                // Response
                $data['success'] = 1;
                $data['message'] = 'Uploaded Successfully!';
                $data['filepath'] = $filepath;
                $data['extension'] = $extension;
            }

            if ($DBAdjunctImage == null || $DBAdjunctImage == "") {
                $SrNo = $request["SrNo"];
                $ProfessorsName = $request["ProfessorsName"];
                $Subject = $request["Subject"];
                $Qualification = $request["Qualification"];
                $TeachingExperience = $request["TeachingExperience"];
                $ProfessionalExperience = $request["ProfessionalExperience"];
                $ResearchPublication = $request["ResearchPublication"];
                DB::connection($this->getDBName())->statement('CALL `stp_UpdateTeachingStaffAdjunct1`(?,?,?,?,?,?,?)'
                    , array($SrNo,$ProfessorsName,$Subject,$Qualification,$TeachingExperience,$ProfessionalExperience,$ResearchPublication));
            } else {
                $SrNo = $request["SrNo"];
                $ProfessorsName = $request["ProfessorsName"];
                $Subject = $request["Subject"];
                $Qualification = $request["Qualification"];
                $TeachingExperience = $request["TeachingExperience"];
                $ProfessionalExperience = $request["ProfessionalExperience"];
                $ResearchPublication = $request["ResearchPublication"];
                DB::connection($this->getDBName())->statement('CALL `stp_UpdateTeachingStaffAdjunct2`(?,?,?,?,?,?,?,?)'
                    , array($SrNo, $ProfessorsName,$Subject,$Qualification,$TeachingExperience,$ProfessionalExperience,$ResearchPublication,$DBAdjunctImage));
            }

        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'PostEditTeachingStaffAdjunct');
            return 'Some error occurred while processing your request in PostEdit TeachingStaff Adjunct';
        }
        return \Redirect::route('TeachingStaffAdjunctIndex2')->with('flash_message', 'TeachingStaff Adjunct Edited Successfully');
    }

    public function ViewTeachingStaffAdjunct($SrNo)
    {
        try {
            $ViewTeachingStaffFaculty = DB::connection($this->getDBName())->select('CALL `stp_getTeachingStaffAdjunctDetailsToEdit`(?)'
                , array($SrNo));
            foreach ($ViewTeachingStaffFaculty as $item) {
                $ProfessorsName = $item->ProfessorsName;
                $Subject = $item->Subject;
                $Qualification = $item->Qualification;
                $TeachingExperience = $item->TeachingExperience;
                $ProfessionalExperience = $item->ProfessionalExperience;
                $ResearchPublication = $item->Research_Publication;
                $IsActive = $item->IsActive;
                $Photo = $item->Photo;
            }
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'ViewTeachingStaffAdjunct');
            return 'Some error occurred while processing your request in View TeachingStaff Adjunct';
        }
        return view('GLCMaster.ViewTeachingStaffAdjunct',
            compact('ProfessorsName', 'Subject', 'Qualification', 'TeachingExperience','ProfessionalExperience','ResearchPublication', 'IsActive','Photo','SrNo'));
    }

    public function TeachingStaffAdjunctStatusChange($SrNo, $IsActive)
    {
        $StatusChange = DB::connection($this->getDBName())->select('CALL `stp_changeTeachingStaffAdjunctStatus`(?,?)'
            , array($SrNo, $IsActive));
        return json_encode($StatusChange);
    }


    //----------------------------------Non Teaching Staff er--------------------------------//
    public function NonTeachingStaffIndex2()
    {
        try {
            $NonTeachingStaffList = DB::connection($this->getDBName())->select('CALL `stp_getNonTeachingStaffIndex1`()');
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'NonTeachingStaffIndex2');
            return 'Some error occurred while processing your request in PostEdit NonTeachingStaff Index2';
        }
        return view('GLCMaster.NonTeachingStaffIndex2', compact('NonTeachingStaffList'));
    }

    public function CreateNonTeachingStaff()
    {
        try {
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'CreateNonTeachingStaff');
            return 'Some error occurred while processing your request in Create NonTeachingStaff';
        }
        return view('GLCMaster.CreateNonTeachingStaff');
    }

    public function PostCreateNonTeachingStaff(Request $request)
    {
        try {

            $data = array();
//
//            $validator = Validator::make($request->all(), [
//                'file' => 'required|mimes:png,jpg,jpeg,csv,txt,pdf|max:2048'
//            ]);
//
//            if ($validator->fails()) {
//
//                $data['success'] = 0;
//                $data['error'] = $validator->errors()->first('file');// Error response
//
//            } else {
//                if ($request->file('file')) {
//
//                    $file = $request->file('file');
//                    $filename = time() . '_' . $file->getClientOriginalName();
//
//                    // File extension
//                    $extension = $file->getClientOriginalExtension();
//
//                    // File upload location
//                    $location = 'Upload/NonTeaching/';
//
//                    $DBNonTeaching = 'Upload/NonTeaching/' . $filename;
//
////                $location = 'files';
//
//                    // Upload file
//                    $file->move($location, $filename);
//
//                    // File path
//                    $filepath = url('files/' . $filename);
//
//                    // Response
//                    $data['success'] = 1;
//                    $data['message'] = 'Uploaded Successfully!';
//                    $data['filepath'] = $filepath;
//                    $data['extension'] = $extension;
//                } else {
//                    // Response
//                    $data['success'] = 2;
//                    $data['message'] = 'File not uploaded.';
//                }
//            }

            $ProfessorsName = $request["ProfessorsName"];
            $Designation = $request["Designation"];
//            $Department = $request["Department"];

            DB::connection($this->getDBName())->select('CALL `stp_InsertIntoNonTeachingStaff`(?,?,?)'
                , array($ProfessorsName, $Designation,'1'));

        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'PostCreateNonTeachingStaff');
            return 'Some error occurred while processing your request in PostCreate NonTeachingStaff';
        }
//        return response()->json($data);
        return \Redirect::route('NonTeachingStaffIndex2')->with('flash_message', 'Non teaching staff updated Successfully');
    }

    public function EditNonTeachingStaff($SrNo)
    {
        try {
            $EditNonTeachingStaff = DB::connection($this->getDBName())->select('CALL `stp_getNonTeachingStaffDetailsToEdit`(?)'
                , array($SrNo));
            foreach ($EditNonTeachingStaff as $item) {
                $ProfessorsName = $item->ProfessorsName;
                $Designation = $item->Designation;
                $Department = $item->Department;
                $IsActive = $item->IsActive;
                $Photo = $item->Photo;
            }
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'EditNonTeachingStaff');
            return 'Some error occurred while processing your request in Edit NonTeachingStaff';
        }
        return view('GLCMaster.EditNonTeachingStaff',
            compact('ProfessorsName', 'Designation', 'Department','IsActive', 'SrNo','Photo'));
    }

    public function PostEditNonTeachingStaff(request $request)
    {
        try {
//            $DBAlumnilImage = "";
//            $data = array();
//
//            if ($request->file('file')) {
//
//                $file = $request->file('file');
//                $filename = time() . '_' . $file->getClientOriginalName();
//
//
//                // File extension
//                $extension = $file->getClientOriginalExtension();
//
//                // File upload location
//                $location = 'Upload/NonTeaching/';
//
//                $DBAlumnilImage = 'Upload/NonTeaching/' . $filename;
//
////                $location = 'files';
//
//                // Upload file
//                $file->move($location, $filename);
//
//                // File path
//                $filepath = url('files/' . $filename);
//
//                // Response
//                $data['success'] = 1;
//                $data['message'] = 'Uploaded Successfully!';
//                $data['filepath'] = $filepath;
//                $data['extension'] = $extension;
//            }

//            if ($DBAlumnilImage == null || $DBAlumnilImage == "") {
                $SrNo = $request["SrNo"];
                $ProfessorsName = $request["ProfessorsName"];
                $Designation = $request["Designation"];
                DB::connection($this->getDBName())->statement('CALL `stp_UpdateNonTeachingStaff1`(?,?,?)'
                    , array($SrNo,$ProfessorsName,$Designation));
//            }
//            else {
//                $SrNo = $request["SrNo"];
//                $ProfessorsName = $request["ProfessorsName"];
//                $Designation = $request["Designation"];
//                $Department = $request["Department"];
//                DB::connection($this->getDBName())->statement('CALL `stp_UpdateNonTeachingStaff2`(?,?,?,?,?)'
//                    , array($SrNo,$ProfessorsName,$Designation,$Department,$DBAlumnilImage));
//            }

        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'PostEditNonTeachingStaff');
            return 'Some error occurred while processing your request in PostEdit NonTeachingStaff';
        }
        return \Redirect::route('NonTeachingStaffIndex2')->with('flash_message', 'Non teaching staff updated Successfully');
    }

    public function ViewNonTeachingStaff($SrNo)
    {
        try {
            $ViewNonTeachingStaff = DB::connection($this->getDBName())->select('CALL `stp_getNonTeachingStaffDetailsToEdit`(?)'
                , array($SrNo));
            foreach ($ViewNonTeachingStaff as $item) {
                $ProfessorsName = $item->ProfessorsName;
                $Designation = $item->Designation;
                $Department = $item->Department;
                $IsActive = $item->IsActive;
                $Photo = $item->Photo;
            }
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'ViewNonTeachingStaff');
            return 'Some error occurred while processing your request in View NonTeachingStaff';
        }
        return view('GLCMaster.ViewNonTeachingStaff',
            compact('ProfessorsName', 'Designation', 'Department','IsActive','Photo','SrNo'));
    }

    public function NonTeachingStaffStatusChange($SrNo, $IsActive)
    {
        $StatusChange = DB::connection($this->getDBName())->select('CALL `stp_NonTeachingStaffStatusChange`(?,?)'
            , array($SrNo, $IsActive));
        return json_encode($StatusChange);
    }

    //----------------------------------Committee er--------------------------------//

    public function CommitteeIndex2()
    {
        try {
            $CommitteeList = DB::connection($this->getDBName())->select('CALL `stp_getCommitteeIndex1`()');
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'CommitteeIndex2');
            return 'Some error occurred while processing your request in Committee Index2';
        }
        return view('GLCMaster.CommitteeIndex', compact('CommitteeList'));
    }

    public function CreateCommittee()
    {
        try {
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'CreateCommittee');
            return 'Some error occurred while processing your request in Create Committee';
        }
        return view('GLCMaster.CreateCommitteeDetails');
    }

    public function PostCreateCommittee(Request $request)
    {
        try {

            $data = array();

            $validator = Validator::make($request->all(), [
                'file' => 'required|mimes:png,jpg,jpeg,csv,txt,pdf|max:2048'
            ]);

            if ($validator->fails()) {

                $data['success'] = 0;
                $data['error'] = $validator->errors()->first('file');// Error response

            } else {
//                for logo
                if ($request->file('file')) {

                    $file = $request->file('file');
                    $filename = time() . '_' . $file->getClientOriginalName();

                    // File extension
                    $extension = $file->getClientOriginalExtension();

                    // File upload location
                    $location = 'Upload/Committee/';

                    $Logo = 'Upload/Committee/' . $filename;

//                $location = 'files';

                    // Upload file
                    $file->move($location, $filename);

                    // File path
                    $filepath = url('files/' . $filename);

                    // Response
                    $data['success'] = 1;
                    $data['message'] = 'Uploaded Successfully!';
                    $data['filepath'] = $filepath;
                    $data['extension'] = $extension;
                } else {
                    // Response
                    $data['success'] = 2;
                    $data['message'] = 'File not uploaded.';
                }
//                for picture1
                if ($request->file('picture1')) {

                    $file1 = $request->file('picture1');
                    $filename1 = time() . '_' . $file1->getClientOriginalName();

                    // File extension
                    $extension1 = $file1->getClientOriginalExtension();

                    // File upload location
                    $location1 = 'Upload/Committee/';

                    $picture1 = 'Upload/Committee/' . $filename1;

//                $location = 'files';

                    // Upload file
                    $file1->move($location1, $filename1);

                    // File path
                    $filepath1 = url('files/' . $filename1);

                    // Response
                    $data['success'] = 1;
                    $data['message'] = 'Uploaded Successfully!';
                    $data['filepath'] = $filepath1;
                    $data['extension'] = $extension1;
                } else {
                    // Response
                    $data['success'] = 2;
                    $data['message'] = 'File not uploaded.';
                }
//                for picture2
                if ($request->file('picture2')) {

                    $file2 = $request->file('picture2');
                    $filename2 = time() . '_' . $file2->getClientOriginalName();

                    // File extension
                    $extension2 = $file2->getClientOriginalExtension();

                    // File upload location
                    $location2 = 'Upload/Committee/';

                    $picture2 = 'Upload/Committee/' . $filename2;

//                $location = 'files';

                    // Upload file
                    $file2->move($location2, $filename2);

                    // File path
                    $filepath2 = url('files/' . $filename2);

                    // Response
                    $data['success'] = 1;
                    $data['message'] = 'Uploaded Successfully!';
                    $data['filepath'] = $filepath2;
                    $data['extension'] = $extension2;
                } else {
                    // Response
                    $data['success'] = 2;
                    $data['message'] = 'File not uploaded.';
                }
            }

            $Typeofcommittee = $request["Typeofcommittee"];
            $ShortDescription = $request["ShortDescription"];
            $Objective = $request["Objective"];
            $Events = $request["Events"];
            $ProfessorIncharge = $request["ProfessorIncharge"];
            $StudentContact1 = $request["StudentContact1"];

            DB::connection($this->getDBName())->select('CALL `stp_InsertIntoCommittee`(?,?,?,?,?,?,?,?,?,?)'
                , array($Typeofcommittee, $ShortDescription,$Objective,$Events,$ProfessorIncharge,$StudentContact1,$Logo,$picture1,$picture2,'1'));

        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'PostCreateCommittee');
            return 'Some error occurred while processing your request in PostCreate Committee';
        }
        return response()->json($data);
    }

    public function EditCommittee($SrNo,$Typeofcommittee)
    {
        try {
            $EditCommittee = DB::connection($this->getDBName())->select('CALL `stp_getCommitteeDetailsToEdit`(?,?)'
                , array($SrNo,$Typeofcommittee));
            foreach ($EditCommittee as $item) {
                $Typeofcommittee = $item->Typeofcommittee;
                $ShortDescription = $item->ShortDescription;
                $Objective = $item->Objective;
                $Events = $item->Events;
                $ProfessorIncharge = $item->ProfessorIncharge;
                $StudentContact1 = $item->StudentContact1;
                $IsActive = $item->IsActive;
                $Logo = $item->Logo;
                $Picture1 = $item->Picture1;
                $Picture2 = $item->Picture2;
            }
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'EditCommittee');
            return 'Some error occurred while processing your request in Edit Committee';
        }
        return view('GLCMaster.EditCommittee',
            compact('Typeofcommittee', 'ShortDescription', 'Objective','Events','ProfessorIncharge','StudentContact1', 'IsActive', 'SrNo','Typeofcommittee','Logo','Picture1','Picture2'));
    }

    public function PostEditCommittee(request $request)
    {
        try {
            $Logo = "";
            $Picture1 = "";
            $Picture2 = "";
            $data = array();

//            for logo
            if ($request->file('file')) {

                $file = $request->file('file');
//                $filename = time() . '_' . $file->getClientOriginalName();
                $filename = $file->getClientOriginalName();

                // File extension
                $extension = $file->getClientOriginalExtension();

                // File upload location
                $location = 'Upload/Committee/';

                $Logo = 'Upload/Committee/' . $filename;

//                $location = 'files';

                // Upload file
                $file->move($location, $filename);

                // File path
                $filepath = url('files/' . $filename);

                // Response
                $data['success'] = 1;
                $data['message'] = 'Uploaded Successfully!';
                $data['filepath'] = $filepath;
                $data['extension'] = $extension;
            }
//            for picture1
            if ($request->file('Picture1')) {

                $file1 = $request->file('Picture1');
                $filename1 = $file1->getClientOriginalName();


                // File extension
                $extension1 = $file1->getClientOriginalExtension();

                // File upload location
                $location1 = 'Upload/Committee/';

                $Picture1 = 'Upload/Committee/' . $filename1;

//                $location = 'files';

                // Upload file
                $file1->move($location1, $filename1);

                // File path
                $filepath1 = url('files/' . $filename1);

                // Response
                $data['success'] = 1;
                $data['message'] = 'Uploaded Successfully!';
                $data['filepath'] = $filepath1;
                $data['extension'] = $extension1;
            }
//            for picture2
            if ($request->file('Picture2')) {

                $file2 = $request->file('Picture2');
                $filename2 = $file2->getClientOriginalName();


                // File extension
                $extension2 = $file2->getClientOriginalExtension();

                // File upload location
                $location2 = 'Upload/Committee/';

                $Picture2 = 'Upload/Committee/' . $filename2;

//                $location = 'files';

                // Upload file
                $file2->move($location2, $filename2);

                // File path
                $filepath2 = url('files/' . $filename2);

                // Response
                $data['success'] = 1;
                $data['message'] = 'Uploaded Successfully!';
                $data['filepath'] = $filepath2;
                $data['extension'] = $extension2;
            }

            if ($Logo == "" &&  $Picture1 == "" && $Picture2 == "") {
                $SrNo = $request["SrNo"];
                $Typeofcommittee = $request["Typeofcommittee"];
                $ShortDescription = $request["ShortDescription"];
                $Objective = $request["Objective"];
                $Events = $request["Events"];
                $ProfessorIncharge = $request["ProfessorIncharge"];
                $StudentContact1 = $request["StudentContact1"];
                DB::connection($this->getDBName())->statement('CALL `stp_UpdateCommittee1`(?,?,?,?,?,?,?)'
                    , array($SrNo,$Typeofcommittee,$ShortDescription,$Objective,$Events,$ProfessorIncharge,$StudentContact1));
            }

            else {
                $SrNo = $request["SrNo"];
                $Typeofcommittee = $request["Typeofcommittee"];
                $ShortDescription = $request["ShortDescription"];
                $Objective = $request["Objective"];
                $Events = $request["Events"];
                $ProfessorIncharge = $request["ProfessorIncharge"];
                $StudentContact1 = $request["StudentContact1"];
                DB::connection($this->getDBName())->statement('CALL `stp_UpdateCommittee2`(?,?,?,?,?,?,?,?,?,?)'
                    , array($SrNo, $Typeofcommittee, $ShortDescription, $Objective, $Events, $ProfessorIncharge, $StudentContact1, $Logo, $Picture1, $Picture2));
            }

        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'PostEditCommittee');
            return 'Some error occurred while processing your request in PostEdit Committee';
        }
        return \Redirect::route('CommitteeIndex2')->with('flash_message', 'Committee Edited Successfully');
    }

    public function ViewCommittee($SrNo)
    {
        try {
            $ViewCommittee = DB::connection($this->getDBName())->select('CALL `stp_getCommitteeDetailsToView`(?)'
                , array($SrNo));
            foreach ($ViewCommittee as $item) {
                $Typeofcommittee = $item->Typeofcommittee;
                $ShortDescription = $item->ShortDescription;
                $Objective = $item->Objective;
                $Events = $item->Events;
                $ProfessorIncharge = $item->ProfessorIncharge;
                $StudentContact1 = $item->StudentContact1;
                $IsActive = $item->IsActive;
                $Logo = $item->Logo;
                $Picture1 = $item->Picture1;
                $Picture2 = $item->Picture2;
            }
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'ViewCommittee');
            return 'Some error occurred while processing your request in View Committee';
        }
        return view('GLCMaster.ViewCommitteeDetails',
            compact('Typeofcommittee', 'ShortDescription', 'Objective','Events','ProfessorIncharge','StudentContact1','IsActive','Logo','Picture1','Picture2','SrNo'));
    }

    public function CommitteeStatusChange($SrNo, $IsActive)
    {
        $StatusChange = DB::connection($this->getDBName())->select('CALL `stp_changeCommitteeStatus`(?,?)'
            , array($SrNo, $IsActive));
        return json_encode($StatusChange);
    }

    //----------------------------------Program/Courses er--------------------------------//
    public function CoursesIndex2()
    {
        try {
            $CoursesIndexList = DB::connection($this->getDBName())->select('CALL `stp_getCoursesIndex`()');
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'CoursesIndex2');
            return 'Some error occurred while processing your request in Courses Index2';
        }
        return view('GLCMaster.CoursesIndex2', compact('CoursesIndexList'));
    }
    public function CreateCourses()
    {
        try {
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'CreateCourses');
            return 'Some error occurred while processing your request in Create Courses';
        }
        return view('GLCMaster.CreateCourseDetail');
    }
    public function PostCreateCourses(Request $request)
    {
        try {

            $data = array();

            $validator = Validator::make($request->all(), [
                'file' => 'required|mimes:png,jpg,jpeg,csv,txt,pdf|max:2048'
            ]);

            if ($validator->fails()) {

                $data['success'] = 0;
                $data['error'] = $validator->errors()->first('file');// Error response

            } else {
//                for Notice
                if ($request->file('file')) {

                    $file = $request->file('file');
                    $filename = time() . '_' . $file->getClientOriginalName();

                    // File extension
                    $extension = $file->getClientOriginalExtension();

                    // File upload location
                    $location = 'Upload/Courses/';

                    $Notice = 'Upload/Courses/' . $filename;

//                $location = 'files';

                    // Upload file
                    $file->move($location, $filename);

                    // File path
                    $filepath = url('files/' . $filename);

                    // Response
                    $data['success'] = 1;
                    $data['message'] = 'Uploaded Successfully!';
                    $data['filepath'] = $filepath;
                    $data['extension'] = $extension;
                } else {
                    // Response
                    $data['success'] = 2;
                    $data['message'] = 'File not uploaded.';
                }
//                for Prospectus
                if ($request->file('PDF2')) {

                    $file1 = $request->file('PDF2');
                    $filename1 = time() . '_' . $file1->getClientOriginalName();

                    // File extension
                    $extension1 = $file1->getClientOriginalExtension();

                    // File upload location
                    $location1 = 'Upload/Courses/';

                    $PDF2 = 'Upload/Courses/' . $filename1;

//                $location = 'files';

                    // Upload file
                    $file1->move($location1, $filename1);

                    // File path
                    $filepath1 = url('files/' . $filename1);

                    // Response
                    $data['success'] = 1;
                    $data['message'] = 'Uploaded Successfully!';
                    $data['filepath'] = $filepath1;
                    $data['extension'] = $extension1;
                } else {
                    // Response
                    $data['success'] = 2;
                    $data['message'] = 'File not uploaded.';
                }

            }

            $CourseName = $request["CourseName"];
            $Description = $request["Description"];

            DB::connection($this->getDBName())->select('CALL `stp_InsertIntoCourses`(?,?,?,?,?)'
                , array($CourseName, $Description,$Notice,$PDF2,'1'));

        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'PostCreateCourses');
            return 'Some error occurred while processing your request in PostCreate Courses';
        }
        return response()->json($data);
    }
    public function EditCourses($SrNo)
    {
        try {
            $EditCourses = DB::connection($this->getDBName())->select('CALL `stp_EditCourseDetails`(?)',array($SrNo));
            foreach ($EditCourses as $item) {
                $CourseName = $item->CourseName;
                $Description = $item->Description;
                $IsActive = $item->IsActive;
                $PDF1 = $item->PDF1;
                $PDF2 = $item->PDF2;

            }
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'EditCourses');
            return 'Some error occurred while processing your request in Edit Courses';
        }
        return view('GLCMaster.EditCourseDetails',
            compact('CourseName', 'Description','IsActive','SrNo','PDF1','PDF2'));
    }
    public function PostEditCourses(request $request)
    {
        try {
            $PDF1 = "";
            $PDF2 = "";
            $data = array();

//            for img
            if ($request->file('file')) {

                $file = $request->file('file');
                $filename = $file->getClientOriginalName();


                // File extension
                $extension = $file->getClientOriginalExtension();

                // File upload location
                $location = 'Upload/Courses/';

                $PDF1 = 'Upload/Courses/' . $filename;

//                $location = 'files';

                // Upload file
                $file->move($location, $filename);

                // File path
                $filepath = url('files/' . $filename);

                // Response
                $data['success'] = 1;
                $data['message'] = 'Uploaded Successfully!';
                $data['filepath'] = $filepath;
                $data['extension'] = $extension;
            }
//            for PDF2
            if ($request->file('PDF2')) {

                $file1 = $request->file('PDF2');
                $filename1 = time() . '_' . $file1->getClientOriginalName();


                // File extension
                $extension1 = $file1->getClientOriginalExtension();

                // File upload location
                $location1 = 'Upload/Courses/';

                $PDF2 = 'Upload/Courses/' . $filename1;

//                $location = 'files';

                // Upload file
                $file1->move($location1, $filename1);

                // File path
                $filepath1 = url('files/' . $filename1);

                // Response
                $data['success'] = 1;
                $data['message'] = 'Uploaded Successfully!';
                $data['filepath'] = $filepath1;
                $data['extension'] = $extension1;
            }


            if ($PDF1 == "" &&  $PDF2 == "") {
                $SrNo = $request["SrNo"];
                $CourseName = $request["CourseName"];
                $Description = $request["Description"];
                DB::connection($this->getDBName())->statement('CALL `stp_UpdateCourses1`(?,?,?)'
                    , array($SrNo,$CourseName,$Description));
            }

            else {
                $SrNo = $request["SrNo"];
                $CourseName = $request["CourseName"];
                $Description = $request["Description"];
                DB::connection($this->getDBName())->statement('CALL `stp_UpdateCourses2`(?,?,?,?,?)'
                    , array($SrNo, $CourseName, $Description,$PDF1, $PDF2));
            }

        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'PostEditCourses');
            return 'Some error occurred while processing your request in PostEdit Courses';
        }
        return \Redirect::route('CoursesIndex2')->with('flash_message', 'Courses Edited Successfully');
    }
    public function ViewCourses($SrNo)
    {
        try {
            $ViewCommittee = DB::connection($this->getDBName())->select('CALL `stp_EditCourseDetails`(?)'
                , array($SrNo));
            foreach ($ViewCommittee as $item) {
                $CourseName = $item->CourseName;
                $Description = $item->Description;
                $IsActive = $item->IsActive;
                $PDF1 = $item->PDF1;
                $PDF2 = $item->PDF2;
            }
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'ViewCourses');
            return 'Some error occurred while processing your request in View Courses';
        }
        return view('GLCMaster.ViewCourseDetails',
            compact('CourseName', 'Description','IsActive','PDF1','PDF2','SrNo'));
    }

    public function CoursesStatusChange($SrNo, $IsActive)
    {
        $StatusChange = DB::connection($this->getDBName())->select('CALL `stp_changeCourseStatus`(?,?)'
            , array($SrNo, $IsActive));
        return json_encode($StatusChange);
    }

    //----------------------------------PDF Master er--------------------------------//

    public function PdfMasterIndex()
    {
        try {
            $PdfMasterList = DB::connection($this->getDBName())->select('CALL `stp_getPdfMasterDetails`()');
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'PdfMasterIndex');
            return 'Some error occurred while processing your request in PdfMaster Index ';
        }
        return view('PDFMaster.PdfMasterIndex', compact('PdfMasterList'));
    }

    public function EditPdfMaster($SrNo)
    {
        try {
            $EditPdfMaster = DB::connection($this->getDBName())->select('CALL `stp_getEditPdfMaster`(?)',array($SrNo));
            foreach ($EditPdfMaster as $item) {
                $Title = $item->Title;
                $PDF = $item->PDF;
            }
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'EditPdfMaster');
            return 'Some error occurred while processing your request in Edit PdfMaster ';
        }
        return view('PDFMaster.EditPdfMaster',
            compact('Title','PDF','SrNo'));
    }

    public function PostEditPdfMaster(request $request)
    {
        try {
            $PDF = "";
            $data = array();

            if ($request->file('file')) {

                $file = $request->file('file');
                $filename = $file->getClientOriginalName();


                // File extension
                $extension = $file->getClientOriginalExtension();

                // File upload location
                $location = 'Upload/PdfMaster/';

                $PDF = 'Upload/PdfMaster/' . $filename;

                // Upload file
                $file->move($location, $filename);

                // File path
                $filepath = url('files/' . $filename);

                // Response
                $data['success'] = 1;
                $data['message'] = 'Uploaded Successfully!';
                $data['filepath'] = $filepath;
                $data['extension'] = $extension;
            }

            if ($PDF == null || $PDF == "") {
                $SrNo = $request["SrNo"];
                $Title = $request["Title"];
                DB::connection($this->getDBName())->statement('CALL `stp_UpdatePdfMaster1`(?,?)'
                    , array($SrNo,$Title));
            } else {
                $SrNo = $request["SrNo"];
                $Title = $request["Title"];
                DB::connection($this->getDBName())->statement('CALL `stp_UpdatePdfMaster2`(?,?,?)'
                    , array($SrNo,$Title,$PDF));
            }

        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'PostEditPdfMaster');
            return 'Some error occurred while processing your request in PostEdit PdfMaster';
        }
        return \Redirect::route('PdfMasterIndex')->with('flash_message', 'PdfMaster updated Successfully');
    }

    public function ViewPdfMaster($SrNo)
    {
        try {
            $ViewPdfMaster = DB::connection($this->getDBName())->select('CALL `stp_getEditPdfMaster`(?)'
                , array($SrNo));
            foreach ($ViewPdfMaster as $item) {
                $Title = $item->Title;
                $PDF = $item->PDF;
            }
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'ViewPdfMaster');
            return 'Some error occurred while processing your request in View PdfMaster ';
        }
        return view('PDFMaster.ViewPdfMaster',
            compact('Title', 'PDF','SrNo'));
    }

    //----------------------------------Tenders er--------------------------------//
    public function TendersIndex()
    {
        try {
            $TendersList = DB::connection($this->getDBName())->select('CALL `stp_getTenderDetails`()');
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'TendersIndex');
            return 'Some error occurred while processing your request in Tenders Index';
        }
        return view('Tenders.TendersIndex2', compact('TendersList'));
    }

    public function CreateTender()
    {
        try {
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'CreateTender');
            return 'Some error occurred while processing your request in Create Tender';
        }
        return view('Tenders.CreateTenders');
    }

    public function PostCreateTender(Request $request)
    {
        try {

            $data = array();

            $validator = Validator::make($request->all(), [
                'file' => 'required|mimes:png,jpg,jpeg,csv,txt,pdf|max:2048'
            ]);

            if ($validator->fails()) {

                $data['success'] = 0;
                $data['error'] = $validator->errors()->first('file');// Error response

            } else {
                if ($request->file('file')) {

                    $file = $request->file('file');
                    $filename = time() . '_' . $file->getClientOriginalName();

                    // File extension
                    $extension = $file->getClientOriginalExtension();

                    // File upload location
                    $location = 'Upload/Tenders/';

                    $PDF = 'Upload/Tenders/' . $filename;

                    // Upload file
                    $file->move($location, $filename);

                    // File path
                    $filepath = url('files/' . $filename);

                    // Response
                    $data['success'] = 1;
                    $data['message'] = 'Uploaded Successfully!';
                    $data['filepath'] = $filepath;
                    $data['extension'] = $extension;
                } else {
                    // Response
                    $data['success'] = 2;
                    $data['message'] = 'File not uploaded.';
                }
            }
            $TenderNo = $request["TenderNo"];
            $Description = $request["Description"];
            $TenderDate = $request["TenderDate"];
            DB::connection($this->getDBName())->select('CALL `stp_InsertIntoTenders`(?,?,?,?,?)'
                , array($TenderNo,$Description,$TenderDate,$PDF,'1'));

        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'PostCreateTender');
            return 'Some error occurred while processing your request in Post Create Tender';
        }
        return response()->json($data);
    }

    public function EditTender($SrNo)
    {
        try {
            $EditTender = DB::connection($this->getDBName())->select('CALL `stp_getTenderDetailsToEdit`(?)'
                , array($SrNo));
            foreach ($EditTender as $item) {
                $TenderNo = $item->TenderNo;
                $Description = $item->Description;
                $TenderDate = $item->TenderDate;
                $PDF = $item->PDF;
                $IsActive = $item->IsActive;
            }
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'EditTender');
            return 'Some error occurred while processing your request in Edit Tender';
        }
        return view('Tenders.EditTenders',
            compact('TenderNo', 'Description', 'TenderDate','PDF', 'IsActive', 'SrNo'));
    }

    public function PostEditTender(request $request)
    {
        try {
            $PDF = "";
            $data = array();

            if ($request->file('file')) {

                $file = $request->file('file');
                $filename = $file->getClientOriginalName();


                // File extension
                $extension = $file->getClientOriginalExtension();

                // File upload location
                $location = 'Upload/Tenders/';

                $PDF = 'Upload/Tenders/' . $filename;

                // Upload file
                $file->move($location, $filename);

                // File path
                $filepath = url('files/' . $filename);

                // Response
                $data['success'] = 1;
                $data['message'] = 'Uploaded Successfully!';
                $data['filepath'] = $filepath;
                $data['extension'] = $extension;
            }

            if ($PDF == "") {
                $SrNo = $request["SrNo"];
                $TenderNo = $request["TenderNo"];
                $Description = $request["Description"];
                $TenderDate = $request["TenderDate"];
                DB::connection($this->getDBName())->statement('CALL `stp_UpdateTenders1`(?,?,?,?)'
                    , array($SrNo,$TenderNo,$Description,$TenderDate));
            } else {
                $SrNo = $request["SrNo"];
                $TenderNo = $request["TenderNo"];
                $Description = $request["Description"];
                $TenderDate = $request["TenderDate"];
                DB::connection($this->getDBName())->statement('CALL `stp_UpdateTender2`(?,?,?,?,?)'
                    , array($SrNo, $TenderNo,$Description,$TenderDate,$PDF));
            }

        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'PostEditTender');
            return 'Some error occurred while processing your request in PostEdit Tender';
        }
        return \Redirect::route('TendersIndex')->with('flash_message', 'Tender Added Successfully');
    }

    public function ViewTender($SrNo)
    {
        try {
            $ViewTender = DB::connection($this->getDBName())->select('CALL `stp_getTenderDetailsToEdit`(?)'
                , array($SrNo));
            foreach ($ViewTender as $item) {
                $TenderNo = $item->TenderNo;
                $Description = $item->Description;
                $TenderDate = $item->TenderDate;
                $IsActive = $item->IsActive;
                $PDF = $item->PDF;
            }
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'ViewTender');
            return 'Some error occurred while processing your request in View Tender';
        }
        return view('Tenders.ViewTenders',
            compact('TenderNo', 'Description', 'TenderDate', 'PDF', 'IsActive','SrNo'));
    }

    public function TenderStatusChange($SrNo, $IsActive)
    {
        $StatusChange = DB::connection($this->getDBName())->select('CALL `stp_changeTenderStatus`(?,?)'
            , array($SrNo, $IsActive));
        return json_encode($StatusChange);
    }

    //----------------------------------Rank List er--------------------------------//
    public function RankListIndex2()
    {
        try {
            $RankList = DB::connection($this->getDBName())->select('CALL `stp_getRankListDetails`()');
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'RankListIndex2');
            return 'Some error occurred while processing your request in RankList Index';
        }
        return view('RankList.RankListIndex2', compact('RankList'));
    }

    public function EditRankList($SrNo)
    {
        try {
            $EditTender = DB::connection($this->getDBName())->select('CALL `stp_getRankListDetailsToEdit`(?)', array($SrNo));
//            $ProgramNameList = DB::connection($this->getDBName())->select('CALL `stp_getProgramYear`(?)', array($SrNo));
            foreach ($EditTender as $item) {
                $ProgramName = $item->ProgramName;
                $Year = $item->Year;
                $Rank = $item->Rank;
                $Name = $item->Name;
            }
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'EditRankList');
            return 'Some error occurred while processing your request in EditRank List';
        }
        return view('RankList.EditRankList',
            compact('Year', 'Rank', 'Name', 'SrNo','ProgramName'));
    }

    public function ViewRankList($SrNo)
    {
        try {
            $ViewRankList = DB::connection($this->getDBName())->select('CALL `stp_getRankListDetailsToEdit`(?)'
                , array($SrNo));
            foreach ($ViewRankList as $item) {
                $ProgramName = $item->ProgramName;
                $Year = $item->Year;
                $Rank = $item->Rank;
                $Name = $item->Name;
            }
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'ViewRankList');
            return 'Some error occurred while processing your request in ViewRank List';
        }
        return view('RankList.ViewRankList',
            compact('ProgramName', 'Year', 'Rank', 'Name','SrNo'));
    }

    public function PostEditRankList(request $request)
    {
        try {

            $SrNo = $request["SrNo"];
            $Name = $request["Name"];;
            DB::connection($this->getDBName())->statement('CALL `stp_UpdateRanking`(?,?)'
                , array($SrNo,$Name));

        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'PostEditRankList');
            return 'Some error occurred while processing your request in PostEdit RankList ';
        }
        return \Redirect::route('RankListIndex2')->with('flash_message', 'Ranking updated Successfully');
    }

    //----------------------------------Infrastructure er--------------------------------//

    public function InfrastructureIndex2()
    {
        try {
            $InfrastructureList = DB::connection($this->getDBName())->select('CALL `stp_getInfrastructureDetails`()');
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'InfrastructureIndex2');
            return 'Some error occurred while processing your request in Infrastructure Index';
        }
        return view('Infrastructure.InfrastructureIndex2', compact('InfrastructureList'));
    }

    public function CreateInfrastructure()
    {
        try {
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'CreateInfrastructure');
            return 'Some error occurred while processing your request in Create Infrastructure';
        }
        return view('Infrastructure.CreateInfrastructure');
    }

    public function PostCreateInfrastructure(Request $request)
    {
        try {

            $data = array();

            $validator = Validator::make($request->all(), [
                'file' => 'required|mimes:png,jpg,jpeg,csv,txt,pdf|max:2048'
            ]);

            if ($validator->fails()) {

                $data['success'] = 0;
                $data['error'] = $validator->errors()->first('file');// Error response

            } else {
//                for Photo 1
                if ($request->file('file')) {

                    $file = $request->file('file');
                    $filename = time() . '_' . $file->getClientOriginalName();

                    // File extension
                    $extension = $file->getClientOriginalExtension();

                    // File upload location
                    $location = 'Upload/Infrastructure/';

                    $Photo1 = 'Upload/Infrastructure/' . $filename;

//                $location = 'files';

                    // Upload file
                    $file->move($location, $filename);

                    // File path
                    $filepath = url('files/' . $filename);

                    // Response
                    $data['success'] = 1;
                    $data['message'] = 'Uploaded Successfully!';
                    $data['filepath'] = $filepath;
                    $data['extension'] = $extension;
                } else {
                    // Response
                    $data['success'] = 2;
                    $data['message'] = 'File not uploaded.';
                }
//                for Photo 2
                if ($request->file('Photo2')) {

                    $file1 = $request->file('Photo2');
                    $filename1 = time() . '_' . $file1->getClientOriginalName();

                    // File extension
                    $extension1 = $file1->getClientOriginalExtension();

                    // File upload location
                    $location1 = 'Upload/Infrastructure/';

                    $Photo2 = 'Upload/Infrastructure/' . $filename1;

//                $location = 'files';

                    // Upload file
                    $file1->move($location1, $filename1);

                    // File path
                    $filepath1 = url('files/' . $filename1);

                    // Response
                    $data['success'] = 1;
                    $data['message'] = 'Uploaded Successfully!';
                    $data['filepath'] = $filepath1;
                    $data['extension'] = $extension1;
                } else {
                    // Response
                    $data['success'] = 2;
                    $data['message'] = 'File not uploaded.';
                }

            }

            $Title = $request["Title"];
            $Description = $request["Description"];

            DB::connection($this->getDBName())->select('CALL `stp_InsertIntoInfrastructure`(?,?,?,?,?)'
                , array($Title, $Description,$Photo1,$Photo2,'1'));

        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'PostCreateInfrastructure');
            return 'Some error occurred while processing your request in PostCreate Infrastructure';
        }
        return response()->json($data);
    }
    public function EditInfrastructure($SrNo)
    {
        try {
            $EditInfrastructure = DB::connection($this->getDBName())->select('CALL `stp_EditInfrastructureDetails`(?)',array($SrNo));
            foreach ($EditInfrastructure as $item) {
                $Title = $item->Title;
                $Description = $item->Description;
                $IsActive = $item->IsActive;
                $Photo1 = $item->Photo1;
                $Photo2 = $item->Photo2;

            }
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'EditInfrastructure');
            return 'Some error occurred while processing your request in Edit Infrastructure';
        }
        return view('Infrastructure.EditInfrastructure',
            compact('Title', 'Description','IsActive','SrNo','Photo1','Photo2'));
    }

    public function PostEditInfrastructure(request $request)
    {
        try {
            $Photo1 = "";
            $Photo2 = "";
            $data = array();

//            for Photo1
            if ($request->file('file')) {

                $file = $request->file('file');
                $filename = $file->getClientOriginalName();


                // File extension
                $extension = $file->getClientOriginalExtension();

                // File upload location
                $location = 'Upload/infrastructure/';

                $Photo1 = 'Upload/infrastructure/' . $filename;

//                $location = 'files';

                // Upload file
                $file->move($location, $filename);

                // File path
                $filepath = url('files/' . $filename);

                // Response
                $data['success'] = 1;
                $data['message'] = 'Uploaded Successfully!';
                $data['filepath'] = $filepath;
                $data['extension'] = $extension;
            }
//            for Photo2
            if ($request->file('Photo2')) {

                $file1 = $request->file('Photo2');
                $filename1 = time() . '_' . $file1->getClientOriginalName();


                // File extension
                $extension1 = $file1->getClientOriginalExtension();

                // File upload location
                $location1 = 'Upload/infrastructure/';

                $Photo2 = 'Upload/infrastructure/' . $filename1;

//                $location = 'files';

                // Upload file
                $file1->move($location1, $filename1);

                // File path
                $filepath1 = url('files/' . $filename1);

                // Response
                $data['success'] = 1;
                $data['message'] = 'Uploaded Successfully!';
                $data['filepath'] = $filepath1;
                $data['extension'] = $extension1;
            }

            if ($Photo1 == "" &&  $Photo2 == "") {
                $SrNo = $request["SrNo"];
                $Title = $request["Title"];
                $Description = $request["Description"];
                DB::connection($this->getDBName())->statement('CALL `stp_UpdateInfrastructure1`(?,?,?)'
                    , array($SrNo,$Title,$Description));
            }

            else {
                $SrNo = $request["SrNo"];
                $Title = $request["Title"];
                $Description = $request["Description"];
                DB::connection($this->getDBName())->statement('CALL `stp_UpdateInfrastructure2`(?,?,?,?,?)'
                    , array($SrNo, $Title, $Description, $Photo1, $Photo2));
            }

        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'PostEditinfrastructure');
            return 'Some error occurred while processing your request in PostEdit infrastructure';
        }
        return \Redirect::route('InfrastructureIndex2')->with('flash_message', 'Infrastructure Edited Successfully');
    }

    public function ViewInfrastructure($SrNo)
    {
        try {
            $ViewInfrastructure = DB::connection($this->getDBName())->select('CALL `stp_EditInfrastructureDetails`(?)'
                , array($SrNo));
            foreach ($ViewInfrastructure as $item) {
                $Title = $item->Title;
                $Description = $item->Description;
                $IsActive = $item->IsActive;
                $Photo1 = $item->Photo1 ;
                $Photo2 = $item->Photo2;
            }
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'ViewInfrastructure');
            return 'Some error occurred while processing your request in View Infrastructure';
        }
        return view('Infrastructure.ViewInfrastructure',
            compact('Title', 'Description','IsActive','Photo1','Photo2','SrNo'));
    }

    public function InfrastructureStatusChange($SrNo, $IsActive)
    {
        $StatusChange = DB::connection($this->getDBName())->select('CALL `stp_changeInfrastructureStatus`(?,?)'
            , array($SrNo, $IsActive));
        return json_encode($StatusChange);
    }

    //----------------------------------Alumni er--------------------------------//
    public function AlumniIndex2()
    {
        try {
            $AlumniList = DB::connection($this->getDBName())->select('CALL `stp_getAlumniIndex2`()');
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'AlumniIndex2');
            return 'Some error occurred while processing your request in Alumni Index';
        }
        return view('Alumni.AlumniIndex2', compact('AlumniList'));
    }
    public function AlumniStatusChange2($SrNo, $IsActive)
    {
        $StatusChange = DB::connection($this->getDBName())->select('CALL `stp_changeAlumniStatus`(?,?)'
            , array($SrNo, $IsActive));
        return json_encode($StatusChange);
    }

    public function CreateAlumni()
    {
        try {
            $Titlelist = DB::connection($this->getDBName())->select('CALL `stp_getTitlelist`()');
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'CreateAlumni');
            return 'Some error occurred while processing your request in Create Alumni';
        }
        return view('Alumni.CreateAlumni', compact('Titlelist'));
    }

    public function PostCreateAlumni(Request $request)
    {
        try {

            $data = array();

            $validator = Validator::make($request->all(), [
                'file' => 'required|mimes:png,jpg,jpeg,csv,txt,pdf|max:2048'
            ]);

            if ($validator->fails()) {

                $data['success'] = 0;
                $data['error'] = $validator->errors()->first('file');// Error response

            } else {
                if ($request->file('file')) {

                    $file = $request->file('file');
                    $filename = time() . '_' . $file->getClientOriginalName();

                    // File extension
                    $extension = $file->getClientOriginalExtension();

                    // File upload location
                    $location = 'Upload/Alumni/';

                    $Alumni = 'Upload/Alumni/' . $filename;

//                $location = 'files';

                    // Upload file
                    $file->move($location, $filename);

                    // File path
                    $filepath = url('files/' . $filename);

                    // Response
                    $data['success'] = 1;
                    $data['message'] = 'Uploaded Successfully!';
                    $data['filepath'] = $filepath;
                    $data['extension'] = $extension;
                } else {
                    // Response
                    $data['success'] = 2;
                    $data['message'] = 'File not uploaded.';
                }
            }

            $Title = $request["Title"];
            $AlumniName = $request["AlumniName"];
            $Description = $request["Description"];
            DB::connection($this->getDBName())->select('CALL `stp_InsertIntoAlumni`(?,?,?,?,?)'
                , array($Title, $AlumniName,$Description,$Alumni,'1'));

        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'PostCreateAlumni');
            return 'Some error occurred while processing your request in PostCreate Alumni';
        }
        return response()->json($data);
    }

    public function AddAlumni($SrNo)
    {
        try {
            $AddAlumni = DB::connection($this->getDBName())->select('CALL `stp_getTitleforAlumni`(?)'
                , array($SrNo));
            foreach ($AddAlumni as $item) {
                $Title = $item->Title;
            }
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'AddAlumni');
            return 'Some error occurred while processing your request in Add Alumni';
        }
        return view('Alumni.AddAlumni', compact('AddAlumni','Title'));
    }

    public function EditAlumni($SrNo)
    {
        try {
            $EditAlumni = DB::connection($this->getDBName())->select('CALL `stp_getAlumniDetailsForEdit`(?)'
                , array($SrNo));
            foreach ($EditAlumni as $item) {
                $Title = $item->Title;
                $AlumniName = $item->AlumniName;
                $Description = $item->Description;
                $IsActive = $item->IsActive;
                $Photo = $item->Photo;
            }
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'EditAlumni');
            return 'Some error occurred while processing your request in Edit Alumni';
        }
        return view('Alumni.EditAlumni',
            compact('Title', 'AlumniName', 'Description','IsActive', 'SrNo','Photo'));
    }

    public function ViewAlumni($SrNo)
    {
        try {
            $ViewAlumni = DB::connection($this->getDBName())->select('CALL `stp_getAlumniDetailsForEdit`(?)'
                , array($SrNo));
            foreach ($ViewAlumni as $item) {
                $Title = $item->Title;
                $AlumniName = $item->AlumniName;
                $Description = $item->Description;
                $IsActive = $item->IsActive;
                $Photo = $item->Photo;
            }
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'ViewAlumni');
            return 'Some error occurred while processing your request in View Alumni';
        }
        return view('Alumni.ViewAlumni',
            compact('Title', 'AlumniName', 'Description','IsActive','Photo','SrNo'));
    }

    public function PostEditAlumni(request $request)
    {
        try {
            $Alumni = "";
            $data = array();

            if ($request->file('file')) {

                $file = $request->file('file');
                $filename = $file->getClientOriginalName();


                // File extension
                $extension = $file->getClientOriginalExtension();

                // File upload location
                $location = 'Upload/Alumni/';

                $Alumni = 'Upload/Alumni/' . $filename;

//                $location = 'files';

                // Upload file
                $file->move($location, $filename);

                // File path
                $filepath = url('files/' . $filename);

                // Response
                $data['success'] = 1;
                $data['message'] = 'Uploaded Successfully!';
                $data['filepath'] = $filepath;
                $data['extension'] = $extension;
            }

            if ($Alumni == "") {
                $SrNo = $request["SrNo"];
                $Title = $request["Title"];
                $AlumniName = $request["AlumniName"];
                $Description = $request["Description"];
                DB::connection($this->getDBName())->statement('CALL `stp_UpdateAlumni1`(?,?,?,?)'
                    , array($SrNo,$Title,$AlumniName,$Description));
            } else {
                $SrNo = $request["SrNo"];
                $Title = $request["Title"];
                $AlumniName = $request["AlumniName"];
                $Description = $request["Description"];
                DB::connection($this->getDBName())->statement('CALL `stp_UpdateAlumni2`(?,?,?,?,?)'
                    , array($SrNo, $Title,$AlumniName,$Description,$Alumni));
            }

        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'PostEditAlumni');
            return 'Some error occurred while processing your request in PostEdit Alumni';
        }
        return \Redirect::route('AlumniIndex2')->with('flash_message', 'Alumni Updated Successfully');
    }

    //-----------------------------------New Law Review---------------------------------------------//
    public function NewLawReviewIndex2()
    {
        try {
            $NewLawReviewList = DB::connection($this->getDBName())->select('CALL `stp_getNewLawReviewIndex`()');
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'NewLawReviewIndex2');
            return 'Some error occurred while processing your request in NewLawReview Index2';
        }
        return view('NewLawReview.NewLawReviewIndex2', compact('NewLawReviewList'));
    }

    public function CreateNewLawReview()
    {
        try {
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'CreateNewLawReview');
            return 'Some error occurred while processing your request in Create NewLawReview';
        }
        return view('NewLawReview.CreateNewLawReview');
    }

    public function PostCreateNewLawReview(Request $request)
    {
        try {

            $data = array();

            $validator = Validator::make($request->all(), [
                'file' => 'required|mimes:png,jpg,jpeg,csv,txt,pdf|max:2048'
            ]);

            if ($validator->fails()) {

                $data['success'] = 0;
                $data['error'] = $validator->errors()->first('file');// Error response

            } else {
                if ($request->file('file')) {

                    $file = $request->file('file');
                    $filename = time() . '_' . $file->getClientOriginalName();

                    // File extension
                    $extension = $file->getClientOriginalExtension();

                    // File upload location
                    $location = 'Upload/NewLawReview/';

                    $PDF = 'Upload/NewLawReview/' . $filename;

                    // Upload file
                    $file->move($location, $filename);

                    // File path
                    $filepath = url('files/' . $filename);

                    // Response
                    $data['success'] = 1;
                    $data['message'] = 'Uploaded Successfully!';
                    $data['filepath'] = $filepath;
                    $data['extension'] = $extension;
                } else {
                    // Response
                    $data['success'] = 2;
                    $data['message'] = 'File not uploaded.';
                }
            }

            $Title = $request["Title"];
            $Description = $request["Description"];
            DB::connection($this->getDBName())->select('CALL `stp_InsertIntoLawReview`(?,?,?,?)'
                , array($Title, $Description,$PDF,'1'));

        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'PostCreateNewLawReview');
            return 'Some error occurred while processing your request in PostCreate NewLawReview';
        }
        return response()->json($data);
    }

    public function EditNewLawReview($SrNo)
    {
        try {
            $EditNewLawReview = DB::connection($this->getDBName())->select('CALL `stp_EditNewLawReviewDetails`(?)',array($SrNo));
            foreach ($EditNewLawReview as $item) {
                $Title = $item->Title;
                $Description = $item->Description;
                $IsActive = $item->IsActive;
                $PDF = $item->PDF;
            }
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'EditNewLawReview');
            return 'Some error occurred while processing your request in Edit NewLawReview';
        }
        return view('NewLawReview.EditNewLawReview',
            compact('Title', 'Description','IsActive','SrNo','PDF'));
    }
    public function PostEditNewLawReview(request $request)
    {
        try {
            $LawReview = "";
            $data = array();

            if ($request->file('file')) {

                $file = $request->file('file');
                $filename = $file->getClientOriginalName();


                // File extension
                $extension = $file->getClientOriginalExtension();

                // File upload location
                $location = 'Upload/NewLawReview/';

                $LawReview = 'Upload/NewLawReview/' . $filename;

//                $location = 'files';

                // Upload file
                $file->move($location, $filename);

                // File path
                $filepath = url('files/' . $filename);

                // Response
                $data['success'] = 1;
                $data['message'] = 'Uploaded Successfully!';
                $data['filepath'] = $filepath;
                $data['extension'] = $extension;
            }

            if ($LawReview == "") {
                $SrNo = $request["SrNo"];
                $Title = $request["Title"];
                $Description = $request["Description"];
                DB::connection($this->getDBName())->statement('CALL `stp_UpdateNewLawReview1`(?,?,?)'
                    , array($SrNo,$Title,$Description));
            } else {
                $SrNo = $request["SrNo"];
                $Title = $request["Title"];
                $Description = $request["Description"];
                DB::connection($this->getDBName())->statement('CALL `stp_UpdateNewLawReview2`(?,?,?,?)'
                    , array($SrNo, $Title,$Description,$LawReview));
            }

        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'PostEditNewLawReview');
            return 'Some error occurred while processing your request in PostEdit NewLawReview';
        }
        return \Redirect::route('NewLawReviewIndex2')->with('flash_message', 'New LawReview Added Successfully');
    }
    public function ViewNewLawReview($SrNo)
    {
        try {
            $ViewNewLawReview = DB::connection($this->getDBName())->select('CALL `stp_EditNewLawReviewDetails`(?)'
                , array($SrNo));
            foreach ($ViewNewLawReview as $item) {
                $Title = $item->Title;
                $Description = $item->Description;
                $IsActive = $item->IsActive;
                $PDF = $item->PDF;
            }
        } catch (\Exception $ex) {
            $common = new CommonController;
            $common->ErrorLogging($ex, 'GLCMasterController', 'ViewNewLawReview');
            return 'Some error occurred while processing your request in View NewLawReview';
        }
        return view('NewLawReview.ViewNewLawReview',
            compact('Title', 'Description','IsActive','PDF','SrNo'));
    }

    public function NewLawReviewChange($SrNo, $IsActive)
    {
        $StatusChange = DB::connection($this->getDBName())->select('CALL `stp_changeNewLawReviewStatus`(?,?)'
            , array($SrNo, $IsActive));
        return json_encode($StatusChange);
    }




















































































}
