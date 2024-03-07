<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PendriveController extends Controller
{
    public function addPendrive()
        {
            $projects = DB::table('project')->pluck('name','id');
            $schools = DB::table('school')->pluck('name','id');
            return view('pendrive.pendriveadd', compact('projects','schools'));
        }
    // create new pendrive
    public function createPendrive(Request $request)
        {
            $indianTime = Carbon::now('Asia/Kolkata');
            $data = [
                'pendrive' => $request->pendrive,
                'activation_code' => $request->activation_code,
                'validity_time' => $request->validity_time,
                'remainingdays' => $request->remainingdays,
                'app_validity' => $request->app_validity,
                'default_pass' => $request->default_pass,
                'project_id' => $request->projectname,
                'school_id' => $request->schoolname,
                'instatllation_person_name' => $request->instatllation_person_name,
                'created_at' => $indianTime,
            ];
            DB::table('pdactivation_detail')->insert($data);
            return redirect('/pendrivelist');
        }


    // pendrive list
    public function getPendrive()
        {
            $pendrives = DB::table('pdactivation_detail')->get();
            return view('pendrive.pendrivelist', compact('pendrives')); 
        }
    //edit pendrive data
    public function editPendrive($id)
        {
            $projects = DB::table('project')->pluck('name','id');
            $schools = DB::table('school')->pluck('name','id');
            $pendrives = DB::table('pdactivation_detail')->where('id',$id)->first();
            
            $schoolId = null;
            $projectId = null;
            if ($pendrives) {
                $schoolId = $pendrives->school_id;
                $projectId = $pendrives->project_id;
            }
        
            return view('pendrive.pendriveedit',compact('pendrives','projects','schools','schoolId','projectId'));
        }
    //delete pendrive data
    public function deletePendrive($id)
        {
            DB::table('pdactivation_detail')->where('id',$id)->delete();
            return redirect('pendrivelist');
        }
    //update pendrive data
    public function updatePendrive(Request $request, $id)
        {
            $indianTime = Carbon::now('Asia/Kolkata');
            $data = [
                'pendrive' => $request->pendrive,
                'activation_code' => $request->activation_code,
                'validity_time' => $request->validity_time,
                'remainingdays' => $request->remainingdays,
                'app_validity' => $request->app_validity,
                'default_pass' => $request->default_pass,
                'instatllation_person_name' => $request->instatllation_person_name,
                'project_id' => $request->projectname,
                'school_id' => $request->schoolname,
                'updated' => $indianTime,
            ];
            DB::table('pdactivation_detail')->where('id',$request->id)->update($data);
            return redirect('pendrivelist');
        }
    //pendrive record
    public function pendriveRecord(Request $request,$id)
        {
            $selectedId = $id;
            $pendriveRecord = DB::table('pdactivation_detail')->find($id);
            $pendrives = DB::table('pdactivation_detail')->where('deleted', 0)->pluck('pendrive','id');
        if ($pendriveRecord) 
            {
                $matchingRecords = DB::table('record_data')->where('pendrive_name', $pendriveRecord->pendrive)->get();
            } 
        else
            {
                return redirect('/pendriverecord');
            }
            return view('record.recordlist', compact('pendrives', 'matchingRecords','selectedId'));
        }
    public function recordList()
        {
            $selectedId = null;
            $pendrives = DB::table('pdactivation_detail')->where('deleted', 0)->pluck('pendrive','id');
            return view('record.recordlist', compact('pendrives', 'selectedId'));
        }
    //pendrive name for chart
    public function pendriveName(Request $request)
    {
        $selectedId = null;
        $pendrives = DB::table('pdactivation_detail')->where('deleted', 0)->pluck('pendrive','id');
        return view('chart.chartlist', compact('pendrives', 'selectedId'));
    }
    //pendrive chart 
    public function pendriveChart(Request $request,$id)
        {
            $selectedId = $id;
            $pendriveRecord = DB::table('pdactivation_detail')->find($id);
            $pendrives = DB::table('pdactivation_detail')->where('deleted', 0)->pluck('pendrive','id');
            if ($pendriveRecord) {
                $pendrive_name = $pendriveRecord->pendrive;
                
                $query = DB::table('record_data')
                ->selectRaw('subject, SUM(TIME_TO_SEC(duration_of_use)) as total_duration')
                ->where('pendrive_name', $pendrive_name)
                ->groupBy('subject')
                ->get();

                $record = $query->toArray();
                //  print_r($record);die;
        
                $querydata = DB::table('record_data')
                    ->select('subject')
                    ->selectRaw('COUNT(CASE WHEN category = "Video Files" THEN 1 END) AS video_count')
                    ->selectRaw('COUNT(CASE WHEN category = "Audio Files" THEN 1 END) AS audio_count')
                    ->selectRaw('COUNT(CASE WHEN category = "PDF" THEN 1 END) AS pdf_count')
                    ->selectRaw('COUNT(CASE WHEN category = "Assessment" THEN 1 END) AS assessment_count')
                    ->where('pendrive_name', $pendrive_name)
                    ->groupBy('subject')
                    ->get();
             $querydata = $querydata->toArray();
            } else {
                $record = null;
                $querydata = null;
            }
           
        return view('chart.chartlist', compact('pendrives' ,'selectedId','record', 'querydata'));
        }
}
