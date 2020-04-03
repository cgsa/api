@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registrar Tokens Scope') }}</div>

                <div class="card-body">
                
                	<form action="{{ url('/oauth/personal-access-tokens') }}" method="POST">
                		
                		
                		<div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Nombre Cliente') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Nombre" />
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="scope" class="col-md-4 col-form-label text-md-right">{{ __('Scope') }}</label>
                            
                            <div class="checkbox">
                              <label><input type="checkbox" name="scopes[]" value="ar-backend-comopago">ar-backend-comopago</label>
                            </div>
                            <div class="checkbox">
                              <label><input type="checkbox" name="scopes[]" value="ar-client-comopago">ar-client-comopago</label>
                            </div>
                        </div>
                        
                        
                		
                		<div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Crear') }}
                                </button>
                            </div>
                        </div>
                		{{ csrf_field() }}
                	</form>                	
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
