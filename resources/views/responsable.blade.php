<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="margin-left:520px;position: relative;bottom: 15px;">
          <i class="fas fa-user" style="right: 6px;position: relative;"></i>{{ __('Responsable Dashboard') }}
        </h2>
        <head>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
            <link rel=stylesheet href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" >
        </head>
        <body style="background-color:floralwhite;" > 
    
            <div class="container d-flex justify-content-center align-items-center" style="min-height: 74.5vh;background-color:white; position: relative;right:390px;bottom: 19px;">
            <form class="border shadow p-3 rounded" style="width: 450px;" method="POST" action="{{route('save')}}">
                
            <h1 class="text-center p-1" style="font-style: italic;"><i class="fas fa-calendar-day"></i> Planning</h1>
            @csrf
          <div class="mb-2">
            <label for="date" class="form-label">Date**</label>
            <input type="date" class="form-control" id="date" name="date" >
          </div>
          <div class="mb-2">
            <label for="time" class="form-label">Start Time**</label>
            <input type="time" id="time" class="form-control" name="Startime" >
          </div>
          <div class="mb-2">
            <label for="time1" class="form-label">End Time**</label>
            <input type="time" id="time1" class="form-control" name="Endtime" >
          </div>
          <div class="mb-2">
            <label for="coach" class="form-label">Coach**</label>
            <input type="text" class="form-control" id="coach" name="coach" >
          </div>
          <div class="d-grid gap-2">
          <button type="submit"   class="btn btn-primary" ><i class="fas fa-plus"style="right: 6px;position: relative;"></i>Créer Cours</button>
        </div>
            </form>
            </div>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="margin-left:690px;position: relative;bottom: 410px;">
              {{ __('List Of Coach : ') }}
            </h2>
        <!-- table Coach -->
        <table class="table table-hover" style="width: 30px;left:860px;position: relative;bottom: 465px;">
          <thead>
              <tr>
              <th scope="col">#</th>
              <th scope="col">NOM</th>
              <th scope="col">PRENOM</th>
              <th scope="col">Phone</th>
              </tr>
          </thead>
          <tbody>
             
            
            
              @foreach ($listuser as $key=>$list)
              <?php  $listuser = DB::table('users')->get()  ?>
              @if($list->role == 'coach')

              
                  <tr>
                  <th scope="row"> {{$list->id}}</th>
                  <td>{{$list->name}}</td>
                  <td>{{$list->pre}}</td>
                  <td>{{$list->tel}}</td>
                  </tr>
              @endif
              @endforeach
              
      
          </tbody>
          </table>
        <!-- End table Coach -->
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="margin-left:690px;position: relative;bottom: 410px;">
          {{ __('List Planning : ') }}

        </h2>
        <!-- table planning -->
        <table class="table table-hover" style="width: 520px;left:520px;position: relative;bottom: 410px;">
          <thead>
              <tr>
              <th scope="col">Date</th>
              <th scope="col">Start Time</th>
              <th scope="col">End Time</th>
              <th scope="col">Coach</th>
              <th scope="col">Action</th>
              </tr>
          </thead>
          <tbody>
             
            
            
              @foreach ($listplanning as $key=>$list)

              
                  <tr>
                  <th scope="row"> {{$list->date}}</th>
                  <td>{{$list->Startime}}</td>
                  <td>{{$list->Endtime}}</td>
                  <td>{{$list->coach}}</td>
                  <td>
                                  
                    <form action="{{ route ('planning.delete',$list->id)}}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger">
                        <i class="fas fa-trash" style="position: relative;right:4px;"></i>Suprimer

                      </button>

                    </form>
                  </td>
                  </tr>
              
              @endforeach
              
      
          </tbody>
          </table>
        <!-- End table plannig -->
        </body>
    
    
</x-slot>
    
</x-app-layout>

