<?php

use App\Http\Controllers\Web\Home\HomeController;
use App\Http\Controllers\Web\ZoomMettingController;
use App\Http\Controllers\Web\StudentDetailsController;
use App\Http\Controllers\Web\AnalysisReportController;
use App\Http\Controllers\Web\MonthlyIncomeController;
use App\Http\Controllers\Web\StudentVideoController;
use App\Http\Controllers\Web\StudentApprovalController;


use App\Http\Controllers\Web\ClassController;
use App\Http\Controllers\Web\VideoController;
use App\Http\Controllers\Web\FeesController;
use App\Http\Controllers\Web\PaymentHistoryController;
use App\Http\Controllers\Web\ProfileController;
use App\Http\Controllers\Web\TutesAndBookController;
use App\Http\Controllers\Web\TimeTableController;
use App\Http\Controllers\Web\ClassPaperController;

use App\Http\Controllers\Web\NoticeBoardController;
use App\Http\Controllers\Web\OnlineExamController;

use App\Http\Controllers\Web\NoteAndPaperController;

use App\Http\Controllers\Web\ItemShopController;


use App\Http\Controllers\Web\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




// AuthController
Route::get('/home', [AuthController::class, 'homeView'])->name('web.home');
Route::get('/login', [AuthController::class, 'loginView'])->name('web.login');
Route::get('/forgot_password', [AuthController::class, 'forgotPassword'])->name('web.forgot_password');
Route::get('/register', [AuthController::class, 'registerView'])->name('web.register');
Route::get('/register-step1', [AuthController::class, 'registerStep1'])->name('web.register.step1');
Route::get('/register-step2', [AuthController::class, 'registerStep2'])->name('web.register.step2');
Route::get('/register-step3', [AuthController::class, 'registerStep3'])->name('web.register.step3');
Route::get('/register-step4', [AuthController::class, 'registerStep4'])->name('web.register.step4');
Route::get('/register-step5', [AuthController::class, 'registerStep5'])->name('web.register.step5');









Route::get('/', [HomeController::class, 'index'])->name('web.home');



// ZoomMettingController


Route::get('/zoom-metting/view', [ZoomMettingController::class, 'zoomMettingView'])->name('web.zoom-metting');
Route::get('/zoom-metting/view-list', [ZoomMettingController::class, 'zoomMettingList'])->name('web.zoom-metting.list');
Route::get('/zoom-metting/special-class', [ZoomMettingController::class, 'zoomSpecialClass'])->name('web.zoom-metting.special-class');



Route::get('/class-analysing/report', [ZoomMettingController::class, 'analysingReport'])->name('web.analysing-report');
// Video Recordings
Route::get('/video/view', [VideoController::class, 'videoView'])->name('web.video.view');
Route::get('/video/subject/view-list', [VideoController::class, 'videoSubjectList'])->name('web.video.subject.list');


// NoteAndPaperController

Route::get('/note-paper-ansewer-list', [NoteAndPaperController::class, 'notePaperList'])->name('web.note-paper.list');
Route::get('/pending-list', [NoteAndPaperController::class, 'pendingList'])->name('web.pending.list');
Route::get('/note-view', [NoteAndPaperController::class, 'noteView'])->name('web.note.view');
Route::get('/note-upload', [NoteAndPaperController::class, 'noteUpload'])->name('web.note.upload');




// Class Tutes And Books
Route::get('/tutes-books', [TutesAndBookController::class, 'tutesBook'])->name('web.tutes.book');

Route::get('/tutes-view', [TutesAndBookController::class, 'tutesView'])->name('web.tutes.open');





// Class paper
Route::get('/class-paper', [ClassPaperController::class, 'classPaper'])->name('web.class.paper');

Route::get('/class-paper-open', [ClassPaperController::class, 'classPaperView'])->name('web.paper.open');



// Student Details
Route::get('/student-details', [StudentDetailsController::class, 'studentDetails'])->name('web.student.details');
Route::get('/student-details-view', [StudentDetailsController::class, 'studentDetailsView'])->name('web.student.details_view');
Route::get('/student-payment-view', [StudentDetailsController::class, 'studentPaymentView'])->name('web.student.payment_view');
Route::get('/student-inactive-accounts', [StudentDetailsController::class, 'inactiveAccount'])->name('web.student.inactive_account');

