<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="margin-left:520px;position: relative;bottom: 15px;">
            <i class="fas fa-user" style="right: 6px;position: relative;"></i>{{ __('Coach Profil') }}
        </h2>
        <head>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
            <link rel=stylesheet href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" >
        </head>
        <body style="background-color:floralwhite;" >
            <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="color: #4fa1c4 ;font-style:italic;">
                <i class="fas fa-list-ul" style="right: 6px;position: relative;"></i>{{ __('List De Planning: ') }}
              </h2>
            <table class="table table-hover" style="top: 20px;position: relative;">
                <thead>
                    <tr>
                    <th scope="col">Date</th>
                    <th scope="col">Start Time</th>
                    <th scope="col">End Time</th>
                    <th scope="col">Coach</th>
                    </tr>
                </thead>
                <tbody>
                   
                  
                  
                    @foreach ($listplanning as $key=>$list)
      
                    
                        <tr>
                        <th scope="row"> {{$list->date}}</th>
                        <td>{{$list->Startime}}</td>
                        <td>{{$list->Endtime}}</td>
                        <td>{{$list->coach}}</td>
                        </tr>
                    
                    @endforeach
                    
            
                </tbody>
                </table>

        </body>
    </x-slot>
</x-app-layout>
