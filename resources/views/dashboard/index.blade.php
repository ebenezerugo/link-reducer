@extends('base')

    @section('main')

        <div class="row">
            <div class="col-sm-12">
            @if(session()->get('success'))
                <div class="alert alert-success">
                {{ session()->get('success') }}  
                </div>
            @endif
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <button type="button" class="btn btn-primary btn-lg new-btn" data-toggle="modal" data-target="#newLink">
                    <i class="fas fa-plus"></i> New 
                </button>
            </div>
        </div>

        <div class="row">

            @foreach($links as $link)
                <div class="link-item">
                    <div class="link-item-content">
                        <img src="{{ asset($link->qrCode) }}" class="rounded qr-image float-left" alt="QR Code">
                        <a href="{{ route('destroy',$link->id)}}">
                            <span class="action-icon">
                                <i class="fas fa-trash trash-icon"></i>
                            </span>
                        </a>
                        <a href="{{ route('edit',$link->id)}}">
                            <span class="action-icon">
                                <i class="fas fa-edit edit-icon"></i>
                            </span>
                        </a>

                        <span class="link-information">
                            <p>Name: {{$link->name}}</p>
                            <p>Description: {{$link->description}}</p>
                            <span>Link: {{$link->link}}</span>
                        </span>
                    </div>    
                </div>
            @endforeach

        </div>


        <div class="modal fade" id="newLink" tabindex="-1" role="dialog" aria-labelledby="centerTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="centerTitle">Add a New Link</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div><br />
                        @endif
                    <form class="form" method="POST" action="{{ route('store')}}">
                            @csrf
                        <div class="modal-body">
                        
                            <div class="form-group">
                                <label class="label" for="name">Name</label>
                                <div class="input-group input-group-lg">
                                    <input name="name" type="text" class="form-control input-field" id="name" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="label" for="description">Description</label>
                                <div class="input-group input-group-lg">
                                    <input name="description" type="text" class="form-control input-field" id="description">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="label" for="link">Link</label>
                                <div class="input-group input-group-lg">
                                    <input name="link" type="text" class="form-control input-field" id="link" required>
                                </div>
                            </div>
                       
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary btn-lg">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    @endsection
