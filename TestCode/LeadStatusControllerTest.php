<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LeadStatus;

class LeadStatusControllerTest extends Controller
{
    // public function index()
    // {
    //     $leadStatuses = LeadStatus::all();

    //     return view('leadstatuses', ['leadStatuses' => $leadStatuses, 'serial' => 0]);
    // }

    // public function addLeadStatusView()
    // {
    //     return view('addleadstatus');
    // }

    // public function addLeadStatus(Request $request)
    // {
    //     $this->validate($request, [
    //         'name' => 'required | min:3'
    //     ], [
    //         'name.required' => 'Please enter a name.',
    //         'name.min' => 'Name must contain at least 3 characters.'
    //     ]);

    //     $leadStatus = new LeadStatus;

    //     $leadStatus->name = $request->name;

    //     $leadStatus->save();

    //     return redirect()->back()->withStatus('Lead Status Added Successfully !');
    // }

    // public function removeLeadStatus($lead_status_id)
    // {
    //     $leadStatus = LeadStatus::find($lead_status_id);

    //     $leadStatus->delete();

    //     return redirect()->back();
    // }

    // public function editLeadStatusView($lead_status_id)
    // {
    //     $leadStatus = LeadStatus::find($lead_status_id);

    //     return view('editleadstatus', compact('leadStatus'));
    // }

    // public function editLeadStatus(Request $request, $lead_status_id)
    // {
    //     $this->validate($request, [
    //         'name' => 'required | min:3'
    //     ], [
    //         'name.required' => 'Name can not be empty.',
    //         'name.min' => 'Name must contain at least 3 characters.'
    //     ]);

    //     $leadStatus = LeadStatus::find($lead_status_id);

    //     $leadStatus->name = $request->name;

    //     $leadStatus->save();

    //     return redirect()->back()->withStatus('Lead Status Updated Successfully !');
    // }


    public function TestIndex()
    {
        $leadStatuses = LeadStatus::all();

        return view('leadstatuses', ['leadStatuses' => $leadStatuses, 'serial' => 0]);
    }

    public function TestAddLeadStatusView()
    {
        return view('addleadstatus');
    }

    public function TestAddLeadStatus(Request $request)
    {
        $this->validate($request, [
            'name' => 'required | min:3'
        ], [
            'name.required' => 'Please enter a name.',
            'name.min' => 'Name must contain at least 3 characters.'
        ]);

        $leadStatus = new LeadStatus;

        $leadStatus->name = $request->name;

        $leadStatus->save();

        return redirect()->back()->withStatus('Lead Status Added Successfully !');
    }

    public function TestRemoveLeadStatus($lead_status_id)
    {
        $leadStatus = LeadStatus::find($lead_status_id);

        $leadStatus->delete();

        return redirect()->back();
    }

    public function TestEditLeadStatusView($lead_status_id)
    {
        $leadStatus = LeadStatus::find($lead_status_id);

        return view('editleadstatus', compact('leadStatus'));
    }

    public function TestEditLeadStatus(Request $request, $lead_status_id)
    {
        $this->validate($request, [
            'name' => 'required | min:3'
        ], [
            'name.required' => 'Name can not be empty.',
            'name.min' => 'Name must contain at least 3 characters.'
        ]);

        $leadStatus = LeadStatus::find($lead_status_id);

        $leadStatus->name = $request->name;

        $leadStatus->save();

        return redirect()->back()->withStatus('Lead Status Updated Successfully !');
    }
}
