<div class="col-12 col-md-3">
    <div class="card">
        <div class="card-header p-2">Proposal Summary</div>
        <div class="card-body">
            <h5 class="card-title pb-0">Proposal type:</h5>
            <div class="my-3">
                <button type="button" class="btn btn-primary">+</button>
            </div>
            <p>
                Use this option to add another proposal starting with proposal summary
            </p>
        </div>
    </div>
</div>
<div class="col-12 col-md-9">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Proposal type: {{ $purposal_type->type }}</h5>

            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered" id="borderedTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="accomodation-tab" data-bs-toggle="tab"
                        data-bs-target="#accomodation" type="button" role="tab" aria-controls="home"
                        aria-selected="true">Activity</button>
                </li>
                {{-- <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="flights-tab" data-bs-toggle="tab" data-bs-target="#flights"
                        type="button" role="tab" aria-controls="home" aria-selected="true">Flights</button>
                </li> --}}
                {{-- <li class="nav-item" role="presentation">
                    <button class="nav-link" id="accomodation-tab" data-bs-toggle="tab"
                        data-bs-target="#accomodation" type="button" role="tab"
                        aria-controls="home" aria-selected="true">Accomodation</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="transfers-tab" data-bs-toggle="tab"
                        data-bs-target="#transfers" type="button" role="tab"
                        aria-controls="home" aria-selected="true">Transfers</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="activities-tab" data-bs-toggle="tab"
                        data-bs-target="#activities" type="button" role="tab"
                        aria-controls="home" aria-selected="true">Activities</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="cruise-tab" data-bs-toggle="tab"
                        data-bs-target="#cruise" type="button" role="tab"
                        aria-controls="home" aria-selected="true">Cruise</button>
                </li> --}}
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="preview-tab" data-bs-toggle="tab" data-bs-target="#preview"
                        type="button" role="tab" aria-controls="home" aria-selected="true">Preview</button>
                </li>
            </ul>
            <div class="tab-content pt-2">
                <div class="tab-pane fade show active" id="accomodation" role="tabpanel"
                    aria-labelledby="accomodation-tab">
                    <div class="row align-items-center mb-2">

                        <label for="inputText" class="col-md-3 col-form-label">Activity
                            Option 1:</label>
                        <div class="col-md-1">
                            <button type="button" class="btn btn-primary">+</button>
                        </div>
                        <div class="col-md-7">
                            <p class="m-0">Use this option to start a new itinerary option</p>
                        </div>

                    </div>

                    <div class="row">


                        <div class="col-12 col-md-9">
                            <input type="text" class="form-control" value=""
                                placeholder="Add Title e.g. Local Excursion and Sightseeing">
                        </div>
                        <div class="col-12 col-md-3"><input type="text" class="form-control" value=""
                                placeholder="Total Package Price"></div>
                    </div>

                    <div class="row my-3">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body pt-3">

                                    <div class="row">
                                        <div class="col-md-3 px-0">
                                            <input type="text" class="form-control" id="inputEmail5"
                                                placeholder="Activity Name">
                                        </div>
                                        <div class="col-md-3 px-0">
                                            <input type="text" class="form-control" id="inputEmail5"
                                                placeholder="Activity Location (City/town)">
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-3 px-0">
                                            <input type="text" class="form-control" id="inputEmail5"
                                                placeholder="Activity Description">
                                        </div>
                                        <div class="col-md-3 px-0">
                                            <input type="text" class="form-control" id="inputEmail5"
                                                placeholder="Activity Highlights">
                                        </div>
                                        <div class="col-md-6 px-0">
                                            <button type="button" class="btn btn-primary">+</button>
                                            <span>Use this option to add another key highlight of this feature if any</span>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-3 px-0">
                                            <input type="text" class="form-control" id="inputEmail5"
                                                placeholder="Activity Start Date">
                                        </div>
                                        <div class="col-md-3 px-0">
                                            <input type="text" class="form-control" id="inputEmail5"
                                                placeholder="Activity End Date">
                                        </div>
                                        <div class="col-md-6 px-0">
                                            <button type="button" class="btn btn-primary">+</button>
                                            <span>Use this option to add other start and end date options</span>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-3 px-0">
                                            <input type="text" class="form-control" id="inputEmail5"
                                                placeholder="Activity Start Time">
                                        </div>
                                        <div class="col-md-3 px-0">
                                            <input type="text" class="form-control" id="inputEmail5"
                                                placeholder="Activity End Time">
                                        </div>
                                        <div class="col-md-6 px-0">
                                            <button type="button" class="btn btn-primary">+</button>
                                            <span>Use this option to add other start and end time options</span>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3 px-0">
                                            <input type="text" class="form-control" id="inputEmail5"
                                                placeholder="Number of Adults">
                                        </div>
                                        <div class="col-md-3 px-0">
                                            <input type="text" class="form-control" id="inputEmail5"
                                                placeholder="Price per adult">
                                        </div>


                                    </div>

                                    <div class="row">
                                        <div class="col-md-3 px-0">
                                            <input type="text" class="form-control" id="inputEmail5"
                                                placeholder="Number of Children">
                                        </div>
                                        <div class="col-md-3 px-0">
                                            <input type="text" class="form-control" id="inputEmail5"
                                                placeholder="Price per children">
                                        </div>


                                    </div>


                                    <div class="row">
                                        <div class="col-md-4 px-0">
                                            <input type="text" class="form-control" id="inputEmail5"
                                                placeholder="Min. number of people for this activity">
                                        </div>
                                        <div class="col-md-4 px-0">
                                            <input type="text" class="form-control" id="inputEmail5"
                                                placeholder="Max. number of people for this activity">
                                        </div>


                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 px-0">
                                            <textarea class="form-control"
                                                placeholder="Additional activity information/ disclaimers/ anything else the client must know about any aspects of this activity "
                                                name="" id=""></textarea>
                                        </div>
                                    </div>



                                    <div class="row">
                                        <div class="col-md-3 px-0">
                                            <input type="text" class="form-control" id="inputEmail5"
                                                placeholder="Add Activity Image/video">
                                        </div>
                                        <div class="col-md-5 px-0">
                                            <button type="button" class="btn btn-primary">+</button>
                                            <span>Use this option to add another hotel image or video</span>
                                        </div>
                                    </div>
                                  


                                    <div class="row align-items-center">

                                        <label for="inputText" class="col-md-3 col-form-label">Activity Price per adult :
                                        </label>
                                        <div class="col-md-2">
                                            <input type="text" class="form-control">
                                        </div>
                                        <label for="inputText" class="col-md-2 col-form-label">Numer of adults
                                        </label>
                                        <div class="col-md-2">
                                            <input type="text" class="form-control">
                                        </div>

                                    </div>

                                    <div class="row align-items-center">

                                        <label for="inputText" class="col-md-3 col-form-label">Activity Price per Child:
                                        </label>
                                        <div class="col-md-2">
                                            <input type="text" class="form-control">
                                        </div>
                                        <label for="inputText" class="col-md-2 col-form-label">Numer of children
                                        </label>
                                        <div class="col-md-2">
                                            <input type="text" class="form-control">
                                        </div>

                                    </div>


                                    <div class="row mt-1">
                                        <div class="col-md-4 px-0">
                                            <textarea class="form-control" placeholder="Add any additional cost details" name="" id=""></textarea>
                                        </div>
                                        <div class="col-md-2 px-0">
                                            <textarea class="form-control" placeholder="Optional" name="" id=""></textarea>
                                        </div>
                                        <div class="col-md-1 px-0" style="margin: auto;text-align: center;">
                                            <button type="button" class="btn btn-primary">+</button>
                                        </div>

                                        <div class="col-md-5 px-0">
                                            {{-- <textarea class="form-control"
                                                placeholder="Add additional costs client should be aware off. Select if the cost is ‘Optional’ or ‘Required’ Add as many additional costs as necessary."
                                                name="" id=""></textarea> --}}
                                                <span>
                                                    Add additional costs client should be aware off. Select if the cost is ‘Optional’ or ‘Required’ Add as many additional costs as necessary
                                                </span>
                                        </div>
                                    </div>

                                    <div class="row mt-1">
                                        <div class="col-md-4 px-0">
                                            <textarea class="form-control" placeholder="Add any inclusive cost details " name="" id=""></textarea>
                                        </div>
                                        <div class="col-md-2 px-0">
                                            <textarea class="form-control" placeholder="Optional" name="" id=""></textarea>
                                        </div>
                                        <div class="col-md-1 px-0" style="margin: auto;text-align: center;">
                                            <button type="button" class="btn btn-primary">+</button>
                                        </div>

                                        <div class="col-md-5 px-0">
                                            {{-- <textarea class="form-control"
                                                placeholder="Add inclusive costs client should be aware off. These could be a breakdown of costs.included in the ‘Total cost’"
                                                name="" id=""></textarea> --}}
                                                <span>
                                                    Add inclusive costs client should be aware off. These could be a breakdown of costs.included in the ‘Total cost’
                                                </span>
                                        </div>
                                    </div>


                                    <div class="row py-2">
                                        <div class="col-md-3 px-0">
                                            <button type="button" class="btn btn-primary">Add another
                                                Activity</button>
                                        </div>
                                        <div class="col-md-9">
                                            <p>Use this option to add more activities to this itinerary option.</p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="text-end">

                                            <button type="button" class="btn btn-primary">View Costs</button>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show" id="preview" role="tabpanel" aria-labelledby="preview-tab">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Preview</h5>

                            <!-- Default Tabs -->
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                        data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                        aria-selected="true">Proposal Itinerary</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#profile" type="button" role="tab"
                                        aria-controls="profile" aria-selected="false" tabindex="-1">
                                        Proposal Details
                                    </button>
                                </li>

                            </ul>
                            <div class="tab-content pt-2" id="myTabContent">
                                <div class="tab-pane fade active show" id="home" role="tabpanel"
                                    aria-labelledby="home-tab">

                                    <label for="">View link - </label>
                                    <a href="javascript:void(0)">
                                        https://docs.google.com/spreadsheets/d/1nA-O-eZf0URGPhK8lkk32Ig1v4kFQPUi69KHTmHRKLg/edit?usp=sharing
                                    </a>

                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel"
                                    aria-labelledby="profile-tab">
                                    <p>
                                        List all the completed fields for the relevant proposal type selected
                                    </p>
                                </div>
                            </div><!-- End Default Tabs -->

                        </div>
                    </div>
                </div>
            </div><!-- End Bordered Tabs -->
        </div>
    </div>
</div>
