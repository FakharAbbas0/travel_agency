<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Proposal;
use App\Models\ProposalType;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ProposalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        dd("Proposal Listing");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $proposal_types = ProposalType::where('status',1)->orderBy('id','ASC')->get();
        return view('admin.proposals.create',compact('proposal_types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'client_name'=>'required',
            'proposal_title'=>'required',
            'proposal_summary'=>'required',
            'proposal_type_id'=>'required|exists:proposal_types,id',
            'from_date'=>'required|date_format:Y-m-d',
            'to_date'=>'required|date_format:Y-m-d',
            'created_on'=>'required|date_format:Y-m-d',
        ]);
        $currentDate = Carbon::parse($request->created_on);
        $currentTime = Carbon::now();
        $createdAt = $currentDate->setTime($currentTime->hour, $currentTime->minute, $currentTime->second);
        $proposal=new Proposal;
        $proposal->client_name = $request->client_name;
        $proposal->proposal_title = $request->proposal_title;
        $proposal->proposal_summary = $request->proposal_summary;
        $proposal->proposal_type_id = $request->proposal_type_id;
        $proposal->from_date = $request->from_date;
        $proposal->to_date = $request->to_date;
        $proposal->created_at = $createdAt;
        if(!empty($request->options)){
            foreach($request->options as $key => $option){
                $option_name = 'purposal_option_'.$key;
                $proposal->$option_name=$option;
            }
        }

        $proposal->save();
        return redirect()->back()->with('success','Proposal Saved Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Proposal $proposal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proposal $proposal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proposal $proposal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proposal $proposal)
    {
        //
    }

    public function getPurposalForm(Request $request){
        $purposal_type = ProposalType::find($request->type_id);
        if(is_null($purposal_type)){
            return '';
        }
        $data['purposal_type'] = $purposal_type;
        $view = View::make('admin.proposals.forms.common.top-section',$data);
        if($purposal_type->id == 1){ // flights
            $view .= View::make('admin.proposals.forms.flight_form',$data);
        }
        return $view;
    }
}
