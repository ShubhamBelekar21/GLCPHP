<?php
use App\Http\Controllers\CommonController;
use App\Http\Controllers\GLCMasterController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdministrationController;
use App\Http\Controllers\AccountController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('Index',[HomeController::class,'Index'])->name('Index');
Route::get('Test',[HomeController::class,'Test'])->name('Test');
Route::get('CSRStatesticsIndex',[HomeController::class,'CSRStatesticsIndex'])->name('CSRStatesticsIndex');
Route::get('ToUploadNotice',[HomeController::class,'ToUploadNotice'])->name('ToUploadNotice');
Route::post('UploadData',[HomeController::class,'UploadData']);
Route::post('getLayoutData',[HomeController::class,'getLayoutData']);


Route::get('/', [PageController::class, 'index']);
Route::post('/uploadFile', [PageController::class, 'uploadFile'])->name('uploadFile');


Route::post('Account/CheckLogin',[AccountController::class, 'checkLogin'])->name('account.checkLogin');
Route::get('Testtt',[HomeController::class, 'Testtt']);
Route::get('Account/Logout',[AccountController::class,'logout'])->name('account.logout');
Route::get('Login',[AccountController::class,'login']);


//---------------------------------------------------------------------------//

Route::get('/',
    [HomeController::class,'Index']
);

Route::get('Index',[HomeController::class,'Index'])->name('Index');
Route::get('Test',[HomeController::class,'Test'])->name('Test');
Route::get('Test',[HomeController::class,'Test'])->name('Test');
Route::get('ToUploadNotice',[HomeController::class,'ToUploadNotice'])->name('ToUploadNotice');
Route::post('UploadData',[HomeController::class,'UploadData']);


Route::post('Account/CheckLogin',[AccountController::class, 'checkLogin'])->name('account.checkLogin');
Route::get('Testtt',[HomeController::class, 'Testtt']);
Route::get('Account/Logout',[AccountController::class,'logout'])->name('account.logout');
Route::get('Login',[AccountController::class,'login']);


//----------------------------------------------Four Button Master------------------------------------------------------------//

Route::get('CreateButtonsDetails',[GLCMasterController::class,'CreateButtonsDetails'])->name('CreateButtonsDetails');
Route::post('PostButtonsDetails',[GLCMasterController::class,'PostButtonsDetails'])->name('PostButtonsDetails');
Route::post('PostButtonsDetailsForUrl',[GLCMasterController::class,'PostButtonsDetailsForUrl'])->name('PostButtonsDetailsForUrl');
Route::post('PostEditButtonsDetailsForUrl',[GLCMasterController::class,'PostEditButtonsDetailsForUrl'])->name('PostEditButtonsDetailsForUrl');


Route::get('FourButtonIndex',[GLCMasterController::class,'FourButtonIndex'])->name('FourButtonIndex');
//Route::get('CreateButtonDetails',[GLCMasterController::class,'CreateButtonDetails'])->name('CreateButtonDetails');
Route::get('EditButtonDetails/{data}',[GLCMasterController::class,'EditButtonDetails'])->name('EditButtonDetails');
Route::get('ViewButtonDetails/{data}',[GLCMasterController::class,'ViewButtonDetails'])->name('ViewButtonDetails');
Route::get('FourButtonStatusChange/{data}/{data1}',[GLCMasterController::class,'FourButtonStatusChange'])->name('FourButtonStatusChange');
Route::post('PostButtonDetails',[GLCMasterController::class,'PostButtonDetails'])->name('PostButtonDetails');
Route::post('PostEditButtonDetails',[GLCMasterController::class,'PostEditButtonDetails'])->name('PostEditButtonDetails');

//----------------------------------------------Notice Section------------------------------------------------------------//

Route::get('NoticeSectionIndex',[GLCMasterController::class,'NoticeSectionIndex'])->name('NoticeSectionIndex');
Route::get('CreateNoticeDetails',[GLCMasterController::class,'CreateNoticeDetails'])->name('CreateNoticeDetails');

Route::get('EditNoticeDetails/{data}',[GLCMasterController::class,'EditNoticeDetails'])->name('EditNoticeDetails');
Route::get('ViewNoticeDetails/{data}',[GLCMasterController::class,'ViewNoticeDetails'])->name('ViewNoticeDetails');
Route::get('NoticeStatusChange/{data}/{data1}',[GLCMasterController::class,'NoticeStatusChange'])->name('NoticeStatusChange');
Route::post('PostNoticeDetails',[GLCMasterController::class,'PostNoticeDetails'])->name('PostNoticeDetails');
Route::post('PostEditNoticeDetails',[GLCMasterController::class,'PostEditNoticeDetails'])->name('PostEditNoticeDetails');

