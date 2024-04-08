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
                        aria-selected="true">Accomodation</button>
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

                        <label for="inputText" class="col-md-3 col-form-label">Accomodation
                            Option 1:</label>
                        <div class="col-md-1">
                            <button type="button" class="btn btn-primary">+</button>
                        </div>
                        <div class="col-md-7">
                            <p class="m-0">Use this option to add more flight options as
                                part of
                                your proposal</p>
                        </div>

                    </div>

                    <div class="row">


                        <div class="col-12 col-md-9">
                            <input type="text" class="form-control" value=""
                                placeholder="Add Title e.g. 7 Nights Half-Board in Barcelona">
                        </div>
                        <div class="col-12 col-md-3"><input type="text" class="form-control" value=""
                                placeholder="Total Package Price"></div>
                    </div>

                    <div class="row my-3">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <ul class="nav nav-tabs nav-tabs-bordered" id="borderedTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="accomodation_sub_id_1"
                                                data-bs-toggle="tab" data-bs-target="#accomodation_sub_1" type="button"
                                                role="tab" aria-controls="home" aria-selected="true">Check
                                                In</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="flights_sub_id_2" data-bs-toggle="tab"
                                                data-bs-target="#accomodation_sub_2" type="button" role="tab"
                                                aria-controls="home" aria-selected="true">Check Out</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content pt-2" id="borderedTabContent">
                                        <div class="tab-pane fade show active" id="accomodation_sub_1" role="tabpanel"
                                            aria-labelledby="accomodation_sub_id_1">

                                            <div class="row">
                                                <div class="col-md-3 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Check in date">
                                                </div>
                                                <div class="col-md-3 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Earliest check in time">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-2 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Hotel Name">
                                                </div>
                                                <div class="col-md-2 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Hotel Address">
                                                </div>
                                                <div class="col-md-2 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Hotel City/Region">
                                                </div>
                                                <div class="col-md-2 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Hotel Country">
                                                </div>
                                                <div class="col-md-2 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Add Hotel Image/Video">
                                                </div>


                                            </div>

                                            <div class="row">
                                                <div class="col-md-12 px-0 my-2">
                                                    <button type="button" class="btn btn-primary">+</button>
                                                    <span>Use this option to add another hotel image or video</span>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-md-3 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Hotel Description">
                                                </div>
                                                <div class="col-md-3 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Key Hotel Feature">
                                                </div>
                                                <div class="col-md-6 px-0">
                                                    <button type="button" class="btn btn-primary">+</button>
                                                    <span>Use this option to add key hotel feature</span>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-3 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Number of Nights">
                                                </div>
                                                <div class="col-md-3 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Number of Adults">
                                                </div>
                                                <div class="col-md-3 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Number of Children">
                                                </div>


                                            </div>



                                            <div class="row">
                                                <div class="col-md-2 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Room Type">
                                                </div>
                                                <div class="col-md-2 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="How many">
                                                </div>
                                                <div class="col-md-5 px-0">
                                                    <button type="button" class="btn btn-primary">+</button>
                                                    <span>Use this option to add another room type</span>
                                                </div>

                                                <div class="col-md-2 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Price per room">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-2 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Package Type">
                                                </div>
                                                <div class="col-md-2 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="How many">
                                                </div>
                                                <div class="col-md-5 px-0">
                                                    <button type="button" class="btn btn-primary">+</button>
                                                    <span>Use this option to add another package type</span>
                                                </div>

                                            </div>


                                            <div class="row">
                                                <div class="col-md-12 px-0">
                                                    <textarea class="form-control"
                                                        placeholder="Additional accomodation information/ disclaimers/ anything else the client must know about any aspects of their stay at this accomodation option"
                                                        name="" id=""></textarea>
                                                </div>
                                            </div>


                                            <div class="row align-items-center">

                                                <label for="inputText" class="col-md-3 col-form-label">Price per adult
                                                    (Per night):
                                                </label>
                                                <div class="col-md-2">
                                                    <input type="text" class="form-control">
                                                </div>
                                                <label for="inputText" class="col-md-2 col-form-label">Numer of nights
                                                </label>
                                                <div class="col-md-2">
                                                    <input type="text" class="form-control">
                                                </div>

                                            </div>

                                            <div class="row align-items-center">

                                                <label for="inputText" class="col-md-3 col-form-label">Price per Child (Per night):
                                                </label>
                                                <div class="col-md-2">
                                                    <input type="text" class="form-control">
                                                </div>
                                                <label for="inputText" class="col-md-2 col-form-label">Numer of nights
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
                                                            Add additional costs client should be aware off. Select if the cost is ‘Optional’ or ‘Required’ Add as many additional costs as necessary.
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
                                                        Accomodation</button>
                                                </div>
                                                <div class="col-md-9">
                                                    <p>Use this option to add other accommodation especially if clients will be staying at more than one place as part of their trip
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="text-end">

                                                    <button type="button" class="btn btn-primary">Continue</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade show" id="accomodation_sub_2" role="tabpanel"
                                            aria-labelledby="flights_sub_id_2">
                                            
                                            
                                            <div class="row">
                                                <div class="col-md-3 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Check out date">
                                                </div>
                                                <div class="col-md-3 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Earliest check out time">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-2 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Hotel Name">
                                                </div>
                                                <div class="col-md-2 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Hotel Address">
                                                </div>
                                                <div class="col-md-2 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Hotel City/Region">
                                                </div>
                                                <div class="col-md-2 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Hotel Country">
                                                </div>
                                                <div class="col-md-2 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Add Hotel Image/Video">
                                                </div>


                                            </div>

                                            <div class="row">
                                                <div class="col-md-12 px-0 my-2">
                                                    <button type="button" class="btn btn-primary">+</button>
                                                    <span>Use this option to add another hotel image or video</span>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-md-3 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Hotel Description">
                                                </div>
                                                <div class="col-md-3 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Key Hotel Feature">
                                                </div>
                                                <div class="col-md-6 px-0">
                                                    <button type="button" class="btn btn-primary">+</button>
                                                    <span>Use this option to add key hotel feature</span>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-3 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Number of Nights">
                                                </div>
                                                <div class="col-md-3 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Number of Adults">
                                                </div>
                                                <div class="col-md-3 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Number of Children">
                                                </div>


                                            </div>



                                            <div class="row">
                                                <div class="col-md-2 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Room Type">
                                                </div>
                                                <div class="col-md-2 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="How many">
                                                </div>
                                                <div class="col-md-5 px-0">
                                                    <button type="button" class="btn btn-primary">+</button>
                                                    <span>Use this option to add another room type</span>
                                                </div>

                                                <div class="col-md-2 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Price per room">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-2 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Package Type">
                                                </div>
                                                <div class="col-md-2 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="How many">
                                                </div>
                                                <div class="col-md-5 px-0">
                                                    <button type="button" class="btn btn-primary">+</button>
                                                    <span>Use this option to add another package type</span>
                                                </div>

                                            </div>


                                            <div class="row">
                                                <div class="col-md-12 px-0">
                                                    <textarea class="form-control"
                                                        placeholder="Additional accomodation information/ disclaimers/ anything else the client must know about any aspects of their stay at this accomodation option"
                                                        name="" id=""></textarea>
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
                                                        <span>Add additional costs client should be aware off. Select if the cost is ‘Optional’ or ‘Required’ Add as many additional costs as necessary.</span>
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


                                            <div class="row">
                                                <div class="text-end">

                                                    <button type="button" class="btn btn-primary">Continue</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div><!-- End Bordered Tabs -->




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
