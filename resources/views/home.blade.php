@extends('layouts.app')

@section('content')
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

                <div class="panel-body">
		    {{ Auth::user()->name }}
                    <h2>Stats</h2>
		<ul>
		  <li>Handicap</li>
		  <li>GIR</li>
		  <li>Driving accuracy %</li>
		  <li>Putts per round avg</li>
		</ul>
		<div style="text-align:center">
		  <div class="scoreavg" id="scoreavg"></div>
		  <div class="scoreavg" id="test1"></div>
		</div>
            </div>
        </div>
    </div>
</div>
<script src="/js/progressbar.js"></script>
<script src="/js/test.js"></script>
@endsection