//----------------------------------------------Event Section------------------------------------------------------------//

Route::get('EventSectionIndex',[GLCMasterController::class,'EventSectionIndex'])->name('EventSectionIndex');
Route::get('CreateEventDetails',[GLCMasterController::class,'CreateEventDetails'])->name('CreateEventDetails');
Route::get('EditEventsDetails/{data}',[GLCMasterController::class,'EditEventsDetails'])->name('EditEventsDetails');
Route::get('ViewEventsDetails/{data}',[GLCMasterController::class,'ViewEventsDetails'])->name('ViewEventsDetails');
Route::get('EventStatusChange/{data}/{data1}',[GLCMasterController::class,'EventStatusChange'])->name('EventStatusChange');
Route::post('PostEventDetails',[GLCMasterController::class,'PostEventDetails'])->name('PostEventDetails');
Route::post('PostEditEventsDetails',[GLCMasterController::class,'PostEditEventsDetails'])->name('PostEditEventsDetails');

//----------------------------------------------Marquee Section------------------------------------------------------------//

Route::get('MarqueeSectionIndex',[GLCMasterController::class,'MarqueeSectionIndex'])->name('MarqueeSectionIndex');
Route::get('CreateMarqueeDetails',[GLCMasterController::class,'CreateMarqueeDetails'])->name('CreateMarqueeDetails');
Route::get('EditMarqueeDetails/{data}',[GLCMasterController::class,'EditMarqueeDetails'])->name('EditMarqueeDetails');
Route::get('ViewMarqueeDetails/{data}',[GLCMasterController::class,'ViewMarqueeDetails'])->name('ViewMarqueeDetails');
Route::get('MarqueeStatusChange/{data}/{data1}',[GLCMasterController::class,'MarqueeStatusChange'])->name('MarqueeStatusChange');
Route::post('PostMarqueeDetails',[GLCMasterController::class,'PostMarqueeDetails'])->name('PostMarqueeDetails');
Route::post('PostEditMarqueeDetails',[GLCMasterController::class,'PostEditMarqueeDetails'])->name('PostEditMarqueeDetails');
Route::post('PostMarqueeDetailsUrl',[GLCMasterController::class,'PostMarqueeDetailsUrl'])->name('PostMarqueeDetailsUrl');


Route::post('PostEditMarqueeDetails',[GLCMasterController::class,'PostEditMarqueeDetails'])->name('PostEditMarqueeDetails');
Route::post('PostEditMarqueeDetailsForUrl',[GLCMasterController::class,'PostEditMarqueeDetailsForUrl'])->name('PostEditMarqueeDetailsForUrl');

//----------------------------------------------Principal Section------------------------------------------------------------//

Route::get('PrincipalSectionIndex',[GLCMasterController::class,'PrincipalSectionIndex'])->name('PrincipalSectionIndex');
Route::get('CreatePrincipalDetails',[GLCMasterController::class,'CreatePrincipalDetails'])->name('CreatePrincipalDetails');
Route::get('EditPrincipalDetails/{data}',[GLCMasterController::class,'EditPrincipalDetails'])->name('EditPrincipalDetails');
Route::get('ViewPrincipalDetails/{data}',[GLCMasterController::class,'ViewPrincipalDetails'])->name('ViewPrincipalDetails');
Route::get('PrincipalStatusChange/{data}/{data1}',[GLCMasterController::class,'PrincipalStatusChange'])->name('PrincipalStatusChange');
Route::Post('PostPrincipalDetails',[GLCMasterController::class,'PostPrincipalDetails'])->name('PostPrincipalDetails');
Route::Post('PostEditPrincipalDetails',[GLCMasterController::class,'PostEditPrincipalDetails'])->name('PostEditPrincipalDetails');


//----------------------------------------------Gallery Section------------------------------------------------------------//

