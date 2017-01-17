@extends('layouts.app')

@section('content')
<style type="text/css">
  .perccon{
    width: 110px;
    height: 110px;
    float:left;
    width:25%;
    text-align: center;

}
.perc{
    top: 20px;
    position: relative;
    font-size: 32px;
    text-align: center;
}

.circle-perc{
    position: relative;
    top: 5px;
    left: 5px;
    text-align: center;
    width: 70px;
    height: 70px;
    border-radius: 100%;
    background-color: #E6F4F7;
}

.active-border{
    position: relative;
    top: 10px;
    left: 30px;
    text-align: center;
    width: 80px;
    height: 80px;
    border-radius: 100%;

    background-color:#39B4CC;
    background-image:
        linear-gradient(162deg, transparent 50%, #A2ECFB 50%),
        linear-gradient(90deg, #A2ECFB 50%, transparent 50%);
    
} 
</style>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Clubhouse
		              <div class="btn-group" style="margin-left:20px">
                    <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Go Golf! <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                      <li><a href="#">New round</a></li>
                      <li><a href="#">List all rounds</a></li>
                    </ul>
                  </div>
		            </div>
              <div class="panel-body">{{ Auth::user()->name }}
                <h3>Stats</h3>
              <div style="text-align: center;">
                <div class="perccon">
                  <h2>2.6</h2>
                  Handicap
                </div>
                <div class="perccon">
                  <h2>50%</h2>
                  Driving Accuracy
                </div>
                <div class="perccon">
                  <h2>80%</h2>
                  Greens in reg.
                </div>
                <div class="perccon">
                  <h2>.223</h2>
                  Putting avg.
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
