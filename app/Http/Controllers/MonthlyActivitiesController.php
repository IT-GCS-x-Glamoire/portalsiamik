<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\MonthlyActivity;

use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class MonthlyActivitiesController extends Controller
{
    public function index()
    {
        try {
            session()->flash('page',  $page = (object)[
            'page' => 'subjects',
            'child' => 'database monthly activities',
            ]);

            $data = MonthlyActivity::get();

            // dd($data);
            return view('components.monthlyActivities.data-monthly-activities')->with('data', $data);

        } catch (Exception $err) {
            return dd($err);
        }
    }

    public function pageCreate()
    {
        try {
            //code...
            session()->flash('page',  $page = (object)[
            'page' => 'subjects',
            'child' => 'database monthly activities',
            ]);
            return view('components.monthlyActivities.create-monthly-activities');
            
        } catch (Exception) {
            return abort(500);
        }
    }
   
    public function actionPost(Request $request)
    {

        // dd($request);
        DB::beginTransaction();

        try {

            foreach($request->monthly_activities as $ma){
                MonthlyActivity::create(['name' => $ma]);
            }
            
            session()->flash('after_create_subject');
            DB::commit();
            
            return redirect('/monthlyActivities');

        } catch (Exception $err) {
            DB::rollBack();
            return dd($err);
        }
    }

    public function pageEdit($id)
    {
        try {
            //code...
            session()->flash('page',  $page = (object)[
                'page' => 'subjects',
                'child' => 'database monthly activities',
            ]);
            
            $data = MonthlyActivity::where('id', $id)->first();
            
            return view('components.subject.edit-subject')->with('data', $data);
            
        } catch (Exception $err) {
            dd($err);
            return abort(404);
        }
    }


    public function actionPut(Request $request)
    {
        DB::beginTransaction();

        try {
            session()->flash('page',  $page = (object)[
                'page' => 'subjects',
                'child' => 'database monthly activities',
            ]);

            $role = session('role');

            MonthlyActivity::where('id', $request->id)->update([
                'name' => $request->change_name,
            ]);
    
            DB::commit();
            
            return response()->json([
                'success' => true,
            ]);

        } catch (Exception $err) {
            DB::rollBack();
            return dd($err);
            // return abort(500);
        }
    }

    public function delete($id)
    {
        try {

            session()->flash('after_delete_subject');

            MonthlyActivity::where('id', $id)->delete();

            return redirect('/' .session('role'). '/monthlyActivities');
        } 
        catch (Exception $err) {
            dd($err);
            return redirect('/'.session('role').'/monthlyActivities')->with('error', 'Terjadi kesalahan saat menghapus data monthly activities.');
        }
    }
}