Route::get('GallerySectionIndex',[GLCMasterController::class,'GallerySectionIndex'])->name('GallerySectionIndex');
Route::get('CreateGalleryDetails',[GLCMasterController::class,'CreateGalleryDetails'])->name('CreateGalleryDetails');
Route::get('EditGalleryDetails/{data}',[GLCMasterController::class,'EditGalleryDetails'])->name('EditGalleryDetails');
Route::get('ViewGalleryDetails/{data}',[GLCMasterController::class,'ViewGalleryDetails'])->name('ViewGalleryDetails');
Route::get('GalleryStatusChange/{data}/{data1}',[GLCMasterController::class,'GalleryStatusChange'])->name('GalleryStatusChange');
Route::post('PostGalleryDetails',[GLCMasterController::class,'PostGalleryDetails'])->name('PostGalleryDetails');
Route::post('PostEditGalleryDetails',[GLCMasterController::class,'PostEditGalleryDetails'])->name('PostEditGalleryDetails');

//---------------------------------------Alumni Section------------------------------------------------------------//

Route::get('AlumniSectionIndex',[GLCMasterController::class,'AlumniSectionIndex'])->name('AlumniSectionIndex');
Route::get('CreateAlumniDetails',[GLCMasterController::class,'CreateAlumniDetails'])->name('CreateAlumniDetails');
Route::get('EditAlumniDetails/{data}',[GLCMasterController::class,'EditAlumniDetails'])->name('EditAlumniDetails');
Route::get('ViewAlumniDetails/{data}',[GLCMasterController::class,'ViewAlumniDetails'])->name('ViewAlumniDetails');
Route::get('AlumniStatusChange/{data}/{data1}',[GLCMasterController::class,'AlumniStatusChange'])->name('AlumniStatusChange');
Route::post('PostAlumniDetails',[GLCMasterController::class,'PostAlumniDetails'])->name('PostAlumniDetails');
Route::post('PostEditAlumniDetails',[GLCMasterController::class,'PostEditAlumniDetails'])->name('PostEditAlumniDetails');


//---------------------------------------Slider Section------------------------------------------------------------//

Route::get('SliderSectionIndex',[GLCMasterController::class,'SliderSectionIndex'])->name('SliderSectionIndex');
Route::get('CreateSliderDetails',[GLCMasterController::class,'CreateSliderDetails'])->name('CreateSliderDetails');
Route::Post('PostSliderDetails',[GLCMasterController::class,'PostSliderDetails'])->name('PostSliderDetails');
Route::Post('PostEditSliderDetails',[GLCMasterController::class,'PostEditSliderDetails'])->name('PostEditSliderDetails');
Route::get('EditSliderDetails/{data}',[GLCMasterController::class,'EditSliderDetails'])->name('EditSliderDetails');
Route::get('ViewSliderDetails/{data}',[GLCMasterController::class,'ViewSliderDetails'])->name('ViewSliderDetails');
Route::get('SliderStatusChange/{data}/{data1}',[GLCMasterController::class,'SliderStatusChange'])->name('SliderStatusChange');

//---------------------------------------CSR Statestics------------------------------------------------------------//

//Route::get('CSRStatesticsIndex',[GLCMasterController::class,'CSRStatesticsIndex'])->name('CSRStatesticsIndex');

//---------------------------------------CSR Statestics For Member------------------------------------------------------------//

Route::get('CSRStatesticsIndexForMember',[GLCMasterController::class,'CSRStatesticsIndexForMember'])->name('CSRStatesticsIndexForMember');
Route::get('CreateCSRStatesticsForMember',[GLCMasterController::class,'CreateCSRStatesticsForMember'])->name('CreateCSRStatesticsForMember');
Route::get('EditCSRStatesticsDetails/{data}',[GLCMasterController::class,'EditCSRStatesticsDetails'])->name('EditCSRStatesticsDetails');
Route::post('PostCSRStatesticsForMember',[GLCMasterController::class,'PostCSRStatesticsForMember'])->name('PostCSRStatesticsForMember');
Route::post('PostEditCSRStatesticsDetails',[GLCMasterController::class,'PostEditCSRStatesticsDetails'])->name('PostEditCSRStatesticsDetails');
Route::get('ViewCSRStatesticsDetails/{data}',[GLCMasterController::class,'ViewCSRStatesticsDetails'])->name('ViewCSRStatesticsDetails');

