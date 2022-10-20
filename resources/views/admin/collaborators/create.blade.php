@extends('admin.layout')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 breadcrumb-wrapper mb-4">
            <span class="text-muted fw-light">Collaboratori/</span>
            Crea Nuovo
        </h4>
        <div class="row">
            <div class="card mb-4">
                <form class="card-body">
                    <h6 class="fw-normal">1. Dettagli Collaboratore</h6>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label" for="username">Username</label>
                            <input type="text" id="username" class="form-control" placeholder="john.doe">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="email">Email</label>
                            <div class="input-group input-group-merge">
                                <input type="text" id="email" class="form-control" placeholder="john.doe"
                                    aria-label="john.doe" aria-describedby="email2">
                                <span class="input-group-text" id="email2">@example.com</span>
                            </div>
                        </div>
                    </div>
                    <hr class="my-4 mx-n4">
                    <h6 class="fw-normal">2. Informazioni Personali</h6>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label" for="name">Nome</label>
                            <input type="text" id="name" class="form-control" placeholder="John">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="legalname">Cognome</label>
                            <input type="text" id="legalname" class="form-control" placeholder="Doe">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="birthdate">Data di nascita</label>
                            <input type="date" id="birthdate" class="form-control dob-picker flatpickr-input"
                                placeholder="YYYY-MM-DD">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="sdi">SDI</label>
                            <input type="text" id="sdi" class="form-control" placeholder="M5UXCR1">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="piva">P.IVA</label>
                            <input type="text" id="piva" class="form-control" placeholder="P.IVA">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="cf">Codice Fiscale</label>
                            <input type="text" id="cf" class="form-control" placeholder="12345678910111213141516">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="phone">Telefono Cellulare</label>
                            <input type="text" id="phone" class="form-control phone-mask" placeholder="658 799 8941"
                                aria-label="658 799 8941">
                        </div>
                    </div>
                    <div class="pt-4">
                        <button type="submit" class="btn btn-primary me-sm-3 me-1">Invia</button>
                        <button type="reset" class="btn btn-label-secondary">Cancella</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
