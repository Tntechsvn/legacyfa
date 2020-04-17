@extends('master')

@section('content')
<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth step-title">
        <h4>Step 9 - Analysis & Recommendations</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sub-title-step">
        <p class="stlstep">9.1 - Client Overview</p>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ct-page">
        <form name="protection1" id='protection1' class="" method="post" action="" data-parsley-validate>
            @csrf
            <div class="form-group form-layout-row">
                <p>1.) Client’s situation(s), consideration(s), objective(s), concern(s), medical condition(s), shortfall amount ($), where applicable<span>*</span></p>
                <div class="custom-input-layout-row">
                    <textarea  id="client-situation" name="client-situation"  data-parsley-trigger="change" required=""></textarea>
                </div>
            </div>
             <div class="form-group form-layout-row">
                <p>1.) Client's investment objectives, investment time horizon, investment risk profile, where applicable</p>
                <div class="custom-input-layout-row">
                    <textarea  id="investment-objectives" name="investment-objectives"  data-parsley-trigger="change" required=""></textarea>
                </div>
            </div>
            <div class="nav-step">
                <button class="btn btn-primary mb-2 style-button1">Back</button>
                <button type="submit" class="btn btn-primary mb-2 style-button1">Next</button>
            </div>
        </form>      
    </div>
</div>
<div class="bottom-step">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 step-link">
        <ul>
            @if(!isset($infoPfr))
            @else
                @include('pages.navigation', ['id' => $infoPfr->id])
            @endif
        </ul>
    </div>
</div>
@endsection