//---------------------------------------AboutUsIndex  18-01-2023------------------------------------------------------------//
Route::get('AboutUsIndex',[HomeController::class,'AboutUsIndex'])->name('AboutUsIndex');
Route::get('VisionMissionIndex',[HomeController::class,'VisionMissionIndex'])->name('VisionMissionIndex');
Route::get('RTIIndex',[HomeController::class,'RTIIndex'])->name('RTIIndex');
Route::get('LawReviewIndex',[HomeController::class,'LawReviewIndex'])->name('LawReviewIndex');
Route::get('MagazineIndex',[HomeController::class,'MagazineIndex'])->name('MagazineIndex');
Route::get('FromTheDeskOfPrincipalIndex',[HomeController::class,'FromTheDeskOfPrincipalIndex'])->name('FromTheDeskOfPrincipalIndex');

//---------------------------------------Faculty ------------------------------------------------------------//
Route::get('TeachingStaffFacultyIndex',[HomeController::class,'TeachingStaffFacultyIndex'])->name('TeachingStaffFacultyIndex');
Route::get('TeachingStaffFacultyIndex2',[GLCMasterController::class,'TeachingStaffFacultyIndex2'])->name('TeachingStaffFacultyIndex2');
Route::get('CreateTeachingStaffFaculty',[GLCMasterController::class,'CreateTeachingStaffFaculty'])->name('CreateTeachingStaffFaculty');
Route::post('PostCreateTeachingStaffFaculty',[GLCMasterController::class,'PostCreateTeachingStaffFaculty'])->name('PostCreateTeachingStaffFaculty');
Route::get('EditTeachingStaffFaculty/{data}',[GLCMasterController::class,'EditTeachingStaffFaculty'])->name('EditTeachingStaffFaculty');
Route::post('PostEditTeachingStaffFaculty',[GLCMasterController::class,'PostEditTeachingStaffFaculty'])->name('PostEditTeachingStaffFaculty');
Route::get('ViewTeachingStaffFaculty/{data}',[GLCMasterController::class,'ViewTeachingStaffFaculty'])->name('ViewTeachingStaffFaculty');
Route::get('TeachingStaffFacultyStatusChange/{data}/{data1}',[GLCMasterController::class,'TeachingStaffFacultyStatusChange'])->name('TeachingStaffFacultyStatusChange');

//---------------------------------------Adjunct Faculty------------------------------------------------------------//

Route::get('TeachingStaffAdjunctIndex',[HomeController::class,'TeachingStaffAdjunctIndex'])->name('TeachingStaffAdjunctIndex');
Route::get('TeachingStaffAdjunctIndex2',[GLCMasterController::class,'TeachingStaffAdjunctIndex2'])->name('TeachingStaffAdjunctIndex2');
Route::get('CreateTeachingStaffAdjunct',[GLCMasterController::class,'CreateTeachingStaffAdjunct'])->name('CreateTeachingStaffAdjunct');
Route::post('PostCreateTeachingStaffAdjunct',[GLCMasterController::class,'PostCreateTeachingStaffAdjunct'])->name('PostCreateTeachingStaffAdjunct');
Route::get('EditTeachingStaffAdjunct/{data}',[GLCMasterController::class,'EditTeachingStaffAdjunct'])->name('EditTeachingStaffAdjunct');
Route::post('PostEditTeachingStaffAdjunct',[GLCMasterController::class,'PostEditTeachingStaffAdjunct'])->name('PostEditTeachingStaffAdjunct');
Route::get('ViewTeachingStaffAdjunct/{data}',[GLCMasterController::class,'ViewTeachingStaffAdjunct'])->name('ViewTeachingStaffAdjunct');
Route::get('TeachingStaffAdjunctStatusChange/{data}/{data1}',[GLCMasterController::class,'TeachingStaffAdjunctStatusChange'])->name('TeachingStaffAdjunctStatusChange');


