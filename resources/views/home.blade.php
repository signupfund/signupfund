@extends('layouts.app')

@section('content') 

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome {{$user->name}}</div>

                @if (Auth()->user()->isSuperUser == 1) 

                <div class="card-header"><br>Congratulations. You are a registrered investor of this site and enjoy all the offerings. <br><br></div>

                @else 

                <div class="card-header"><br>You are currently registered as a small time investor and hence don't have access to this site features. Write to jonasmoeller@gmail.com to fix this. <br><br></div>

                @endif

</div>
</div>
</div>
</div>



                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
