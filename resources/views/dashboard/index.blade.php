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
            <div class="link-item">
                <div class="link-item-content">
                    <img src="{{ asset('images/blackberry.svg') }}" class="rounded qr-image float-left" alt="QR Code">
                    <span class="action-icon"><i class="fas fa-trash trash-icon"></i></span>
                    <span class="action-icon"><i class="fas fa-edit edit-icon"></i></span>
                    <span class="link-information">
                        <p>Name: Louis Vuitton</p>
                        <p>Description: A nice bag for moving around</p>
                        <span>Link: https://www.louisvuitton.com</span>
                    </span>
                </div>    
            </div>
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
                    <div class="modal-body">
                        <form class="form">
                            <div class="form-group">
                                <label class="label" for="name">Name</label>
                                <div class="input-group input-group-lg">
                                    <input type="text" class="form-control input-field" id="name">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="label" for="description">Description</label>
                                <div class="input-group input-group-lg">
                                    <input type="text" class="form-control input-field" id="description">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="label" for="link">Link</label>
                                <div class="input-group input-group-lg">
                                    <input type="text" class="form-control input-field" id="link">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                        <button type="button" class="btn btn-primary btn-lg">Save</button>
                    </div>
                </div>
            </div>
        </div>
        
    @endsection
