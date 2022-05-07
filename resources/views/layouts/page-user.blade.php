@extends('layouts.app')

@section('title', 'Index')

@section('content')
       
        {{-- Titulo da pagina --}}
        <div class="app-title">  
            <div>
            <h1><i class="icon fa fa-cog"></i> Definições - Perfil</h1>
            <p>Centro de Saúde - Rio Capitão</p>
            </div>
            <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">Perfil</a></li>
            </ul>
        </div>
        {{-- ========================================================================================================= --}}
        
        {{-- Corpo da pagina --}}

        <div class="row user">
          <div class="col-md-12">
            <div class="profile">
              <div class="info"><img class="user-img" src="img/user.jpg">
                <h4>{{ auth()->user()->name }}</h4>
                <p>
                    @if (auth()->user()->admin === 1)
                        {{ 'Admin' }}
                    @elseif(auth()->user()->admin === 2)
                        {{ 'Medico/a' }}
                    @elseif(auth()->user()->admin === 3)
                        {{ 'Sou cliente' }}
                    @endif
                  </p>
              </div>

              <div class="cover-image"></div>
              
            </div>
          </div>
          <div class="col-md-3">
            <div class="tile p-0">
              <ul class="nav flex-column nav-tabs user-tabs">
                <li class="nav-item"><a class="nav-link active" href="#user-timeline" data-toggle="tab">Eventos</a></li>
                <li class="nav-item"><a class="nav-link" href="#user-settings" data-toggle="tab">Definições</a></li>
              </ul>
            </div>
          </div>

          <div class="col-md-9">
            <div class="tab-content">
              <div class="tab-pane active" id="user-timeline">

                <div class="timeline-post">
                  
                  <div class="post-media">
                    <a href="#"><img src="img/profile.jpg" width="30px" height="30px"></a>
                    <div class="content">
                      <h5><a href="#">John Doe</a></h5>
                      <p class="text-muted"><small>2 January at 9:30</small></p>
                    </div>
                  </div>

                  <div class="post-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,	quis tion ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
                  <ul class="post-utility">
                    <li class="likes"><a href="#"><i class="fa fa-fw fa-lg fa-thumbs-o-up"></i>Like</a></li>
                    <li class="shares"><a href="#"><i class="fa fa-fw fa-lg fa-share"></i>Share</a></li>
                    <li class="comments"><i class="fa fa-fw fa-lg fa-comment-o"></i> 5 Comments</li>
                  </ul>
                </div>
                <div class="timeline-post">
                  <div class="post-media">
                    <a href="#"><img src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg"></a>
                    <div class="content">
                      <h5><a href="#">John Doe</a></h5>
                      <p class="text-muted"><small>2 January at 9:30</small></p>
                    </div>
                  </div>
                  <div class="post-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,	quis tion ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
                  <ul class="post-utility">
                    <li class="likes"><a href="#"><i class="fa fa-fw fa-lg fa-thumbs-o-up"></i>Like</a></li>
                    <li class="shares"><a href="#"><i class="fa fa-fw fa-lg fa-share"></i>Share</a></li>
                    <li class="comments"><i class="fa fa-fw fa-lg fa-comment-o"></i> 5 Comments</li>
                  </ul>
                </div>
              </div>

             {{-- Formulário --}}

              <div class="tab-pane fade" id="user-settings">
                <div class="tile user-settings">
                  <h4 class="line-head">Difinições: alterar meu perfil</h4>

                  <form method="post" action="{{ route('salvar.perfil') }}">
                    
                    @csrf

                    <div class="row mb-4">
                      <div class="col-md-4">
                        <label>Primeiro nome</label>
                        <input class="form-control" name="name" type="text" value="{{ $nome ?? null| old('nome') }}">
                      </div>
                      <div class="col-md-4">
                        <label>Último nome</label>
                        <input class="form-control" name="ultimoNome" type="text">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-8 mb-4">
                        <label>E-mail</label>
                        <input class="form-control" name="email" type="text" value="{{ $email ?? null| old('email') }}">
                      </div>
                      <div class="clearfix"></div>
                      <div class="col-md-8 mb-4">
                        <label>Telemóvel</label>
                        <input class="form-control" name="tel" type="text" value="{{ $tel ?? null| old('tel') }}">
                      </div>

                      <div class="clearfix"></div>
                      <div class="col-md-8 mb-4">
                        <label>Nova senha</label>
                        <input class="form-control" name="password" type="text">
                      </div>

                      <div class="clearfix"></div>
                      <div class="col-md-8 mb-4">
                        <label>Repetir senha</label>
                        <input class="form-control" name="senha2" type="text">
                      </div>

                      <div class="clearfix hiden"></div>
                      <div class="col-md-8 mb-4">
                        <label>Painel</label>
                        <input class="form-control" name="admin" type="text">
                      </div>

                    </div>
                    <div class="row mb-10">
                      <div class="col-md-12">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-lg fa-check-circle"></i> Save</button>
                      </div>
                    </div>
                  </form>


                </div>
              </div>
            </div>
          </div>
        </div>

@endsection
      
    