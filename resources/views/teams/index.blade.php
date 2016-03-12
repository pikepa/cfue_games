@extends ('layouts.base')

@section('content')

<div class="container">
      <div class="row">
       <div class="col-md-2 " >
        <img style="padding-top:30px" src="http://www.crossfitue.com/uploads/6/8/0/7/68076505/1454397327.png" class="img-responsive " alt="Responsive image">
      </div>
         <div class="col-sm-5 col-md-offset-1 text-center">
              <h1>CFUE Open 2016 </h1>
              <h4 >Team Positions</h4>
        </div>
    </div>
    </div>
  <div class= "col-md-7 col-md-offset-2">


         @foreach ($all_teams as $team)
             <h2>  {{ $team->teamname }} </h2>
             <h4> Average position {{ number_format($team->position,2) }} </h4>

              <div class="table-responsive">
                <table class="table table-condensed">
                  <tr>
                    <th style="width:30%">Name</th>
                    <th>WK01</th>
                    <th>WK02</th>
                    <th>WK03</th>
                    <th>WK04</th>
                    <th>WK05</th>
                  </tr>
                  <tr></tr>
                  <ul>
                     @foreach($team->members as $member)
                    <td> {{ $member->name }} </td>
                    <td> {{ $member->wk01 }} </td>
                    <td> {{ $member->wk02 }} </td>
                    <td> {{ $member->wk03 }} </td>
                    <td> {{ $member->wk04 }} </td>
                    <td> {{ $member->wk05 }} </td>                    
                    </tr>
                    @endforeach
                   </ul>
                </table>
              </div>
          @endforeach
            <h2>This is a test end of listing</h2>
     </div>
</div>
@stop
