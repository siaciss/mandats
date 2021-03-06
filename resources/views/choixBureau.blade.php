@extends('layoutGestionnaire')

@section('contenu')
</br>
</br>
</br>
<div class="row" style="margin-top: 5%"> 
  <div class="col-3"> </div>  
  <div class="col-6 my-5 mx-5 border" style="border-radius: 10px;">
    <div class="wrap-log mt-3">

      @if(count($errors) > 0)
      <div class="alert alert-danger">
       <!-- Erreur de Validation <br><br>-->
       <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif 

    <!-- message en cas d'erreurs de manipulation de la base -->
    @if($message = Session::get('erreurDB'))
    <div class="alert alert-danger alert-block">
      <button type="button" class="close" data-dismiss="alert">
        x
      </button>
      <strong>{{ $message }}</strong>
    </div>
    @endif

    <!-- message en cas de manipulation de la base reussie -->
    @if($message = Session::get('success'))
    <div class="alert alert-success alert-block">
      <button type="button" class="close" data-dismiss="alert">
        x
      </button>
      <strong>{{ $message }}</strong>
    </div>
    @endif

    <h5><marquee align="center" class="text-secondary text-20 mb-3"> Selectionnez le bureau concerné </marquee></h5>
    
    <form method="POST" class="text-secondary">
      {{csrf_field()}}
      <div class="form-group row">
        <label for="inputBuro" class="col-sm-2 col-form-label ml-5">Bureau</label>
        <div class="col-sm-8">
          <?php $b=Session::get('bureaux'); ?>
          <select name="bureau" class="form-control">
            @foreach($b as $row)
            <option> {{ $row->adresse }} </option>
            @endforeach
          </select>
        </div>
      </div>          

      <div class="form-group row">
        <div class="col-sm-4"></div>
        <div class="col-sm-3">
          <button type="submit" class="btn btn-sm btn-block btn-secondary" style="border-radius: 21px;">Changer</button>
        </div>
      </div>
    </form>

  </div>
</div>
</div> 
@endsection