//---------------------------------------Non Teaching Staff------------------------------------------------------------//
Route::get('NonTeachingStaffIndex',[HomeController::class,'NonTeachingStaffIndex'])->name('NonTeachingStaffIndex');
Route::get('NonTeachingStaffIndex2',[GLCMasterController::class,'NonTeachingStaffIndex2'])->name('NonTeachingStaffIndex2');
Route::get('CreateNonTeachingStaff',[GLCMasterController::class,'CreateNonTeachingStaff'])->name('CreateNonTeachingStaff');
Route::post('PostCreateNonTeachingStaff',[GLCMasterController::class,'PostCreateNonTeachingStaff'])->name('PostCreateNonTeachingStaff');
Route::get('EditNonTeachingStaff/{data}',[GLCMasterController::class,'EditNonTeachingStaff'])->name('EditNonTeachingStaff');
Route::post('PostEditNonTeachingStaff',[GLCMasterController::class,'PostEditNonTeachingStaff'])->name('PostEditNonTeachingStaff');
Route::get('ViewNonTeachingStaff/{data}',[GLCMasterController::class,'ViewNonTeachingStaff'])->name('ViewNonTeachingStaff');
Route::get('NonTeachingStaffStatusChange/{data}/{data1}',[GLCMasterController::class,'NonTeachingStaffStatusChange'])->name('NonTeachingStaffStatusChange');

//---------------------------------------Committee------------------------------------------------------------//
Route::get('CommitteeIndex',[HomeController::class,'CommitteeIndex'])->name('CommitteeIndex');
Route::get('CommitteeIndex2',[GLCMasterController::class,'CommitteeIndex2'])->name('CommitteeIndex2');
Route::get('CreateCommittee',[GLCMasterController::class,'CreateCommittee'])->name('CreateCommittee');
Route::post('PostCreateCommittee',[GLCMasterController::class,'PostCreateCommittee'])->name('PostCreateCommittee');
Route::get('EditCommittee/{data}/{data1}',[GLCMasterController::class,'EditCommittee'])->name('EditCommittee');
Route::post('PostEditCommittee',[GLCMasterController::class,'PostEditCommittee'])->name('PostEditCommittee');
Route::get('ViewCommittee/{data}',[GLCMasterController::class,'ViewCommittee'])->name('ViewCommittee');
Route::get('CommitteeStatusChange/{data}/{data1}',[GLCMasterController::class,'CommitteeStatusChange'])->name('CommitteeStatusChange');

//---------------------------------------Program/Courses------------------------------------------------------------//
Route::get('CoursesIndex',[HomeController::class,'CoursesIndex'])->name('CoursesIndex');
Route::get('CoursesIndex2',[GLCMasterController::class,'CoursesIndex2'])->name('CoursesIndex2');
Route::get('CreateCourses',[GLCMasterController::class,'CreateCourses'])->name('CreateCourses');
Route::post('PostCreateCourses',[GLCMasterController::class,'PostCreateCourses'])->name('PostCreateCourses');
Route::get('EditCourses/{data}',[GLCMasterController::class,'EditCourses'])->name('EditCourses');
Route::post('PostEditCourses',[GLCMasterController::class,'PostEditCourses'])->name('PostEditCourses');
Route::get('ViewCourses/{data}',[GLCMasterController::class,'ViewCourses'])->name('ViewCourses');
Route::get('CoursesStatusChange/{data}/{data1}',[GLCMasterController::class,'CoursesStatusChange'])->name('CoursesStatusChange');

//---------------------------------------PDF Master------------------------------------------------------------//
Route::get('PdfMasterIndex',[GLCMasterController::class,'PdfMasterIndex'])->name('PdfMasterIndex');
Route::get('EditPdfMaster/{data}',[GLCMasterController::class,'EditPdfMaster'])->name('EditPdfMaster');
Route::post('PostEditPdfMaster',[GLCMasterController::class,'PostEditPdfMaster'])->name('PostEditPdfMaster');
Route::get('ViewPdfMaster/{data}',[GLCMasterController::class,'ViewPdfMaster'])->name('ViewPdfMaster');

//---------------------------------------Tenders------------------------------------------------------------//
Route::get('TendersIndex2',[HomeController::class,'TendersIndex2'])->name('TendersIndex2');
Route::get('TendersIndex',[GLCMasterController::class,'TendersIndex'])->name('TendersIndex');
Route::get('CreateTender',[GLCMasterController::class,'CreateTender'])->name('CreateTender');
Route::post('PostCreateTender',[GLCMasterController::class,'PostCreateTender'])->name('PostCreateTender');
Route::get('EditTender/{data}',[GLCMasterController::class,'EditTender'])->name('EditTender');
Route::post('PostEditTender',[GLCMasterController::class,'PostEditTender'])->name('PostEditTender');
Route::get('ViewTender/{data}',[GLCMasterController::class,'ViewTender'])->name('ViewTender');
Route::get('TenderStatusChange/{data}/{data1}',[GLCMasterController::class,'TenderStatusChange'])->name('TenderStatusChange');

