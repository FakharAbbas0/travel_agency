<div class="col-12 col-md-3">
    <div class="card">
        <div class="card-header p-2">Proposal Summary</div>
        <div class="card-body">
            <h5 class="card-title pb-0">Proposal type: </h5>
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
            <h5 class="card-title">Proposal type:</h5>

            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered" id="borderedTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="flights-tab" data-bs-toggle="tab" data-bs-target="#flights"
                        type="button" role="tab" aria-controls="home" aria-selected="true">Flights</button>
                </li>
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
                <div class="tab-pane fade show active" id="flights" role="tabpanel" aria-labelledby="flights-tab">
                    <div class="row align-items-center mb-2">

                        <label for="inputText" class="col-md-2 col-form-label">Flight
                            Option 1:</label>
                        <div class="col-md-1">
                            <button type="button" class="btn btn-primary">+</button>
                        </div>
                        <div class="col-md-8">
                            <p class="m-0">Use this option to add more flight options as
                                part of
                                your proposal</p>
                        </div>

                    </div>

                    <div class="row">


                        <div class="col-12 col-md-9">
                            <input type="text" class="form-control" value=""
                                placeholder="Add Title e.g. London to New York Business Class">
                        </div>
                        <div class="col-12 col-md-3"><input type="text" class="form-control" value=""
                                placeholder="Total Price"></div>
                    </div>

                    <div class="row my-3">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <ul class="nav nav-tabs nav-tabs-bordered" id="borderedTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="flights_sub_outbound_tab"
                                                data-bs-toggle="tab" data-bs-target="#flights_sub_outbound"
                                                type="button" role="tab" aria-controls="home"
                                                aria-selected="true">Outbound</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="flights_sub_return_tab" data-bs-toggle="tab"
                                                data-bs-target="#flights_sub_return" type="button" role="tab"
                                                aria-controls="home" aria-selected="true">Return</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content pt-2" id="borderedTabContent">
                                        <div class="tab-pane fade show active" id="flights_sub_outbound"
                                            role="tabpanel" aria-labelledby="flights_sub_outbound_tab">
                                            <div class="row">
                                                <div class="col-md-3 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Flight date">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-3 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Airline Name">
                                                </div>
                                                <div class="col-md-3 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Flight Number">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-3 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Flight from">
                                                </div>
                                                <div class="col-md-3 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Departure Time">
                                                </div>
                                                <div class="col-md-3 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Time zone">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-3 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Flight To">
                                                </div>
                                                <div class="col-md-3 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Arrival Time">
                                                </div>
                                                <div class="col-md-3 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Time zone">
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-md-3 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Number of Adults">
                                                </div>
                                                <div class="col-md-3 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Seat type">
                                                </div>
                                                <div class="col-md-3 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Max. Hand luggage allowance (per adult)">
                                                </div>

                                                <div class="col-md-3 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Max. Haul luggage allowance (per adult)">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-3 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Number of Children">
                                                </div>
                                                <div class="col-md-3 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Seat type">
                                                </div>
                                                <div class="col-md-3 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Max. Hand luggage allowance (per child)">
                                                </div>

                                                <div class="col-md-3 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Max. Haul luggage allowance (per child)">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12 px-0">
                                                    <textarea class="form-control"
                                                        placeholder="Additional flight information/ disclaimers/ anything else the client must know about any aspects of this flight option"
                                                        name="" id=""></textarea>
                                                </div>
                                            </div>


                                            <div class="row">
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
                                                    <textarea class="form-control"
                                                        placeholder="Add additional costs client should be aware off. Select if the cost is ‘Optional’ or ‘Required’ Add as many additional costs as necessary."
                                                        name="" id=""></textarea>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-md-4 px-0">
                                                    <textarea class="form-control" placeholder="Add any inclusive cost details" name="" id=""></textarea>
                                                </div>
                                                <div class="col-md-2 px-0">
                                                    <textarea class="form-control" placeholder="Optional" name="" id=""></textarea>
                                                </div>
                                                <div class="col-md-1 px-0" style="margin: auto;text-align: center;">
                                                    <button type="button" class="btn btn-primary">+</button>
                                                </div>

                                                <div class="col-md-5 px-0">
                                                    <textarea class="form-control"
                                                        placeholder="Add inclusive costs client should be aware off. These could be a breakdown of costs.included in the ‘Total cost’"
                                                        name="" id=""></textarea>
                                                </div>
                                            </div>


                                            <div class="row py-2">
                                                <div class="col-md-3 px-0">
                                                    <button type="button" class="btn btn-primary">Add another
                                                        Flight</button>
                                                </div>
                                                <div class="col-md-9">
                                                    <p>Use this option to add more fight
                                                        details
                                                        especially if clients have
                                                        connecting
                                                        flights to complete their journey
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="text-end">

                                                    <button type="button" class="btn btn-primary">Continue</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade show" id="flights_sub_return" role="tabpanel"
                                            aria-labelledby="flights_sub_return_tab">
                                            <div class="row">
                                                <div class="col-md-3 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Flight date">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-3 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Airline Name">
                                                </div>
                                                <div class="col-md-3 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Flight Number">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-3 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Flight from">
                                                </div>
                                                <div class="col-md-3 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Departure Time">
                                                </div>
                                                <div class="col-md-3 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Time zone">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-3 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Flight To">
                                                </div>
                                                <div class="col-md-3 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Arrival Time">
                                                </div>
                                                <div class="col-md-3 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Time zone">
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-md-3 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Number of Adults">
                                                </div>
                                                <div class="col-md-3 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Seat type">
                                                </div>
                                                <div class="col-md-3 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Max. Hand luggage allowance (per adult)">
                                                </div>

                                                <div class="col-md-3 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Max. Haul luggage allowance (per adult)">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-3 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Number of Children">
                                                </div>
                                                <div class="col-md-3 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Seat type">
                                                </div>
                                                <div class="col-md-3 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Max. Hand luggage allowance (per child)">
                                                </div>

                                                <div class="col-md-3 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Max. Haul luggage allowance (per child)">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-3 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Number of Children (Free)">
                                                </div>
                                                <div class="col-md-3 px-0">
                                                    <input type="text" class="form-control" id="inputEmail5"
                                                        placeholder="Seat Type">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12 px-0">
                                                    <textarea class="form-control"
                                                        placeholder="Additional flight information/ disclaimers/ anything else the client must know about any aspects of this flight option"
                                                        name="" id=""></textarea>
                                                </div>
                                            </div>

                                            <div class="row align-items-center">

                                                <label for="inputText" class="col-md-2 col-form-label">Price
                                                    per adult:</label>
                                                <div class="col-md-2">
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="col-md-8">
                                                    <p class="m-0">If outbound and
                                                        return flights are priced
                                                        individually, provide the total of
                                                        both prices combined.</p>
                                                </div>

                                            </div>

                                            <div class="row align-items-center">

                                                <label for="inputText" class="col-md-2 col-form-label">Price
                                                    per Child:</label>
                                                <div class="col-md-2">
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="col-md-8">
                                                    <p class="m-0">If outbound and
                                                        return flights are priced
                                                        individually, provide the total of
                                                        both prices combined</p>
                                                </div>

                                            </div>


                                            <div class="row">
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
                                                    <textarea class="form-control"
                                                        placeholder="Add additional costs client should be aware off. Select if the cost is ‘Optional’ or ‘Required’ Add as many additional costs as necessary."
                                                        name="" id=""></textarea>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-md-4 px-0">
                                                    <textarea class="form-control" placeholder="Add any inclusive cost details" name="" id=""></textarea>
                                                </div>
                                                <div class="col-md-2 px-0">
                                                    <textarea class="form-control" placeholder="Optional" name="" id=""></textarea>
                                                </div>
                                                <div class="col-md-1 px-0" style="margin: auto;text-align: center;">
                                                    <button type="button" class="btn btn-primary">+</button>
                                                </div>

                                                <div class="col-md-5 px-0">
                                                    <textarea class="form-control"
                                                        placeholder="Add inclusive costs client should be aware off. These could be a breakdown of costs.included in the ‘Total cost’"
                                                        name="" id=""></textarea>
                                                </div>
                                            </div>


                                            <div class="row py-2">
                                                <div class="col-md-3 px-0">
                                                    <button type="button" class="btn btn-primary">Add another
                                                        Flight</button>
                                                </div>
                                                <div class="col-md-9">
                                                    <p>Use this option to add more fight
                                                        details
                                                        especially if clients have
                                                        connecting
                                                        flights to complete their journey
                                                    </p>
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
                <div class="tab-pane fade show" id="accomodation" role="tabpanel"
                    aria-labelledby="accomodation-tab">
                    Accomodation
                </div>
                <div class="tab-pane fade show" id="transfers" role="tabpanel" aria-labelledby="transfers-tab">
                    Transfers
                </div>
                <div class="tab-pane fade show" id="activities" role="tabpanel" aria-labelledby="activities-tab">
                    Activities
                </div>

                <div class="tab-pane fade show" id="cruise" role="tabpanel" aria-labelledby="cruise-tab">
                    Cruise
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
