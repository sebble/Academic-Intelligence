@extends('app')

@section('content')

<section class="graphs container">

    <div class="row col-lg-12" id="header">
        <div class="col-lg-1"></div>
        <div class="panel panel-info col-lg-7">
            <div class="panel-heading">
                <h2 class="panel-title">Search Parameters</h2>
            </div>
            <div class="panel-body">
                <div id="journalData"></div>
                <div id="keywordData"></div>
                <div id="timescaleData"></div>
            </div>
        </div> <!-- panel panel-info -->

        <div class="dropdown col-lg-2">
            <div class="form-group">
                <label for="select" class="control-label">Change time span:</label>
                <select class="form-control" id="timeSelect">
                    <option value="chart2" selected>User defined</option>
                    <option value="chart4">Last 10 years</option>
                    <option value="chart5">Last 5 years</option>
                    <option value="chart6">Last 2 years</option>
                </select>
            </div>
        </div> <!-- dropdown -->
        <div class="col-lg-2"></div>
    </div> <!-- row -->

    <div class="graph_fields_wrap row backdrop col-lg-12">
            <div class="col-lg-6">
                <h3 class="titles">Ranked Author Citations</h3>
                <h4 class="titles">All time (from 1970)</h4>
                <button class="pager" id="previous1" type="button" disabled><span class="glyphicon glyphicon-chevron-left"></span> previous</button>
                <button class="pager indexer" type="button" disabled>1 - 10</button>
                <button class="pager" id="next1" type="button">next <span class="glyphicon glyphicon-chevron-right"></span></button>
                <div class="chart1 well bs-component"></div>
            </div>
            <div class="col-lg-6">
                <h3 class="titles">Ranked Author Citations</h3>
                <h4 class="titles" id="userTitle"></h4>
                <button class="pager" id="previous2" type="button" disabled><span class="glyphicon glyphicon-chevron-left"></span> previous</button>
                <button class="pager indexer" type="button" disabled>1 - 10</button>
                <button class="pager" id="next2" type="button">next <span class="glyphicon glyphicon-chevron-right"></span></button>
                <div class="chart2 well bs-component"></div>
            </div>
    </div> <!-- row -->

    </br>

    <div class="row col-lg-12">
        <div class="row backdrop col-lg-7" id="impact">
            <h3 class="titles">Weighted Citation Factor</h3>
            <h4 class="titles">Bubble chart</h4>
            <div class="well bs-component" id="rankChart">
                <div class="chart3"></div>
            </div>
        </div> <!-- row -->
        <div class="backdrop col-lg-5" id="algorithm">
            <h3 class="titles">Explanation of Chart</h3>
            <div class="well bs-component">
                <p>The weighted citation factor applies a weighting to citations based on the year of publication. The more recent the citation, the higher the weighting.</p>
                <p>This chart takes into account data for each author from <strong>all</strong> years.  The relative size of the different bubbles  is determined by the variation in weighting.</p>
            </div>
        </div>
    </div> <!-- col-lg-12 -->

    </br>

    <div class="graph_fields_wrap2 row backdrop col-lg-12">
        <div class="col-lg-6">
            <h3 class="titles">Ranked Awarded Funds (£millions)</h3>
            <h4 class="titles">All time, UK only</h4>
            <div class="chart7 well bs-component"></div>
        </div>
        <div class="col-lg-6">
            <h3 class="titles">Ranked Awarded Funds (£millions)</h3>
            <h4 class="titles userTitle">, UK only</h4>
            <div class="chart8 well bs-component"></div>
        </div>
    </div> <!-- row -->

    </br>

    <div class="jumbotron">
        <h1>Information</h1>
        <h3>Bar Charts</h3>
        <h4>Citations: </h4><p>The y-axis represents the number of citations for publications for the author on the x-axis.  Data is collected from Thomson Reuters.</p>
        <p>Hover over the author's name to see their country of residence when they wrote that paper.  This data is taken from the author's most recent publication for this dataset.</p>
        <h4>Funds: </h4><p>The y-axis represents the amount of total funds awarded to the person on the x-axis.  Data is collected from Gateway to Research.</p>
        <h3>Bubble Chart</h3>
        <p>Hover over the bubbles to display the author name.  The larger the bubble, the greater their determined impact rating.</p>
        <h3>Further</h3>
        <p>Click on the author's bar/bubble to perform a search by their name with Google.</p>
        <p>Hover over the author's name to see their country of residence when they wrote that paper.</p>
        <p>Try to find these authors on <a target="_blank" href="https://uk.linkedin.com/">LinkedIn</a> or the <a target="_blank" href="http://gtr.rcuk.ac.uk/" id="mail">Gateway to Research</a> sites.</p>
    </div>

</section>

<!-- local script -->
{!! HTML::script('js/graphs.js') !!}

@stop