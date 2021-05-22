<?php

namespace App\Http\Controllers;

use App\Models\JobModel;
use App\Models\SubmissionModel;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DB::table('job_tb')->get();
    }

    public function listSubmission(Request $request){
        $request->validate([
            'job_id'=>'required',
        ]);

      return  DB::table('submission_tb AS Sub')
      ->join('user_tb AS User','Sub.user_id','=','User.user_id')
      ->select(
        "Sub.sub_id AS SubmissionId",
        "Sub.job_id AS JobId",
        "Sub.created_at AS CreatedAt",
        "Sub.cv_attachment AS CvAttachment",
        "Sub.updated_at AS UpdatedAt",
        "User.user_id AS SubmittedUserId",
        "User.name AS UserName",
        "User.date_of_birth AS UserDateOfBirth",
        "User.phone AS UserPhone",
        "User.email AS UserEmail",
        "User.status AS UserStatus",)
      ->where('Sub.job_id','=',$request->job_id)
      ->get();
    }

    public function createJob(Request $request){
        $request->validate([
            'job_title' => 'required',
            'num_position' => 'required',
            'location' => 'required',
            'schedule' => 'required',
            'salary' => 'required',
            'duties' => 'required',
            'requirements' => 'required',
            'application_info' => 'required',
            'company_name' => 'required',
            'user_created_id' => 'required',
        ]);

        return JobModel::create($request->all());
    }

    public function submission(Request $request){
        $request->validate([
            'user_id'=>'required',
            'job_id'=>'required',
            'cv_attachment'=>'|mimes:doc,docx,pdf',
        ]);

        return SubmissionModel::create($request->all());
    }


    public function listing(Request $request)
    {
        $request->validate(
            [
                'pageSize' => 'required',
                'pageIndex' => 'required',
                'userStatus' => 'required',
                'userId' => 'required',
            ]
        );
        if ($request->userStatus == 0) {
            return DB::table('job_tb')->offset($request->pageIndex)->limit($request->pageSize)->orderBy('job_id', 'DESC')->get();
        } else {
            return DB::table('job_tb')->offset($request->pageIndex)->limit($request->pageSize)->orderBy('job_id', 'DESC')->where('user_created_id', $request->userId)->get();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