//---------------------------------------Rank List------------------------------------------------------------//
Route::get('RankListIndex',[HomeController::class,'RankListIndex'])->name('RankListIndex');
Route::get('RankListIndex2',[GLCMasterController::class,'RankListIndex2'])->name('RankListIndex2');
Route::get('EditRankList/{data}',[GLCMasterController::class,'EditRankList'])->name('EditRankList');
Route::get('ViewRankList/{data}',[GLCMasterController::class,'ViewRankList'])->name('ViewRankList');
Route::post('PostEditRankList',[GLCMasterController::class,'PostEditRankList'])->name('PostEditRankList');

//---------------------------------------Infrastructure Index------------------------------------------------------------//
Route::get('InfrastructureIndex',[HomeController::class,'InfrastructureIndex'])->name('InfrastructureIndex');
Route::get('InfrastructureIndex2',[GLCMasterController::class,'InfrastructureIndex2'])->name('InfrastructureIndex2');
Route::get('CreateInfrastructure',[GLCMasterController::class,'CreateInfrastructure'])->name('CreateInfrastructure');
Route::post('PostCreateInfrastructure',[GLCMasterController::class,'PostCreateInfrastructure'])->name('PostCreateInfrastructure');
Route::get('EditInfrastructure/{data}',[GLCMasterController::class,'EditInfrastructure'])->name('EditInfrastructure');
Route::post('PostEditInfrastructure',[GLCMasterController::class,'PostEditInfrastructure'])->name('PostEditInfrastructure');
Route::get('ViewInfrastructure/{data}',[GLCMasterController::class,'ViewInfrastructure'])->name('ViewInfrastructure');
Route::get('InfrastructureStatusChange/{data}/{data1}',[GLCMasterController::class,'InfrastructureStatusChange'])->name('InfrastructureStatusChange');

//---------------------------------------Alumni Index------------------------------------------------------------//
Route::get('AlumniIndex',[HomeController::class,'AlumniIndex'])->name('AlumniIndex');
Route::get('PartialAlumniIndex/{data}',[HomeController::class,'PartialAlumniIndex'])->name('PartialAlumniIndex');
Route::get('AlumniIndex2',[GLCMasterController::class,'AlumniIndex2'])->name('AlumniIndex2');
Route::get('AlumniStatusChange2/{data}/{data1}',[GLCMasterController::class,'AlumniStatusChange2'])->name('AlumniStatusChange2');
Route::get('CreateAlumni',[GLCMasterController::class,'CreateAlumni'])->name('CreateAlumni');
Route::post('PostCreateAlumni',[GLCMasterController::class,'PostCreateAlumni'])->name('PostCreateAlumni');
Route::get('AddAlumni/{data}',[GLCMasterController::class,'AddAlumni'])->name('AddAlumni');
Route::get('EditAlumni/{data}',[GLCMasterController::class,'EditAlumni'])->name('EditAlumni');
Route::get('ViewAlumni/{data}',[GLCMasterController::class,'ViewAlumni'])->name('ViewAlumni');
Route::post('PostEditAlumni',[GLCMasterController::class,'PostEditAlumni'])->name('PostEditAlumni');

//---------------------------------------New law Review------------------------------------------------------------//
Route::get('NewLawReviewIndex',[HomeController::class,'NewLawReviewIndex'])->name('NewLawReviewIndex');
Route::get('NewLawReviewIndex2',[GLCMasterController::class,'NewLawReviewIndex2'])->name('NewLawReviewIndex2');
Route::get('CreateNewLawReview',[GLCMasterController::class,'CreateNewLawReview'])->name('CreateNewLawReview');
Route::post('PostCreateNewLawReview',[GLCMasterController::class,'PostCreateNewLawReview'])->name('PostCreateNewLawReview');
Route::get('EditNewLawReview/{data}',[GLCMasterController::class,'EditNewLawReview'])->name('EditNewLawReview');
Route::get('ViewNewLawReview/{data}',[GLCMasterController::class,'ViewNewLawReview'])->name('ViewNewLawReview');
Route::get('NewLawReviewChange/{data}/{data1}',[GLCMasterController::class,'NewLawReviewChange'])->name('NewLawReviewChange');
Route::post('PostEditNewLawReview',[GLCMasterController::class,'PostEditNewLawReview'])->name('PostEditNewLawReview');