Route::get('/student-non-paid', [StudentDetailsController::class, 'nonPaid'])->name('web.student.non_paid');



// profile

Route::get('/my-profile', [ProfileController::class, 'myProfile'])->name('web.profile');

// TIME TABLES
Route::get('/time-table', [TimeTableController::class, 'timeTable'])->name('web.time.table');





// NoticeBoardController
Route::get('/notice-board', [NoticeBoardController::class, 'noticeBoard'])->name('web.notice.board');
Route::get('/birthday-list', [NoticeBoardController::class, 'birthdayList'])->name('web.notice.birthday_lis');





// VideoController

Route::get('/video/monthly/view', [VideoController::class, 'videoMonthlyView'])->name('web.video.monthly');
Route::get('/video/monthly/list', [VideoController::class, 'videoMonthlyListView'])->name('web.video.list.monthly');
Route::get('/video/monthly/set', [VideoController::class, 'videoMonthlySet'])->name('web.video.set.monthly');

Route::get('/video/subject/view', [VideoController::class, 'videoSubjectView'])->name('web.video.subject');



// StudentVideoController
Route::get('/student-video', [StudentVideoController::class, 'studentVideo'])->name('web.student_video.view');
Route::get('/student-video-subject', [StudentVideoController::class, 'studentVideoSubject'])->name('web.student_video.subject');



// StudentApprovalController
Route::get('/student-approval', [StudentApprovalController::class, 'studentApproval'])->name('web.student.approval');
Route::get('/scholarship-details', [StudentApprovalController::class, 'scholarshipdetails'])->name('web.student_video.scholarship');
Route::get('/other-grade', [StudentApprovalController::class, 'otherGrade'])->name('web.student_video.other_grade');
Route::get('/free-video-access', [StudentApprovalController::class, 'freeVideo'])->name('web.student_video.free_video');





// Fees
Route::get('/fees/view', [FeesController::class, 'feesView'])->name('web.fees.view');
Route::get('/fees/class', [FeesController::class, 'feesClass'])->name('web.fees.class');
Route::get('/fees/month-view', [FeesController::class, 'monthFees'])->name('web.fees.month_fees');
 






// LIVE CLASSES
Route::get('/class/view', [ClassController::class, 'classView'])->name('web.class.view');






// PaymentHistory
Route::get('/payment-history-month', [PaymentHistoryController::class, 'paymentHistoryMonth'])->name('web.payment.month');
Route::get('/payment-history-list', [PaymentHistoryController::class, 'paymentHistoryList'])->name('web.payment.list');







// Class Tutes And Books
Route::get('/tutes-books', [TutesAndBookController::class, 'tutesBook'])->name('web.tutes.book');
Route::get('/tutes-books-view', [TutesAndBookController::class, 'tutesBookMonthly'])->name('web.tutes.view');
Route::get('/tutes-view', [TutesAndBookController::class, 'tutesView'])->name('web.tutes.open');


// Online exam
Route::get('/online-exam', [OnlineExamController::class, 'onlineExam'])->name('web.online.exam');
Route::get('/online-exam-view', [OnlineExamController::class, 'onlineExamMonthly'])->name('web.online.view');
Route::get('/add-questions', [OnlineExamController::class, 'addQuestions'])->name('web.online.questions');



// Analysis Report


Route::get('/analysis', [AnalysisReportController::class, 'analysis'])->name('web.analysis.view');
Route::get('/analysis-report', [AnalysisReportController::class, 'analysisReport'])->name('web.analysis.report');


Route::get('/monthly-income', [MonthlyIncomeController::class, 'monthlyIncome'])->name('web.monthly.income');
Route::get('/monthly-income-view', [MonthlyIncomeController::class, 'monthlyIncomeView'])->name('web.monthly.view');






// ItemShopController
Route::get('/item-shop', [ItemShopController::class, 'itemShop'])->name('web.item-shop');



