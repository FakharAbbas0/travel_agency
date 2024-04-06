<div class="col-12">
    <div class="row mb-3 proposal_type_rows" id="proposal_type_1">
        <label for="proposal_type1" class="col-md-4 col-lg-3 col-form-label">(proposal type
            {{ $purposal_type->id }})</label>
        <div class="col-md-8 col-lg-9">
            <fieldset class="row mb-3">

                <legend class="col-form-label col-sm-12 pt-0">
                    {{ $purposal_type->type }}
                </legend>
                <div class="col-sm-12">

                    @php 
                        $sub_options = $purposal_type->proposal_sub_types;
                    @endphp

                    @if($purposal_type->input_type == "radio")

                        @if($sub_options->isNotEmpty())

                            @foreach ($sub_options as $key => $option)
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="option" value="{{ $option->id }}" id="gridRadiosOutbound{{ $option->id }}"
                                        value="outbound">
                                    <label class="form-check-label" for="gridRadiosOutbound{{ $option->id }}">
                                        {{ $option->option }}
                                    </label>
                                </div>
                            @endforeach

                        @endif

                    @elseif($purposal_type->input_type == "select")

                        <legend class="col-form-label col-12 pt-0">
                            <select name="option" class="form-control" id="">
                                @if($sub_options->isNotEmpty())

                                    @foreach ($sub_options as $key => $option)
                                        <option value="{{ $option->id }}">{{ $option->option }}</option>
                                    @endforeach

                                @endif
                            </select>
                        </legend>

                    @endif

 
                </div>
            </fieldset>
        </div>
    </div>
</div>