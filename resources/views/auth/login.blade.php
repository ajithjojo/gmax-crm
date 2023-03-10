<x-guest-layout>

       

    <link href="/dist/css/tabler.min.css" rel="stylesheet"/>
    <link href="/dist/css/demo.min.css" rel="stylesheet"/>
    <body class="antialiased border-top-wide border-primary d-flex flex-column">
        <div class="page page-center">
          <div class="container-tight " style="margin-top:65px;">
            <div class="text-center mb-4">
              <a href="."><img src="/storage/uploads/{{$settings->logo}}" height="36" alt=""></a>
            </div>
            <div class="card">
              <div class="card-body py-4">
                <h2 class="card-title text-center mb-4">{{__('Login_to_your_account')}}</h2>
                
    <x-jet-validation-errors class="mb-4" />

    @if (session('status'))
    <div class="alert alert-info" role="alert">
        <h4 class="alert-title">Notification</h4>
        <div class="text-muted"> {{ session('status') }}.</div>
    </div>
    @endif
               
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                <div class="mb-3">
                  <label class="form-label">{{__('Email_address')}}</label>
                  <x-jet-input id="email" class="block mt-1 w-full" type="email" placeholder="{{__('Email_address')}}" name="email" :value="old('email')" required autofocus />
                </div>
                <div class="mb-2">
                  <label class="form-label">
                    {{__('Password')}}
                    <span class="form-label-description">
                      <a href="{{ route('password.request') }}">{{__('I_forgot_password')}}</a>
                    </span>
                  </label>
                  <div class="input-group input-group-flat">
                    
                    <input type="password" class="form-control"  placeholder="{{__('Password')}}"  name="password"  required autocomplete="current-password">
                    <span class="input-group-text">
                      
                    </span>
                  </div>
                </div>
                <div class="mb-2">
                  <label class="form-check">                   
                    <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                    <span class="form-check-label">{{__('Remember_me_on_this_device')}}</span>
                  </label>
                </div>
                <div class="form-footer">
                  <button type="submit" class="btn btn-primary w-100">{{__('Sign_In')}}</button>
                </div>
              </div>
             
           
            </form>
           
          </div>
          </div>
        </div>
    
</x-guest-layout>
